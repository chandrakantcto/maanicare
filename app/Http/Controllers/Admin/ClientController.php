<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\Admin\ClientDataTable;
use App\Http\Controllers\Controller;
use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;
use Illuminate\Http\UploadedFile;

class ClientController extends Controller
{
    public function index(ClientDataTable $dataTable)
    {
        $dataTableId = $dataTable->dataTableId;
        return $dataTable->render('admin.clients.index', compact('dataTableId'));
    }

    public function create()
    {
        return view('admin.clients.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name'  => ['required', 'string', 'max:255'],
            'image' => ['nullable', 'image', 'max:2048'],
        ]);

        $validated['slug'] = $this->uniqueSlug(Str::slug($validated['name']));

        if ($request->hasFile('image')) {
            $validated['image'] = $this->storeClientImage($request->file('image'));
        }

        Client::create($validated);
        return redirect()->route('admin.clients.index')->with('success', 'Client created successfully.');
    }

    public function show(Client $client)
    {
        return view('admin.clients.show', compact('client'));
    }

    public function edit(Client $client)
    {
        return view('admin.clients.edit', compact('client'));
    }

    public function update(Request $request, Client $client)
    {
        $validated = $request->validate([
            'name'  => ['required', 'string', 'max:255'],
            'image' => ['nullable', 'image', 'max:2048'],
        ]);

        $validated['slug'] = $this->uniqueSlug(Str::slug($validated['name']), $client->id);

        if ($request->hasFile('image')) {
            $this->deleteClientImage($client->image);
            $validated['image'] = $this->storeClientImage($request->file('image'));
        }

        $client->update($validated);
        return redirect()->route('admin.clients.index')->with('success', 'Client updated successfully.');
    }

    public function destroy(Client $client)
    {
        $this->deleteClientImage($client->image);
        $client->delete();
        return response()->json(['success' => true, 'message' => 'Client deleted successfully.']);
    }

    private function storeClientImage(UploadedFile $file): string
    {
        $dir = public_path('storage/clients');
        File::ensureDirectoryExists($dir);
        $name = $file->hashName();
        $file->move($dir, $name);
        return 'clients/' . $name;
    }

    private function deleteClientImage(?string $path): void
    {
        if (empty($path)) {
            return;
        }
        $fullPath = public_path('storage/' . $path);
        if (File::isFile($fullPath)) {
            File::delete($fullPath);
        }
    }

    private function uniqueSlug(string $base, ?int $excludeId = null): string
    {
        $slug = $base;
        $query = Client::where('slug', $slug);
        if ($excludeId !== null) {
            $query->where('id', '!=', $excludeId);
        }
        $count = 0;
        while ($query->exists()) {
            $count++;
            $slug = $base . '-' . $count;
            $query = Client::where('slug', $slug);
            if ($excludeId !== null) {
                $query->where('id', '!=', $excludeId);
            }
        }
        return $slug;
    }
}
