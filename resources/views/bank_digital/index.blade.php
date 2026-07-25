<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pengelolaan Data Digital 3R — Admin Panel Desa Balonggandu</title>
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
                <a href="/admin/bank-digital" class="flex items-center gap-3 px-4 py-3 rounded-xl bg-white/15 text-white font-bold text-xs shadow-inner">
                    <span class="material-symbols-outlined text-[20px] text-[#fd8603] fill-icon">analytics</span>
                    Data Digital 3R
                </a>
                <a href="/admin/artikel" class="flex items-center gap-3 px-4 py-3 rounded-xl text-gray-300 hover:text-white hover:bg-white/10 font-semibold text-xs transition-all">
                    <span class="material-symbols-outlined text-[20px]">school</span>
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
            <div class="mb-6 p-4 bg-emerald-600 text-white rounded-2xl shadow-md flex items-center justify-between animate-bounce">
                <div class="flex items-center gap-3">
                    <span class="material-symbols-outlined fill-icon text-[24px]">check_circle</span>
                    <p class="text-sm font-semibold">{{ session('success') }}</p>
                </div>
                <button onclick="this.parentElement.remove()" class="text-white/80 hover:text-white">
                    <span class="material-symbols-outlined text-[20px]">close</span>
                </button>
            </div>
        @endif

        <div class="flex items-center justify-between gap-4 mb-8 bg-white p-4 sm:p-6 rounded-3xl border border-gray-100 shadow-sm">
            <div class="flex items-center gap-3">
                <button onclick="toggleAdminSidebar()" class="p-2.5 rounded-2xl bg-gray-100 hover:bg-[#012d1d] hover:text-white text-[#012d1d] transition-all flex items-center justify-center shadow-sm cursor-pointer">
                    <span class="material-symbols-outlined text-[24px]">menu</span>
                </button>
                <div>
                    <div class="flex items-center gap-2">
                        <h2 class="text-base sm:text-xl font-extrabold text-[#012d1d]">Pengelolaan Data Digital 3R</h2>
                        <span class="bg-emerald-100 text-emerald-800 text-[10px] font-bold px-2.5 py-0.5 rounded-full">Modul Desa</span>
                    </div>
                    <p class="text-[11px] sm:text-xs text-gray-500 mt-0.5">Pendataan pemilahan sampah warga (Reduce, Reuse, Recycle)</p>
                </div>
            </div>
            <a href="/bank-digital" target="_blank" class="text-xs bg-emerald-50 hover:bg-emerald-100 text-emerald-800 font-bold px-3.5 py-2 sm:px-4 sm:py-2.5 rounded-xl border border-emerald-200 transition-all flex items-center gap-1.5">
                <span class="material-symbols-outlined text-[16px]">visibility</span>
                <span class="hidden sm:inline">Pratinjau</span> Portal Warga ↗
            </a>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-3 gap-6 mb-8">
            <div class="bg-white p-6 rounded-3xl border border-gray-100 shadow-sm flex items-center justify-between">
                <div>
                    <p class="text-xs font-bold text-gray-400 uppercase tracking-wider">Warga Partisipan 3R</p>
                    <h3 class="text-3xl font-extrabold text-[#012d1d] mt-1">{{ number_format($totalNasabah) }} <span class="text-sm font-semibold text-gray-400">Terdata</span></h3>
                </div>
                <div class="w-14 h-14 rounded-2xl bg-emerald-50 flex items-center justify-center text-emerald-700">
                    <span class="material-symbols-outlined text-[32px] fill-icon">badge</span>
                </div>
            </div>

            <div class="bg-white p-6 rounded-3xl border border-gray-100 shadow-sm flex items-center justify-between">
                <div>
                    <p class="text-xs font-bold text-gray-400 uppercase tracking-wider">Est. Nilai Daur Ulang</p>
                    <h3 class="text-3xl font-extrabold text-[#fd8603] mt-1">Rp {{ number_format($totalSaldoTersimpan, 0, ',', '.') }}</h3>
                </div>
                <div class="w-14 h-14 rounded-2xl bg-orange-50 flex items-center justify-center text-[#fd8603]">
                    <span class="material-symbols-outlined text-[32px] fill-icon">payments</span>
                </div>
            </div>

            <div class="bg-white p-6 rounded-3xl border border-gray-100 shadow-sm flex items-center justify-between">
                <div>
                    <p class="text-xs font-bold text-gray-400 uppercase tracking-wider">Total Sampah Terkelola</p>
                    <h3 class="text-3xl font-extrabold text-blue-700 mt-1">{{ number_format($totalSampahTerkumpul, 1) }} <span class="text-sm font-semibold text-gray-400">Kg</span></h3>
                </div>
                <div class="w-14 h-14 rounded-2xl bg-blue-50 flex items-center justify-center text-blue-700">
                    <span class="material-symbols-outlined text-[32px] fill-icon">eco</span>
                </div>
            </div>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8">
            <div class="lg:col-span-4 space-y-6">
                <div class="bg-white p-6 rounded-3xl border border-gray-100 shadow-sm">
                    <div class="flex items-center gap-2.5 mb-5 pb-3 border-b border-gray-100">
                        <span class="material-symbols-outlined text-[#fd8603] fill-icon text-[24px]">post_add</span>
                        <h2 class="text-base font-bold text-[#012d1d]">Input Pendataan Sampah 3R</h2>
                    </div>

                    <form action="{{ route('transaksi.store') }}" method="POST" class="space-y-4">
                        @csrf
                        <div>
                            <label class="block text-xs font-bold text-gray-700 mb-1.5">Pilih Warga Partisipan</label>
                            <select name="nasabah_id" required class="w-full rounded-xl border-gray-200 bg-gray-50 text-xs font-semibold p-3 focus:bg-white focus:border-[#012d1d] focus:ring-0 transition-all">
                                <option value="">-- Pilih ID / Nama Warga --</option>
                                @foreach($nasabahs as $n)
                                    <option value="{{ $n->id }}">{{ $n->no_rekening }} - {{ $n->nama }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div>
                            <label class="block text-xs font-bold text-gray-700 mb-1.5">Kategori Sampah Daur Ulang</label>
                            <select name="kategori_sampah_id" required class="w-full rounded-xl border-gray-200 bg-gray-50 text-xs font-semibold p-3 focus:bg-white focus:border-[#012d1d] focus:ring-0 transition-all">
                                <option value="">-- Pilih Jenis Sampah --</option>
                                @foreach($kategori as $k)
                                    <option value="{{ $k->id }}">{{ $k->nama_kategori }} — Rp {{ number_format($k->harga_per_satuan) }}/{{ $k->satuan }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div>
                            <label class="block text-xs font-bold text-gray-700 mb-1.5">Berat Sampah (Kg)</label>
                            <input type="number" step="0.1" name="berat" placeholder="Contoh: 2.5" required class="w-full rounded-xl border-gray-200 bg-gray-50 text-xs font-semibold p-3 focus:bg-white focus:border-[#012d1d] focus:ring-0 transition-all">
                        </div>

                        <button type="submit" class="w-full bg-[#012d1d] hover:bg-[#1b4332] active:scale-95 text-white font-bold py-3.5 rounded-xl transition-all shadow-md flex items-center justify-center gap-2 text-xs">
                            <span class="material-symbols-outlined text-[18px]">save</span>
                            Simpan Pendataan 3R
                        </button>
                    </form>
                </div>

                <div class="bg-white p-6 rounded-3xl border border-gray-100 shadow-sm">
                    <div class="flex items-center gap-2.5 mb-5 pb-3 border-b border-gray-100">
                        <span class="material-symbols-outlined text-[#012d1d] fill-icon text-[24px]">person_add</span>
                        <h2 class="text-base font-bold text-[#012d1d]">Registrasi Warga Partisipan</h2>
                    </div>

                    <form action="{{ route('nasabah.store') }}" method="POST" class="space-y-4">
                        @csrf
                        <div>
                            <label class="block text-xs font-bold text-gray-700 mb-1.5">Nama Lengkap Warga</label>
                            <input type="text" name="nama" placeholder="Sesuai KTP" required class="w-full rounded-xl border-gray-200 bg-gray-50 text-xs font-semibold p-3 focus:bg-white focus:border-[#012d1d] focus:ring-0">
                        </div>
                        <div>
                            <label class="block text-xs font-bold text-gray-700 mb-1.5">No. WhatsApp / HP</label>
                            <input type="text" name="no_hp" placeholder="08xxxxxxxxxx" required class="w-full rounded-xl border-gray-200 bg-gray-50 text-xs font-semibold p-3 focus:bg-white focus:border-[#012d1d] focus:ring-0">
                        </div>
                        <div>
                            <label class="block text-xs font-bold text-gray-700 mb-1.5">Alamat RT / RW</label>
                            <textarea name="alamat" rows="2" placeholder="Dusun / RT / RW Balonggandu..." required class="w-full rounded-xl border-gray-200 bg-gray-50 text-xs font-semibold p-3 focus:bg-white focus:border-[#012d1d] focus:ring-0"></textarea>
                        </div>
                        <button type="submit" class="w-full bg-gray-900 hover:bg-black active:scale-95 text-white font-bold py-3 rounded-xl transition-all text-xs flex items-center justify-center gap-2">
                            Daftarkan Warga
                        </button>
                    </form>
                </div>
            </div>

            <div class="lg:col-span-8 space-y-6">
                <div class="bg-white p-6 rounded-3xl border border-gray-100 shadow-sm">
                    <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4 mb-6">
                        <div>
                            <h2 class="text-lg font-bold text-[#012d1d] flex items-center gap-2">
                                <span class="material-symbols-outlined text-[#012d1d] fill-icon">table_chart</span>
                                Riwayat Pendataan Sampah 3R
                            </h2>
                            <p class="text-xs text-gray-400 mt-0.5">Catatan realtime hasil pemilahan sampah warga Desa Balonggandu</p>
                        </div>
                        <div class="relative min-w-[220px]">
                            <span class="material-symbols-outlined absolute left-3 top-2.5 text-gray-400 text-[18px]">search</span>
                            <input type="text" id="searchInput" onkeyup="filterTable()" placeholder="Cari nama / ID..." class="w-full pl-9 pr-3 py-2 bg-gray-50 border border-gray-200 rounded-xl text-xs focus:bg-white focus:border-[#012d1d] focus:ring-0">
                        </div>
                    </div>

                    <div class="overflow-x-auto">
                        <table class="w-full text-left text-xs" id="transaksiTable">
                            <thead class="bg-gray-50 text-gray-500 font-bold uppercase border-y border-gray-100">
                                <tr>
                                    <th class="py-3.5 px-4">Kode &amp; Tgl</th>
                                    <th class="py-3.5 px-4">Nama Warga</th>
                                    <th class="py-3.5 px-4">Kategori Sampah</th>
                                    <th class="py-3.5 px-4">Berat</th>
                                    <th class="py-3.5 px-4 text-right">Est. Nilai</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-100">
                                @forelse($transaksiTerakhir as $t)
                                    <tr class="hover:bg-emerald-50/40 transition-colors">
                                        <td class="py-3.5 px-4">
                                            <p class="font-bold text-[#012d1d]">{{ $t->kode_transaksi }}</p>
                                            <p class="text-[10px] text-gray-400 mt-0.5">{{ $t->tanggal }}</p>
                                        </td>
                                        <td class="py-3.5 px-4">
                                            <p class="font-bold text-gray-800">{{ $t->nasabah->nama ?? 'Warga' }}</p>
                                            <span class="inline-block px-2 py-0.5 bg-gray-100 text-[10px] font-semibold text-gray-600 rounded mt-0.5">
                                                ID: {{ $t->nasabah->no_rekening ?? '-' }}
                                            </span>
                                        </td>
                                        <td class="py-3.5 px-4">
                                            <span class="px-2.5 py-1 bg-emerald-100 text-emerald-800 rounded-lg font-semibold text-[11px]">
                                                {{ $t->kategori->nama_kategori ?? 'Sampah Terpilah' }}
                                            </span>
                                        </td>
                                        <td class="py-3.5 px-4 font-extrabold text-gray-800">
                                            {{ number_format($t->berat, 1) }} Kg
                                        </td>
                                        <td class="py-3.5 px-4 text-right font-extrabold text-emerald-700 text-sm">
                                            + Rp {{ number_format($t->total_harga, 0, ',', '.') }}
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="5" class="text-center py-12 text-gray-400">Belum ada data pemilahan sampah.</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="bg-gradient-to-br from-[#012d1d] to-[#1b4332] p-6 rounded-3xl text-white shadow-md">
                    <div class="flex items-center justify-between mb-4">
                        <div class="flex items-center gap-2.5">
                            <span class="material-symbols-outlined text-[#ffb781] fill-icon text-[24px]">category</span>
                            <h3 class="font-bold text-base">Katalog Kategori Sampah Daur Ulang (3R)</h3>
                        </div>
                        <span class="text-[11px] bg-white/10 px-3 py-1 rounded-full text-[#c1ecd4]">Standar Desa</span>
                    </div>

                    <div class="grid grid-cols-2 sm:grid-cols-4 gap-3">
                        @foreach($kategori as $k)
                            <div class="bg-white/10 backdrop-blur-sm p-3.5 rounded-2xl border border-white/10">
                                <p class="text-[11px] text-[#c1ecd4] font-medium truncate">{{ $k->nama_kategori }}</p>
                                <p class="text-sm font-extrabold text-[#ffb781] mt-1">Rp {{ number_format($k->harga_per_satuan, 0, ',', '.') }}<span class="text-[10px] font-normal text-white">/{{ $k->satuan }}</span></p>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </main>

    <script>
        function toggleAdminSidebar() {
            document.getElementById('adminSidebar').classList.toggle('-ml-64');
        }
        function filterTable() {
            const input = document.getElementById("searchInput").value.toUpperCase();
            const tr = document.getElementById("transaksiTable").getElementsByTagName("tr");
            for (let i = 1; i < tr.length; i++) {
                let show = false;
                const td = tr[i].getElementsByTagName("td");
                for (let j = 0; j < td.length; j++) {
                    if (td[j] && td[j].innerText.toUpperCase().indexOf(input) > -1) {
                        show = true;
                        break;
                    }
                }
                tr[i].style.display = show ? "" : "none";
            }
        }
    </script>
</body>
</html>