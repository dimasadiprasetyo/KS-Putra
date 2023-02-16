@extends('layouts.main')
@section('title')
    DataKavling
@endsection
@section('judul')
    <u>TRANSAKSI TUNAI</u>
@endsection
@section('content')
<div class="card">
    <div class="card-header">
        <div class="d-flex justify-content-between">
            <a href="{{route('tunai.create', $id)}}" class="btn btn-primary"><i class="fas fa-plus"></i> Tambah Data</a>
            <a href="{{route('tunai.cetak', $id)}}" class="btn btn-success .active" target="_blank"><i class="fas fa-print"></i> Cetak | Laporan</a>
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
                <td>{{$infopembeli->datapembeli->namapembeli}}</td>    
                </tr>    
                <tr>
                    <td><strong> Alamat</strong></td>
                    <td>:</td>
                    <td>{{$infopembeli->datapembeli->alamat}}</td>
                </tr>
                <tr>
                    <td><strong> Nomor Kavling</strong> </td>
                    <td>:</td>
                    <td>{{$infopembeli->datakavling->cluster}}{{$infopembeli->datakavling->nomorkavling}}</td>
                </tr>
                
            </table>
        </div>
        <div class="col-8"></div>
    </div>
    
    <table class="table"   border=”″ width=”500″ height=”250″ style="font-size: 15px">
        <thead >
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
            @foreach ($tunai as $tunais)
            <tr>
            
                <td>
                    {{$loop->iteration}}.
                </td>
            <td>
                <strong>{{$tunais->penjualantunai->datakavling->cluster}}{{$tunais->penjualantunai->datakavling->nomorkavling}}</strong>
                <br>
                {{$tunais->penjualantunai->kategori->nama}}
                <br>
                <strong>Rp.{{number_format($tunais->penjualantunai->datakavling->hargacash, 0, ',','.')}}</strong>
                <br>
                {{$tunais->penjualantunai->metodepembayaran->pembayaran}}
            </td>

            <td style="text-align: center">
                {{$loop->iteration == 1? __('Tunai'):($tunais->tunai)}}
           </td>

           <td style="text-align: center">
            {{\Carbon\Carbon::parse($tunais->tanggal)->isoFormat('D MMMM Y')}}
        </td>

        <td>
            Rp.{{number_format(($loop->iteration == 1 ? $cash : $tunai->bayartunai), 0, ',','.')}}

        </td>

        <td style="text-align: center">
            <a href="{{route('tunai.kwitansi',$id)}}" target="_blank"><button class="btn btn-primary"><i class="fas fa-print" style="size: 300px"></i></button></a> 
        </td>

        <td>
            Rp.{{number_format(($loop->iteration == 1 ? $hargacash : $hargacash -= ($tunais->bayartunai)), 0, ',','.')}}
            

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