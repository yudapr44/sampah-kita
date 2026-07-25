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

    <header class="bg-[#012d1d] text-white sticky top-0 z-50 shadow-md">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 h-20 flex items-center justify-between">
            <div class="flex items-center gap-3">
                <span class="material-symbols-outlined text-[#a5d0b9] fill-icon text-[32px]">recycling</span>
                <div>
                    <h1 class="font-extrabold text-[19px] leading-none">Portal Data Digital 3R</h1>
                    <p class="text-[11px] text-[#a5d0b9]/80 mt-1">Desa Balonggandu, Karawang</p>
                </div>
            </div>

            <div class="flex items-center gap-3">
                <a href="/bank" class="text-xs bg-white/10 hover:bg-white/20 text-white font-semibold px-4 py-2.5 rounded-full transition-all">
                    ← Kembali ke Main Portal
                </a>
                <a href="/admin/login" class="text-xs bg-[#fd8603] hover:bg-[#e07800] text-white font-bold px-4 py-2.5 rounded-full transition-all shadow-sm">
                    Aparatur Desa ↗
                </a>
            </div>
        </div>
    </header>

    <main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8 flex-1 w-full">

        <div class="bg-gradient-to-r from-[#012d1d] to-[#1b4332] rounded-3xl p-8 text-white mb-8 shadow-md">
            <h2 class="text-2xl sm:text-3xl font-extrabold mb-2">Transparansi Pengelolaan Sampah 3R Desa 🌿</h2>
            <p class="text-xs sm:text-sm text-[#c1ecd4]/90 max-w-2xl leading-relaxed">
                Pantau data statistik pemilahan sampah warga, kategori bahan daur ulang, serta catatan transparansi program Reduce, Reuse, Recycle di Desa Balonggandu.
            </p>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-3 gap-6 mb-8">
            <div class="bg-white p-6 rounded-2xl border border-gray-200 shadow-sm flex items-center justify-between">
                <div>
                    <p class="text-xs font-bold text-gray-500 uppercase">Warga Partisipan 3R</p>
                    <h3 class="text-2xl font-bold text-[#012d1d] mt-1">{{ number_format($totalNasabah) }} <span class="text-xs font-normal text-gray-500">Warga</span></h3>
                </div>
                <div class="w-12 h-12 rounded-xl bg-emerald-100 flex items-center justify-center text-[#012d1d]">
                    <span class="material-symbols-outlined text-[28px]">badge</span>
                </div>
            </div>

            <div class="bg-white p-6 rounded-2xl border border-gray-200 shadow-sm flex items-center justify-between">
                <div>
                    <p class="text-xs font-bold text-gray-500 uppercase">Est. Nilai Daur Ulang</p>
                    <h3 class="text-2xl font-bold text-[#fd8603] mt-1">Rp {{ number_format($totalSaldoTersimpan, 0, ',', '.') }}</h3>
                </div>
                <div class="w-12 h-12 rounded-xl bg-orange-100 flex items-center justify-center text-[#fd8603]">
                    <span class="material-symbols-outlined text-[28px]">payments</span>
                </div>
            </div>

            <div class="bg-white p-6 rounded-2xl border border-gray-200 shadow-sm flex items-center justify-between">
                <div>
                    <p class="text-xs font-bold text-gray-500 uppercase">Sampah Terkelola</p>
                    <h3 class="text-2xl font-bold text-blue-700 mt-1">{{ number_format($totalSampahTerkumpul, 1) }} <span class="text-xs font-normal text-gray-500">Kg</span></h3>
                </div>
                <div class="w-12 h-12 rounded-xl bg-blue-100 flex items-center justify-center text-blue-700">
                    <span class="material-symbols-outlined text-[28px]">eco</span>
                </div>
            </div>
        </div>

        <div class="bg-white p-6 rounded-3xl border border-gray-200 shadow-sm mb-8">
            <div class="flex items-center justify-between mb-4">
                <h2 class="text-lg font-bold text-[#012d1d] flex items-center gap-2">
                    <span class="material-symbols-outlined text-[#fd8603]">category</span>
                    Katalog Jenis Sampah Daur Ulang 3R
                </h2>
                <span class="text-xs bg-emerald-100 text-emerald-800 font-bold px-3 py-1 rounded-full">Resmi Desa</span>
            </div>
            <div class="grid grid-cols-2 sm:grid-cols-4 gap-4">
                @foreach($kategori as $k)
                    <div class="bg-gray-50 p-4 rounded-2xl border border-gray-200/80">
                        <p class="text-xs font-bold text-gray-700">{{ $k->nama_kategori }}</p>
                        <p class="text-base font-extrabold text-[#fd8603] mt-1">Rp {{ number_format($k->harga_per_satuan, 0, ',', '.') }} <span class="text-[10px] font-normal text-gray-500">/{{ $k->satuan }}</span></p>
                    </div>
                @endforeach
            </div>
        </div>

        <div class="bg-white p-6 rounded-3xl border border-gray-200 shadow-sm">
            <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4 mb-4">
                <h2 class="text-lg font-bold text-[#012d1d] flex items-center gap-2">
                    <span class="material-symbols-outlined text-[#012d1d]">history</span>
                    Riwayat Pendataan Sampah Terakhir
                </h2>
                <input type="text" id="searchInput" onkeyup="filterTable()" placeholder="Cari nama warga / kode..." class="px-3 py-2 bg-gray-50 border border-gray-300 rounded-xl text-xs focus:ring-0">
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
                            <tr class="hover:bg-gray-50">
                                <td class="py-3.5 px-4 font-bold text-[#012d1d]">
                                    {{ $t->kode_transaksi }}
                                    <span class="block text-[10px] font-normal text-gray-400">{{ $t->tanggal }}</span>
                                </td>
                                <td class="py-3.5 px-4 font-semibold text-gray-800">{{ $t->nasabah->nama ?? 'Warga' }}</td>
                                <td class="py-3.5 px-4"><span class="px-2 py-1 bg-emerald-100 text-emerald-800 font-bold rounded">{{ $t->kategori->nama_kategori ?? 'Sampah Terpilah' }}</span></td>
                                <td class="py-3.5 px-4 font-bold text-gray-700">{{ number_format($t->berat, 1) }} Kg</td>
                                <td class="py-3.5 px-4 text-right font-extrabold text-emerald-700 text-sm">+ Rp {{ number_format($t->total_harga, 0, ',', '.') }}</td>
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