@extends('layouts.admin.app')

@section('content')
<div class="container-fluid">
    <div class="d-flex flex-column mb-4">
        <div class="d-flex justify-content-between">
            <h3 class="mb-3">Jobs List</h3>
            <a href="{{ route('admin.jobs.create') }}" class="btn btn-primary" style="padding: 12px 28px;">
                <i class="fa fa-plus"></i>
                Add Job
            </a>
        </div>
        <!-- Filters -->
        <div class="filter">
            <form action="{{ route('admin.jobs') }}" method="GET">
                <div class="filters-container">
                    <div class="filter-item">
                        <label for="title">Title</label>
                        <input type="text" name="title" id="title" class="form-control" value="{{ request()->title }}" placeholder="Enter Title">
                    </div>
                    <div class="filter-item">
                        <label for="date">Created Date</label>
                        <input type="date" name="created_date" id="date" class="form-control" value="{{ request()->created_date }}">
                    </div>
                    <div class="filter-item">
                        <label for="status">Status</label>
                        <select name="status" id="status" class="form-control">
                            <option value="" selected>Select Status</option>
                            <option value="active" {{ request()->status == 'active' ? 'selected' : '' }}>Active</option>
                            <option value="inactive" {{ request()->status == 'inactive' ? 'selected' : '' }}>Inactive</option>
                        </select>
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
                    @if(request()->title || request()->created_date || request()->status || request()->sort)
                        <div class="filter-item">
                            <a href="{{ route('admin.jobs') }}" class="btn btn-danger mt-4">
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
                <table class="table display mb-4 dataTablesCard job-table table-responsive-xl card-table" id="example5">
                    <thead>
                        <tr>
                            <th>Title</th>
                            <th>Status</th>
                            <th>Created Date</th>
                            <th>Action </th>
                        </tr>
                    </thead>
                    <tbody>
                        @if($jobs->count() > 0)
                            @foreach($jobs as $job)
                                <tr>
                                    <td>{{ $job->title }}</td>
                                    <td>
                                        @if($job->status == 1)
                                            <span class="badge badge-success">Active</span>
                                        @else
                                            <span class="badge badge-danger">Inactive</span>
                                        @endif
                                    </td>
                                    <td>{{ $job->created_at->format('d M, Y') }}</td>
                                    <td>
                                        <a href="{{ route('admin.jobs.edit', $job->id) }}" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></a>
                                        <a href="{{ route('admin.jobs.delete', $job->id) }}" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure to delete?')"><i class="fas fa-trash"></i></a>
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
            @if($jobs->total() > 10)
                <div class="mt-3">
                    Showing {{ $jobs->firstItem() }} to {{ $jobs->lastItem() }} of {{ $jobs->total() }} entries
                    {{ $jobs->appends(request()->query())->links() }}
                </div>
            @endif
        </div>
    </div>
</div>

@endsection

@section('css')
<style>
    .modal-body {
        padding: 20px;
        background: #000;
    }
    .view_details {
        color: white;
        background: #ff8120;
        border: none;
        padding: 5px 10px;
        border-radius: 10px;
        width: 100%;
        text-align: center;
        cursor: pointer;
    }

    .view_details:hover {
        background: #ff8120;
        color: wheat;
        cursor: pointer;
    }
    .modal {
        background: rgb(0 0 0 / 48%);
    }

    .modal-header {
        background-color: orange;

    }

    #countdown h4 {
        color: orange;
        font-family: cursive;
    }

    #countdown {
        margin-bottom: 20px;
    }

    .coupon-code {
        margin-bottom: 20px;
    }

    .coupon-heading {
        font-size: 18px;
        margin-bottom: 10px;
    }
    .modal_style_p{
        display: none;
    }

    .coupon {
        font-size: 36px;
        color: #f00;
        /* Red color for emphasis */
    }

    .modal-footer {
        /* justify-content: center; */
        padding: 20px;
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
</style>
@endsection