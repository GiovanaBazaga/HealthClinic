<h1>Appointments</h1>
<table>
    <thead>
        <tr>
            <th>Doctor</th>
            <th>Patient</th>
            <th>Date</th>
            <th>Time</th>
            <th>Actions</th> <!-- Coluna para os botões de ação -->
        </tr>
    </thead>
    <tbody>
        @foreach($appointments as $appointment)
            <tr>
                <td>{{ $appointment->doctor->name }}</td>
                <td>{{ $appointment->patient->name }}</td>
                <td>{{ $appointment->date }}</td>
                <td>{{ $appointment->time }}</td>
                <td>
                    <!-- Edit -->
                    <button><a href="{{ route('appointments.edit', $appointment->id) }}">Editar</a></button>

                    <!-- Delete -->
                    <form action="{{ route('appointments.destroy', $appointment->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" onclick="return confirm('Tem certeza que deseja excluir esta consulta?');">Excluir</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
