<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <title>Editar Paciente</title>
</head>

<body>
    <div class="container">
        <h1>Edit Patient</h1>
        <form action="{{ route('patients.update', $patient->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="name" class="form-label">Nome</label>
                <input type="text" name="name" class="form-control" value="{{ $patient->name }}" required>
            </div>
            <div class="mb-3">
                <label for="number" class="form-label">Número</label>
                <input type="text" name="number" class="form-control" value="{{ $patient->number }}" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" name="email" class="form-control" value="{{ $patient->email }}" required>
            </div>
            <div class="mb-3">
                <label for="address" class="form-label">Endereço</label>
                <input type="text" name="address" class="form-control" value="{{ $patient->address }}" required>
            </div>
            <button type="submit" class="btn btn-primary">Atualizar</button>
            <button><a href="{{ route('patients.index') }}">Cancelar</a></button>
        </form>
    </div>
</body>

</html>
