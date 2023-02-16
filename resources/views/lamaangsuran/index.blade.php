@extends('layouts.main')
@section('title')
    Angsuran
@endsection
@section('judul')
    <u>ANGSURAN</u>
@endsection
@section('content')
<div class="card">
    <div class="card-header">
<a href="{{route('lamaangsuran.create')}}" class="btn btn-success"><i class="fas fa-plus"></i> Tambah Data</a>
    </div>
<div class="card-body">
    <table class="table table-border">
        <thead class="thead-dark">
            <tr>
                <th>
                    No.
                </th>
                <th>
                    PEMBAYARAN
                </th>
                <th>
                    KATEGORI PROPERTY
                </th>
                <th>
                    ANGSURAN
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($Lamaangsurans as $lama)
            <tr>
            <td>
                {{$loop->iteration}}
            </td>
            <td>
                {{$lama->metodepembayaran->pembayaran}}    
            </td>
            <td>
                {{$lama->kategori->nama}}
            </td>
            <td>
                <a href="{{route('lamaangsurantambah.create', $lama->id)}}" class="btn btn-xs btn-primary"><i class="fas fa-plus"></i></a>
                    {{-- <input type="hidden" name="id" value="{{$kategori->id}}"> --}}
                    <form action="{{route('lamaangsuran.destroy', $lama->id)}}" class="d-inline" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-xs btn-danger">
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