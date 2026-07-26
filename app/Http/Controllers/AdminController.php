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

        $totalNasabah = class_exists(\App\Models\Nasabah::class) ? \App\Models\Nasabah::count() : 0;
        $totalTransaksi = class_exists(\App\Models\Transaksi::class) ? \App\Models\Transaksi::count() : 0;
        $totalSaldo = class_exists(\App\Models\Nasabah::class) ? \App\Models\Nasabah::sum('saldo') : 0;

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

        $latestArticles = Article::latest()->take(3)->get();
        $latestGalleries = class_exists(\App\Models\Gallery::class) ? \App\Models\Gallery::latest()->take(3)->get() : collect();

        return view('admin.dashboard', compact(
            'totalArticles',
            'publishedCount',
            'draftCount',
            'totalViews',
            'categoriesCount',
            'totalNasabah',
            'totalTransaksi',
            'totalSaldo',
            'monthlyVisitors',
            'trafficData',
            'latestArticles',
            'latestGalleries'
        ));
    }

    // Kelola Artikel
    public function artikel()
    {
        $articles = Article::with('user')->orderBy('id', 'desc')->get();
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

        $adminId = session('admin_id') ?? \App\Models\User::first()?->id;

        $article = Article::create([
            'user_id' => $adminId,
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

    // Hapus Artikel (via DELETE)
    public function deleteArtikel($id)
    {
        $article = Article::find($id);
        if (!$article) {
            return response()->json(['success' => false, 'message' => 'Artikel tidak ditemukan'], 404);
        }

        $article->delete();

        return response()->json(['success' => true, 'message' => 'Artikel berhasil dihapus']);
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

    // Kelola Akun Admin (via POST)
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

    // ── KELOLA GALERI (CRUD) ──
    public function galeri()
    {
        $galleries = \App\Models\Gallery::orderBy('is_featured', 'desc')->orderBy('id', 'desc')->get();
        return view('admin.galeri', compact('galleries'));
    }

    public function storeGaleri(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'category' => 'required|string',
            'type' => 'required|string',
            'description' => 'nullable|string',
            'uploader' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:5120',
            'image_url' => 'nullable|string'
        ]);

        $imageUrl = $request->image_url;

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $fileName = time() . '_' . Str::slug($request->title) . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('uploads/galeri'), $fileName);
            $imageUrl = '/uploads/galeri/' . $fileName;
        }

        if (!$imageUrl) {
            $imageUrl = '/images/hero_karawang.png';
        }

        if ($request->has('is_featured') && $request->is_featured) {
            \App\Models\Gallery::query()->update(['is_featured' => false]);
        }

        $gallery = \App\Models\Gallery::create([
            'title' => $request->title,
            'category' => $request->category,
            'type' => $request->type,
            'image_url' => $imageUrl,
            'description' => $request->description,
            'uploader' => $request->uploader ?: (session('admin_name') ?? 'Admin Utama'),
            'is_featured' => $request->has('is_featured') ? (bool)$request->is_featured : false
        ]);

        return response()->json([
            'success' => true,
            'gallery' => $gallery
        ]);
    }

    public function updateGaleri(Request $request, $id)
    {
        $gallery = \App\Models\Gallery::find($id);
        if (!$gallery) {
            return response()->json(['success' => false, 'message' => 'Media galeri tidak ditemukan'], 404);
        }

        $request->validate([
            'title' => 'required|string|max:255',
            'category' => 'required|string',
            'type' => 'required|string',
            'description' => 'nullable|string',
            'uploader' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:5120',
            'image_url' => 'nullable|string'
        ]);

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $fileName = time() . '_' . Str::slug($request->title) . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('uploads/galeri'), $fileName);
            $gallery->image_url = '/uploads/galeri/' . $fileName;
        } elseif ($request->filled('image_url')) {
            $gallery->image_url = $request->image_url;
        }

        if ($request->has('is_featured') && $request->is_featured) {
            \App\Models\Gallery::where('id', '!=', $id)->update(['is_featured' => false]);
            $gallery->is_featured = true;
        } elseif ($request->has('is_featured')) {
            $gallery->is_featured = (bool)$request->is_featured;
        }

        $gallery->title = $request->title;
        $gallery->category = $request->category;
        $gallery->type = $request->type;
        $gallery->description = $request->description;
        if ($request->filled('uploader')) {
            $gallery->uploader = $request->uploader;
        }
        $gallery->save();

        return response()->json([
            'success' => true,
            'gallery' => $gallery
        ]);
    }

    public function deleteGaleri($id)
    {
        $gallery = \App\Models\Gallery::find($id);
        if (!$gallery) {
            return response()->json(['success' => false, 'message' => 'Media galeri tidak ditemukan'], 404);
        }

        $gallery->delete();

        return response()->json(['success' => true, 'message' => 'Media galeri berhasil dihapus']);
    }
}
