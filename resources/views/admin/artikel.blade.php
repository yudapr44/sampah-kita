<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Artikel Edukasi — Admin Panel Desa Balonggandu</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&family=Be+Vietnam+Pro:wght@400;500;600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@400,0..1&display=block" rel="stylesheet">
    <style>
        * { font-family: 'Be Vietnam Pro', sans-serif; }
        h1,h2,h3,h4,h5 { font-family: 'Plus Jakarta Sans', sans-serif; }
        .fill-icon { font-variation-settings: 'FILL' 1; }
    </style>
</head>
<body class="bg-[#f3f4f6] text-[#191c1d] min-h-screen flex overflow-x-hidden">

    <!-- SIDEBAR UNIFORM -->
    <aside id="adminSidebar" class="w-64 bg-[#012d1d] text-white flex flex-col justify-between p-5 min-h-screen sticky top-0 shadow-xl z-20 flex-shrink-0 transition-all duration-300">
        <div>
            <div class="flex items-center gap-3 pb-6 border-b border-white/10 mb-6">
                <div class="w-10 h-10 rounded-xl bg-[#fd8603] flex items-center justify-center text-white shadow-md">
                    <span class="material-symbols-outlined fill-icon text-[24px]">analytics</span>
                </div>
                <div>
                    <h1 class="font-extrabold text-[16px] leading-none">SIP 3R Balonggandu</h1>
                    <p class="text-[11px] text-[#a5d0b9] mt-1">Admin Panel Desa</p>
                </div>
            </div>

            <nav class="space-y-1.5">
                <a href="/admin" class="flex items-center gap-3 px-4 py-3 rounded-xl text-gray-300 hover:text-white hover:bg-white/10 font-semibold text-xs transition-all">
                    <span class="material-symbols-outlined text-[20px]">dashboard</span>
                    Dashboard Utama
                </a>
                <a href="/admin/bank-digital" class="flex items-center gap-3 px-4 py-3 rounded-xl text-gray-300 hover:text-white hover:bg-white/10 font-semibold text-xs transition-all">
                    <span class="material-symbols-outlined text-[20px] text-[#fd8603]">analytics</span>
                    Data Digital 3R
                </a>
                <a href="/admin/artikel" class="flex items-center gap-3 px-4 py-3 rounded-xl bg-white/15 text-white font-bold text-xs shadow-inner">
                    <span class="material-symbols-outlined text-[20px] fill-icon">school</span>
                    Artikel Edukasi
                </a>
                <a href="/admin/galeri" class="flex items-center gap-3 px-4 py-3 rounded-xl text-gray-300 hover:text-white hover:bg-white/10 font-semibold text-xs transition-all">
                    <span class="material-symbols-outlined text-[20px]">photo_library</span>
                    Galeri Kegiatan
                </a>

                <div class="pt-4 mt-4 border-t border-white/10">
                    <a href="/bank-digital" target="_blank" class="flex items-center justify-between px-4 py-2.5 rounded-xl bg-emerald-900/50 hover:bg-emerald-900 text-[#a5d0b9] font-bold text-xs transition-all border border-emerald-700/50">
                        <span class="flex items-center gap-2">
                            <span class="material-symbols-outlined text-[18px]">public</span>
                            Portal Warga 3R
                        </span>
                        <span class="material-symbols-outlined text-[14px]">open_in_new</span>
                    </a>
                </div>
            </nav>
        </div>

        <div class="pt-4 border-t border-white/10">
            <div class="flex items-center gap-3 mb-3 px-2">
                <div class="w-9 h-9 rounded-full bg-emerald-500/20 border border-emerald-400/30 flex items-center justify-center text-[#a5d0b9]">
                    <span class="material-symbols-outlined text-[20px]">person</span>
                </div>
                <div class="overflow-hidden">
                    <p class="text-xs font-bold truncate">Admin Balonggandu</p>
                    <p class="text-[10px] text-gray-400 truncate">admin@balonggandu.desa.id</p>
                </div>
            </div>
            <form action="{{ route('admin.logout') }}" method="POST">
                @csrf
                <button type="submit" class="w-full bg-red-500/20 hover:bg-red-600 text-red-200 hover:text-white font-bold py-2.5 rounded-xl transition-all text-xs flex items-center justify-center gap-2 border border-red-500/30">
                    <span class="material-symbols-outlined text-[18px]">logout</span>
                    Keluar Sistem
                </button>
            </form>
        </div>
    </aside>

    <!-- MAIN CONTENT -->
    <main class="flex-1 p-4 sm:p-8 overflow-y-auto w-full transition-all duration-300">
        @if(session('success'))
            <div class="mb-6 p-4 bg-emerald-600 text-white rounded-2xl shadow-md flex items-center justify-between">
                <div class="flex items-center gap-3">
                    <span class="material-symbols-outlined fill-icon text-[24px]">check_circle</span>
                    <p class="text-sm font-semibold">{{ session('success') }}</p>
                </div>
                <button onclick="this.parentElement.remove()" class="text-white/80 hover:text-white">
                    <span class="material-symbols-outlined text-[20px]">close</span>
                </button>
            </div>
        @endif

        <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4 mb-8 bg-white p-4 sm:p-6 rounded-3xl border border-gray-100 shadow-sm">
            <div class="flex items-center gap-3">
                <button onclick="toggleAdminSidebar()" class="p-2.5 rounded-2xl bg-gray-100 hover:bg-[#012d1d] hover:text-white text-[#012d1d] transition-all flex items-center justify-center shadow-sm cursor-pointer">
                    <span class="material-symbols-outlined text-[24px]">menu</span>
                </button>
                <div>
                    <h2 class="text-base sm:text-xl font-extrabold text-[#012d1d]">Kelola Artikel Edukasi 📚</h2>
                    <p class="text-[11px] sm:text-xs text-gray-500 mt-0.5">Publikasikan panduan Reduce, Reuse, Recycle untuk warga desa</p>
                </div>
            </div>
            <button onclick="toggleModal()" class="bg-[#fd8603] hover:bg-[#e07800] active:scale-95 text-white font-bold text-xs px-5 py-3 rounded-xl transition-all flex items-center gap-2 shadow-sm self-start sm:self-auto">
                <span class="material-symbols-outlined text-[18px]">add_circle</span>
                Tambah Artikel Baru
            </button>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-3 gap-5 mb-8">
            <div class="bg-white p-5 rounded-3xl border border-gray-100 shadow-sm flex items-center justify-between">
                <div>
                    <p class="text-xs font-bold text-gray-400 uppercase">Published</p>
                    <h3 class="text-2xl font-extrabold text-emerald-700 mt-1">{{ $articles->count() }} <span class="text-xs font-normal text-gray-400">Artikel</span></h3>
                </div>
                <div class="w-12 h-12 rounded-2xl bg-emerald-50 flex items-center justify-center text-emerald-700">
                    <span class="material-symbols-outlined text-[28px] fill-icon">article</span>
                </div>
            </div>

            <div class="bg-white p-5 rounded-3xl border border-gray-100 shadow-sm flex items-center justify-between">
                <div>
                    <p class="text-xs font-bold text-gray-400 uppercase">Kategori Aktif</p>
                    <h3 class="text-2xl font-extrabold text-[#012d1d] mt-1">{{ $articles->pluck('category')->unique()->count() }} <span class="text-xs font-normal text-gray-400">Topik</span></h3>
                </div>
                <div class="w-12 h-12 rounded-2xl bg-blue-50 flex items-center justify-center text-blue-700">
                    <span class="material-symbols-outlined text-[28px] fill-icon">category</span>
                </div>
            </div>

            <div class="bg-white p-5 rounded-3xl border border-gray-100 shadow-sm flex items-center justify-between">
                <div>
                    <p class="text-xs font-bold text-gray-400 uppercase">Status Edukasi</p>
                    <h3 class="text-2xl font-extrabold text-[#fd8603] mt-1">Aktif Publik</h3>
                </div>
                <div class="w-12 h-12 rounded-2xl bg-orange-50 flex items-center justify-center text-[#fd8603]">
                    <span class="material-symbols-outlined text-[28px] fill-icon">visibility</span>
                </div>
            </div>
        </div>

        <div class="bg-white p-6 rounded-3xl border border-gray-100 shadow-sm">
            <div class="flex items-center justify-between mb-6">
                <h3 class="text-base font-bold text-[#012d1d]">Daftar Artikel Terpublikasi</h3>
                <span class="text-xs bg-emerald-100 text-emerald-800 font-bold px-3 py-1 rounded-full">Tampil di Portal Warga</span>
            </div>

            <div class="overflow-x-auto">
                <table class="w-full text-left text-xs">
                    <thead class="bg-gray-50 text-gray-500 font-bold uppercase border-y border-gray-100">
                        <tr>
                            <th class="py-3.5 px-4">Judul Artikel</th>
                            <th class="py-3.5 px-4">Kategori</th>
                            <th class="py-3.5 px-4">Pratinjau Isi</th>
                            <th class="py-3.5 px-4 text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-100">
                        @forelse($articles as $a)
                            <tr class="hover:bg-gray-50 transition-colors">
                                <td class="py-3.5 px-4 font-bold text-[#012d1d] max-w-[220px]">{{ $a->title }}</td>
                                <td class="py-3.5 px-4">
                                    <span class="px-2.5 py-1 bg-orange-100 text-[#fd8603] rounded-lg font-bold text-[11px]">{{ $a->category }}</span>
                                </td>
                                <td class="py-3.5 px-4 text-gray-500 max-w-[320px] truncate">{{ $a->content }}</td>
                                <td class="py-3.5 px-4 text-center">
                                    <form action="/admin/artikel/{{ $a->id }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus artikel ini?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="p-2 bg-red-100 text-red-600 hover:bg-red-600 hover:text-white rounded-xl transition-all">
                                            <span class="material-symbols-outlined text-[18px]">delete</span>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="4" class="text-center py-12 text-gray-400">Belum ada artikel edukasi yang dibuat.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </main>

    <!-- MODAL ADD ARTIKEL -->
    <div id="modalTambah" class="fixed inset-0 bg-black/50 z-50 flex items-center justify-center opacity-0 pointer-events-none transition-opacity duration-300 p-4">
        <div class="bg-white rounded-3xl max-w-lg w-full p-6 shadow-2xl space-y-4">
            <div class="flex items-center justify-between pb-3 border-b border-gray-100">
                <h3 class="text-base font-bold text-[#012d1d]">Tambah Artikel Edukasi 3R Baru</h3>
                <button onclick="toggleModal()" class="text-gray-400 hover:text-gray-600">
                    <span class="material-symbols-outlined text-[20px]">close</span>
                </button>
            </div>

            <form action="/admin/artikel" method="POST" class="space-y-4">
                @csrf
                <div>
                    <label class="block text-xs font-bold text-gray-700 mb-1.5">Judul Artikel</label>
                    <input type="text" name="title" placeholder="Contoh: Cara Memilah Sampah Plastik Rumah Tangga" required class="w-full rounded-xl border-gray-200 bg-gray-50 text-xs font-semibold p-3 focus:bg-white focus:border-[#012d1d] focus:ring-0">
                </div>

                <div>
                    <label class="block text-xs font-bold text-gray-700 mb-1.5">Kategori Topik</label>
                    <select name="category" required class="w-full rounded-xl border-gray-200 bg-gray-50 text-xs font-semibold p-3 focus:bg-white focus:border-[#012d1d] focus:ring-0">
                        <option value="Dasar 3R">Dasar 3R</option>
                        <option value="Pengelolaan">Pengelolaan Sampah</option>
                        <option value="Manfaat">Manfaat Daur Ulang</option>
                        <option value="Regulasi">Regulasi Lingkungan</option>
                    </select>
                </div>

                <div>
                    <label class="block text-xs font-bold text-gray-700 mb-1.5">Isi Konten Artikel</label>
                    <textarea name="content" rows="5" placeholder="Tuliskan materi edukasi lengkap di sini..." required class="w-full rounded-xl border-gray-200 bg-gray-50 text-xs font-semibold p-3 focus:bg-white focus:border-[#012d1d] focus:ring-0"></textarea>
                </div>

                <div class="flex gap-3 pt-2">
                    <button type="button" onclick="toggleModal()" class="w-1/2 bg-gray-100 hover:bg-gray-200 text-gray-700 font-bold py-3 rounded-xl text-xs transition-all">Batal</button>
                    <button type="submit" class="w-1/2 bg-[#012d1d] hover:bg-[#1b4332] text-white font-bold py-3 rounded-xl text-xs transition-all">Simpan &amp; Terbitkan</button>
                </div>
            </form>
        </div>
    </div>

    <script>
        function toggleAdminSidebar() {
            document.getElementById('adminSidebar').classList.toggle('-ml-64');
        }
        function toggleModal() {
            const modal = document.getElementById('modalTambah');
            modal.classList.toggle('opacity-0');
            modal.classList.toggle('pointer-events-none');
        }
    </script>
</body>
</html>