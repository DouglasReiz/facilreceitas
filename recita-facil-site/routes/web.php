<?php

use App\Http\Controllers\GoogleSocialiteController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ReceitasController;
use App\Http\Controllers\RecipesController;
use App\Http\Controllers\UserController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

require __DIR__.'/auth.php';


Route::get ('/', function(){
    return view('index');
})->name('page.index');

route::get('/receitas',[ReceitasController::class, 'index'])->name('receitas.index');

// ROTAS DE USUÁRIO
Route::get('/users',[UserController::class, 'index'])->middleware(['auth','is_admin'])->name('users.index');
Route::get('/users/create', [UserController::class, 'create'])->middleware(['auth','is_admin'])->name('users.create');
Route::get('/users/{id}/edit', [UserController::class, 'edit'])->middleware(['auth','is_admin'])->name('users.edit');
Route::put('/users/{id}', [UserController::class, 'update'])->middleware(['auth','is_admin'])->name('users.update');
Route::post('/users', [UserController::class, 'store'])->middleware(['auth','is_admin'])->name('users.store');
Route::delete('/users/{id}',[UserController::class, 'delete'])->middleware(['auth','is_admin'])->name('users.delete');
Route::get('/users/{id}',[UserController::class,'show'])->middleware(['auth','is_admin'])->name('users.show');

// ROTAS DE RECEITAS
Route::get('/receitas', [RecipesController::class, 'index'])->name('recipes.index');
Route::get('/receitas/create', [RecipesController::class, 'create'])->middleware(['auth','is_admin'])->name('recipes.create');
Route::get('/receitas/{id}/edit', [RecipesController::class, 'edit'])->name('recipes.edit');
Route::put('recipes/{id}', [RecipesController::class, 'update'])->name('recipes.update');
Route::post('/receitas', [RecipesController::class, 'store'])->middleware(['auth','is_admin'])->name('recipes.store');
Route::delete('/receitas/{id}', [RecipesController::class, 'delete'])->name('recipes.delete');
Route::get('/recipes/{id}', [RecipesController::class, 'show'])->name('recipes.show');


Route::get('/dashboard', function () {
    return view('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('auth/google', [GoogleSocialiteController::class, 'redirectToGoogle']);
Route::get('callback/google', [GoogleSocialiteController::class, 'handleCallback']);
