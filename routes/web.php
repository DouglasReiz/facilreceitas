<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RecipeController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

require __DIR__.'/auth.php';
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
})->name('page.index');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// ROTAS DE USUÁRIO
Route::get('/users',[UserController::class, 'index'])->middleware(['auth','isAdmin'])->name('users.index');
Route::get('/users/create', [UserController::class, 'create'])->middleware(['auth','isAdmin'])->name('users.create');
Route::get('/users/{id}/edit', [UserController::class, 'edit'])->middleware(['auth','isAdmin'])->name('users.edit');
Route::put('/users/{id}', [UserController::class, 'update'])->middleware(['auth','isAdmin'])->name('users.update');
Route::post('/users', [UserController::class, 'store'])->middleware(['auth','isAdmin'])->name('users.store');
Route::delete('/users/{id}',[UserController::class, 'delete'])->middleware(['auth','isAdmin'])->name('users.delete');
Route::get('/users/{id}',[UserController::class,'show'])->middleware(['auth','isAdmin'])->name('users.show');

// ROTAS DE RECEITAS
Route::get('/receitas', [RecipeController::class, 'index'])->name('recipes.index');
Route::get('/receitas/create', [RecipeController::class, 'create'])->middleware(['auth','isAdmin'])->name('recipes.create');
Route::get('/receitas/{id}/edit', [RecipeController::class, 'edit'])->name('recipes.edit');
Route::put('recipes/{id}', [RecipeController::class, 'update'])->name('recipes.update');
Route::post('/receitas', [RecipeController::class, 'store'])->middleware(['auth','isAdmin'])->name('recipes.store');
Route::delete('/receitas/{id}', [RecipeController::class, 'delete'])->name('recipes.delete');
Route::get('/recipes/{id}', [RecipeController::class, 'show'])->name('recipes.show');