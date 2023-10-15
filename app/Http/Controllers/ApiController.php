<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Http;

class ApiController extends Controller
{
    public function index()
    {
        $response = Http::get('https://run.mocky.io/v3/ce47ee53-6531-4821-a6f6-71a188eaaee0');

        $usuarios = $response->json();

        $usuariosPaginados = collect($usuarios)->chunk(10);

        return view('usuarios.index', compact('usuariosPaginados'));

    }

}
