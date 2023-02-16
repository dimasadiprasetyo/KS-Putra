@extends('layouts.main')
@section('title')
    Metode
@endsection
@section('judul')
<u>METODE PEMBAYARAN</u>
@endsection
@section('content')
<div class="card">
    <div class="card-header">
<a href="{{route('metodepembayaran.create')}}" class="btn btn-success"><i class="fas fa-plus"></i> Tambah Data</a>
    </div>
<div class="card-body">
    <table class="table " style="text-align: center width=20px height=20px" >
        <thead class="thead-dark">
            <tr>
                <th>
                    No.
                </th>
                <th>
                    PEMBAYARAN
                </th>
                <th>
                    ACTION
                </th>
            </tr>
        </thead>
        <tbody style="font-size: 17px">
            @foreach ($Metodepembayarane as $metodepemb)
            <tr>
            <td>
                {{$loop->iteration}}.
            </td>
            <td>
                {{$metodepemb->pembayaran}}    
            </td>
            <td>
                <a href="{{route('metodepembayaran.edit', $metodepemb->id)}}" class="btn btn-xs btn-warning"><i class="fas fa-edit"></i></a>
                    {{-- <input type="hidden" name="id" value="{{$kategori->id}}"> --}}
                    <form action="{{route('metodepembayaran.destroy', $metodepemb->id)}}" class="d-inline" method="POST">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-xs btn-danger" type="submit">
                        <i class="fas fa-trash-alt"></i>                   
                    </form>

            </td>
            </tr>    
            @endforeach
            
        </tbody>
    </table>
</div>
</div>
@endsection