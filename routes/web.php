<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;

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
Route::group(['middleware' => 'auth'], function () {


Route::get('/dashboard', [PostController::class, 'index'])->name('dashboard');
Route::get('vist-post/{post}', [PostController::class, 'vist'])->name('vist-post');
Route::get('perfil/{user}', [ProfileController::class, 'perfil'])->name('perfil');
Route::post('perfil/store', [ProfileController::class, 'storeperfil'])->name('store.perfil');
Route::post('/dashboard/agregar', [PostController::class, 'store'])->name('nuevo.post');
Route::delete('/dashboard/eliminar{id}', [PostController::class, 'eliminar'])->name('borrar.post');
Route::put('/dashboard/editar{id}', [ProfileController::class, 'editar'])->name('editar.post');
Route::get('tabla/', [PostController::class, 'tabla'])->name('tabla');



});
require __DIR__.'/auth.php';
