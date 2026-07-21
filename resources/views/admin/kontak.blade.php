<!DOCTYPE html>
<html class="light" lang="id">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Pengaturan Profil & Akun Desa Balonggandu</title>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=block" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <script id="tailwind-config">
    try {
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    "colors": {
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
                        "primary-fixed-dim": "#b0ceae"
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
                        "margin-mobile": "16px",
                        "container-max": "1280px",
                        "stack-lg": "32px",
                        "stack-md": "16px",
                        "stack-sm": "8px",
                        "container-padding": "24px"
                    },
                    "fontFamily": {
                        "body-md": ["Plus Jakarta Sans"],
                        "headline-lg-mobile": ["Plus Jakarta Sans"],
                        "body-lg": ["Plus Jakarta Sans"],
                        "label-sm": ["Plus Jakarta Sans"],
                        "label-bold": ["Plus Jakarta Sans"],
                        "headline-md": ["Plus Jakarta Sans"],
                        "headline-lg": ["Plus Jakarta Sans"],
                        "display-lg": ["Plus Jakarta Sans"],
                        "title-sm": ["Plus Jakarta Sans"],
                        "body-sm": ["Plus Jakarta Sans"]
                    },
                    "fontSize": {
                        "body-md": ["16px", {"lineHeight": "1.5", "fontWeight": "400"}],
                        "headline-lg-mobile": ["32px", {"lineHeight": "1.2", "fontWeight": "800"}],
                        "body-lg": ["18px", {"lineHeight": "1.6", "fontWeight": "500"}],
                        "label-sm": ["12px", {"lineHeight": "1.2", "fontWeight": "600"}],
                        "label-bold": ["14px", {"lineHeight": "1.2", "fontWeight": "700"}],
                        "headline-md": ["24px", {"lineHeight": "1.3", "fontWeight": "700"}],
                        "headline-lg": ["40px", {"lineHeight": "1.1", "letterSpacing": "-0.02em", "fontWeight": "800"}],
                        "display-lg": ["40px", {"lineHeight": "1.1", "letterSpacing": "-0.02em", "fontWeight": "800"}]
                    }
                },
            }
        }
    } catch(_e){}
    </script>
    <style>
        .neubrutal-border {
            border: 2px solid #1b1c1a;
        }
        .neubrutal-shadow {
            box-shadow: 4px 4px 0px 0px #1b1c1a;
        }
        .neubrutal-shadow-lg {
            box-shadow: 6px 6px 0px 0px #1b1c1a;
        }
        .active-scale:active {
            transform: scale(0.97);
        }
    </style>
