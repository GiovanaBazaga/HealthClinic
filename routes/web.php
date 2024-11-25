<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\DoctorController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\AppointmentController;

Route::get('/', function () {
    return view('welcome');
});

// Doctors
Route::get('doctors/create', [DoctorController::class, 'create'])->name('doctors.create');
Route::post('doctors', [DoctorController::class, 'store'])->name('doctors.store');
Route::get('doctors', [DoctorController::class, 'index'])->name('doctors.index');

// Patients
Route::get('patients/create', [PatientController::class, 'create'])->name('patients.create');
Route::post('patients', [PatientController::class, 'store'])->name('patients.store');
Route::get('patients', [PatientController::class, 'index'])->name('patients.index');
Route::get('patients/{id}/edit', [PatientController::class, 'edit'])->name('patients.edit');
Route::put('patients/{id}', [PatientController::class, 'update'])->name('patients.update');
Route::delete('patients/{id}', [PatientController::class, 'destroy'])->name('patients.destroy');


// Appointments
Route::get('appointments/create', [AppointmentController::class, 'create'])->name('appointments.create');
Route::post('appointments', [AppointmentController::class, 'store'])->name('appointments.store');
Route::get('appointments', [AppointmentController::class, 'index'])->name('appointments.index');

// Search by Date
Route::get('appointments/search', [AppointmentController::class, 'searchByDateForm'])->name('appointments.search.form');
Route::post('appointments/search', [AppointmentController::class, 'searchByDate'])->name('appointments.search');

// Search by Specialty
Route::get('appointments/search-specialty', [AppointmentController::class, 'searchBySpecialtyForm'])->name('appointments.search.specialty.form');
Route::post('appointments/search-specialty', [AppointmentController::class, 'searchBySpecialty'])->name('appointments.search.specialty');

// Search by Doctor
Route::get('/appointments/search-doctor', [AppointmentController::class, 'searchByDoctorForm'])->name('appointments.search.doctor.form');
Route::post('appointments/search-doctor', [AppointmentController::class, 'searchByDoctor'])->name('appointments.search.doctor');

//Update
Route::get('/appointments/{id}/edit', [AppointmentController::class, 'edit'])->name('appointments.edit');
Route::put('/appointments/{id}', [AppointmentController::class, 'update'])->name('appointments.update');

//Delete
Route::delete('/appointments/{id}', [AppointmentController::class, 'destroy'])->name('appointments.destroy');



?>
