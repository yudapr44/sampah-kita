<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Setting;
use Illuminate\Http\Request;

class AppController extends Controller
{
    // Home Page
    public function home()
    {
        $setting = Setting::first();
        return view('user.home', compact('setting'));
    }

    // Edukasi Page
    public function edukasi()
    {
        $articles = Article::where('status', 'Aktif')
            ->whereIn('category', ['Dasar', 'Tips'])
            ->get();
        return view('user.edukasi', compact('articles'));
    }

    // Pengelolaan Page (formerly Bank)
    public function bank()
    {
        $setting = Setting::first();
        // Get articles relevant to management
        $articles = Article::where('status', 'Aktif')
            ->whereIn('category', ['Pengelolaan', 'Manfaat'])
            ->get();
        return view('user.bank', compact('setting', 'articles'));
    }

    // Galeri Page
    public function galeri()
    {
        return view('user.galeri');
    }
}
