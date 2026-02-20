<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\Admin\NewsletterSubscriberDataTable;
use App\Http\Controllers\Controller;
use App\Models\NewsletterSubscriber;

class NewsletterSubscriberController extends Controller
{
    public function index(NewsletterSubscriberDataTable $dataTable)
    {
        $dataTableId = $dataTable->dataTableId;
        return $dataTable->render('admin.newsletter-subscribers.index', compact('dataTableId'));
    }

    public function show(NewsletterSubscriber $newsletter_subscriber)
    {
        return view('admin.newsletter-subscribers.show', compact('newsletter_subscriber'));
    }

    public function destroy(NewsletterSubscriber $newsletter_subscriber)
    {
        $newsletter_subscriber->delete();
        return response()->json(['success' => true, 'message' => 'Newsletter subscriber deleted successfully.']);
    }
}
