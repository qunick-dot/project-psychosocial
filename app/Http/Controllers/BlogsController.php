<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

class BlogsController extends Controller
{
    public function index()
    {
        $posts = Blog::where('published', true)
            ->latest('published_at')
            ->paginate(9);
            
        return view('blog.index', compact('posts'));
    }

    public function show(Blog $post)
    {
        if (!$post->published) {
            abort(404);
        }
        
        return view('blog.show', compact('post'));
    }
}
