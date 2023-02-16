@extends('layouts.main')
@section('title')
    Data Pembeli
@endsection
@section('judul')
    <strong><u>DATA PEMBELI</u></strong>
@endsection
@section('content')
<div class="card">
    <div class="card-header">
<a href="{{route('datapembeli.create')}}" class="btn btn-success"><i class="fas fa-edit"></i> Tambah Data</a>
    </div>
<div class="card-body">
    <table class="table table-border" id="tabel">
        <thead class="thead-dark">
            <tr>
                <th>
                    No 
                </th>
                <th>
                    ID Pembeli
                </th>
                <th>
                    Nama
                </th>
                <th>
                    Alamat
                </th>
                <th>
                    Telepon
                </th>
                <th>
                    Identitas/KTP
                </th>
                <th>
                    action
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($Datapembelis as $datapembeli)
            <tr>
            <td>
                {{$loop->iteration}}
            </td>
            <td>
                {{$datapembeli->nopembeli}}
            </td>
            <td>
                {{$datapembeli->namapembeli}}
            </td>
            <td>
                {{$datapembeli->alamat}}
            </td>
            <td>
                {{$datapembeli->telepon}}
            </td>
            <td>
                {{$datapembeli->nik}}
                <br>
                <a href="{{asset('images/'.$datapembeli->file)}}" target="_blank" rel="noopener noreferrer">Lihat Gambar</a>
            </td>
            <td>
                <a href="{{route('datapembeli.edit', $datapembeli->id)}}" class="btn btn-warning">Edit</a>
                    <form action="{{route('datapembeli.destroy', $datapembeli->id)}}" class="d-inline" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">
                        Hapus
                    </button>
                    </form>

            </td> 
            </tr>    
            @endforeach 
            
        </tbody>
    </table>
</div>
</div>
@endsection
@push('Awal')
    <link rel="stylesheet" href="{{asset('asset/dist/css/jquery.dataTables.min.css')}}">    
@endpush
@push('Akhir')
    <script src="{{asset('asset/dist/js/jquery.dataTables.min.js')}}"></script>

    <script>
    $(document).ready( function () {
        $('#tabel').DataTable();
    } );
    </script>
@endpush