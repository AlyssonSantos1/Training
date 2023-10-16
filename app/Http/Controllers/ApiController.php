<?php

namespace App\Http\Controllers;


use App\Models\User;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Http;
use Illuminate\Pagination\LengthAwarePaginator;


class ApiController extends Controller
{
    public function showUsers()
    {
        $page = LengthAwarePaginator::resolveCurrentPage();

    $perPage = 10;

    $request = Http::get('https://run.mocky.io/v3/ce47ee53-6531-4821-a6f6-71a188eaaee0/', [
        'page' => $page,
        'per_page' => $perPage,
    ]);

    $response = $request->json();

    $users = collect($response['users']);

    $paginator = new LengthAwarePaginator(
        $users->forPage($page, $perPage),
        $users->count(),
        $perPage,
        $page,
        [
            'path' => LengthAwarePaginator::resolveCurrentPath(),
        ]
    );

    return view('index', ['usuarios' => $paginator]);

    }


}


