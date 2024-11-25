<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/forms.css') }}">

    <title>Health Clinic</title>
</head>

<body>
    <div class="container">
        <h1>Editar Médico</h1>
        <form action="{{ route('doctors.update', $doctor->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="name" class="form-label">Nome</label>
                <input type="text" name="name" class="form-control" value="{{ $doctor->name }}" required>
            </div>
            <button type="submit" class="btn btn-primary">Atualizar</button>
            <button><a href="{{ route('doctors.index') }}">Cancelar</a></button>
        </form>
    </div>
</body>

</html>
