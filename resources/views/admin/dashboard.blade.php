<!DOCTYPE html>
<html lang="id" class="light">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin — EduManage Admin</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=block" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <script id="tailwind-config">
    try {
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
    } catch(_e){}
    </script>
    <style>
        body { font-family: 'Inter', sans-serif; }
    </style>
</head>
<body class="bg-background text-on-background min-h-screen">

<!-- Permanent Left Sidebar (Desktop) & Mobile Drawer -->
<div id="drawer-overlay" class="fixed inset-0 bg-black/40 z-50 opacity-0 pointer-events-none transition-opacity md:hidden" onclick="toggleSidebar()"></div>

<aside id="sidebar" class="fixed left-0 top-0 bottom-0 w-[260px] bg-surface-container-lowest border-r border-surface-variant z-50 flex flex-col -translate-x-full md:translate-x-0 transition-transform duration-300 shadow-xl md:shadow-none">
    <!-- Brand Logo -->
    <div class="p-lg border-b border-surface-variant flex items-center justify-between">
        <div class="flex items-center gap-sm">
            <span class="material-symbols-outlined text-primary text-[30px]" style="font-variation-settings: 'FILL' 1;">recycling</span>
            <div class="flex flex-col">
                <span class="font-headline-md font-bold text-primary text-lg leading-tight">EduManage</span>
                <span class="font-label-sm text-[11px] text-on-surface-variant">Desa Balonggandu</span>
            </div>
        </div>
        <button onclick="toggleSidebar()" class="md:hidden p-1 rounded-full text-on-surface-variant hover:bg-surface-container-low">
            <span class="material-symbols-outlined">close</span>
        </button>
    </div>

    <!-- Nav Links -->
    <nav class="flex-1 p-md space-y-xs overflow-y-auto">
        <a href="/admin" class="flex items-center gap-md p-md rounded-xl bg-secondary-container text-on-secondary-container font-semibold shadow-sm">
            <span class="material-symbols-outlined">dashboard</span>
            <span class="font-body-md">Dashboard</span>
        </a>
        <a href="/admin/artikel" class="flex items-center gap-md p-md rounded-xl text-on-surface-variant hover:bg-surface-container-low transition-colors">
            <span class="material-symbols-outlined">article</span>
            <span class="font-body-md">Manajemen Artikel</span>
        </a>
        <a href="/admin/galeri" class="flex items-center gap-md p-md rounded-xl text-on-surface-variant hover:bg-surface-container-low transition-colors">
            <span class="material-symbols-outlined">collections</span>
            <span class="font-body-md">Galeri Kegiatan</span>
        </a>
        <a href="/admin/bank-digital" class="flex items-center gap-md p-md rounded-xl text-on-surface-variant hover:bg-surface-container-low transition-colors">
            <span class="material-symbols-outlined">equalizer</span>
            <span class="font-body-md">Bank Sampah Digital</span>
        </a>
        <a href="/admin/kontak" class="flex items-center gap-md p-md rounded-xl text-on-surface-variant hover:bg-surface-container-low transition-colors">
            <span class="material-symbols-outlined">contact_support</span>
            <span class="font-body-md">Pengaturan Kontak</span>
        </a>
        <div class="h-px bg-surface-variant my-md"></div>
        <a href="/" target="_blank" class="flex items-center gap-md p-md rounded-xl text-on-surface-variant hover:bg-surface-container-low transition-colors">
            <span class="material-symbols-outlined">open_in_new</span>
            <span class="font-body-md">Lihat Website Warga</span>
        </a>
    </nav>

    <!-- Admin Profile Footer -->
    <div class="p-md bg-surface-container-low border-t border-surface-variant flex items-center justify-between gap-sm">
        <div class="flex items-center gap-sm overflow-hidden">
            <div class="w-9 h-9 rounded-full bg-primary text-white font-bold flex items-center justify-center shrink-0 text-sm">
                {{ strtoupper(substr(session('admin_name', 'A'), 0, 1)) }}
            </div>
            <div class="flex flex-col overflow-hidden">
                <span class="font-body-md font-bold text-on-surface text-xs truncate">{{ session('admin_name', 'Admin Utama') }}</span>
                <span class="font-label-sm text-[10px] text-on-surface-variant truncate">Balonggandu</span>
            </div>
        </div>
        <form method="POST" action="{{ route('admin.logout') }}">
            @csrf
            <button type="submit" class="p-2 text-red-600 hover:bg-red-50 rounded-lg transition-colors" title="Logout">
                <span class="material-symbols-outlined text-[20px]">logout</span>
            </button>
        </form>
    </div>
