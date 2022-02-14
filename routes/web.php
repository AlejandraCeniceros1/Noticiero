<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NoticiasController;

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

Route::get('/noticias', [NoticiasController::class, 'index'])->name('noticias.index');
Route::get('/noticias/create', [NoticiasController::class, 'create'])->name('noticias.create');
Route::post('/noticias/store', [NoticiasController::class, 'store'])->name('noticias.store');
Route::get('/noticias/{id}/edit',[NoticiasController::class, 'edit'])->name('noticias.edit');
Route::put('/noticias/{id}/update',[NoticiasController::class, 'update'])->  name('noticias.update');

Route::delete('/noticias/{id}/', [NoticiasController::class, 'destroy'])->  name('noticias.destroy');