// resources/views/admin/reviews/show.blade.php
@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h4>Review Details</h4>
                </div>
                <div class="card-body">
                    <div class="review-card">
                        <div class="quote-icon">
                            <i class="fas fa-quote-left"></i>
                        </div>
                        <div class="review-content">
                            <p>"{{ $review->content }}"</p>
                        </div>
                        <div class="review-rating">
                            @for($i = 0; $i < $review->rating; $i++)
                                <i class="fas fa-star text-warning"></i>
                            @endfor
                        </div>
                        <div class="reviewer-info">
                            @if($review->image_path)
                            <div class="reviewer-image">
                                <img src="{{ asset('storage/' . $review->image_path) }}" alt="{{ $review->client_name }}">
                            </div>
                            @endif
                            <div class="reviewer-details">
                                <h4 class="reviewer-name">{{ $review->client_name }}</h4>
                                <p class="review-date">{{ $review->created_at->format('M d, Y') }}</p>
                                <span class="badge {{ $review->is_approved ? 'badge-success' : 'badge-warning' }}">
                                    {{ $review->is_approved ? 'Approved' : 'Pending' }}
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="mt-4">
                        <a href="{{ route('admin.reviews.index') }}" class="btn btn-secondary">Back to List</a>
                        <a href="{{ route('admin.reviews.edit', $review->id) }}" class="btn btn-primary">Edit</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection