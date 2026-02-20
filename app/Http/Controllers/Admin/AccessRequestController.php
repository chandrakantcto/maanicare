<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\Admin\AccessRequestDataTable;
use App\Http\Controllers\Controller;
use App\Models\AccessRequest;

class AccessRequestController extends Controller
{
    public function index(AccessRequestDataTable $dataTable)
    {
        $dataTableId = $dataTable->dataTableId;
        return $dataTable->render('admin.access-requests.index', compact('dataTableId'));
    }

    public function show(AccessRequest $access_request)
    {
        $sameEmailRequests = AccessRequest::where('email', $access_request->email)
            ->orderBy('created_at', 'desc')
            ->get();
        $samePhoneRequests = AccessRequest::where('phone', $access_request->phone)
            ->orderBy('created_at', 'desc')
            ->get();

        return view('admin.access-requests.show', [
            'access_request' => $access_request,
            'sameEmailRequests' => $sameEmailRequests,
            'samePhoneRequests' => $samePhoneRequests,
        ]);
    }

    public function destroy(AccessRequest $access_request)
    {
        $access_request->delete();
        return response()->json(['success' => true, 'message' => 'Access request deleted successfully.']);
    }
}
