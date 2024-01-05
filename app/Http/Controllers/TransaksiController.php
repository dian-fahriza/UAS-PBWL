<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaksi;
use App\Models\User;
use App\Models\Category;

class TransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rows = Transaksi::all();
        return view('transaksi.index', compact('rows'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $users = User::all();
        $categories = Category::all();

        return view('transaksi.create', compact('users', 'categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validasi request disini jika diperlukan

        // Menyimpan transaksi dengan menggunakan relasi
        $transaksi = Transaksi::create([
            'trans_user_id' => $request->trans_user_id,
            'trans_cat_id' => $request->trans_cat_id,
            'trans_jumlah' => $request->trans_jumlah,
            'trans_deskripsi' => $request->trans_deskripsi,
            'trans_tanggal_transaksi' => $request->trans_tanggal_transaksi
        ]);

        // Menambahkan relasi dengan User dan Category
        $transaksi->user()->associate(User::find($request->trans_user_id));
        $transaksi->category()->associate(Category::find($request->trans_cat_id));

        // Simpan perubahan relasi
        $transaksi->save();

        return redirect('transaksi');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // Your logic for show method
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $row = Transaksi::find($id);
        return view('transaksi.edit', compact('row'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $row = Transaksi::findOrFail($id);

        $row->update([
            'trans_user_id' => $request->trans_user_id,
            'trans_cat_id' => $request->trans_cat_id,
            'trans_jumlah' => $request->trans_jumlah,
            'trans_deskripsi' => $request->trans_deskripsi,
            'trans_tanggal_transaksi' => $request->trans_tanggal_transaksi
        ]);

        return redirect('transaksi');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $row = Transaksi::findOrFail($id);

        $row->delete();

        return redirect('transaksi');
    }
}
