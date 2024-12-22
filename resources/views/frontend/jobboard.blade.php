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
    <div class="job-listing">
        @if($jobs->count() > 0)
        <div class="row">
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
                            <a href="#" class="btn btn-custom-apply btn-sm apply-btn" data-job="{{ $job }}">Apply Now</a>
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
        @if($jobs->total() > 12)
            <div class="mt-4">
                Showing {{ $jobs->firstItem() }} to {{ $jobs->lastItem() }} of {{ $jobs->total() }} entries
                {{ $jobs->links() }}
            </div>
        @endif
    </div>

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
                    <button type="button" class="btn btn-primary apply-btn" data-job="{{ $job }}" id="apply-btn-modal">
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
                    <form id="applyForm" action="{{ route('frontend.job.apply') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" id="job_id" name="job_id" value="">
                        <div class="mb-3">
                            <label for="job_title" class="form-label">Job Role</label>
                            <input type="text" id="job_title" name="job_title" class="form-control text-capitalize" value="" readonly>
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
                            <label for="resume" class="form-label">Upload Resume (pdf,doc,docx)</label>
                            <input type="file" name="resume" class="form-control" accept=".pdf,.doc,.docx" required>
                        </div>
                        <div class="mb-3">
                            <label for="message" class="form-label">Why do you want to work with us? (Optional)</label>
                            <textarea name="message" class="form-control" rows="3"></textarea>
                        </div>
                        <div class="alert alert-danger alert-dismissible fade show" style="display: none;" id="error-section">
                            <ul id="error-list"></ul>
                            <button type="button" class="btn-close" onclick="$('#error-section').hide()"></button>
                        </div>
                        <div class="alert alert-success alert-dismissible fade show" style="display: none;" id="success-section">
                            <span id="success-list"></span>
                            <button type="button" class="btn-close" onclick="$('#success-section').hide()"></button>
                        </div>
                        <button type="submit" class="btn btn-secondary" id="submit-application-btn">Submit Application</button>
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
        $(document).on('click', '.view-btn', function() {
            var job = $(this).data("job");

            $("#job-title").html(job.title);
            $("#job-detais").html(job.description);
            
            $("#apply-btn-modal").data("job", job);
            $('#jobDetailModal').modal('show');
        });

        // Handle Apply Button Click
        $(document).on('click', '.apply-btn', function() {
            var job = $(this).data("job");

            $("#applyForm #job_id").val(job.id);
            $("#applyForm #job_title").val(job.title);
            
            if ($('#jobDetailModal').hasClass('show')) {
                $('#jobDetailModal').modal('hide');
                
                setTimeout(function () {
                    $('#applyModal').modal('show');
                    hideMessageSections();
                }, 500);
            } else {
                $('#applyModal').modal('show');
                hideMessageSections();
            }
        });
        
        function hideMessageSections() {
            $('#success-list').html('');
            $('#error-list').html('');
            $('#success-section').hide();
            $('#error-section').hide();
        }
        
        // when applyForm is submitted then prevent the default form submission and submit the form using ajax and show the response
        $('#applyForm').submit(function(e) {
            e.preventDefault();
            var formData = new FormData(this);
            $('#submit-application-btn').html('Submitting...').attr('disabled', true);
            $.ajax({
                url: $(this).attr('action'),
                type: 'POST',
                data: formData,
                success: function(response) {
                    $('#success-list').html(response.message);
                    $('#success-section').show();
                    $('#submit-application-btn').html('Submit Application').attr('disabled', false);
                    $('#applyForm')[0].reset();
                },
                error: function(response) {
                    var errors = response.responseJSON.errors;
                    var errorList = '';
                    $.each(errors, function(key, value) {
                        errorList += '<li>' + value + '</li>';
                    });
                    $('#error-list').html(errorList);
                    $('#error-section').show();
                    $('#submit-application-btn').html('Submit Application').attr('disabled', false);
                },
                cache: false,
                contentType: false,
                processData: false
            });
        });
    });
</script>
@endsection