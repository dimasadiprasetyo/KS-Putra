@extends('layouts.main')
@section('title')
    Data Marketing
@endsection
@section('judul')
    <strong><u>DATA MARKETING</u></strong>
@endsection
@section('content')
<div class="card">
    <div class="card-header">
<a href="{{route('datamarketing.create')}}" class="btn btn-success"><i class="fas fa-edit"></i> Tambah Data</a>
    </div>
<div class="card-body">
    <table class="table table-border">
        <thead class="thead-dark">
            <tr>
                <th>
                    No 
                </th>
                <th>
                    Id Marketing
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
                    KTP
                </th>
                <th>
                    action
                </th>
            </tr>
        </thead>
        <tbody style="font-size: 17px">
            @foreach ($Datamarketings as $datamarketing)
            <tr>
            <td>
                {{$loop->iteration}}.
            </td>
            <td>
                {{$datamarketing->nomarketing}}
            </td>
            <td>
                {{$datamarketing->nama}}
            </td>
            <td>
                {{$datamarketing->alamat}}
            </td>
            <td>
                {{$datamarketing->telepon}}
            </td>
            <td>
                {{$datamarketing->nik}}
                <br>
                <a href="{{asset('images-marketing/'.$datamarketing->file)}}" target="_blank" rel="noopener noreferrer">Lihat Gambar</a>
            </td>
            <td>
                <a href="{{route('datamarketing.edit', $datamarketing->id)}}" class="btn btn-warning">Edit</a>
                    <form action="{{route('datamarketing.destroy', $datamarketing->id)}}" class="d-inline" method="POST">
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