@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h4>Add New Review</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('admin.reviews.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group">
                            <label for="client_name">Client Name</label>
                            <input type="text" name="client_name" id="client_name" 
                                   class="form-control @error('client_name') is-invalid @enderror" 
                                   value="{{ old('client_name') }}" required>
                            @error('client_name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="content">Review Content</label>
                            <textarea name="content" id="content" rows="5" 
                                      class="form-control @error('content') is-invalid @enderror" 
                                      required>{{ old('content') }}</textarea>
                            @error('content')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="rating">Rating</label>
                            <select name="rating" id="rating" class="form-control @error('rating') is-invalid @enderror" required>
                                <option value="">Select Rating</option>
                                <option value="1" {{ old('rating') == 1 ? 'selected' : '' }}>1 Star</option>
                                <option value="2" {{ old('rating') == 2 ? 'selected' : '' }}>2 Stars</option>
                                <option value="3" {{ old('rating') == 3 ? 'selected' : '' }}>3 Stars</option>
                                <option value="4" {{ old('rating') == 4 ? 'selected' : '' }}>4 Stars</option>
                                <option value="5" {{ old('rating') == 5 ? 'selected' : '' }}>5 Stars</option>
                            </select>
                            @error('rating')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="image">Client Image (Optional)</label>
                            <input type="file" name="image" id="image" 
                                   class="form-control-file @error('image') is-invalid @enderror">
                            @error('image')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group form-check">
                            <input type="checkbox" name="is_approved" id="is_approved" 
                                   class="form-check-input" {{ old('is_approved') ? 'checked' : '' }}>
                            <label class="form-check-label" for="is_approved">Approve this review</label>
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Submit Review</button>
                            <a href="{{ route('admin.reviews.index') }}" class="btn btn-secondary">Cancel</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection