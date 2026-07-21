<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    // Tampilkan halaman login admin
    public function showLogin()
    {
        // Jika sudah login sebagai admin, redirect ke dashboard
        if (session('admin_logged_in')) {
            return redirect('/admin');
        }
        return view('admin.login');
    }

    // Proses login admin
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

        // Cari user berdasarkan email
        $user = User::where('email', $request->email)->first();

        // Cek user ada, password benar, dan role adalah admin
        if (!$user || !Hash::check($request->password, $user->password) || $user->role !== 'admin') {
            return back()
                ->withInput($request->only('email'))
                ->withErrors(['login' => 'Email atau password salah, atau akun bukan admin.']);
        }

        // Simpan sesi admin
        session([
            'admin_logged_in' => true,
            'admin_id'        => $user->id,
            'admin_name'      => $user->name,
            'admin_email'     => $user->email,
        ]);

        return redirect('/admin')->with('success', 'Selamat datang, ' . $user->name . '!');
    }

    // Logout admin
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
}
