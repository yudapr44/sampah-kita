<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AppController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;

// ── PUBLIC ROUTES (with Visitor Tracking Middleware) ──
Route::middleware(['track.visitors'])->group(function () {
    Route::get('/',        [AppController::class, 'home']);
    Route::get('/edukasi', [AppController::class, 'edukasi']);
    Route::get('/bank',    [AppController::class, 'bank']);
    Route::get('/galeri',  [AppController::class, 'galeri']);
    Route::get('/kontak',  [AppController::class, 'kontak']);
    Route::get('/privasi', [AppController::class, 'privasi']);
    Route::get('/syarat',  [AppController::class, 'syarat']);
});

// ── ADMIN AUTH ROUTES (Login / Logout — tidak perlu middleware) ──
Route::get('/admin/login',  [AuthController::class, 'showLogin'])->name('admin.login');
Route::post('/admin/login', [AuthController::class, 'login'])->name('admin.login.post');
Route::post('/admin/logout',[AuthController::class, 'logout'])->name('admin.logout');

// ── ADMIN PROTECTED ROUTES ──
Route::middleware(['admin.auth'])->group(function () {
    Route::get('/admin',             [AdminController::class, 'index']);
    Route::get('/admin/artikel',     [AdminController::class, 'artikel']);
    Route::post('/admin/artikel',    [AdminController::class, 'storeArtikel']);
    Route::delete('/admin/artikel/{id}', [AdminController::class, 'deleteArtikel']);
    Route::get('/admin/kontak',      [AdminController::class, 'kontak']);
    Route::post('/admin/kontak',     [AdminController::class, 'updateKontak']);
    Route::post('/admin/akun',       [AdminController::class, 'updateAkun']);
});
