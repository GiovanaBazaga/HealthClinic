<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\Doctor;
use App\Models\Patient;

use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    public function create()
    {
        $doctors = Doctor::all();
        $patients = Patient::all();
        return view('appointments.create', compact('doctors', 'patients'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'doctor_id' => 'required',
            'patient_id' => 'required',
            'date' => 'required|date',
            'time' => 'required|date_format:H:i',
        ]);

        Appointment::create([
            'doctor_id' => $request->doctor_id,
            'patient_id' => $request->patient_id,
            'date' => $request->date,
            'time' => $request->time,
        ]);

        return redirect()->route('appointments.index')->with('success', 'Appointment created successfully.');
    }

    // Search by Date
    public function index()
    {
        $appointments = Appointment::with(['doctor', 'patient'])->get();
        return view('appointments.index', compact('appointments'));
    }

    public function searchByDateForm()
    {
        return view('appointments.search');
    }

    public function searchByDate(Request $request)
    {
        $request->validate([
            'search_date' => 'required|date',
        ]);

        $date = $request->input('search_date');
        $result = Appointment::with(['doctor', 'patient'])->whereDate('date', $date)->get();

        return view('appointments.search', compact('result', 'date'));
    }

    // Search by Specialty
    public function searchBySpecialtyForm()
    {
        return view('appointments.search-specialty');
    }

    public function searchBySpecialty(Request $request)
    {
        $request->validate([
            'specialty' => 'required|string',
        ]);

        $specialty = $request->input('specialty');
        $result = Appointment::whereHas('doctor', function ($query) use ($specialty) {
            $query->where('specialty', $specialty);
        })->with(['doctor', 'patient'])->get();

        return view('appointments.search-specialty', compact('result', 'specialty'));
    }

    // Search by Doctor
    public function searchByDoctorForm()
    {
        $doctors = Doctor::all();
        return view('appointments.search-doctor', compact('doctors'));
    }

    public function searchByDoctor(Request $request)
    {
        $request->validate([
            'doctor_id' => 'required|exists:doctors,id',
        ]);

        $doctorId = $request->input('doctor_id');
        $result = Appointment::where('doctor_id', $doctorId)->with(['doctor', 'patient'])->get();

        $doctors = Doctor::all();

        return view('appointments.search-doctor', compact('result', 'doctors'));
    }

    public function edit($id)
    {
        $appointment = Appointment::findOrFail($id);
        $doctors = Doctor::all();
        $patients = Patient::all();
        return view('appointments.edit', compact('appointment', 'doctors', 'patients'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'doctor_id' => 'required|exists:doctors,id',
            'patient_id' => 'required|exists:patients,id',
            'date' => 'required|date',
            'time' => 'required|date_format:H:i',
        ]);

        $appointment = Appointment::findOrFail($id);
        $appointment->update([
            'doctor_id' => $request->doctor_id,
            'patient_id' => $request->patient_id,
            'date' => $request->date,
            'time' => $request->time,
        ]);

        return redirect()->route('appointments.index')->with('success', 'Consulta atualizada com sucesso.');
    }

    public function destroy($id)
    {
        $appointment = Appointment::findOrFail($id);
        $appointment->delete();

        return redirect()->route('appointments.index')->with('success', 'Consulta excluída com sucesso.');
    }
}
