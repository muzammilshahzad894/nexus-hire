<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Support\Facades\Log;
use Exception;
use App\Http\Controllers\Controller;
use App\Models\Job;

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
        try {
            $jobs = Job::where('status', '1')->paginate(10);
            return view('frontend.jobboard', compact('jobs'));
        } catch (Exception $e) {
            Log::error(__CLASS__ . '::' . __LINE__ . ' Exception: ' . $e->getMessage());
            return redirect()->back()->with('error', 'Something went wrong');
        }
    }
}