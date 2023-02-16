@extends('layouts.main')
@section('title')
    DataKavling
@endsection
@section('judul')
    <u>DATA KAVLING</u>
@endsection
@section('content')
<div class="card">
    <div class="card-header">
<a href="{{route('datakavling.create')}}" class="btn btn-success"><i class="fas fa-plus"></i> Tambah Data</a>
    </div>
<div class="card-body">
    <table class="table table-border">
        <thead class="thead-dark" style="text-align: center">
            <tr>
                <th>
                    No. 
                </th>
                <th>
                    CLUSTER
                </th>
                <th>
                    LUAS TANAH
                </th>
                <th>
                    UKURAN TANAH
                </th>
                <th>
                    NOMOR KAVLING
                </th>
                <th>
                    HARGA
                </th>
                <th>
                    KETERANGAN
                </th>
                <th>
                    ACTION
                </th>
            </tr>
        </thead>
        <tbody style="font-size: 17px">
            @foreach ($Datakavlings as $datakavling)
            <tr>
            <td style="text-align: center">
                {{$loop->iteration}}.
            </td>
            <td>
                <strong>{{$datakavling->cluster}}</strong> 
                <br>
                {{$datakavling->kategori->nama}}-
                <br>
                {{$datakavling->subkategori->namasub}}
            </td>
            <td style="text-align: center">
                {{$datakavling->luaskavling}}
            </td>
            <td style="text-align: center">
                {{$datakavling->ukurantanah}}
            </td>
            <td style="text-align: center">
                {{$datakavling->cluster}}{{$datakavling->nomorkavling}}
            </td>
            <td style="text-align: center">
                Cash Rp.{{number_format($datakavling->hargacash, 0, ',','.')}}
                <br>
            </td>
            <td style="text-align: center">
                
            </td>
            <td style="text-align: center">
                <a href="{{route('datakavling.edit', $datakavling->id)}}" class="btn btn-warning"><i class="fas fa-edit"></i></a>
                    <form action="{{route('datakavling.destroy', $datakavling->id)}}" class="d-inline" method="POST">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-xs btn-danger" type="submit">
                        <i class="fas fa-trash-alt"></i>                    
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