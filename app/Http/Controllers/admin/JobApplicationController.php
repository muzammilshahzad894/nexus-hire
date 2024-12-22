<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;
use App\Models\JobApplication;
use Exception;

class JobApplicationController extends Controller
{
    public function index(Request $request)
    {
        try {
            $jobApplications = JobApplication::query();
            if (isset($request->title) && !empty($request->title)) {
                $jobApplications = $jobApplications->where('name', 'like', '%' . $request->name . '%');
                $jobApplications = $jobApplications->orWhere('email', 'like', '%' . $request->email . '%');   
            }
            if (isset($request->created_date) && !empty($request->created_date)) {
                $jobApplications = $jobApplications->whereDate('created_at', $request->created_date);
            }
            if (isset($request->sort) && !empty($request->sort)) {
                $jobApplications = $jobApplications->orderBy('created_at', $request->sort);
            } else {
                $jobApplications = $jobApplications->orderBy('created_at', 'asc');
            }
            $jobApplications = $jobApplications->paginate(10);
            return view('admin.job-applications.index', compact('jobApplications'));
        } catch (Exception $e) {
            Log::error(__CLASS__ . '::' . __LINE__ . ' Exception: ' . $e->getMessage());
            return redirect()->back()->with('error', 'Something went wrong');
        }
    }
    
    public function delete($id)
    {
        try {
            JobApplication::find($id)->delete();
            return redirect()->back()->with('success', 'Job application deleted successfully');
        } catch (Exception $e) {
            Log::error(__CLASS__ . '::' . __LINE__ . ' Exception: ' . $e->getMessage());
            return redirect()->back()->with('error', 'Something went wrong');
        }
    }
}