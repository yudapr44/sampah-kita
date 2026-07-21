<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Edukasi Pengelolaan Sampah - SampahKita</title>
<meta name="description" content="Pelajari cara mengelola sampah dengan benar: prinsip 3R, pemilahan sampah, daur ulang, dan tips lingkungan untuk warga Karawang."/>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;600;700;800&family=Be+Vietnam+Pro:wght@400;500;600&display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=block" rel="stylesheet"/>
<script>
    try {
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "tertiary-fixed":           "#cee9d3",
                        "on-tertiary":              "#ffffff",
                        "on-background":            "#191c1d",
                        "primary-container":        "#1b4332",
                        "on-error-container":       "#93000a",
                        "outline-variant":          "#c1c8c2",
                        "tertiary-container":       "#2a4131",
                        "surface-variant":          "#e1e3e4",
                        "on-primary":               "#ffffff",
                        "on-secondary-fixed":       "#301400",
                        "primary-fixed":            "#c1ecd4",
                        "inverse-on-surface":       "#f0f1f2",
                        "surface-container-highest":"#e1e3e4",
                        "on-primary-fixed-variant": "#274e3d",
                        "secondary":                "#934b00",
                        "outline":                  "#717973",
                        "on-primary-fixed":         "#002114",
                        "surface-container":        "#edeeef",
                        "on-surface":               "#191c1d",
                        "primary":                  "#012d1d",
                        "on-tertiary-container":    "#93ad98",
                        "on-secondary":             "#ffffff",
                        "surface-container-low":    "#f3f4f5",
                        "inverse-primary":          "#a5d0b9",
                        "secondary-fixed-dim":      "#ffb781",
                        "surface-tint":             "#3f6653",
                        "surface-container-high":   "#e7e8e9",
                        "on-tertiary-fixed":        "#092012",
                        "surface-bright":           "#f8f9fa",
                        "on-tertiary-fixed-variant":"#354c3b",
                        "on-secondary-container":   "#5f2f00",
                        "error":                    "#ba1a1a",
                        "secondary-fixed":          "#ffdcc4",
                        "secondary-container":      "#fd8603",
                        "error-container":          "#ffdad6",
                        "tertiary":                 "#152b1c",
                        "surface":                  "#f8f9fa",
                        "on-error":                 "#ffffff",
                        "inverse-surface":          "#2e3132",
                        "surface-container-lowest": "#ffffff",
                        "on-surface-variant":       "#414844",
                        "on-secondary-fixed-variant":"#703800",
                        "background":               "#f8f9fa",
                    },
                    borderRadius: { DEFAULT:"0.25rem", lg:"0.5rem", xl:"0.75rem", full:"9999px" },
                    spacing: {
                        gutter:"16px", "card-padding":"16px", base:"8px",
                        "section-gap":"32px", "container-margin":"20px"
                    },
                    fontFamily: {
                        "headline-md":       ["Plus Jakarta Sans"],
                        "headline-lg":       ["Plus Jakarta Sans"],
                        "headline-lg-mobile":["Plus Jakarta Sans"],
                        "body-lg":           ["Be Vietnam Pro"],
                        "label-md":          ["Plus Jakarta Sans"],
                        "body-md":           ["Be Vietnam Pro"],
                    },
                    fontSize: {
                        "headline-md":       ["20px", {lineHeight:"28px", fontWeight:"600"}],
                        "headline-lg":       ["30px", {lineHeight:"38px", letterSpacing:"-0.02em", fontWeight:"700"}],
                        "headline-lg-mobile":["24px", {lineHeight:"32px", letterSpacing:"-0.01em", fontWeight:"700"}],
                        "body-lg":           ["18px", {lineHeight:"28px", fontWeight:"400"}],
                        "label-md":          ["14px", {lineHeight:"20px", fontWeight:"600"}],
                        "body-md":           ["16px", {lineHeight:"24px", fontWeight:"400"}],
                    }
                }
            }
        }
    } catch(_e) {}
</script>
<style>
    body { font-family: 'Be Vietnam Pro', sans-serif; }
    h1,h2,h3,h4 { font-family: 'Plus Jakarta Sans', sans-serif; }
    .fill-icon { font-variation-settings: 'FILL' 1; }

    /* Hide horizontal scrollbar */
    .hide-scrollbar::-webkit-scrollbar { display: none; }
    .hide-scrollbar { -ms-overflow-style: none; scrollbar-width: none; }

    /* Accordion */
    .accordion-content { max-height: 0; overflow: hidden; transition: max-height 0.35s ease; }
    .accordion-open .accordion-content { max-height: 2000px; }
    .accordion-open .chevron-icon { transform: rotate(180deg); }
    .chevron-icon { transition: transform 0.3s ease; }

    /* Card hover */
    .r-card { transition: transform .2s ease, border-color .2s ease, box-shadow .2s ease; }
    .r-card:hover { transform: translateY(-2px); box-shadow: 0 6px 20px rgba(1,45,29,.1); }

    /* Scroll reveal */
    .reveal { opacity: 0; transform: translateY(18px); transition: opacity .5s ease, transform .5s ease; }
    .reveal.visible { opacity:1; transform: translateY(0); }
