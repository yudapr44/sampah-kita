<!DOCTYPE html>
<html class="light" lang="id">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Kelola Artikel - Admin SampahKita</title>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=block" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <script id="tailwind-config">
    try{
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
                "container-max": "1280px"
            },
            "fontFamily": {
                "body-md": ["Plus Jakarta Sans"],
                "headline-lg-mobile": ["Plus Jakarta Sans"],
                "body-lg": ["Plus Jakarta Sans"],
                "label-sm": ["Plus Jakarta Sans"],
                "label-bold": ["Plus Jakarta Sans"],
                "headline-md": ["Plus Jakarta Sans"],
                "headline-lg": ["Plus Jakarta Sans"]
            },
            "fontSize": {
                "body-md": ["16px", {"lineHeight": "1.5", "fontWeight": "400"}],
                "headline-lg-mobile": ["32px", {"lineHeight": "1.2", "fontWeight": "800"}],
                "body-lg": ["18px", {"lineHeight": "1.6", "fontWeight": "500"}],
                "label-sm": ["12px", {"lineHeight": "1.2", "fontWeight": "600"}],
                "label-bold": ["14px", {"lineHeight": "1.2", "fontWeight": "700"}],
                "headline-md": ["24px", {"lineHeight": "1.3", "fontWeight": "700"}],
                "headline-lg": ["40px", {"lineHeight": "1.1", "letterSpacing": "-0.02em", "fontWeight": "800"}]
            }
          },
        },
      }
    }catch(_e){}</script>
    <style>
        .neubrutalism-border {
            border: 2px solid #1b1c1a;
        }
        .neubrutalism-shadow {
            box-shadow: 4px 4px 0px 0px #1b1c1a;
        }
        .neubrutalism-shadow-sm {
            box-shadow: 2px 2px 0px 0px #1b1c1a;
        }
        .active-neubrutalism:active {
            transform: translate(2px, 2px);
            box-shadow: 0px 0px 0px 0px #1b1c1a;
        }
    </style>
