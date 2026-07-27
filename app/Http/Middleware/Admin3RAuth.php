<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Admin3RAuth
{
    public function handle(Request $request, Closure $next)
    {
        // Wajib mengecek sesi khusus admin 3R, bukan sesi admin umum/edukasi
        if (!session('admin_3r_logged_in')) {
            return redirect('/admin/bank-digital/login')->with('error', 'Silakan login terlebih dahulu.');
        }

        return $next($request);
    }
}