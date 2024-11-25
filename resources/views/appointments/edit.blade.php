<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <title>Health Clinic</title>
</head>

<body>
    <h1>Atualize a consulta</h1>
    <div class="container">
        <form method="POST" action="{{ route('appointments.update', $appointment->id) }}">
            @csrf
            @method('PUT')
            <label for="doctor_id">Médico:</label>
            <select name="doctor_id" required>
                @foreach ($doctors as $doctor)
                <option value="{{ $doctor->id }}" {{ $appointment->doctor_id == $doctor->id ? 'selected' : '' }}>
                    {{ $doctor->name }} - {{ $doctor->specialty }}
                </option>
                @endforeach
            </select>
            <label for="patient_id">Paciente:</label>
            <select name="patient_id" required>
                @foreach ($patients as $patient)
                <option value="{{ $patient->id }}" {{ $appointment->patient_id == $patient->id ? 'selected' : '' }}>
                    {{ $patient->name }}
                </option>
                @endforeach
            </select>
            <label for="date">Data:</label>
            <input type="date" name="date" value="{{ $appointment->date }}" required>
            <label for="time">Hora:</label>
            <input type="time" name="time" value="{{ $appointment->time }}" required>
            <button type="submit">Atualizar Consulta</button>
        </form>
    </div>
</body>

</html>
