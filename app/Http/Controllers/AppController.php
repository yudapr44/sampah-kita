<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Gallery;
use App\Models\Setting;
use Illuminate\Http\Request;

class AppController extends Controller
{
    // Home Page
    public function home()
    {
        $setting = Setting::first();
        $articles = Article::where('status', 'Aktif')->latest()->take(3)->get();
        $galleries = Gallery::orderBy('is_featured', 'desc')->orderBy('id', 'desc')->take(6)->get();
        return view('user.home', compact('setting', 'articles', 'galleries'));
    }

    // Edukasi Page
    public function edukasi()
    {
        $setting = Setting::first();
        $articles = Article::where('status', 'Aktif')->latest()->get();
        return view('user.edukasi', compact('setting', 'articles'));
    }

    // Pengelolaan Page
    public function bank()
    {
        $setting = Setting::first();
        // Load only articles specifically for Bank Sampah & Pengelolaan (excluding Edukasi duplicates)
        $articles = Article::where('status', 'Aktif')
            ->whereIn('category', ['Pengelolaan', 'Manfaat'])
            ->where('title', 'NOT LIKE', '%Pembakaran%')
            ->orderBy('id', 'asc')
            ->get();
        return view('user.bank', compact('setting', 'articles'));
    }

    // Galeri Page
    public function galeri()
    {
        $setting = Setting::first();
        $galleries = Gallery::orderBy('is_featured', 'desc')->orderBy('id', 'desc')->get();
        return view('user.galeri', compact('setting', 'galleries'));
    }
}
