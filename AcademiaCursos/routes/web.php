<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CursoController;
use App\Http\Controllers\DocentesController;

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

//Cursos
Route::resource('curso/', CursoController::class);
Route::get('curso/{id}', [CursoController::class, 'show'])->name('curso.show');
Route::get('curso/{id}/edit', [CursoController::class, 'edit'])->name('curso.edit');
Route::patch('curso/{id}', [CursoController::class, 'update'])->name('curso.update');

//docentes
Route::resource('docentes/', DocentesController::class);
Route::get('docentes/{id}', [DocentesController::class, 'show'])->name('docente.show');
Route::patch('docentes/{id}', [DocentesController::class, 'update'])->name('docente.update');

