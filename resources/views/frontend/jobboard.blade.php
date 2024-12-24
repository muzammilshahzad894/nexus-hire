@extends('layouts.frontend.app')

@section('css')
<link rel="stylesheet" href="{{ asset('frontend-assets/css/job-listing.css') }}">
@endsection

@section('content')
<!-- Page Title Start -->
<section class="page-title title-bg1">
    <div class="d-table">
        <div class="d-table-cell">
            <h2>Job List</h2>
            <ul>
                <li>
                    <a href="index.html">Home</a>
                </li>
                <li>Job List</li>
            </ul>
        </div>
    </div>
    <div class="lines">
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
    </div>
</section>
<!-- Page Title End -->

<!-- Jobs Section Start -->
<div class="container py-5">        
    <div class="job-listing">
        @if($jobs->count() > 0)
        <div class="row">
            @foreach($jobs as $job)
            <div class="col-md-6 mt-4">
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
</div>
<!-- Jobs Section End -->
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

                setTimeout(function() {
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
            $('#submit-application-btn').html(`
                <span class="spinner-border spinner-border-sm me-2" role="status" aria-hidden="true"></span>
                Submitting...
            `).attr('disabled', true);
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