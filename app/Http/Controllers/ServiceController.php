<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;

class ServiceController extends Controller
{
    public function index()
    {
        $services = Service::where('is_active', true)->get();
        return view('services.index', compact('services'));
    }

    public function show($slug)
    {
        $service = Service::where('slug', $slug)
                    ->where('is_active', true)
                    ->firstOrFail();
        return view('services.show', compact('service'));
    }
}
