<form action="{{ route('appointments.store') }}" method="POST">
    @csrf
    <label for="doctor_id">Doctor:</label>
    <select name="doctor_id" required>
        @foreach($doctors as $doctor)
            <option value="{{ $doctor->id }}">{{ $doctor->name }} - {{ $doctor->specialty }}</option>
        @endforeach
    </select>

    <label for="patient_id">Patient:</label>
    <select name="patient_id" required>
        @foreach($patients as $patient)
            <option value="{{ $patient->id }}">{{ $patient->name }}</option>
        @endforeach
    </select>

    <label for="date">Date:</label>
    <input type="date" name="date" required>

    <label for="time">Time:</label>
    <input type="time" name="time" required>

    <button type="submit">Schedule Appointment</button>
</form>
