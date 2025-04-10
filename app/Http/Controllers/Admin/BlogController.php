<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class BlogController extends Controller
{
    public function index()
    {
        $posts = Blog::latest()->paginate(10);
        return view('admin.blog.index', compact('posts'));
    }

    public function create()
    {
        return view('admin.blog.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|max:255',
            'category' => 'required|max:50',
            'excerpt' => 'required',
            'content' => 'required',
            'image' => 'nullable|image|max:10000',
            'published' => 'boolean',
        ]);

        $validated['slug'] = Str::slug($validated['title']);
        
        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('blog', 'public');
            $validated['image'] = $path;
        }
        
        if ($request->has('published') && $request->published) {
            $validated['published_at'] = now();
        }

        Blog::create($validated);

        return redirect()->route('admin.blog.index')
            ->with('success', 'Blog post created successfully.');
    }

    public function edit(Blog $post)
    {
        return view('admin.blog.edit', compact('post'));
    }

    public function update(Request $request, Blog $post)
    {
        $validated = $request->validate([
            'title' => 'required|max:255',
            'category' => 'required|max:50',
            'excerpt' => 'required',
            'content' => 'required',
            'image' => 'nullable|image|max:2048',
            'published' => 'boolean',
        ]);

        $validated['slug'] = Str::slug($validated['title']);
        
        if ($request->hasFile('image')) {
            // Delete old image
            if ($post->image) {
                Storage::disk('public')->delete($post->image);
            }
            
            $path = $request->file('image')->store('blog', 'public');
            $validated['image'] = $path;
        }
        
        // If we're publishing now and it wasn't published before
        if ($request->has('published') && $request->published && !$post->published) {
            $validated['published_at'] = now();
        }
        
        // If we're unpublishing
        if (!$request->has('published') || !$request->published) {
            $validated['published_at'] = null;
        }

        $post->update($validated);

        return redirect()->route('admin.blog.index')
            ->with('success', 'Blog post updated successfully.');
    }

    public function destroy(Blog $post)
    {
        if ($post->image) {
            Storage::disk('public')->delete($post->image);
        }
        
        $post->delete();

        return redirect()->route('admin.blog.index')
            ->with('success', 'Blog post deleted successfully.');
    }
}
