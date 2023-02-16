@extends('layouts.main')
@section('title')
    Kategori
@endsection
@section('judul')
    <u> KATEGORI KAVLING</u>
@endsection
@section('content')
<div class="card">
    <div class="card-header">
<a href="{{route('kategori.create')}}" class="btn btn-success"><i class="fas fa-plus"></i> Tambah Data</a>
    </div>
<div class="card-body" class="table-responsive">
    <table class="table table-border" style="text-align: center" style="size: 15px">
        <thead class="thead-dark">
            <tr>
                <th>
                    No. 
                </th>
                <th>
                    NAMA
                </th>
                <th>
                    ACTION
                </th>
            </tr>
        </thead>
        <tbody style="font-size: 17px" style="font-family: Tahoma ">
            @foreach ($Kategories as $kategori)
            <tr class="table-light">
            <td>
                <strong>{{$loop->iteration}}.</strong>
            </td>
            <td>
                {{$kategori->nama}}    
            </td>
            <td>
                <a href="{{route('kategori.edit', $kategori->id)}}" class="btn btn-xs btn-warning"><i class="fas fa-edit"></i></a>
                    {{-- <input type="hidden" name="id" value="{{$kategori->id}}"> --}}
                    <form action="{{route('kategori.destroy', $kategori->id)}}" class="d-inline" method="POST">
                    @csrf
                    @method('DELETE')
                    {{-- <button type="submit" class="btn btn-link"> --}}
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