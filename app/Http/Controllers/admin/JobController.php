<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;
use App\Http\Requests\JobRequest;
use App\Models\Job;
use Exception;

class JobController extends Controller
{
    public function index(Request $request)
    {
        try {
            $jobs = Job::query();
            if (isset($request->title) && !empty($request->title)) {
                $jobs = $jobs->where('title', 'like', '%' . $request->title . '%');
            }
            if (isset($request->created_date) && !empty($request->created_date)) {
                $jobs = $jobs->whereDate('created_at', $request->created_date);
            }
            if (isset($request->status) && !empty($request->status)) {
                if($request->status == 'active') {
                    $jobs = $jobs->where('status', 1);
                } else {
                    $jobs = $jobs->where('status', 0);
                }
            }
            if (isset($request->sort) && !empty($request->sort)) {
                $jobs = $jobs->orderBy('created_at', $request->sort);
            } else {
                $jobs = $jobs->orderBy('created_at', 'asc');
            }
            $jobs = $jobs->paginate(10);
            return view('admin.jobs.index', compact('jobs'));
        } catch (Exception $e) {
            Log::error(__CLASS__ . '::' . __LINE__ . ' Exception: ' . $e->getMessage());
            return redirect()->back()->with('error', 'Something went wrong');
        }
    }
    
    public function create()
    {
        return view('admin.jobs.create');
    }
    
    public function store(JobRequest $request)
    {
        try {
            $data = $request->validated();
            Job::create($data);
            return redirect()->route('admin.jobs')->with('success', 'Job created successfully');
        } catch (Exception $e) {
            Log::error(__CLASS__ . '::' . __LINE__ . ' Exception: ' . $e->getMessage());
            return redirect()->back()->with('error', 'Something went wrong');
        }
    }
    
    public function edit($id)
    {
        try {
            $job = Job::find($id);
            return view('admin.jobs.edit', compact('job'));
        } catch (Exception $e) {
            Log::error(__CLASS__ . '::' . __LINE__ . ' Exception: ' . $e->getMessage());
            return redirect()->back()->with('error', 'Something went wrong');
        }
    }
    
    public function update(JobRequest $request, $id)
    {
        try {
            $data = $request->validated();
            $job = Job::find($id);
            $job->update($data);
            return redirect()->route('admin.jobs')->with('success', 'Job updated successfully');
        } catch (Exception $e) {
            Log::error(__CLASS__ . '::' . __LINE__ . ' Exception: ' . $e->getMessage());
            return redirect()->back()->with('error', 'Something went wrong');
        }
    }
    
    public function delete($id)
    {
        try {
            $job = Job::findOrfail($id);
            $job->delete();
            return redirect()->route('admin.jobs')->with('success', 'Job deleted successfully');
        } catch (Exception $e) {
            Log::error(__CLASS__ . '::' . __LINE__ . ' Exception: ' . $e->getMessage());
            return redirect()->back()->with('error', 'Something went wrong');
        }
    }
}