<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;

class FrontendController extends Controller
{
    public function index()
    {
        return view('frontend.index');
    }
    
    public function about()
    {
        return view('frontend.about');
    }
    
    public function contact()
    {
        return view('frontend.contact');
    }
    
    public function jobboard()
    {
        return view('frontend.jobboard');
    }
}