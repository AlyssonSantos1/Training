@foreach ($usuariosPaginados as $usuarios)
    <ul>
        @foreach ($usuarios as $usuario)
        <li>{{  $usuario['users']  }}</li>

        @endforeach
    </ul>
@endforeach
