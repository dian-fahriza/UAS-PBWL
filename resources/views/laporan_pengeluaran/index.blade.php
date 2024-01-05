<!-- resources/views/laporan_pengeluaran/index.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Laporan Pengeluaran</h2>
        <a href="{{ url('laporan_pengeluaran/create') }}" class="btn btn-primary mb-3 float-end">Add Laporan Pengeluaran</a>

        
        <!-- Tampilkan daftar laporan pengeluaran -->
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>User ID</th>
                    <th>Total Pengeluaran</th>
                    <th>Tanggal Laporan</th>
                    <th>Catatan Laporan</th>
                    <th>EDIT</th>
                    <th>DELETE</th>
                    

                </tr>
            </thead>
            <tbody>
                @foreach($laporanPengeluaran as $laporan)
                    <tr>
                        <td>{{ $laporan->id }}</td>
                        <td>{{ $laporan->user_id }}</td>
                        <td>{{ $laporan->total_pengeluaran }}</td>
                        <td>{{ $laporan->tanggal_laporan }}</td>
                        <td>{{ $laporan->catatan_laporan }}</td>
                        <td><a href="{{  url('/laporan_pengeluaran/edit/' . $laporan->id) }}" class="btn btn-warning">Edit</a></td>
                        <td>
                        <form action="{{ url('/laporan_pengeluaran/edit/' . $laporan->id)}}" method="post">
                              <input type="hidden" name="_method" value="DELETE">
                              @csrf
                              <input type="submit" value="Delete" class="btn btn-danger" onclick="return confirm('Are you sure?')">
                        </form>
                  </td>
                       
                    </tr>
                @endforeach
            </tbody>
        </table>
        
  
    </div>
@endsection
