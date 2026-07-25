<!DOCTYPE html>
<html class="light" lang="id">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Dashboard Utama 3R - Admin SampahKita</title>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=block" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <script id="tailwind-config">
    try{
      tailwind.config = {
        darkMode: "class",
        theme: {
          extend: {
            "colors": {
                "background": "#fbf9f5",
                "surface-bright": "#fbf9f5",
                "error": "#ba1a1a",
                "outline": "#737971",
                "on-tertiary-fixed-variant": "#4b4166",
                "secondary-fixed-dim": "#abcbdf",
                "on-primary-container": "#243d25",
                "error-container": "#ffdad6",
                "surface-container-high": "#eae8e4",
                "on-tertiary-fixed": "#1e1638",
                "surface-container-highest": "#e4e2de",
                "primary-fixed": "#ccebc8",
                "on-secondary-fixed-variant": "#2b4a5b",
                "secondary-container": "#c4e4f9",
                "secondary": "#436274",
                "on-secondary-container": "#486778",
                "on-background": "#1b1c1a",
                "tertiary": "#63597f",
                "on-primary-fixed": "#07200b",
                "primary": "#4a654a",
                "surface-container-lowest": "#ffffff",
                "surface-container": "#efeeea",
                "tertiary-fixed": "#e8ddff",
                "surface-container-low": "#f5f3ef",
                "surface-dim": "#dbdad6",
                "on-tertiary": "#ffffff",
                "outline-variant": "#c3c8bf",
                "tertiary-container": "#a69ac4",
                "surface-variant": "#e4e2de",
                "inverse-on-surface": "#f2f0ed",
                "secondary-fixed": "#c7e7fc",
                "on-error": "#ffffff",
                "primary-container": "#8ba889",
                "on-secondary-fixed": "#001e2c",
                "surface-tint": "#4a654a",
                "inverse-primary": "#b0ceae",
                "surface": "#fbf9f5",
                "on-surface": "#1b1c1a",
                "on-primary": "#ffffff",
                "on-tertiary-container": "#3b3255",
                "inverse-surface": "#30312e",
                "on-error-container": "#93000a",
                "on-secondary": "#ffffff",
                "on-surface-variant": "#434841",
                "tertiary-fixed-dim": "#cdc0ec",
                "on-primary-fixed-variant": "#334d34",
                "primary-fixed-dim": "#b0ceae",
                "neubrutal-black": "#1b1c1a"
            },
            "fontFamily": {
                "body-md": ["Plus Jakarta Sans"],
                "headline-lg": ["Plus Jakarta Sans"],
                "headline-md": ["Plus Jakarta Sans"],
                "label-bold": ["Plus Jakarta Sans"]
            }
          }
        }
      }
    }catch(_e){}</script>
    <style>
        .neubrutal-card {
            border: 2px solid #1b1c1a;
            box-shadow: 4px 4px 0px 0px #1b1c1a;
        }
        .neubrutal-header {
            border-bottom: 2px solid #1b1c1a;
        }
    </style>
