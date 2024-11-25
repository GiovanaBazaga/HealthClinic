<!DOCTYPE html>
<html>

<head>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/welcome.css') }}">

    <title>Health Clinic</title>
</head>

<body>

    <header>
        <h1>Bem-vindo à Clínica</h1>
        <p>Onde fazemos o nosso melhor para facilitar o seu negócio</p>
    </header>

    <h2>Selecione o que deseja</h2>

    <div class="container">
        <a href="{{ route('appointments.search.form') }}">Procurar consultas por data</a>
        <a href="{{ route('appointments.search.specialty.form') }}">Procurar consultas por especialidade</a>
        <a href="{{ route('appointments.search.doctor.form') }}">Procurar consultas por médico</a>
    </div>
    <div class="container">
        <a href="{{ route('patients.index') }}">Visualizar Pacientes</a>
        <a href="{{ route('appointments.index') }}">Visualizar Consultas</a>
        <a href="{{ route('doctors.index') }}">Visualizar Médicos</a>
    </div>
    <div class="container">
        <a href="{{ route('patients.create') }}">Adicionar Paciente</a>
        <a href="{{ route('appointments.create') }}">Adicionar Consulta</a>
        <a href="{{ route('doctors.create') }}">Adicionar Médico</a>
    </div>
</body>

</html>
