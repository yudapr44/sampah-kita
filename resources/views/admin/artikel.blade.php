<!DOCTYPE html>
<html class="light" lang="id">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>Manajemen Artikel — EduManage Admin</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&amp;display=swap" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    "colors": {
                        "surface-container-highest": "#dfe3e8",
                        "surface-container-high": "#e5e8ee",
                        "on-tertiary-container": "#ffffff",
                        "on-surface": "#181c20",
                        "on-tertiary-fixed": "#002108",
                        "surface-tint": "#005bc0",
                        "tertiary": "#006d2c",
                        "error": "#ba1a1a",
                        "secondary-fixed": "#d8e2ff",
                        "secondary-fixed-dim": "#adc6ff",
                        "inverse-on-surface": "#eef1f7",
                        "surface-container": "#ebeef4",
                        "surface-container-low": "#f1f4fa",
                        "on-surface-variant": "#414754",
                        "on-error-container": "#93000a",
                        "surface-variant": "#dfe3e8",
                        "primary-container": "#1a73e8",
                        "on-tertiary-fixed-variant": "#005320",
                        "secondary-container": "#4d8efe",
                        "tertiary-container": "#008939",
                        "tertiary-fixed-dim": "#6ddd81",
                        "tertiary-fixed": "#89fa9b",
                        "on-primary-fixed-variant": "#004493",
                        "on-secondary-fixed": "#001a41",
                        "error-container": "#ffdad6",
                        "surface-bright": "#f7f9ff",
                        "on-primary-fixed": "#001a41",
                        "on-secondary-fixed-variant": "#004494",
                        "on-background": "#181c20",
                        "outline": "#727785",
                        "on-primary": "#ffffff",
                        "secondary": "#005ac1",
                        "on-secondary": "#ffffff",
                        "surface-container-lowest": "#ffffff",
                        "background": "#f7f9ff",
                        "on-error": "#ffffff",
                        "inverse-surface": "#2d3135",
                        "on-primary-container": "#ffffff",
                        "inverse-primary": "#adc7ff",
                        "outline-variant": "#c1c6d6",
                        "on-tertiary": "#ffffff",
                        "surface-dim": "#d7dae0",
                        "on-secondary-container": "#00285c",
                        "primary-fixed": "#d8e2ff",
                        "primary-fixed-dim": "#adc7ff",
                        "primary": "#005bbf",
                        "surface": "#f7f9ff"
                    },
                    "borderRadius": {
                        "DEFAULT": "0.25rem",
                        "lg": "0.5rem",
                        "xl": "0.75rem",
                        "full": "9999px"
                    },
                    "spacing": {
                        "margin-desktop": "32px",
                        "xs": "4px",
                        "xl": "32px",
                        "md": "16px",
                        "sm": "8px",
                        "base": "4px",
                        "lg": "24px",
                        "gutter": "24px",
                        "margin-mobile": "16px"
                    },
                    "fontFamily": {
                        "display-lg": ["Inter"],
                        "display-lg-mobile": ["Inter"],
                        "body-lg": ["Inter"],
                        "label-sm": ["Inter"],
                        "headline-md": ["Inter"],
                        "body-md": ["Inter"],
                        "mono-label": ["Inter"]
                    },
                    "fontSize": {
                        "display-lg": ["32px", {"lineHeight": "40px", "letterSpacing": "-0.02em", "fontWeight": "700"}],
                        "display-lg-mobile": ["24px", {"lineHeight": "32px", "letterSpacing": "-0.01em", "fontWeight": "700"}],
                        "body-lg": ["16px", {"lineHeight": "24px", "fontWeight": "400"}],
                        "label-sm": ["12px", {"lineHeight": "16px", "letterSpacing": "0.01em", "fontWeight": "500"}],
                        "headline-md": ["20px", {"lineHeight": "28px", "fontWeight": "600"}],
                        "body-md": ["14px", {"lineHeight": "20px", "fontWeight": "400"}],
                        "mono-label": ["12px", {"lineHeight": "16px", "fontWeight": "400"}]
                    }
                },
            },
        }
    </script>
    <style>
        body { font-family: 'Inter', sans-serif; background-color: #f7f9ff; min-height: max(884px, 100dvh); }
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
            display: inline-block;
            line-height: 1;
            text-transform: none;
            letter-spacing: normal;
            word-wrap: normal;
            white-space: nowrap;
            direction: ltr;
        }
        .hide-scrollbar::-webkit-scrollbar { display: none; }
        .hide-scrollbar { -ms-overflow-style: none; scrollbar-width: none; }
    </style>
