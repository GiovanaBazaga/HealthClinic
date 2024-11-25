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
    <h1>Novo Médico</h1>
    <div class="container">

        <form action="{{ route('doctors.store') }}" method="POST">
            @csrf
            <div>
                <label for="crm">CRM:</label>
                <input type="text" id="crm" name="crm" value="{{ old('crm') }}">
                @error('crm')
                <p style="color:red;">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="name">Nome:</label>
                <input type="text" id="name" name="name" value="{{ old('name') }}">
                @error('name')
                <p style="color:red;">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="specialty">Especialidade:</label>
                <input type="text" id="specialty" name="specialty" value="{{ old('specialty') }}">
                @error('specialty')
                <p style="color:red;">{{ $message }}</p>
                @enderror
            </div>

            <button type="submit">Inserir</button>
        </form>
    </div>

    <a href="{{ url('/') }}" class="btn btn-secondary">Voltar ao Menu Inicial</a>
</body>

</html>
