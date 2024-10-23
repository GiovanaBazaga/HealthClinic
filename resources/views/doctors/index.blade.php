<h1>Doctors</h1>
<table>
    <thead>
        <tr>
            <th>CRM</th>
            <th>Name</th>
            <th>Specialty</th>
        </tr>
    </thead>
    <tbody>
        @foreach($doctors as $doctor)
            <tr>
                <td>{{ $doctor->crm }}</td>
                <td>{{ $doctor->name }}</td>
                <td>{{ $doctor->specialty }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
