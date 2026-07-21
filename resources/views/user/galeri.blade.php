<!DOCTYPE html>
<html class="light" lang="id">
<head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Galeri Kegiatan - SampahKita</title>
<meta name="description" content="Dokumentasi kegiatan KKN dan pemberdayaan masyarakat Desa Balonggandu dalam pengelolaan sampah bersama SampahKita."/>
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
                        "tertiary": "#152b1c",
                        "on-background": "#191c1d",
                        "tertiary-fixed-dim": "#b3cdb7",
                        "tertiary-fixed": "#cee9d3",
                        "on-primary-container": "#86af99",
                        "on-tertiary-container": "#93ad98",
                        "on-secondary-fixed": "#301400",
                        "tertiary-container": "#2a4131",
                        "surface": "#f8f9fa",
                        "primary-fixed-dim": "#a5d0b9",
                        "on-secondary-container": "#5f2f00",
                        "surface-bright": "#f8f9fa",
                        "outline-variant": "#c1c8c2",
                        "secondary-container": "#fd8603",
                        "on-tertiary-fixed-variant": "#354c3b",
                        "surface-container-low": "#f3f4f5",
                        "on-primary": "#ffffff",
                        "on-tertiary-fixed": "#092012",
                        "error-container": "#ffdad6",
                        "surface-container-highest": "#e1e3e4",
                        "surface-dim": "#d9dadb",
                        "on-tertiary": "#ffffff",
                        "error": "#ba1a1a",
                        "on-surface-variant": "#414844",
                        "on-secondary": "#ffffff",
                        "secondary-fixed": "#ffdcc4",
                        "on-error": "#ffffff",
                        "primary-fixed": "#c1ecd4",
                        "primary": "#012d1d",
                        "inverse-surface": "#2e3132",
                        "background": "#f8f9fa",
                        "on-secondary-fixed-variant": "#703800",
                        "surface-container-lowest": "#ffffff",
                        "surface-container-high": "#e7e8e9",
                        "on-surface": "#191c1d",
                        "on-primary-fixed": "#002114",
                        "primary-container": "#1b4332",
                        "on-primary-fixed-variant": "#274e3d",
                        "surface-container": "#edeeef",
                        "outline": "#717973",
                        "surface-variant": "#e1e3e4",
                        "secondary": "#934b00",
                        "secondary-fixed-dim": "#ffb781",
                        "on-error-container": "#93000a",
                        "surface-tint": "#3f6653",
                        "inverse-primary": "#a5d0b9",
                        "inverse-on-surface": "#f0f1f2"
                    },
                    borderRadius: { DEFAULT:"0.25rem", lg:"0.5rem", xl:"0.75rem", full:"9999px" },
                    spacing: {
                        "card-padding":"16px", gutter:"16px", base:"8px",
                        "container-margin":"20px", "section-gap":"32px"
                    },
                    fontFamily: {
                        "headline-md":       ["Plus Jakarta Sans"],
                        "body-md":           ["Be Vietnam Pro"],
                        "headline-lg-mobile":["Plus Jakarta Sans"],
                        "headline-lg":       ["Plus Jakarta Sans"],
                        "body-lg":           ["Be Vietnam Pro"],
                        "label-md":          ["Plus Jakarta Sans"]
                    },
                    fontSize: {
                        "headline-md":       ["20px", {lineHeight:"28px", fontWeight:"600"}],
                        "body-md":           ["16px", {lineHeight:"24px", fontWeight:"400"}],
                        "headline-lg-mobile":["24px", {lineHeight:"32px", letterSpacing:"-0.01em", fontWeight:"700"}],
                        "headline-lg":       ["30px", {lineHeight:"38px", letterSpacing:"-0.02em", fontWeight:"700"}],
                        "body-lg":           ["18px", {lineHeight:"28px", fontWeight:"400"}],
                        "label-md":          ["14px", {lineHeight:"20px", fontWeight:"600"}]
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

    /* Card hover & lift */
    .gallery-card {
        transition: transform 0.25s cubic-bezier(.34,1.56,.64,1),
                    box-shadow 0.25s ease,
                    border-color 0.2s ease;
    }
    .gallery-card:hover { transform: translateY(-3px); box-shadow: 0 8px 24px rgba(1,45,29,.12); border-color: #934b00; }
    .gallery-card:hover img { transform: scale(1.04); }
    .gallery-card img { transition: transform 0.4s ease; }

    /* Scroll reveal */
    .reveal { opacity:0; transform:translateY(16px); transition:opacity .55s ease, transform .55s ease; }
    .reveal.visible { opacity:1; transform:translateY(0); }

    /* Modal / lightbox */
    .modal { transition: opacity 0.25s ease, visibility 0.25s ease; }
</style>
</head>
<body class="bg-[#d9dadb] text-[#191c1d] min-h-screen">

<!-- Layout Container -->
<div class="w-full max-w-[680px] mx-auto min-h-screen bg-[#f8f9fa] shadow-2xl relative overflow-hidden flex flex-col">

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
                <span class="material-symbols-outlined text-[#012d1d] fill-icon text-[24px]">recycling</span>
                <span class="font-extrabold text-[16px] text-[#012d1d] tracking-tight">SampahKita</span>
            </div>
            <button onclick="toggleSidebar()" class="p-1.5 rounded-full hover:bg-[#edeeef] transition-colors flex items-center justify-center">
                <span class="material-symbols-outlined text-[20px] text-[#414844]">close</span>
            </button>
        </div>

        <!-- Navigation Links -->
        <nav class="flex flex-col gap-1.5">
            <!-- Home -->
            <a href="/" class="flex items-center gap-3.5 px-4 py-3 rounded-xl text-[#414844] hover:text-[#012d1d] hover:bg-[#edeeef] font-semibold text-[14px] transition-all">
                <span class="material-symbols-outlined text-[22px]">home</span>
                Home
            </a>
            <!-- Edukasi -->
            <a href="/edukasi" class="flex items-center gap-3.5 px-4 py-3 rounded-xl text-[#414844] hover:text-[#012d1d] hover:bg-[#edeeef] font-semibold text-[14px] transition-all">
                <span class="material-symbols-outlined text-[22px]">school</span>
                Edukasi
            </a>
            <!-- Pengelolaan -->
            <a href="/bank" class="flex items-center gap-3.5 px-4 py-3 rounded-xl text-[#414844] hover:text-[#012d1d] hover:bg-[#edeeef] font-semibold text-[14px] transition-all">
                <span class="material-symbols-outlined text-[22px]">delete_sweep</span>
                Pengelolaan
            </a>
            <!-- Galeri (active) -->
            <a href="/galeri" class="flex items-center gap-3.5 px-4 py-3 rounded-xl text-white bg-[#1b4332] font-semibold text-[14px] transition-all">
                <span class="material-symbols-outlined text-[22px] fill-icon">photo_library</span>
                Galeri
            </a>
        </nav>
    </aside>

    <!-- TOP APP BAR -->
    <header id="topbar" class="sticky top-0 w-full z-30 bg-[#f8f9fa] border-b border-[#c1c8c2]/40 shadow-sm transition-all duration-300">
        <div class="flex items-center justify-between px-5 h-14">
            <div class="flex items-center gap-3">
                <button onclick="toggleSidebar()" class="p-1.5 rounded-full hover:bg-[#edeeef] transition-colors flex items-center justify-center">
                    <span class="material-symbols-outlined text-[#414844] text-[22px]">menu</span>
                </button>
                <div class="flex items-center gap-1.5">
                    <span class="material-symbols-outlined text-[#012d1d] fill-icon text-[24px]">recycling</span>
                    <h1 class="text-[17px] font-bold text-[#012d1d] leading-none">SampahKita</h1>
                </div>
            </div>
            <div class="w-8"></div>
        </div>
    </header>

    <!-- Content Area -->
    <main class="flex-1 px-5 pb-12">

        <!-- INTRO SECTION -->
        <section class="pt-6 pb-2 reveal">
            <div class="bg-[#cee9d3] p-6 rounded-2xl shadow-sm relative overflow-hidden">
                <div class="absolute -right-6 -bottom-6 opacity-10 text-[#012d1d]">
                    <span class="material-symbols-outlined text-[130px] fill-icon">eco</span>
                </div>
                <div class="relative z-10">
                    <h2 class="text-[20px] font-extrabold text-[#012d1d] leading-tight mb-2">Momen KKN Desa Balonggandu</h2>
                    <p class="text-[13px] text-[#414844] leading-relaxed">
                        Lihat bagaimana kebersamaan kita dalam mewujudkan desa yang bersih dan mandiri. Galeri ini menampilkan dokumentasi kegiatan KKN selama program pemberdayaan sampah berlangsung.
                    </p>
                </div>
            </div>
        </section>

        <!-- PHOTO GALLERY SECTION -->
        <section class="mt-6 reveal">
            <div class="flex items-center justify-between mb-4">
                <h3 class="text-[16px] font-bold text-[#012d1d]">Aktivitas Komunitas</h3>
                <div class="h-0.5 w-24 bg-[#c1c8c2]/50"></div>
            </div>

            <div class="flex flex-col gap-4">
                <!-- Card 1 -->
                <div onclick="openLightbox(this)" class="gallery-card bg-white rounded-xl shadow-sm overflow-hidden border border-[#c1c8c2]/60 cursor-pointer">
                    <div class="h-44 overflow-hidden relative">
                        <img class="w-full h-full object-cover" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAdnaUWDeFUCTqu123V2NTVHrjJX6wtD41ZEqVcykZjWcFMjF9avERsOjM9vex9t-SIx0tw4DdDzWehTnhU1RfSuqSweQGWvXMcX3Lb-yDDgDoo85L4IW_XuLvqcKvPgzlLCU8DYTa26TH8Q0rrh6lv1aQlaKFGZymH6QE8j72JNHTu6Fu6K3sUnC2-aMiiS-r_YMlh71P6P5AHVF1qA8azqZFgEbB43snmQZ-Ygh_TIXNxaZhwjY2MUw" alt="Diskusi Warga"/>
                    </div>
                    <div class="p-4">
                        <p class="text-[12px] font-bold text-[#934b00] mb-0.5">Diskusi Warga</p>
                        <p class="text-[13px] text-[#191c1d] leading-normal">Musyawarah bersama Ketua RT untuk sistem jemput sampah.</p>
                    </div>
                </div>

                <!-- Card 2 -->
                <div onclick="openLightbox(this)" class="gallery-card bg-white rounded-xl shadow-sm overflow-hidden border border-[#c1c8c2]/60 cursor-pointer">
                    <div class="h-44 overflow-hidden relative">
                        <img class="w-full h-full object-cover" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAjtc7kiC6jdpBncb05Grfix2avP-AsKV6eGpPU6fq2N3amLi6F7rGsO0tk1JgulNbjL6KzDIpI1pGpONQCI3sap0m3PFnCxs4n0EQXvyak6HczrukNsHbqhjmca_ZLYNXuSIxvtXEDtHjpXIoUKi-3iiMqZakjwPON86t-N5Uf8TkN3I7yfyYibXXLtKdINy_qo7qLO1xJ_d6_ADijTFkuwpO_9KvOAdfya0hRQFtlZU0BhbQfGw8-kg" alt="Workshop Kompos"/>
                    </div>
                    <div class="p-4">
                        <p class="text-[12px] font-bold text-[#934b00] mb-0.5">Workshop Kompos</p>
                        <p class="text-[13px] text-[#191c1d] leading-normal">Pelatihan pengolahan sampah organik menjadi pupuk cair.</p>
                    </div>
                </div>

                <!-- Card 3 -->
                <div onclick="openLightbox(this)" class="gallery-card bg-white rounded-xl shadow-sm overflow-hidden border border-[#c1c8c2]/60 cursor-pointer">
                    <div class="h-44 overflow-hidden relative">
                        <img class="w-full h-full object-cover" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDaBlUM-jijUOEOEB84jZ3QQBGwCs-wXuoDWZ4ycWZ2SNuICab7blaNoH_T_S1Pbxf2A7YJbaK-6lPitGx8Q9SdA3XEg6mZcMFG3oVIwABePcZ8DtH1KGjdiIeyt2D69hRGiAmo9DE36Lm7fCOEh8DX2FaRjnfjhf97QYURxCiEkOrK2bAhxR_mQFQDahvkAEaGOxBjX9nnQeede4njbqO-iyaicWt9xvg5AHAd3NNoWNEWlcaSxkgwJg" alt="Aksi Bersih"/>
                    </div>
                    <div class="p-4">
                        <p class="text-[12px] font-bold text-[#934b00] mb-0.5">Aksi Bersih</p>
                        <p class="text-[13px] text-[#191c1d] leading-normal">Gotong royong membersihkan area irigasi desa.</p>
                    </div>
                </div>

                <!-- Card 4 -->
                <div onclick="openLightbox(this)" class="gallery-card bg-white rounded-xl shadow-sm overflow-hidden border border-[#c1c8c2]/60 cursor-pointer">
                    <div class="h-44 overflow-hidden relative">
                        <img class="w-full h-full object-cover" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDbhRqH5iqREFqAiY1vH1AelAnuQ66r9OedV5jIifq1RpS6FKup7RLUGAOHAyQ8K9JRfqkJ557opsCpiAyS2BmDj-VZyzsLgzAMGa8_nWP2aKIIaZ9q7DhGYeRtdlb2bGL0GKDrOd2xewEYNSZFBtWeLotEWhcJZNOV6lu5P9WpKJD2QGPfKHhIyh2WGokarGMg-ZjzI2pHXL4VPyH81zNgvTKBMDueZlhziyoYaYaT7s8BeY0Ka89DgQ" alt="Bank Sampah"/>
                    </div>
                    <div class="p-4">
                        <p class="text-[12px] font-bold text-[#934b00] mb-0.5">Bank Sampah</p>
                        <p class="text-[13px] text-[#191c1d] leading-normal">Penyortiran perdana sampah plastik di posko utama.</p>
                    </div>
                </div>

                <!-- Card 5 -->
                <div onclick="openLightbox(this)" class="gallery-card bg-white rounded-xl shadow-sm overflow-hidden border border-[#c1c8c2]/60 cursor-pointer">
                    <div class="h-44 overflow-hidden relative">
                        <img class="w-full h-full object-cover" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDIpXYVtpoJKsWYNPaVxkxJlt-xIl92kYUMcZPU4vAYUUx4A9zRGDpPw8NzmQ5ZUowehB8qbo02Z2Daz51y39s0KE1AJJLTGb_K8RSq0iixNLwiLNV8xxhjxjVAJ95fVn2XAvHq04L5af5sHKnO4FBryYanthqXPYUk6pMktERgRnYAUQGrGGxyyiorUFJFehs-aA670G_cx3x_nk1NoM21yYYGZlS5XMaGmuqk-DoqVwXkgj0JbfAYlQ" alt="Edukasi Sekolah"/>
                    </div>
                    <div class="p-4">
                        <p class="text-[12px] font-bold text-[#934b00] mb-0.5">Edukasi Sekolah</p>
                        <p class="text-[13px] text-[#191c1d] leading-normal">Sesi belajar memilah sampah bersama adik-adik SDN Balonggandu.</p>
                    </div>
                </div>

                <!-- Card 6 -->
                <div onclick="openLightbox(this)" class="gallery-card bg-white rounded-xl shadow-sm overflow-hidden border border-[#c1c8c2]/60 cursor-pointer">
                    <div class="h-44 overflow-hidden relative">
                        <img class="w-full h-full object-cover" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBBdZfXc2CpDtxZtHWJmjvvEsJ1z6lI0L1ItnTCp44F7ywxTB0JoBBC_PKnM8NB5JDUmTY_AXV5GOhncC-xQBsOq9IPyR9QXQVdhumBsdLtMgsq4IEUhNn7zLXpMCy9VKew27-FcZHKBqt1gM3xElApG1t0p8XRy_e1LdrY5vop6-90lwup2jEG1ZNWVtzunu1CIWcSjeZ0Dzm4iDF5EVSBP1QlmE44CjqA9INagpuj-5m_PK6S0-Ob_w" alt="Hasil Nyata"/>
                    </div>
                    <div class="p-4">
                        <p class="text-[12px] font-bold text-[#934b00] mb-0.5">Hasil Nyata</p>
                        <p class="text-[13px] text-[#191c1d] leading-normal">Panen perdana kebun warga yang menggunakan pupuk organik.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- VIDEO SECTION -->
        <section class="mt-8 mb-8 reveal">
            <div class="flex items-center justify-between mb-4">
                <h3 class="text-[16px] font-bold text-[#012d1d]">Dokumentasi Video</h3>
                <div class="h-0.5 w-24 bg-[#c1c8c2]/50"></div>
            </div>
            <div onclick="playVideo()" class="relative group cursor-pointer overflow-hidden rounded-2xl shadow-md aspect-video bg-black">
                <img src="/images/video_thumbnail.png" alt="Video dokumentasi KKN" class="absolute inset-0 w-full h-full object-cover opacity-70 transition-transform duration-700 group-hover:scale-105"/>
                <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/25 to-transparent flex flex-col justify-end p-5">
                    <h4 class="text-[14px] font-bold text-white mb-1">Perjalanan KKN Pemberdayaan Sampah Desa Balonggandu</h4>
                    <p class="text-[11px] text-white/80 leading-normal">Satu bulan penuh makna, merajut asa demi lingkungan yang lebih baik.</p>
                </div>
                <div class="absolute inset-0 flex items-center justify-center">
                    <div class="w-14 h-14 bg-[#fd8603] rounded-full flex items-center justify-center text-white shadow-lg transform transition-all group-hover:scale-110 active:scale-95">
                        <span class="material-symbols-outlined text-[28px] fill-icon">play_arrow</span>
                    </div>
                </div>
            </div>
        </section>

    </main>

    <!-- FOOTER -->
    <footer class="bg-[#e1e3e4] py-8 text-center flex flex-col items-center gap-2 mt-auto">
        <div class="flex items-center gap-2 mb-1">
            <span class="material-symbols-outlined text-[#012d1d] fill-icon text-[22px]">recycling</span>
            <span class="text-[17px] font-bold text-[#012d1d]">SampahKita</span>
        </div>
        <p class="text-[13px] text-[#414844]">© 2024 SampahKita Community. Bersama menjaga bumi.</p>
        <div class="flex gap-6 mt-3">
            <a href="#" class="text-[13px] text-[#414844] hover:text-[#934b00] transition-colors font-semibold">Kontak</a>
            <a href="#" class="text-[13px] text-[#414844] hover:text-[#934b00] transition-colors font-semibold">Privasi</a>
            <a href="#" class="text-[13px] text-[#414844] hover:text-[#934b00] transition-colors font-semibold">Syarat</a>
        </div>
    </footer>

</div><!-- /Layout Container -->

<!-- LIGHTBOX -->
<div id="lightbox" class="modal fixed inset-0 z-[100] bg-black/90 flex items-center justify-center p-5 opacity-0 pointer-events-none transition-all duration-300">
    <button onclick="closeLightbox()" class="absolute top-5 right-5 text-white bg-white/10 hover:bg-white/20 p-2 rounded-full transition-colors flex items-center justify-center">
        <span class="material-symbols-outlined text-[24px]">close</span>
    </button>
    <div class="max-w-[480px] w-full flex flex-col gap-4">
        <div class="bg-white rounded-2xl overflow-hidden shadow-2xl">
            <img id="lightbox-img" class="w-full h-auto object-contain max-h-[60vh] mx-auto bg-neutral-900" src="" alt=""/>
            <div class="p-5 bg-white border-t border-neutral-100">
                <p id="lightbox-title" class="text-[12px] font-bold text-[#934b00] mb-0.5"></p>
                <p id="lightbox-desc" class="text-[14px] text-[#191c1d] leading-normal"></p>
            </div>
        </div>
    </div>
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

    const lightbox = document.getElementById('lightbox');
    const lightboxImg = document.getElementById('lightbox-img');
    const lightboxTitle = document.getElementById('lightbox-title');
    const lightboxDesc = document.getElementById('lightbox-desc');

    function openLightbox(card) {
        const img = card.querySelector('img');
        const title = card.querySelector('p:nth-child(1)');
        const desc = card.querySelector('p:nth-child(2)');
        lightboxImg.src = img.src;
        lightboxImg.alt = img.alt;
        lightboxTitle.textContent = title.textContent;
        lightboxDesc.textContent = desc.textContent;
        lightbox.classList.remove('opacity-0', 'pointer-events-none');
    }
    function closeLightbox() {
        lightbox.classList.add('opacity-0', 'pointer-events-none');
    }
    lightbox.addEventListener('click', (e) => {
        if (e.target === lightbox) closeLightbox();
    });

    function playVideo() {
        alert("Dokumentasi Video memutar KKN Desa Balonggandu...");
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