</aside>

<!-- Top AppBar (Content Area Wrapper) -->
<div class="md:ml-[260px] flex flex-col min-h-screen">
    <header class="flex justify-between items-center h-16 px-md md:px-margin-desktop w-full z-40 bg-surface border-b border-surface-variant sticky top-0 shadow-sm">
        <div class="flex items-center gap-sm">
            <button onclick="toggleSidebar()" class="md:hidden p-2 rounded-full hover:bg-surface-container-low text-on-surface-variant">
                <span class="material-symbols-outlined">menu</span>
            </button>
            <div class="flex items-center gap-sm cursor-pointer">
                <span class="material-symbols-outlined text-primary text-[28px]">school</span>
                <h1 class="font-headline-md text-headline-md font-bold text-primary">EduManage Admin</h1>
            </div>
        </div>
        <div class="flex items-center gap-sm">
            <button class="material-symbols-outlined p-2 rounded-full hover:bg-surface-container-low transition-colors cursor-pointer text-on-surface-variant">search</button>
            <button class="material-symbols-outlined p-2 rounded-full hover:bg-surface-container-low transition-colors cursor-pointer text-on-surface-variant">notifications</button>
            <a href="/admin/kontak" class="material-symbols-outlined p-2 rounded-full hover:bg-surface-container-low transition-colors cursor-pointer text-on-surface-variant">settings</a>
        </div>
    </header>

    <main class="flex-1 max-w-7xl w-full mx-auto px-md md:px-margin-desktop py-lg">
        <!-- Dashboard Welcome Section -->
        <section class="mb-xl">
            <h2 class="font-display-lg-mobile md:font-display-lg text-display-lg-mobile md:text-display-lg text-on-surface">Welcome back, {{ session('admin_name', 'Admin') }} 👋</h2>
            <p class="font-body-md text-body-md text-on-surface-variant">Berikut ringkasan statistik dan aktivitas pengelolaan Desa Balonggandu hari ini.</p>
        </section>

        <!-- Bento Grid: 4 Metric Cards -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-gutter mb-xl">

            <!-- Stat Card: Total Artikel -->
            <div class="bg-surface-container-lowest p-lg rounded-xl border border-surface-variant shadow-sm hover:shadow-md transition-all group">
                <div class="flex justify-between items-start mb-md">
                    <div class="p-3 rounded-lg bg-primary-container/10 text-primary">
                        <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">description</span>
                    </div>
                    <span class="font-mono-label text-mono-label px-2 py-1 bg-tertiary-fixed text-on-tertiary-fixed rounded-full flex items-center gap-1 font-semibold">
                        {{ $publishedCount }} Aktif
                    </span>
                </div>
                <h3 class="font-label-sm text-label-sm text-on-surface-variant uppercase tracking-wider mb-xs">Total Artikel</h3>
                <p class="font-display-lg text-display-lg text-on-surface font-bold">{{ $totalArticles }}</p>
                <div class="mt-md h-1.5 w-full bg-surface-container-low rounded-full overflow-hidden">
                    <div class="h-full bg-primary w-[80%]"></div>
                </div>
            </div>

            <!-- Stat Card: Total Pembaca (Views) -->
            <div class="bg-surface-container-lowest p-lg rounded-xl border border-surface-variant shadow-sm hover:shadow-md transition-all">
                <div class="flex justify-between items-start mb-md">
                    <div class="p-3 rounded-lg bg-secondary-container/10 text-secondary">
                        <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">visibility</span>
                    </div>
                    <span class="font-mono-label text-mono-label px-2 py-1 bg-surface-container-high text-on-surface-variant rounded-full flex items-center gap-1">
                        {{ $categoriesCount }} Kategori
                    </span>
                </div>
                <h3 class="font-label-sm text-label-sm text-on-surface-variant uppercase tracking-wider mb-xs">Total Pembaca</h3>
                <p class="font-display-lg text-display-lg text-on-surface font-bold">{{ number_format($totalViews) }}</p>
                <div class="mt-md flex -space-x-2">
                    <div class="w-7 h-7 rounded-full border-2 border-surface-container-lowest bg-primary flex items-center justify-center text-[10px] text-white font-bold">3R</div>
                    <div class="w-7 h-7 rounded-full border-2 border-surface-container-lowest bg-tertiary flex items-center justify-center text-[10px] text-white font-bold">Edu</div>
                    <div class="w-7 h-7 rounded-full border-2 border-surface-container-lowest bg-secondary flex items-center justify-center text-[10px] text-white font-bold">Desa</div>
                </div>
            </div>

            <!-- Stat Card: Pengunjung Website -->
            <div class="bg-surface-container-lowest p-lg rounded-xl border border-surface-variant shadow-sm hover:shadow-md transition-all">
                <div class="flex justify-between items-start mb-md">
                    <div class="p-3 rounded-lg bg-tertiary-container/10 text-tertiary">
                        <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">group</span>
                    </div>
                    <span class="font-mono-label text-mono-label px-2 py-1 bg-emerald-100 text-emerald-800 rounded-full flex items-center gap-1 font-semibold">
                        Bulan Ini
                    </span>
                </div>
                <h3 class="font-label-sm text-label-sm text-on-surface-variant uppercase tracking-wider mb-xs">Pengunjung Unik</h3>
                <p class="font-display-lg text-display-lg text-on-surface font-bold">{{ number_format($monthlyVisitors) }}</p>
                <div class="mt-md h-1.5 w-full bg-surface-container-low rounded-full overflow-hidden">
                    <div class="h-full bg-tertiary w-[65%]"></div>
                </div>
            </div>

            <!-- Stat Card: Bank Sampah 3R -->
            <div class="bg-surface-container-lowest p-lg rounded-xl border border-surface-variant shadow-sm hover:shadow-md transition-all">
                <div class="flex justify-between items-start mb-md">
                    <div class="p-3 rounded-lg bg-amber-100 text-amber-700">
                        <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">account_balance_wallet</span>
                    </div>
                    <span class="font-mono-label text-mono-label px-2 py-1 bg-amber-200 text-amber-900 rounded-full flex items-center gap-1 font-bold">
                        3R Digital
                    </span>
                </div>
                <h3 class="font-label-sm text-label-sm text-on-surface-variant uppercase tracking-wider mb-xs">Nasabah Terdaftar</h3>
                <p class="font-display-lg text-display-lg text-on-surface font-bold">{{ $totalNasabah }} Warga</p>
                <p class="text-xs text-amber-800 font-bold mt-1">Saldo: Rp {{ number_format($totalSaldo, 0, ',', '.') }}</p>
            </div>

        </div>

        <!-- Two Column Layout: Activity & Schedule -->
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-gutter">

            <!-- Recent Activity / Content Section (2 Cols) -->
            <div class="lg:col-span-2 space-y-lg">
                <!-- Recent Articles List -->
                <div class="bg-surface-container-lowest rounded-xl border border-surface-variant overflow-hidden shadow-sm">
                    <div class="p-lg border-b border-surface-variant flex justify-between items-center">
                        <h3 class="font-headline-md text-headline-md text-on-surface flex items-center gap-2">
                            <span class="material-symbols-outlined text-primary">article</span>
                            Artikel Terbaru
                        </h3>
                        <a href="/admin/artikel" class="text-primary font-label-sm text-label-sm hover:underline font-semibold">Lihat Semua</a>
                    </div>
                    <div class="divide-y divide-surface-variant">
                        @forelse($latestArticles as $art)
                            <div class="p-md flex items-start gap-md hover:bg-surface-container-low transition-colors">
                                <div class="w-10 h-10 rounded-full bg-primary-container/20 flex items-center justify-center shrink-0 mt-1">
                                    <span class="material-symbols-outlined text-primary">post_add</span>
                                </div>
                                <div class="flex-1 min-w-0">
                                    <p class="font-body-md text-body-md text-on-surface font-semibold truncate">{{ $art->title }}</p>
                                    <div class="flex items-center gap-2 mt-xs text-xs">
                                        <span class="px-2 py-0.5 rounded-full bg-primary-container/10 text-primary font-medium">{{ $art->category }}</span>
                                        <span class="text-on-surface-variant">{{ $art->views }} views</span>
                                        <span class="text-on-surface-variant">• {{ $art->created_at ? $art->created_at->diffForHumans() : 'Baru saja' }}</span>
                                    </div>
                                </div>
                                <span class="px-2.5 py-1 rounded-full text-xs font-bold shrink-0 {{ $art->status == 'Aktif' ? 'bg-emerald-100 text-emerald-800' : 'bg-amber-100 text-amber-800' }}">
                                    {{ $art->status }}
                                </span>
                            </div>
                        @empty
                            <p class="p-lg text-center text-on-surface-variant text-sm">Belum ada artikel publikasi.</p>
                        @endforelse
                    </div>
                </div>

                <!-- Recent Galleries List -->
                <div class="bg-surface-container-lowest rounded-xl border border-surface-variant overflow-hidden shadow-sm">
                    <div class="p-lg border-b border-surface-variant flex justify-between items-center">
                        <h3 class="font-headline-md text-headline-md text-on-surface flex items-center gap-2">
                            <span class="material-symbols-outlined text-tertiary">collections</span>
                            Galeri Kegiatan Terbaru
                        </h3>
                        <a href="/admin/galeri" class="text-primary font-label-sm text-label-sm hover:underline font-semibold">Lihat Semua</a>
                    </div>
                    <div class="divide-y divide-surface-variant">
                        @forelse($latestGalleries as $gal)
                            <div class="p-md flex items-center gap-md hover:bg-surface-container-low transition-colors">
                                <div class="w-12 h-12 rounded-lg overflow-hidden bg-surface-variant shrink-0 border border-surface-variant">
                                    <img src="{{ $gal->image_url }}" alt="{{ $gal->title }}" class="w-full h-full object-cover">
                                </div>
                                <div class="flex-1 min-w-0">
                                    <p class="font-body-md text-body-md text-on-surface font-semibold truncate">{{ $gal->title }}</p>
                                    <p class="text-xs text-on-surface-variant mt-0.5">{{ $gal->category }} · Oleh {{ $gal->uploader }}</p>
                                </div>
                                @if($gal->is_featured)
                                    <span class="px-2.5 py-1 bg-amber-400 text-amber-950 font-bold text-[10px] rounded-full uppercase tracking-wider shrink-0">Unggulan</span>
                                @endif
                            </div>
                        @empty
                            <p class="p-lg text-center text-on-surface-variant text-sm">Belum ada media galeri.</p>
                        @endforelse
                    </div>
                </div>

                <!-- Highlight Card -->
                <div class="relative rounded-xl overflow-hidden h-64 shadow-lg group">
                    <div class="absolute inset-0 bg-cover bg-center transition-transform duration-700 group-hover:scale-105" style="background-image: url('{{ asset('images/hero_karawang.png') }}')"></div>
                    <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/30 to-transparent"></div>
                    <div class="absolute bottom-0 left-0 p-lg text-white">
                        <span class="px-2.5 py-1 bg-primary text-[10px] font-bold rounded uppercase mb-sm inline-block tracking-wider">Highlight Desa</span>
                        <h4 class="font-headline-md text-headline-md font-bold">Program Pengelolaan Sampah Balonggandu</h4>
                        <p class="font-body-md text-body-md text-white/80 mt-1">Mengintegrasikan edukasi warga dengan sistem Bank Sampah Digital 3R secara berkelanjutan.</p>
                    </div>
                </div>
            </div>

            <!-- Right Column: Analytics & Schedule -->
            <div class="space-y-lg">

                <!-- Traffic Bar Chart Card -->
                <div class="bg-surface-container-lowest rounded-xl border border-surface-variant shadow-sm p-lg">
                    <h3 class="font-headline-md text-headline-md text-on-surface mb-sm">Grafik Traffic Kunjungan</h3>
                    <p class="text-xs text-on-surface-variant mb-lg">Statistik kunjungan warga 7 hari terakhir</p>

                    @php
                        $maxTraffic = max(array_column($trafficData, 'count')) ?: 1;
                    @endphp
                    <div class="grid grid-cols-7 gap-2 items-end h-40 pt-4 border-b border-surface-variant pb-2">
                        @foreach($trafficData as $dayData)
                            @php
                                $hPct = max(15, round(($dayData['count'] / $maxTraffic) * 100));
                            @endphp
                            <div class="flex flex-col items-center h-full justify-end group">
                                <span class="text-[10px] font-bold text-primary opacity-0 group-hover:opacity-100 transition-opacity mb-1">{{ $dayData['count'] }}</span>
                                <div class="w-full bg-gradient-to-t from-primary to-secondary-container rounded-t-md transition-all duration-200" style="height: {{ $hPct }}%;"></div>
                                <span class="text-[10px] font-medium text-on-surface-variant mt-2">{{ $dayData['day'] }}</span>
                            </div>
                        @endforeach
                    </div>
                    <div class="mt-4 flex items-center justify-between text-xs text-on-surface-variant">
                        <span>Total Kunjungan 7 Hari</span>
                        <span class="font-bold text-primary">{{ array_sum(array_column($trafficData, 'count')) }} Hits</span>
                    </div>
                </div>

                <!-- Quick Data Analytics Download Box -->
                <div class="bg-primary text-on-primary p-lg rounded-xl shadow-lg relative overflow-hidden">
                    <div class="relative z-10">
                        <h4 class="font-headline-md text-headline-md mb-xs font-bold">Bank Sampah Digital 3R</h4>
                        <p class="font-body-md text-body-md text-white/80 mb-md">Kelola pendaftaran nasabah baru dan pencatatan transaksi setoran sampah warga.</p>
                        <a href="/admin/bank-digital" class="inline-flex items-center gap-sm bg-white text-primary px-lg py-sm rounded-full font-bold text-label-sm shadow-sm hover:shadow-md active:scale-95 transition-all">
                            <span class="material-symbols-outlined">equalizer</span>
                            Buka Panel Bank Digital
                        </a>
                    </div>
                    <div class="absolute top-0 right-0 -mr-8 -mt-8 w-32 h-32 bg-white/10 rounded-full"></div>
                    <div class="absolute bottom-0 right-0 -mr-4 -mb-4 w-20 h-20 bg-white/5 rounded-full"></div>
                </div>

            </div>
        </div>
    </main>
</div>

<!-- Floating Action Button (FAB) -->
<a href="/admin/artikel" class="fixed bottom-6 right-6 w-14 h-14 bg-primary text-on-primary rounded-2xl shadow-xl flex items-center justify-center cursor-pointer hover:scale-105 active:scale-90 transition-all z-40 group">
    <span class="material-symbols-outlined text-[30px]">add</span>
    <span class="absolute right-full mr-md py-sm px-md bg-inverse-surface text-white rounded-lg text-xs whitespace-nowrap opacity-0 group-hover:opacity-100 transition-opacity duration-300 pointer-events-none shadow-lg">Tambah Artikel Baru</span>
</a>

<script>
    function toggleSidebar() {
        const sidebar = document.getElementById('sidebar');
        const overlay = document.getElementById('drawer-overlay');
        const isHidden = sidebar.classList.contains('-translate-x-full');

        if (isHidden) {
            sidebar.classList.remove('-translate-x-full');
            overlay.classList.remove('opacity-0', 'pointer-events-none');
        } else {
            sidebar.classList.add('-translate-x-full');
            overlay.classList.add('opacity-0', 'pointer-events-none');
        }
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
