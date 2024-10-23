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
