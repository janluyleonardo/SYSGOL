<?php

use App\Http\Controllers\ConfiguraController;
use App\Http\Controllers\EquiposControler;
use App\Http\Controllers\EstadisticaControler;
use App\Http\Controllers\GoleadorControler;
use App\Http\Controllers\JugadoresControler;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

// Route::get('/equipos', function () {
//     return view('equipos.equipos');
// })->name('equipos');

Route::get('equipos', [EquiposControler::class, 'index'])->name('equipos.index');

Route::get('estadistica', [EstadisticaControler::class, 'index'])->name('estadistica.index');

Route::get('goleador', [GoleadorControler::class, 'index'])->name('goleador.index');

Route::get('jugador', [JugadoresControler::class, 'index'])->name('jugador.index');

Route::get('configurar', [ConfiguraController::class, 'index'])->name('config.index');