</head>
<body class="bg-background text-on-surface">

<!-- Top App Bar -->
<header class="bg-surface shadow-sm w-full top-0 sticky z-50 flex justify-between items-center h-16 px-md md:px-margin-desktop">
    <div class="flex items-center gap-md">
        <button class="cursor-pointer active:scale-95 duration-150 p-sm rounded-full hover:bg-surface-container-low" id="sidebar-toggle">
            <span class="material-symbols-outlined text-on-surface">menu</span>
        </button>
        <h1 class="font-headline-md text-headline-md font-bold text-primary">Manajemen Artikel</h1>
    </div>
    <div class="flex items-center gap-sm">
        <button class="cursor-pointer active:scale-95 duration-150 p-sm rounded-full hover:bg-surface-container-low text-primary">
            <span class="material-symbols-outlined">notifications</span>
        </button>
        <div class="w-8 h-8 rounded-full bg-secondary-container flex items-center justify-center text-on-secondary-container font-bold text-xs cursor-pointer active:scale-95 transition-transform" title="{{ session('admin_name', 'Admin') }}">
            {{ strtoupper(substr(session('admin_name', 'Admin'), 0, 1)) }}
        </div>
    </div>
</header>

<!-- Main Content -->
<main class="max-w-7xl mx-auto px-md py-lg space-y-lg pb-24">
    <!-- Summary Stats Section -->
    <section class="grid grid-cols-3 gap-sm">
        <div class="bg-surface-container-lowest p-md rounded-xl border border-surface-variant shadow-sm flex flex-col items-center text-center">
            <span class="font-label-sm text-label-sm text-on-surface-variant mb-xs">Total</span>
            <span class="font-display-lg-mobile text-display-lg-mobile text-primary font-bold">{{ $publishedCount + $draftCount }}</span>
        </div>
        <div class="bg-surface-container-lowest p-md rounded-xl border border-surface-variant shadow-sm flex flex-col items-center text-center">
            <span class="font-label-sm text-label-sm text-on-surface-variant mb-xs">Draft</span>
            <span class="font-display-lg-mobile text-display-lg-mobile text-on-surface-variant font-bold">{{ $draftCount }}</span>
        </div>
        <div class="bg-surface-container-lowest p-md rounded-xl border border-surface-variant shadow-sm flex flex-col items-center text-center">
            <span class="font-label-sm text-label-sm text-on-surface-variant mb-xs">Publikasi</span>
            <span class="font-display-lg-mobile text-display-lg-mobile text-tertiary font-bold">{{ $publishedCount }}</span>
        </div>
    </section>

    <!-- Primary CTA -->
    <button onclick="openModalTambah()" class="w-full bg-primary text-on-primary font-headline-md py-md rounded-xl flex items-center justify-center gap-sm shadow-md active:scale-[0.98] transition-transform cursor-pointer">
        <span class="material-symbols-outlined" style="font-variation-settings: 'wght' 600;">add</span>
        <span>Tambah Artikel Baru</span>
    </button>

    <!-- Search & Filter -->
    <div class="space-y-md">
        <div class="relative">
            <span class="material-symbols-outlined absolute left-md top-1/2 -translate-y-1/2 text-outline">search</span>
            <input id="search-article-input" class="w-full pl-12 pr-md py-md bg-surface-container-lowest border border-outline-variant rounded-xl focus:ring-primary focus:border-primary text-body-md outline-none" placeholder="Cari judul artikel..." type="text"/>
        </div>
        <div class="flex gap-sm overflow-x-auto hide-scrollbar pb-xs">
            <button onclick="filterCategory('all', this)" class="cat-filter-btn px-lg py-sm bg-primary text-on-primary rounded-full text-label-sm whitespace-nowrap">Semua</button>
            <button onclick="filterCategory('draft', this)" class="cat-filter-btn px-lg py-sm bg-surface-container-high text-on-surface-variant rounded-full text-label-sm whitespace-nowrap border border-surface-variant">Draft</button>
            <button onclick="filterCategory('aktif', this)" class="cat-filter-btn px-lg py-sm bg-surface-container-high text-on-surface-variant rounded-full text-label-sm whitespace-nowrap border border-surface-variant">Published</button>
            <button onclick="filterCategory('edukasi', this)" class="cat-filter-btn px-lg py-sm bg-surface-container-high text-on-surface-variant rounded-full text-label-sm whitespace-nowrap border border-surface-variant">Edukasi</button>
            <button onclick="filterCategory('berita', this)" class="cat-filter-btn px-lg py-sm bg-surface-container-high text-on-surface-variant rounded-full text-label-sm whitespace-nowrap border border-surface-variant">Berita</button>
            <button onclick="filterCategory('tips', this)" class="cat-filter-btn px-lg py-sm bg-surface-container-high text-on-surface-variant rounded-full text-label-sm whitespace-nowrap border border-surface-variant">Tips</button>
            <button onclick="filterCategory('pengelolaan', this)" class="cat-filter-btn px-lg py-sm bg-surface-container-high text-on-surface-variant rounded-full text-label-sm whitespace-nowrap border border-surface-variant">Pengelolaan</button>
        </div>
    </div>

    <!-- Article List -->
    <div class="space-y-md">
        <h2 class="font-headline-md text-headline-md text-on-surface font-bold">Daftar Artikel Terbaru</h2>

        <div id="article-list-container" class="space-y-md">
            @forelse($articles as $a)
                <div class="article-card-item bg-surface-container-lowest border border-surface-variant rounded-xl p-md flex flex-col sm:flex-row gap-md shadow-sm active:bg-surface-container-low transition-colors relative"
                     data-title="{{ strtolower($a->title) }}"
                     data-category="{{ strtolower($a->category) }}"
                     data-status="{{ strtolower($a->status) }}">
                    
                    <div class="w-full sm:w-24 h-24 shrink-0 rounded-lg overflow-hidden bg-surface-variant">
                        <img src="{{ $a->image ? asset($a->image) : asset('images/hero_edukasi.png') }}" alt="{{ $a->title }}" class="w-full h-full object-cover"/>
                    </div>
                    
                    <div class="flex-1 flex flex-col justify-between min-w-0">
                        <div class="pr-12">
                            <span class="font-label-sm text-[10px] text-primary uppercase tracking-wider font-semibold">{{ $a->category }}</span>
                            <h3 class="font-headline-md text-body-lg font-bold text-on-surface truncate mt-xs">{{ $a->title }}</h3>
                            <p class="font-label-sm text-on-surface-variant mt-xs line-clamp-1 text-xs">{{ $a->content }}</p>
                            <p class="font-label-sm text-[11px] text-outline mt-1">Edit terakhir: {{ $a->created_at ? $a->created_at->format('d M Y') : '-' }}</p>
                        </div>
                        
                        <div class="flex justify-between items-center mt-sm pt-2 border-t border-surface-variant/50">
                            @if(strtolower($a->status) === 'aktif' || strtolower($a->status) === 'published')
                                <span class="px-2.5 py-0.5 bg-tertiary-container text-on-tertiary-container rounded-full text-[10px] font-bold uppercase">Published</span>
                            @else
                                <span class="px-2.5 py-0.5 bg-secondary-container text-on-secondary-container rounded-full text-[10px] font-bold uppercase">Draft</span>
                            @endif

                            <div class="flex items-center gap-2">
                                <button onclick="openModalEditFromBtn(this)" data-article="{{ json_encode($a) }}" class="p-1.5 text-primary hover:bg-surface-container-high rounded-lg transition-colors flex items-center justify-center" title="Edit Artikel">
                                    <span class="material-symbols-outlined text-[18px]">edit</span>
                                </button>
                                <button onclick="deleteArticleItem({{ $a->id }})" class="p-1.5 text-error hover:bg-error-container rounded-lg transition-colors flex items-center justify-center" title="Hapus Artikel">
                                    <span class="material-symbols-outlined text-[18px]">delete</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            @empty
                <div class="bg-surface-container-lowest border border-surface-variant rounded-xl p-8 text-center text-on-surface-variant">
                    <span class="material-symbols-outlined text-4xl mb-2 text-outline">article</span>
                    <p class="font-bold">Belum ada artikel edukasi yang dibuat.</p>
                    <p class="text-xs mt-1">Klik tombol "Tambah Artikel Baru" di atas untuk mempublikasikan artikel pertama.</p>
                </div>
            @endforelse
        </div>
    </div>
</main>

<!-- Drawer Overlay (Hidden by Default) -->
<div class="fixed inset-0 bg-black/50 z-[60] opacity-0 pointer-events-none transition-opacity duration-300" id="drawer-overlay"></div>

<!-- Sidebar Drawer (Menu Samping) -->
<aside class="fixed left-0 top-0 bottom-0 w-[280px] bg-surface-container-lowest z-[70] -translate-x-full transition-transform duration-300 shadow-2xl flex flex-col" id="sidebar">
    <div class="p-lg flex items-center justify-between border-b border-surface-variant">
        <div class="flex items-center gap-md">
            <span class="material-symbols-outlined text-primary text-display-lg-mobile" style="font-variation-settings: 'FILL' 1;">school</span>
            <div class="flex flex-col">
                <span class="font-headline-md text-headline-md font-bold text-primary">EduManage</span>
                <span class="font-label-sm text-on-surface-variant">Admin Console</span>
            </div>
        </div>
        <button id="sidebar-close" class="p-1 rounded-full hover:bg-surface-container-high text-on-surface">
            <span class="material-symbols-outlined text-[22px]">close</span>
        </button>
    </div>

    <!-- Menu Samping Navigasi -->
    <nav class="flex-1 p-md space-y-sm overflow-y-auto mt-md">
        <a class="flex items-center gap-md p-md rounded-xl text-on-surface-variant hover:bg-surface-container-low transition-colors" href="/admin">
            <span class="material-symbols-outlined">dashboard</span>
            <span class="font-body-lg">Dashboard</span>
        </a>
        <a class="flex items-center gap-md p-md rounded-xl bg-secondary-container text-on-secondary-container shadow-sm font-semibold" href="/admin/artikel">
            <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">article</span>
            <span class="font-body-lg">Manajemen Artikel</span>
        </a>
        <a class="flex items-center gap-md p-md rounded-xl text-on-surface-variant hover:bg-surface-container-low transition-colors" href="/admin/bank-digital">
            <span class="material-symbols-outlined">equalizer</span>
            <span class="font-body-lg">Bank Sampah Digital</span>
        </a>
        <a class="flex items-center gap-md p-md rounded-xl text-on-surface-variant hover:bg-surface-container-low transition-colors" href="/admin/galeri">
            <span class="material-symbols-outlined">collections</span>
            <span class="font-body-lg">Galeri Kegiatan</span>
        </a>
        <div class="h-px bg-surface-variant mx-md my-md"></div>
        <a class="flex items-center gap-md p-md rounded-xl text-on-surface-variant hover:bg-surface-container-low transition-colors" href="/" target="_blank">
            <span class="material-symbols-outlined">open_in_new</span>
            <span class="font-body-lg">Lihat Website Warga</span>
        </a>
    </nav>

    <div class="p-lg bg-surface-container-low border-t border-surface-variant">
        <div class="flex items-center justify-between gap-md mb-3">
            <div class="flex items-center gap-md overflow-hidden">
                <div class="w-10 h-10 rounded-full bg-primary-container flex items-center justify-center text-on-primary-container font-bold shrink-0">
                    {{ strtoupper(substr(session('admin_name', 'Admin'), 0, 1)) }}
                </div>
                <div class="flex flex-col overflow-hidden">
                    <span class="font-body-md font-bold text-on-surface truncate">{{ session('admin_name', 'Admin Utama') }}</span>
                    <span class="font-label-sm text-on-surface-variant truncate">admin@balonggandu.desa.id</span>
                </div>
            </div>
        </div>
        <form action="{{ route('admin.logout') }}" method="POST">
            @csrf
            <button type="submit" class="w-full flex items-center justify-center gap-2 p-2.5 rounded-xl bg-error-container text-on-error-container font-bold text-xs hover:bg-error hover:text-white transition-all">
                <span class="material-symbols-outlined text-[18px]">logout</span>
                <span>Keluar Sistem</span>
            </button>
        </form>
    </div>
