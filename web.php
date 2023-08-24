<?php

use App\Http\Controllers\tareaController;
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
Route::get('/', [tareaController::class, 'tarea.index']);
Route::get('/tarea', [tareaController::class, 'tarea.index']);
Route::get('/tarea/mostrar/{id}', [tareaController::class, 'tarea.show'])->whereNumber('id');
Route::get('/tarea/create', [tareaController::class, 'tarea.create']);
Route::get('/tarea/editar/{id}', [tareaController::class, 'tarea.edit'])->whereNumber('id');
Route::get('/tarea/eliminar/{id}', [tareaController::class, 'tarea.eliminar'])->whereNumber('id');



Route::get('/', function () {
    return view('welcome');
});
