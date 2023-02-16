@extends('layouts.main')
@section('title')
    SubKategori
@endsection
@section('judul')
    <u> SUBKATEGORI KAVLING</u>
@endsection
@section('content')
<div class="card">
    <div class="card-header">
<a href="{{route('subkategori.create')}}" class="btn btn-success"><i class="fas fa-plus"></i> Tambah Data</a>
    </div>
<div class="card-body">
    <table class="table table-border" style="text-align: center">
        <thead class="thead-dark">
            <tr>
                <th>
                    No. 
                </th>
                <th>
                    NAMA
                </th>
                <th>
                    KATEGORI
                </th>
                <th>
                    ACTION
                </th>
            </tr>
        </thead>
        <tbody style="font-size: 17px">
            @foreach ($Subkategories as $subkategori)
            <tr>
            <td>
                {{$loop->iteration}}.
            </td>
            <td>
                {{$subkategori->namasub}}
            </td>
            <td>
                {{$subkategori->kategori->nama}}
            </td>
            <td>
                <a href="{{route('subkategori.edit', $subkategori->id)}}" class="btn btn-xs btn-warning"><i class="fas fa-edit"></i></a>
                    <form action="{{route('subkategori.destroy', $subkategori->id)}}" class="d-inline" method="POST">
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