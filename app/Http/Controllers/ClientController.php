<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index(Request $request)
    {
        $perPage = 200;
        $page = (int) $request->query('page', 1);

        $clients = Client::orderBy('name')
            ->paginate($perPage, ['*'], 'page', $page);

        if ($request->ajax() || $request->wantsJson()) {
            return response()->json([
                'html' => view('clients.partials.cards', ['clients' => $clients->items()])->render(),
                'has_more' => $clients->hasMorePages(),
                'next_page' => $clients->currentPage() + 1,
            ]);
        }

        return view('clients', [
            'clients' => $clients->items(),
            'hasMore' => $clients->hasMorePages(),
            'nextPage' => $clients->currentPage() + 1,
        ]);
    }
}
