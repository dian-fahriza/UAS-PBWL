<?php
// app/Http/Controllers/LaporanPengeluaranController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LaporanPengeluaran;

class LaporanPengeluaranController extends Controller
{
    public function index()
    {
        $laporanPengeluaran = LaporanPengeluaran::all();
        return view('laporan_pengeluaran.index', compact('laporanPengeluaran'));
    }

    public function create()
    {
        return view('laporan_pengeluaran.create');
    }

    public function store(Request $request)
    {
        // Validasi input form
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'total_pengeluaran' => 'required|numeric',
            'tanggal_laporan' => 'required|date',
            'catatan_laporan' => 'nullable|string',
        ]);

        // Simpan data ke dalam tabel laporan_pengeluaran
        LaporanPengeluaran::create($request->all());

        return redirect('/laporan_pengeluaran')->with('success', 'Laporan Pengeluaran berhasil disimpan.');
    }

    public function edit($id)
    {
        $laporanPengeluaran = LaporanPengeluaran::findOrFail($id);
        return view('laporan_pengeluaran.edit', compact('laporanPengeluaran'));
    }

    public function update(Request $request, $id)
    {
        // Validasi input form
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'total_pengeluaran' => 'required|numeric',
            'tanggal_laporan' => 'required|date',
            'catatan_laporan' => 'nullable|string',
        ]);

        // Update data di dalam tabel laporan_pengeluaran
        $laporanPengeluaran = LaporanPengeluaran::findOrFail($id);
        $laporanPengeluaran->update($request->all());

        return redirect('/laporan_pengeluaran')->with('success', 'Laporan Pengeluaran berhasil diperbarui.');
    }

    public function destroy($id)
    {
        // Hapus data dari tabel laporan_pengeluaran
        $laporanPengeluaran = LaporanPengeluaran::findOrFail($id);
        $laporanPengeluaran->delete();

        return redirect('/laporan_pengeluaran')->with('success', 'Laporan Pengeluaran berhasil dihapus.');
    }
}
