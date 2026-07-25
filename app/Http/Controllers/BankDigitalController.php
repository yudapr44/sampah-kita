<?php

namespace App\Http\Controllers;

use App\Models\Nasabah;
use App\Models\KategoriSampah;
use App\Models\Transaksi;
use Illuminate\Http\Request;

class BankDigitalController extends Controller
{
    // 1. TAMPILAN KHUSUS WARGA / PUBLIC USER
    public function publicUser()
    {
        $kategori = KategoriSampah::orderBy('nama_kategori', 'asc')->get();
        
        $totalNasabah = Nasabah::count();
        $totalSaldoTersimpan = Nasabah::sum('saldo');
        $totalSampahTerkumpul = Transaksi::where('jenis_transaksi', 'setor')->sum('berat');
        
        $transaksiTerakhir = Transaksi::with(['nasabah', 'kategori'])
            ->orderBy('id', 'desc')
            ->take(15)
            ->get();

        return view('bank_digital.user', compact(
            'kategori', 
            'totalNasabah', 
            'totalSaldoTersimpan', 
            'totalSampahTerkumpul', 
            'transaksiTerakhir'
        ));
    }

    // 2. TAMPILAN KHUSUS ADMIN / PENGELOLA (Ada Form Input)
    public function index()
    {
        $nasabahs = Nasabah::orderBy('nama', 'asc')->get();
        $kategori = KategoriSampah::orderBy('nama_kategori', 'asc')->get();
        
        $totalNasabah = $nasabahs->count();
        $totalSaldoTersimpan = $nasabahs->sum('saldo');
        $totalSampahTerkumpul = Transaksi::where('jenis_transaksi', 'setor')->sum('berat');
        
        $transaksiTerakhir = Transaksi::with(['nasabah', 'kategori'])
            ->orderBy('id', 'desc')
            ->take(10)
            ->get();

        return view('bank_digital.index', compact(
            'nasabahs', 
            'kategori', 
            'totalNasabah', 
            'totalSaldoTersimpan', 
            'totalSampahTerkumpul', 
            'transaksiTerakhir'
        ));
    }

    public function storeNasabah(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'no_hp' => 'required|string|max:20',
            'alamat' => 'required|string',
        ]);

        $noRekening = 'BS-' . str_pad(Nasabah::count() + 1, 3, '0', STR_PAD_LEFT);

        Nasabah::create([
            'no_rekening' => $noRekening,
            'nama' => $request->nama,
            'nik' => $request->nik,
            'no_hp' => $request->no_hp,
            'alamat' => $request->alamat,
            'saldo' => 0
        ]);

        return back()->with('success', 'Nasabah baru berhasil terdaftar! No. Rekening: ' . $noRekening);
    }

    public function storeTransaksi(Request $request)
    {
        $request->validate([
            'nasabah_id' => 'required|exists:nasabah,id',
            'kategori_sampah_id' => 'required|exists:kategori_sampah,id',
            'berat' => 'required|numeric|min:0.1',
        ]);

        $nasabah = Nasabah::findOrFail($request->nasabah_id);
        $kategori = KategoriSampah::findOrFail($request->kategori_sampah_id);

        $totalHarga = $request->berat * $kategori->harga_per_satuan;
        $kodeTransaksi = 'TRX-' . time();

        Transaksi::create([
            'kode_transaksi' => $kodeTransaksi,
            'nasabah_id' => $nasabah->id,
            'kategori_sampah_id' => $kategori->id,
            'berat' => $request->berat,
            'harga_satuan' => $kategori->harga_per_satuan,
            'total_harga' => $totalHarga,
            'jenis_transaksi' => 'setor',
            'tanggal' => now()
        ]);

        $nasabah->increment('saldo', $totalHarga);

        return back()->with('success', 'Setoran sampah berhasil dicatat! Saldo Rp ' . number_format($totalHarga, 0, ',', '.') . ' ditambahkan ke ' . $nasabah->nama);
    }
}