</style>
</head>
<body class="bg-[#f8f9fa] text-[#191c1d] min-h-screen flex flex-col">

    <!-- Backdrop Overlay -->
    <div id="drawer-backdrop" onclick="toggleSidebar()"
         class="fixed inset-0 bg-black/50 z-50 opacity-0 pointer-events-none transition-opacity duration-300"></div>

    <!-- Drawer Navigation Sidebar -->
    <aside id="drawer-menu"
           class="fixed top-0 left-0 h-full w-[280px] z-50 bg-[#f8f9fa] border-r border-[#c1c8c2]/50
                  shadow-2xl flex flex-col p-6 gap-4 -translate-x-full transition-transform duration-300 ease-in-out">
        <!-- Drawer Header -->
        <div class="flex items-center justify-between pb-4 border-b border-[#c1c8c2]/30">
            <div class="flex items-center gap-2.5">
                <span class="material-symbols-outlined text-[#012d1d] fill-icon text-[28px]">recycling</span>
                <span class="font-extrabold text-[18px] text-[#012d1d] tracking-tight">SampahKita</span>
            </div>
            <button onclick="toggleSidebar()" class="p-1.5 rounded-full hover:bg-[#edeeef] transition-colors flex items-center justify-center">
                <span class="material-symbols-outlined text-[22px] text-[#414844]">close</span>
            </button>
        </div>

        <!-- Navigation Links -->
        <nav class="flex flex-col gap-2 mt-2">
            <!-- Home -->
            <a href="/" class="flex items-center gap-3.5 px-4 py-3 rounded-xl text-[#414844] hover:text-[#012d1d] hover:bg-[#edeeef] font-semibold text-[14px] transition-all">
                <span class="material-symbols-outlined text-[22px]">home</span>
                Home
            </a>
            <!-- Edukasi (active) -->
            <a href="/edukasi" class="flex items-center gap-3.5 px-4 py-3 rounded-xl text-white bg-[#fd8603] font-semibold text-[14px] transition-all shadow-sm">
                <span class="material-symbols-outlined text-[22px] fill-icon">school</span>
                Edukasi 3R
            </a>
            <!-- Pengelolaan -->
            <a href="/bank" class="flex items-center gap-3.5 px-4 py-3 rounded-xl text-[#414844] hover:text-[#012d1d] hover:bg-[#edeeef] font-semibold text-[14px] transition-all">
                <span class="material-symbols-outlined text-[22px]">delete_sweep</span>
                Pengelolaan Sampah
            </a>
            <!-- Galeri -->
            <a href="/galeri" class="flex items-center gap-3.5 px-4 py-3 rounded-xl text-[#414844] hover:text-[#012d1d] hover:bg-[#edeeef] font-semibold text-[14px] transition-all">
                <span class="material-symbols-outlined text-[22px]">photo_library</span>
                Galeri Kegiatan
            </a>
        </nav>
        <div class="mt-auto border-t border-[#c1c8c2]/30 pt-4 text-xs text-[#717973]">
            <p class="font-semibold text-[#012d1d]">Desa Balonggandu</p>
            <p>Karawang, Jawa Barat</p>
        </div>
    </aside>

    <!-- TOP APP BAR -->
    <header id="topbar" class="sticky top-0 w-full z-40 bg-[#f8f9fa]/95 backdrop-blur-md border-b border-[#c1c8c2]/40 shadow-sm transition-all duration-300">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 h-16 flex items-center justify-between">
            <div class="flex items-center gap-3">
                <button onclick="toggleSidebar()" aria-label="Open Menu" class="p-2 rounded-xl hover:bg-[#edeeef] transition-colors flex items-center justify-center text-[#012d1d]">
                    <span class="material-symbols-outlined text-[26px]">menu</span>
                </button>
                <a href="/" class="flex items-center gap-2">
                    <span class="material-symbols-outlined text-[#012d1d] fill-icon text-[26px]">recycling</span>
                    <h1 class="text-[19px] font-bold text-[#012d1d] leading-none">SampahKita</h1>
                </a>
            </div>

            <!-- Desktop Nav -->
            <nav class="hidden md:flex items-center gap-6">
                <a href="/" class="text-[14px] font-semibold text-[#414844] hover:text-[#012d1d] transition-colors">Home</a>
                <a href="/edukasi" class="text-[14px] font-bold text-[#012d1d] border-b-2 border-[#fd8603] pb-0.5">Edukasi</a>
                <a href="/bank" class="text-[14px] font-semibold text-[#414844] hover:text-[#012d1d] transition-colors">Pengelolaan</a>
                <a href="/galeri" class="text-[14px] font-semibold text-[#414844] hover:text-[#012d1d] transition-colors">Galeri</a>
                <a href="/admin/login" class="text-[13px] font-bold text-[#012d1d] bg-[#c1ecd4] hover:bg-[#a5d0b9] px-4 py-2 rounded-full transition-all">Admin Panel</a>
            </nav>
        </div>
    </header>

    <!-- Search bar -->
    <div id="search-bar" class="fixed top-14 left-0 w-full max-w-[480px] z-40 bg-[#f8f9fa] border-b border-[#c1c8c2]/40 shadow-sm px-4 py-2 hidden transition-all">
        <div class="flex items-center gap-2 bg-[#edeeef] rounded-full px-4 py-2">
            <span class="material-symbols-outlined text-[#414844] text-[20px]">search</span>
            <input id="search-input" type="text" placeholder="Cari topik edukasi..." class="flex-1 bg-transparent outline-none text-[14px] text-[#191c1d] placeholder-[#717973]"/>
            <button onclick="closeSearch()" class="material-symbols-outlined text-[#414844] text-[20px]">close</button>
        </div>
    </div>

    <!-- Content Area -->
    <main class="flex-1 w-full pb-16">

        <!-- HERO -->
        <section class="relative w-full h-[240px] sm:h-[320px] md:h-[380px] flex items-end overflow-hidden mb-8 md:mb-12">
            <img src="/images/hero_edukasi.png" alt="Edukasi pengelolaan sampah" class="absolute inset-0 w-full h-full object-cover object-center"/>
            <div class="absolute inset-0 bg-gradient-to-r from-[#012d1d]/90 via-[#012d1d]/60 to-transparent"></div>
            <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 w-full pb-8 md:pb-12 text-white">
                <div class="max-w-xl">
                    <span class="inline-block px-3 py-1 bg-[#c1ecd4]/20 border border-[#c1ecd4]/40 text-[#c1ecd4] text-xs font-semibold rounded-full mb-2 backdrop-blur-sm">
                        Modul Edukasi Warga
                    </span>
                    <h2 class="text-2xl sm:text-3xl md:text-4xl font-extrabold leading-tight mb-2">Edukasi Pengelolaan Sampah</h2>
                    <p class="text-xs sm:text-sm md:text-base text-[#c1ecd4]/90 leading-relaxed">Pahami cara memilah, mengurangi, dan mengolah sampah untuk lingkungan Desa Balonggandu yang lebih sehat.</p>
                </div>
            </div>
        </section>

        <!-- PRINSIP 3R -->
        <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 w-full mb-10 md:mb-14 reveal">
            <h3 class="text-xl sm:text-2xl font-bold text-[#012d1d] mb-6">Prinsip Dasar Pengelolaan Sampah (3R)</h3>

            <div class="grid grid-cols-1 sm:grid-cols-3 gap-4 sm:gap-6">
                <!-- Reduce -->
                <div class="r-card bg-white rounded-2xl p-6 shadow-sm border border-[#c1c8c2]/50 flex flex-col justify-between h-full">
                    <div>
                        <div class="w-12 h-12 rounded-2xl bg-[#c1ecd4] flex items-center justify-center mb-4">
                            <span class="material-symbols-outlined text-[#012d1d] fill-icon text-[24px]">shopping_bag</span>
                        </div>
                        <h4 class="text-lg font-bold text-[#012d1d] mb-2">1. Reduce (Kurangi)</h4>
                        <p class="text-xs sm:text-sm text-[#414844] leading-relaxed mb-4">Kurangi penggunaan barang sekali pakai seperti kantong plastik saat belanja dan gunakan wadah ramah lingkungan.</p>
                    </div>
                    <button onclick="openArticle('reduce')" class="flex items-center gap-1.5 text-[#934b00] text-xs sm:text-sm font-bold mt-auto hover:opacity-80 transition-opacity">
                        Pelajari Artikel <span class="material-symbols-outlined text-[16px]">arrow_forward</span>
                    </button>
                </div>

                <!-- Reuse -->
                <div class="r-card bg-white rounded-2xl p-6 shadow-sm border border-[#c1c8c2]/50 flex flex-col justify-between h-full">
                    <div>
                        <div class="w-12 h-12 rounded-2xl bg-[#ffdcc4] flex items-center justify-center mb-4">
                            <span class="material-symbols-outlined text-[#934b00] fill-icon text-[24px]">water_bottle</span>
                        </div>
                        <h4 class="text-lg font-bold text-[#934b00]">2. Reuse (Gunakan Kembali)</h4>
                        <p class="text-xs sm:text-sm text-[#414844] leading-relaxed mb-4">Gunakan kembali botol, wadah, atau barang bekas yang masih layak untuk fungsi lain sebelum dibuang.</p>
                    </div>
                    <button onclick="openArticle('reuse')" class="flex items-center gap-1.5 text-[#934b00] text-xs sm:text-sm font-bold mt-auto hover:opacity-80 transition-opacity">
                        Pelajari Artikel <span class="material-symbols-outlined text-[16px]">arrow_forward</span>
                    </button>
                </div>

                <!-- Recycle -->
                <div class="r-card bg-white rounded-2xl p-6 shadow-sm border border-[#c1c8c2]/50 flex flex-col justify-between h-full">
                    <div>
                        <div class="w-12 h-12 rounded-2xl bg-[#cee9d3] flex items-center justify-center mb-4">
                            <span class="material-symbols-outlined text-[#152b1c] fill-icon text-[24px]">recycling</span>
                        </div>
                        <h4 class="text-lg font-bold text-[#152b1c]">3. Recycle (Daur Ulang)</h4>
                        <p class="text-xs sm:text-sm text-[#414844] leading-relaxed mb-4">Olah sampah organik menjadi pupuk kompos dan anorganik menjadi kerajinan atau produk bernilai ekonomi.</p>
                    </div>
                    <button onclick="openArticle('recycle')" class="flex items-center gap-1.5 text-[#934b00] text-xs sm:text-sm font-bold mt-auto hover:opacity-80 transition-opacity">
                        Pelajari Artikel <span class="material-symbols-outlined text-[16px]">arrow_forward</span>
                    </button>
                </div>
            </div>
        </section>

        <!-- PANDUAN PRAKTIS PENGELOLAAN -->
        <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 w-full reveal">
            <h3 class="text-xl sm:text-2xl font-bold text-[#012d1d] mb-6">Panduan Praktis Pengelolaan Sampah</h3>

            @forelse ($articles as $index => $article)
                <!-- Accordion Item Dynamic -->
                <div class="accordion-item bg-[#f3f4f5] rounded-xl overflow-hidden mb-3 @if($index === 0) accordion-open @endif">
                    <button onclick="toggleAccordion(this)" class="w-full flex items-center justify-between p-4 text-left hover:bg-[#e7e8e9] transition-colors focus:outline-none">
                        <div class="flex items-center gap-3">
                            <div class="w-10 h-10 @if($index % 2 === 0) bg-[#1b4332] @else bg-[#fd8603] @endif rounded-xl flex items-center justify-center flex-shrink-0">
                                <span class="material-symbols-outlined @if($index % 2 === 0) text-[#c1ecd4] @else text-white @endif fill-icon text-[20px]">
                                    @if($index % 2 === 0) science @else forest @endif
                                </span>
                            </div>
                            <div class="flex flex-col sm:flex-row sm:items-center gap-1 sm:gap-3">
                                <span class="text-[15px] font-bold text-[#191c1d]">{{ $article->title }}</span>
                                <span class="px-2.5 py-0.5 text-[11px] font-bold rounded-full w-fit @if($article->category === 'Pengelolaan') bg-[#fd8603]/15 text-[#934b00] @else bg-[#1b4332]/15 text-[#1b4332] @endif">
                                    {{ $article->category }}
                                </span>
                            </div>
                        </div>
                        <span class="material-symbols-outlined chevron-icon text-[#414844] flex-shrink-0">expand_more</span>
                    </button>
                    <div class="accordion-content">
                        <div class="px-4 pb-5 text-[13px] text-[#414844] leading-relaxed whitespace-pre-line bg-white p-4 rounded-lg m-4 border-l-4 @if($index % 2 === 0) border-[#934b00] @else border-[#012d1d] @endif">
                            {{ $article->content }}
                        </div>
                    </div>
                </div>
            @empty
                <p class="text-[13px] text-center text-[#717973] py-6">Belum ada materi edukasi tersedia.</p>
            @endforelse
        </section>

    </main>

    <!-- FOOTER -->
    <footer class="bg-[#e1e3e4] py-10 text-center flex flex-col items-center gap-3 mt-auto">
        <div class="max-w-7xl mx-auto px-4 w-full flex flex-col items-center">
            <div class="flex items-center gap-2 mb-1">
                <span class="material-symbols-outlined text-[#012d1d] fill-icon text-[26px]">recycling</span>
                <span class="text-xl font-bold text-[#012d1d]">SampahKita</span>
            </div>
            <p class="text-xs sm:text-sm text-[#414844] max-w-md leading-relaxed">Berdaya mengelola sampah, berkontribusi untuk bumi dari desa Balonggandu, Karawang.</p>
            <div class="flex gap-6 mt-4">
                <a href="/kontak" class="text-xs sm:text-sm font-medium text-[#414844] hover:text-[#934b00] transition-colors">Kontak</a>
                <a href="/privasi" class="text-xs sm:text-sm font-medium text-[#414844] hover:text-[#934b00] transition-colors">Privasi</a>
                <a href="/syarat" class="text-xs sm:text-sm font-medium text-[#414844] hover:text-[#934b00] transition-colors">Syarat</a>
            </div>
            <p class="mt-6 text-xs text-[#414844]/60">© {{ date('Y') }} SampahKita Community. Bersama menjaga bumi.</p>
        </div>
    </footer>

    <!-- ══════════ MODAL ARTIKEL 3R ══════════ -->

    <!-- Modal Backdrop -->
    <div id="article-backdrop" onclick="closeArticle()"
         class="fixed inset-0 bg-black/50 z-50 opacity-0 pointer-events-none transition-opacity duration-300"></div>

    <!-- ═══ ARTIKEL REDUCE ═══ -->
    <div id="modal-reduce"
         class="fixed bottom-0 left-1/2 -translate-x-1/2 w-full max-w-[540px] md:max-w-2xl z-[60] bg-white rounded-t-3xl shadow-2xl translate-y-full transition-transform duration-500 ease-out max-h-[90vh] overflow-y-auto">
        <!-- Handle Bar -->
        <div class="sticky top-0 bg-white/95 backdrop-blur-sm z-10 rounded-t-3xl">
            <div class="flex justify-center pt-3 pb-1">
                <div class="w-10 h-1 bg-[#c1c8c2] rounded-full"></div>
            </div>
            <!-- Header -->
            <div class="flex items-center justify-between px-5 pb-4 pt-2 border-b border-[#edeeef]">
                <div class="flex items-center gap-3">
                    <div class="w-11 h-11 rounded-2xl bg-[#c1ecd4] flex items-center justify-center">
                        <span class="material-symbols-outlined text-[#012d1d] fill-icon text-[22px]">shopping_bag</span>
                    </div>
                    <div>
                        <h2 class="text-[18px] font-extrabold text-[#012d1d] leading-tight">Reduce</h2>
                        <p class="text-[12px] text-[#717973]">Kurangi Penggunaan</p>
                    </div>
                </div>
                <button onclick="closeArticle()" class="w-9 h-9 rounded-full bg-[#f3f4f5] flex items-center justify-center hover:bg-[#e7e8e9] transition-colors">
                    <span class="material-symbols-outlined text-[#414844] text-[20px]">close</span>
                </button>
            </div>
        </div>
        <!-- Artikel Body -->
        <div class="px-5 pt-5 pb-10 space-y-5">
            <!-- Intro -->
            <div class="bg-[#c1ecd4]/30 rounded-2xl p-4 border-l-4 border-[#012d1d]">
                <p class="text-[14px] text-[#191c1d] leading-relaxed">
                    <strong>Reduce</strong> adalah langkah <em>pertama dan paling penting</em> dalam prinsip 3R. Artinya, kita harus mengurangi jumlah sampah yang kita hasilkan sejak awal—sebelum sampah itu terbentuk.
                </p>
            </div>

            <!-- Mengapa Penting -->
            <div>
                <h3 class="text-[15px] font-bold text-[#012d1d] mb-2 flex items-center gap-2">
                    <span class="material-symbols-outlined text-[18px] text-[#012d1d] fill-icon">info</span>
                    Mengapa Reduce Itu Penting?
                </h3>
                <p class="text-[13px] text-[#414844] leading-relaxed">
                    Setiap tahun Indonesia menghasilkan lebih dari <strong>65 juta ton sampah</strong>. Sebagian besar berasal dari kemasan sekali pakai dan produk berlebih. Dengan mengurangi penggunaan di sumber, kita memotong rantai sampah dari akarnya — lebih efektif daripada mendaur ulang setelahnya.
                </p>
            </div>

            <!-- Tips Praktis -->
            <div>
                <h3 class="text-[15px] font-bold text-[#012d1d] mb-3 flex items-center gap-2">
                    <span class="material-symbols-outlined text-[18px] text-[#934b00] fill-icon">tips_and_updates</span>
                    Tips Praktis Reduce dalam Kehidupan Sehari-hari
                </h3>
                <div class="space-y-2.5">
                    <div class="flex items-start gap-3 bg-[#f3f4f5] rounded-xl p-3">
                        <span class="material-symbols-outlined text-[#012d1d] fill-icon text-[18px] mt-0.5 flex-shrink-0">shopping_bag</span>
                        <div>
                            <p class="text-[13px] font-semibold text-[#191c1d]">Bawa Tas Belanja Sendiri</p>
                            <p class="text-[12px] text-[#717973] mt-0.5">Gunakan tas kain yang bisa dipakai berulang kali daripada kantong plastik sekali pakai.</p>
                        </div>
                    </div>
                    <div class="flex items-start gap-3 bg-[#f3f4f5] rounded-xl p-3">
                        <span class="material-symbols-outlined text-[#012d1d] fill-icon text-[18px] mt-0.5 flex-shrink-0">water_drop</span>
                        <div>
                            <p class="text-[13px] font-semibold text-[#191c1d]">Hindari Kemasan Berlebih</p>
                            <p class="text-[12px] text-[#717973] mt-0.5">Pilih produk dengan kemasan minimal atau kemasan yang dapat diisi ulang (refill).</p>
                        </div>
                    </div>
                    <div class="flex items-start gap-3 bg-[#f3f4f5] rounded-xl p-3">
                        <span class="material-symbols-outlined text-[#012d1d] fill-icon text-[18px] mt-0.5 flex-shrink-0">restaurant</span>
                        <div>
                            <p class="text-[13px] font-semibold text-[#191c1d]">Kurangi Sisa Makanan</p>
                            <p class="text-[12px] text-[#717973] mt-0.5">Rencanakan belanja dan masak sesuai kebutuhan agar makanan tidak terbuang sia-sia.</p>
                        </div>
                    </div>
                    <div class="flex items-start gap-3 bg-[#f3f4f5] rounded-xl p-3">
                        <span class="material-symbols-outlined text-[#012d1d] fill-icon text-[18px] mt-0.5 flex-shrink-0">print_disabled</span>
                        <div>
                            <p class="text-[13px] font-semibold text-[#191c1d]">Kurangi Penggunaan Kertas</p>
                            <p class="text-[12px] text-[#717973] mt-0.5">Gunakan nota digital, email, dan dokumen elektronik alih-alih mencetak setiap dokumen.</p>
                        </div>
                    </div>
                    <div class="flex items-start gap-3 bg-[#f3f4f5] rounded-xl p-3">
                        <span class="material-symbols-outlined text-[#012d1d] fill-icon text-[18px] mt-0.5 flex-shrink-0">local_cafe</span>
                        <div>
                            <p class="text-[13px] font-semibold text-[#191c1d]">Bawa Tumbler & Wadah Sendiri</p>
                            <p class="text-[12px] text-[#717973] mt-0.5">Bawa botol minum dan kotak makan sendiri agar tidak memerlukan kemasan plastik/styrofoam.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Dampak Positif -->
            <div class="bg-gradient-to-br from-[#012d1d] to-[#1b4332] rounded-2xl p-4 text-white">
                <h3 class="text-[14px] font-bold mb-3 flex items-center gap-2">
                    <span class="material-symbols-outlined text-[18px] fill-icon">eco</span>
                    Dampak Positif Jika Kita Ber-Reduce
                </h3>
                <div class="grid grid-cols-2 gap-2">
                    <div class="bg-white/10 rounded-xl p-3 text-center">
                        <p class="text-[22px] font-extrabold text-[#a5d0b9]">30%</p>
                        <p class="text-[11px] text-[#c1ecd4] leading-tight mt-0.5">Pengurangan volume sampah rumah tangga</p>
                    </div>
                    <div class="bg-white/10 rounded-xl p-3 text-center">
                        <p class="text-[22px] font-extrabold text-[#a5d0b9]">↓CO₂</p>
                        <p class="text-[11px] text-[#c1ecd4] leading-tight mt-0.5">Emisi gas rumah kaca lebih rendah</p>
                    </div>
                    <div class="bg-white/10 rounded-xl p-3 text-center">
                        <p class="text-[22px] font-extrabold text-[#a5d0b9]">💰</p>
                        <p class="text-[11px] text-[#c1ecd4] leading-tight mt-0.5">Menghemat pengeluaran keluarga</p>
                    </div>
                    <div class="bg-white/10 rounded-xl p-3 text-center">
                        <p class="text-[22px] font-extrabold text-[#a5d0b9]">🌊</p>
                        <p class="text-[11px] text-[#c1ecd4] leading-tight mt-0.5">Kurangi polusi sungai & laut</p>
                    </div>
                </div>
            </div>

            <!-- CTA -->
            <button onclick="closeArticle()" class="w-full py-4 bg-[#012d1d] text-white font-bold text-[15px] rounded-2xl hover:bg-[#1b4332] transition-colors">
                Mulai Ber-Reduce Sekarang! 🌱
            </button>
        </div>
    </div>

    <!-- ═══ ARTIKEL REUSE ═══ -->
    <div id="modal-reuse"
         class="fixed bottom-0 left-1/2 -translate-x-1/2 w-full max-w-[540px] md:max-w-2xl z-[60] bg-white rounded-t-3xl shadow-2xl translate-y-full transition-transform duration-500 ease-out max-h-[90vh] overflow-y-auto">
        <div class="sticky top-0 bg-white/95 backdrop-blur-sm z-10 rounded-t-3xl">
            <div class="flex justify-center pt-3 pb-1">
                <div class="w-10 h-1 bg-[#c1c8c2] rounded-full"></div>
            </div>
            <div class="flex items-center justify-between px-5 pb-4 pt-2 border-b border-[#edeeef]">
                <div class="flex items-center gap-3">
                    <div class="w-11 h-11 rounded-2xl bg-[#ffdcc4] flex items-center justify-center">
                        <span class="material-symbols-outlined text-[#934b00] fill-icon text-[22px]">water_bottle</span>
                    </div>
                    <div>
                        <h2 class="text-[18px] font-extrabold text-[#934b00] leading-tight">Reuse</h2>
                        <p class="text-[12px] text-[#717973]">Gunakan Kembali</p>
                    </div>
                </div>
                <button onclick="closeArticle()" class="w-9 h-9 rounded-full bg-[#f3f4f5] flex items-center justify-center hover:bg-[#e7e8e9] transition-colors">
                    <span class="material-symbols-outlined text-[#414844] text-[20px]">close</span>
                </button>
            </div>
        </div>
        <div class="px-5 pt-5 pb-10 space-y-5">
            <div class="bg-[#ffdcc4]/40 rounded-2xl p-4 border-l-4 border-[#934b00]">
                <p class="text-[14px] text-[#191c1d] leading-relaxed">
                    <strong>Reuse</strong> berarti menggunakan kembali barang-barang yang masih layak pakai, daripada langsung membuangnya. Ini adalah cara cerdas untuk memperpanjang umur produk dan menekan laju produksi sampah.
                </p>
            </div>

            <div>
                <h3 class="text-[15px] font-bold text-[#934b00] mb-2 flex items-center gap-2">
                    <span class="material-symbols-outlined text-[18px] fill-icon">info</span>
                    Konsep Reuse
                </h3>
                <p class="text-[13px] text-[#414844] leading-relaxed">
                    Produk yang kita beli seringkali bisa dimanfaatkan lebih dari satu kali sebelum benar-benar tidak bisa digunakan lagi. Dengan <em>Reuse</em>, kita menghemat sumber daya alam yang dibutuhkan untuk membuat produk baru, sekaligus mengurangi energi dalam proses produksi.
                </p>
            </div>

            <div>
                <h3 class="text-[15px] font-bold text-[#934b00] mb-3 flex items-center gap-2">
                    <span class="material-symbols-outlined text-[18px] fill-icon">tips_and_updates</span>
                    Ide Kreatif Reuse di Rumah
                </h3>
                <div class="space-y-2.5">
                    <div class="flex items-start gap-3 bg-[#fff8f3] rounded-xl p-3 border border-[#ffdcc4]">
                        <span class="material-symbols-outlined text-[#934b00] fill-icon text-[18px] mt-0.5 flex-shrink-0">water_bottle</span>
                        <div>
                            <p class="text-[13px] font-semibold text-[#191c1d]">Botol Plastik jadi Pot Tanaman</p>
                            <p class="text-[12px] text-[#717973] mt-0.5">Potong bagian atas botol bekas, isi tanah, dan tanam sayuran atau tanaman hias kecil.</p>
                        </div>
                    </div>
                    <div class="flex items-start gap-3 bg-[#fff8f3] rounded-xl p-3 border border-[#ffdcc4]">
                        <span class="material-symbols-outlined text-[#934b00] fill-icon text-[18px] mt-0.5 flex-shrink-0">inventory_2</span>
                        <div>
                            <p class="text-[13px] font-semibold text-[#191c1d]">Toples Kaca jadi Wadah Penyimpanan</p>
                            <p class="text-[12px] text-[#717973] mt-0.5">Toples selai atau sambal bekas bisa dipakai untuk menyimpan bumbu, biji-bijian, atau alat tulis.</p>
                        </div>
                    </div>
                    <div class="flex items-start gap-3 bg-[#fff8f3] rounded-xl p-3 border border-[#ffdcc4]">
                        <span class="material-symbols-outlined text-[#934b00] fill-icon text-[18px] mt-0.5 flex-shrink-0">checkroom</span>
                        <div>
                            <p class="text-[13px] font-semibold text-[#191c1d]">Donasikan Pakaian Bekas</p>
                            <p class="text-[12px] text-[#717973] mt-0.5">Baju yang tidak lagi dipakai bisa didonasikan, dijual di thrift store, atau dijadikan lap/kain pel.</p>
                        </div>
                    </div>
                    <div class="flex items-start gap-3 bg-[#fff8f3] rounded-xl p-3 border border-[#ffdcc4]">
                        <span class="material-symbols-outlined text-[#934b00] fill-icon text-[18px] mt-0.5 flex-shrink-0">shopping_bag</span>
                        <div>
                            <p class="text-[13px] font-semibold text-[#191c1d]">Kantong Plastik Dipakai Ulang</p>
                            <p class="text-[12px] text-[#717973] mt-0.5">Simpan kantong plastik yang masih bersih dan gunakan kembali untuk berbelanja atau membuang sampah kecil.</p>
                        </div>
                    </div>
                    <div class="flex items-start gap-3 bg-[#fff8f3] rounded-xl p-3 border border-[#ffdcc4]">
                        <span class="material-symbols-outlined text-[#934b00] fill-icon text-[18px] mt-0.5 flex-shrink-0">article</span>
                        <div>
                            <p class="text-[13px] font-semibold text-[#191c1d]">Kertas Bekas Satu Muka</p>
                            <p class="text-[12px] text-[#717973] mt-0.5">Kertas yang baru terpakai satu sisinya bisa digunakan untuk catatan, gambar, atau bungkus barang.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Kategori Reuse -->
            <div>
                <h3 class="text-[15px] font-bold text-[#934b00] mb-3">Kategori Barang yang Bisa di-Reuse</h3>
                <div class="grid grid-cols-3 gap-2">
                    <div class="bg-[#fff8f3] rounded-xl p-3 text-center border border-[#ffdcc4]">
                        <span class="material-symbols-outlined text-[#934b00] fill-icon text-[24px]">checkroom</span>
                        <p class="text-[11px] font-semibold text-[#191c1d] mt-1">Pakaian</p>
                    </div>
                    <div class="bg-[#fff8f3] rounded-xl p-3 text-center border border-[#ffdcc4]">
                        <span class="material-symbols-outlined text-[#934b00] fill-icon text-[24px]">devices</span>
                        <p class="text-[11px] font-semibold text-[#191c1d] mt-1">Elektronik</p>
                    </div>
                    <div class="bg-[#fff8f3] rounded-xl p-3 text-center border border-[#ffdcc4]">
                        <span class="material-symbols-outlined text-[#934b00] fill-icon text-[24px]">inventory_2</span>
                        <p class="text-[11px] font-semibold text-[#191c1d] mt-1">Wadah</p>
                    </div>
                    <div class="bg-[#fff8f3] rounded-xl p-3 text-center border border-[#ffdcc4]">
                        <span class="material-symbols-outlined text-[#934b00] fill-icon text-[24px]">menu_book</span>
                        <p class="text-[11px] font-semibold text-[#191c1d] mt-1">Buku</p>
                    </div>
                    <div class="bg-[#fff8f3] rounded-xl p-3 text-center border border-[#ffdcc4]">
                        <span class="material-symbols-outlined text-[#934b00] fill-icon text-[24px]">chair</span>
                        <p class="text-[11px] font-semibold text-[#191c1d] mt-1">Furnitur</p>
                    </div>
                    <div class="bg-[#fff8f3] rounded-xl p-3 text-center border border-[#ffdcc4]">
                        <span class="material-symbols-outlined text-[#934b00] fill-icon text-[24px]">water_bottle</span>
                        <p class="text-[11px] font-semibold text-[#191c1d] mt-1">Botol</p>
                    </div>
                </div>
            </div>

            <button onclick="closeArticle()" class="w-full py-4 bg-[#934b00] text-white font-bold text-[15px] rounded-2xl hover:opacity-90 transition-opacity">
                Mulai Ber-Reuse Sekarang! ♻️
            </button>
        </div>
    </div>

    <!-- ═══ ARTIKEL RECYCLE ═══ -->
    <div id="modal-recycle"
         class="fixed bottom-0 left-1/2 -translate-x-1/2 w-full max-w-[540px] md:max-w-2xl z-[60] bg-white rounded-t-3xl shadow-2xl translate-y-full transition-transform duration-500 ease-out max-h-[90vh] overflow-y-auto">
        <div class="sticky top-0 bg-white/95 backdrop-blur-sm z-10 rounded-t-3xl">
            <div class="flex justify-center pt-3 pb-1">
                <div class="w-10 h-1 bg-[#c1c8c2] rounded-full"></div>
            </div>
            <div class="flex items-center justify-between px-5 pb-4 pt-2 border-b border-[#edeeef]">
                <div class="flex items-center gap-3">
                    <div class="w-11 h-11 rounded-2xl bg-[#cee9d3] flex items-center justify-center">
                        <span class="material-symbols-outlined text-[#152b1c] fill-icon text-[22px]">recycling</span>
                    </div>
                    <div>
                        <h2 class="text-[18px] font-extrabold text-[#152b1c] leading-tight">Recycle</h2>
                        <p class="text-[12px] text-[#717973]">Daur Ulang Sampah</p>
                    </div>
                </div>
                <button onclick="closeArticle()" class="w-9 h-9 rounded-full bg-[#f3f4f5] flex items-center justify-center hover:bg-[#e7e8e9] transition-colors">
                    <span class="material-symbols-outlined text-[#414844] text-[20px]">close</span>
                </button>
            </div>
        </div>
        <div class="px-5 pt-5 pb-10 space-y-5">
            <div class="bg-[#cee9d3]/40 rounded-2xl p-4 border-l-4 border-[#152b1c]">
                <p class="text-[14px] text-[#191c1d] leading-relaxed">
                    <strong>Recycle</strong> atau daur ulang adalah proses mengolah sampah menjadi bahan baku atau produk baru yang bermanfaat. Ini adalah solusi paling konkret untuk sampah yang sudah tidak bisa dikurangi atau digunakan ulang.
                </p>
            </div>

            <div>
                <h3 class="text-[15px] font-bold text-[#152b1c] mb-2 flex items-center gap-2">
                    <span class="material-symbols-outlined text-[18px] fill-icon">info</span>
                    Bagaimana Proses Recycle Bekerja?
                </h3>
                <p class="text-[13px] text-[#414844] leading-relaxed">
                    Sampah yang dapat didaur ulang dikumpulkan, dipilah, kemudian dikirim ke fasilitas daur ulang. Di sana, sampah diolah secara fisik atau kimia menjadi bahan baku baru—seperti plastik daur ulang, kertas baru, atau logam yang dilebur kembali.
                </p>
            </div>

            <!-- Jenis Sampah yang Bisa Didaur Ulang -->
            <div>
                <h3 class="text-[15px] font-bold text-[#152b1c] mb-3">Jenis Sampah yang Bisa Didaur Ulang</h3>
                <div class="space-y-2">
                    <div class="flex items-center gap-3 bg-[#f3f4f5] rounded-xl p-3">
                        <div class="w-8 h-8 rounded-lg bg-[#ffdcc4] flex items-center justify-center flex-shrink-0">
                            <span class="material-symbols-outlined text-[#934b00] fill-icon text-[16px]">water_bottle</span>
                        </div>
                        <div class="flex-1">
                            <p class="text-[13px] font-semibold text-[#191c1d]">Plastik</p>
                            <p class="text-[11px] text-[#717973]">Botol PET, kantong, ember, pipa</p>
                        </div>
                        <span class="text-[11px] font-bold text-[#934b00] bg-[#ffdcc4] px-2 py-1 rounded-full">Simbol ♻</span>
                    </div>
                    <div class="flex items-center gap-3 bg-[#f3f4f5] rounded-xl p-3">
                        <div class="w-8 h-8 rounded-lg bg-[#c1ecd4] flex items-center justify-center flex-shrink-0">
                            <span class="material-symbols-outlined text-[#012d1d] fill-icon text-[16px]">article</span>
                        </div>
                        <div class="flex-1">
                            <p class="text-[13px] font-semibold text-[#191c1d]">Kertas & Kardus</p>
                            <p class="text-[11px] text-[#717973]">Koran, majalah, buku, kotak kemasan</p>
                        </div>
                        <span class="text-[11px] font-bold text-[#012d1d] bg-[#c1ecd4] px-2 py-1 rounded-full">Mudah ✓</span>
                    </div>
                    <div class="flex items-center gap-3 bg-[#f3f4f5] rounded-xl p-3">
                        <div class="w-8 h-8 rounded-lg bg-[#e8e8e8] flex items-center justify-center flex-shrink-0">
                            <span class="material-symbols-outlined text-[#414844] fill-icon text-[16px]">hardware</span>
                        </div>
                        <div class="flex-1">
                            <p class="text-[13px] font-semibold text-[#191c1d]">Logam & Kaleng</p>
                            <p class="text-[11px] text-[#717973]">Kaleng minuman, besi, aluminium</p>
                        </div>
                        <span class="text-[11px] font-bold text-[#414844] bg-[#e8e8e8] px-2 py-1 rounded-full">Bernilai 💰</span>
                    </div>
                    <div class="flex items-center gap-3 bg-[#f3f4f5] rounded-xl p-3">
                        <div class="w-8 h-8 rounded-lg bg-[#cee9d3] flex items-center justify-center flex-shrink-0">
                            <span class="material-symbols-outlined text-[#152b1c] fill-icon text-[16px]">wine_bar</span>
                        </div>
                        <div class="flex-1">
                            <p class="text-[13px] font-semibold text-[#191c1d]">Kaca & Botol Beling</p>
                            <p class="text-[11px] text-[#717973]">Botol minuman, stoples, kaca jendela</p>
                        </div>
                        <span class="text-[11px] font-bold text-[#152b1c] bg-[#cee9d3] px-2 py-1 rounded-full">Bisa ✓</span>
                    </div>
                    <div class="flex items-center gap-3 bg-[#f3f4f5] rounded-xl p-3">
                        <div class="w-8 h-8 rounded-lg bg-[#ffdad6] flex items-center justify-center flex-shrink-0">
                            <span class="material-symbols-outlined text-[#93000a] fill-icon text-[16px]">eco</span>
                        </div>
                        <div class="flex-1">
                            <p class="text-[13px] font-semibold text-[#191c1d]">Sampah Organik</p>
                            <p class="text-[11px] text-[#717973]">Sisa makanan → kompos untuk tanah</p>
                        </div>
                        <span class="text-[11px] font-bold text-[#93000a] bg-[#ffdad6] px-2 py-1 rounded-full">Kompos 🌱</span>
                    </div>
                </div>
            </div>

            <!-- Bank Sampah -->
            <div class="bg-gradient-to-br from-[#152b1c] to-[#2a4131] rounded-2xl p-4 text-white">
                <h3 class="text-[14px] font-bold mb-2 flex items-center gap-2">
                    <span class="material-symbols-outlined text-[18px] fill-icon">account_balance</span>
                    Bank Sampah di Karawang
                </h3>
                <p class="text-[13px] text-[#a5d0b9] leading-relaxed mb-3">
                    Warga Balonggandu bisa menyetorkan sampah layak daur ulang ke Bank Sampah setempat. Sampah akan ditimbang dan dikonversi menjadi saldo tabungan atau uang tunai.
                </p>
                <div class="flex items-center gap-2 bg-white/10 rounded-xl p-3">
                    <span class="material-symbols-outlined text-[#a5d0b9] text-[20px] fill-icon">location_on</span>
                    <div>
                        <p class="text-[12px] font-semibold">Bank Sampah Desa Balonggandu</p>
                        <p class="text-[11px] text-[#a5d0b9]">Buka Senin–Sabtu, 08.00–14.00 WIB</p>
                    </div>
                </div>
            </div>

            <!-- Langkah Mudah -->
            <div>
                <h3 class="text-[15px] font-bold text-[#152b1c] mb-3">Cara Mudah Memulai Daur Ulang</h3>
                <div class="space-y-2">
                    <div class="flex items-start gap-3">
                        <div class="w-7 h-7 rounded-full bg-[#012d1d] text-white flex items-center justify-center text-[12px] font-bold flex-shrink-0 mt-0.5">1</div>
                        <p class="text-[13px] text-[#414844] leading-relaxed"><strong>Pisahkan</strong> sampah organik dan anorganik di rumah menggunakan 2 tempat sampah berbeda.</p>
                    </div>
                    <div class="flex items-start gap-3">
                        <div class="w-7 h-7 rounded-full bg-[#012d1d] text-white flex items-center justify-center text-[12px] font-bold flex-shrink-0 mt-0.5">2</div>
                        <p class="text-[13px] text-[#414844] leading-relaxed"><strong>Bersihkan</strong> sampah anorganik (botol, kaleng) sebelum dikumpulkan agar tidak bau dan mudah diproses.</p>
                    </div>
                    <div class="flex items-start gap-3">
                        <div class="w-7 h-7 rounded-full bg-[#012d1d] text-white flex items-center justify-center text-[12px] font-bold flex-shrink-0 mt-0.5">3</div>
                        <p class="text-[13px] text-[#414844] leading-relaxed"><strong>Kumpulkan</strong> sampah daur ulang dalam karung atau wadah, lalu setorkan ke Bank Sampah terdekat.</p>
                    </div>
                    <div class="flex items-start gap-3">
                        <div class="w-7 h-7 rounded-full bg-[#012d1d] text-white flex items-center justify-center text-[12px] font-bold flex-shrink-0 mt-0.5">4</div>
                        <p class="text-[13px] text-[#414844] leading-relaxed"><strong>Dapatkan</strong> poin atau uang tunai dari Bank Sampah sebagai reward kontribusi lingkungan Anda.</p>
                    </div>
                </div>
            </div>

            <button onclick="closeArticle()" class="w-full py-4 bg-[#152b1c] text-white font-bold text-[15px] rounded-2xl hover:bg-[#2a4131] transition-colors">
                Yuk, Mulai Recycle! ♻️
            </button>
        </div>
    </div>

