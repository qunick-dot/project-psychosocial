<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\Category;
use App\Models\Tag;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::with(['category', 'user', 'tags'])
            ->where('status', 'published')
            ->whereNotNull('published_at')
            ->latest('published_at')
            ->paginate(9);
            
        $categories = Category::withCount('blogs')->get();
        $tags = Tag::withCount('blogs')->get();
        
        return view('blogs.index', compact('blogs', 'categories', 'tags'));
    }

    public function show($slug)
    {
        $blog = Blog::with(['category', 'user', 'tags'])
            ->where('slug', $slug)
            ->where('status', 'published')
            ->whereNotNull('published_at')
            ->firstOrFail();
            
        $relatedBlogs = Blog::with(['category'])
            ->where('category_id', $blog->category_id)
            ->where('id', '!=', $blog->id)
            ->where('status', 'published')
            ->whereNotNull('published_at')
            ->latest('published_at')
            ->take(3)
            ->get();
            
        return view('blogs.show', compact('blog', 'relatedBlogs'));
    }
    
    public function byCategory($slug)
    {
        $category = Category::where('slug', $slug)->firstOrFail();
        
        $blogs = Blog::with(['category', 'user', 'tags'])
            ->where('category_id', $category->id)
            ->where('status', 'published')
            ->whereNotNull('published_at')
            ->latest('published_at')
            ->paginate(9);
            
        return view('blogs.by-category', compact('blogs', 'category'));
    }
    
    public function byTag($slug)
    {
        $tag = Tag::where('slug', $slug)->firstOrFail();
        
        $blogs = $tag->blogs()
            ->with(['category', 'user', 'tags'])
            ->where('status', 'published')
            ->whereNotNull('published_at')
            ->latest('published_at')
            ->paginate(9);
            
        return view('blogs.by-tag', compact('blogs', 'tag'));
    }
}
