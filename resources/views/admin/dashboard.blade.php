<!DOCTYPE html>
<html class="light" lang="id">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>Dashboard Admin — EduManage Admin</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet"/>
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
                <div class="flex justify-between items-start mb-4">
                    <div class="p-3 bg-white border-2 border-neubrutal-black rounded-lg">
                        <span class="material-symbols-outlined text-neubrutal-black text-[24px]">payments</span>
                    </div>
                    <span class="text-xs font-label-bold text-neubrutal-black bg-white border border-neubrutal-black px-2 py-1 rounded-full">Rupiah</span>
                </div>
                <div>
                    <p class="font-label-bold text-neubrutal-black opacity-80 text-[13px]">Total Saldo Warga</p>
                    <h3 class="font-headline-md text-headline-md text-neubrutal-black leading-none mt-1 font-bold">
                        Rp {{ number_format($totalSaldo ?? 0, 0, ',', '.') }}
                    </h3>
                </div>
            </div>
        </div>

        <!-- Portal Quick Links / Actions -->
        <div class="bg-white p-6 md:p-8 rounded-xl neubrutal-card mb-10">
            <h3 class="font-headline-md text-headline-md text-on-background mb-4">Akses Cepat Pengelolaan Desa</h3>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-4">
                <a href="/admin/bank-digital" class="p-4 bg-secondary-container rounded-xl border-2 border-neubrutal-black shadow-[2px_2px_0px_0px_#1b1c1a] hover:translate-y-[-2px] transition-all flex items-center gap-3">
                    <span class="material-symbols-outlined text-[#fd8603] text-[28px]">equalizer</span>
                    <div>
                        <h4 class="font-bold text-[14px]">Bank Sampah</h4>
                        <p class="text-[11px] opacity-75">Kelola Nasabah & Setoran</p>
                    </div>
                </a>
                <a href="/admin/artikel" class="p-4 bg-primary-fixed rounded-xl border-2 border-neubrutal-black shadow-[2px_2px_0px_0px_#1b1c1a] hover:translate-y-[-2px] transition-all flex items-center gap-3">
                    <span class="material-symbols-outlined text-primary text-[28px]">description</span>
                    <div>
                        <h4 class="font-bold text-[14px]">Artikel Edukasi</h4>
                        <p class="text-[11px] opacity-75">Kelola Panduan 3R</p>
                    </div>
                </a>
                <a href="/admin/galeri" class="p-4 bg-tertiary-fixed rounded-xl border-2 border-neubrutal-black shadow-[2px_2px_0px_0px_#1b1c1a] hover:translate-y-[-2px] transition-all flex items-center gap-3">
                    <span class="material-symbols-outlined text-tertiary text-[28px]">photo_library</span>
                    <div>
                        <h4 class="font-bold text-[14px]">Galeri Kegiatan</h4>
                        <p class="text-[11px] opacity-75">Kelola Dokumentasi</p>
                    </div>
                </a>
                <a href="/admin/kontak" class="p-4 bg-[#ffd23f] rounded-xl border-2 border-neubrutal-black shadow-[2px_2px_0px_0px_#1b1c1a] hover:translate-y-[-2px] transition-all flex items-center gap-3">
                    <span class="material-symbols-outlined text-neubrutal-black text-[28px]">contact_support</span>
                    <div>
                        <h4 class="font-bold text-[14px]">Kontak Desa</h4>
                        <p class="text-[11px] opacity-75">Kelola Info Layanan</p>
                    </div>
                </a>
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
