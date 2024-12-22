<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobApplication extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'job_id',
        'name',
        'email',
        'contact',
        'message',
        'resume',
    ];
    
    /**
     * Get the job that owns the job application.
     */
    public function job()
    {
        return $this->belongsTo(Job::class);
    }
}