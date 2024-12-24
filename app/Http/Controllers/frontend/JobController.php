<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Support\Facades\Log;
use Exception;
use App\Http\Controllers\Controller;
use App\Models\JobApplication;
use App\Http\Requests\JobApplicationRequest;
use App\Services\EmailService;

class JobController extends Controller
{
    private $emailService;
    public function __construct(EmailService $emailService)
    {
        $this->emailService = $emailService;
    }
    
    public function apply(JobApplicationRequest $request)
    {
        try {
            $data = $request->validated();
            $resume = $request->file('resume');
            $resume_name = pathinfo($resume->getClientOriginalName(), PATHINFO_FILENAME) . '-' . time() . '.' . $resume->getClientOriginalExtension();
            $resume->move(public_path('uploads/resumes'), $resume_name);
            $data['resume'] = $resume_name;
            $application = JobApplication::create($data);
            
            try {
                $this->emailService->sendJobApplication($application->id);
            } catch (Exception $e) {
                Log::error(__CLASS__ . '::' . __LINE__ . ' Exception: ' . $e->getMessage());
            }
            
            return response()->json(['success' => true, 'message' => 'Job application submitted successfully, we will review your application and get back to you soon.']);
        } catch (Exception $e) {
            Log::error(__CLASS__ . '::' . __LINE__ . ' Exception: ' . $e->getMessage());
            return response()->json(['success' => false, 'message' => 'Something went wrong, please try again']);
        }
    }
}