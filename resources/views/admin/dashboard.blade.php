<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Utama 3R — Aparatur Desa Balonggandu</title>
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

    <!-- SIDEBAR NAVIGATION -->
    <aside id="adminSidebar" class="w-64 bg-[#012d1d] text-white flex flex-col justify-between p-5 min-h-screen sticky top-0 shadow-xl z-20 flex-shrink-0 transition-all duration-300">
        <div>
            <div class="flex items-center gap-3 pb-6 border-b border-white/10 mb-6">
                <div class="w-10 h-10 rounded-xl bg-[#fd8603] flex items-center justify-center text-white shadow-md">
                    <span class="material-symbols-outlined fill-icon text-[24px]">analytics</span>
                </div>
                <div>
                    <h1 class="font-extrabold text-[16px] leading-none">SIP 3R Balonggandu</h1>
                    <p class="text-[11px] text-[#a5d0b9] mt-1">Aparatur Desa Portal</p>
                </div>
            </div>

            <nav class="space-y-1.5">
                <a href="/admin" class="flex items-center gap-3 px-4 py-3 rounded-xl bg-white/15 text-white font-bold text-xs shadow-inner">
                    <span class="material-symbols-outlined text-[20px] fill-icon">dashboard</span>
                    Dashboard Utama
                </a>

                <a href="/admin/bank-digital" class="flex items-center gap-3 px-4 py-3 rounded-xl text-gray-300 hover:text-white hover:bg-white/10 font-semibold text-xs transition-all">
                    <span class="material-symbols-outlined text-[20px] text-[#fd8603]">analytics</span>
                    Data Digital 3R
                </a>

                <a href="/admin/artikel" class="flex items-center gap-3 px-4 py-3 rounded-xl text-gray-300 hover:text-white hover:bg-white/10 font-semibold text-xs transition-all">
                    <span class="material-symbols-outlined text-[20px]">school</span>
                    Edukasi 3R
                </a>

                <a href="/admin/galeri" class="flex items-center gap-3 px-4 py-3 rounded-xl text-gray-300 hover:text-white hover:bg-white/10 font-semibold text-xs transition-all">
                    <span class="material-symbols-outlined text-[20px]">photo_library</span>
                    Galeri Kegiatan 3R
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
                    <p class="text-xs font-bold truncate">Aparatur Balonggandu</p>
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
                <button onclick="toggleAdminSidebar()" class="p-2.5 rounded-2xl bg-gray-100 hover:bg-[#012d1d] hover:text-white text-[#012d1d] transition-all flex items-center justify-center shadow-sm cursor-pointer" title="Buka/Tutup Sidebar">
                    <span class="material-symbols-outlined text-[24px]">menu</span>
                </button>
                <div>
                    <h2 class="text-base sm:text-xl font-extrabold text-[#012d1d]">Monitoring Data Digital 3R Desa 👋</h2>
                    <p class="text-[11px] sm:text-xs text-gray-500 mt-0.5">Sistem Pendataan &amp; Monitoring Pemilahan Sampah Desa Balonggandu</p>
                </div>
            </div>
            <span class="text-xs font-bold bg-emerald-100 text-emerald-800 px-3.5 py-1.5 rounded-full hidden sm:flex items-center gap-1.5">
                <span class="w-2 h-2 rounded-full bg-emerald-500 animate-ping"></span>
                Sistem 3R Active
            </span>
        </div>

        <!-- WIDGET STATISTIK -->
        <div class="grid grid-cols-1 sm:grid-cols-4 gap-5 mb-8">
            <div class="bg-white p-5 rounded-3xl border border-gray-100 shadow-sm flex items-center justify-between">
                <div>
                    <p class="text-xs font-bold text-gray-400 uppercase">Warga Partisipan</p>
                    <h3 class="text-2xl font-extrabold text-[#012d1d] mt-1">{{ \App\Models\Nasabah::count() }} <span class="text-xs font-normal text-gray-400">Terdata</span></h3>
                </div>
                <div class="w-12 h-12 rounded-2xl bg-emerald-50 flex items-center justify-center text-emerald-700">
                    <span class="material-symbols-outlined text-[28px] fill-icon">badge</span>
                </div>
            </div>

            <div class="bg-white p-5 rounded-3xl border border-gray-100 shadow-sm flex items-center justify-between">
                <div>
                    <p class="text-xs font-bold text-gray-400 uppercase">Nilai Ekonomis 3R</p>
                    <h3 class="text-2xl font-extrabold text-[#fd8603] mt-1">Rp {{ number_format(\App\Models\Nasabah::sum('saldo'), 0, ',', '.') }}</h3>
                </div>
                <div class="w-12 h-12 rounded-2xl bg-orange-50 flex items-center justify-center text-[#fd8603]">
                    <span class="material-symbols-outlined text-[28px] fill-icon">payments</span>
                </div>
            </div>

            <div class="bg-white p-5 rounded-3xl border border-gray-100 shadow-sm flex items-center justify-between">
                <div>
                    <p class="text-xs font-bold text-gray-400 uppercase">Total Sampah</p>
                    <h3 class="text-2xl font-extrabold text-blue-700 mt-1">{{ number_format(\App\Models\Transaksi::where('jenis_transaksi', 'setor')->sum('berat'), 1) }} <span class="text-xs font-normal text-gray-400">Kg</span></h3>
                </div>
                <div class="w-12 h-12 rounded-2xl bg-blue-50 flex items-center justify-center text-blue-700">
                    <span class="material-symbols-outlined text-[28px] fill-icon">eco</span>
                </div>
            </div>

            <div class="bg-white p-5 rounded-3xl border border-gray-100 shadow-sm flex items-center justify-between">
                <div>
                    <p class="text-xs font-bold text-gray-400 uppercase">Kategori 3R</p>
                    <h3 class="text-2xl font-extrabold text-purple-700 mt-1">{{ \App\Models\KategoriSampah::count() }} <span class="text-xs font-normal text-gray-400">Jenis</span></h3>
                </div>
                <div class="w-12 h-12 rounded-2xl bg-purple-50 flex items-center justify-center text-purple-700">
                    <span class="material-symbols-outlined text-[28px] fill-icon">category</span>
                </div>
            </div>
        </div>

        <!-- MODUL -->
        <h3 class="text-base font-bold text-[#012d1d] mb-4">Modul Aparatur Desa</h3>
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
            <div class="bg-gradient-to-br from-[#012d1d] to-[#1b4332] text-white p-6 rounded-3xl shadow-md flex flex-col justify-between">
                <div>
                    <div class="w-12 h-12 rounded-2xl bg-white/10 flex items-center justify-center text-[#ffb781] mb-4">
                        <span class="material-symbols-outlined text-[30px] fill-icon">analytics</span>
                    </div>
                    <h4 class="text-lg font-bold mb-1">Pengelolaan Data Digital 3R</h4>
                    <p class="text-xs text-[#c1ecd4]/80 leading-relaxed mb-6">Input pendataan sampah warga, daftarkan data partisipan RT/RW, dan monitor data terpilah.</p>
                </div>
                <a href="/admin/bank-digital" class="bg-[#fd8603] hover:bg-[#e07800] text-white font-bold text-xs px-5 py-3 rounded-xl transition-all flex items-center justify-center gap-2 shadow-sm">
                    Kelola Pendataan Digital 3R ↗
                </a>
            </div>

            <div class="bg-white p-6 rounded-3xl border border-gray-100 shadow-sm flex flex-col justify-between">
                <div>
                    <div class="w-12 h-12 rounded-2xl bg-emerald-100 flex items-center justify-center text-[#012d1d] mb-4">
                        <span class="material-symbols-outlined text-[30px] fill-icon">school</span>
                    </div>
                    <h4 class="text-lg font-bold text-[#012d1d] mb-1">Edukasi &amp; Sosialisasi 3R</h4>
                    <p class="text-xs text-gray-500 leading-relaxed mb-6">Tulis panduan Reduce, Reuse, Recycle untuk warga dan perbarui galeri dokumentasi desa.</p>
                </div>
                <a href="/admin/artikel" class="bg-[#012d1d] hover:bg-[#1b4332] text-white font-bold text-xs px-5 py-3 rounded-xl transition-all flex items-center justify-center gap-2 shadow-sm">
                    Kelola Artikel Edukasi ↗
                </a>
            </div>
        </div>
    </main>

    <script>
        function toggleAdminSidebar() {
            document.getElementById('adminSidebar').classList.toggle('-ml-64');
        }
    </script>
</body>
</html>