<script>
    // ── Article Modal Logic ──
    let currentModal = null;

    function openArticle(type) {
        closeArticle(false);
        const modal = document.getElementById('modal-' + type);
        const backdrop = document.getElementById('article-backdrop');
        if (!modal) return;
        currentModal = modal;

        // Show backdrop
        backdrop.classList.remove('opacity-0', 'pointer-events-none');
        backdrop.classList.add('opacity-100', 'pointer-events-auto');

        // Slide modal up
        modal.classList.remove('translate-y-full');
        modal.classList.add('translate-y-0');

        // Lock body scroll
        document.body.style.overflow = 'hidden';
    }

    function closeArticle(unlock = true) {
        const backdrop = document.getElementById('article-backdrop');
        if (currentModal) {
            currentModal.classList.remove('translate-y-0');
            currentModal.classList.add('translate-y-full');
            currentModal = null;
        }
        backdrop.classList.remove('opacity-100', 'pointer-events-auto');
        backdrop.classList.add('opacity-0', 'pointer-events-none');
        if (unlock) document.body.style.overflow = '';
    }

    // Close modal on backdrop click is handled via onclick="closeArticle()"
    // ── END Article Modal Logic ──

    // ── Drawer Toggle Logic ──
    function toggleSidebar() {
        const drawer = document.getElementById('drawer-menu');
        const backdrop = document.getElementById('drawer-backdrop');
        const isOpen = drawer.classList.contains('translate-x-0');

        if (isOpen) {
            drawer.classList.remove('translate-x-0');
            drawer.classList.add('-translate-x-full');
            backdrop.classList.remove('opacity-100', 'pointer-events-auto');
            backdrop.classList.add('opacity-0', 'pointer-events-none');
        } else {
            drawer.classList.remove('-translate-x-full');
            drawer.classList.add('translate-x-0');
            backdrop.classList.remove('opacity-0', 'pointer-events-none');
            backdrop.classList.add('opacity-100', 'pointer-events-auto');
        }
    }

    function toggleAccordion(btn) {
        const item = btn.parentElement;
        const isOpen = item.classList.contains('accordion-open');
        document.querySelectorAll('.accordion-item').forEach(el => el.classList.remove('accordion-open'));
        if (!isOpen) item.classList.add('accordion-open');
    }

    document.querySelector('.accordion-item')?.classList.add('accordion-open');

    document.getElementById('btn-search').addEventListener('click', () => {
        const bar = document.getElementById('search-bar');
        bar.classList.toggle('hidden');
        if (!bar.classList.contains('hidden')) document.getElementById('search-input').focus();
    });
    function closeSearch() {
        document.getElementById('search-bar').classList.add('hidden');
        document.getElementById('search-input').value = '';
    }

    const obs = new IntersectionObserver((entries) => {
        entries.forEach(e => { if (e.isIntersecting) e.target.classList.add('visible'); });
    }, { threshold: 0.1, rootMargin:'0px 0px -40px 0px' });
    document.querySelectorAll('.reveal').forEach(el => obs.observe(el));

    window.addEventListener('scroll', () => {
        document.getElementById('topbar').classList.toggle('shadow-md', window.scrollY > 16);
    }, { passive: true });
</script>
</body>
</html>
