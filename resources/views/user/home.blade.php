<!DOCTYPE html>
<html class="light" lang="id">
<head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>SampahKita – Bersama Wujudkan Balonggandu Hijau</title>
<meta name="description" content="Kelola sampah hari ini untuk bumi yang lebih baik besok melalui aksi nyata komunitas Karawang."/>
<link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;600;700;800&family=Be+Vietnam+Pro:wght@400;500;600&display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0&display=block" rel="stylesheet"/>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<script>
    try {
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "primary":                  "#1b4332",
                        "primary-container":        "#1b4332",
                        "primary-fixed":            "#c1ecd4",
                        "primary-fixed-dim":        "#a5d0b9",
                        "on-primary":               "#ffffff",
                        "on-primary-container":     "#86af99",
                        "on-primary-fixed":         "#002114",
                        "secondary":                "#934b00",
                        "secondary-container":      "#fd8603",
                        "secondary-fixed":          "#ffdcc4",
                        "secondary-fixed-dim":      "#ffb781",
                        "on-secondary":             "#ffffff",
                        "on-secondary-container":   "#5f2f00",
                        "tertiary":                 "#152b1c",
                        "tertiary-fixed":           "#cee9d3",
                        "tertiary-fixed-dim":       "#b3cdb7",
                        "on-tertiary":              "#ffffff",
                        "on-tertiary-fixed":        "#092012",
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
                    fontFamily: {
                        sans: ["Be Vietnam Pro", "sans-serif"],
                        heading: ["Plus Jakarta Sans", "sans-serif"],
                    },
                }
            }
        }
    } catch(_e) {}
