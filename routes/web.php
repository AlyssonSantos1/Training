<?php

use App\Http\Controllers\ApiController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/index', [ApiController::class, 'showUsers']);

Route::get('/usuarios/{id}/editar', [ApiController::class, 'editar']);

Route::put('/usuarios/{id}', [ApiController::class, 'atualizar'])->name('atualizar_usuarios');


Route::get('/results', [ApiController::class, 'showResults']);

// Route::get('/usuarios', 'ApiController@index');

// Route::get('/results', [ApiController::class, 'showResults']);
