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
