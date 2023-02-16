@extends('layouts.main')
@section('title')
    Kategori
@endsection
@section('judul')
    PENJUALAN Tunai
@endsection
@section('content')
<div class="card">
    <div class="card-header">
    </div>
<div class="card-body">
    <table class="table table-border">
        <thead>
            <tr>
                <th>
                    No
                </th>
                <th>
                    Nama Kavling
                </th>
                <th>
                    Nama Nasabah
                </th>
                <th>
                    Tanggal Pembayaran
                </th>
                <th>
                    Metode Pembayaran
                </th>
                <th>
                    action
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($penjualanlaporans as $penjualan)
            <tr>
            <td>
                {{$loop->iteration}}
            </td>
            <td>
                 <strong>{{$penjualan->penjualankavldatakavling->cluster}}{{$penjualan->datakavling->nomorkavling}}</strong> --}}
                <br>
                {{$penjualan->kategori->nama}}
                <br>    
                {{$penjualan->subkategori->namasub}}
                <br>
                <strong>Rp.{{number_format($penjualan->datakavling->hargacash, 0, ',','.')}}</strong>
                <br>
                <a href="#" class="link-primary">Pindah Blok</a>
            </td>
            <td>
                {{-- <strong>{{$penjualan->datapembeli->namapembeli}}</strong>
                <br>
                NIK: {{$penjualan->datapembeli->nik}}
                <br>
                Telp: {{$penjualan->datapembeli->telepon}}
                <br>
                <a href="{{route('datapembeli.edit', $penjualan->datapembeli->id)}}" class="link-primary">Perbarui Data Pembeli</a> --}}
            </td>
            <td>
                {{-- Tunai Rp.{{number_format($penjualan->bayar, 0, ',','.')}}
                <br>
                Promo Rp.{{number_format($penjualan->promo, 0, ',','.')}}
                <br>
                <a href="{{route('penjualantunai.edit', $penjualan->datapembeli->id)}}" class="link-primary">Edit Penjualan</a> --}}
            </td>
            <td>
                {{-- {{\Carbon\Carbon::parse($penjualan->tertanggal)->isoFormat('D MMMM Y')}} --}}
            </td>
            <td>
                {{-- <a href="{{route('penjualankavling.edit', $penjualan->id)}}" class="btn btn-warning">Edit</a> --}}
                <a href="#" class="btn btn-xs btn-primary"><i class="fas fa-print fa-1x"></i></a>
                <form action="#" class="d-inline" method="POST">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-xs btn-danger" type="submit">
                        <i class="fas fa-trash-alt fa-1x"></i>    
                    </button>
                    </form>

            </td>
            </tr>    
            {{-- @endforeach --}}
            
        </tbody>
    </table>
</div>
</div>
@endsection