</aside>

<!-- ═══ MODAL TAMBAH / EDIT ARTIKEL ═══ -->
<div id="modal-article" class="fixed inset-0 z-[100] bg-black/50 backdrop-blur-sm flex items-center justify-center p-4 opacity-0 pointer-events-none transition-all duration-300">
    <div class="bg-surface-container-lowest max-w-lg w-full rounded-2xl shadow-2xl border border-surface-variant p-6 space-y-4">
        <div class="flex items-center justify-between pb-3 border-b border-surface-variant">
            <h3 id="modal-article-title" class="font-headline-md text-headline-md text-on-surface font-bold">Tambah Artikel Edukasi Baru</h3>
            <button onclick="closeModalArticle()" class="p-1 rounded-full hover:bg-surface-container-high text-on-surface-variant">
                <span class="material-symbols-outlined text-[20px]">close</span>
            </button>
        </div>

        <form id="form-article" onsubmit="handleArticleSubmit(event)" enctype="multipart/form-data" class="space-y-4">
            @csrf
            <input type="hidden" id="article-id" name="id" value="">

            <div>
                <label class="block font-label-sm text-label-sm font-semibold text-on-surface mb-1">Judul Artikel</label>
                <input type="text" id="art-input-title" name="title" required placeholder="Contoh: Tata Cara Memilah Sampah 3R" class="w-full px-3 py-2 bg-surface-container-low border border-outline-variant rounded-xl focus:border-primary focus:ring-1 focus:ring-primary outline-none text-body-md">
            </div>

            <div class="grid grid-cols-2 gap-3">
                <div>
                    <label class="block font-label-sm text-label-sm font-semibold text-on-surface mb-1">Kategori Topik</label>
                    <select id="art-input-category" name="category" class="w-full px-3 py-2 bg-surface-container-low border border-outline-variant rounded-xl focus:border-primary focus:ring-1 focus:ring-primary outline-none text-body-md">
                        <option value="Edukasi">Edukasi</option>
                        <option value="Berita">Berita</option>
                        <option value="Tips">Tips</option>
                        <option value="Pengelolaan">Pengelolaan</option>
                        <option value="Manfaat">Manfaat</option>
                        <option value="Dasar 3R">Dasar 3R</option>
                    </select>
                </div>
                <div>
                    <label class="block font-label-sm text-label-sm font-semibold text-on-surface mb-1">Status Publikasi</label>
                    <select id="art-input-status" name="status" class="w-full px-3 py-2 bg-surface-container-low border border-outline-variant rounded-xl focus:border-primary focus:ring-1 focus:ring-primary outline-none text-body-md">
                        <option value="Aktif">Published (Aktif)</option>
                        <option value="Draft">Draft</option>
                    </select>
                </div>
            </div>

            <div>
                <label class="block font-label-sm text-label-sm font-semibold text-on-surface mb-1">Gambar Header Artikel (Opsional)</label>
                <div class="space-y-2">
                    <input type="file" id="art-input-image" name="image" accept="image/*" onchange="previewArticleImage(this)" class="w-full text-xs text-on-surface-variant file:mr-3 file:py-2 file:px-3 file:rounded-xl file:border-0 file:text-xs file:font-semibold file:bg-primary-container file:text-on-primary-container hover:file:bg-primary cursor-pointer border border-outline-variant rounded-xl p-1">
                    <input type="text" id="art-input-image-url" name="image_url" placeholder="Atau tempel URL gambar (https://...)" class="w-full px-3 py-2 bg-surface-container-low border border-outline-variant rounded-xl focus:border-primary focus:ring-1 focus:ring-primary outline-none text-xs">
                    
                    <!-- Preview Box -->
                    <div id="article-img-preview-box" class="hidden relative h-32 w-full rounded-xl overflow-hidden border border-outline-variant bg-surface-variant">
                        <img id="article-img-preview" src="" alt="Preview Gambar Artikel" class="w-full h-full object-cover"/>
                        <button type="button" onclick="removeArticleImagePreview()" class="absolute top-2 right-2 bg-black/60 text-white rounded-full p-1 hover:bg-black/80 flex items-center justify-center">
                            <span class="material-symbols-outlined text-[16px]">close</span>
                        </button>
                    </div>
                </div>
            </div>

            <div>
                <label class="block font-label-sm text-label-sm font-semibold text-on-surface mb-1">Isi Konten Artikel</label>
                <textarea id="art-input-content" name="content" rows="4" required placeholder="Tuliskan materi edukasi atau berita lengkap di sini..." class="w-full px-3 py-2 bg-surface-container-low border border-outline-variant rounded-xl focus:border-primary focus:ring-1 focus:ring-primary outline-none text-body-md"></textarea>
            </div>

            <div class="flex justify-end gap-3 pt-3 border-t border-surface-variant">
                <button type="button" onclick="closeModalArticle()" class="px-4 py-2 border border-outline-variant text-on-surface-variant font-label-sm rounded-xl hover:bg-surface-container-high transition-colors">Batal</button>
                <button type="submit" id="btn-submit-article" class="px-5 py-2 bg-primary text-on-primary font-label-sm rounded-xl hover:bg-primary-container active:scale-95 transition-all shadow-sm font-semibold">Simpan Artikel</button>
            </div>
        </form>
    </div>
