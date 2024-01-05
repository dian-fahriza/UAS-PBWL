@extends('layouts.app')

@section('content')
    <h2>Add Transaksi</h2>

    <form action="{{ url('transaksi') }}" method="post">
        @csrf
        <div class="mb-3">
            <label for="">ID User</label>
            <select name="trans_user_id" class="form-control">
                @foreach ($users as $user)
                    <option value="{{ $user->id }}">{{ $user->id }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="">ID Kategori</label>
            <input type="text" name="trans_cat_id" id="" class="form-control">
              
            </select>
        </div>
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
            <input type="submit" value="SAVE" class="btn btn-primary">
        </div>
    </form>
@endsection
