@extends('layouts.main')
@section('title')
    Data Pimpinan
@endsection
@section('judul')
    <strong><u>DATA PIMPINAN</u></strong>
@endsection
@section('content')
<div class="card">
    <div class="card-header">
<a href="{{route('datapimpinan.create')}}" class="btn btn-primary"><i class="fas fa-plus"></i> Tambah Data</a>
    </div>
<div class="card-body">
    <table class="table table-border">
        <thead class="thead-dark">
            <tr>
                <th>
                    No. 
                </th>
                <th>
                    ID Pegawai
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
                    Email
                </th>
                <th>
                    action
                </th>
            </tr>
        </thead>
        <tbody style="font-size: 17px">
            @foreach ($Datapimpinans as $datapimpinan)
            <tr>
            <td style="text-align: center">
                {{$loop->iteration}}.
            </td>
            <td>
                {{$datapimpinan->idpimpinan}}
            </td>
            <td>
                {{$datapimpinan->nama}}
            </td>
            <td>
                {{$datapimpinan->alamat}}
            </td>
            <td>
                {{$datapimpinan->telepon}}
            </td>
            <td>
                {{$datapimpinan->email}}
            </td>
            <td>
                <a href="{{route('datapimpinan.edit', $datapimpinan->id)}}" class="btn btn-warning">Edit</a>
                    <form action="{{route('datapimpinan.destroy', $datapimpinan->id)}}" class="d-inline" method="POST">
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