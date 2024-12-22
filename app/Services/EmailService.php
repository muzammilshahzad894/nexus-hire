<?php

namespace App\Services;

use Illuminate\Support\Facades\Mail;
use App\Mail\JobApplicationMail;
use App\Mail\JobApplicationMailAdmin;
use App\Models\JobApplication;

class EmailService
{
    public function sendJobApplication($applicationId)
    {
        $applicationDetails = JobApplication::find($applicationId);
        $jobDetails = $applicationDetails->job;
        $data = [
            'name' => @$applicationDetails->name,
            'email' => $applicationDetails->email,
            'contact' => @$applicationDetails->contact,
            'user_message' => @$applicationDetails->message ?? 'N/A',
            'resumeUrl' => url('uploads/resumes/' . @$applicationDetails->resume),
            'jobTitle' => @$jobDetails->title,
        ];
        
        Mail::to($data['email'])->send(new JobApplicationMail($data));
        
        Mail::to(env('MAIL_FROM_ADDRESS'))->send(new JobApplicationMailAdmin($data));
    }
}