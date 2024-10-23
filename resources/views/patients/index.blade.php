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
    <h1>Patients</h1>
    <div class="container">
        <table>
            <thead>
                <tr>
                    <th>CPF</th>
                    <th>Name</th>
                    <th>Phone Number</th>
                    <th>Email</th>
                    <th>Address</th>
                </tr>
            </thead>
            <tbody>
                @foreach($patients as $patient)
                <tr>
                    <td>{{ $patient->cpf }}</td>
                    <td>{{ $patient->name }}</td>
                    <td>{{ $patient->number }}</td>
                    <td>{{ $patient->email }}</td>
                    <td>{{ $patient->address }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</body>

</html>