</div>

<script>
    const sidebar = document.getElementById('sidebar');
    const overlay = document.getElementById('drawer-overlay');
    const toggle = document.getElementById('sidebar-toggle');
    const closeBtn = document.getElementById('sidebar-close');

    function openSidebar() {
        sidebar.classList.remove('-translate-x-full');
        overlay.classList.remove('opacity-0', 'pointer-events-none');
    }

    function closeSidebar() {
        sidebar.classList.add('-translate-x-full');
        overlay.classList.add('opacity-0', 'pointer-events-none');
    }

    if (toggle) toggle.addEventListener('click', openSidebar);
    if (overlay) overlay.addEventListener('click', closeSidebar);
    if (closeBtn) closeBtn.addEventListener('click', closeSidebar);

    // Image Preview Handlers
    function previewArticleImage(input) {
        const previewBox = document.getElementById('article-img-preview-box');
        const previewImg = document.getElementById('article-img-preview');
        if (input.files && input.files[0]) {
            const reader = new FileReader();
            reader.onload = function(e) {
                previewImg.src = e.target.result;
                previewBox.classList.remove('hidden');
            }
            reader.readAsDataURL(input.files[0]);
        }
    }

    function removeArticleImagePreview() {
        document.getElementById('art-input-image').value = '';
        document.getElementById('art-input-image-url').value = '';
        document.getElementById('article-img-preview').src = '';
        document.getElementById('article-img-preview-box').classList.add('hidden');
    }

    // Modal Control
    function openModalTambah() {
        document.getElementById('article-id').value = '';
        document.getElementById('modal-article-title').textContent = 'Tambah Artikel Edukasi Baru';
        document.getElementById('btn-submit-article').textContent = 'Simpan Artikel';
        document.getElementById('form-article').reset();
        removeArticleImagePreview();
        document.getElementById('modal-article').classList.remove('opacity-0', 'pointer-events-none');
    }

    function openModalEditFromBtn(btn) {
        try {
            const article = JSON.parse(btn.getAttribute('data-article'));
            openModalEdit(article);
        } catch (e) {
            console.error('Error parsing article JSON:', e);
            alert('Gagal membaca data artikel.');
        }
    }

    function openModalEdit(article) {
        document.getElementById('article-id').value = article.id;
        document.getElementById('modal-article-title').textContent = 'Edit Artikel Edukasi';
        document.getElementById('btn-submit-article').textContent = 'Perbarui Artikel';
        document.getElementById('art-input-title').value = article.title;
        document.getElementById('art-input-category').value = article.category;
        document.getElementById('art-input-status').value = article.status || 'Aktif';
        document.getElementById('art-input-content').value = article.content;

        const previewBox = document.getElementById('article-img-preview-box');
        const previewImg = document.getElementById('article-img-preview');
        document.getElementById('art-input-image').value = '';
        if (article.image) {
            document.getElementById('art-input-image-url').value = article.image;
            previewImg.src = article.image.startsWith('http') || article.image.startsWith('/') ? article.image : '/' + article.image;
            previewBox.classList.remove('hidden');
        } else {
            document.getElementById('art-input-image-url').value = '';
            previewBox.classList.add('hidden');
        }

        document.getElementById('modal-article').classList.remove('opacity-0', 'pointer-events-none');
    }

    function closeModalArticle() {
        document.getElementById('modal-article').classList.add('opacity-0', 'pointer-events-none');
    }

    // Handle Submit Add / Edit
    function handleArticleSubmit(e) {
        e.preventDefault();
        const form = document.getElementById('form-article');
        const articleId = document.getElementById('article-id').value;
        const formData = new FormData(form);

        const url = articleId ? `/admin/artikel/${articleId}` : '/admin/artikel';

        fetch(url, {
            method: 'POST',
            headers: {
                'X-CSRF-TOKEN': '{{ csrf_token() }}',
                'Accept': 'application/json'
            },
            body: formData
        })
        .then(async res => {
            if (res.status === 419) {
                alert('Sesi telah berakhir (CSRF Expired). Silakan refresh halaman (F5) dan coba lagi.');
                return;
            }
            const data = await res.json().catch(() => ({}));
            if (res.ok && data.success) {
                location.reload();
            } else {
                let msg = data.message || '';
                if (data.errors) {
                    msg = Object.values(data.errors).flat().join('\n');
                }
                if (!msg) {
                    msg = res.statusText ? (`Error (${res.status}): ${res.statusText}`) : 'Gagal menyimpan artikel.';
                }
                alert(msg);
            }
        })
        .catch(err => {
            console.error(err);
            alert('Terjadi kesalahan koneksi saat menyimpan artikel: ' + err.message);
        });
    }

    // Delete Article Item
    function deleteArticleItem(id) {
        if (!confirm('Apakah Anda yakin ingin menghapus artikel ini?')) return;

        fetch(`/admin/artikel/${id}`, {
            method: 'DELETE',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': '{{ csrf_token() }}'
            }
        })
        .then(res => res.json())
        .then(data => {
            if (data.success) {
                location.reload();
            } else {
                alert(data.message || 'Gagal menghapus artikel.');
            }
        })
        .catch(err => {
            console.error(err);
            alert('Terjadi kesalahan sistem saat menghapus artikel.');
        });
    }

    // Filter by Category or Status Pills
    function filterCategory(cat, btn) {
        document.querySelectorAll('.cat-filter-btn').forEach(b => {
            b.classList.remove('bg-primary', 'text-on-primary');
            b.classList.add('bg-surface-container-high', 'text-on-surface-variant', 'border', 'border-surface-variant');
        });
        btn.classList.add('bg-primary', 'text-on-primary');
        btn.classList.remove('bg-surface-container-high', 'text-on-surface-variant', 'border', 'border-surface-variant');

        const cards = document.querySelectorAll('.article-card-item');
        cards.forEach(card => {
            const cardCat = card.getAttribute('data-category') || '';
            const cardStatus = card.getAttribute('data-status') || '';
            if (cat === 'all' || cardCat.includes(cat) || cardStatus.includes(cat)) {
                card.style.display = 'flex';
            } else {
                card.style.display = 'none';
            }
        });
    }

    // Live Search Filter
    document.getElementById('search-article-input').addEventListener('input', function(e) {
        const query = e.target.value.toLowerCase().trim();
        const cards = document.querySelectorAll('.article-card-item');
        cards.forEach(card => {
            const title = card.getAttribute('data-title') || '';
            const category = card.getAttribute('data-category') || '';
            if (title.includes(query) || category.includes(query)) {
                card.style.display = 'flex';
            } else {
                card.style.display = 'none';
            }
        });
    });
</script>
</body>
</html>
