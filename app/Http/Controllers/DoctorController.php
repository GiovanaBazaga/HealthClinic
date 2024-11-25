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

    public function edit($id)
    {
        $doctor = Doctor::findOrFail($id);
        return view('doctors.edit', compact('doctor'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|max:255',
        ]);

        $doctor = Doctor::findOrFail($id);
        $doctor->update([
            'name' => $request->name,
        ]);

        return redirect()->route('doctors.index')->with('success', 'Médico atualizado com sucesso.');
    }

    public function destroy($id)
    {
        $doctor = Doctor::findOrFail($id);
        $doctor->delete();

        return redirect()->route('doctors.index')->with('success', 'Médico excluído com sucesso.');
    }
}
