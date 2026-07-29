<!DOCTYPE html>
<html class="light" lang="id">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Dashboard Admin - Sampah Kita</title>
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
                "neubrutal-yellow": "#ffd23f",
                "neubrutal-black": "#1b1c1a",
                "neubrutal-bg": "#f5f3ef",
                "on-secondary-fixed": "#071e2b",
                "tertiary": "#705370",
                "outline-variant": "#c3c8bf",
                "tertiary-fixed": "#fbd7fb",
                "surface": "#fbf9f5",
                "surface-container": "#efeeea",
                "surface-container-high": "#eae8e4",
                "outline": "#737971",
                "inverse-primary": "#b0ceae",
                "primary-fixed-dim": "#b0ceae",
                "secondary": "#476171",
                "surface-container-lowest": "#ffffff",
                "secondary-fixed": "#cae6f9",
                "surface-container-low": "#f5f3ef",
                "background": "#fbf9f5",
                "on-primary-fixed-variant": "#334d34",
                "secondary-container": "#cae6f9",
                "on-primary-fixed": "#07200b",
                "on-tertiary-container": "#573c57",
                "primary-container": "#8ba889",
                "surface-bright": "#fbf9f5",
                "primary-fixed": "#ccebc8",
                "on-primary": "#ffffff",
                "on-tertiary-fixed-variant": "#573c57",
                "surface-dim": "#dbdad6",
                "surface-variant": "#e4e2de",
                "inverse-on-surface": "#f2f0ed",
                "on-error-container": "#93000a",
                "on-secondary-container": "#2f4958",
                "tertiary-container": "#d6b5d6",
                "error": "#ba1a1a",
                "on-secondary": "#ffffff",
                "on-background": "#1b1c1a",
                "on-surface": "#1b1c1a",
                "surface-tint": "#4a654a",
                "error-container": "#ffdad6",
                "on-tertiary": "#ffffff",
                "secondary-fixed-dim": "#aebcca",
                "on-[#ffffff]": "#1b1c1a",
                "primary": "#2d4a2e",
                "on-primary-container": "#243d25",
                "on-tertiary-fixed": "#28112a",
                "on-surface-variant": "#434841",
                "tertiary-fixed-dim": "#dec0de",
                "on-error": "#ffffff",
                "inverse-surface": "#30312e",
                "on-secondary-fixed-variant": "#2f4958",
                "surface-container-highest": "#e4e2de"
            },
            "borderRadius": {
                "DEFAULT": "0.125rem",
                "lg": "0.25rem",
                "xl": "0.5rem",
                "full": "0.75rem"
            },
            "spacing": {
                "base": "8px",
                "margin-desktop": "64px",
                "gutter": "24px",
                "margin-mobile": "16px"
            },
            "fontFamily": {
                "body-md": ["Plus Jakarta Sans"],
                "display-lg": ["Plus Jakarta Sans"],
                "headline-lg": ["Plus Jakarta Sans"],
                "display-lg-mobile": ["Plus Jakarta Sans"],
                "body-lg": ["Plus Jakarta Sans"],
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

            <!-- Total Nasabah Bank Sampah -->
            <div class="bg-secondary-container p-6 rounded-xl neubrutal-card flex flex-col justify-between min-h-[140px]">
                <div class="flex justify-between items-start mb-4">
                    <div class="p-3 bg-white border-2 border-neubrutal-black rounded-lg">
                        <span class="material-symbols-outlined text-[#fd8603] text-[24px]">group</span>
                    </div>
                    <span class="text-xs font-label-bold text-on-secondary-container bg-white border border-neubrutal-black px-2 py-1 rounded-full">Nasabah</span>
                </div>
                <div>
                    <p class="font-label-bold text-on-secondary-container opacity-80 text-[13px]">Nasabah Bank Sampah</p>
                    <h3 class="font-headline-lg text-headline-lg text-on-secondary-container leading-none mt-1">{{ $totalNasabah ?? 0 }}</h3>
                </div>
            </div>

            <!-- Total Transaksi Sampah -->
            <div class="bg-tertiary-fixed p-6 rounded-xl neubrutal-card flex flex-col justify-between min-h-[140px]">
                <div class="flex justify-between items-start mb-4">
                    <div class="p-3 bg-white border-2 border-neubrutal-black rounded-lg">
                        <span class="material-symbols-outlined text-tertiary text-[24px]">receipt_long</span>
                    </div>
                    <span class="text-xs font-label-bold text-on-tertiary-fixed-variant bg-white border border-neubrutal-black px-2 py-1 rounded-full">Setoran</span>
                </div>
                <div>
                    <p class="font-label-bold text-on-tertiary-fixed-variant opacity-80 text-[13px]">Total Transaksi</p>
                    <h3 class="font-headline-lg text-headline-lg text-on-tertiary-fixed-variant leading-none mt-1">{{ $totalTransaksi ?? 0 }}</h3>
                </div>
            </div>

            <!-- Total Saldo Terkumpul -->
            <div class="bg-[#ffd23f] p-6 rounded-xl neubrutal-card flex flex-col justify-between min-h-[140px]">
                <div class="flex justify-between items-start mb-4">
                    <div class="p-3 bg-white border-2 border-neubrutal-black rounded-lg">
                        <span class="material-symbols-outlined text-neubrutal-black text-[24px]">payments</span>
                    </div>
                    <span class="text-xs font-label-bold text-neubrutal-black bg-white border border-neubrutal-black px-2 py-1 rounded-full">Rupiah</span>
                </div>
                <div>
                    <p class="font-label-bold text-neubrutal-black opacity-80 text-[13px]">Total Saldo Warga</p>
                    <h3 class="font-headline-md text-headline-md text-neubrutal-black leading-none mt-1 font-bold">
                        Rp {{ number_format($totalSaldo ?? 0, 0, ',', '.') }}
                    </h3>
                </div>
            </div>
        </div>

        <!-- Portal Quick Links / Actions -->
        <div class="bg-white p-6 md:p-8 rounded-xl neubrutal-card mb-10">
            <h3 class="font-headline-md text-headline-md text-on-background mb-4">Akses Cepat Pengelolaan Desa</h3>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-4">
                <a href="/admin/bank-digital" class="p-4 bg-secondary-container rounded-xl border-2 border-neubrutal-black shadow-[2px_2px_0px_0px_#1b1c1a] hover:translate-y-[-2px] transition-all flex items-center gap-3">
                    <span class="material-symbols-outlined text-[#fd8603] text-[28px]">equalizer</span>
                    <div>
                        <h4 class="font-bold text-[14px]">Bank Sampah</h4>
                        <p class="text-[11px] opacity-75">Kelola Nasabah & Setoran</p>
                    </div>
                </a>
                <a href="/admin/artikel" class="p-4 bg-primary-fixed rounded-xl border-2 border-neubrutal-black shadow-[2px_2px_0px_0px_#1b1c1a] hover:translate-y-[-2px] transition-all flex items-center gap-3">
                    <span class="material-symbols-outlined text-primary text-[28px]">description</span>
                    <div>
                        <h4 class="font-bold text-[14px]">Artikel Edukasi</h4>
                        <p class="text-[11px] opacity-75">Kelola Panduan 3R</p>
                    </div>
                </a>
                <a href="/admin/galeri" class="p-4 bg-tertiary-fixed rounded-xl border-2 border-neubrutal-black shadow-[2px_2px_0px_0px_#1b1c1a] hover:translate-y-[-2px] transition-all flex items-center gap-3">
                    <span class="material-symbols-outlined text-tertiary text-[28px]">photo_library</span>
                    <div>
                        <h4 class="font-bold text-[14px]">Galeri Kegiatan</h4>
                        <p class="text-[11px] opacity-75">Kelola Dokumentasi</p>
                    </div>
                </a>
                <a href="/admin/kontak" class="p-4 bg-[#ffd23f] rounded-xl border-2 border-neubrutal-black shadow-[2px_2px_0px_0px_#1b1c1a] hover:translate-y-[-2px] transition-all flex items-center gap-3">
                    <span class="material-symbols-outlined text-neubrutal-black text-[28px]">contact_support</span>
                    <div>
                        <h4 class="font-bold text-[14px]">Kontak Desa</h4>
                        <p class="text-[11px] opacity-75">Kelola Info Layanan</p>
                    </div>
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
