@extends('layouts.admin')

@section('content')
<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Edit Counselor</h1>
        <a href="{{ route('admin.counselors.index') }}" class="btn btn-secondary">
            <i class="fas fa-arrow-left"></i> Back to List
        </a>
    </div>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Counselor Information</h6>
        </div>
        <div class="card-body">
            <form action="{{ route('admin.counselors.update', $counselor->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                
                <div class="form-group">
                    <label for="name">Name <span class="text-danger">*</span></label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name', $counselor->name) }}" required>
                    @error('name')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                
                <div class="form-group">
                    <label for="title">Title <span class="text-danger">*</span></label>
                    <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{ old('title', $counselor->title) }}" required>
                    @error('title')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                
                <div class="form-group">
                    <label for="specialty">Specialty <span class="text-danger">*</span></label>
                    <input type="text" class="form-control @error('specialty') is-invalid @enderror" id="specialty" name="specialty" value="{{ old('specialty', $counselor->specialty) }}" required>
                    @error('specialty')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                
                <div class="form-group">
                    <label for="description">Description <span class="text-danger">*</span></label>
                    <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description" rows="5" required>{{ old('description', $counselor->description) }}</textarea>
                    @error('description')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                
                <div class="form-group">
                    <label for="image">Image</label>
                    @if($counselor->image)
                        <div class="mb-2">
                            <img src="{{ asset('storage/' . $counselor->image) }}" alt="{{ $counselor->name }}" width="100">
                            <p class="small mt-1">Current image</p>
                        </div>
                    @endif
                    <input type="file" class="form-control-file @error('image') is-invalid @enderror" id="image" name="image">
                    <small class="form-text text-muted">Recommended size: 400x400 pixels (JPG, PNG, GIF). Leave empty to keep current image.</small>
                    @error('image')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                
                <div class="form-group">
                    <div class="custom-control custom-switch">
                        <input type="checkbox" class="custom-control-input" id="is_active" name="is_active" value="1" {{ old('is_active', $counselor->is_active) ? 'checked' : '' }}>
                        <label class="custom-control-label" for="is_active">Active Status</label>
                    </div>
                </div>
                
                <button type="submit" class="btn btn-primary">
                    <i class="fas fa-save"></i> Update Counselor
                </button>
            </form>
        </div>
    </div>
</div>
@endsection