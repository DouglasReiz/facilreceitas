<?php

use App\Http\Controllers\ProfileController;

use App\Http\Controllers\ReceitasController;
use App\Http\Controllers\UserController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;



Route::get ('/', function(){
    return view('index');
})->name('page.index');

route::get('/receitas',[ReceitasController::class, 'index'])->name('receitas.index');

// ROTAS DE USUÁRIO
Route::get('/users',[UserController::class, 'index'])->name('users.index');
Route::get('/users/create', [UserController::class, 'create'])->name('users.create');
Route::get('/users/{id}/edit', [UserController::class, 'edit'])->name('users.edit');
Route::put('/users/{id}', [UserController::class, 'update'])->name('users.update');
Route::post('/users', [UserController::class, 'store'])->name('users.store');
Route::delete('/delete/{id}',[UserController::class, 'delete'])->name('users.delete');
Route::get('/users/{id}',[UserController::class,'show'])->name('users.show');



Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
