@extends('layouts.admin')

@section('content')
<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Counselor Details</h1>
        <div>
            <a href="{{ route('admin.counselors.edit', $counselor->id) }}" class="btn btn-primary">
                <i class="fas fa-edit"></i> Edit
            </a>
            <a href="{{ route('admin.counselors.index') }}" class="btn btn-secondary">
                <i class="fas fa-arrow-left"></i> Back to List
            </a>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">{{ $counselor->name }}</h6>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4">
                            @if($counselor->image)
                                <img src="{{ asset('storage/' . $counselor->image) }}" alt="{{ $counselor->name }}" class="img-fluid rounded">
                            @else
                                <div class="text-center p-5 bg-light">
                                    <i class="fas fa-user fa-4x text-gray-300"></i>
                                    <p class="mt-2">No image available</p>
                                </div>
                            @endif
                        </div>
                        <div class="col-md-8">
                            <table class="table">
                                <tr>
                                    <th width="150">Name</th>
                                    <td>{{ $counselor->name }}</td>
                                </tr>
                                <tr>
                                    <th>Title</th>
                                    <td>{{ $counselor->title }}</td>
                                </tr>
                                <tr>
                                    <th>Specialty</th>
                                    <td>{{ $counselor->specialty }}</td>
                                </tr>
                                <tr>
                                    <th>Description</th>
                                    <td>{{ $counselor->description }}</td>
                                </tr>
                                <tr>
                                    <th>Status</th>
                                    <td>
                                        @if($counselor->is_active)
                                            <span class="badge badge-success">Active</span>
                                        @else
                                            <span class="badge badge-danger">Inactive</span>
                                        @endif
                                    </td>
                                </tr>
                                <tr>
                                    <th>Created At</th>
                                    <td>{{ $counselor->created_at->format('F d, Y h:i A') }}</td>
                                </tr>
                                <tr>
                                    <th>Last Updated</th>
                                    <td>{{ $counselor->updated_at->format('F d, Y h:i A') }}</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection