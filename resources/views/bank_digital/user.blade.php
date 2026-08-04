<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portal Transparansi Data Digital 3R — Desa Balonggandu</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Chart.js untuk Grafik Monitoring -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&family=Be+Vietnam+Pro:wght@400;500;600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@400,0..1&display=block" rel="stylesheet">
    <style>
        * { font-family: 'Be Vietnam Pro', sans-serif; }
        h1,h2,h3,h4 { font-family: 'Plus Jakarta Sans', sans-serif; }
        .fill-icon { font-variation-settings: 'FILL' 1; }
        @keyframes marquee {
            0% { transform: translateX(100%); }
            100% { transform: translateX(-100%); }
        }
        .animate-marquee {
            display: inline-block;
            animation: marquee 25s linear infinite;
        }
    </style>
</head>
<body class="bg-[#f8f9fa] text-[#191c1d] min-h-screen flex flex-col">

    <!-- RUNNING TEXT / PENGUMUMAN PUBLIK -->
    <div class="bg-blue-600 text-white text-xs py-2 px-4 overflow-hidden whitespace-nowrap shadow-inner flex items-center">
        <span class="bg-blue-800 text-white text-[10px] font-bold px-2 py-0.5 rounded mr-3 uppercase tracking-wider flex-shrink-0 flex items-center gap-1">
            <span class="material-symbols-outlined text-[14px]">campaign</span> Info Desa
        </span>
        <div class="overflow-hidden w-full">
            <p class="animate-marquee font-medium">
                🌿 Selamat datang di Portal Transparansi Bank Sampah 3R Desa Balonggandu! Mari bersama-sama wujudkan lingkungan bersih, mandiri, dan bernilai ekonomi tinggi. Setorkan sampah terpilah Anda setiap hari Selasa dan Kamis di titik drop-point RT masing-masing! ✨
            </p>
        </div>
    </div>

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
                </a>
                <a href="/admin/bank-digital/login" class="text-xs bg-blue-600 hover:bg-blue-700 text-white font-bold px-4 py-2.5 rounded-full transition-all shadow-sm flex items-center gap-1.5">
                    <span class="material-symbols-outlined text-[16px]">admin_panel_settings</span>
                    Aparatur Desa (Login 3R) ↗
                </a>
            </div>
        </div>
    </header>

    <main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8 flex-1 w-full">

        <!-- BANNER UTAMA -->
        <div class="bg-gradient-to-r from-blue-900 to-slate-900 rounded-3xl p-8 text-white mb-8 shadow-md flex flex-col md:flex-row justify-between items-start md:items-center gap-4">
            <div>
                <h2 class="text-2xl sm:text-3xl font-extrabold mb-2">Transparansi Pengelolaan Sampah 3R Desa 🌿</h2>
                <p class="text-xs sm:text-sm text-blue-200 max-w-2xl leading-relaxed">
                    Pantau data statistik pemilahan sampah warga, kategori bahan daur ulang, serta catatan transparansi program Reduce, Reuse, Recycle di Desa Balonggandu.
                </p>
            </div>
            <div class="bg-white/10 backdrop-blur-md px-4 py-3 rounded-2xl border border-white/15 flex items-center gap-3">
                <span class="w-3 h-3 rounded-full bg-emerald-400 animate-ping"></span>
                <div>
                    <p class="text-[10px] text-blue-200 uppercase font-bold tracking-wider">Status Sistem</p>
                    <p class="text-xs font-extrabold text-white">Live Monitoring Publik</p>
                </div>
            </div>
        </div>

        <!-- STATISTIK UTAMA -->
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

        <!-- SECTION: GRAFIK MONITORING & KALKULATOR SIMULASI WARGA -->
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 mb-8">
            <!-- Grafik Statistik -->
            <div class="lg:col-span-8 bg-white p-6 sm:p-8 rounded-3xl border border-gray-200 shadow-sm flex flex-col justify-between">
                <div class="flex items-center justify-between mb-4">
                    <div>
                        <h2 class="text-lg font-bold text-slate-900 flex items-center gap-2">
                            <span class="material-symbols-outlined text-blue-600">monitoring</span>
                            Grafik Volume Pengumpulan Sampah
                        </h2>
                        <p class="text-xs text-gray-500">Tren akumulasi berat sampah terkelola (Kg) berdasarkan aktivitas warga.</p>
                    </div>
                    <span class="text-[11px] bg-slate-100 font-bold px-3 py-1 rounded-full text-slate-600">Publik View</span>
                </div>
                <div class="relative h-64 w-full">
                    <canvas id="monitoringChart"></canvas>
                </div>
            </div>

            <!-- FITUR INTERAKTIF: KALKULATOR ESTIMASI SETOR SAMPAH -->
            <div class="lg:col-span-4 bg-gradient-to-br from-slate-900 to-blue-950 p-6 sm:p-8 rounded-3xl text-white shadow-sm flex flex-col justify-between">
                <div>
                    <div class="flex items-center justify-between mb-4">
                        <h3 class="font-bold text-base flex items-center gap-2 text-white">
                            <span class="material-symbols-outlined text-[#fd8603]">calculate</span> Kalkulator Daur Ulang
                        </h3>
                        <span class="text-[10px] bg-amber-500/20 border border-amber-400/30 px-2.5 py-0.5 rounded-full text-amber-300">Simulasi Warga</span>
                    </div>
                    <p class="text-xs text-slate-300 leading-relaxed mb-4">
                        Hitung perkiraan nilai rupiah yang bisa Anda dapatkan dari menyetor sampah rumah tangga.
                    </p>

                    <div class="space-y-3">
                        <div>
                            <label class="block text-[11px] font-bold text-slate-300 mb-1">Pilih Jenis Sampah</label>
                            <select id="calcKategori" class="w-full bg-slate-800 border border-slate-700 text-xs rounded-xl p-2.5 text-white focus:outline-none focus:border-blue-500">
                                @foreach($kategori as $k)
                                    <option value="{{ $k->harga_per_satuan }}">{{ $k->nama_kategori }} (Rp {{ number_format($k->harga_per_satuan) }}/{{ $k->satuan }})</option>
                                @endforeach
                            </select>
                        </div>
                        <div>
                            <label class="block text-[11px] font-bold text-slate-300 mb-1">Perkiraan Berat (Kg)</label>
                            <input type="number" id="calcBerat" value="1" min="0.1" step="0.5" class="w-full bg-slate-800 border border-slate-700 text-xs rounded-xl p-2.5 text-white focus:outline-none focus:border-blue-500" oninput="hitungSimulasi()">
                        </div>
                        <div class="bg-blue-900/50 border border-blue-700/50 p-3.5 rounded-xl text-center mt-2">
                            <p class="text-[10px] text-blue-200 uppercase font-bold tracking-wider">Estimasi Nilai Diterima</p>
                            <h4 id="calcHasil" class="text-xl font-extrabold text-[#fd8603] mt-0.5">Rp 0</h4>
                        </div>
                    </div>
                </div>

                <div class="pt-4 mt-4 border-t border-slate-800 text-center">
                    <p class="text-[10px] text-slate-400">💡 Setorkan ke bank sampah desa untuk pencairan saldo nyata!</p>
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
                                <span class="material-symbols-outlined text-[18px]">compress</span> Reduce (Kurangi)
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
                                <span class="material-symbols-outlined text-[18px]">autorenew</span> Reuse (Gunakan Kembali)
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

    <!-- SCRIPT CHART.JS & KALKULATOR -->
    <script>
        // Logika Kalkulator Simulasi Warga
        function hitungSimulasi() {
            const harga = parseFloat(document.getElementById('calcKategori').value) || 0;
            const berat = parseFloat(document.getElementById('calcBerat').value) || 0;
            const total = harga * berat;
            document.getElementById('calcHasil').innerText = 'Rp ' + total.toLocaleString('id-ID');
        }

        // Jalankan saat pertama load
        document.getElementById('calcKategori').addEventListener('change', hitungSimulasi);
        hitungSimulasi();

        // Grafik Chart.js
        const ctx = document.getElementById('monitoringChart').getContext('2d');
        const monitoringChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: ['Minggu 1', 'Minggu 2', 'Minggu 3', 'Minggu 4', 'Bulan Ini'],
                datasets: [{
                    label: 'Volume Sampah (Kg)',
                    data: [0, 0.5, 1.2, 1.5, {{ $totalSampahTerkumpul ?? 2.0 }}],
                    borderColor: '#2563eb',
                    backgroundColor: 'rgba(37, 99, 235, 0.1)',
                    borderWidth: 3,
                    fill: true,
                    tension: 0.4
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: { display: false }
                },
                scales: {
                    y: {
                        beginAtZero: true,
                        grid: { color: '#f1f5f9' }
                    },
                    x: {
                        grid: { display: false }
                    }
                }
            }
        });

        // Filter Tabel Warga
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