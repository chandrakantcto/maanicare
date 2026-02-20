<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\Admin\ConsultationRequestDataTable;
use App\Http\Controllers\Controller;
use App\Models\ConsultationRequest;

class ConsultationRequestController extends Controller
{
    public function index(ConsultationRequestDataTable $dataTable)
    {
        $dataTableId = $dataTable->dataTableId;
        return $dataTable->render('admin.consultation-requests.index', compact('dataTableId'));
    }

    public function show(ConsultationRequest $consultation_request)
    {
        return view('admin.consultation-requests.show', compact('consultation_request'));
    }

    public function destroy(ConsultationRequest $consultation_request)
    {
        $consultation_request->delete();
        return response()->json(['success' => true, 'message' => 'Consultation request deleted successfully.']);
    }
}
