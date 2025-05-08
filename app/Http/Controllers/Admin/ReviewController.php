<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Review;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ReviewController extends Controller
{
    public function index()
    {
        $reviews = Review::all();
        return view('admin.reviews.index', compact('reviews'));
    }

    public function show(Review $review)
    {
        return view('admin.reviews.show', compact('review'));
    }

    public function create()
    {
        return view('admin.reviews.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'client_name' => 'required|string|max:255',
            'content' => 'required|string',
            'rating' => 'required|integer|between:1,5',
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('reviews', 'public');
        }

        Review::create([
            'client_name' => $validated['client_name'],
            'content' => $validated['content'],
            'rating' => $validated['rating'],
            'image_path' => $imagePath,
            'is_approved' => $request->has('is_approved'),
        ]);

        return redirect()->route('admin.reviews.index')->with('success', 'Review created successfully.');
    }

    public function edit(Review $review)
    {
        return view('admin.reviews.edit', compact('review'));
    }

    public function update(Request $request, Review $review)
{
    $validated = $request->validate([
        'client_name' => 'required|string|max:255',
        'email' => 'required|email|max:255',
        'content' => 'required|string',
        'rating' => 'required|integer|between:1,5',
        'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
    ]);

    $imagePath = $review->image_path;
    if ($request->hasFile('image')) {
        // Delete old image if exists
        if ($review->image_path) {
            Storage::disk('public')->delete($review->image_path);
        }
        $imagePath = $request->file('image')->store('reviews', 'public');
    }

    $review->update([
        'client_name' => $validated['client_name'],
        'email' => $validated['email'],
        'content' => $validated['content'],
        'rating' => $validated['rating'],
        'image_path' => $imagePath,
        'is_approved' => $request->has('is_approved'),
    ]);

    return redirect()->route('admin.reviews.index')->with('success', 'Review updated successfully.');
}

    public function destroy(Review $review)
    {
        if ($review->image_path) {
            Storage::disk('public')->delete($review->image_path);
        }
        $review->delete();
        return redirect()->route('admin.reviews.index')->with('success', 'Review deleted successfully.');
    }
}
