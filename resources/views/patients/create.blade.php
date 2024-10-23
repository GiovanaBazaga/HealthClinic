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
    <h1>Novo Paciente</h1>
    <div class="container">
        <form action="{{ route('patients.store') }}" method="POST">
            @csrf
            <label for="cpf">CPF:</label>
            <input type="text" name="cpf" required>
            <label for="name">Name:</label>
            <input type="text" name="name" required>
            <label for="number">Phone Number:</label>
            <input type="text" name="number" required>
            <label for="email">Email:</label>
            <input type="email" name="email" required>
            <label for="address">Address:</label>
            <input type="text" name="address" required>
            <button type="submit">Add Patient</button>
        </form>
    </div>
</body>

</html>
