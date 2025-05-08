<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Consultation;
use App\Mail\ConsultationStatusMail;
use Illuminate\Support\Facades\Mail;

class ConsultationController extends Controller
{
    public function create()
    {
        return view('appointment-book');
    }

    /**
     * Store a new consultation request.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'phone' => 'required|string|max:20',
            'service' => 'required|exists:services,id',
            'preferred_date' => 'required|date|after:today',
            'consultant' => 'required|string',
            'message' => 'required|string',
        ]);

        $validated['status'] = 'Pending';


        Consultation::create($validated);

        if($request->ajax()) {
            return response()->json([
                'success' => true,
                'message' => 'Consultation created successfully.'
            ]);
        }
        return redirect()->route('consultations.create')
            ->with('success', 'Your consultation request has been submitted successfully!');
    }
    /**
     * Show the admin dashboard with consultations.
     */
    public function dashboard()
    {
        $consultations = Consultation::orderBy('id', 'asc')->get();
        return view('admin.dashboard', compact('consultations'));
    }
}
