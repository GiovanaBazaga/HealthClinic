<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use Illuminate\Http\Request;

class PatientController extends Controller
{
    public function create()
    {
        return view('patients.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'cpf' => 'required|unique:patients',
            'name' => 'required',
            'number' => 'required',
            'email' => 'required|email',
            'address' => 'required',
        ]);

        Patient::create($request->all());

        return redirect()->route('patients.index')->with('success', 'Patient created successfully.');
    }

    public function index()
    {
        $patients = Patient::all();
        return view('patients.index', compact('patients'));
    }

    public function edit($id)
    {
        $patient = Patient::findOrFail($id);
        return view('patients.edit', compact('patient'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'number' => 'required',
            'email' => 'required|email',
            'address' => 'required',
        ]);

        $patient = Patient::findOrFail($id);
        $patient->update($request->all());

        return redirect()->route('patients.index')->with('success', 'Paciente atualizado com sucesso.');
    }


    public function destroy($id)
    {
        $patient = Patient::findOrFail($id);
        $patient->delete();

        return redirect()->route('patients.index')->with('success', 'Patient deleted successfully.');
    }
}
