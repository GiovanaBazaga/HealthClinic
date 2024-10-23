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
