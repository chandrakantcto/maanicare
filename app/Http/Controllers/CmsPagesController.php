<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CmsPagesController extends Controller
{
    public function disclaimerPage()
    {
        return view('cms.disclaimer');
    }
    public function privacyPolicyPage()
    {
        return view('cms.privacy-policy');
    }
    public function termsAndConditionsPage()
    {
        return view('cms.terms-and-conditions');
    }
}
