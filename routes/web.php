<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ParticipanteController;

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
    return redirect('/inicio');
});

Route::get('/inicio', [ParticipanteController::class, 'index']);

Route::post('/cadastrar', [ParticipanteController::class, 'cadastrar']);

Route::get('/delete/{id}', [ParticipanteController::class, 'delete']);

