<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portal Transparansi Data Digital 3R — Desa Balonggandu</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&family=Be+Vietnam+Pro:wght@400;500;600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@400,0..1&display=block" rel="stylesheet">
    <style>
        * { font-family: 'Be Vietnam Pro', sans-serif; }
        h1,h2,h3,h4 { font-family: 'Plus Jakarta Sans', sans-serif; }
        .fill-icon { font-variation-settings: 'FILL' 1; }
    </style>
</head>
<body class="bg-[#f8f9fa] text-[#191c1d] min-h-screen flex flex-col">

    <!-- HEADER -->
    <header class="bg-slate-900 text-white sticky top-0 z-50 shadow-md">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 h-20 flex items-center justify-between">
            <div class="flex items-center gap-3">
                <span class="material-symbols-outlined text-blue-400 fill-icon text-[32px]">recycling</span>
                <div>
                    <h1 class="font-extrabold text-[19px] leading-none">Portal Data Digital 3R</h1>
                    <p class="text-[11px] text-blue-300 mt-1">Desa Balonggandu, Karawang</p>
                </div>
            </div>

            <div class="flex items-center gap-3">
                <a href="/bank" class="text-xs bg-white/10 hover:bg-white/20 text-white font-semibold px-4 py-2.5 rounded-full transition-all">
                    ← Kembali ke Main Portal
                <a href="{{ route('admin.login') }}" class="text-xs bg-blue-600 hover:bg-blue-700 text-white font-bold px-4 py-2.5 rounded-full transition-all shadow-sm flex items-center gap-1.5">
    <span class="material-symbols-outlined text-[16px]">admin_panel_settings</span>
    Aparatur Desa (Login 3R) ↗
