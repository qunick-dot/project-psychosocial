<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class ServicesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $services = Service::all();
        return view('admin.services.index', compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.services.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'subtitle' => 'nullable|string',
            'why_it_matters' => 'nullable|string',
            'approach_title' => 'nullable|string',
            'approach_subtitle' => 'nullable|string',
            'image' => 'nullable|image|max:10000',
            'is_active' => 'boolean',
            'meta_title' => 'nullable|string|max:255',
            'meta_description' => 'nullable|string',
            'meta_keywords' => 'nullable|string',
            'approach_items' => 'nullable|array',
            'approach_items.*.title' => 'nullable|string',
            'approach_items.*.description' => 'nullable|string',
            'faqs' => 'nullable|array',
            'faqs.*.question' => 'nullable|string',
            'faqs.*.answer' => 'nullable|string',
        ]);
        
        $validated['slug'] = Str::slug($validated['title']);
        
        // Use service title if meta_title is not provided
        if (empty($validated['meta_title'])) {
            $validated['meta_title'] = $validated['title'];
        }
        
        // Use service subtitle if meta_description is not provided
        if (empty($validated['meta_description'])) {
            $validated['meta_description'] = Str::limit(strip_tags($validated['subtitle'] ?? ''), 160);
        }
        if ($request->hasFile('image')) {
            $fileName = time() . '_' . $request->file('image')->getClientOriginalName();
            $path = $request->file('image')->storeAs('services', $fileName, 'public');
            $validated['image'] = $path;
        }
        
        
        Service::create($validated);
        
        return redirect()->route('admin.services.index')->with('success', 'Service created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $service = Service::findOrFail($id);
        return view('admin.services.edit', compact('service'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,  Service $service)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'subtitle' => 'nullable|string',
            'why_it_matters' => 'nullable|string',
            'approach_title' => 'nullable|string',
            'approach_subtitle' => 'nullable|string',
            'image' => 'nullable|image|max:10000',
            'is_active' => 'boolean',
            'meta_title' => 'nullable|string|max:255',
            'meta_description' => 'nullable|string',
            'meta_keywords' => 'nullable|string',
            'approach_items' => 'nullable|array',
            'approach_items.*.title' => 'nullable|string',
            'approach_items.*.description' => 'nullable|string',
            'faqs' => 'nullable|array',
            'faqs.*.question' => 'nullable|string',
            'faqs.*.answer' => 'nullable|string',
        ]);
        
        // Only update slug if title has changed
        if ($service->title !== $validated['title']) {
            $validated['slug'] = Str::slug($validated['title']);
        }
        
        // Use service title if meta_title is not provided
        if (empty($validated['meta_title'])) {
            $validated['meta_title'] = $validated['title'];
        }
        
        // Use service subtitle if meta_description is not provided
        if (empty($validated['meta_description'])) {
            $validated['meta_description'] = Str::limit(strip_tags($validated['subtitle'] ?? ''), 160);
        }
        
         // Handle image upload
    
         if ($request->hasFile('image')) {
            $fileName = time() . '_' . $request->file('image')->getClientOriginalName();
            $path = $request->file('image')->storeAs('services', $fileName, 'public');
            $validated['image'] = $path;
        }
        
        $service->update($validated);
        
        return redirect()->route('admin.services.index')->with('success', 'Service updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Service $service)
    {
        if ($service->image && Storage::disk('public')->exists($service->image)) {
            Storage::disk('public')->delete($service->image);
        }
        
        $service->delete();
        return redirect()->route('admin.services.index')->with('success', 'Service deleted successfully');
    }
}
