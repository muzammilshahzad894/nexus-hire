@extends('layouts.frontend.app')

@section('css')
<link rel="stylesheet" href="{{ asset('frontend-assets/css/job-listing.css') }}">
@endsection

@section('content')
<div class="container-fluid bg-breadcrumb-service">
    <div class="container text-center py-5" style="max-width: 900px;">
        <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">Available Jobs</h4>
        <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
        </ol>
    </div>
</div>
<div class="container my-5">
    @if($jobs->count() > 0)
    <div class="row job-listing">
        @foreach($jobs as $job)
        <div class="col-md-4 mt-4">
            <div class="card card-custom h-100">
                <div class="card-body bg-white">
                    <h5 class="card-title-custom mb-3">{{ $job->title }}</h5>
                    <div class="card-description mb-4">
                        {!! $job->description !!}
                    </div>
                    <div class="d-flex justify-content-end gap-2">
                        <a href="#" class="btn btn-custom-view btn-sm view-btn" data-job="{{ $job }}">View</a>
                        <a href="#" class="btn btn-custom-apply btn-sm">Apply Now</a>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    @else
    <div class="alert alert-info text-center">
        No Jobs Available
    </div>
    @endif
    @if($jobs->count() > 10)
    <div class="d-flex justify-content-center align-items-center">
        {{ $jobs->links() }}
    </div>
    @endif

    <!-- Job Detail Modal -->
    <div class="modal fade" id="jobDetailModal" tabindex="-1" aria-labelledby="jobDetailModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="jobDetailModalLabel">Job Details</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p id="job-title" class="fw-bold"></p>
                    <div id="job-detais"></div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#applyModal">
                        Apply Now
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Apply Modal -->
    <div class="modal fade" id="applyModal" tabindex="-1" aria-labelledby="applyModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="applyModalLabel">Apply for Job</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="applyForm" action="https://www.nexushire.ca/jobs/apply" method="POST" enctype="multipart/form-data">
                        <input type="hidden" name="_token" value="iNWR3xfvxDYsM6I8oxVU7OsuyHZkgCvJYL2KRTIb" autocomplete="off"> <input type="hidden" id="job_id" name="job_id" value="">
                        <div class="mb-3">
                            <label for="job_role" class="form-label">Job Role</label>
                            <input type="text" id="job_role" name="job_role" class="form-control text-capitalize" value="" readonly>
                        </div>
                        <div class="mb-3">
                            <label for="name" class="form-label">Full Name</label>
                            <input type="text" name="name" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" name="email" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label for="contact" class="form-label">Contact Number</label>
                            <input type="text" name="contact" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label for="job_type" class="form-label">Job Type</label>
                            <select id="job_type" name="job_type" class="form-control" required>
                                <option value="" disabled selected>Select job type</option>
                                <option value="full_time">Full-time</option>
                                <option value="part_time">Part-time</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="shift" class="form-label">Shift</label>
                            <select id="shift" name="shift" class="form-control" required>
                                <option value="" disabled selected>Select shift</option>
                                <option value="weekdays">Weekdays</option>
                                <option value="weekends">Weekends</option>
                                <option value="evening">Evening</option>
                                <option value="overnight">Overnight</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="resume" class="form-label">Upload Resume (Optional) (pdf,doc,docx)</label>
                            <input type="file" name="resume" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="why_work_with_us" class="form-label">Why do you want to work with us? (Optional)</label>
                            <textarea name="why_work_with_us" class="form-control" rows="3"></textarea>
                        </div>
                        <button type="submit" class="btn btn-secondary">Submit Application</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('javascript')
<script>
    $(document).ready(function() {
        // Automatically close the message after 5 seconds
        setTimeout(function() {
            $('#success-message').fadeOut('slow', function() {
                $(this).remove();
            });
        }, 5000); // 5000ms = 5 seconds
    });
</script>
<script>
    $(document).ready(function() {
        // Handle View Button Click
        $(document).on('click', '.view-btn', function() {
            var job = $(this).data("job");
            console.log(job);

            // Set job details in the modal
            $("#job-title").html(job.title);
            $("#job-detais").html(job.description);

            // Show the modal
            $('#jobDetailModal').modal('show');
        });

        // Handle Apply Button Click
        $(document).on('click', '.apply-btn', function() {
            var job = $(this).data("job");

            // Set job_id in the form
            $("#applyForm #job_id").val(job.id);
            $("#applyForm #job_role").val(job.job_role);

        });
    });
</script>
@endsection