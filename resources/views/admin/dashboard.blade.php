<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="utf-8">
<meta content="width=device-width, initial-scale=1.0" name="viewport">
<title>Admin Dashboard - SampahKita Balonggandu</title>
<link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0..1,0&display=block" rel="stylesheet">
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<script id="tailwind-config">
    try {
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
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
                    borderRadius: {
                        "DEFAULT": "0.125rem",
                        "lg": "0.25rem",
                        "xl": "0.5rem",
                        "full": "9999px"
                    },
                    spacing: {
                        "base": "8px",
                        "margin-desktop": "64px",
                        "gutter": "24px",
                        "margin-mobile": "16px",
                        "container-max": "1280px"
                    },
                    fontFamily: {
                        "body-md": ["Plus Jakarta Sans"],
                        "headline-lg-mobile": ["Plus Jakarta Sans"],
                        "body-lg": ["Plus Jakarta Sans"],
                        "label-sm": ["Plus Jakarta Sans"],
                        "label-bold": ["Plus Jakarta Sans"],
                        "headline-md": ["Plus Jakarta Sans"],
                        "headline-lg": ["Plus Jakarta Sans"]
                    },
                    fontSize: {
                        "body-md": ["16px", {"lineHeight": "1.5", "fontWeight": "400"}],
                        "headline-lg-mobile": ["32px", {"lineHeight": "1.2", "fontWeight": "800"}],
                        "body-lg": ["18px", {"lineHeight": "1.6", "fontWeight": "500"}],
                        "label-sm": ["12px", {"lineHeight": "1.2", "fontWeight": "600"}],
                        "label-bold": ["14px", {"lineHeight": "1.2", "fontWeight": "700"}],
                        "headline-md": ["24px", {"lineHeight": "1.3", "fontWeight": "800"}],
                        "headline-lg": ["40px", {"lineHeight": "1.1", "letterSpacing": "-0.02em", "fontWeight": "800"}]
                    }
                },
            },
        }
    } catch(_e){}
</script>
<style>
    body { font-family: 'Plus Jakarta Sans', sans-serif; }

    /* Neubrutalist Design Tokens */
    .neubrutal-sidebar {
        border-right: 2px solid #1b1c1a;
    }
    .neubrutal-header {
        border-bottom: 2px solid #1b1c1a;
    }
    .neubrutal-card {
        border: 2px solid #1b1c1a;
        box-shadow: 4px 4px 0px 0px #1b1c1a;
        transition: transform 0.15s ease, box-shadow 0.15s ease;
    }
    .neubrutal-card:hover {
        transform: translate(-2px, -2px);
        box-shadow: 6px 6px 0px 0px #1b1c1a;
    }
    .neubrutal-button {
        border: 2px solid #1b1c1a;
        box-shadow: 3px 3px 0px 0px #1b1c1a;
        transition: transform 0.1s ease, box-shadow 0.1s ease;
    }
    .neubrutal-button:active {
        transform: translate(2px, 2px);
        box-shadow: 1px 1px 0px 0px #1b1c1a;
    }
