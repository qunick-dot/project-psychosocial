<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Review;

class ReviewController extends Controller
{
    public function index()
    {
        $reviews = Review::where('is_approved', true)->latest()->get();
        return view('reviews.index', compact('reviews'));
    }
}
