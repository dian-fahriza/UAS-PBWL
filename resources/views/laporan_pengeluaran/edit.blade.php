<!-- resources/views/laporan_pengeluaran/edit.blade.php -->

@extends('layouts.app')

@section('content')
    <h2>Edit Laporan Pengeluaran</h2>

    <form action="{{ url('/laporan_pengeluaran/' . $laporanPengeluaran->id) }}" method="post">
        @csrf
     
        <div class="mb-3">

        <label for="user_id">User ID:</label>
        <input type="text" name="user_id" class="form-control" value="{{ $laporanPengeluaran->user_id }}" required>

        <label for="total_pengeluaran">Total Pengeluaran:</label>
        <input type="number" name="total_pengeluaran" class="form-control" value="{{ $laporanPengeluaran->total_pengeluaran }}" required>

        <label for="tanggal_laporan">Tanggal Laporan:</label>
        <input type="date" name="tanggal_laporan" class="form-control" value="{{ $laporanPengeluaran->tanggal_laporan }}" required>

        <label for="catatan_laporan">Catatan Laporan:</label>
        <textarea name="catatan_laporan"class="form-control">{{ $laporanPengeluaran->catatan_laporan }}</textarea>

        </div>
        <div class="mb-3">
            <input type="submit" value="UPDATE" class="btn btn-primary">
        </div>
    </form>
 
@endsection
