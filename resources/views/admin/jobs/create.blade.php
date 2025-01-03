@extends('layouts.admin.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        @include('partials.messages')
        <div class="col-xl-12 col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Add Job</h4>
                </div>
                <div class="card-body">
                    <div class="basic-form">
                        <form action="{{ route('admin.jobs.store') }}" method="POST" onsubmit="document.getElementById('submit-btn').disabled = true; document.getElementById('submit-btn').innerHTML = 'Creating...';">
                            @csrf
                            @include('admin.jobs._partials.form')
                            <button type="submit" class="btn btn-primary" id="submit-btn">Create</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection