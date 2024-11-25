<!DOCTYPE html>
<html>

<head>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <title>Health Clinic</title>
</head>

<body>
    <h1>Bem-vindo à Clínica</h1>

    <a href="{{ route('appointments.search.form') }}">
        <button>Procurar consultas por data</button>
    </a>

    <a href="{{ route('appointments.search.specialty.form') }}">
        <button>Procurar consultas por especialidade</button>
    </a>

    <a href="{{ route('appointments.search.doctor.form') }}">
        <button>Procurar consultas por médico</button>
    </a>

    <a href="{{ route('patients.index') }}">
        <button>Visualizar Pacientes</button>
    </a>

    <a href="{{ route('appointments.index') }}">
        <button>Visualizar Consultas</button>
    </a>

    <a href="{{ route('doctors.index') }}">
        <button>Visualizar Médicos</button>
    </a>
</body>

</html>
