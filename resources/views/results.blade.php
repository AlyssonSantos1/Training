@extends('layouts.app')

@section('content')
    <h1>Resultados Paginados</h1>

    <ul>
        @foreach ($paginator as $item)
            <li>{{ $item }}</li>
        @endforeach
    </ul>

    {{ $paginator->links() }}
@endsection
