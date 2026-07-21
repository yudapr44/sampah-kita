<!DOCTYPE html>
<html class="light" lang="id">
<head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Edukasi Bank Sampah - SampahKita Karawang</title>
<meta name="description" content="Pelajari cara pengelolaan bank sampah yang baik dan benar untuk komunitas desa Karawang yang lebih bersih dan sejahtera."/>
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
                        "primary":                  "#012d1d",
                        "primary-container":        "#1b4332",
                        "primary-fixed":            "#c1ecd4",
                        "primary-fixed-dim":        "#a5d0b9",
                        "on-primary":               "#ffffff",
                        "on-primary-container":     "#86af99",
                        "on-primary-fixed":         "#002114",
                        "on-primary-fixed-variant": "#274e3d",
                        "secondary":                "#934b00",
                        "secondary-container":      "#fd8603",
                        "secondary-fixed":          "#ffdcc4",
                        "secondary-fixed-dim":      "#ffb781",
                        "on-secondary":             "#ffffff",
                        "on-secondary-container":   "#5f2f00",
                        "on-secondary-fixed":       "#301400",
                        "on-secondary-fixed-variant":"#703800",
                        "tertiary":                 "#152b1c",
                        "tertiary-fixed":           "#cee9d3",
                        "tertiary-fixed-dim":       "#b3cdb7",
                        "on-tertiary":              "#ffffff",
                        "on-tertiary-fixed":        "#092012",
                        "on-tertiary-fixed-variant":"#354c3b",
                        "tertiary-container":       "#2a4131",
                        "on-tertiary-container":    "#93ad98",
                        "background":               "#f8f9fa",
                        "surface":                  "#f8f9fa",
                        "surface-bright":           "#f8f9fa",
                        "surface-dim":              "#d9dadb",
                        "surface-variant":          "#e1e3e4",
                        "surface-container":        "#edeeef",
                        "surface-container-low":    "#f3f4f5",
                        "surface-container-high":   "#e7e8e9",
                        "surface-container-highest":"#e1e3e4",
                        "surface-container-lowest": "#ffffff",
                        "surface-tint":             "#3f6653",
                        "on-surface":               "#191c1d",
                        "on-surface-variant":       "#414844",
                        "on-background":            "#191c1d",
                        "outline":                  "#717973",
                        "outline-variant":          "#c1c8c2",
                        "inverse-surface":          "#2e3132",
                        "inverse-on-surface":       "#f0f1f2",
                        "inverse-primary":          "#a5d0b9",
                        "error":                    "#ba1a1a",
                        "error-container":          "#ffdad6",
                        "on-error":                 "#ffffff",
                        "on-error-container":       "#93000a",
                    },
                    borderRadius: { DEFAULT:"0.25rem", lg:"0.5rem", xl:"0.75rem", full:"9999px" },
                    spacing: {
                        "container-margin":"20px", "section-gap":"32px",
                        "card-padding":"16px", gutter:"16px", base:"8px"
                    },
                    fontFamily: {
                        "headline-lg-mobile":["Plus Jakarta Sans"],
                        "headline-lg":       ["Plus Jakarta Sans"],
                        "headline-md":       ["Plus Jakarta Sans"],
                        "label-md":          ["Plus Jakarta Sans"],
                        "body-md":           ["Be Vietnam Pro"],
                        "body-lg":           ["Be Vietnam Pro"],
                    },
                    fontSize: {
                        "headline-lg-mobile":["24px",{lineHeight:"32px",letterSpacing:"-0.01em",fontWeight:"700"}],
                        "headline-lg":       ["30px",{lineHeight:"38px",letterSpacing:"-0.02em",fontWeight:"700"}],
                        "headline-md":       ["20px",{lineHeight:"28px",fontWeight:"600"}],
                        "label-md":          ["14px",{lineHeight:"20px",fontWeight:"600"}],
                        "body-md":           ["16px",{lineHeight:"24px",fontWeight:"400"}],
                        "body-lg":           ["18px",{lineHeight:"28px",fontWeight:"400"}],
                    }
                }
            }
        }
    } catch(_e) {}