</style>
</head>
<body class="bg-background text-on-background min-h-screen">

    <!-- Backdrop -->
    <div id="admin-backdrop" class="fixed inset-0 bg-black/45 z-45 hidden opacity-0 transition-opacity duration-300" onclick="toggleAdminDrawer()"></div>

    <!-- ═══════════════════════════════════
         SIDEBAR NAVIGATION (Collapsible Drawer)
    ════════════════════════════════════ -->
    <aside id="admin-drawer" class="fixed left-0 top-0 h-full w-[280px] bg-primary neubrutal-sidebar flex flex-col p-6 z-50 transition-transform duration-300 transform -translate-x-full">
        <!-- Sidebar Brand -->
        <div class="mb-10 px-2 pt-4 flex justify-between items-center">
            <div>
                <h1 class="font-headline-md text-headline-md text-on-primary">Admin Desa</h1>
                <p class="font-body-md text-body-sm text-on-primary opacity-80">Balonggandu Portal</p>
            </div>
            <!-- Close button -->
            <button onclick="toggleAdminDrawer()" class="p-1 rounded-full hover:bg-[#334d34] text-white flex items-center justify-center">
                <span class="material-symbols-outlined text-[22px]">close</span>
            </button>
        </div>

        <!-- Sidebar Navigation Menu -->
        <nav class="flex-1 space-y-3">
            <!-- Dashboard (Active) -->
            <a class="flex items-center gap-3 px-4 py-3 bg-secondary-container text-on-secondary-container rounded-xl border-2 border-neubrutal-black shadow-[2px_2px_0px_0px_#1b1c1a] transition-all hover:translate-y-[-1px]" href="/admin">
                <span class="material-symbols-outlined">dashboard</span>
                <span class="font-label-bold">Dashboard</span>
            </a>
            <!-- Artikel -->
            <a class="flex items-center gap-3 px-4 py-3 text-on-primary hover:bg-[#334d34] transition-all rounded-xl" href="/admin/artikel">
                <span class="material-symbols-outlined">description</span>
                <span class="font-label-bold">Artikel Edukasi</span>
            </a>
            <!-- Galeri -->
            <a class="flex items-center gap-3 px-4 py-3 text-on-primary hover:bg-[#334d34] transition-all rounded-xl" href="/galeri">
                <span class="material-symbols-outlined">photo_library</span>
                <span class="font-label-bold">Galeri Kegiatan</span>
            </a>
            <!-- Kontak -->
            <a class="flex items-center gap-3 px-4 py-3 text-on-primary hover:bg-[#334d34] transition-all rounded-xl" href="/admin/kontak">
                <span class="material-symbols-outlined">contact_support</span>
                <span class="font-label-bold">Kontak</span>
            </a>
            <!-- Back to website -->
            <a class="flex items-center gap-3 px-4 py-3 text-on-primary hover:bg-[#334d34] transition-all rounded-xl" href="/">
                <span class="material-symbols-outlined">open_in_new</span>
                <span class="font-label-bold">Lihat Website</span>
            </a>
        </nav>


        <!-- Admin Profile Info + Logout -->
        <div class="mt-auto space-y-2">
            <div class="p-4 bg-[#334d34]/60 rounded-xl border-2 border-neubrutal-black flex items-center gap-3">
                <div class="w-10 h-10 rounded-full bg-secondary overflow-hidden border-2 border-neubrutal-black flex-shrink-0">
                    <img class="w-full h-full object-cover" src="{{ asset('images/admin_avatar.jpg') }}" alt="Admin avatar">
                </div>
                <div class="min-w-0">
                    <p class="font-label-bold text-on-primary truncate text-[14px]">{{ session('admin_name', 'Admin') }}</p>
                    <p class="text-[10px] text-on-primary/75 uppercase tracking-widest font-bold">{{ session('admin_email', '') }}</p>
                </div>
            </div>
            <!-- Logout Button -->
            <form method="POST" action="{{ route('admin.logout') }}">
                @csrf
                <button type="submit"
                    class="w-full flex items-center gap-3 px-4 py-3 text-red-300 hover:bg-red-900/30 transition-all rounded-xl border border-red-500/20">
                    <span class="material-symbols-outlined text-[20px]">logout</span>
                    <span class="font-label-bold text-[14px]">Logout</span>
                </button>
            </form>
        </div>
    </aside>


    <!-- ═══════════════════════════════════
         TOP NAVBAR SHELL
    ════════════════════════════════════ -->
    <header class="fixed top-0 right-0 w-full h-16 bg-[#f5f3ef] neubrutal-header flex justify-between items-center px-4 md:px-8 z-40">
        <div class="flex items-center gap-3">
            <!-- Hamburger Toggle -->
            <button onclick="toggleAdminDrawer()" class="p-2 border-2 border-neubrutal-black rounded-lg bg-white shadow-[2px_2px_0px_0px_#1b1c1a] hover:scale-105 active:scale-95 transition-transform flex items-center justify-center">
                <span class="material-symbols-outlined text-neubrutal-black">menu</span>
            </button>

            <!-- Page title -->
            <span class="font-bold text-[16px] text-on-background md:hidden">Dashboard</span>

            <!-- Search bar (md+) -->
            <div class="hidden md:flex items-center bg-white border-2 border-neubrutal-black rounded-full px-4 py-2 w-72 shadow-[2px_2px_0px_0px_#1b1c1a]">
                <span class="material-symbols-outlined text-neubrutal-black text-xl">search</span>
                <input class="bg-transparent border-none focus:ring-0 text-sm w-full placeholder:text-outline/80 ml-2" placeholder="Cari data desa..." type="text">
            </div>
        </div>

        <!-- Quick actions -->
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

    <!-- ═══════════════════════════════════
         MAIN CONTENT CANVAS
    ════════════════════════════════════ -->
    <main class="pt-20 pb-12 px-4 md:px-8 lg:px-12 max-w-[1400px] mx-auto">
        <!-- Top Stats Row (3 cards) -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-10">
            <!-- Total Artikel -->
            <div class="bg-primary-fixed p-6 rounded-xl neubrutal-card flex flex-col justify-between min-h-[160px]">
                <div class="flex justify-between items-start mb-6">
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
            <!-- Total Kategori -->
            <div class="bg-secondary-fixed p-6 rounded-xl neubrutal-card flex flex-col justify-between min-h-[160px]">
                <div class="flex justify-between items-start mb-6">
                    <div class="p-3 bg-white border-2 border-neubrutal-black rounded-lg">
                        <span class="material-symbols-outlined text-secondary text-[24px]">category</span>
                    </div>
                    <span class="text-xs font-label-bold text-on-background bg-white border border-neubrutal-black px-2 py-1 rounded-full">Kategori</span>
                </div>
                <div>
                    <p class="font-label-bold text-on-background opacity-70 text-[13px]">Total Kategori</p>
                    <h3 class="font-headline-lg text-headline-lg text-on-background leading-none mt-1">{{ $categoriesCount }}</h3>
                </div>
            </div>
            <!-- Pengunjung Bulan Ini -->
            <div class="bg-tertiary-fixed p-6 rounded-xl neubrutal-card flex flex-col justify-between min-h-[160px]">
                <div class="flex justify-between items-start mb-6">
                    <div class="p-3 bg-white border-2 border-neubrutal-black rounded-lg">
                        <span class="material-symbols-outlined text-tertiary text-[24px]">trending_up</span>
                    </div>
                    <span class="text-xs font-label-bold text-on-background bg-white border border-neubrutal-black px-2 py-1 rounded-full">Bulan Ini</span>
                </div>
                <div>
                    <p class="font-label-bold text-on-background opacity-70 text-[13px]">Pengunjung Bulan Ini</p>
                    <h3 class="font-headline-lg text-headline-lg text-on-background leading-none mt-1">{{ number_format($monthlyVisitors, 0, ',', '.') }}</h3>
                </div>
            </div>
        </div>

        <!-- Middle Section: Visitor Traffic Graph -->
        <section class="bg-white p-8 rounded-xl neubrutal-card mb-10">
            <div class="flex flex-col md:flex-row justify-between items-start md:items-center gap-4 mb-8">
                <div>
                    <h4 class="font-headline-md text-headline-md text-on-background">Visitor Traffic</h4>
                    <p class="font-body-md text-on-surface-variant text-[14px]">Trend pengunjung 7 hari terakhir (riil)</p>
                </div>
                <div class="flex gap-4">
                    <button class="px-6 py-2 bg-primary text-on-primary border-2 border-neubrutal-black font-label-bold rounded-lg shadow-[2px_2px_0px_0px_#1b1c1a]">Mingguan</button>
                    <button class="px-6 py-2 bg-surface-container-high border-2 border-neubrutal-black font-label-bold rounded-lg transition-all active:translate-y-1 hover:translate-y-[-1px]">Bulanan</button>
                </div>
            </div>

            @php
                // Calculate dynamic SVG coordinates safely for last 7 days
                $counts = array_column($trafficData, 'count');
                $maxVal = empty($counts) ? 100 : max($counts) ?: 100;
                $points = [];
                $stepX = 1000 / 6; // divide 1000px width equally by 7 points (6 intervals)
                
                foreach ($trafficData as $index => $item) {
                    $x = round($index * $stepX);
                    // Chart height is 200. We map count: 0 -> Y:170 (bottom) and max -> Y:30 (top)
                    $y = round(170 - (($item['count'] / $maxVal) * 140));
                    $points[] = "$x,$y";
                }
                $pathD = "M " . implode(" L ", $points);
            @endphp

            <div class="chart-container h-[220px]">
                <svg class="w-full h-full overflow-visible" viewBox="0 0 1000 200" preserveAspectRatio="none">
                    <!-- Grid Lines -->
                    <line stroke="#1b1c1a" stroke-dasharray="4 4" stroke-opacity="0.1" stroke-width="1" x1="0" x2="1000" y1="170" y2="170"></line>
                    <line stroke="#1b1c1a" stroke-dasharray="4 4" stroke-opacity="0.1" stroke-width="1" x1="0" x2="1000" y1="120" y2="120"></line>
                    <line stroke="#1b1c1a" stroke-dasharray="4 4" stroke-opacity="0.1" stroke-width="1" x1="0" x2="1000" y1="70" y2="70"></line>
                    <line stroke="#1b1c1a" stroke-dasharray="4 4" stroke-opacity="0.1" stroke-width="1" x1="0" x2="1000" y1="30" y2="30"></line>
                    
                    <!-- Dynamic Sparkline -->
                    <path d="{{ $pathD }}" fill="none" stroke="#1b1c1a" stroke-linecap="round" stroke-linejoin="round" stroke-width="4"></path>
                    
                    <!-- Dynamic Data Points (Neubrutalist rects) -->
                    @foreach ($trafficData as $index => $item)
                        @php
                            $x = round($index * $stepX);
                            $y = round(170 - (($item['count'] / $maxVal) * 140));
                        @endphp
                        <g class="group/point cursor-pointer">
                            <rect x="{{ $x - 6 }}" y="{{ $y - 6 }}" width="12" height="12" fill="#ffffff" stroke="#1b1c1a" stroke-width="2"></rect>
                            <text x="{{ $x }}" y="{{ $y - 14 }}" font-size="11" font-weight="bold" fill="#1b1c1a" text-anchor="middle" class="opacity-0 group-hover/point:opacity-100 transition-opacity bg-white px-1 py-0.5 rounded">{{ $item['count'] }}</text>
                        </g>
                    @endforeach
                </svg>
                <div class="flex justify-between mt-6 text-sm font-label-bold text-on-background">
                    @foreach ($trafficData as $item)
                        <span>{{ $item['day'] }}</span>
                    @endforeach
                </div>
            </div>
        </section>

        <!-- Bottom Section: Recent Activities & Quick Actions -->
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
            <!-- Recent Activities -->
            <div class="lg:col-span-2 bg-white p-8 rounded-xl neubrutal-card">
                <div class="flex justify-between items-center mb-8">
                    <h4 class="font-headline-md text-headline-md text-on-background">Recent Activities</h4>
                    <a class="text-body-md font-label-bold text-primary underline underline-offset-4 decoration-2" href="#">Lihat Semua</a>
                </div>
                <div class="space-y-4">
                    <div class="flex items-start gap-4 p-5 bg-surface-container-low border-2 border-neubrutal-black rounded-xl hover:translate-x-1 transition-transform cursor-pointer group shadow-[2px_2px_0px_0px_#1b1c1a]">
                        <div class="w-12 h-12 rounded-lg bg-secondary-container border-2 border-neubrutal-black flex items-center justify-center flex-shrink-0">
                            <span class="material-symbols-outlined text-on-secondary-container fill-icon">edit_document</span>
                        </div>
                        <div class="flex-1">
                            <p class="font-headline-md text-body-md text-on-background">New article published: <span class="font-extrabold">"Pembangunan Jalan Desa 2024"</span></p>
                            <p class="font-body-md text-body-sm text-on-surface-variant font-medium mt-0.5">Oleh Budi Santoso • 2 jam yang lalu</p>
                        </div>
                        <span class="material-symbols-outlined text-neubrutal-black group-hover:translate-x-1 transition-transform self-center">arrow_forward</span>
                    </div>
                    <div class="flex items-start gap-4 p-5 bg-surface-container-low border-2 border-neubrutal-black rounded-xl hover:translate-x-1 transition-transform cursor-pointer group shadow-[2px_2px_0px_0px_#1b1c1a]">
                        <div class="w-12 h-12 rounded-lg bg-primary-container border-2 border-neubrutal-black flex items-center justify-center flex-shrink-0">
                            <span class="material-symbols-outlined text-on-primary fill-icon">settings</span>
                        </div>
                        <div class="flex-1">
                            <p class="font-headline-md text-body-md text-on-background">Settings updated: <span class="font-extrabold">Informasi Kontak Desa</span></p>
                            <p class="font-body-md text-body-sm text-on-surface-variant font-medium mt-0.5">Oleh Admin Utama • 5 jam yang lalu</p>
                        </div>
                        <span class="material-symbols-outlined text-neubrutal-black group-hover:translate-x-1 transition-transform self-center">arrow_forward</span>
                    </div>
                </div>
            </div>

            <!-- Quick Actions -->
            <div class="flex flex-col gap-8">
                <!-- Promo banner -->
                <div class="bg-primary p-8 rounded-xl neubrutal-card text-on-primary relative overflow-hidden flex flex-col justify-between min-h-[220px]">
                    <div class="absolute -top-4 -right-4 opacity-10">
                        <span class="material-symbols-outlined text-[140px] fill-icon">villa</span>
                    </div>
                    <div class="relative z-10">
                        <h5 class="font-headline-md text-[20px] mb-2 leading-tight">Desa Digital 2024</h5>
                        <p class="text-[13px] text-white/90 leading-relaxed mb-6 font-medium">Kelola aspirasi warga dan transparansi anggaran desa dalam satu genggaman.</p>
                    </div>
                    <button class="w-full py-3 bg-white text-neubrutal-black border-2 border-neubrutal-black neubrutal-button font-label-bold rounded-xl text-[14px]">
                        Buat Pengumuman
                    </button>
                </div>

                <!-- Maps preview -->
                <div class="bg-white p-6 rounded-xl neubrutal-card">
                    <h5 class="font-label-bold text-on-background uppercase tracking-widest text-[12px] mb-4">Lokasi Kantor Desa</h5>
                    <div class="w-full h-40 bg-surface-container border-2 border-neubrutal-black rounded-lg overflow-hidden relative">
                        <div class="w-full h-full bg-cover bg-center" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuAsAn07O9hpnqD-tqYe1yqV59j2XZ4g98z-H11rDSTyGPrLXYYwZGdg6bzmVKJBQkGWxRStB-XTymH3evylPKM4NREMYLJaGC9xgLvxpsT6YM7DIyu07QSee8NN1LdzfabYQTZW-pEDlzouHO5cEUwJHfpEIeHGJgtuVii9_eHmaBsTADm5GJ9QpWZxL-XvPSBJ1irViULrPO7nknK5mxHgkJsUvP9vjQkeBSlaT-y8CsEaN0UMfQpphQ')"></div>
                        <div class="absolute inset-0 border-2 border-neubrutal-black pointer-events-none"></div>
                    </div>
                </div>
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
