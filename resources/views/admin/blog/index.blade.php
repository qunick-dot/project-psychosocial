@extends('layouts.admin')

@section('content')
<header class="bg-white shadow">
    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
        <h1 class="text-3xl font-bold text-gray-900">Blog</h1>
    </div>
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Services</h1>
        <a href="{{ route('admin.blog.create') }}" class="btn btn-primary shadow-sm rounded-pill">
            <i class="fas fa-plus fa-sm text-white mr-1"></i> Add New Blog
        </a>
    </div>
</header>

<main class="container mx-auto px-4 py-8">
    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
        <div class="table-responsive">
    <table class="table table-hover" id="servicesTable" width="100%" cellspacing="0">
        <thead>
            <tr>
                <th class="text-center">#</th>
                <th>Title</th>
                <th class="text-center">Category</th>
                <th class="text-center">Excerpt</th>
                <th class="text-center">Content</th>
                <th class="text-center">Image</th>
                <th class="text-center">published  </th>
            </tr>
        </thead>
        <tbody>
        @foreach($posts as $post)
            <article class="bg-white rounded-lg shadow overflow-hidden">
                @if($post->image)
                    <div class="h-48 bg-gray-200 overflow-hidden">
                        <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->title }}" class="w-full h-full object-cover">
                    </div>
                @else
                    <div class="h-48 bg-gray-200 flex items-center justify-center text-gray-500">
                        <span>Post Image</span>
                    </div>
                @endif
                
                <div class="p-6">
                    <div class="flex justify-between text-sm mb-2">
                        <span class="text-blue-600 font-semibold">{{ $post->category }}</span>
                        <span class="text-gray-500">{{ $post->published_at->format('M d, Y') }}</span>
                    </div>
                    
                    <h3 class="text-xl font-bold mb-3">{{ $post->title }}</h3>
                    
                    <p class="text-gray-700 mb-4">{{ $post->excerpt }}</p>
                    
                    <a href="{{ route('blog.show', $post) }}" class="inline-block text-blue-600 font-semibold hover:text-blue-800">
                        Read More →
                    </a>
                </div>
            </article>
        @endforeach
    </div>
    
    <div class="mt-8">
        {{ $posts->links() }}
    </div>
</main>
@endsection
