<?php

namespace App\Http\Controllers;

use App\Models\Doctor;

use Illuminate\Http\Request;

class DoctorController extends Controller
{
    public function create()
    {
        return view('doctors.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'crm' => 'required|unique:doctors|max:255',
            'name' => 'required|max:255',
            'specialty' => 'required|max:255',
        ]);

        Doctor::create([
            'crm' => $request->crm,
            'name' => $request->name,
            'specialty' => $request->specialty,
        ]);

        return redirect()->route('doctors.index')->with('success', 'Doctor created successfully.');
    }

    public function index()
    {
        $doctors = Doctor::all();
        return view('doctors.index', compact('doctors'));
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
