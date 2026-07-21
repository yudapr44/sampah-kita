<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Setting;
use App\Models\Visitor;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class AdminController extends Controller
{
    // Dashboard Admin
    public function index()
    {
        $totalArticles = Article::count();
        $publishedCount = Article::where('status', 'Aktif')->count();
        $draftCount = Article::where('status', 'Draft')->count();
        $totalViews = Article::sum('views');
        
        $categoriesCount = Article::distinct('category')->count('category');

        // 1. Get real unique visitors this month
        $monthlyVisitors = Visitor::whereMonth('visited_at', date('m'))
            ->whereYear('visited_at', date('Y'))
            ->count();

        // 2. Get real traffic data for the last 7 days
        $trafficData = [];
        for ($i = 6; $i >= 0; $i--) {
            $date = date('Y-m-d', strtotime("-$i days"));
            $dayName = date('D', strtotime("-$i days"));
            
            $count = Visitor::where('visited_at', $date)->count();
            
            $trafficData[] = [
                'date' => $date,
                'day' => $dayName,
                'count' => $count
            ];
        }

        return view('admin.dashboard', compact(
            'totalArticles',
            'publishedCount',
            'draftCount',
            'totalViews',
            'categoriesCount',
            'monthlyVisitors',
            'trafficData'
        ));
    }

    // Kelola Artikel
    public function artikel()
    {
        $articles = Article::orderBy('id', 'desc')->get();
        $publishedCount = Article::where('status', 'Aktif')->count();
        $draftCount = Article::where('status', 'Draft')->count();
        $totalViews = Article::sum('views');

        return view('admin.artikel', compact('articles', 'publishedCount', 'draftCount', 'totalViews'));
    }

    // Simpan Artikel Baru (via POST)
    public function storeArtikel(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'category' => 'required|string',
            'content' => 'required|string',
        ]);

        $article = Article::create([
            'title' => $request->title,
            'slug' => Str::slug($request->title) . '-' . rand(100, 999),
            'category' => $request->category,
            'content' => $request->content,
            'status' => 'Aktif',
            'views' => 0
        ]);

        return response()->json([
            'success' => true,
            'article' => $article
        ]);
    }

    // Kelola Kontak / Setting
    public function kontak()
    {
        $setting = Setting::first();
        $admin = \App\Models\User::first();
        return view('admin.kontak', compact('setting', 'admin'));
    }

    // Simpan Perubahan Setting (via POST)
    public function updateKontak(Request $request)
    {
        $setting = Setting::first();
        if (!$setting) {
            $setting = new Setting();
        }

        $setting->whatsapp = $request->whatsapp;
        $setting->email = $request->email;
        $setting->address = $request->address;
        $setting->instagram = $request->instagram;
        $setting->tiktok = $request->tiktok;
        $setting->save();

        return response()->json(['success' => true]);
    }

    // Simpan Perubahan Akun Admin (via POST)
    public function updateAkun(Request $request)
    {
        $admin = \App\Models\User::first();
        if (!$admin) {
            return response()->json(['success' => false, 'message' => 'Admin tidak ditemukan']);
        }

        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . $admin->id,
            'password' => 'nullable|string|min:6'
        ]);

        $admin->name = $request->name;
        $admin->email = $request->email;
        if ($request->password) {
            $admin->password = bcrypt($request->password);
        }
        $admin->save();

        return response()->json(['success' => true]);
    }
}
