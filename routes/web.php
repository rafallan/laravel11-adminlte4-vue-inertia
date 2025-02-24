<?php

use App\Http\Controllers\Painel\LoginController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/painel', [LoginController::class, 'login'])->name('login');
Route::post('/painel', [LoginController::class, 'authenticate'])->name('authenticate');
Route::post('/painel/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/', function () {
    return Inertia::render('Dashboard');
})->name('dashboard');
