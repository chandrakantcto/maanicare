<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

class ServiveController extends Controller
{

    public function index()
    {
        return view('services.index');
    }

    public function projectAndFitOut()
    {
        return view('services.project-and-fit-out');
    }

    public function integratedFacilityManagement()
    {
            
        return view('services.integrated-facility-management');
    }
    
    public function staffingPayrollAndCompliance()
    {
        
        $paperBlogs = Blog::query()
            ->where('status', 'Active')
            ->whereNotNull('published_at')
            ->where('published_at', '<=', now())
            ->with('category')
            ->orderByDesc('published_at')
            ->limit(6)
            ->get();

        return view('services.staffing-payroll-and-compliance',compact('paperBlogs'));
    }

    public function onDemand()
    {
        return view('services.on-demand');
    }
}
