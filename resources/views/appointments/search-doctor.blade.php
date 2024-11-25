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
    <h1>Busca por Médico</h1>
    <div class="container">
        <form method="POST" action="{{ route('appointments.search.doctor') }}">
            @csrf
            <label for="doctor_id">Procurar consultas por médico:</label>
            <select id="doctor_id" name="doctor_id" required>
                @foreach ($doctors as $doctor)
                <option value="{{ $doctor->id }}">{{ $doctor->name }} - {{ $doctor->specialty }}</option>
                @endforeach
            </select>
            <button type="submit">Buscar</button>
        </form>
        @if (isset($result))
        @if ($result->isEmpty())
        <p>Nenhuma consulta encontrada para o médico selecionado.</p>
        @else
        <ul>
            @foreach ($result as $appointment)
            <li>
                Consulta com o Dr. {{ $appointment->doctor->name }},
                paciente {{ $appointment->patient->name }}
                em {{ $appointment->date }} às {{ $appointment->time }}
                (Especialidade: {{ $appointment->doctor->specialty }})
            </li>
            @endforeach
        </ul>
        @endif
        @endif
    </div>
    <a href="{{ url('/') }}" class="btn btn-secondary">Voltar ao Menu Inicial</a>
</body>

</html>
