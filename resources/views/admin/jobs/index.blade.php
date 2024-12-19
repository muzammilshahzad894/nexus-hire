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
                        <input type="text" name="title" id="title" class="form-control" value="{{ request()->title }}">
                    </div>
                    <div class="filter-item">
                        <label for="date">Created Date</label>
                        <input type="date" name="created_date" id="date" class="form-control" value="{{ request()->created_date }}">
                    </div>
                    <div class="filter-item">
                        <label for="status">Status</label>
                        <select name="status" id="status" class="form-control">
                            <option value="" selected>Select Status</option>
                            <option value="1" {{ request()->status == '1' ? 'selected' : '' }}>Active</option>
                            <option value="0" {{ request()->status == '0' ? 'selected' : '' }}>Inactive</option>
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
                        <button type="submit" class="btn btn-primary mt-4">Filter</button>
                    </div>
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
                            <th>Action </th>
                        </tr>
                    </thead>
                    <tbody>
                        @if($jobs->count() > 0)
                            @foreach($jobs  as $job)
                                <tr>
                                    <td>{{ @$jobs->title }}</td>
                                    <td>
                                        @if($jobs->status == 1)
                                            <span class="badge badge-success">Active</span>
                                        @else
                                            <span class="badge badge-danger">Inactive</span>
                                        @endif
                                    </td>
                                    <td>
                                        <a href="{{ route('admin.jobs.edit', $jobs->id) }}" class="btn btn-primary btn-sm">Edit</a>
                                        <a href="{{ route('admin.jobs.destroy', $jobs->id) }}" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure to delete?')"><i class="fas fa-trash"></i></a>
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
            <div class="d-flex justify-content-center mt-3">
                {{ $jobs->links() }}
            </div>
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