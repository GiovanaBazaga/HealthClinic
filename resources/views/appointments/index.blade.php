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
    <h1>Todas as Consultas</h1>
    <div class="container">
        <table>
            <thead>
                <tr>
                    <th>Doutor</th>
                    <th>Paciente</th>
                    <th>Data</th>
                    <th>Hora</th>
                    <th>Ações</th> <!-- Coluna para os botões de ação -->
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
                        <button><a href="{{ route('appointments.edit', $appointment->id) }}">Editar</a></button>
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
    </div>
    <a href="{{ url('/') }}" class="btn btn-secondary">Voltar ao Menu Inicial</a>
</body>

</html>
