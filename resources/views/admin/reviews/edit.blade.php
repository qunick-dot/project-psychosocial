@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h4>Edit Review</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('admin.reviews.update', $review->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="form-group">
                            <label for="client_name">Client Name</label>
                            <input type="text" name="client_name" id="client_name" 
                                   class="form-control @error('client_name') is-invalid @enderror" 
                                   value="{{ old('client_name', $review->client_name) }}" required>
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
                                      required>{{ old('content', $review->content) }}</textarea>
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
                                @for($i = 1; $i <= 5; $i++)
                                    <option value="{{ $i }}" {{ old('rating', $review->rating) == $i ? 'selected' : '' }}>
                                        {{ $i }} Star{{ $i > 1 ? 's' : '' }}
                                    </option>
                                @endfor
                            </select>
                            @error('rating')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>Current Image</label>
                            @if($review->image_path)
                                <div class="mb-2">
                                    <img src="{{ asset('storage/' . $review->image_path) }}" alt="{{ $review->client_name }}" style="max-width: 100px;">
                                </div>
                            @else
                                <p>No image uploaded</p>
                            @endif
                            <label for="image">Change Image (Optional)</label>
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
                                   class="form-check-input" {{ old('is_approved', $review->is_approved) ? 'checked' : '' }}>
                            <label class="form-check-label" for="is_approved">Approve this review</label>
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Update Review</button>
                            <a href="{{ route('admin.reviews.index') }}" class="btn btn-secondary">Cancel</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection