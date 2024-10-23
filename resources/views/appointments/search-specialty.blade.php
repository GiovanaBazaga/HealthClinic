<form method="POST" action="{{ route('appointments.search.specialty') }}">
    @csrf
    <label for="specialty">Procurar consultas por especialidade:</label>
    <input type="text" id="specialty" name="specialty" required>
    <button type="submit">Buscar</button>
</form>

@if (isset($result))
    @if ($result->isEmpty())
        <p>Nenhuma consulta encontrada para a especialidade: {{ $specialty }}</p>
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