</a>
</a>
            </div>
        </div>
    </header>

    <main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8 flex-1 w-full">

        <!-- BANNER UTAMA -->
        <div class="bg-gradient-to-r from-blue-900 to-slate-900 rounded-3xl p-8 text-white mb-8 shadow-md">
            <h2 class="text-2xl sm:text-3xl font-extrabold mb-2">Transparansi Pengelolaan Sampah 3R Desa 🌿</h2>
            <p class="text-xs sm:text-sm text-blue-200 max-w-2xl leading-relaxed">
                Pantau data statistik pemilahan sampah warga, kategori bahan daur ulang, serta catatan transparansi program Reduce, Reuse, Recycle di Desa Balonggandu.
            </p>
        </div>

        <!-- STATISTIK KARTU -->
        <div class="grid grid-cols-1 sm:grid-cols-3 gap-6 mb-8">
            <div class="bg-white p-6 rounded-2xl border border-gray-200 shadow-sm flex items-center justify-between">
                <div>
                    <p class="text-xs font-bold text-gray-500 uppercase">Warga Partisipan 3R</p>
                    <h3 class="text-2xl font-bold text-slate-900 mt-1">{{ number_format($totalNasabah) }} <span class="text-xs font-normal text-gray-500">Warga</span></h3>
                </div>
                <div class="w-12 h-12 rounded-xl bg-blue-50 flex items-center justify-center text-blue-600">
                    <span class="material-symbols-outlined text-[28px]">badge</span>
                </div>
            </div>

            <div class="bg-white p-6 rounded-2xl border border-gray-200 shadow-sm flex items-center justify-between">
                <div>
                    <p class="text-xs font-bold text-gray-500 uppercase">Est. Nilai Daur Ulang</p>
                    <h3 class="text-2xl font-bold text-[#fd8603] mt-1">Rp {{ number_format($totalSaldoTersimpan, 0, ',', '.') }}</h3>
                </div>
                <div class="w-12 h-12 rounded-xl bg-orange-50 flex items-center justify-center text-[#fd8603]">
                    <span class="material-symbols-outlined text-[28px]">payments</span>
                </div>
            </div>

            <div class="bg-white p-6 rounded-2xl border border-gray-200 shadow-sm flex items-center justify-between">
                <div>
                    <p class="text-xs font-bold text-gray-500 uppercase">Sampah Terkelola</p>
                    <h3 class="text-2xl font-bold text-blue-700 mt-1">{{ number_format($totalSampahTerkumpul, 1) }} <span class="text-xs font-normal text-gray-500">Kg</span></h3>
                </div>
                <div class="w-12 h-12 rounded-xl bg-blue-50 flex items-center justify-center text-blue-700">
                    <span class="material-symbols-outlined text-[28px]">eco</span>
                </div>
            </div>
        </div>

        <!-- KATOGORI 3 PILAR (REDUCE, REUSE, RECYCLE) -->
        <div class="bg-white p-6 sm:p-8 rounded-3xl border border-gray-200 shadow-sm mb-8">
            <div class="flex items-center justify-between mb-6">
                <div>
                    <h2 class="text-lg font-bold text-slate-900 flex items-center gap-2">
                        <span class="material-symbols-outlined text-blue-600">category</span>
                        Pilar & Katalog Sampah Daur Ulang 3R
                    </h2>
                    <p class="text-xs text-gray-500 mt-0.5">Klasifikasi pengelolaan sampah berdasarkan prinsip Reduce, Reuse, dan Recycle.</p>
                </div>
                <span class="text-xs bg-blue-50 text-blue-700 font-bold px-3 py-1 rounded-full border border-blue-200">Resmi Desa</span>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <!-- REDUCE -->
                <div class="bg-blue-50/50 p-5 rounded-2xl border border-blue-100 flex flex-col justify-between">
                    <div>
                        <div class="flex items-center justify-between mb-3">
                            <h3 class="font-extrabold text-blue-900 text-sm flex items-center gap-1.5">
                                <span class="material-symbols-outlined text-[18px]">compress</span> Reduce (Purangan)
                            </h3>
                            <span class="text-[10px] bg-blue-200 text-blue-800 font-bold px-2 py-0.5 rounded">Pencegahan</span>
                        </div>
                        <p class="text-xs text-gray-600 mb-4 leading-relaxed">Meminimalisir penggunaan produk berpotensi sampah plastik sekali pakai dari sumbernya.</p>
                        <div class="space-y-2">
                            @foreach($kategori->take(2) as $k)
                                <div class="bg-white p-2.5 rounded-xl border border-gray-200/60 flex items-center justify-between">
                                    <span class="text-xs font-semibold text-gray-700 truncate pr-2">{{ $k->nama_kategori }}</span>
                                    <span class="text-xs font-bold text-[#fd8603] whitespace-nowrap">Rp {{ number_format($k->harga_per_satuan, 0, ',', '.') }}/{{ $k->satuan }}</span>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>

                <!-- REUSE -->
                <div class="bg-emerald-50/50 p-5 rounded-2xl border border-emerald-100 flex flex-col justify-between">
                    <div>
                        <div class="flex items-center justify-between mb-3">
                            <h3 class="font-extrabold text-emerald-900 text-sm flex items-center gap-1.5">
                                <span class="material-symbols-outlined text-[18px]">autorenew</span> Reuse (Guna Ulang)
                            </h3>
                            <span class="text-[10px] bg-emerald-200 text-emerald-800 font-bold px-2 py-0.5 rounded">Optimalisasi</span>
                        </div>
                        <p class="text-xs text-gray-600 mb-4 leading-relaxed">Memanfaatkan kembali barang layak pakai atau wadah bekas secara langsung tanpa pengolahan ulang.</p>
                        <div class="space-y-2">
                            @foreach($kategori->skip(2)->take(2) as $k)
                                <div class="bg-white p-2.5 rounded-xl border border-gray-200/60 flex items-center justify-between">
                                    <span class="text-xs font-semibold text-gray-700 truncate pr-2">{{ $k->nama_kategori }}</span>
                                    <span class="text-xs font-bold text-[#fd8603] whitespace-nowrap">Rp {{ number_format($k->harga_per_satuan, 0, ',', '.') }}/{{ $k->satuan }}</span>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>

                <!-- RECYCLE -->
                <div class="bg-orange-50/50 p-5 rounded-2xl border border-orange-100 flex flex-col justify-between">
                    <div>
                        <div class="flex items-center justify-between mb-3">
                            <h3 class="font-extrabold text-orange-900 text-sm flex items-center gap-1.5">
                                <span class="material-symbols-outlined text-[18px]">recycling</span> Recycle (Daur Ulang)
                            </h3>
                            <span class="text-[10px] bg-orange-200 text-orange-800 font-bold px-2 py-0.5 rounded">Pengolahan</span>
                        </div>
                        <p class="text-xs text-gray-600 mb-4 leading-relaxed">Mengolah sampah rumah tangga melalui proses daur ulang menjadi material atau produk bernilai ekonomi.</p>
                        <div class="space-y-2">
                            @foreach($kategori->skip(4) as $k)
                                <div class="bg-white p-2.5 rounded-xl border border-gray-200/60 flex items-center justify-between">
                                    <span class="text-xs font-semibold text-gray-700 truncate pr-2">{{ $k->nama_kategori }}</span>
                                    <span class="text-xs font-bold text-[#fd8603] whitespace-nowrap">Rp {{ number_format($k->harga_per_satuan, 0, ',', '.') }}/{{ $k->satuan }}</span>
                                </div>
                            @endforeach
                            @if($kategori->count() <= 4 && $kategori->count() > 0)
                                <div class="bg-white p-2.5 rounded-xl border border-gray-200/60 flex items-center justify-between">
                                    <span class="text-xs font-semibold text-gray-700 truncate pr-2">Minyak Jelantah & Organik</span>
                                    <span class="text-xs font-bold text-[#fd8603] whitespace-nowrap">Bervariasi</span>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- RIWAYAT PENDATAAN -->
        <div class="bg-white p-6 rounded-3xl border border-gray-200 shadow-sm">
            <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4 mb-4">
                <h2 class="text-lg font-bold text-slate-900 flex items-center gap-2">
                    <span class="material-symbols-outlined text-blue-600">history</span>
                    Riwayat Pendataan Sampah Terakhir
                </h2>
                <input type="text" id="searchInput" onkeyup="filterTable()" placeholder="Cari nama warga / kode..." class="px-3 py-2 bg-gray-50 border border-gray-300 rounded-xl text-xs focus:ring-0 focus:border-blue-600">
            </div>

            <div class="overflow-x-auto">
                <table class="w-full text-left text-xs" id="transaksiTable">
                    <thead class="bg-gray-100 text-gray-600 font-bold uppercase">
                        <tr>
                            <th class="py-3 px-4">Kode &amp; Tgl</th>
                            <th class="py-3 px-4">Nama Warga</th>
                            <th class="py-3 px-4">Kategori Sampah</th>
                            <th class="py-3 px-4">Berat</th>
                            <th class="py-3 px-4 text-right">Est. Nilai</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-100">
                        @forelse($transaksiTerakhir as $t)
                            <tr class="hover:bg-blue-50/40">
                                <td class="py-3.5 px-4 font-bold text-slate-900">
                                    {{ $t->kode_transaksi }}
                                    <span class="block text-[10px] font-normal text-gray-400">{{ $t->tanggal }}</span>
                                </td>
                                <td class="py-3.5 px-4 font-semibold text-gray-800">{{ $t->nasabah->nama ?? 'Warga' }}</td>
                                <td class="py-3.5 px-4"><span class="px-2.5 py-1 bg-blue-100 text-blue-800 font-bold rounded-lg">{{ $t->kategori->nama_kategori ?? 'Sampah Terpilah' }}</span></td>
                                <td class="py-3.5 px-4 font-bold text-gray-700">{{ number_format($t->berat, 1) }} Kg</td>
                                <td class="py-3.5 px-4 text-right font-extrabold text-blue-700 text-sm">+ Rp {{ number_format($t->total_harga, 0, ',', '.') }}</td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5" class="text-center py-8 text-gray-400">Belum ada riwayat pendataan.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>

    </main>

    <script>
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