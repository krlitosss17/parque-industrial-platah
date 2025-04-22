<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\VacanteController;

// Página pública principal que carga el componente Vue Landing.vue
Route::get('/', function () {
    return Inertia::render('Landing');
});

// Ruta para el dashboard (sólo para usuarios autenticados)
Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Rutas protegidas para gestión de perfil de usuario
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/vacantes', [VacanteController::class, 'index'])->name('vacantes.index');

// Rutas de autenticación generadas por Breeze
require __DIR__.'/auth.php';
