<style >
/* Reviews Section Styling */
.reviews-container {
    max-width: 1200px;
    margin: 3rem auto;
    padding: 0 1.5rem;
    font-family: 'Inter', 'Segoe UI', Roboto, sans-serif;
}

/* Enhanced Header Styling */
.reviews-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 3.5rem;
    padding: 1.5rem 2rem;
    border-radius: 1rem;
    background: linear-gradient(135deg, #4361ee, #3a56d4);
    box-shadow: 0 10px 30px rgba(67, 97, 238, 0.2);
    position: relative;
    overflow: hidden;
}

.reviews-header::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: url("data:image/svg+xml,%3Csvg width='100' height='100' viewBox='0 0 100 100' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M11 18c3.866 0 7-3.134 7-7s-3.134-7-7-7-7 3.134-7 7 3.134 7 7 7zm48 25c3.866 0 7-3.134 7-7s-3.134-7-7-7-7 3.134-7 7 3.134 7 7 7zm-43-7c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zm63 31c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zM34 90c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zm56-76c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zM12 86c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm28-65c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm23-11c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zm-6 60c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm29 22c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zM32 63c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zm57-13c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zm-9-21c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2zM60 91c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2zM35 41c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2zM12 60c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2z' fill='%23ffffff' fill-opacity='0.1' fill-rule='evenodd'/%3E%3C/svg%3E") center center;
    opacity: 0.3;
}

.reviews-header h2 {
    font-size: 2.2rem;
    font-weight: 700;
    color: white;
    margin: 0;
    text-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    position: relative;
}

.btn-primary {
    display: inline-block;
    background-color: white;
    color: #4361ee;
    font-weight: 600;
    padding: 0.85rem 1.8rem;
    border-radius: 2rem;
    text-decoration: none;
    transition: all 0.3s ease;
    border: none;
    cursor: pointer;
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
    position: relative;
    z-index: 1;
    letter-spacing: 0.5px;
}

.btn-primary:hover {
    background-color: #f8f9fa;
    transform: translateY(-2px);
    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
}

/* Reviews Grid - Single Column Layout */
.reviews-grid {
    display: flex;
    flex-direction: column;
    gap: 2.5rem;
    max-width: 800px;
    margin: 0 auto;
}

/* Review Item - Enhanced for single column layout */
.review-item {
    background-color: white;
    border-radius: 1.2rem;
    padding: 2.5rem;
    position: relative;
    transition: all 0.3s ease;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
    display: flex;
    flex-direction: column;
    border-left: 5px solid #4361ee;
}

.review-item:hover {
    transform: translateY(-5px);
    box-shadow: 0 15px 35px rgba(0, 0, 0, 0.1);
}

.review-item:nth-child(3n+1) {
    border-left-color: #4361ee;
}

.review-item:nth-child(3n+2) {
    border-left-color: #3a86ff;
}

.review-item:nth-child(3n+3) {
    border-left-color: #4cc9f0;
}

/* Quote Icon - Enhanced */
.review-quote-icon {
    position: absolute;
    top: 1.5rem;
    right: 2rem;
    color: #4361ee;
    opacity: 0.15;
    font-size: 2.5rem;
    transform: rotate(180deg);
}

/* Review Text - Enhanced for readability */
.review-text {
    margin: 1.8rem 0;
    color: #444;
    line-height: 1.8;
    flex-grow: 1;
    font-size: 1.05rem;
    position: relative;
    padding-left: 1.2rem;
}

.review-text::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 3px;
    height: 100%;
    background-color: rgba(67, 97, 238, 0.1);
    border-radius: 3px;
}

.review-text p {
    font-style: italic;
    margin: 0;
    position: relative;
}

/* Star Rating */
.review-stars {
    margin-bottom: 1rem;
    color: #ffc107;
    font-size: 1.1rem;
}

.star-filled {
    margin-right: 0.25rem;
}

/* Author Section - Enhanced for single row layout */
.review-author {
    display: flex;
    align-items: center;
    margin-top: auto;
    padding-top: 1.2rem;
    border-top: 1px solid rgba(0, 0, 0, 0.05);
    position: relative;
}

.author-image {
    width: 50px;
    height: 50px;
    margin-right: 1rem;
    border-radius: 50%;
    overflow: hidden;
    flex-shrink: 0;
    border: 2px solid rgba(67, 97, 238, 0.2);
}

.author-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.author-details {
    flex-grow: 1;
}