</head>
<body class="text-on-surface bg-background min-h-screen">

    <!-- Backdrop -->
    <div id="admin-backdrop" class="fixed inset-0 bg-black/45 z-45 hidden opacity-0 transition-opacity duration-300" onclick="toggleAdminDrawer()"></div>

    <!-- SideNavBar Shell (Collapsible Drawer) -->
    <aside id="admin-drawer" class="fixed left-0 top-0 h-full w-[280px] bg-primary-container border-r-2 border-on-background flex flex-col p-6 z-50 transition-transform duration-300 transform -translate-x-full">
        <!-- Brand Identity -->
        <div class="mb-10 px-2 flex justify-between items-center">
            <div>
                <h1 class="font-headline-md text-headline-md text-on-primary-fixed font-bold">Village Admin</h1>
                <p class="font-body-md text-body-md text-on-primary-fixed-variant opacity-80">Local Government</p>
            </div>
            <button onclick="toggleAdminDrawer()" class="p-1 rounded-full hover:bg-primary-fixed text-[#1b1c1a] flex items-center justify-center">
                <span class="material-symbols-outlined text-[22px]">close</span>
            </button>
        </div>

        <!-- Navigation Links -->
        <nav class="flex-1 space-y-3">
            <a class="flex items-center gap-3 p-3 text-on-primary-fixed-variant hover:bg-primary-fixed transition-all rounded-lg" href="/admin">
                <span class="material-symbols-outlined">dashboard</span>
                <span class="font-body-md text-body-md font-semibold">Dashboard</span>
            </a>
            <a class="flex items-center gap-3 p-3 text-on-primary-fixed-variant hover:bg-primary-fixed transition-all rounded-lg" href="/admin/bank-digital">
                <span class="material-symbols-outlined text-[#fd8603]">equalizer</span>
                <span class="font-body-md text-body-md font-semibold">Bank Sampah Digital</span>
            </a>
            <a class="flex items-center gap-3 p-3 text-on-primary-fixed-variant bg-primary-fixed transition-all rounded-lg font-bold" href="/admin/artikel">
                <span class="material-symbols-outlined">description</span>
                <span class="font-body-md text-body-md font-semibold">Artikel</span>
            </a>
            <a class="flex items-center gap-3 p-3 text-on-primary-fixed-variant hover:bg-primary-fixed transition-all rounded-lg" href="/admin/galeri">
                <span class="material-symbols-outlined">image</span>
                <span class="font-body-md text-body-md font-semibold">Galeri</span>
            </a>
            <a class="flex items-center gap-3 p-3 text-on-primary-fixed-variant hover:bg-primary-fixed transition-all rounded-lg" href="/admin/kontak">
                <span class="material-symbols-outlined">contact_support</span>
                <span class="font-body-md text-body-md font-semibold">Kontak</span>
            </a>
            <a class="flex items-center gap-3 p-3 text-on-primary-fixed-variant hover:bg-primary-fixed transition-all rounded-lg" href="/">
                <span class="material-symbols-outlined">open_in_new</span>
                <span class="font-body-md text-body-md font-semibold">Lihat Website</span>
            </a>
        </nav>

        <!-- Logout Form -->
        <div class="pt-4 border-t-2 border-on-background">
            <form method="POST" action="{{ route('admin.logout') }}">
                @csrf
                <button type="submit"
                    class="w-full flex items-center gap-2 px-4 py-2.5 text-red-500 hover:bg-red-50 transition-all rounded-xl text-[13px] font-semibold border border-red-200">
                    <span class="material-symbols-outlined text-[18px]">logout</span>
                    Logout
                </button>
            </form>
        </div>
    </aside>

    <!-- TopNavBar Shell -->
    <header class="fixed top-0 right-0 w-full h-14 bg-surface border-b-2 border-on-background flex justify-between items-center px-4 md:px-8 z-40">
        <div class="flex items-center gap-3">
            <!-- Hamburger Menu Trigger -->
            <button onclick="toggleAdminDrawer()" class="hover:bg-surface-container-high neubrutalism-border rounded-lg p-2 transition-all flex items-center justify-center">
                <span class="material-symbols-outlined text-on-surface">menu</span>
            </button>
            <span class="font-bold text-[15px] text-on-background md:hidden">Kelola Artikel</span>

            <!-- Search input (md+) -->
            <div class="hidden md:block relative group">
                <span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-on-background">search</span>
                <input id="article-search" class="pl-10 pr-4 py-2 bg-white neubrutalism-border rounded-lg w-64 focus:outline-none focus:bg-surface-container transition-all" placeholder="Cari artikel..." type="text">
            </div>
        </div>
        <div class="flex items-center gap-3">
            <button class="hover:bg-surface-container-high neubrutalism-border rounded-lg p-2 transition-all">
                <span class="material-symbols-outlined text-on-surface">notifications</span>
            </button>
            <span class="hidden md:block font-label-bold text-label-bold text-primary">{{ session('admin_name', 'Admin') }}</span>
        </div>
    </header>

    <!-- Main Content Canvas -->
    <main class="pt-16 min-h-screen">
        <div class="max-w-[1440px] mx-auto p-4 md:p-6 lg:p-10">
            
            <!-- Page Header -->
            <div class="flex flex-col md:flex-row md:items-center justify-between gap-4 mb-10">
                <div>
                    <h2 class="font-headline-lg text-headline-lg text-on-background">Kelola Artikel</h2>
                    <nav class="flex items-center gap-2 mt-1">
                        <span class="font-body-md text-body-md text-outline">Dashboard</span>
                        <span class="material-symbols-outlined text-[16px] text-outline">chevron_right</span>
                        <span class="font-body-md text-body-md text-on-background font-bold">Articles</span>
                    </nav>
                </div>
                <button onclick="openModal()" class="flex items-center gap-2 bg-primary-fixed text-on-primary-fixed px-6 py-4 rounded-lg font-label-bold text-label-bold neubrutalism-border neubrutalism-shadow active-neubrutalism transition-all">
                    <span class="material-symbols-outlined">add</span>
                    Tambah Artikel Baru
                </button>
            </div>

            <!-- Bento Grid Stats -->
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-6 mb-10">
                <div class="bg-surface-container-lowest p-6 rounded-lg neubrutalism-border neubrutalism-shadow-sm">
                    <p class="font-label-bold text-label-bold text-on-surface-variant uppercase tracking-wider">Total Artikel</p>
                    <h3 class="font-headline-lg text-headline-lg mt-1 text-on-background">{{ $publishedCount + $draftCount }}</h3>
                </div>
                <div class="bg-primary-fixed p-6 rounded-lg neubrutalism-border neubrutalism-shadow-sm">
                    <p class="font-label-bold text-label-bold text-on-primary-fixed-variant uppercase tracking-wider">Published</p>
                    <h3 class="font-headline-lg text-headline-lg mt-1 text-on-primary-fixed">{{ $publishedCount }}</h3>
                </div>
                <div class="bg-secondary-fixed p-6 rounded-lg neubrutalism-border neubrutalism-shadow-sm">
                    <p class="font-label-bold text-label-bold text-on-secondary-fixed-variant uppercase tracking-wider">Drafts</p>
                    <h3 class="font-headline-lg text-headline-lg mt-1 text-on-secondary-fixed-variant">{{ $draftCount }}</h3>
                </div>
                <div class="bg-tertiary-fixed p-6 rounded-lg neubrutalism-border neubrutalism-shadow-sm">
                    <p class="font-label-bold text-label-bold text-on-tertiary-fixed-variant uppercase tracking-wider">Total Pembaca</p>
                    <h3 class="font-headline-lg text-headline-lg mt-1 text-on-tertiary-fixed-variant">
                        {{ $totalViews >= 1000 ? number_format($totalViews/1000, 1) . 'k' : $totalViews }}
                    </h3>
                </div>
            </div>

            <!-- Article Table Section -->
            <div class="bg-white rounded-lg neubrutalism-border neubrutalism-shadow overflow-hidden">
                <div class="overflow-x-auto">
                    <table class="w-full text-left border-collapse">
                        <thead>
                            <tr class="bg-surface-container-high border-b-2 border-on-background text-on-surface font-label-bold text-label-bold">
                                <th class="p-4">STATUS</th>
                                <th class="p-4">JUDUL ARTIKEL</th>
                                <th class="p-4">KATEGORI</th>
                                <th class="p-4">VIEWS</th>
                                <th class="p-4">TANGGAL</th>
                                <th class="p-4 text-right">AKSI</th>
                            </tr>
                        </thead>
                        <tbody id="article-tbody" class="divide-y-2 divide-on-background font-body-md text-body-md">
                            @forelse($articles as $a)
                            <tr class="hover:bg-surface-container-low transition-all article-row" data-title="{{ strtolower($a->title) }}" data-category="{{ strtolower($a->category) }}">
                                <td class="p-4">
                                    <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-[12px] font-bold border border-on-background shadow-[1px_1px_0px_0px_#1b1c1a] bg-primary-fixed text-on-primary-fixed">
                                        <span class="w-2 h-2 rounded-full bg-primary"></span> Published
                                    </span>
                                </td>
                                <td class="p-4 font-bold text-on-background">{{ $a->title }}</td>
                                <td class="p-4">
                                    <span class="px-3 py-1 bg-surface-container rounded-lg border border-on-background text-[12px] font-semibold">{{ $a->category }}</span>
                                </td>
                                <td class="p-4 font-bold text-on-surface-variant">124</td>
                                <td class="p-4 text-outline font-label-sm text-label-sm">{{ $a->created_at ? $a->created_at->format('M d, Y') : '-' }}</td>
                                <td class="p-4 text-right">
                                    <div class="flex items-center justify-end gap-2">
                                        <button onclick="deleteArticle({{ $a->id }}, this)" class="p-2 bg-error-container text-on-error-container neubrutalism-border rounded-lg hover:bg-error hover:text-on-error transition-all active-neubrutalism" title="Hapus Artikel">
                                            <span class="material-symbols-outlined text-[18px]">delete</span>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                            @empty
                            <tr id="empty-row">
                                <td colspan="6" class="p-8 text-center text-outline">
                                    <span class="material-symbols-outlined text-4xl mb-2">article</span>
                                    <p class="font-bold">Belum ada artikel edukasi yang dibuat.</p>
                                </td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>

                <!-- Table Footer Pagination -->
                <div class="p-4 bg-surface-container-low border-t-2 border-on-background flex flex-col sm:flex-row items-center justify-between gap-4">
                    <p class="font-body-md text-body-md text-outline">Menampilkan <span class="font-bold text-on-background">{{ count($articles) }}</span> artikel</p>
                    <div class="flex items-center gap-2">
                        <button class="p-2 neubrutalism-border rounded-lg bg-white hover:bg-surface-container-high transition-all active-neubrutalism">
                            <span class="material-symbols-outlined text-[20px]">chevron_left</span>
                        </button>
                        <button class="w-10 h-10 neubrutalism-border rounded-lg bg-on-background text-surface font-label-bold text-label-bold shadow-sm">1</button>
                        <button class="p-2 neubrutalism-border rounded-lg bg-white hover:bg-surface-container-high transition-all active-neubrutalism">
                            <span class="material-symbols-outlined text-[20px]">chevron_right</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- Modal Form (Tambah Artikel Baru) -->
    <div id="modal-container" class="fixed inset-0 z-[100] bg-black/45 flex items-center justify-center p-4 opacity-0 pointer-events-none transition-all duration-300">
        <div class="bg-surface-container-lowest max-w-lg w-full rounded-xl neubrutalism-border neubrutalism-shadow p-6 flex flex-col gap-4">
            <!-- Modal Header -->
            <div class="flex items-center justify-between pb-3 border-b-2 border-on-background">
                <h3 class="font-headline-md text-[18px] text-on-background font-bold">Tulis Artikel Baru</h3>
                <button onclick="closeModal()" class="p-1 rounded-full hover:bg-surface-container transition-colors flex items-center justify-center">
                    <span class="material-symbols-outlined text-[20px]">close</span>
                </button>
            </div>
            <!-- Modal Body -->
            <div class="space-y-4">
                <div class="flex flex-col gap-1.5">
                    <label class="font-label-bold text-[13px] text-on-surface-variant font-bold">Judul Artikel</label>
                    <input id="art-title" class="w-full px-4 py-2.5 rounded-lg neubrutalism-border bg-surface-container-low focus:bg-surface-bright focus:ring-0 transition-all font-body-md text-body-md" placeholder="Contoh: Cara Memilah Sampah Plastik" type="text">
                </div>
                <div class="flex flex-col gap-1.5">
                    <label class="font-label-bold text-[13px] text-on-surface-variant font-bold">Kategori</label>
                    <select id="art-cat" class="w-full px-4 py-2.5 rounded-lg neubrutalism-border bg-surface-container-low focus:bg-surface-bright focus:ring-0 transition-all font-body-md text-body-md">
                        <option value="Dasar">Dasar</option>
                        <option value="Tips">Tips</option>
                        <option value="Pengelolaan">Pengelolaan</option>
                        <option value="Manfaat">Manfaat</option>
                    </select>
                </div>
                <div class="flex flex-col gap-1.5">
                    <label class="font-label-bold text-[13px] text-on-surface-variant font-bold">Konten Artikel</label>
                    <textarea id="art-content" class="w-full px-4 py-2.5 rounded-lg neubrutalism-border bg-surface-container-low focus:bg-surface-bright focus:ring-0 transition-all font-body-md text-body-md" rows="5" placeholder="Tuliskan isi artikel edukasi..."></textarea>
                </div>
            </div>
            <!-- Modal Footer -->
            <div class="flex justify-end gap-3 pt-3 border-t-2 border-on-background">
                <button onclick="closeModal()" class="px-5 py-2.5 border-2 border-on-background font-label-bold rounded-lg hover:bg-surface-container transition-colors active-neubrutalism">Batal</button>
                <button onclick="saveArticle()" class="px-5 py-2.5 bg-primary-fixed text-on-primary-fixed border-2 border-on-background font-label-bold rounded-lg hover:bg-primary-container active:scale-95 transition-all shadow-[2px_2px_0px_0px_#1b1c1a]">Simpan</button>
            </div>
        </div>
    </div>

    <!-- Success Toast -->
    <div class="fixed bottom-8 left-1/2 -translate-x-1/2 bg-on-background text-[#fbf9f5] px-6 py-3 rounded-lg neubrutalism-border neubrutalism-shadow flex items-center gap-3 opacity-0 translate-y-4 pointer-events-none transition-all duration-300 z-[100]" id="toast">
        <span class="material-symbols-outlined text-primary-fixed">check_circle</span>
        <span class="font-label-bold text-label-bold uppercase">Artikel Berhasil Disimpan</span>
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

        // Modal triggers
        function openModal() {
            document.getElementById('modal-container').classList.remove('opacity-0', 'pointer-events-none');
        }
        function closeModal() {
            document.getElementById('modal-container').classList.add('opacity-0', 'pointer-events-none');
            document.getElementById('art-title').value = '';
            document.getElementById('art-content').value = '';
        }

        // Save article logic (Fetch API + dynamic row insert)
        function saveArticle() {
            const title = document.getElementById('art-title').value.trim();
            const category = document.getElementById('art-cat').value;
            const content = document.getElementById('art-content').value.trim();

            if (!title || !content) {
                alert('Judul dan Konten artikel wajib diisi!');
                return;
            }

            fetch('/admin/artikel', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },
                body: JSON.stringify({ title, category, content })
            })
            .then(res => res.json())
            .then(data => {
                if (data.success) {
                    closeModal();
                    showToast('Artikel Berhasil Disimpan');
                    setTimeout(() => location.reload(), 800);
                } else {
                    alert('Gagal menyimpan artikel');
                }
            })
            .catch(err => {
                console.error(err);
                alert('Terjadi kesalahan sistem.');
            });
        }

        // Delete article logic
        function deleteArticle(id, btn) {
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
                    const row = btn.closest('tr');
                    row.remove();
                    showToast('Artikel Berhasil Dihapus');
                } else {
                    alert('Gagal menghapus artikel');
                }
            })
            .catch(err => {
                console.error(err);
                alert('Terjadi kesalahan sistem.');
            });
        }

        // Search Filter Logic
        document.getElementById('article-search').addEventListener('input', function(e) {
            const query = e.target.value.toLowerCase().trim();
            const rows = document.querySelectorAll('.article-row');
            rows.forEach(row => {
                const title = row.getAttribute('data-title') || '';
                const category = row.getAttribute('data-category') || '';
                if (title.includes(query) || category.includes(query)) {
                    row.style.display = '';
                } else {
                    row.style.display = 'none';
                }
            });
        });

        // Toast Helper
        function showToast(msg) {
            const toast = document.getElementById('toast');
            if (msg) toast.querySelector('span:last-child').textContent = msg;
            toast.classList.remove('opacity-0', 'translate-y-4', 'pointer-events-none');
            setTimeout(() => {
                toast.classList.add('opacity-0', 'translate-y-4', 'pointer-events-none');
            }, 3000);
        }
    </script>
</body>
</html>
