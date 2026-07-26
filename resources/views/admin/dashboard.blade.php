<!DOCTYPE html>
<html lang="id" class="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin — SampahKita Desa Balonggandu</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&amp;family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=block" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <script id="tailwind-config">
    try{
      tailwind.config = {
        darkMode: "class",
        theme: {
          extend: {
            "colors": {
                "error-container": "#ffdad6",
                "on-primary-container": "#ffffff",
                "on-background": "#181c20",
                "on-tertiary-fixed-variant": "#005320",
                "inverse-surface": "#2d3135",
                "on-tertiary-fixed": "#002108",
                "on-secondary-fixed": "#001a41",
                "primary-fixed": "#d8e2ff",
                "inverse-primary": "#adc7ff",
                "inverse-on-surface": "#eef1f7",
                "surface-tint": "#005bc0",
                "outline": "#727785",
                "on-secondary-container": "#00285c",
                "surface-container-high": "#e5e8ee",
                "tertiary-container": "#008939",
                "surface-variant": "#dfe3e8",
                "on-primary-fixed": "#001a41",
                "surface": "#f7f9ff",
                "on-tertiary-container": "#ffffff",
                "surface-bright": "#f7f9ff",
                "primary": "#005bbf",
                "on-error-container": "#93000a",
                "error": "#ba1a1a",
                "on-secondary": "#ffffff",
                "surface-container-low": "#f1f4fa",
                "on-primary-fixed-variant": "#004493",
                "secondary-container": "#4d8efe",
                "surface-dim": "#d7dae0",
                "secondary-fixed-dim": "#adc6ff",
                "tertiary-fixed": "#89fa9b",
                "on-error": "#ffffff",
                "on-secondary-fixed-variant": "#004494",
                "tertiary-fixed-dim": "#6ddd81",
                "surface-container-lowest": "#ffffff",
                "on-primary": "#ffffff",
                "on-surface": "#181c20",
                "on-tertiary": "#ffffff",
                "secondary-fixed": "#d8e2ff",
                "surface-container-highest": "#dfe3e8",
                "primary-fixed-dim": "#adc7ff",
                "background": "#f7f9ff",
                "surface-container": "#ebeef4",
                "secondary": "#005ac1",
                "on-surface-variant": "#414754",
                "tertiary": "#006d2c",
                "primary-container": "#1a73e8",
                "outline-variant": "#c1c6d6"
            },
            "borderRadius": {
                "DEFAULT": "0.25rem",
                "lg": "0.5rem",
                "xl": "0.75rem",
                "full": "9999px"
            },
            "spacing": {
                "xs": "4px",
                "sm": "8px",
                "lg": "24px",
                "xl": "32px",
                "base": "4px",
                "margin-desktop": "32px",
                "gutter": "24px",
                "margin-mobile": "16px",
                "md": "16px"
            },
            "fontFamily": {
                "mono-label": ["Inter"],
                "label-sm": ["Inter"],
                "display-lg": ["Inter"],
                "body-lg": ["Inter"],
                "headline-md": ["Inter"],
                "display-lg-mobile": ["Inter"],
                "body-md": ["Inter"]
            },
            "fontSize": {
                "mono-label": ["12px", {"lineHeight": "16px", "fontWeight": "400"}],
                "label-sm": ["12px", {"lineHeight": "16px", "letterSpacing": "0.01em", "fontWeight": "500"}],
                "display-lg": ["32px", {"lineHeight": "40px", "letterSpacing": "-0.02em", "fontWeight": "700"}],
                "body-lg": ["16px", {"lineHeight": "24px", "fontWeight": "400"}],
                "headline-md": ["20px", {"lineHeight": "28px", "fontWeight": "600"}],
                "display-lg-mobile": ["24px", {"lineHeight": "32px", "letterSpacing": "-0.01em", "fontWeight": "700"}],
                "body-md": ["14px", {"lineHeight": "20px", "fontWeight": "400"}]
            }
          },
        },
      }
    }catch(_e){}</script>
    <style>
        .custom-scrollbar::-webkit-scrollbar { width: 6px; }
        .custom-scrollbar::-webkit-scrollbar-thumb { background: #c1c6d6; border-radius: 4px; }
    </style>
</head>
<body class="bg-background text-on-background min-h-screen pb-24 md:pb-0 overflow-x-hidden custom-scrollbar">

<!-- Backdrop for Admin Drawer -->
<div id="admin-backdrop" class="fixed inset-0 bg-black/50 z-40 hidden opacity-0 transition-opacity duration-300" onclick="toggleAdminDrawer()"></div>

<!-- Sidebar Menu (Menu Bar di Samping) -->
<aside id="admin-drawer" class="fixed left-0 top-0 h-full w-[280px] bg-[#012d1d] text-white flex flex-col p-6 z-50 transition-transform duration-300 transform -translate-x-full shadow-2xl">
    <div class="mb-8 flex justify-between items-center pb-4 border-b border-white/10">
        <div class="flex items-center gap-3">
            <div class="w-10 h-10 rounded-xl bg-[#fd8603] flex items-center justify-center text-white font-bold">
                <span class="material-symbols-outlined text-[24px]">analytics</span>
            </div>
            <div>
                <h1 class="font-bold text-[16px] leading-tight">Admin Dashboard</h1>
                <p class="text-[11px] text-[#a5d0b9]">Desa Balonggandu</p>
            </div>
        </div>
        <button onclick="toggleAdminDrawer()" class="p-1 rounded-full hover:bg-white/10 text-white flex items-center justify-center">
            <span class="material-symbols-outlined text-[22px]">close</span>
        </button>
    </div>

    <!-- Navigasi Menu Samping -->
    <nav class="flex-1 space-y-2">
        <a class="flex items-center gap-3 px-4 py-3 rounded-xl bg-white/15 text-white font-bold text-xs shadow-inner" href="/admin">
            <span class="material-symbols-outlined text-[20px]">dashboard</span>
            Dashboard Utama
        </a>
        <a class="flex items-center gap-3 px-4 py-3 rounded-xl text-gray-300 hover:text-white hover:bg-white/10 font-semibold text-xs transition-all" href="/admin/bank-digital">
            <span class="material-symbols-outlined text-[20px] text-[#fd8603]">equalizer</span>
            Bank Sampah Digital
        </a>
        <a class="flex items-center gap-3 px-4 py-3 rounded-xl text-gray-300 hover:text-white hover:bg-white/10 font-semibold text-xs transition-all" href="/admin/artikel">
            <span class="material-symbols-outlined text-[20px]">description</span>
            Artikel Edukasi
        </a>
        <a class="flex items-center gap-3 px-4 py-3 rounded-xl text-gray-300 hover:text-white hover:bg-white/10 font-semibold text-xs transition-all" href="/admin/galeri">
            <span class="material-symbols-outlined text-[20px]">photo_library</span>
            Galeri Kegiatan
        </a>
        <a class="flex items-center gap-3 px-4 py-3 rounded-xl text-gray-300 hover:text-white hover:bg-white/10 font-semibold text-xs transition-all" href="/admin/kontak">
            <span class="material-symbols-outlined text-[20px]">contact_mail</span>
            Pesan &amp; Kontak
        </a>
        <div class="pt-4 mt-4 border-t border-white/10">
            <a href="/" target="_blank" class="flex items-center justify-between px-4 py-2.5 rounded-xl bg-emerald-900/50 hover:bg-emerald-900 text-[#a5d0b9] font-bold text-xs transition-all border border-emerald-700/50">
                <span class="flex items-center gap-2">
                    <span class="material-symbols-outlined text-[18px]">public</span>
                    Lihat Website Warga
                </span>
                <span class="material-symbols-outlined text-[14px]">open_in_new</span>
            </a>
        </div>
    </nav>

    <div class="pt-4 border-t border-white/10">
        <div class="flex items-center gap-3 mb-3 px-2">
            <div class="w-9 h-9 rounded-full bg-emerald-500/20 border border-emerald-400/30 flex items-center justify-center text-[#a5d0b9] font-bold text-xs">
                {{ strtoupper(substr(session('admin_name', 'Admin'), 0, 1)) }}
            </div>
            <div class="overflow-hidden">
                <p class="text-xs font-bold truncate">{{ session('admin_name', 'Admin Balonggandu') }}</p>
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

<!-- TopAppBar Header -->
<header class="flex justify-between items-center h-16 px-md md:px-margin-desktop w-full z-30 bg-surface dark:bg-on-background sticky top-0 shadow-sm">
    <div class="flex items-center gap-sm">
        <button onclick="toggleAdminDrawer()" class="p-2 rounded-full hover:bg-surface-container-high text-on-surface flex items-center justify-center cursor-pointer" title="Buka Sidebar Menu">
            <span class="material-symbols-outlined text-[26px]">menu</span>
        </button>
        <div class="flex items-center gap-sm cursor-pointer active:scale-95 duration-150" onclick="location.href='/admin'">
            <span class="material-symbols-outlined text-primary dark:text-primary-fixed text-[28px]">school</span>
            <h1 class="font-headline-md text-headline-md font-bold text-primary dark:text-primary-fixed">EduManage Admin</h1>
        </div>
    </div>
    <div class="flex items-center gap-sm">
        <button class="material-symbols-outlined p-2 rounded-full hover:bg-surface-container-low dark:hover:bg-inverse-surface transition-colors cursor-pointer text-on-surface-variant dark:text-outline-variant">search</button>
        <button class="material-symbols-outlined p-2 rounded-full hover:bg-surface-container-low dark:hover:bg-inverse-surface transition-colors cursor-pointer text-on-surface-variant dark:text-outline-variant">notifications</button>
        <div class="w-8 h-8 rounded-full bg-secondary-container flex items-center justify-center text-on-secondary-container font-bold text-xs cursor-pointer active:scale-95 transition-transform" title="{{ session('admin_name', 'Admin') }}">
            {{ strtoupper(substr(session('admin_name', 'Admin'), 0, 1)) }}
        </div>
    </div>
</header>

<main class="max-w-7xl mx-auto px-md md:px-margin-desktop py-lg">
    <!-- Dashboard Welcome Section -->
    <section class="mb-xl">
        <h2 class="font-display-lg-mobile md:font-display-lg text-display-lg-mobile md:text-display-lg text-on-surface mb-xs">Welcome back, {{ session('admin_name', 'Admin Desa Balonggandu') }}</h2>
        <p class="font-body-md text-body-md text-on-surface-variant">Berikut adalah ikhtisar performa portal edukasi dan bank sampah digital institusi desa Anda hari ini.</p>
    </section>

    <!-- Bento Stat Cards -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-gutter mb-xl">
        <!-- Stat Card 1: Total Articles / Artikel Edukasi -->
        <div class="bg-surface-container-lowest p-lg rounded-xl border border-surface-variant shadow-sm hover:shadow-md transition-shadow group">
            <div class="flex justify-between items-start mb-md">
                <div class="p-3 rounded-lg bg-primary-container/10 text-primary">
                    <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">description</span>
                </div>
                <span class="font-mono-label text-mono-label px-2 py-1 bg-tertiary-fixed text-on-tertiary-fixed rounded-full flex items-center gap-1">
                    <span class="material-symbols-outlined text-[14px]">trending_up</span> Aktif
                </span>
            </div>
            <h3 class="font-label-sm text-label-sm text-on-surface-variant uppercase tracking-wider mb-xs">Total Artikel Edukasi</h3>
            <p class="font-display-lg text-display-lg text-on-surface">{{ $totalArticles }}</p>
            <div class="mt-md h-1 w-full bg-surface-container-low rounded-full overflow-hidden">
                <div class="h-full bg-primary w-[85%]"></div>
            </div>
        </div>

        <!-- Stat Card 2: Nasabah Bank Sampah Digital -->
        <div class="bg-surface-container-lowest p-lg rounded-xl border border-surface-variant shadow-sm hover:shadow-md transition-shadow">
            <div class="flex justify-between items-start mb-md">
                <div class="p-3 rounded-lg bg-secondary-container/10 text-secondary">
                    <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">groups</span>
                </div>
                <span class="font-mono-label text-mono-label px-2 py-1 bg-surface-container-high text-on-surface-variant rounded-full flex items-center gap-1">
                    <span class="material-symbols-outlined text-[14px]">horizontal_rule</span> Terdaftar
                </span>
            </div>
            <h3 class="font-label-sm text-label-sm text-on-surface-variant uppercase tracking-wider mb-xs">Nasabah Bank Sampah</h3>
            <p class="font-display-lg text-display-lg text-on-surface">{{ $totalNasabah ?? 0 }}</p>
            <div class="mt-md flex -space-x-2">
                <div class="w-8 h-8 rounded-full border-2 border-surface-container-lowest bg-surface-dim"></div>
                <div class="w-8 h-8 rounded-full border-2 border-surface-container-lowest bg-primary-container"></div>
                <div class="w-8 h-8 rounded-full border-2 border-surface-container-lowest bg-secondary-container"></div>
                <div class="w-8 h-8 rounded-full border-2 border-surface-container-lowest bg-tertiary-container flex items-center justify-center text-[10px] text-white font-bold">+{{ max(0, ($totalNasabah ?? 0) - 3) }}</div>
            </div>
        </div>

        <!-- Stat Card 3: Total Transaksi & Saldo Rupiah -->
        <div class="bg-surface-container-lowest p-lg rounded-xl border border-surface-variant shadow-sm hover:shadow-md transition-shadow">
            <div class="flex justify-between items-start mb-md">
                <div class="p-3 rounded-lg bg-tertiary-container/10 text-tertiary">
                    <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">payments</span>
                </div>
                <span class="font-mono-label text-mono-label px-2 py-1 bg-emerald-100 text-emerald-800 rounded-full flex items-center gap-1 font-bold">
                    <span class="material-symbols-outlined text-[14px]">account_balance_wallet</span> Rupiah
                </span>
            </div>
            <h3 class="font-label-sm text-label-sm text-on-surface-variant uppercase tracking-wider mb-xs">Total Saldo Terkumpul</h3>
            <p class="font-headline-md text-headline-md text-on-surface font-bold">Rp {{ number_format($totalSaldo ?? 0, 0, ',', '.') }}</p>
            <p class="font-body-md text-body-md text-on-surface-variant mt-md">{{ $totalTransaksi ?? 0 }} Total transaksi setoran sampah</p>
        </div>
    </div>

    <!-- Two Column Layout: Activity & Schedule -->
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-gutter">
        <!-- Recent Activity Section -->
        <div class="lg:col-span-2 space-y-lg">
            <div class="bg-surface-container-lowest rounded-xl border border-surface-variant overflow-hidden shadow-sm">
                <div class="p-lg border-b border-surface-variant flex justify-between items-center">
                    <h3 class="font-headline-md text-headline-md text-on-surface">Aktivitas Terkini</h3>
                    <a href="/admin/artikel" class="text-primary font-label-sm text-label-sm hover:underline">Lihat Semua</a>
                </div>
                <div class="divide-y divide-surface-variant">
                    @forelse($latestArticles as $art)
                        <div class="p-md flex items-start gap-md hover:bg-surface-container-low transition-colors">
                            <div class="w-10 h-10 rounded-full bg-primary-container/20 flex items-center justify-center shrink-0">
                                <span class="material-symbols-outlined text-primary">article</span>
                            </div>
                            <div class="flex-1">
                                <p class="font-body-md text-body-md text-on-surface">
                                    <span class="font-bold">Artikel Dipublikasikan:</span> {{ $art->title }} (Kategori: {{ $art->category }}).
                                </p>
                                <p class="font-mono-label text-mono-label text-on-surface-variant mt-xs">
                                    {{ $art->created_at ? $art->created_at->diffForHumans() : 'Baru saja' }}
                                </p>
                            </div>
                        </div>
                    @empty
                        <div class="p-md text-center text-on-surface-variant">Belum ada aktivitas artikel terkini.</div>
                    @endforelse

                    @if(isset($latestGalleries) && $latestGalleries->count())
                        @foreach($latestGalleries as $gal)
                            <div class="p-md flex items-start gap-md hover:bg-surface-container-low transition-colors">
                                <div class="w-10 h-10 rounded-full bg-tertiary-container/20 flex items-center justify-center shrink-0">
                                    <span class="material-symbols-outlined text-tertiary">photo_library</span>
                                </div>
                                <div class="flex-1">
                                    <p class="font-body-md text-body-md text-on-surface">
                                        <span class="font-bold">Galeri Media Baru:</span> {{ $gal->title }} (Oleh: {{ $gal->uploader }}).
                                    </p>
                                    <p class="font-mono-label text-mono-label text-on-surface-variant mt-xs">
                                        {{ $gal->created_at ? $gal->created_at->diffForHumans() : 'Baru saja' }}
                                    </p>
                                </div>
                            </div>
                        @endforeach
                    @endif
                </div>
            </div>

            <!-- Featured Highlight Card (Glassmorphism effect) -->
            <div class="relative rounded-xl overflow-hidden h-64 shadow-lg group">
                <div class="absolute inset-0 bg-cover bg-center transition-transform duration-700 group-hover:scale-105" 
                     style="background-image: url('/images/hero_karawang.png')"></div>
                <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/30 to-transparent"></div>
                <div class="absolute bottom-0 left-0 p-lg text-white">
                    <span class="px-2.5 py-1 bg-primary text-[10px] font-bold rounded uppercase mb-sm inline-block">Program Desa Balonggandu</span>
                    <h4 class="font-headline-md text-headline-md">Inovasi Pengelolaan Sampah Mandiri 3R</h4>
                    <p class="font-body-md text-body-md text-white/80">Wujudkan desa hijau, bersih, dan sejahtera melalui kolaborasi digitalisasi bank sampah warga.</p>
                </div>
            </div>
        </div>

        <!-- Upcoming Schedule & Actions Section -->
        <div class="space-y-lg">
            <div class="bg-surface-container-lowest rounded-xl border border-surface-variant shadow-sm p-lg">
                <h3 class="font-headline-md text-headline-md text-on-surface mb-lg">Jadwal &amp; Agenda Desa</h3>
                <div class="space-y-md">
                    <!-- Schedule Card 1 -->
                    <div class="flex gap-md border-l-4 border-primary pl-md py-xs">
                        <div class="shrink-0 text-center w-12">
                            <p class="font-label-sm text-label-sm text-on-surface-variant uppercase">{{ date('M') }}</p>
                            <p class="font-display-lg-mobile text-display-lg-mobile font-bold text-on-surface">{{ date('d') }}</p>
                        </div>
                        <div>
                            <p class="font-headline-md text-body-lg font-semibold text-on-surface">Penimbangan Bank Sampah</p>
                            <div class="flex items-center gap-1 text-on-surface-variant">
                                <span class="material-symbols-outlined text-[16px]">schedule</span>
                                <span class="font-body-md text-body-md">08:00 - 12:00 WIB</span>
                            </div>
                            <div class="flex items-center gap-1 text-on-surface-variant">
                                <span class="material-symbols-outlined text-[16px]">location_on</span>
                                <span class="font-body-md text-body-md">Posko Utama RW 03</span>
                            </div>
                        </div>
                    </div>
                    <!-- Schedule Card 2 -->
                    <div class="flex gap-md border-l-4 border-secondary pl-md py-xs">
                        <div class="shrink-0 text-center w-12">
                            <p class="font-label-sm text-label-sm text-on-surface-variant uppercase">{{ date('M', strtotime('+2 days')) }}</p>
                            <p class="font-display-lg-mobile text-display-lg-mobile font-bold text-on-surface">{{ date('d', strtotime('+2 days')) }}</p>
                        </div>
                        <div>
                            <p class="font-headline-md text-body-lg font-semibold text-on-surface">Workshop Kompos Organik</p>
                            <div class="flex items-center gap-1 text-on-surface-variant">
                                <span class="material-symbols-outlined text-[16px]">schedule</span>
                                <span class="font-body-md text-body-md">13:00 - 15:30 WIB</span>
                            </div>
                            <div class="flex items-center gap-1 text-on-surface-variant">
                                <span class="material-symbols-outlined text-[16px]">location_on</span>
                                <span class="font-body-md text-body-md">Aula Desa Balonggandu</span>
                            </div>
                        </div>
                    </div>
                </div>
                <button onclick="location.href='/admin/bank-digital'" class="w-full mt-lg py-md rounded-lg border border-primary text-primary font-bold hover:bg-primary/5 transition-colors cursor-pointer active:scale-95 duration-150">
                    Buka Panel Bank Sampah
                </button>
            </div>

            <!-- Quick Access / Data Analytics -->
            <div class="bg-primary text-on-primary p-lg rounded-xl shadow-lg relative overflow-hidden">
                <div class="relative z-10">
                    <h4 class="font-headline-md text-headline-md mb-xs">Analistik Data 3R</h4>
                    <p class="font-body-md text-body-md text-white/80 mb-md">Pantau rekapitulasi data pengunjung dan transaksi nasabah bank sampah.</p>
                    <a href="/admin/bank-digital" class="bg-white text-primary px-lg py-sm rounded-full font-bold text-label-sm inline-flex items-center gap-sm shadow-sm hover:shadow-md active:scale-95 transition-all">
                        <span class="material-symbols-outlined">analytics</span>
                        KELOLA DATA BANK SAMPAH
                    </a>
                </div>
                <div class="absolute top-0 right-0 -mr-8 -mt-8 w-32 h-32 bg-white/10 rounded-full"></div>
                <div class="absolute bottom-0 right-0 -mr-4 -mb-4 w-20 h-20 bg-white/5 rounded-full"></div>
            </div>
        </div>
    </div>
</main>

<!-- BottomNavBar (Visible on Mobile) -->
<nav class="fixed bottom-0 w-full z-50 flex justify-around items-center h-[72px] px-sm pb-safe bg-surface-container-lowest shadow-lg md:hidden border-t border-outline-variant">
    <a class="flex flex-col items-center justify-center bg-secondary-container text-on-secondary-container rounded-full px-4 py-1 active:scale-90 transition-transform duration-200" href="/admin">
        <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">home</span>
        <span class="font-label-sm text-label-sm">Home</span>
    </a>
    <a class="flex flex-col items-center justify-center text-on-surface-variant px-4 py-1 active:scale-90 transition-transform duration-200" href="/admin/artikel">
        <span class="material-symbols-outlined">menu_book</span>
        <span class="font-label-sm text-label-sm">Edukasi</span>
    </a>
    <a class="flex flex-col items-center justify-center text-on-surface-variant px-4 py-1 active:scale-90 transition-transform duration-200" href="/admin/bank-digital">
        <span class="material-symbols-outlined">settings_suggest</span>
        <span class="font-label-sm text-label-sm">Pengelolaan</span>
    </a>
    <a class="flex flex-col items-center justify-center text-on-surface-variant px-4 py-1 active:scale-90 transition-transform duration-200" href="/admin/galeri">
        <span class="material-symbols-outlined">collections</span>
        <span class="font-label-sm text-label-sm">Galeri</span>
    </a>
</nav>

<!-- Floating Action Button (FAB) -->
<button onclick="openQuickAction()" class="fixed bottom-24 right-md md:bottom-lg md:right-margin-desktop w-14 h-14 bg-primary text-on-primary rounded-2xl shadow-xl flex items-center justify-center cursor-pointer hover:scale-105 active:scale-90 transition-all z-40 group">
    <span class="material-symbols-outlined text-[32px]">add</span>
    <span class="absolute right-full mr-md py-sm px-md bg-inverse-surface text-on-surface rounded-lg text-label-sm whitespace-nowrap opacity-0 group-hover:opacity-100 transition-opacity duration-300 pointer-events-none">Tambah Aset Baru</span>
</button>

<script>
    // Toggle Sidebar Drawer (Menu Samping)
    function toggleAdminDrawer() {
        const drawer = document.getElementById('admin-drawer');
        const backdrop = document.getElementById('admin-backdrop');
        const isOpen = drawer.classList.contains('translate-x-0');

        if (isOpen) {
            drawer.classList.remove('translate-x-0');
            drawer.classList.add('-translate-x-full');
            backdrop.classList.remove('opacity-100');
            backdrop.classList.add('opacity-0');
            setTimeout(() => backdrop.classList.add('hidden'), 300);
        } else {
            backdrop.classList.remove('hidden');
            setTimeout(() => {
                drawer.classList.remove('-translate-x-full');
                drawer.classList.add('translate-x-0');
                backdrop.classList.remove('opacity-0');
                backdrop.classList.add('opacity-100');
            }, 10);
        }
    }

    function openQuickAction() {
        location.href = '/admin/artikel';
    }

    // Micro-interaction for Stat Cards
    document.querySelectorAll('.bg-surface-container-lowest').forEach(card => {
        card.addEventListener('mouseenter', () => {
            card.classList.add('scale-[1.01]');
        });
        card.addEventListener('mouseleave', () => {
            card.classList.remove('scale-[1.01]');
        });
    });
</script>
</body>
</html>