.author-name {
    font-size: 1.1rem;
    font-weight: 600;
    color: #333;
    margin: 0 0 0.25rem;
}

.review-date {
    font-size: 0.85rem;
    color: #777;
    margin: 0;
}

/* Empty State */
.no-reviews {
    grid-column: 1 / -1;
    text-align: center;
    padding: 3rem;
    background-color: rgba(67, 97, 238, 0.05);
    border-radius: 1rem;
}

.no-reviews p {
    margin-bottom: 1.5rem;
    font-size: 1.1rem;
    color: #555;
}

/* Responsive Adjustments */
@media (max-width: 768px) {
    .reviews-header {
        flex-direction: column;
        align-items: flex-start;
        gap: 1rem;
    }
    
    .reviews-grid {
        grid-template-columns: 1fr;
    }
    
    .review-item {
        padding: 1.5rem;
    }
}

/* Animation for new reviews - Staggered animation */
@keyframes slideIn {
    from {
        opacity: 0;
        transform: translateX(-20px);
    }
    to {
        opacity: 1;
        transform: translateX(0);
    }
}

.review-item {
    animation: slideIn 0.6s ease-out forwards;
    opacity: 0;
}

.review-item:nth-child(1) { animation-delay: 0.1s; }
.review-item:nth-child(2) { animation-delay: 0.2s; }
.review-item:nth-child(3) { animation-delay: 0.3s; }
.review-item:nth-child(4) { animation-delay: 0.4s; }
.review-item:nth-child(5) { animation-delay: 0.5s; }
.review-item:nth-child(n+6) { animation-delay: 0.6s; }

/* Hover effects for review items */
.review-item:hover .review-quote-icon {
    opacity: 0.3;
}

/* Custom scrollbar for review text when it gets too long */
.review-text {
    max-height: 200px;
    overflow-y: auto;
    scrollbar-width: thin;
    scrollbar-color: rgba(67, 97, 238, 0.3) transparent;
}

.review-text::-webkit-scrollbar {
    width: 6px;
}

.review-text::-webkit-scrollbar-track {
    background: transparent;
}

.review-text::-webkit-scrollbar-thumb {
    background-color: rgba(67, 97, 238, 0.3);
    border-radius: 6px;
}

/* Optional: Add pagination styling if needed */
.reviews-pagination {
    margin-top: 2.5rem;
    display: flex;
    justify-content: center;
}

.pagination {
    display: flex;
    list-style: none;
    padding: 0;
    margin: 0;
}

.page-item {
    margin: 0 0.25rem;
}

.page-link {
    display: flex;
    align-items: center;
    justify-content: center;
    width: 40px;
    height: 40px;
    border-radius: 50%;
    color: #333;
    text-decoration: none;
    transition: all 0.2s ease;
}

.page-link:hover {
    background-color: rgba(67, 97, 238, 0.1);
}

.page-item.active .page-link {
    background-color: #4361ee;
    color: white;
}
    </style>
@extends('layouts.app')

@section('content')

<div class="reviews-container">
    <div class="reviews-header">
        <h2>Client Reviews</h2>
    </div>
        <div style="display: flex;justify-content: flex-end;align-items: center;margin-bottom: 2rem;width:50%;">
            <a href="{{ route('reviews.create') }}" class="btn btn-primary">Submit Your Review</a>
        </div>

        
    
    <div class="reviews-grid">
        @forelse($reviews as $review)
        <div class="review-item">
            <div class="review-quote-icon">
                <i class="fas fa-quote-left"></i>
            </div>
            <div class="review-text">
                <p>"{{ $review->content }}"</p>
            </div>
            <div class="review-stars">
                @for($i = 0; $i < $review->rating; $i++)
                    <i class="fas fa-star star-filled"></i>
                @endfor
            </div>
            <div class="review-author">
                @if($review->image_path)
                <div class="author-image">
                    <img src="{{ asset('storage/' . $review->image_path) }}" alt="{{ $review->client_name }}">
                </div>
                @endif
                <div class="author-details">
                    <h4 class="author-name">{{ $review->client_name }}</h4>
                    <p class="review-date">{{ $review->created_at->format('M d, Y') }}</p>
                </div>
            </div>
        </div>
        @empty
        <div class="no-reviews">
            <p>No reviews yet. Be the first to review!</p>
            <a href="{{ route('reviews.create') }}" class="btn btn-primary">Submit Your Review</a>
        </div>
        @endforelse
    </div>
</div>

@endsection
