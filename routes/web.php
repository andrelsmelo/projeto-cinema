<?php

use App\Http\Controllers\MovieController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\TesteController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "webw create something great!
|
*/

require __DIR__.'/auth.php';

Route::get('/',[SiteController::class, 'index'])->name('index');
Route::get('/em-cartaz',[SiteController::class, 'showingMovies'])->name('movies');
Route::get('/em-cartaz/{id}',[SiteController::class, 'movieDetails'])->name('movie-details');

Route::group(['middleware' => 'auth'], function(){

//Rotas CRUD de Sessões

Route::get('/sessions',[SessionController::class, 'create'])->name('create-session');
Route::post('/sessions',[SessionController::class, 'store'])->name('store-session');
Route::get('/sessions/{id}/edit',[SessionController::class, 'edit'])->name('edit-session');
Route::put('/sessions/{id}',[SessionController::class, 'update'])->name('update-session');
Route::delete('/sessions/{id}',[SessionController::class, 'delete'])->name('delete-session');

//Rotas CRUD de Filmes

Route::get('/movies',[MovieController::class, 'show'])->name('view-movies');
Route::get('/movies/create',[MovieController::class, 'create'])->name('create-movie');
Route::post('/movies/create',[MovieController::class, 'store'])->name('store-movie');
Route::get('/movies/{id}/edit',[MovieController::class, 'edit'])->name('edit-movie');
Route::put('/movies/{id}',[MovieController::class, 'update'])->name('update-movie');
Route::delete('/movies/{id}',[MovieController::class, 'delete'])->name('delete-movie');

//Rotas CRUD de rooms

Route::get('/rooms',[RoomController::class, 'show'])->name('view-rooms');
Route::get('/rooms/create',[RoomController::class, 'create'])->name('create-room');
Route::post('/rooms/create',[RoomController::class, 'store'])->name('store-room');
Route::get('/rooms/{id}/edit',[RoomController::class, 'edit'])->name('edit-room');
Route::put('/rooms/{id}',[RoomController::class, 'update'])->name('update-room');
Route::delete('/rooms/{id}',[RoomController::class, 'delete'])->name('delete-room');   

});