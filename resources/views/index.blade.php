<table>
    <tr>
        <th>name</th>
        <th>age</th>
        <th>email</th>
    </tr>
    @foreach ($usuarios as $usuario)
    <tr>
        <td> {{ $usuario['name'] ?? 'name' }}</td>
        <td> {{ $usuario['age'] ?? 'age' }}</td>
        <td> {{ $usuario['email'] ?? 'email' }}</td>

    </tr>
    @endforeach
    {{ $usuarios->links() }}
</table>




