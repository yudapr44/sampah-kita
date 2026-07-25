<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AppController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BankDigitalController; // <-- 1. Import Controller Baru

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

// ── ROUTE KHUSUS WARGA (Public - Tanpa Login) ──
Route::get('/bank-digital', [BankDigitalController::class, 'publicUser'])->name('bank.digital.user');

// ── ROUTE KHUSUS ADMIN / PENGELOLA (Akses Input & Transaksi) ──
Route::get('/admin/bank-digital',           [BankDigitalController::class, 'index'])->name('bank.digital.admin');
Route::post('/admin/bank-digital/nasabah',   [BankDigitalController::class, 'storeNasabah'])->name('nasabah.store');
Route::post('/admin/bank-digital/transaksi', [BankDigitalController::class, 'storeTransaksi'])->name('transaksi.store');

// ── ADMIN AUTH ROUTES (Login / Logout — tidak perlu middleware) ──
Route::get('/admin/login',  [AuthController::class, 'showLogin'])->name('admin.login');
Route::post('/admin/login', [AuthController::class, 'login'])->name('admin.login.post');
Route::post('/admin/logout',[AuthController::class, 'logout'])->name('admin.logout');

// ── ADMIN PROTECTED ROUTES ──
Route::middleware(['admin.auth'])->group(function () {
    Route::get('/admin',                 [AdminController::class, 'index']);
    Route::get('/admin/artikel',         [AdminController::class, 'artikel']);
    Route::post('/admin/artikel',        [AdminController::class, 'storeArtikel']);
    Route::delete('/admin/artikel/{id}', [AdminController::class, 'deleteArtikel']);
    Route::get('/admin/kontak',          [AdminController::class, 'kontak']);
    Route::post('/admin/kontak',         [AdminController::class, 'updateKontak']);
    Route::post('/admin/akun',           [AdminController::class, 'updateAkun']);
});