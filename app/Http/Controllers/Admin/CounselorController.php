<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Counselor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class CounselorController extends Controller
{
    public function index()
    {
        $counselors = Counselor::latest()->paginate(10);
        return view('admin.counselors.index', compact('counselors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.counselors.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'title' => 'required|string|max:255',
            'specialty' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'is_active' => 'boolean'
        ]);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->storeAs('public/counselors', $imageName);
            $validatedData['image'] = 'counselors/' . $imageName;
        }

        $validatedData['slug'] = Str::slug($request->name);
        
        Counselor::create($validatedData);

        return redirect()->route('admin.counselors.index')
            ->with('success', 'Counselor created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Counselor  $counselor
     * @return \Illuminate\Http\Response
     */
    public function show(Counselor $counselor)
    {
        return view('admin.counselors.show', compact('counselor'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Counselor  $counselor
     * @return \Illuminate\Http\Response
     */
    public function edit(Counselor $counselor)
    {
        return view('admin.counselors.edit', compact('counselor'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Counselor  $counselor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Counselor $counselor)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'title' => 'required|string|max:255',
            'specialty' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'is_active' => 'boolean'
        ]);

        if ($request->hasFile('image')) {
            // Delete old image
            if ($counselor->image) {
                Storage::delete('public/' . $counselor->image);
            }
            
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->storeAs('public/counselors', $imageName);
            $validatedData['image'] = 'counselors/' . $imageName;
        }

        $validatedData['slug'] = Str::slug($request->name);
        
        $counselor->update($validatedData);

        return redirect()->route('admin.counselors.index')
            ->with('success', 'Counselor updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Counselor  $counselor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Counselor $counselor)
    {
        if ($counselor->image) {
            Storage::delete('public/' . $counselor->image);
        }
        
        $counselor->delete();

        return redirect()->route('admin.counselors.index')
            ->with('success', 'Counselor deleted successfully.');
    }
}