</script>
<style>
    body { font-family: 'Be Vietnam Pro', sans-serif; }
    h1,h2,h3,h4 { font-family: 'Plus Jakarta Sans', sans-serif; }
    .fill-icon { font-variation-settings: 'FILL' 1; }

    /* Card hover lift */
    .feature-card {
        transition: transform 0.25s cubic-bezier(.34,1.56,.64,1),
                    box-shadow 0.25s ease,
                    border-color 0.2s ease;
    }
    .feature-card:hover { transform: translateY(-3px); box-shadow: 0 8px 24px rgba(27,67,50,.12); border-color: #1b4332; }
    .feature-card:hover .card-icon { transform: scale(1.12); }
    .card-icon { transition: transform 0.25s cubic-bezier(.34,1.56,.64,1); }

    /* Scroll fade-in */
    .reveal { opacity: 0; transform: translateY(20px); transition: opacity .55s ease, transform .55s ease; }
    .reveal.visible { opacity: 1; transform: translateY(0); }

    /* Progress bar fill animation */
    .prog-fill { width: 0; transition: width 1.3s cubic-bezier(.4,0,.2,1); }
</style>
</head>
<body class="bg-[#d9dadb] text-[#191c1d] min-h-screen">

<!-- Layout Container -->
<div class="w-full max-w-[680px] mx-auto min-h-screen bg-[#f8f9fa] shadow-2xl relative overflow-hidden flex flex-col">

    <!-- ═══════════════════════════════════
         BACKDROP & DRAWER MENU
    ════════════════════════════════════ -->
    <!-- Backdrop Overlay -->
    <div id="drawer-backdrop" onclick="toggleSidebar()"
         class="absolute inset-0 bg-black/40 z-40 opacity-0 pointer-events-none transition-opacity duration-300"></div>

    <!-- Drawer Navigation Sidebar -->
    <aside id="drawer-menu"
           class="absolute top-0 left-0 h-full w-[260px] z-50 bg-[#f8f9fa] border-r border-[#c1c8c2]/50
                  shadow-2xl flex flex-col p-5 gap-4 -translate-x-full transition-transform duration-300 ease-in-out">
        <!-- Drawer Header -->
        <div class="flex items-center justify-between pb-3 border-b border-[#c1c8c2]/30">
            <div class="flex items-center gap-2">
                <span class="material-symbols-outlined text-[#1b4332] fill-icon text-[24px]">recycling</span>
                <span class="font-extrabold text-[16px] text-[#1b4332] tracking-tight">SampahKita</span>
            </div>
            <button onclick="toggleSidebar()" class="p-1.5 rounded-full hover:bg-[#edeeef] transition-colors flex items-center justify-center">
                <span class="material-symbols-outlined text-[20px] text-[#414844]">close</span>
            </button>
        </div>

        <!-- Navigation Links -->
        <nav class="flex flex-col gap-1.5">
            <!-- Home (active) -->
            <a href="/" class="flex items-center gap-3.5 px-4 py-3 rounded-xl text-white bg-[#1b4332] font-semibold text-[14px] transition-all">
                <span class="material-symbols-outlined text-[22px] fill-icon">home</span>
                Home
            </a>
            <!-- Edukasi -->
            <a href="/edukasi" class="flex items-center gap-3.5 px-4 py-3 rounded-xl text-[#414844] hover:text-[#1b4332] hover:bg-[#edeeef] font-semibold text-[14px] transition-all">
                <span class="material-symbols-outlined text-[22px]">school</span>
                Edukasi
            </a>
            <!-- Pengelolaan -->
            <a href="/bank" class="flex items-center gap-3.5 px-4 py-3 rounded-xl text-[#414844] hover:text-[#1b4332] hover:bg-[#edeeef] font-semibold text-[14px] transition-all">
                <span class="material-symbols-outlined text-[22px]">delete_sweep</span>
                Pengelolaan
            </a>
            <!-- Galeri -->
            <a href="/galeri" class="flex items-center gap-3.5 px-4 py-3 rounded-xl text-[#414844] hover:text-[#1b4332] hover:bg-[#edeeef] font-semibold text-[14px] transition-all">
                <span class="material-symbols-outlined text-[22px]">photo_library</span>
                Galeri
            </a>
        </nav>
    </aside>

    <!-- ═══════════════════════════════════
         TOP APP BAR
    ════════════════════════════════════ -->
    <header id="topbar" class="sticky top-0 w-full z-30 bg-[#f8f9fa] border-b border-[#c1c8c2]/40 shadow-sm transition-all duration-300">
        <div class="flex items-center justify-between px-5 h-14">
            <!-- Logo & Hamburger Menu -->
            <div class="flex items-center gap-3">
                <button onclick="toggleSidebar()" class="p-1.5 rounded-full hover:bg-[#edeeef] transition-colors flex items-center justify-center">
                    <span class="material-symbols-outlined text-[#414844] text-[22px]">menu</span>
                </button>
                <div class="flex items-center gap-1.5">
                    <span class="material-symbols-outlined text-[#1b4332] fill-icon text-[24px]">recycling</span>
                    <h1 class="text-[17px] font-bold text-[#1b4332] tracking-tight leading-none">SampahKita</h1>
                </div>
            </div>
            <div class="w-8"></div><!-- Spacer to center title if needed or place icons here -->
        </div>
    </header>

    <!-- Content Area -->
    <main class="flex-1 pb-12">

        <!-- HERO SECTION -->
        <section class="relative w-full h-[400px] flex items-end overflow-hidden">
            <img src="/images/hero_karawang.png" alt="Komunitas pengelola sampah Karawang" class="absolute inset-0 w-full h-full object-cover object-center"/>
            <div class="absolute inset-0 bg-gradient-to-b from-[#1b4332]/60 via-[#1b4332]/70 to-[#1b4332]/90"></div>
            <div class="relative z-10 w-full px-5 pb-10">
                <h2 class="text-[26px] font-extrabold text-white leading-tight mb-3">
                    Bersama Wujudkan<br>Balonggandu Hijau
                </h2>
                <p class="text-[14px] text-[#c1ecd4]/90 leading-relaxed mb-6">
                    Kelola sampah hari ini untuk bumi yang lebih baik besok melalui aksi nyata komunitas.
                </p>
                <a href="#" class="inline-flex items-center gap-2 bg-[#934b00] hover:bg-[#7a3e00] active:scale-95 text-white font-bold text-[14px] px-7 py-3 rounded-full shadow-lg transition-all duration-200">
                    Gabung Komunitas
                    <span class="material-symbols-outlined text-[18px]">arrow_forward</span>
                </a>
            </div>
        </section>

        <!-- LAYANAN UTAMA -->
        <section class="mt-8 px-5 reveal">
            <div class="flex items-center justify-between mb-4">
                <h3 class="text-[17px] font-bold text-[#1b4332]">Layanan Utama</h3>
                <span class="text-[13px] font-semibold text-[#934b00] cursor-pointer hover:underline">Lihat Semua</span>
            </div>

            <div class="flex flex-col gap-3">
                <!-- Card 1 -->
                <div class="feature-card bg-white rounded-xl p-4 border border-[#c1c8c2]/60 shadow-sm flex items-start gap-4">
                    <div class="card-icon w-11 h-11 rounded-full bg-[#c1ecd4] flex items-center justify-center flex-shrink-0">
                        <span class="material-symbols-outlined text-[#1b4332] text-[22px]" style="font-variation-settings:'FILL' 1">recycling</span>
                    </div>
                    <div class="flex-1 min-w-0">
                        <h4 class="text-[15px] font-bold text-[#1b4332] mb-1">Belajar Kurangi Sampah</h4>
                        <p class="text-[13px] text-[#414844] leading-relaxed">Kurangi, Pakai Lagi, Olah Kembali dengan panduan praktis.</p>
                    </div>
                    <a href="/edukasi" class="flex-shrink-0 flex items-center gap-0.5 text-[#934b00] text-[13px] font-semibold self-center hover:underline">
                        Pelajari <span class="material-symbols-outlined text-[16px]">chevron_right</span>
                    </a>
                </div>

                <!-- Card 2 -->
                <div class="feature-card bg-white rounded-xl p-4 border border-[#c1c8c2]/60 shadow-sm flex items-start gap-4">
                    <div class="card-icon w-11 h-11 rounded-full bg-[#ffdcc4] flex items-center justify-center flex-shrink-0">
                        <span class="material-symbols-outlined text-[#934b00] text-[22px]" style="font-variation-settings:'FILL' 1">potted_plant</span>
                    </div>
                    <div class="flex-1 min-w-0">
                        <h4 class="text-[15px] font-bold text-[#1b4332] mb-1">Ubah Sampah Jadi Pupuk</h4>
                        <p class="text-[13px] text-[#414844] leading-relaxed">Ubah sampah organik rumah tangga menjadi pupuk bermanfaat.</p>
                    </div>
                    <a href="/edukasi" class="flex-shrink-0 flex items-center gap-0.5 text-[#934b00] text-[13px] font-semibold self-center hover:underline">
                        Pelajari <span class="material-symbols-outlined text-[16px]">chevron_right</span>
                    </a>
                </div>

                <!-- Card 3 -->
                <div class="feature-card bg-white rounded-xl p-4 border border-[#c1c8c2]/60 shadow-sm flex items-start gap-4">
                    <div class="card-icon w-11 h-11 rounded-full bg-[#cee9d3] flex items-center justify-center flex-shrink-0">
                        <span class="material-symbols-outlined text-[#152b1c] text-[22px]" style="font-variation-settings:'FILL' 1">delete_sweep</span>
                    </div>
                    <div class="flex-1 min-w-0">
                        <h4 class="text-[15px] font-bold text-[#1b4332] mb-1">Pengelolaan Sampah</h4>
                        <p class="text-[13px] text-[#414844] leading-relaxed">Setorkan sampah anorganikmu dan pelajari cara pengelolaannya.</p>
                    </div>
                    <a href="/bank" class="flex-shrink-0 flex items-center gap-0.5 text-[#934b00] text-[13px] font-semibold self-center hover:underline">
                        Pelajari <span class="material-symbols-outlined text-[16px]">chevron_right</span>
                    </a>
                </div>

                <!-- Card 4 -->
                <div class="feature-card bg-white rounded-xl p-4 border border-[#c1c8c2]/60 shadow-sm flex items-start gap-4">
                    <div class="card-icon w-11 h-11 rounded-full bg-[#e7e8e9] flex items-center justify-center flex-shrink-0">
                        <span class="material-symbols-outlined text-[#414844] text-[22px]" style="font-variation-settings:'FILL' 1">photo_library</span>
                    </div>
                    <div class="flex-1 min-w-0">
                        <h4 class="text-[15px] font-bold text-[#1b4332] mb-1">Foto Kegiatan</h4>
                        <p class="text-[13px] text-[#414844] leading-relaxed">Lihat dokumentasi kegiatan gotong royong warga dan mahasiswa.</p>
                    </div>
                    <a href="/galeri" class="flex-shrink-0 flex items-center gap-0.5 text-[#934b00] text-[13px] font-semibold self-center hover:underline">
                        Lihat Galeri <span class="material-symbols-outlined text-[16px]">chevron_right</span>
                    </a>
                </div>
            </div>

            <!-- CTA Button -->
            <div class="mt-7 flex flex-col items-center gap-4 reveal">
                <a href="/edukasi" class="bg-[#1b4332] hover:bg-[#163829] active:scale-95 text-white font-bold text-[14px] px-10 h-12 rounded-full shadow-md transition-all duration-200 inline-flex items-center">
                    Pelajari Lebih Lanjut
                </a>
                <!-- Chips -->
                <div class="flex flex-wrap justify-center gap-2">
                    <span class="px-4 py-1.5 bg-[#1b4332]/10 text-[#1b4332] rounded-full text-[12px] font-semibold border border-[#1b4332]/20">Organik</span>
                    <span class="px-4 py-1.5 bg-[#fd8603]/10 text-[#934b00] rounded-full text-[12px] font-semibold border border-[#fd8603]/20">Anorganik</span>
                    <span class="px-4 py-1.5 bg-[#e1e3e4] text-[#414844] rounded-full text-[12px] font-semibold border border-[#c1c8c2]">B3</span>
                    <span class="px-4 py-1.5 bg-[#cee9d3] text-[#092012] rounded-full text-[12px] font-semibold border border-[#b3cdb7]">Residu</span>
                </div>
            </div>
        </section>

        <!-- TARGET KOMUNITAS -->
        <section class="mt-8 px-5 reveal">
            <div class="bg-white rounded-xl p-5 shadow-sm border border-[#c1c8c2]/60">
                <div class="flex items-center gap-2 mb-4">
                    <span class="material-symbols-outlined text-[#934b00] text-[20px]">trending_up</span>
                    <h3 class="text-[16px] font-bold text-[#1b4332]">Target Komunitas Desa Balonggandu</h3>
                </div>
                <div class="flex justify-between items-center mb-2">
                    <span class="text-[13px] font-semibold text-[#414844]">Pupuk Kompos Terkumpul</span>
                    <span class="text-[13px] font-bold text-[#934b00]">750 / 1000 Kg</span>
                </div>
                <div class="w-full bg-[#edeeef] rounded-full h-3.5 overflow-hidden shadow-inner">
                    <div class="prog-fill bg-gradient-to-r from-[#934b00] to-[#fd8603] h-full rounded-full" data-target="75"></div>
                </div>
                <p class="mt-4 text-[13px] text-[#414844] italic leading-relaxed">
                    "Sedikit demi sedikit, lama-lama menjadi hijau. Ayo warga Balonggandu, capai target bulan ini!"
                </p>
            </div>
        </section>

    </main>

    <!-- FOOTER -->
    <footer class="bg-[#e1e3e4] pt-8 pb-8 text-center flex flex-col items-center gap-2 mt-auto">
        <div class="flex items-center gap-2 mb-1">
            <span class="material-symbols-outlined text-[#1b4332] text-[22px]" style="font-variation-settings:'FILL' 1">recycling</span>
            <span class="text-[17px] font-bold text-[#1b4332]">SampahKita</span>
        </div>
        <p class="text-[13px] text-[#414844] max-w-[260px] leading-relaxed">Berdaya mengelola sampah, berkontribusi untuk bumi dari desa Karawang.</p>
        <div class="flex gap-6 mt-4">
            <a href="#" class="text-[13px] text-[#414844] hover:text-[#934b00] transition-colors">Kontak</a>
            <a href="#" class="text-[13px] text-[#414844] hover:text-[#934b00] transition-colors">Privasi</a>
            <a href="#" class="text-[13px] text-[#414844] hover:text-[#934b00] transition-colors">Syarat</a>
        </div>
        <p class="mt-6 text-[11px] text-[#414844]/60">© 2024 SampahKita Community. Bersama menjaga bumi.</p>
    </footer>

</div><!-- /Layout Container -->

<!-- FAB -->
<div class="fixed right-5 bottom-5 z-30">
    <button class="w-[52px] h-[52px] bg-[#934b00] hover:bg-[#7a3e00] text-white rounded-2xl shadow-xl flex items-center justify-center active:scale-90 hover:scale-105 transition-all duration-200">
        <span class="material-symbols-outlined text-[24px]" style="font-variation-settings:'FILL' 1">add</span>
    </button>
</div>

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

    // Scroll reveal
    const revealEls = document.querySelectorAll('.reveal');
    const revealObs = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) entry.target.classList.add('visible');
        });
    }, { threshold: 0.1, rootMargin: '0px 0px -40px 0px' });
    revealEls.forEach(el => revealObs.observe(el));

    // Progress bar
    const progObs = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.querySelectorAll('.prog-fill').forEach(bar => {
                    setTimeout(() => { bar.style.width = bar.dataset.target + '%'; }, 250);
                });
            }
        });
    }, { threshold: 0.4 });
    document.querySelectorAll('section').forEach(s => progObs.observe(s));

    // Topbar shadow
    window.addEventListener('scroll', () => {
        const bar = document.getElementById('topbar');
        bar.classList.toggle('shadow-md', window.scrollY > 16);
        bar.classList.toggle('shadow-sm', window.scrollY <= 16);
    }, { passive: true });
</script>
</body>
</html>
