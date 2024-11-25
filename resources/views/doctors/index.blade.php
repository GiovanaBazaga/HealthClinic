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
    <h1>Médicos</h1>
    <div class="container">
        <table>
            <thead>
                <tr>
                    <th>CRM</th>
                    <th>Nome</th>
                    <th>Especialidade</th>
                </tr>
            </thead>
            <tbody>
                @foreach($doctors as $doctor)
                <tr>
                    <td>{{ $doctor->crm }}</td>
                    <td>{{ $doctor->name }}</td>
                    <td>{{ $doctor->specialty }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <a href="{{ url('/') }}" class="btn btn-secondary">Voltar ao Menu Inicial</a>

</body>

</html>
