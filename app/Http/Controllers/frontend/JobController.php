<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Support\Facades\Log;
use Exception;
use App\Http\Controllers\Controller;
use App\Models\JobApplication;
use App\Http\Requests\JobApplicationRequest;

class JobController extends Controller
{
    public function apply(JobApplicationRequest $request)
    {
        try {
            $data = $request->validated();
            $resume = $request->file('resume');
            $resume_name = pathinfo($resume->getClientOriginalName(), PATHINFO_FILENAME) . '-' . time() . '.' . $resume->getClientOriginalExtension();
            $resume->move(public_path('uploads/resumes'), $resume_name);
            $data['resume'] = $resume_name;
            JobApplication::create($data);
            return response()->json(['success' => true, 'message' => 'Job application submitted successfully, we will review your application and get back to you soon.']);
        } catch (Exception $e) {
            Log::error(__CLASS__ . '::' . __LINE__ . ' Exception: ' . $e->getMessage());
            return response()->json(['success' => false, 'message' => 'Something went wrong, please try again']);
        }
    }
}