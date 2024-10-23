<h1>Patients</h1>
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
