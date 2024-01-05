@extends('layouts.app')

@section('content')
    <h2>Edit Transaksi Pengeluaran</h2>

    <form action="{{ url('categories/' . $row->cat_id) }}" method="post">
        <input type="hidden" name="_method" value="PATCH">
        @csrf
        <div class="mb-3">
            <label for="">Total Transaksi</label>
            <input type="text" name="trans_jumlah" id="" class="form-control">
        </div>
        <div class="mb-3">
            <label for="">Deskripsi</label>
            <input type="text" name="trans_deskripsi" id="" class="form-control">
        </div>
        <div class="mb-3">
            <label for="">Tanggal Transaksi</label>
            <input type="text" name="trans_tanggal_transaksi" id="" class="form-control">
        </div>
        <div class="mb-3">
            <input type="submit" value="UPDATE" class="btn btn-primary">
        </div>
    </form>
@endsection
