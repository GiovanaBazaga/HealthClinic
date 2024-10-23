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
