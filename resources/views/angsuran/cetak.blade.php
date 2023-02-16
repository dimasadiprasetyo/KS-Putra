<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" > --}}
    <link rel="stylesheet" href="{{storage_path('app/css/bootstrap.min.css')}}" >
    <title>Document</title>
</head>
<body>
    {{-- <img src="{{asset('asset/avatar.png')}}" alt=""> --}}
    <img src="{{storage_path('app/foto/avatar.png')}}" style="float: left; height: 65px width: 40px">
    
    <div style="margin-left: 20px">
        <div style="font-size: 18px"> KS GRIYA PERMAI</div>
        <div style="font-size: 13px"> Jl. Pangeran Antasari Nomor 12 Gamer-Pekalongan</div>
        <div style="font-size: 13px"> Nomor Telp :085642548060,085642548060</div>
        
    </div>
    <hr style="border: 0.5px solid black; margin: 10px 5px 10px 5px;">
    <h4 class="text-center" style="font-size: 20px">LAPORAN PENJUALAN</h4>
    <hr style="border: 0.5px solid black; margin: 10px 5px 10px 5px; ">
    
    <div class="container" style="margin-left: 20px">
    <div class="row">
        {{-- <div class="col-1"></div> --}}
        <div class="col-1">
            <table class=" table-sm" style="font-size: 15px">
                <tr>
                <td>Nama</td>
                <td>:</td>
                <td>{{$infopembeli->datapembeli->namapembeli}}</td>    
                </tr>    
                <tr>
                    <td>Alamat</td>
                    <td>:</td>
                    <td>{{$infopembeli->datapembeli->alamat}}</td>
                </tr>
                <tr>
                    <td width=100px>Nomor Kavling</td>
                    <td>:</td>
                    <td>{{$infopembeli->datakavling->cluster}}{{$infopembeli->datakavling->nomorkavling}}</td>
                </tr>
                <tr>
                    <td >Periode</td>
                    <td>:</td>
                    <td>{{$infopembeli->lamaangsurantambah->lamapembayaran}} Bulan</td>
                </tr>
                <tr>
                    <td >Harga</td>
                    <td>:</td>
                    <td>Rp.{{number_format($infopembeli->datakavling->hargacash, 0, ',','.')}}</td>
                </tr>
            </table>            
        </div>
        <div class="col-1"></div>
    </div>
</div>
    
    <table class="table table-border table-sm" width=”500″ height=”250″ style="font-size: 14px" border="2">
        <thead>
            <tr style="background-color: black;">
                <th class="text-white" width='5%'>
                    No
                </th>
                <th class="text-white" width='20%'>
                    Tanggal
                </th>
                <th width='15%' class="text-white" align="center">
                    Keterangan
                </th>

                <th class="text-white" width='25%'>
                    Debet
                </th>
                <th class="text-white" width='25%'>
                    Kredit
                </th>
                <th  class="text-white">
                    Saldo
                </th>

            </tr>
        </thead>
        <tbody>
            {{-- @php $hargacash = $angsuran->penjualankavling->Datakavling->hargacash; @endphp --}}
            @foreach ($angsuran as $ang)
            <tr>
                <td>
                    {!!$loop->iteration!!}
                </td>
            <td>
           {{\Carbon\Carbon::parse($ang->tanggal)->isoFormat('D MMMM Y')}}
            </td>
            <td>
                Titip - {{$loop->iteration == 1? __('DP'):($ang->angsuran)}}
            </td>
            <td>
                Rp.{{number_format(($loop->iteration == 1 ? $dp : $ang->bayarangsuran), 0, ',','.')}}
            </td>
            <td>

            </td>
            <td>
                Rp.{{number_format(($loop->iteration == 1 ? $hargacash : $hargacash -= ($ang->bayarangsuran)), 0, ',','.')}}</td> 
            </tr>    
            @endforeach 
            
        </tbody>
    </table>
    {{-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>     --}}
    <script src="{{storage_path('app/js/bootstrap.min.js')}}"></script>
</body>
</html>