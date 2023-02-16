@extends('layouts.main')
@section('title')
    DataKavling
@endsection
@section('judul')
    <u>TRANSAKSI ANGSURAN</u>
@endsection
@section('content')
<div class="card">
    <div class="card-header">
        <div class="d-flex justify-content-between">
            <a href="{{route('angsuran.create', $id)}}" class="btn btn-success"><i class="fas fa-plus"></i> Tambah Data</a>
            <a href="{{route('angsuran.cetak', $id)}}" class="btn btn-primary .active" target="_blank"><i class="fas fa-print"></i> Cetak</a>
            {{-- <a href="{{route('angsuran.excel', $id)}}" class="btn btn-primary" target="_blank"><i class="fas fa-print"></i> Export</a> --}}

        </div>
</div>
    

<div class="card-body">
    <div class="row">
        <div class="col-4">
            <table class="table" style="font-size: 16px">
                <tr>
                <td><strong>Nama</strong></td>
                <td>:</td>
                {{-- <td>{{$infopembeli->datapembeli->namapembeli}}</td>     --}}
                </tr>    
                <tr>
                    <td><strong> Alamat</strong></td>
                    <td>:</td>
                    {{-- <td>{{$infopembeli->datapembeli->alamat}}</td> --}}
                </tr>
                <tr>
                    <td><strong> Nomor Kavling</strong> </td>
                    <td>:</td>
                    {{-- <td>{{$infopembeli->datakavling->cluster}}{{$infopembeli->datakavling->nomorkavling}}</td> --}}
                </tr>
                <tr>
                    <td > <strong> Periode</strong></td>
                    <td>:</td>
                    {{-- <td>{{$infopembeli->lamaangsurantambah->lamapembayaran}} Bulan</td> --}}
                </tr>
            </table>
        </div>
        <div class="col-8"></div>
    </div>
    
    <table class="table"   border=”0″ width=”500″ height=”250″ style="font-size: 15px">
        <thead>
            <tr class="bg-dark">
                <th class="text-white text-center">
                    No 
                </th>
                <th class="text-white text-center" >
                    Nama Kavling
                </th>
                <th class="text-white text-center " style="text-align: center" >
                    Angsuran
                </th>

                <th class="text-white text-center" style="text-align: center">
                    Tanggal Pembayaran
                </th>
                <th class="text-white text-center" style="text-align: center">
                    Nominal Pembayaran
                </th>
                <th class="text-white text-center" style="text-align: center">
                    Cetak
                </th>
                <th class="text-white text-center" style="text-align: center">
                    Keterangan
                </th>
                <th class="text-white text-center" style="text-align: center">
                    action
                </th>
            </tr>
        </thead>
        <tbody>
            {{-- @php $hargacash = $angsuran->penjualankavling->Datakavling->hargacash; @endphp --}}
            @foreach ($angsuran as $ang)
            <tr>
            <td>
                {{$loop->iteration}}
            </td>
            <td>
                <strong>{{$ang->penjualankavling->datakavling->cluster}}{{$ang->penjualankavling->datakavling->nomorkavling}}</strong>
                <br>
                {{$ang->penjualankavling->kategori->nama}}
                <br>
                <strong>Rp.{{number_format($ang->penjualankavling->datakavling->hargacash, 0, ',','.')}}</strong>
                <br>
                {{$ang->penjualankavling->metodepembayaran->pembayaran}}
            </td>
        
            <td style="text-align: center">
                 Titip-{{$loop->iteration == 1? __('DP'):($ang->angsuran)}}
            </td>

            <td style="text-align: center">
                {{\Carbon\Carbon::parse($ang->tanggal)->isoFormat('D MMMM Y')}}    
            </td>

            <td>
                Rp.{{number_format(($loop->iteration == 1 ? $dp : $ang->bayarangsuran), 0, ',','.')}}
                {{-- Angsuran Rp.{{number_format($datakavling->hargaangsuran, 0, ',','.')}} --}}
            </td>
            
            <td style="text-align: center">
            <a href="{{route("angsuran.kwitansi", $id)}}" target="_blank"><button class="btn btn-primary"><i class="fas fa-print" style="size: 300px"></i></button></a> 
        </td>
        <td>
            Rp.{{number_format(($loop->iteration == 1 ? $hargacash : $hargacash -= ($ang->bayarangsuran)), 0, ',','.')}}
            {{-- Rp.{{number_format($hargacash -= ($ang->bayarangsuran - $ang->dendaangsuran), 0, ',','.')}} --}}

        </td>
            <td>
                <a href="#" class="btn btn-xs btn-warning"><i class="fas fa-edit"></i></a>
                    <form action="#" class="d-inline" method="POST">
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