</head>
<body class="bg-background text-on-surface min-h-screen">

    <!-- Backdrop -->
    <div id="admin-backdrop" class="fixed inset-0 bg-black/45 z-45 hidden opacity-0 transition-opacity duration-300" onclick="toggleAdminDrawer()"></div>

    <!-- SideNavBar Shell (Collapsible Drawer) -->
    <aside id="admin-drawer" class="fixed left-0 top-0 h-full w-[280px] bg-primary-container dark:bg-primary-container shadow-sm flex flex-col p-stack-md z-50 transition-transform duration-300 transform -translate-x-full border-r-2 border-on-background">
        <div class="mb-stack-lg px-2 flex justify-between items-center">
            <div>
                <h1 class="font-headline-md text-headline-md text-on-primary-container font-bold">Village Admin</h1>
                <p class="font-body-sm text-body-sm text-on-primary-container opacity-80">Local Government</p>
            </div>
            <button onclick="toggleAdminDrawer()" class="p-1 rounded-full hover:bg-primary-fixed text-[#1b1c1a] flex items-center justify-center">
                <span class="material-symbols-outlined text-[22px]">close</span>
            </button>
        </div>
        <nav class="flex-1 space-y-2">
            <!-- Dashboard -->
            <a class="flex items-center gap-3 px-4 py-3 text-on-primary-container font-body-md text-body-md nav-item-transition hover:bg-surface-container rounded-lg group active:scale-95" href="/admin">
                <span class="material-symbols-outlined">dashboard</span>
                <span class="">Dashboard</span>
            </a>
            <!-- Artikel -->
            <a class="flex items-center gap-3 px-4 py-3 text-on-primary-container font-body-md text-body-md nav-item-transition hover:bg-surface-container rounded-lg group active:scale-95" href="/admin/artikel">
                <span class="material-symbols-outlined">description</span>
                <span class="">Artikel</span>
            </a>
            <!-- Galeri -->
            <a class="flex items-center gap-3 px-4 py-3 text-on-primary-container font-body-md text-body-md nav-item-transition hover:bg-surface-container rounded-lg group active:scale-95" href="/galeri">
                <span class="material-symbols-outlined">image</span>
                <span class="">Galeri</span>
            </a>
            <!-- Kontak (Active) -->
            <a class="flex items-center gap-3 px-4 py-3 bg-primary text-on-primary rounded-lg font-body-md text-body-md nav-item-transition active:scale-95" href="/admin/kontak">
                <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">contact_support</span>
                <span class="">Kontak</span>
            </a>
        </nav>
        <!-- Admin Profile Info + Logout -->
        <div class="mt-auto space-y-2 pt-4 border-t border-on-primary-container/20">
            <div class="px-2 flex items-center gap-3">
                <img class="w-10 h-10 rounded-full object-cover neubrutal-border" src="{{ asset('images/admin_avatar.jpg') }}">
                <div>
                    <p class="font-label-bold text-label-bold text-on-primary-container">{{ session('admin_name', 'Admin') }}</p>
                    <p class="text-[10px] text-on-primary-container/70 uppercase tracking-wider">{{ session('admin_email', '') }}</p>
                </div>
            </div>
            <form method="POST" action="{{ route('admin.logout') }}">
                @csrf
                <button type="submit"
                    class="w-full flex items-center gap-2 px-4 py-2.5 text-red-400 hover:bg-red-500/10 transition-all rounded-lg text-[13px] font-semibold">
                    <span class="material-symbols-outlined text-[18px]">logout</span>
                    Logout
                </button>
            </form>
        </div>
    </aside>


    <!-- TopNavBar Shell -->
    <header class="fixed top-0 right-0 w-full h-14 bg-surface dark:bg-surface-dim border-b neubrutal-border z-40 flex justify-between items-center px-4 md:px-6">
        <div class="flex items-center gap-3 flex-1">
            <!-- Hamburger Menu Toggle -->
            <button onclick="toggleAdminDrawer()" class="p-2 neubrutal-border rounded-lg bg-[#f5f3ef] hover:scale-105 active:scale-95 transition-transform flex items-center justify-center">
                <span class="material-symbols-outlined text-[#1b1c1a]">menu</span>
            </button>

            <span class="font-bold text-[15px] text-on-background md:hidden">Pengaturan</span>

            <!-- Search (md+) -->
            <div class="hidden md:block relative w-full max-w-md">
                <span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-outline">search</span>
                <input class="w-full pl-10 pr-4 py-2 bg-surface-container-low rounded-lg neubrutal-border focus:ring-0 text-body-sm font-body-sm" placeholder="Cari pengaturan..." type="text">
            </div>
        </div>
        <div class="flex items-center gap-2">
            <div class="flex items-center gap-2 px-3 py-1.5 rounded-lg hover:bg-surface-container transition-all cursor-pointer">
                <span class="material-symbols-outlined text-primary">notifications</span>
                <span class="hidden md:block font-label-bold text-label-bold text-primary">{{ session('admin_name', 'Admin') }}</span>
                <img class="w-8 h-8 rounded-full object-cover neubrutal-border" src="{{ asset('images/admin_avatar.jpg') }}">
            </div>
        </div>
    </header>

    <!-- Main Content Canvas -->
    <main class="pt-16 min-h-screen">
        <div class="max-w-[1440px] mx-auto p-4 md:p-6 lg:p-8">
            <!-- Header Section -->
            <div class="mb-stack-lg">
                <div class="flex flex-col gap-2">
                    <h2 class="font-display-lg text-display-lg text-on-surface">Pengaturan Profil & Akun</h2>
                    <p class="font-body-md text-body-md text-on-surface-variant">Kelola identitas digital desa dan keamanan akun administrator Anda.</p>
                </div>
            </div>

            <!-- Settings Form Container -->
            <div class="grid grid-cols-12 gap-gutter">
                <!-- Left Column: Form Sections -->
                <div class="col-span-12 lg:col-span-8 space-y-gutter">
                    
                    <!-- Informasi Kontak Card -->
                    <section class="bg-surface-container-lowest neubrutal-border neubrutal-shadow rounded-lg p-container-padding">
                        <div class="flex items-center gap-3 mb-stack-md">
                            <div class="w-10 h-10 rounded-lg bg-primary-fixed neubrutal-border flex items-center justify-center">
                                <span class="material-symbols-outlined text-on-primary-fixed">contact_mail</span>
                            </div>
                            <h3 class="font-title-sm text-title-sm text-on-surface">Informasi Kontak Desa</h3>
                        </div>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-stack-md">
                            <div class="flex flex-col gap-2">
                                <label class="font-label-bold text-label-bold text-on-surface-variant">No. WhatsApp Desa</label>
                                <input id="in-whatsapp" class="w-full px-4 py-3 rounded-lg neubrutal-border bg-surface-container-low focus:bg-surface-bright focus:ring-0 transition-all font-body-md text-body-md" type="text" value="{{ $setting->whatsapp ?? '' }}">
                            </div>
                            <div class="flex flex-col gap-2">
                                <label class="font-label-bold text-label-bold text-on-surface-variant">Email Desa</label>
                                <input id="in-email" class="w-full px-4 py-3 rounded-lg neubrutal-border bg-surface-container-low focus:bg-surface-bright focus:ring-0 transition-all font-body-md text-body-md" type="email" value="{{ $setting->email ?? '' }}">
                            </div>
                            <div class="flex flex-col gap-2 md:col-span-2">
                                <label class="font-label-bold text-label-bold text-on-surface-variant">Alamat Kantor Desa</label>
                                <textarea id="in-address" class="w-full px-4 py-3 rounded-lg neubrutal-border bg-surface-container-low focus:bg-surface-bright focus:ring-0 transition-all font-body-md text-body-md" rows="3">{{ $setting->address ?? '' }}</textarea>
                            </div>
                        </div>
                    </section>

                    <!-- Media Sosial Card -->
                    <section class="bg-surface-container-lowest neubrutal-border neubrutal-shadow rounded-lg p-container-padding">
                        <div class="flex items-center gap-3 mb-stack-md">
                            <div class="w-10 h-10 rounded-lg bg-secondary-container neubrutal-border flex items-center justify-center">
                                <span class="material-symbols-outlined text-on-secondary-container">share</span>
                            </div>
                            <h3 class="font-title-sm text-title-sm text-on-surface">Media Sosial</h3>
                        </div>
                        <div class="space-y-stack-md">
                            <!-- Instagram -->
                            <div class="flex flex-col gap-2">
                                <label class="font-label-bold text-label-bold text-on-surface-variant">Link Instagram</label>
                                <div class="flex items-stretch rounded-lg overflow-hidden neubrutal-border">
                                    <span class="bg-surface-container-high text-on-surface-variant px-4 flex items-center border-r-2 border-on-background font-body-md font-bold text-[14px]">instagram.com/</span>
                                    <input id="in-instagram" class="flex-1 min-w-0 px-4 py-3 bg-surface-container-low focus:bg-surface-bright focus:ring-0 transition-all font-body-md text-body-md border-0" type="text" value="{{ $setting->instagram ?? '' }}">
                                </div>
                            </div>
                            <!-- TikTok -->
                            <div class="flex flex-col gap-2">
                                <label class="font-label-bold text-label-bold text-on-surface-variant">Link TikTok</label>
                                <div class="flex items-stretch rounded-lg overflow-hidden neubrutal-border">
                                    <span class="bg-surface-container-high text-on-surface-variant px-4 flex items-center border-r-2 border-on-background font-body-md font-bold text-[14px]">tiktok.com/@</span>
                                    <input id="in-tiktok" class="flex-1 min-w-0 px-4 py-3 bg-surface-container-low focus:bg-surface-bright focus:ring-0 transition-all font-body-md text-body-md border-0" type="text" value="{{ $setting->tiktok ?? '' }}">
                                </div>
                            </div>
                        </div>
                    </section>

                    <!-- Action Button Profile -->
                    <div class="flex justify-end pt-2">
                        <button class="flex items-center gap-2 px-8 py-4 bg-primary text-on-primary rounded-lg font-label-bold text-label-bold uppercase tracking-widest hover:bg-primary-container active:scale-95 transition-all neubrutal-shadow neubrutal-border" id="saveBtn">
                            <span class="material-symbols-outlined">save</span>
                            Simpan Profil Desa
                        </button>
                    </div>

                    <!-- Pengaturan Kredensial Akun Card -->
                    <section class="bg-surface-container-lowest neubrutal-border neubrutal-shadow rounded-lg p-container-padding mt-8">
                        <div class="flex items-center gap-3 mb-stack-md">
                            <div class="w-10 h-10 rounded-lg bg-tertiary-fixed neubrutal-border flex items-center justify-center">
                                <span class="material-symbols-outlined text-on-tertiary-fixed">manage_accounts</span>
                            </div>
                            <h3 class="font-title-sm text-title-sm text-on-surface">Kredensial Akun Admin</h3>
                        </div>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-stack-md">
                            <div class="flex flex-col gap-2">
                                <label class="font-label-bold text-label-bold text-on-surface-variant">Nama Admin</label>
                                <input id="acc-name" class="w-full px-4 py-3 rounded-lg neubrutal-border bg-surface-container-low focus:bg-surface-bright focus:ring-0 transition-all font-body-md text-body-md" type="text" value="{{ $admin->name ?? 'Admin Balonggandu' }}">
                            </div>
                            <div class="flex flex-col gap-2">
                                <label class="font-label-bold text-label-bold text-on-surface-variant">Email Login</label>
                                <input id="acc-email" class="w-full px-4 py-3 rounded-lg neubrutal-border bg-surface-container-low focus:bg-surface-bright focus:ring-0 transition-all font-body-md text-body-md" type="email" value="{{ $admin->email ?? 'admin@balonggandu.desa.id' }}">
                            </div>
                            <div class="flex flex-col gap-2">
                                <label class="font-label-bold text-label-bold text-on-surface-variant">Password Baru</label>
                                <input id="acc-password" class="w-full px-4 py-3 rounded-lg neubrutal-border bg-surface-container-low focus:bg-surface-bright focus:ring-0 transition-all font-body-md text-body-md" type="password" placeholder="Kosongkan jika tidak diubah">
                            </div>
                            <div class="flex flex-col gap-2">
                                <label class="font-label-bold text-label-bold text-on-surface-variant">Konfirmasi Password Baru</label>
                                <input id="acc-confirm" class="w-full px-4 py-3 rounded-lg neubrutal-border bg-surface-container-low focus:bg-surface-bright focus:ring-0 transition-all font-body-md text-body-md" type="password" placeholder="Kosongkan jika tidak diubah">
                            </div>
                        </div>
                    </section>

                    <!-- Action Button Account -->
                    <div class="flex justify-end pt-2 pb-6">
                        <button class="flex items-center gap-2 px-8 py-4 bg-secondary text-on-secondary rounded-lg font-label-bold text-label-bold uppercase tracking-widest hover:bg-secondary-container active:scale-95 transition-all neubrutal-shadow neubrutal-border" id="saveAccBtn">
                            <span class="material-symbols-outlined">lock_reset</span>
                            Simpan Perubahan Akun
                        </button>
                    </div>
                </div>

                <!-- Right Column: Info/Preview -->
                <div class="hidden lg:block lg:col-span-4 space-y-gutter">
                    <div class="bg-primary-container text-on-primary-container rounded-lg neubrutal-border neubrutal-shadow p-container-padding overflow-hidden relative">
                        <div class="relative z-10">
                            <h4 class="font-title-sm text-title-sm mb-2 text-on-primary-container">Preview Publik</h4>
                            <p class="font-body-sm text-body-sm mb-6 opacity-80">Bagaimana profil Anda terlihat oleh warga di aplikasi Portal Desa.</p>
                            <div class="bg-surface-container-lowest rounded-lg p-4 text-on-surface neubrutal-border space-y-4">
                                <div class="flex items-center gap-3">
                                    <div class="w-12 h-12 rounded-lg bg-primary-fixed neubrutal-border flex items-center justify-center">
                                        <span class="material-symbols-outlined text-on-primary-fixed">foundation</span>
                                    </div>
                                    <div>
                                        <p class="font-label-bold text-label-bold">Kantor Desa Balonggandu</p>
                                        <p class="text-[10px] text-primary uppercase font-bold tracking-tighter">Terverifikasi</p>
                                    </div>
                                </div>
                                <div class="space-y-2 pt-2 border-t neubrutal-border">
                                    <div class="flex items-center gap-2 text-body-sm font-body-sm">
                                        <span class="material-symbols-outlined text-[18px] text-primary">call</span>
                                        <span id="prev-whatsapp" class="">{{ $setting->whatsapp ?? '-' }}</span>
                                    </div>
                                    <div class="flex items-center gap-2 text-body-sm font-body-sm">
                                        <span class="material-symbols-outlined text-[18px] text-primary">location_on</span>
                                        <span id="prev-address" class="line-clamp-2 text-[13px] leading-snug">{{ $setting->address ?? '-' }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="bg-white rounded-lg p-container-padding neubrutal-border neubrutal-shadow">
                        <h4 class="font-label-bold text-label-bold text-on-surface mb-stack-md uppercase tracking-wider">Tips Keamanan</h4>
                        <ul class="space-y-3">
                            <li class="flex gap-2 text-body-sm font-body-sm text-on-surface-variant">
                                <span class="material-symbols-outlined text-primary text-[20px]">verified_user</span>
                                <span class="">Gunakan email domain desa resmi untuk kredibilitas.</span>
                            </li>
                            <li class="flex gap-2 text-body-sm font-body-sm text-on-surface-variant">
                                <span class="material-symbols-outlined text-primary text-[20px]">shield</span>
                                <span class="">Pastikan nomor WhatsApp aktif untuk merespons warga.</span>
                            </li>
                            <li class="flex gap-2 text-body-sm font-body-sm text-on-surface-variant">
                                <span class="material-symbols-outlined text-primary text-[20px]">key</span>
                                <span class="">Ubah password secara berkala dengan minimal 6 karakter.</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- Success Toast -->
    <div class="fixed bottom-8 left-1/2 -translate-x-1/2 bg-on-background text-[#fbf9f5] px-6 py-3 rounded-lg neubrutal-border neubrutal-shadow flex items-center gap-3 opacity-0 translate-y-4 pointer-events-none transition-all duration-300 z-[100]" id="toast">
        <span class="material-symbols-outlined text-primary-fixed">check_circle</span>
        <span id="toast-text" class="font-label-bold text-label-bold uppercase">Berhasil Diperbarui</span>
    </div>

    <script>
        // Drawer toggle logic
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

        // Trigger Success Toast
        function showToast(text) {
            const toast = document.getElementById('toast');
            document.getElementById('toast-text').textContent = text;
            toast.classList.remove('opacity-0', 'translate-y-4', 'pointer-events-none');
            
            setTimeout(() => {
                toast.classList.add('opacity-0', 'translate-y-4', 'pointer-events-none');
            }, 3000);
        }

        // Save Profile Desa logic
        document.getElementById('saveBtn').addEventListener('click', function() {
            const button = this;
            const whatsapp = document.getElementById('in-whatsapp').value.trim();
            const email = document.getElementById('in-email').value.trim();
            const address = document.getElementById('in-address').value.trim();
            const instagram = document.getElementById('in-instagram').value.trim();
            const tiktok = document.getElementById('in-tiktok').value.trim();

            button.innerHTML = `<span class="material-symbols-outlined animate-spin">refresh</span> MENYIMPAN...`;
            button.disabled = true;
            button.classList.remove('neubrutal-shadow');
            button.classList.add('translate-x-1', 'translate-y-1');

            fetch('/admin/kontak', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },
                body: JSON.stringify({ whatsapp, email, address, instagram, tiktok })
            })
            .then(res => res.json())
            .then(data => {
                if (data.success) {
                    document.getElementById('prev-whatsapp').textContent = whatsapp || '-';
                    document.getElementById('prev-address').textContent = address || '-';

                    button.innerHTML = `<span class="material-symbols-outlined">save</span> Simpan Profil Desa`;
                    button.disabled = false;
                    button.classList.add('neubrutal-shadow');
                    button.classList.remove('translate-x-1', 'translate-y-1');

                    showToast('PROFIL DESA BERHASIL DISIMPAN');
                }
            })
            .catch(err => {
                console.error(err);
                alert("Terjadi kesalahan saat menyimpan pengaturan.");
                button.innerHTML = `<span class="material-symbols-outlined">save</span> Simpan Profil Desa`;
                button.disabled = false;
                button.classList.add('neubrutal-shadow');
                button.classList.remove('translate-x-1', 'translate-y-1');
            });
        });

        // Save Account Settings logic
        document.getElementById('saveAccBtn').addEventListener('click', function() {
            const button = this;
            const name = document.getElementById('acc-name').value.trim();
            const email = document.getElementById('acc-email').value.trim();
            const password = document.getElementById('acc-password').value;
            const confirm = document.getElementById('acc-confirm').value;

            if (!name || !email) {
                return alert("Nama dan email login wajib diisi!");
            }

            if (password !== confirm) {
                return alert("Password baru dan konfirmasi password tidak cocok!");
            }

            button.innerHTML = `<span class="material-symbols-outlined animate-spin">refresh</span> MENYIMPAN...`;
            button.disabled = true;
            button.classList.remove('neubrutal-shadow');
            button.classList.add('translate-x-1', 'translate-y-1');

            fetch('/admin/akun', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },
                body: JSON.stringify({ name, email, password })
            })
            .then(res => res.json())
            .then(data => {
                if (data.success) {
                    button.innerHTML = `<span class="material-symbols-outlined">lock_reset</span> Simpan Perubahan Akun`;
                    button.disabled = false;
                    button.classList.add('neubrutal-shadow');
                    button.classList.remove('translate-x-1', 'translate-y-1');

                    // Reset password fields
                    document.getElementById('acc-password').value = '';
                    document.getElementById('acc-confirm').value = '';

                    showToast('AKUN ADMIN BERHASIL DIPERBARUI');
                } else {
                    alert(data.message || "Gagal memperbarui akun.");
                    button.innerHTML = `<span class="material-symbols-outlined">lock_reset</span> Simpan Perubahan Akun`;
                    button.disabled = false;
                    button.classList.add('neubrutal-shadow');
                    button.classList.remove('translate-x-1', 'translate-y-1');
                }
            })
            .catch(err => {
                console.error(err);
                alert("Terjadi kesalahan saat memperbarui kredensial akun.");
                button.innerHTML = `<span class="material-symbols-outlined">lock_reset</span> Simpan Perubahan Akun`;
                button.disabled = false;
                button.classList.add('neubrutal-shadow');
                button.classList.remove('translate-x-1', 'translate-y-1');
            });
        });
    </script>
</body>
</html>
