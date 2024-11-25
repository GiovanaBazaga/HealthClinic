<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/forms.css') }}">
    <title>Health Clinic</title>
</head>

<body>
    <h1>Insira uma nova consulta</h1>

    <div class="container">
        <form action="{{ route('appointments.store') }}" method="POST">
            @csrf
            <label for="doctor_id">Médico:</label>
            <select name="doctor_id" required>
                @foreach($doctors as $doctor)
                <option value="{{ $doctor->id }}">{{ $doctor->name }} - {{ $doctor->specialty }}</option>
                @endforeach
            </select>
            <label for="patient_id">Paciente:</label>
            <select name="patient_id" required>
                @foreach($patients as $patient)
                <option value="{{ $patient->id }}">{{ $patient->name }}</option>
                @endforeach
            </select>
            <label for="date">Data:</label>
            <input type="date" name="date" required>
            <label for="time">Hora:</label>
            <input type="time" name="time" required>
            <button type="submit">Marcar a consulta</button>
        </form>
    </div>

    <a href="{{ url('/') }}" class="btn btn-secondary">Voltar ao Menu Inicial</a>
</body>

</html>
