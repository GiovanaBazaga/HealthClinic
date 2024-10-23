<!DOCTYPE html>
<html>
<head>
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
</body>
</html>
