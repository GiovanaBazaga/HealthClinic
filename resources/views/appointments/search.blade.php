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
    <h1>Busca por data</h1>
    <div class="container">
        <form method="POST" action="{{ route('appointments.search') }}">
            @csrf
            <label for="search_date">Procurar consultas por data:</label>
            <input type="date" id="search_date" name="search_date" required>
            <button type="submit">Buscar</button>
        </form>
        @if (isset($result))
        @if ($result->isEmpty())
        <p>Nenhuma consulta encontrada para a data: {{ $date }}</p>
        @else
        <ul>
            @foreach ($result as $appointment)
            <li>
                Consulta com o Dr. {{ $appointment->doctor->name }},
                paciente {{ $appointment->patient->name }}
                em {{ $appointment->date }} às {{ $appointment->time }}
            </li>
            @endforeach
        </ul>
        @endif
        @endif
    </div>

</body>

</html>
