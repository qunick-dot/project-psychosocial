// resources/views/reviews/create.blade.php
@extends('layouts.app')

@section('content')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h4>Submit Your Review</h4>
                </div>
                <div class="card-body">
                    @if(session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif
                    <form action="{{ route('reviews.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group">
                            <label for="client_name">Your Name</label>
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
                            <label for="email">Email Address</label>
                            <input type="email" name="email" id="email" 
                                   class="form-control @error('email') is-invalid @enderror" 
                                   value="{{ old('email') }}" required>
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="content">Your Review</label>
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
                            <label for="image">Your Photo (Optional)</label>
                            <input type="file" name="image" id="image" 
                                   class="form-control-file @error('image') is-invalid @enderror">
                            @error('image')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            <small class="form-text text-muted">Max size: 2MB. Formats: jpeg, png, jpg</small>
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Submit Review</button>
                            <a href="{{ route('reviews.index') }}" class="btn btn-secondary">Cancel</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection