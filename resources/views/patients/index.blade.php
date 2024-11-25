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
    <h1>Pacientes</h1>
    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Número</th>
                    <th>Email</th>
                    <th>Endereço</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($patients as $patient)
                <tr>
                    <td>{{ $patient->name }}</td>
                    <td>{{ $patient->number }}</td>
                    <td>{{ $patient->email }}</td>
                    <td>{{ $patient->address }}</td>
                    <td>
                        <button><a href="{{ route('patients.edit', $patient->id) }}">Editar</a></button>
                        <form action="{{ route('patients.destroy', $patient->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Tem certeza que deseja excluir esse paciente?')">Excluir</button>
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
