<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OurStoryController extends Controller
{
    public function index()
    {
        return view('our-story');
    }
}
