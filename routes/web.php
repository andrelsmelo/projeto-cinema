<?php

use App\Http\Controllers\MovieController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\SiteController;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::get('/',[SiteController::class, 'index'])->name('index');
Route::get('/em-cartaz',[SiteController::class, 'showingMovies'])->name('movies');
Route::get('/em-cartaz/{id}',[SiteController::class, 'movieDetails'])->name('movie-details');

//Rotas CRUD de Sessões

Route::get('/sessoes',[SessionController::class, 'create'])->name('create-session');
Route::post('/sessoes',[SessionController::class, 'store'])->name('store-session');
Route::get('/sessoes/{id}/edit',[SessionController::class, 'edit'])->name('edit-session');
Route::put('/sessoes/{id}',[SessionController::class, 'update'])->name('update-session');
Route::delete('/sessoes/{id}',[SessionController::class, 'delete'])->name('delete-session');

//Rotas CRUD de Filmes

Route::get('/filmes',[MovieController::class, 'show'])->name('view-movies');
Route::get('/filmes/create',[MovieController::class, 'create'])->name('create-movie');
Route::post('/filmes/create',[MovieController::class, 'store'])->name('store-movie');
Route::get('/filmes/{id}/edit',[MovieController::class, 'edit'])->name('edit-movie');
Route::put('/filmes/{id}',[MovieController::class, 'update'])->name('update-movie');
Route::delete('/filmes/{id}',[MovieController::class, 'delete'])->name('delete-movie');

//Rotas CRUD de Salas

Route::get('/salas',[RoomController::class, 'show'])->name('view-rooms');
Route::get('/salas/create',[RoomController::class, 'create'])->name('create-room');
Route::post('/salas/create',[RoomController::class, 'store'])->name('store-room');
Route::get('/salas/{id}/edit',[RoomController::class, 'edit'])->name('edit-room');
Route::put('/salas/{id}',[RoomController::class, 'update'])->name('update-room');
Route::delete('/salas/{id}',[RoomController::class, 'delete'])->name('delete-room');
