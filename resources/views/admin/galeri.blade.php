<!DOCTYPE html>
<html lang="id" class="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manajemen Galeri — Admin SampahKita</title>
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
        .gallery-card-hover {
            transition: all 0.3s ease;
        }
        .gallery-card-hover:hover {
            transform: translateY(-4px);
            box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body class="bg-background text-on-background min-h-screen flex flex-col font-body-md text-body-md overflow-x-hidden custom-scrollbar">

<!-- Backdrop for Admin Drawer -->
<div id="admin-backdrop" class="fixed inset-0 bg-black/50 z-40 hidden opacity-0 transition-opacity duration-300" onclick="toggleAdminDrawer()"></div>

<!-- Drawer Sidebar -->
<aside id="admin-drawer" class="fixed left-0 top-0 h-full w-[280px] bg-[#012d1d] text-white flex flex-col p-6 z-50 transition-transform duration-300 transform -translate-x-full shadow-2xl">
    <div class="mb-8 flex justify-between items-center pb-4 border-b border-white/10">
        <div class="flex items-center gap-3">
            <div class="w-10 h-10 rounded-xl bg-[#fd8603] flex items-center justify-center text-white font-bold">
                <span class="material-symbols-outlined text-[24px]">photo_library</span>
            </div>
            <div>
                <h1 class="font-bold text-[16px] leading-tight">Admin Galeri</h1>
                <p class="text-[11px] text-[#a5d0b9]">Desa Balonggandu</p>
            </div>
        </div>
        <button onclick="toggleAdminDrawer()" class="p-1 rounded-full hover:bg-white/10 text-white flex items-center justify-center">
            <span class="material-symbols-outlined text-[22px]">close</span>
        </button>
    </div>

    <nav class="flex-1 space-y-2">
        <a class="flex items-center gap-3 px-4 py-3 rounded-xl text-gray-300 hover:text-white hover:bg-white/10 font-semibold text-xs transition-all" href="/admin">
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
        <a class="flex items-center gap-3 px-4 py-3 rounded-xl bg-white/15 text-white font-bold text-xs shadow-inner" href="/admin/galeri">
            <span class="material-symbols-outlined text-[20px]">photo_library</span>
            Galeri Kegiatan
        </a>
        <a class="flex items-center gap-3 px-4 py-3 rounded-xl text-gray-300 hover:text-white hover:bg-white/10 font-semibold text-xs transition-all" href="/admin/kontak">
            <span class="material-symbols-outlined text-[20px]">contact_mail</span>
            Pesan &amp; Kontak
        </a>
        <div class="pt-4 mt-4 border-t border-white/10">
            <a href="/galeri" target="_blank" class="flex items-center justify-between px-4 py-2.5 rounded-xl bg-emerald-900/50 hover:bg-emerald-900 text-[#a5d0b9] font-bold text-xs transition-all border border-emerald-700/50">
                <span class="flex items-center gap-2">
                    <span class="material-symbols-outlined text-[18px]">public</span>
                    Lihat Galeri Warga
                </span>
                <span class="material-symbols-outlined text-[14px]">open_in_new</span>
            </a>
        </div>
    </nav>

    <div class="pt-4 border-t border-white/10">
        <form action="{{ route('admin.logout') }}" method="POST">
            @csrf
            <button type="submit" class="w-full bg-red-500/20 hover:bg-red-600 text-red-200 hover:text-white font-bold py-2.5 rounded-xl transition-all text-xs flex items-center justify-center gap-2 border border-red-500/30">
                <span class="material-symbols-outlined text-[18px]">logout</span>
                Keluar Sistem
            </button>
        </form>
    </div>
</aside>

<!-- TopAppBar -->
<header class="flex justify-between items-center h-16 px-md md:px-margin-desktop w-full z-30 bg-surface shadow-sm top-0 sticky">
    <div class="flex items-center gap-sm">
        <button onclick="toggleAdminDrawer()" class="p-2 rounded-full hover:bg-surface-container-high text-on-surface flex items-center justify-center" title="Menu Navigation">
            <span class="material-symbols-outlined">menu</span>
        </button>
        <div class="flex items-center gap-sm cursor-pointer" onclick="location.href='/admin'">
            <span class="material-symbols-outlined text-primary" data-icon="school">school</span>
            <h1 class="font-headline-md text-headline-md font-bold text-primary">EduManage Admin</h1>
        </div>
    </div>
    <div class="flex items-center gap-md">
        <div class="flex items-center gap-sm md:gap-md">
            <span class="material-symbols-outlined text-on-surface-variant cursor-pointer hover:text-primary transition-colors p-2 rounded-full hover:bg-surface-container-high" data-icon="search" onclick="focusSearch()">search</span>
            <span class="material-symbols-outlined text-on-surface-variant cursor-pointer hover:text-primary transition-colors p-2 rounded-full hover:bg-surface-container-high" data-icon="notifications">notifications</span>
            <div class="w-8 h-8 rounded-full bg-secondary-container flex items-center justify-center text-on-secondary-container font-bold text-xs cursor-pointer active:scale-95 transition-transform" title="{{ session('admin_name', 'Admin') }}">
                {{ strtoupper(substr(session('admin_name', 'Admin'), 0, 1)) }}
            </div>
        </div>
    </div>
</header>

<!-- Main Content Canvas -->
<main class="flex-grow px-margin-mobile md:px-margin-desktop py-lg pb-32">

    <!-- Header Section -->
    <section class="flex flex-col md:flex-row md:items-end justify-between gap-md mb-xl">
        <div>
            <h2 class="font-display-lg-mobile md:font-display-lg text-display-lg-mobile md:text-display-lg text-on-surface mb-xs">Manajemen Galeri</h2>
            <p class="text-on-surface-variant max-w-2xl font-body-md text-body-md">Pantau dan kelola aset visual institusi. Unggah foto kegiatan, video edukasi, dan dokumentasi fasilitas dalam satu tempat.</p>
        </div>
        <button onclick="openUploadModal()" class="bg-primary text-on-primary px-lg h-10 md:h-12 rounded-xl flex items-center justify-center gap-sm font-label-sm text-label-sm shadow-sm hover:bg-primary-container transition-all active:scale-95">
            <span class="material-symbols-outlined" data-icon="cloud_upload">cloud_upload</span>
            <span>Upload New</span>
        </button>
    </section>

    <!-- Search & Filter Bar -->
    <section class="bg-surface-container-lowest rounded-xl p-md shadow-sm border border-outline-variant mb-lg flex flex-wrap gap-md items-center">
        <div class="flex-grow min-w-[240px] relative">
            <span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-outline" data-icon="search">search</span>
            <input type="text" id="gallery-search-input" placeholder="Cari berdasarkan judul atau pengunggah..." class="w-full bg-surface-container-low border border-outline-variant rounded-lg pl-10 pr-4 py-2 focus:border-primary focus:ring-1 focus:ring-primary outline-none transition-all">
        </div>
        <div class="flex items-center gap-sm overflow-x-auto pb-xs md:pb-0">
            <button onclick="filterType('all', this)" class="filter-tab-btn flex items-center gap-xs px-md py-2 bg-secondary-container text-on-secondary-container rounded-full font-label-sm text-label-sm">
                <span class="material-symbols-outlined text-[18px]" data-icon="filter_list">filter_list</span>
                <span>All Media</span>
            </button>
            <button onclick="filterType('photo', this)" class="filter-tab-btn flex items-center gap-xs px-md py-2 hover:bg-surface-container-high text-on-surface-variant rounded-full font-label-sm text-label-sm transition-colors">
                <span class="material-symbols-outlined text-[18px]" data-icon="image">image</span>
                <span>Photos</span>
            </button>
            <button onclick="filterType('video', this)" class="filter-tab-btn flex items-center gap-xs px-md py-2 hover:bg-surface-container-high text-on-surface-variant rounded-full font-label-sm text-label-sm transition-colors">
                <span class="material-symbols-outlined text-[18px]" data-icon="videocam">videocam</span>
                <span>Videos</span>
            </button>
        </div>
    </section>

    <!-- Bento Grid Gallery -->
    <div id="gallery-grid" class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-gutter">
        @forelse ($galleries as $index => $item)
            @if ($item->is_featured || ($index === 0 && !$galleries->where('is_featured', true)->count()))
                <!-- Gallery Item 1 (Large Featured) -->
                <div class="gallery-card group relative bg-surface-container-lowest rounded-xl overflow-hidden border border-outline-variant shadow-sm gallery-card-hover sm:col-span-2 sm:row-span-2 h-[400px]"
                     data-type="{{ strtolower($item->type) }}"
                     data-title="{{ strtolower($item->title) }}"
                     data-uploader="{{ strtolower($item->uploader) }}">
                    <div class="w-full h-full bg-cover bg-center transition-transform duration-500 group-hover:scale-105"
                         style="background-image: url('{{ $item->image_url }}')">
                    </div>
                    <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent flex flex-col justify-end p-lg text-white">
                        <div class="flex items-center gap-sm mb-xs">
                            <span class="bg-primary text-[10px] px-2 py-0.5 rounded uppercase font-bold tracking-wider">Featured</span>
                            <span class="bg-white/20 backdrop-blur-md text-[10px] px-2 py-0.5 rounded uppercase font-bold tracking-wider">{{ $item->category }}</span>
                        </div>
                        <h3 class="font-headline-md text-headline-md mb-xs">{{ $item->title }}</h3>
                        <div class="flex items-center gap-md text-white/80 font-label-sm text-label-sm">
                            <span class="flex items-center gap-1"><span class="material-symbols-outlined text-[16px]" data-icon="calendar_today">calendar_today</span> {{ $item->created_at->format('M d, Y') }}</span>
                            <span class="flex items-center gap-1"><span class="material-symbols-outlined text-[16px]" data-icon="person">person</span> {{ $item->uploader }}</span>
                        </div>
                    </div>
                    <!-- Overlay Actions -->
                    <div class="overlay-actions absolute top-md right-md flex gap-sm opacity-0 group-hover:opacity-100 transition-opacity duration-200 z-10">
                        <button onclick="openEditModal({{ json_encode($item) }})" class="w-10 h-10 rounded-full bg-white/90 text-primary flex items-center justify-center shadow-lg hover:bg-white active:scale-90 transition-all" title="Edit Item">
                            <span class="material-symbols-outlined" data-icon="edit">edit</span>
                        </button>
                        <button onclick="deleteGalleryItem({{ $item->id }})" class="w-10 h-10 rounded-full bg-error-container text-on-error-container flex items-center justify-center shadow-lg hover:bg-error hover:text-on-error active:scale-90 transition-all" title="Hapus Item">
                            <span class="material-symbols-outlined" data-icon="delete">delete</span>
                        </button>
                    </div>
                </div>
            @else
                <!-- Gallery Standard Item -->
                <div class="gallery-card group relative bg-surface-container-lowest rounded-xl overflow-hidden border border-outline-variant shadow-sm gallery-card-hover h-[192px]"
                     data-type="{{ strtolower($item->type) }}"
                     data-title="{{ strtolower($item->title) }}"
                     data-uploader="{{ strtolower($item->uploader) }}">
                    <div class="w-full h-full bg-cover bg-center transition-transform duration-300 group-hover:scale-105"
                         style="background-image: url('{{ $item->image_url }}')">
                    </div>
                    
                    @if (strtolower($item->type) === 'video')
                        <div class="absolute top-md left-md bg-primary/90 text-white p-1 rounded">
                            <span class="material-symbols-outlined text-[16px]" data-icon="videocam">videocam</span>
                        </div>
                        <div class="absolute inset-0 flex items-center justify-center">
                            <div class="w-12 h-12 rounded-full bg-white/30 backdrop-blur-md border border-white/50 flex items-center justify-center text-white">
                                <span class="material-symbols-outlined" data-icon="play_arrow" style="font-variation-settings: 'FILL' 1;">play_arrow</span>
                            </div>
                        </div>
                    @endif

                    <div class="absolute bottom-0 left-0 right-0 p-md bg-gradient-to-t from-black/80 via-black/40 to-transparent">
                        <p class="text-white font-label-sm text-label-sm truncate font-semibold">{{ $item->title }}</p>
                        <p class="text-white/70 text-[10px]">{{ $item->created_at->format('M d, Y') }} • {{ $item->uploader }}</p>
                    </div>

                    <!-- Overlay Actions -->
                    <div class="overlay-actions absolute top-2 right-2 flex gap-1 opacity-0 group-hover:opacity-100 transition-opacity duration-200 z-10">
                        <button onclick="openEditModal({{ json_encode($item) }})" class="w-8 h-8 rounded-full bg-white/90 text-primary flex items-center justify-center shadow-lg hover:bg-white active:scale-90 transition-all" title="Edit Item">
                            <span class="material-symbols-outlined text-[18px]" data-icon="edit">edit</span>
                        </button>
                        <button onclick="deleteGalleryItem({{ $item->id }})" class="w-8 h-8 rounded-full bg-error-container text-on-error-container flex items-center justify-center shadow-lg hover:bg-error hover:text-on-error active:scale-90 transition-all" title="Hapus Item">
                            <span class="material-symbols-outlined text-[18px]" data-icon="delete">delete</span>
                        </button>
                    </div>
                </div>
            @endif
        @empty
            <div class="col-span-full py-16 text-center text-on-surface-variant">
                <span class="material-symbols-outlined text-4xl mb-2 text-outline">collections</span>
                <p class="font-semibold text-lg">Belum ada aset galeri.</p>
                <p class="text-sm">Klik tombol "Upload New" di atas untuk menambahkan foto/video pertama Anda.</p>
            </div>
        @endforelse
    </div>

</main>

<!-- BottomNavBar (Mobile Only) -->
<nav class="md:hidden fixed bottom-0 w-full z-30 flex justify-around items-center h-[72px] px-sm pb-safe bg-surface-container-lowest shadow-lg rounded-t-xl border-t border-outline-variant">
    <div onclick="location.href='/'" class="flex flex-col items-center justify-center text-on-surface-variant px-4 py-1 active:scale-90 transition-transform cursor-pointer">
        <span class="material-symbols-outlined" data-icon="home">home</span>
        <span class="font-label-sm text-label-sm">Home</span>
    </div>
    <div onclick="location.href='/edukasi'" class="flex flex-col items-center justify-center text-on-surface-variant px-4 py-1 active:scale-90 transition-transform cursor-pointer">
        <span class="material-symbols-outlined" data-icon="menu_book">menu_book</span>
        <span class="font-label-sm text-label-sm">Edukasi</span>
    </div>
    <div onclick="location.href='/bank-digital'" class="flex flex-col items-center justify-center text-on-surface-variant px-4 py-1 active:scale-90 transition-transform cursor-pointer">
        <span class="material-symbols-outlined" data-icon="settings_suggest">settings_suggest</span>
        <span class="font-label-sm text-label-sm">Pengelolaan</span>
    </div>
    <div onclick="location.href='/admin/galeri'" class="flex flex-col items-center justify-center bg-secondary-container text-on-secondary-container rounded-full px-4 py-1 active:scale-90 transition-transform cursor-pointer">
        <span class="material-symbols-outlined active-nav-indicator" data-icon="collections">collections</span>
        <span class="font-label-sm text-label-sm">Galeri</span>
    </div>
</nav>

<!-- Floating Action Button (Mobile Enhancement) -->
<button onclick="openUploadModal()" class="md:hidden fixed bottom-24 right-6 w-14 h-14 bg-primary text-on-primary rounded-full shadow-xl flex items-center justify-center active:scale-90 transition-all z-40">
    <span class="material-symbols-outlined text-[28px]" data-icon="add">add</span>
</button>

<!-- ═══ MODAL UPLOAD / ADD ASSET ═══ -->
<div id="upload-modal" class="fixed inset-0 z-[100] bg-black/50 backdrop-blur-sm flex items-center justify-center p-4 opacity-0 pointer-events-none transition-all duration-300">
    <div class="bg-surface-container-lowest max-w-lg w-full rounded-2xl shadow-2xl border border-outline-variant p-6 flex flex-col gap-4">
        <div class="flex items-center justify-between pb-3 border-b border-outline-variant">
            <h3 id="modal-title-text" class="font-headline-md text-headline-md text-on-surface font-bold">Upload New Media Asset</h3>
            <button onclick="closeUploadModal()" class="p-1 rounded-full hover:bg-surface-container-high text-on-surface-variant transition-colors">
                <span class="material-symbols-outlined text-[20px]">close</span>
            </button>
        </div>
        
        <form id="gallery-form" onsubmit="handleFormSubmit(event)" enctype="multipart/form-data" class="space-y-4">
            @csrf
            <input type="hidden" id="edit-id" name="id" value="">

            <div>
                <label class="block font-label-sm text-label-sm font-semibold text-on-surface mb-1">Judul Media</label>
                <input type="text" id="input-title" name="title" required placeholder="Contoh: Seminar Daur Ulang Sampah 2024" class="w-full px-3 py-2 bg-surface-container-low border border-outline-variant rounded-lg focus:border-primary focus:ring-1 focus:ring-primary outline-none">
            </div>

            <div class="grid grid-cols-2 gap-3">
                <div>
                    <label class="block font-label-sm text-label-sm font-semibold text-on-surface mb-1">Kategori</label>
                    <select id="input-category" name="category" class="w-full px-3 py-2 bg-surface-container-low border border-outline-variant rounded-lg focus:border-primary focus:ring-1 focus:ring-primary outline-none">
                        <option value="Education">Education</option>
                        <option value="Sains">Sains</option>
                        <option value="Fasilitas">Fasilitas</option>
                        <option value="Kegiatan">Kegiatan</option>
                        <option value="Daur Ulang">Daur Ulang</option>
                    </select>
                </div>
                <div>
                    <label class="block font-label-sm text-label-sm font-semibold text-on-surface mb-1">Tipe Media</label>
                    <select id="input-type" name="type" class="w-full px-3 py-2 bg-surface-container-low border border-outline-variant rounded-lg focus:border-primary focus:ring-1 focus:ring-primary outline-none">
                        <option value="photo">Photo</option>
                        <option value="video">Video</option>
                    </select>
                </div>
            </div>

            <div>
                <label class="block font-label-sm text-label-sm font-semibold text-on-surface mb-1">Nama Pengunggah / Uploader</label>
                <input type="text" id="input-uploader" name="uploader" placeholder="Contoh: Admin Desa / Dr. Ahmad" class="w-full px-3 py-2 bg-surface-container-low border border-outline-variant rounded-lg focus:border-primary focus:ring-1 focus:ring-primary outline-none">
            </div>

            <div>
                <label class="block font-label-sm text-label-sm font-semibold text-on-surface mb-1">Upload File Gambar (Max 5MB)</label>
                <input type="file" id="input-image-file" name="image" accept="image/*" class="w-full text-xs bg-surface-container-low border border-outline-variant rounded-lg p-2 file:mr-3 file:py-1 file:px-3 file:rounded-md file:border-0 file:text-xs file:font-semibold file:bg-primary file:text-on-primary">
            </div>

            <div>
                <label class="block font-label-sm text-label-sm font-semibold text-on-surface mb-1">Atau Gunakan Link Gambar / URL</label>
                <input type="url" id="input-image-url" name="image_url" placeholder="https://..." class="w-full px-3 py-2 bg-surface-container-low border border-outline-variant rounded-lg focus:border-primary focus:ring-1 focus:ring-primary outline-none text-xs">
            </div>

            <div class="flex items-center gap-2 pt-1">
                <input type="checkbox" id="input-featured" name="is_featured" value="1" class="rounded text-primary focus:ring-primary h-4 w-4">
                <label for="input-featured" class="font-label-sm text-label-sm text-on-surface font-medium cursor-pointer">Jadikan Media Unggulan (Featured Card Utamadi Bento Grid)</label>
            </div>

            <div class="flex justify-end gap-3 pt-3 border-t border-outline-variant">
                <button type="button" onclick="closeUploadModal()" class="px-4 py-2 border border-outline-variant text-on-surface-variant font-label-sm rounded-lg hover:bg-surface-container-high transition-colors">Batal</button>
                <button type="submit" id="btn-submit-form" class="px-5 py-2 bg-primary text-on-primary font-label-sm rounded-lg hover:bg-primary-container active:scale-95 transition-all shadow-sm">Simpan Aset</button>
            </div>
        </form>
    </div>
</div>

<script>
    // Toggle Admin Drawer
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

    function focusSearch() {
        document.getElementById('gallery-search-input').focus();
    }

    // Modal Control
    function openUploadModal() {
        document.getElementById('edit-id').value = '';
        document.getElementById('modal-title-text').textContent = 'Upload New Media Asset';
        document.getElementById('btn-submit-form').textContent = 'Simpan Aset';
        document.getElementById('gallery-form').reset();
        document.getElementById('upload-modal').classList.remove('opacity-0', 'pointer-events-none');
    }

    function openEditModal(item) {
        document.getElementById('edit-id').value = item.id;
        document.getElementById('modal-title-text').textContent = 'Edit Media Asset';
        document.getElementById('btn-submit-form').textContent = 'Perbarui Aset';
        document.getElementById('input-title').value = item.title;
        document.getElementById('input-category').value = item.category;
        document.getElementById('input-type').value = item.type;
        document.getElementById('input-uploader').value = item.uploader;
        document.getElementById('input-image-url').value = item.image_url;
        document.getElementById('input-featured').checked = !!item.is_featured;
        document.getElementById('upload-modal').classList.remove('opacity-0', 'pointer-events-none');
    }

    function closeUploadModal() {
        document.getElementById('upload-modal').classList.add('opacity-0', 'pointer-events-none');
    }

    // Handle Add / Edit Submit
    function handleFormSubmit(e) {
        e.preventDefault();
        const editId = document.getElementById('edit-id').value;
        const formData = new FormData(document.getElementById('gallery-form'));

        const url = editId ? `/admin/galeri/${editId}` : '/admin/galeri';

        fetch(url, {
            method: 'POST',
            headers: {
                'X-CSRF-TOKEN': '{{ csrf_token() }}'
            },
            body: formData
        })
        .then(res => res.json())
        .then(data => {
            if (data.success) {
                location.reload();
            } else {
                alert(data.message || 'Gagal menyimpan aset galeri.');
            }
        })
        .catch(err => {
            console.error(err);
            alert('Terjadi kesalahan saat mengunggah aset media.');
        });
    }

    // Handle Delete Item
    function deleteGalleryItem(id) {
        if (!confirm('Apakah Anda yakin ingin menghapus media galeri ini?')) return;

        fetch(`/admin/galeri/${id}`, {
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
                alert(data.message || 'Gagal menghapus aset media.');
            }
        })
        .catch(err => {
            console.error(err);
            alert('Terjadi kesalahan saat menghapus aset media.');
        });
    }

    // Filter Type Tabs (All Media, Photos, Videos)
    function filterType(type, btn) {
        document.querySelectorAll('.filter-tab-btn').forEach(b => {
            b.classList.remove('bg-secondary-container', 'text-on-secondary-container');
            b.classList.add('text-on-surface-variant', 'hover:bg-surface-container-high');
        });
        btn.classList.add('bg-secondary-container', 'text-on-secondary-container');
        btn.classList.remove('text-on-surface-variant', 'hover:bg-surface-container-high');

        const cards = document.querySelectorAll('#gallery-grid .gallery-card');
        cards.forEach(card => {
            const cardType = card.getAttribute('data-type');
            if (type === 'all' || cardType === type) {
                card.style.display = '';
            } else {
                card.style.display = 'none';
            }
        });
    }

    // Live Search Filter
    document.getElementById('gallery-search-input').addEventListener('input', function(e) {
        const query = e.target.value.toLowerCase().trim();
        const cards = document.querySelectorAll('#gallery-grid .gallery-card');
        cards.forEach(card => {
            const title = card.getAttribute('data-title') || '';
            const uploader = card.getAttribute('data-uploader') || '';
            if (title.includes(query) || uploader.includes(query)) {
                card.style.display = '';
            } else {
                card.style.display = 'none';
            }
        });
    });
</script>
</body>
</html>
