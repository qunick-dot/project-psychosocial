<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Review;
use App\Models\Counselor;

class ClientReviewController extends Controller
{
    public function index()
    {
        $reviews = Review::where('is_approved', true)->latest()->get();
        return view('reviews.index', compact('reviews'));
    }

    public function create()
    {
        return view('reviews.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'client_name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
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
            'email' => $validated['email'],
            'content' => $validated['content'],
            'rating' => $validated['rating'],
            'image_path' => $imagePath,
            'is_approved' => false, // Default to not approved
        ]);

        return redirect()->route('reviews.index')->with('success', 'Thank you for your review! It will be visible after approval.');
    }
}