</script>
<style>
    body { font-family: 'Be Vietnam Pro', sans-serif; }
    h1,h2,h3,h4,h5 { font-family: 'Plus Jakarta Sans', sans-serif; }
    .fill-icon { font-variation-settings: 'FILL' 1; }

    /* Article card hover */
    .edu-card {
        transition: transform .25s cubic-bezier(.34,1.56,.64,1),
                    box-shadow .25s ease,
                    border-color .2s ease;
    }
    .edu-card:hover { transform: translateY(-3px); box-shadow: 0 8px 24px rgba(1,45,29,.1); }
    .edu-card:hover .card-icon { transform: scale(1.1); }
    .card-icon { transition: transform .25s cubic-bezier(.34,1.56,.64,1); }

    /* Tag pill */
    .tag { transition: background .2s, color .2s; }
    .tag:hover { background: #012d1d; color: #fff; }

    /* Scroll reveal */
    .reveal { opacity:0; transform:translateY(16px); transition:opacity .55s ease, transform .55s ease; }
    .reveal.visible { opacity:1; transform:translateY(0); }

    /* Read more expand */
    .article-body { max-height:0; overflow:hidden; transition: max-height .4s ease; }
    .article-open .article-body { max-height: 600px; }
    .article-open .read-arrow { transform: rotate(90deg); }
    .read-arrow { transition: transform .3s ease; }

    /* Quote highlight */
    blockquote {
        border-left: 4px solid #fd8603;
        background: #fff8f0;
        border-radius: 0 8px 8px 0;
    }
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
            <!-- Edukasi -->
            <a href="/edukasi" class="flex items-center gap-3.5 px-4 py-3 rounded-xl text-[#414844] hover:text-[#012d1d] hover:bg-[#edeeef] font-semibold text-[14px] transition-all">
                <span class="material-symbols-outlined text-[22px]">school</span>
                Edukasi 3R
            </a>
            <!-- Pengelolaan (active) -->
            <a href="/bank" class="flex items-center gap-3.5 px-4 py-3 rounded-xl text-white bg-[#1b4332] font-semibold text-[14px] transition-all shadow-sm">
                <span class="material-symbols-outlined text-[22px] fill-icon">delete_sweep</span>
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
                <a href="/edukasi" class="text-[14px] font-semibold text-[#414844] hover:text-[#012d1d] transition-colors">Edukasi</a>
                <a href="/bank" class="text-[14px] font-bold text-[#012d1d] border-b-2 border-[#1b4332] pb-0.5">Pengelolaan</a>
                <a href="/galeri" class="text-[14px] font-semibold text-[#414844] hover:text-[#012d1d] transition-colors">Galeri</a>
                <a href="/admin/login" class="text-[13px] font-bold text-[#012d1d] bg-[#c1ecd4] hover:bg-[#a5d0b9] px-4 py-2 rounded-full transition-all">Admin Panel</a>
            </nav>
        </div>
    </header>

    <!-- Content Area -->
    <main class="flex-1 w-full pb-16">

        <!-- HERO BANNER -->
        <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-6 pb-2 w-full reveal">
            <div class="bg-[#012d1d] rounded-3xl overflow-hidden relative min-h-[200px] flex items-center p-6 sm:p-10">
                <div class="absolute -top-8 -right-8 w-48 h-48 rounded-full bg-white/5"></div>
                <div class="absolute -bottom-6 right-10 w-32 h-32 rounded-full bg-[#fd8603]/20"></div>
                <div class="absolute top-6 right-6 opacity-10 hidden sm:block">
                    <span class="material-symbols-outlined text-[120px] text-white fill-icon">account_balance</span>
                </div>
                <div class="relative z-10 max-w-xl">
                    <span class="inline-flex items-center gap-1 px-3 py-1 bg-[#fd8603]/20 text-[#ffb781] rounded-full text-xs font-bold mb-3">
                        <span class="material-symbols-outlined text-[14px]">menu_book</span>
                        Edukasi & Pengelolaan
                    </span>
                    <h2 class="text-2xl sm:text-3xl md:text-4xl font-extrabold text-white leading-tight mb-3">
                        Kenali & Kelola Bank Sampah Desa
                    </h2>
                    <p class="text-xs sm:text-sm md:text-base text-[#c1ecd4]/80 leading-relaxed">
                        Panduan lengkap memahami bank sampah sebagai solusi lingkungan dan pemberdayaan ekonomi warga Desa Balonggandu.
                    </p>
                </div>
            </div>

            <!-- Topic chips -->
            <div class="flex gap-2 overflow-x-auto mt-6 pb-1 hide-scrollbar">
                <span class="tag flex-shrink-0 px-4 py-2 bg-[#012d1d] text-white rounded-full text-xs font-bold cursor-pointer">Semua</span>
                <span class="tag flex-shrink-0 px-4 py-2 bg-[#e7e8e9] text-[#414844] rounded-full text-xs font-semibold cursor-pointer border border-[#c1c8c2]">Dasar</span>
                <span class="tag flex-shrink-0 px-4 py-2 bg-[#e7e8e9] text-[#414844] rounded-full text-xs font-semibold cursor-pointer border border-[#c1c8c2]">Pengelolaan</span>
                <span class="tag flex-shrink-0 px-4 py-2 bg-[#e7e8e9] text-[#414844] rounded-full text-xs font-semibold cursor-pointer border border-[#c1c8c2]">Manfaat</span>
                <span class="tag flex-shrink-0 px-4 py-2 bg-[#e7e8e9] text-[#414844] rounded-full text-xs font-semibold cursor-pointer border border-[#c1c8c2]">Regulasi</span>
            </div>
        </section>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 w-full">

        @forelse ($articles as $index => $article)
            <!-- ARTIKEL DYNAMIC -->
            <section class="px-5 mt-5 reveal">
                <div class="edu-card bg-white rounded-2xl border border-[#c1c8c2]/50 shadow-sm overflow-hidden">
                    <div class="h-1.5 @if($index % 2 === 0) bg-[#012d1d] @else bg-[#934b00] @endif"></div>
                    <div class="p-5">
                        <div class="flex items-start gap-4 mb-4">
                            <div class="card-icon w-12 h-12 rounded-xl @if($index % 2 === 0) bg-[#c1ecd4] @else bg-[#ffdcc4] @endif flex items-center justify-center flex-shrink-0">
                                <span class="material-symbols-outlined @if($index % 2 === 0) text-[#012d1d] @else text-[#934b00] @endif fill-icon text-[24px]">
                                    @if($index % 2 === 0) account_balance @else category @endif
                                </span>
                            </div>
                            <div class="flex-1">
                                <span class="text-[11px] font-bold text-[#934b00] uppercase tracking-wide">Artikel {{ $article->category }}</span>
                                <h3 class="text-[16px] font-bold text-[#012d1d] mt-1 leading-snug">{{ $article->title }}</h3>
                            </div>
                        </div>
                        <p class="text-[13px] text-[#414844] leading-relaxed">
                            {{ Str::limit($article->content, 180) }}
                        </p>

                        <div class="article-body">
                            <div class="mt-4 flex flex-col gap-4">
                                <blockquote class="px-4 py-3 text-[13px] text-[#414844] italic leading-relaxed whitespace-pre-line">
                                    {{ $article->content }}
                                </blockquote>
                            </div>
                        </div>

                        <button onclick="toggleArticle(this)" class="flex items-center gap-1 mt-4 text-[#934b00] text-[13px] font-bold hover:underline">
                            <span class="read-text">Baca Selengkapnya</span>
                            <span class="material-symbols-outlined read-arrow text-[18px]">chevron_right</span>
                        </button>
                    </div>
                </div>
            </section>
        @empty
            <p class="text-[13px] text-center text-[#717973] py-8">Belum ada artikel pengelolaan sampah.</p>
        @endforelse

            <!-- REFERENSI -->
            <section class="px-5 mt-8 reveal">
                <h3 class="text-[16px] font-bold text-[#012d1d] mb-4">📎 Referensi &amp; Regulasi Resmi</h3>
                <div class="flex flex-col gap-3">
                    <a href="#" class="flex items-center justify-between p-4 bg-white rounded-xl border border-[#c1c8c2]/50 shadow-sm hover:bg-[#c1ecd4]/30 hover:border-[#012d1d] transition-all group">
                        <div class="flex items-center gap-3">
                            <span class="material-symbols-outlined text-[#012d1d] fill-icon text-[20px]">gavel</span>
                            <span class="text-[13px] font-semibold text-[#012d1d]">PP No. 81 Tahun 2012 – Pengelolaan Sampah</span>
                        </div>
                        <span class="material-symbols-outlined text-[#414844] group-hover:translate-x-1 transition-transform text-[18px]">open_in_new</span>
                    </a>
                    <a href="#" class="flex items-center justify-between p-4 bg-white rounded-xl border border-[#c1c8c2]/50 shadow-sm hover:bg-[#c1ecd4]/30 hover:border-[#012d1d] transition-all group">
                        <div class="flex items-center gap-3">
                            <span class="material-symbols-outlined text-[#012d1d] fill-icon text-[20px]">public</span>
                            <span class="text-[13px] font-semibold text-[#012d1d]">SIPSN – Sistem Info Pengelolaan Sampah Nasional</span>
                        </div>
                        <span class="material-symbols-outlined text-[#414844] group-hover:translate-x-1 transition-transform text-[18px]">open_in_new</span>
                    </a>
                    <a href="#" class="flex items-center justify-between p-4 bg-white rounded-xl border border-[#c1c8c2]/50 shadow-sm hover:bg-[#c1ecd4]/30 hover:border-[#012d1d] transition-all group">
                        <div class="flex items-center gap-3">
                            <span class="material-symbols-outlined text-[#012d1d] fill-icon text-[20px]">menu_book</span>
                            <span class="text-[13px] font-semibold text-[#012d1d]">Panduan Bank Sampah – KLHK RI</span>
                        </div>
                        <span class="material-symbols-outlined text-[#414844] group-hover:translate-x-1 transition-transform text-[18px]">open_in_new</span>
                    </a>
                </div>
        </div><!-- /max-w-7xl -->

        <!-- CTA -->
        <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 w-full mt-10 mb-8 reveal">
            <div class="bg-gradient-to-br from-[#012d1d] to-[#1b4332] rounded-3xl p-8 sm:p-10 flex flex-col sm:flex-row items-center justify-between gap-6 relative overflow-hidden">
                <div class="absolute -top-6 -right-6 w-36 h-36 rounded-full bg-white/5"></div>
                <div class="relative z-10 max-w-xl text-center sm:text-left">
                    <span class="material-symbols-outlined text-[#c1ecd4] fill-icon text-[40px] mb-2">how_to_reg</span>
                    <h4 class="text-xl sm:text-2xl font-bold text-white mb-2">Siap Jadi Nasabah Bank Sampah?</h4>
                    <p class="text-xs sm:text-sm text-[#c1ecd4]/90 leading-relaxed">Mulai pilah sampah dari rumah dan bergabunglah bersama warga Desa Balonggandu dalam menjaga lingkungan.</p>
                </div>
                <a href="https://wa.me/{{ preg_replace('/[^0-9]/', '', $setting->whatsapp ?? '6281234567890') }}" target="_blank" class="bg-[#fd8603] hover:bg-[#e07800] active:scale-95 text-white font-bold text-sm sm:text-base px-8 py-4 rounded-full shadow-lg transition-all flex items-center gap-2.5 flex-shrink-0">
                    <span class="material-symbols-outlined text-[20px]">add_circle</span>
                    Hubungi Pengelola
                </a>
            </div>
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

<script>
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

    function toggleArticle(btn) {
        const card = btn.closest('.edu-card');
        const body = card.querySelector('.article-body');
        const text = btn.querySelector('.read-text');
        const isOpen = body.style.maxHeight && body.style.maxHeight !== '0px';
        body.style.transition = 'max-height .4s ease';
        if (isOpen) {
            body.style.maxHeight = '0';
            text.textContent = 'Baca Selengkapnya';
            btn.querySelector('.read-arrow').style.transform = 'rotate(0deg)';
        } else {
            body.style.maxHeight = body.scrollHeight + 'px';
            text.textContent = 'Sembunyikan';
            btn.querySelector('.read-arrow').style.transform = 'rotate(90deg)';
        }
    }

    const obs = new IntersectionObserver((entries) => {
        entries.forEach((e, i) => {
            if (e.isIntersecting) setTimeout(() => e.target.classList.add('visible'), i * 60);
        });
    }, { threshold: 0.08, rootMargin:'0px 0px -30px 0px' });
    document.querySelectorAll('.reveal').forEach(el => obs.observe(el));

    window.addEventListener('scroll', () => {
        document.getElementById('topbar').classList.toggle('shadow-md', window.scrollY > 16);
    }, { passive: true });
</script>
</body>
</html>
