<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

// REVISA QUE ESTAS DOS LÍNEAS ESTÉN ESCRITAS EXACTAMENTE ASÍ:
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminUserController;

// Rutas de Autenticación
Route::get('/login', [AuthController::class, 'showLogin'])->name('login')->middleware('guest');
Route::post('/login', [AuthController::class, 'login'])->middleware('guest');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout')->middleware('auth');

// Ruta para el Rol Usuario (Vista de perfil)
Route::get('/profile', function () {
    if (Auth::user()->role !== 'user') { return redirect('/admin/users'); }
    return view('user.profile', ['user' => Auth::user()]);
})->middleware('auth')->name('user.profile');

// Rutas para el Rol Administrador (ABM)
Route::middleware(['auth'])->group(function () {
    Route::get('/admin/users', [AdminUserController::class, 'index'])->name('admin.users.index');
    Route::get('/admin/users/create', [AdminUserController::class, 'create'])->name('admin.users.create');
    Route::post('/admin/users', [AdminUserController::class, 'store'])->name('admin.users.store');
    Route::get('/admin/users/{user}/edit', [AdminUserController::class, 'edit'])->name('admin.users.edit');
    Route::put('/admin/users/{user}', [AdminUserController::class, 'update'])->name('admin.users.update');
    Route::delete('/admin/users/{user}', [AdminUserController::class, 'destroy'])->name('admin.users.destroy');
});

// Redirección inicial
Route::get('/', function () {
    return redirect('/login');
});