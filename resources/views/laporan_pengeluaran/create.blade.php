<!-- resources/views/laporan_pengeluaran/create.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Add Laporan Pengeluaran</h2>
        <form action="{{ url('laporan_pengeluaran') }}" method="post">
            @csrf
            <div class="form-group">
                <label for="total_pengeluaran">Total Pengeluaran:</label>
                <input type="text" name="total_pengeluaran" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="tanggal_laporan">Tanggal Laporan:</label>
                <input type="date" name="tanggal_laporan" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="catatan_laporan">Catatan Laporan:</label>
                <textarea name="catatan_laporan" class="form-control"></textarea>
            </div>
            <button type="submit" class="btn btn-success">Simpan</button>
        </form>
    </div>
@endsection
