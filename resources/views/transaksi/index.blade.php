@extends('layouts.app')
@section('content')

<h2>Transaksi Pengeluaran</h2>

<a href="{{ url('transaksi/create') }}" class="btn btn-primary mb-3 float-end">Add Transaksi Pengeluaran</a>

<table class="table table-bordered">
      <tr>
            <th>ID</th>
            <th>ID USER</th>
            <th>ID KATEGORI</th>
            <th>Total Transaksi</th>
            <th>DESKRIPSI</th>
            <th>TANGGAL TRANSAKSI</th>
            <th>EDIT</th>
            <th>DELETE</th>
      </tr>

      @foreach ($rows as $row)
            <tr>
                  <td>{{ $row->trans_id }}</td>
                  <td>{{ $row->trans_user_id }}</td>
                  <td>{{ $row->trans_cat_id }}</td>
                  <td>{{ $row->trans_jumlah }}</td>
                  <td>{{ $row->trans_deskripsi }}</td>
                  <td>{{ $row->trans_tanggal_transaksi }}</td>
                  <td><a href="{{ url('transaksi/edit/' . $row->trans_id) }}" class="btn btn-warning">Edit</a></td>
                  <td>
                        <form action="{{ url('transaksi/' . $row->trans_id) }}" method="post">
                              <input type="hidden" name="_method" value="DELETE">
                              @csrf
                              <input type="submit" value="Delete" class="btn btn-danger" onclick="return confirm('Are you sure?')">
                        </form>
                  </td>
            </tr>
      @endforeach

</table>

@endsection