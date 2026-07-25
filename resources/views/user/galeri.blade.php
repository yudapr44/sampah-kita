<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galeri Kegiatan — Admin Panel Desa Balonggandu</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&family=Be+Vietnam+Pro:wght@400;500;600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@400,0..1&display=block" rel="stylesheet">
    <style>
        * { font-family: 'Be Vietnam Pro', sans-serif; }
        h1,h2,h3,h4,h5 { font-family: 'Plus Jakarta Sans', sans-serif; }
        .fill-icon { font-variation-settings: 'FILL' 1; }
    </style>
</head>
<body class="bg-[#f3f4f6] text-[#191c1d] min-h-screen flex overflow-x-hidden">

    <!-- SIDEBAR UNIFORM -->
    <aside id="adminSidebar" class="w-64 bg-[#012d1d] text-white flex flex-col justify-between p-5 min-h-screen sticky top-0 shadow-xl z-20 flex-shrink-0 transition-all duration-300">
        <div>
            <div class="flex items-center gap-3 pb-6 border-b border-white/10 mb-6">
                <div class="w-10 h-10 rounded-xl bg-[#fd8603] flex items-center justify-center text-white shadow-md">
                    <span class="material-symbols-outlined fill-icon text-[24px]">analytics</span>
                </div>
                <div>
                    <h1 class="font-extrabold text-[16px] leading-none">SIP 3R Balonggandu</h1>
                    <p class="text-[11px] text-[#a5d0b9] mt-1">Admin Panel Desa</p>
                </div>
            </div>

            <nav class="space-y-1.5">
                <a href="/admin" class="flex items-center gap-3 px-4 py-3 rounded-xl text-gray-300 hover:text-white hover:bg-white/10 font-semibold text-xs transition-all">
                    <span class="material-symbols-outlined text-[20px]">dashboard</span>
                    Dashboard Utama
                </a>
                <a href="/admin/bank-digital" class="flex items-center gap-3 px-4 py-3 rounded-xl text-gray-300 hover:text-white hover:bg-white/10 font-semibold text-xs transition-all">
                    <span class="material-symbols-outlined text-[20px] text-[#fd8603]">analytics</span>
                    Data Digital 3R
                </a>
                <a href="/admin/artikel" class="flex items-center gap-3 px-4 py-3 rounded-xl text-gray-300 hover:text-white hover:bg-white/10 font-semibold text-xs transition-all">
                    <span class="material-symbols-outlined text-[20px]">school</span>
                    Artikel Edukasi
                </a>
                <a href="/admin/galeri" class="flex items-center gap-3 px-4 py-3 rounded-xl bg-white/15 text-white font-bold text-xs shadow-inner">
                    <span class="material-symbols-outlined text-[20px] fill-icon">photo_library</span>
                    Galeri Kegiatan
                </a>

                <div class="pt-4 mt-4 border-t border-white/10">
                    <a href="/bank-digital" target="_blank" class="flex items-center justify-between px-4 py-2.5 rounded-xl bg-emerald-900/50 hover:bg-emerald-900 text-[#a5d0b9] font-bold text-xs transition-all border border-emerald-700/50">
                        <span class="flex items-center gap-2">
                            <span class="material-symbols-outlined text-[18px]">public</span>
                            Portal Warga 3R
                        </span>
                        <span class="material-symbols-outlined text-[14px]">open_in_new</span>
                    </a>
                </div>
            </nav>
        </div>

        <div class="pt-4 border-t border-white/10">
            <div class="flex items-center gap-3 mb-3 px-2">
                <div class="w-9 h-9 rounded-full bg-emerald-500/20 border border-emerald-400/30 flex items-center justify-center text-[#a5d0b9]">
                    <span class="material-symbols-outlined text-[20px]">person</span>
                </div>
                <div class="overflow-hidden">
                    <p class="text-xs font-bold truncate">Admin Balonggandu</p>
                    <p class="text-[10px] text-gray-400 truncate">admin@balonggandu.desa.id</p>
                </div>
            </div>
            <form action="{{ route('admin.logout') }}" method="POST">
                @csrf
                <button type="submit" class="w-full bg-red-500/20 hover:bg-red-600 text-red-200 hover:text-white font-bold py-2.5 rounded-xl transition-all text-xs flex items-center justify-center gap-2 border border-red-500/30">
                    <span class="material-symbols-outlined text-[18px]">logout</span>
                    Keluar Sistem
                </button>
            </form>
        </div>
    </aside>

    <!-- MAIN CONTENT -->
    <main class="flex-1 p-4 sm:p-8 overflow-y-auto w-full transition-all duration-300">
        <div class="flex items-center justify-between gap-4 mb-8 bg-white p-4 sm:p-6 rounded-3xl border border-gray-100 shadow-sm">
            <div class="flex items-center gap-3">
                <button onclick="toggleAdminSidebar()" class="p-2.5 rounded-2xl bg-gray-100 hover:bg-[#012d1d] hover:text-white text-[#012d1d] transition-all flex items-center justify-center shadow-sm cursor-pointer">
                    <span class="material-symbols-outlined text-[24px]">menu</span>
                </button>
                <div>
                    <h2 class="text-base sm:text-xl font-extrabold text-[#012d1d]">Galeri &amp; Dokumentasi Kegiatan 🖼️</h2>
                    <p class="text-[11px] sm:text-xs text-gray-500 mt-0.5">Kelola foto aksi gotong royong dan sosialisasi 3R Desa Balonggandu</p>
                </div>
            </div>
        </div>

        <div class="max-w-2xl bg-white p-8 rounded-3xl border border-gray-100 shadow-sm">
            @if(session('success'))
                <div class="mb-6 p-4 bg-emerald-600 text-white rounded-2xl flex items-center gap-3">
                    <span class="material-symbols-outlined fill-icon">check_circle</span>
                    <p class="text-xs font-semibold">{{ session('success') }}</p>
                </div>
            @endif

            <form action="/admin/kontak" method="POST" class="space-y-5">
                @csrf
                <div>
                    <label class="block text-xs font-bold text-gray-700 mb-1.5">Nomor WhatsApp Layanan Desa</label>
                    <input type="text" name="whatsapp" value="{{ $setting->whatsapp ?? '6281234567890' }}" required class="w-full rounded-xl border-gray-200 bg-gray-50 text-xs font-semibold p-3 focus:bg-white focus:border-[#012d1d] focus:ring-0">
                </div>

                <div>
                    <label class="block text-xs font-bold text-gray-700 mb-1.5">Alamat Kantor Desa Balonggandu</label>
                    <textarea name="alamat" rows="3" required class="w-full rounded-xl border-gray-200 bg-gray-50 text-xs font-semibold p-3 focus:bg-white focus:border-[#012d1d] focus:ring-0">{{ $setting->alamat ?? 'Jl. Raya Desa Balonggandu No. 12, Kec. Jatisari, Kab. Karawang' }}</textarea>
                </div>

                <div>
                    <label class="block text-xs font-bold text-gray-700 mb-1.5">Email Layanan</label>
                    <input type="email" name="email" value="{{ $setting->email ?? 'admin@balonggandu.desa.id' }}" required class="w-full rounded-xl border-gray-200 bg-gray-50 text-xs font-semibold p-3 focus:bg-white focus:border-[#012d1d] focus:ring-0">
                </div>

                <button type="submit" class="w-full bg-[#012d1d] hover:bg-[#1b4332] text-white font-bold py-3.5 rounded-xl transition-all shadow-md text-xs flex items-center justify-center gap-2">
                    <span class="material-symbols-outlined text-[18px]">save</span>
                    Simpan Perubahan
                </button>
            </form>
        </div>
    </main>

    <script>
        function toggleAdminSidebar() {
            document.getElementById('adminSidebar').classList.toggle('-ml-64');
        }
    </script>
</body>
</html>