<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\Admin\ContactEnquiryDataTable;
use App\Http\Controllers\Controller;
use App\Models\ContactEnquiry;

class ContactEnquiryController extends Controller
{
    public function index(ContactEnquiryDataTable $dataTable)
    {
        $dataTableId = $dataTable->dataTableId;
        return $dataTable->render('admin.contact-enquiries.index', compact('dataTableId'));
    }

    public function show(ContactEnquiry $contact_enquiry)
    {
        return view('admin.contact-enquiries.show', compact('contact_enquiry'));
    }

    public function destroy(ContactEnquiry $contact_enquiry)
    {
        $contact_enquiry->delete();
        return response()->json(['success' => true, 'message' => 'Contact enquiry deleted successfully.']);
    }
}
