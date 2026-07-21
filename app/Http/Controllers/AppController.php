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
        // Get all active articles so user can view all published materials
        $articles = Article::where('status', 'Aktif')
            ->latest()
            ->get();
        return view('user.edukasi', compact('articles'));
    }

    // Pengelolaan Page
    public function bank()
    {
        $setting = Setting::first();
        $articles = Article::where('status', 'Aktif')
            ->latest()
            ->get();
        return view('user.bank', compact('setting', 'articles'));
    }

    // Galeri Page
    public function galeri()
    {
        return view('user.galeri');
    }
}
