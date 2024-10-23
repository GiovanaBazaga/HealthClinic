<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inserir Novo Doutor</title>
</head>
<body>
    <h1>Inserir Novo Doutor</h1>

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

    <a href="{{ route('doctors.index') }}">Voltar à lista de doutores</a>
</body>
</html>
