@extends('layouts.app')

@section('content')
<div class="container py-5">
    <div class="row">
        <div class="col-md-12">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('blogs.index') }}">Blog</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Tag: {{ $tag->name }}</li>
                </ol>
            </nav>
            
            <h1 class="mb-4">Tag: {{ $tag->name }}</h1>
            
            <div class="row">
                @forelse($blogs as $blog)
                    <div class="col-md-4 mb-4">
                        <div class="card h-100">
                            @if($blog->featured_image)
                                <img src="{{ asset('storage/' . $blog->featured_image) }}" class="card-img-top" alt="{{ $blog->title }}">
                            @else
                                <div class="card-img-top bg-light text-center py-5">
                                    <i class="fas fa-image fa-3x text-muted"></i>
                                </div>
                            @endif
                            <div class="card-body">
                                <h5 class="card-title">{{ $blog->title }}</h5>
                                <div class="mb-2">
                                    <span class="badge bg-primary">{{ $blog->category->name }}</span>
                                    @foreach($blog->tags->where('id', '!=', $tag->id) as $otherTag)
                                        <span class="badge bg-secondary">{{ $otherTag->name }}</span>
                                    @endforeach
                                </div>
                                <p class="card-text text-muted small">
                                    <i class="fas fa-user"></i> Admin | 
                                    <i class="fas fa-calendar"></i> {{ $blog->published_at->format('M d, Y') }}
                                </p>
                                <a href="{{ route('blogs.show', $blog->slug) }}" class="btn btn-primary btn-sm">Read More</a>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col-12">
                        <div class="alert alert-info">
                            No blog posts found with this tag.
                        </div>
                    </div>
                @endforelse
            </div>
            
            <div class="d-flex justify-content-center mt-4">
                {{ $blogs->links() }}
            </div>
        </div>
    </div>
</div>
@endsection