</head>
<body class="bg-[#fbf9f5] text-[#1b1c1a] min-h-screen">

    <!-- Backdrop -->
    <div id="admin-backdrop" class="fixed inset-0 bg-black/45 z-45 hidden opacity-0 transition-opacity duration-300" onclick="toggleAdminDrawer()"></div>

    <!-- SideNavBar Shell -->
    <aside id="admin-drawer" class="fixed left-0 top-0 h-full w-[280px] bg-primary-container border-r-2 border-neubrutal-black flex flex-col p-6 z-50 transition-transform duration-300 transform -translate-x-full">
        <!-- Brand Identity -->
        <div class="mb-8 px-2 flex justify-between items-center">
            <div>
                <h1 class="font-headline-md text-[20px] text-on-primary-fixed font-bold">Admin Balonggandu</h1>
                <p class="text-xs text-on-primary-fixed-variant opacity-80">Portal Pengelolaan Desa</p>
            </div>
            <button onclick="toggleAdminDrawer()" class="p-1 rounded-full hover:bg-primary-fixed text-[#1b1c1a] flex items-center justify-center">
                <span class="material-symbols-outlined text-[22px]">close</span>
            </button>
        </div>

        <!-- Sidebar Navigation Menu -->
        <nav class="flex-1 space-y-3">
            <a class="flex items-center gap-3 px-4 py-3 bg-secondary-container text-on-secondary-container rounded-xl border-2 border-neubrutal-black shadow-[2px_2px_0px_0px_#1b1c1a] transition-all hover:translate-y-[-1px]" href="/admin">
                <span class="material-symbols-outlined">dashboard</span>
                <span class="font-label-bold">Dashboard</span>
            </a>
            <a class="flex items-center gap-3 px-4 py-3 text-on-primary hover:bg-[#334d34] transition-all rounded-xl" href="/admin/bank-digital">
                <span class="material-symbols-outlined text-[#fd8603]">equalizer</span>
                <span class="font-label-bold">Bank Sampah Digital</span>
            </a>
            <a class="flex items-center gap-3 px-4 py-3 text-on-primary hover:bg-[#334d34] transition-all rounded-xl" href="/admin/artikel">
                <span class="material-symbols-outlined">description</span>
                <span class="font-label-bold">Artikel Edukasi</span>
            </a>
            <a class="flex items-center gap-3 px-4 py-3 text-on-primary hover:bg-[#334d34] transition-all rounded-xl" href="/admin/galeri">
                <span class="material-symbols-outlined">photo_library</span>
                <span class="font-label-bold">Galeri Kegiatan</span>
            </a>
            <a class="flex items-center gap-3 px-4 py-3 text-on-primary hover:bg-[#334d34] transition-all rounded-xl" href="/admin/kontak">
                <span class="material-symbols-outlined">contact_support</span>
                <span class="font-label-bold">Kontak</span>
            </a>
            <a class="flex items-center gap-3 px-4 py-3 text-on-primary hover:bg-[#334d34] transition-all rounded-xl" href="/">
                <span class="material-symbols-outlined">open_in_new</span>
                <span class="font-label-bold">Lihat Website</span>
            </a>
        </nav>

        <!-- Logout Button -->
        <div class="mt-auto pt-4 border-t border-on-primary-container/30">
            <form method="POST" action="{{ route('admin.logout') }}">
                @csrf
                <button type="submit" class="w-full flex items-center gap-3 px-4 py-3 text-red-300 hover:bg-red-900/30 transition-all rounded-xl border border-red-500/20">
                    <span class="material-symbols-outlined text-[20px]">logout</span>
                    <span class="font-label-bold text-[14px]">Logout</span>
                </button>
            </form>
        </div>
    </aside>

    <!-- TOP NAVBAR SHELL -->
    <header class="fixed top-0 right-0 w-full h-16 bg-[#f5f3ef] neubrutal-header flex justify-between items-center px-4 md:px-8 z-40">
        <div class="flex items-center gap-3">
            <button onclick="toggleAdminDrawer()" class="p-2 border-2 border-neubrutal-black rounded-lg bg-white shadow-[2px_2px_0px_0px_#1b1c1a] hover:scale-105 active:scale-95 transition-transform flex items-center justify-center">
                <span class="material-symbols-outlined text-neubrutal-black">menu</span>
            </button>
            <span class="font-bold text-[16px] text-on-background md:hidden">Dashboard</span>
            <div class="hidden md:flex items-center bg-white border-2 border-neubrutal-black rounded-full px-4 py-2 w-72 shadow-[2px_2px_0px_0px_#1b1c1a]">
                <span class="material-symbols-outlined text-neubrutal-black text-xl">search</span>
                <input class="bg-transparent border-none focus:ring-0 text-sm w-full placeholder:text-outline/80 ml-2" placeholder="Cari data desa..." type="text">
            </div>
        </div>
        <div class="flex items-center gap-6">
            <button class="bg-white border-2 border-neubrutal-black rounded-full p-2 transition-transform hover:scale-105 active:scale-95 shadow-[2px_2px_0px_0px_#1b1c1a] flex items-center justify-center">
                <span class="material-symbols-outlined text-primary">notifications</span>
            </button>
            <div class="h-8 w-[2px] bg-neubrutal-black opacity-20"></div>
            <span class="font-label-bold text-[14px] text-neubrutal-black">Admin Balonggandu</span>
            <div class="w-10 h-10 rounded-full overflow-hidden border-2 border-neubrutal-black flex items-center justify-center shadow-[2px_2px_0px_0px_#1b1c1a] flex-shrink-0">
                <img class="w-full h-full object-cover" src="{{ asset('images/admin_avatar.jpg') }}" alt="Admin avatar">
            </div>
        </div>
    </header>

    <!-- MAIN CONTENT CANVAS -->
    <main class="pt-20 pb-12 px-4 md:px-8 lg:px-12 max-w-[1400px] mx-auto">
        <!-- Top Stats Row (Website + Bank Digital) -->
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-6 mb-10">
            <!-- Total Artikel -->
            <div class="bg-primary-fixed p-6 rounded-xl neubrutal-card flex flex-col justify-between min-h-[140px]">
                <div class="flex justify-between items-start mb-4">
                    <div class="p-3 bg-white border-2 border-neubrutal-black rounded-lg">
                        <span class="material-symbols-outlined text-primary text-[24px]">article</span>
                    </div>
                    <span class="text-xs font-label-bold text-on-background bg-white border border-neubrutal-black px-2 py-1 rounded-full">Total</span>
                </div>
                <div>
                    <p class="font-label-bold text-on-background opacity-70 text-[13px]">Total Artikel</p>
                    <h3 class="font-headline-lg text-headline-lg text-on-background leading-none mt-1">{{ $totalArticles }}</h3>
                </div>
            </div>

            <!-- Pengunjung Bulan Ini -->
            <div class="bg-tertiary-fixed p-6 rounded-xl neubrutal-card flex flex-col justify-between min-h-[140px]">
                <div class="flex justify-between items-start mb-4">
                    <div class="p-3 bg-white border-2 border-neubrutal-black rounded-lg">
                        <span class="material-symbols-outlined text-tertiary text-[24px]">trending_up</span>
                    </div>
                    <span class="text-xs font-label-bold text-on-background bg-white border border-neubrutal-black px-2 py-1 rounded-full">Bulan Ini</span>
                </div>
                <div>
                    <p class="font-label-bold text-on-background opacity-70 text-[13px]">Pengunjung Website</p>
                    <h3 class="font-headline-lg text-headline-lg text-on-background leading-none mt-1">{{ number_format($monthlyVisitors, 0, ',', '.') }}</h3>
                </div>
            </div>

            <!-- Bank Digital: Nasabah -->
            <div class="bg-secondary-fixed p-6 rounded-xl neubrutal-card flex flex-col justify-between min-h-[140px]">
                <div class="flex justify-between items-start mb-4">
                    <div class="p-3 bg-white border-2 border-neubrutal-black rounded-lg">
                        <span class="material-symbols-outlined text-secondary text-[24px]">badge</span>
                    </div>
                    <span class="text-xs font-label-bold text-on-background bg-white border border-neubrutal-black px-2 py-1 rounded-full">Partisipan</span>
                </div>
                <div>
                    <p class="font-label-bold text-on-background opacity-70 text-[13px]">Nasabah Bank Sampah</p>
                    <h3 class="font-headline-lg text-headline-lg text-on-background leading-none mt-1">{{ class_exists(\App\Models\Nasabah::class) ? \App\Models\Nasabah::count() : 0 }}</h3>
                </div>
            </div>

            <!-- Bank Digital: Nilai Ekonomis -->
            <div class="bg-[#ffdcc4] p-6 rounded-xl neubrutal-card flex flex-col justify-between min-h-[140px]">
                <div class="flex justify-between items-start mb-4">
                    <div class="p-3 bg-white border-2 border-neubrutal-black rounded-lg">
                        <span class="material-symbols-outlined text-[#934b00] text-[24px]">payments</span>
                    </div>
                    <span class="text-xs font-label-bold text-on-background bg-white border border-neubrutal-black px-2 py-1 rounded-full">Nilai 3R</span>
                </div>
                <div>
                    <p class="font-label-bold text-on-background opacity-70 text-[13px]">Total Saldo Warga</p>
                    <h3 class="font-headline-lg text-xl font-bold text-[#934b00] leading-none mt-1">Rp {{ class_exists(\App\Models\Nasabah::class) ? number_format(\App\Models\Nasabah::sum('saldo'), 0, ',', '.') : 0 }}</h3>
                </div>
            </div>
        </div>

        <!-- Visitor Traffic Graph -->
        <section class="bg-white p-8 rounded-xl neubrutal-card mb-10">
            <div class="flex flex-col md:flex-row justify-between items-start md:items-center gap-4 mb-8">
                <div>
                    <h4 class="font-headline-md text-headline-md text-on-background">Visitor Traffic</h4>
                    <p class="text-xs font-body-md text-outline">Statistik Pengunjung Website (7 Hari Terakhir)</p>
                </div>
                <div class="flex items-center gap-2">
                    <span class="w-3 h-3 rounded-full bg-primary inline-block"></span>
                    <span class="font-label-bold text-xs">Real Visitors</span>
                </div>
            </div>

            @php
                $maxCount = max(array_column($trafficData, 'count'));
                if ($maxCount == 0) $maxCount = 1;
            @endphp

            <div class="h-64 flex items-end justify-between gap-2 md:gap-6 pt-8 px-4 border-b-2 border-neubrutal-black pb-2">
                @foreach ($trafficData as $data)
                    @php
                        $heightPercent = ($data['count'] / $maxCount) * 100;
                        if ($heightPercent < 5 && $data['count'] > 0) $heightPercent = 5;
                    @endphp
                    <div class="flex-1 flex flex-col items-center gap-2 h-full justify-end group relative">
                        <!-- Tooltip -->
                        <div class="absolute -top-10 bg-neubrutal-black text-white text-[11px] font-bold py-1 px-2.5 rounded opacity-0 group-hover:opacity-100 transition-opacity pointer-events-none whitespace-nowrap z-10">
                            {{ $data['count'] }} Pengunjung ({{ $data['date'] }})
                        </div>
                        
                        <div class="w-full bg-primary border-2 border-neubrutal-black rounded-t-md transition-all duration-500 hover:bg-primary-container"
                             style="height: {{ $heightPercent }}%;">
                        </div>
                        <span class="text-xs font-label-bold text-on-background uppercase mt-2">{{ $data['day'] }}</span>
                    </div>
                @endforeach
            </div>
        </section>

        <!-- Quick Actions Row -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <div class="bg-[#1b4332] text-white p-6 rounded-3xl shadow-sm flex flex-col justify-between">
                <div>
                    <div class="w-12 h-12 rounded-2xl bg-[#c1ecd4] flex items-center justify-center text-[#1b4332] mb-4">
                        <span class="material-symbols-outlined text-[30px]">equalizer</span>
                    </div>
                    <h4 class="text-lg font-bold mb-1">Bank Sampah Digital 3R</h4>
                    <p class="text-xs text-[#c1ecd4]/80 leading-relaxed mb-6">Input pendataan nasabah, catat transaksi penimbangan sampah warga, dan cek saldo tabungan.</p>
                </div>
                <a href="/admin/bank-digital" class="bg-[#fd8603] hover:bg-[#e07800] text-white font-bold text-xs px-5 py-3 rounded-xl transition-all flex items-center justify-center gap-2 shadow-sm">
                    Buka Bank Sampah Digital ↗
                </a>
            </div>

            <div class="bg-white p-6 rounded-3xl border border-gray-200 shadow-sm flex flex-col justify-between">
                <div>
                    <div class="w-12 h-12 rounded-2xl bg-emerald-100 flex items-center justify-center text-[#012d1d] mb-4">
                        <span class="material-symbols-outlined text-[30px]">school</span>
                    </div>
                    <h4 class="text-lg font-bold text-[#012d1d] mb-1">Edukasi &amp; Artikel 3R</h4>
                    <p class="text-xs text-gray-500 leading-relaxed mb-6">Tulis panduan Reduce, Reuse, Recycle untuk warga dan perbarui materi edukasi desa.</p>
                </div>
                <a href="/admin/artikel" class="bg-[#012d1d] hover:bg-[#1b4332] text-white font-bold text-xs px-5 py-3 rounded-xl transition-all flex items-center justify-center gap-2 shadow-sm">
                    Kelola Artikel Edukasi ↗
                </a>
            </div>
        </div>
    </main>

    <script>
        function toggleAdminDrawer() {
            const drawer = document.getElementById('admin-drawer');
            const backdrop = document.getElementById('admin-backdrop');
            const isOpen = drawer.classList.contains('translate-x-0');

            if (isOpen) {
                drawer.classList.remove('translate-x-0');
                drawer.classList.add('-translate-x-full');
                backdrop.classList.remove('opacity-100', 'pointer-events-auto');
                backdrop.classList.add('opacity-0', 'pointer-events-none');
                setTimeout(() => backdrop.classList.add('hidden'), 300);
            } else {
                backdrop.classList.remove('hidden');
                setTimeout(() => {
                    drawer.classList.remove('-translate-x-full');
                    drawer.classList.add('translate-x-0');
                    backdrop.classList.remove('opacity-0', 'pointer-events-none');
                    backdrop.classList.add('opacity-100', 'pointer-events-auto');
                }, 10);
            }
        }
    </script>
</body>
</html>
