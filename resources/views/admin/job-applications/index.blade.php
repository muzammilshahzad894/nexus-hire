@extends('layouts.admin.app')

@section('content')
<div class="container-fluid">
    <div class="d-flex flex-column mb-4">
        <div class="d-flex justify-content-between">
            <h3 class="mb-3">Jobs Applications List</h3>
        </div>
        <!-- Filters -->
        <div class="filter">
            <form action="{{ route('admin.job-applications') }}" method="GET">
                <div class="filters-container">
                    <div class="filter-item">
                        <label for="title">Name | Email</label>
                        <input type="text" name="title" id="title" class="form-control" value="{{ request()->title }}" placeholder="Search Name or Email">
                    </div>
                    <div class="filter-item">
                        <label for="date">Created Date</label>
                        <input type="date" name="created_date" id="date" class="form-control" value="{{ request()->created_date }}">
                    </div>
                    <div class="filter-item">
                        <label for="sort">Sort</label>
                        <select name="sort" id="sort" class="form-control">
                            <option value="asc" {{ request()->sort != 'desc' ? 'selected' : '' }}>Ascending</option>
                            <option value="desc" {{ request()->sort == 'desc' ? 'selected' : '' }}>Descending</option>
                        </select>
                    </div>
                    <div class="filter-item">
                        <button type="submit" class="btn btn-primary mt-4">
                            <i class="fa fa-search"></i>
                            Search
                        </button>
                    </div>
                    @if(request()->name || request()->created_date || request()->sort)
                        <div class="filter-item">
                            <a href="{{ route('admin.job-applications') }}" class="btn btn-danger mt-4">
                                <i class="fa fa-times"></i>
                                Clear
                            </a>
                        </div>
                    @endif
                </div>
            </form>
        </div>
    </div>
    <div class="row">
        @include('partials.messages')
        <div class="col-xl-12">
            <div class="table-responsive">
                <table class="table display mb-4 dataTablesCard job-table table-responsive-xl card-table">
                    <thead>
                        <tr>
                            <th>Job Title</th>
                            <th>User Name</th>
                            <th>User Email</th>
                            <th>Created Date</th>
                            <th>Action </th>
                        </tr>
                    </thead>
                    <tbody>
                        @if($jobApplications->count() > 0)
                            @foreach($jobApplications as $application)
                                <tr>
                                    <td>
                                        <a href="{{ route('admin.jobs.edit', $application->job_id) }}">
                                            {{ strlen(@$application->job->title) > 50 ? substr(@$application->job->title, 0, 50) . '...' : @$application->job->title }}
                                        </a>
                                    </td>
                                    <td>{{ $application->name }}</td>
                                    <td>{{ $application->email }}</td>
                                    <td>{{ $application->created_at->format('d M, Y') }}</td>
                                    <td>
                                        <a href="#" class="btn btn-primary btn-sm view-details-btn" data-job-application="{{ $application }}" data-resume-link="{{ asset('uploads/resumes') }}/{{ $application->resume }}"><i class="fas fa-eye"></i></a>
                                        <a href="{{ route('admin.job-application.delete', $application->id) }}" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure to delete?')"><i class="fas fa-trash"></i></a>
                                    </td>
                                </tr>
                            @endforeach
                        @else
                            <tr>
                                <td colspan="10" class="text-center">No Records Found</td>
                            </tr>
                        @endif
                    </tbody>
                </table>
            </div>
            @if($jobApplications->total() > 10)
                <div class="mt-3">
                    Showing {{ $jobApplications->firstItem() }} to {{ $jobApplications->lastItem() }} of {{ $jobApplications->total() }} entries
                    {{ $jobApplications->appends(request()->query())->links() }}
                </div>
            @endif
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="applicantModal" tabindex="-1" aria-labelledby="applicantModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <!-- Modal Header -->
      <div class="modal-header bg-primary text-white">
        <h5 class="modal-title" id="applicantModalLabel">Applicant Details</h5>
        <button type="button" class="btn-close text-white" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      
      <!-- Modal Body -->
      <div class="modal-body">
        <div class="container">
          <!-- Name -->
          <div class="row mb-3">
            <div class="col-sm-4 fw-bold">Name:</div>
            <div class="col-sm-8" id="applicantName">John Doe</div>
          </div>
          
          <!-- Email -->
          <div class="row mb-3">
            <div class="col-sm-4 fw-bold">Email:</div>
            <div class="col-sm-8" id="applicantEmail">johndoe@example.com</div>
          </div>
          
          <!-- Phone -->
          <div class="row mb-3">
            <div class="col-sm-4 fw-bold">Phone:</div>
            <div class="col-sm-8" id="applicantPhone">+123-456-7890</div>
          </div>
          
          <!-- Message -->
          <div class="row mb-3">
            <div class="col-sm-4 fw-bold">Message:</div>
            <div class="col-sm-8" id="applicantMessage">This is a sample message.</div>
          </div>
          
          <!-- Resume Download -->
          <div class="row mb-3">
            <div class="col-sm-4 fw-bold">Resume:</div>
            <div class="col-sm-8">
              <a href="#" id="downloadResume" class="btn btn-outline-primary btn-sm" download>
                <i class="bi bi-download"></i> Download Resume
              </a>
            </div>
          </div>
        </div>
      </div>

      <!-- Modal Footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>


@endsection

@section('css')
<style>
    .modal-body {
        padding: 20px;
    }
    .modal {
        background: rgb(0 0 0 / 48%);
    }

    .modal-header {
        background-color: orange;

    }
    
    .modal_style_p{
        display: none;
    }

    .filters-container {
        display: flex;
        flex-wrap: wrap;
        gap: 10px;
    }

    .filter-item {
        flex: 0 0 150px;
    }

    .filter-item label {
        display: block;
        margin-bottom: 5px;
    }

    .filter-item input,
    .filter-item select {
        width: 100%;
    }

    .filter-item button {
        width: 100%;
    }

    @media (max-width: 350px) {
        .filter-item {
            flex: 1 1 100%;
        }

        .filter-item button {
            margin-top: 10px;
        }
    }
    
    a {
        color: var(--bs-link-color);
    }
    
    a:hover {
        color: var(--bs-link-color);
        text-decoration: underline;
    }
</style>
@endsection

@section('javascript')
<script>
    $(document).ready(function() {
        $('.view-details-btn').on('click', function() {
            var jobApplication = $(this).data('job-application');
            $('#applicantName').text(jobApplication.name);
            $('#applicantEmail').text(jobApplication.email);
            $('#applicantPhone').text(jobApplication.phone);
            $('#applicantMessage').text(jobApplication.message ? jobApplication.message : 'N/A');
            $('#downloadResume').attr('href', $(this).data('resume-link'));
            $('#applicantModal').modal('show');
        });
    });
</script>
@endsection