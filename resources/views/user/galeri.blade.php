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

    /* Scroll animation */
    .reveal { opacity: 1; transform: translateY(0); transition: opacity .4s ease, transform .4s ease; }

    /* Modal / lightbox */
    .modal { transition: opacity 0.25s ease, visibility 0.25s ease; }
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
            <!-- Pengelolaan -->
            <a href="/bank" class="flex items-center gap-3.5 px-4 py-3 rounded-xl text-[#414844] hover:text-[#012d1d] hover:bg-[#edeeef] font-semibold text-[14px] transition-all">
                <span class="material-symbols-outlined text-[22px]">delete_sweep</span>
                Pengelolaan Sampah
            </a>
            <!-- Galeri (active) -->
            <a href="/galeri" class="flex items-center gap-3.5 px-4 py-3 rounded-xl text-white bg-[#1b4332] font-semibold text-[14px] transition-all shadow-sm">
                <span class="material-symbols-outlined text-[22px] fill-icon">photo_library</span>
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
                <a href="/bank" class="text-[14px] font-semibold text-[#414844] hover:text-[#012d1d] transition-colors">Pengelolaan</a>
                <a href="/galeri" class="text-[14px] font-bold text-[#012d1d] border-b-2 border-[#1b4332] pb-0.5">Galeri</a>
                <a href="/admin/login" class="text-[13px] font-bold text-[#012d1d] bg-[#c1ecd4] hover:bg-[#a5d0b9] px-4 py-2 rounded-full transition-all">Admin Panel</a>
            </nav>
        </div>
    </header>

    <!-- Content Area -->
    <main class="flex-1 w-full pb-16">

        <!-- INTRO SECTION -->
        <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-6 pb-2 w-full reveal">
            <div class="bg-[#cee9d3] p-6 sm:p-8 rounded-3xl shadow-sm relative overflow-hidden">
                <div class="absolute -right-6 -bottom-6 opacity-10 text-[#012d1d]">
                    <span class="material-symbols-outlined text-[160px] fill-icon">eco</span>
                </div>
                <div class="relative z-10 max-w-2xl">
                    <h2 class="text-xl sm:text-2xl md:text-3xl font-extrabold text-[#012d1d] leading-tight mb-2">Momen KKN Desa Balonggandu</h2>
                    <p class="text-xs sm:text-sm md:text-base text-[#414844] leading-relaxed">
                        Lihat bagaimana kebersamaan kita dalam mewujudkan desa yang bersih dan mandiri. Galeri ini menampilkan dokumentasi kegiatan KKN selama program pemberdayaan sampah berlangsung.
                    </p>
                </div>
            </div>
        </section>

        <!-- PHOTO GALLERY SECTION -->
        <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 w-full mt-8 reveal">
            <div class="flex items-center justify-between mb-6">
                <h3 class="text-lg sm:text-xl font-bold text-[#012d1d]">Aktivitas &amp; Galeri Media</h3>
                <div class="h-0.5 flex-1 max-w-[200px] bg-[#c1c8c2]/50 ml-4 hidden sm:block"></div>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                @forelse ($galleries as $item)
                    <div onclick="openLightbox(this)" 
                         data-img="{{ $item->image_url }}"
                         data-title="{{ $item->title }}"
                         data-category="{{ $item->category }}"
                         data-uploader="{{ $item->uploader }}"
                         data-date="{{ $item->created_at->format('d M Y') }}"
                         data-article="{{ $item->description }}"
                         class="gallery-card bg-white rounded-2xl shadow-sm overflow-hidden border border-[#c1c8c2]/60 cursor-pointer group flex flex-col justify-between">
                        <div>
                            <div class="h-48 overflow-hidden relative bg-neutral-100">
                                <img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" 
                                     src="{{ $item->image_url }}" 
                                     alt="{{ $item->title }}"
                                     onerror="this.src='/images/hero_karawang.png'"/>
                                
                                @if(strtolower($item->type) === 'video')
                                    <div class="absolute top-3 left-3 bg-[#fd8603] text-white px-2.5 py-0.5 rounded-full text-[10px] font-bold shadow flex items-center gap-1">
                                        <span class="material-symbols-outlined text-[14px]">videocam</span>
                                        <span>Video</span>
                                    </div>
                                    <div class="absolute inset-0 flex items-center justify-center bg-black/20">
                                        <div class="w-10 h-10 rounded-full bg-white/80 backdrop-blur-sm flex items-center justify-center text-[#012d1d] shadow-lg">
                                            <span class="material-symbols-outlined text-[24px]">play_arrow</span>
                                        </div>
                                    </div>
                                @else
                                    <div class="absolute top-3 left-3 bg-[#012d1d] text-white px-2.5 py-0.5 rounded-full text-[10px] font-bold shadow">
                                        {{ $item->category }}
                                    </div>
                                @endif
                            </div>
                            <!-- Artikel & Deskripsi di Bawah Gambar -->
                            <div class="p-5">
                                <div class="flex items-center justify-between gap-2 mb-1">
                                    <span class="text-[11px] font-bold text-[#934b00] uppercase tracking-wider">{{ $item->category }}</span>
                                    <span class="text-[11px] text-[#717973]">{{ $item->created_at->format('d M Y') }}</span>
                                </div>
                                <h4 class="text-[15px] font-bold text-[#012d1d] leading-snug mb-2">{{ $item->title }}</h4>
                                @if ($item->description)
                                    <p class="text-[12px] text-[#414844] leading-relaxed line-clamp-3 bg-[#f8f9fa] p-3 rounded-xl border border-[#c1c8c2]/30 mb-2">
                                        {{ $item->description }}
                                    </p>
                                @endif
                            </div>
                        </div>
                        <div class="px-5 pb-4 pt-0 flex items-center justify-between text-[11px] text-[#717973] border-t border-[#f0f1f2] pt-3">
                            <span class="flex items-center gap-1 font-medium"><span class="material-symbols-outlined text-[14px]">person</span> {{ $item->uploader }}</span>
                            <span class="font-bold text-[#012d1d] hover:underline flex items-center gap-0.5">Baca Detail <span class="material-symbols-outlined text-[14px]">chevron_right</span></span>
                        </div>
                    </div>
                @empty
                    <div class="col-span-full py-12 text-center text-[#717973]">
                        <span class="material-symbols-outlined text-4xl mb-2">collections</span>
                        <p class="font-bold">Belum ada foto/video galeri yang diunggah.</p>
                    </div>
                @endforelse
            </div>
        </section>

        <!-- VIDEO SECTION -->
        <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 w-full mt-10 mb-8 reveal">
            <div class="flex items-center justify-between mb-4">
                <h3 class="text-lg sm:text-xl font-bold text-[#012d1d]">Video Liputan KKN &amp; Lingkungan</h3>
                <div class="h-0.5 flex-1 max-w-[200px] bg-[#c1c8c2]/50 ml-4 hidden sm:block"></div>
            </div>
            <div onclick="playVideo()" class="relative rounded-3xl overflow-hidden shadow-md cursor-pointer group h-64 sm:h-80 md:h-96 w-full">
                <img src="/images/video_thumbnail.png" alt="Video KKN" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"/>
                <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/30 to-transparent"></div>
                <div class="absolute bottom-6 left-6 right-6 text-white">
                    <span class="px-3 py-1 bg-[#fd8603] text-white rounded-full text-xs font-bold mb-2 inline-block">Video Dokumen Utama</span>
                    <h4 class="text-lg sm:text-xl font-bold">Aksi Pengelolaan Sampah &amp; Pemberdayaan Desa Balonggandu</h4>
                </div>
                <div class="absolute inset-0 flex items-center justify-center">
                    <div class="w-16 h-16 sm:w-20 sm:h-20 bg-[#fd8603] rounded-full flex items-center justify-center text-white shadow-xl transform transition-all group-hover:scale-110 active:scale-95">
                        <span class="material-symbols-outlined text-[36px] fill-icon">play_arrow</span>
                    </div>
                </div>
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
        const imgSrc = card.getAttribute('data-img') || card.querySelector('img')?.src;
        const titleText = card.getAttribute('data-title') || card.querySelector('h4')?.textContent || '';
        const category = card.getAttribute('data-category') || '';
        const uploader = card.getAttribute('data-uploader') || '';
        const date = card.getAttribute('data-date') || '';
        const articleText = card.getAttribute('data-article') || '';

        lightboxImg.src = imgSrc;
        lightboxImg.alt = titleText;
        lightboxTitle.textContent = titleText;
        lightboxDesc.innerHTML = `
            <div class="flex items-center gap-2 mb-2 text-xs text-[#934b00] font-bold">
                <span>${category}</span> • <span>Oleh: ${uploader}</span> • <span>${date}</span>
            </div>
            ${articleText ? `<div class="p-3 bg-[#f8f9fa] rounded-xl border border-[#c1c8c2]/40 text-xs text-[#414844] leading-relaxed">${articleText}</div>` : ''}
        `;
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
