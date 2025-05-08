<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Counselor;

class CounselorController extends Controller
{
    public function index()
    {
        $counselors = Counselor::where('is_active', true)->latest()->get();
        return view('counselors.index', compact('counselors'));
    }

    /**
     * Display the specified counselor.
     *
     * @param  string  $slug
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $counselor = Counselor::where('slug', $slug)->where('is_active', true)->firstOrFail();
        return view('counselors.show', compact('counselor'));
    }
}
