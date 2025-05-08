@extends('layouts.app')

@section('content')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <!-- Breadcrumb with improved styling -->
            <nav aria-label="breadcrumb" class="mb-4">
                <ol class="breadcrumb bg-light p-3 rounded">
                    <li class="breadcrumb-item"><a href="{{ route('blogs.index') }}" class="text-decoration-none"><i class="fas fa-home me-1"></i> Blog</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('blogs.by-category', $blog->category->slug) }}" class="text-decoration-none">{{ $blog->category->name }}</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{ Str::limit($blog->title, 30) }}</li>
                </ol>
            </nav>
            
            <!-- Main article with enhanced styling -->
            <article class="blog-post bg-white p-4 rounded shadow-sm mb-5">
                <!-- Title with gradient text -->
                <h1 class="mb-4 fw-bold text-gradient-primary">{{ $blog->title }}</h1>
                
                <!-- Meta information row -->
                <div class="d-flex flex-wrap align-items-center gap-3 mb-4">
                    <!-- Category and tags -->
                    <div class="d-flex flex-wrap gap-2">
                        <a href="{{ route('blogs.by-category', $blog->category->slug) }}" class="badge bg-primary bg-opacity-10 text-primary text-decoration-none">
                            {{ $blog->category->name }}
                        </a>
                        @foreach($blog->tags as $tag)
                            <a href="{{ route('blogs.by-tag', $tag->slug) }}" class="badge bg-secondary bg-opacity-10 text-secondary text-decoration-none">
                                {{ $tag->name }}
                            </a>
                        @endforeach
                    </div>
                    
                    <!-- Author and date -->
                    <div class="text-muted small ms-auto">
                        <span class="me-3"><i class="fas fa-user me-1"></i> {{ $blog->author->name ?? 'Admin' }}</span>
                        <span><i class="fas fa-calendar me-1"></i> {{ $blog->published_at->format('F j, Y') }}</span>
                    </div>
                </div>
                
                <!-- Featured image with hover effect -->
                @if($blog->featured_image)
                    <div class="mb-4 overflow-hidden rounded-3">
                        <img src="{{ asset('storage/' . $blog->featured_image) }}" 
                             class="img-fluid w-100 rounded-3 hover-zoom" 
                             alt="{{ $blog->title }}"
                             style="transition: transform 0.3s ease;">
                    </div>
                @endif
                
                <!-- Content with improved typography -->
                <div class="blog-content fs-5 lh-base">
                    {!! $blog->content !!}
                </div>
                
                <!-- Social sharing buttons -->
                <div class="mt-5 pt-4 border-top">
                    <h5 class="mb-3">Share this post:</h5>
                    <div class="d-flex gap-2">
                        <a href="#" class="btn btn-sm btn-outline-primary rounded-pill px-3">
                            <i class="fab fa-facebook-f me-1"></i> Facebook
                        </a>
                        <a href="#" class="btn btn-sm btn-outline-info rounded-pill px-3">
                            <i class="fab fa-twitter me-1"></i> Twitter
                        </a>
                        <a href="#" class="btn btn-sm btn-outline-danger rounded-pill px-3">
                            <i class="fab fa-linkedin-in me-1"></i> LinkedIn
                        </a>
                    </div>
                </div>
            </article>
            
            <!-- Related posts with card hover effect -->
            @if($relatedBlogs->count() > 0)
                <div class="mt-5">
                    <h3 class="mb-4 fw-bold position-relative ps-3">
                        <span class="position-absolute start-0 top-0 h-100 bg-primary" style="width: 4px;"></span>
                        You might also like
                    </h3>
                    <div class="row g-4">
                        @foreach($relatedBlogs as $relatedBlog)
                            <div class="col-md-6 col-lg-4">
                                <div class="card h-100 border-0 shadow-sm hover-shadow transition-all">
                                    @if($relatedBlog->featured_image)
                                        <img src="{{ asset('storage/' . $relatedBlog->featured_image) }}" 
                                             class="card-img-top" 
                                             alt="{{ $relatedBlog->title }}"
                                             style="height: 180px; object-fit: cover;">
                                    @else
                                        <div class="card-img-top bg-light d-flex align-items-center justify-content-center" style="height: 180px;">
                                            <i class="fas fa-image fa-3x text-muted opacity-25"></i>
                                        </div>
                                    @endif
                                    <div class="card-body">
                                        <div class="d-flex flex-column h-100">
                                            <div class="mb-2">
                                                <span class="badge bg-primary bg-opacity-10 text-primary mb-2">{{ $relatedBlog->category->name }}</span>
                                                <h5 class="card-title clamp-2-lines">{{ $relatedBlog->title }}</h5>
                                            </div>
                                            <div class="mt-auto">
                                                <p class="card-text text-muted small mb-2">
                                                    <i class="fas fa-calendar me-1"></i> {{ $relatedBlog->published_at->format('M d, Y') }}
                                                </p>
                                                <a href="{{ route('blogs.show', $relatedBlog->slug) }}" class="btn btn-sm btn-outline-primary stretched-link">
                                                    Read More <i class="fas fa-arrow-right ms-1"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            @endif
            
            <!-- Newsletter subscription -->
            <div class="mt-5 bg-primary bg-opacity-10 p-4 rounded-3">
                <div class="row align-items-center">
                    <div class="col-md-6 mb-3 mb-md-0">
                        <h4 class="mb-1">Stay updated</h4>
                        <p class="mb-0 text-muted">Subscribe to our newsletter for the latest blog posts</p>
                    </div>
                    <div class="col-md-6">
                        <form class="d-flex">
                            <input type="email" class="form-control rounded-start-pill" placeholder="Your email address">
                            <button type="submit" class="btn btn-primary rounded-end-pill px-4">Subscribe</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('styles')
<style>
    /* Custom styles */
    .text-gradient-primary {
        background: linear-gradient(90deg, #4e54c8 0%, #8f94fb 100%);
        -webkit-background-clip: text;
        background-clip: text;
        -webkit-text-fill-color: transparent;
    }
    
    .hover-zoom:hover {
        transform: scale(1.02);
    }
    
    .hover-shadow:hover {
        box-shadow: 0 0.5rem 1.5rem rgba(0, 0, 0, 0.1) !important;
    }
    
    .transition-all {
        transition: all 0.3s ease;
    }
    
    .clamp-2-lines {
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
        overflow: hidden;
    }
    
    .blog-content img {
        max-width: 100%;
        height: auto;
        border-radius: 8px;
        margin: 1.5rem 0;
    }
    
    .blog-content p {
        margin-bottom: 1.5rem;
    }
    
    .blog-content h2, 
    .blog-content h3, 
    .blog-content h4 {
        margin-top: 2rem;
        margin-bottom: 1rem;
    }
    
    .blog-content blockquote {
        border-left: 4px solid #4e54c8;
        padding-left: 1.5rem;
        font-style: italic;
        color: #555;
        margin: 1.5rem 0;
    }
</style>
@endpush