<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    // ──────────────────────────────────────────────
    // ADMIN EDUKASI (UTAMA)
    // ──────────────────────────────────────────────

    // Tampilkan halaman login admin edukasi
    public function showLogin()
    {
        // Jika sudah login sebagai admin edukasi, redirect ke dashboard edukasi
        if (session('admin_logged_in')) {
            return redirect('/admin');
        }
        return view('admin.login');
    }

    // Proses login admin edukasi
    public function login(Request $request)
    {
        $request->validate([
            'email'    => 'required|email',
            'password' => 'required|string',
        ], [
            'email.required'    => 'Email wajib diisi.',
            'email.email'       => 'Format email tidak valid.',
            'password.required' => 'Password wajib diisi.',
        ]);

        $user = User::where('email', $request->email)->first();

        if (!$user || !Hash::check($request->password, $user->password) || $user->role !== 'admin') {
            return back()
                ->withInput($request->only('email'))
                ->withErrors(['login' => 'Email atau password salah, atau akun bukan admin.']);
        }

        // Simpan sesi admin edukasi
        session([
            'admin_logged_in' => true,
            'admin_id'        => $user->id,
            'admin_name'      => $user->name,
            'admin_email'     => $user->email,
        ]);

        return redirect('/admin')->with('success', 'Selamat datang, ' . $user->name . '!');
    }

    // Logout admin edukasi
    public function logout(Request $request)
    {
        $request->session()->forget([
            'admin_logged_in',
            'admin_id',
            'admin_name',
            'admin_email',
        ]);

        return redirect('/admin/login')->with('success', 'Anda berhasil logout.');
    }


    // ──────────────────────────────────────────────
    // ADMIN 3R (BANK DIGITAL) — TERISOLASI
    // ──────────────────────────────────────────────

    // Tampilkan halaman login khusus 3R
    public function showLogin3R()
    {
        // Jika sudah login khusus 3R, langsung redirect ke panel bank digital
        if (session('admin_3r_logged_in')) {
            return redirect('/admin/bank-digital');
        }
        return view('admin.3r-login');
    }

    // Proses login khusus 3R
    public function login3R(Request $request)
    {
        $request->validate([
            'email'    => 'required|email',
            'password' => 'required|string',
        ], [
            'email.required'    => 'Email wajib diisi.',
            'email.email'       => 'Format email tidak valid.',
            'password.required' => 'Password wajib diisi.',
        ]);

        $user = User::where('email', $request->email)->first();

        if (!$user || !Hash::check($request->password, $user->password) || $user->role !== 'admin') {
            return back()
                ->withInput($request->only('email'))
                ->withErrors(['login' => 'Email atau password salah, atau akun bukan admin.']);
        }

        // Simpan sesi khusus admin 3R
        session([
            'admin_3r_logged_in' => true,
            'admin_3r_id'        => $user->id,
            'admin_3r_name'      => $user->name,
            'admin_3r_email'     => $user->email,
        ]);

        return redirect('/admin/bank-digital')->with('success', 'Selamat datang di Panel Bank Digital 3R, ' . $user->name . '!');
    }

    // Logout khusus 3R
    public function logout3R(Request $request)
    {
        $request->session()->forget([
            'admin_3r_logged_in',
            'admin_3r_id',
            'admin_3r_name',
            'admin_3r_email',
        ]);

        return redirect('/admin/bank-digital/login')->with('success', 'Anda berhasil logout dari Panel 3R.');
    }
}