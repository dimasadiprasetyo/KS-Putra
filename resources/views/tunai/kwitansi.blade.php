<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{storage_path('app/css/bootstrap.min.css')}}" >
    {{-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" > --}}
    <title>Document</title>
</head>
<body>
    <img src="{{storage_path('app/foto/avatar.png')}}" style="float: left; height: 57px width: 30px">
    
    <div style="margin-left: 20px">
        <div style="font-size: 18px"> KS GRIYA PERMAI</div>
        <div style="font-size: 12px"> Jl. Pangeran Antasari Nomor 12 Pekalongan</div>
        <div style="font-size: 12px"> Nomor Telepon :08xxx</div>
    </div>
    <hr style="border: 0.5px solid black; margin: 10px 5px 10px 5px;">
    <h4 class="text-center" style="font-size: 20px " >KWITANSI PEMBAYARAN</h4>
    <hr style="border: 0.5px solid black; margin: 10px 5px 10px 5px;">
    
    <table border="0" width=”250″ height=”300″ style="font-size: 14px">
        <thead>
            <tr>
              <td colspan="17" style="font-size: 16px" style="font-style: italic"><strong>Telah Diterima</strong> </td>
              <td colspan="0"></td>
            </tr>
            <!--1-->
            <tr style="font-style: italic" >
                <td colspan="17"></td>
                <td colspan="14">Dari</td>
                <td width="15px">:</td>
                <td colspan="25" style="text-indent: 500px">Sdr/i {{$infopembeli->datapembeli->namapembeli}}</td>
                <td colspan="10"  style="text-indent: 500px"></td>
            </tr>
            
            <tr style="font-style: italic">
                <td colspan="17"></td>
                <td colspan="14" >Nomor Kavling</td>
                <td>:</td>
                <td colspan="25" style="text-indent: 500px">{{$infopembeli->datakavling->cluster}}{{$infopembeli->datakavling->nomorkavling}}</td>
                <td colspan="10"  style="text-indent: 500px"></td>
            </tr>
            <tr style="font-style: italic">
                <td colspan="17"></td>
                <td colspan="14">Sebesar</td>
                <td>:</td>
                <td colspan="25" style="text-indent: 500px">Rp. {{number_format( $infopembeli->bayar, 0, ',','.')}}</td>
                <td colspan="10"  style="text-indent: 500px"></td>
            </tr>
            <tr style="font-style: italic">
                <td colspan="17"></td>
                <td colspan="14"></td>
                <td>:</td>
                <td colspan="25" style="text-indent: 500px"></td>
                <td colspan="10"  style="text-indent: 500px"></td>
            </tr>
            <tr style="font-style: italic">
                <td colspan="17"></td>
                <td colspan="14">Untuk</td>
                <td>:</td>
                <td colspan="34"  style="text-indent: 500px">Pembayaran <strong>{{$infopembeli->metodepembayaran->pembayaran}}</strong> Kavling Tanah </td>
                <td colspan="10"  style="text-indent: 500px"></td>
            </tr>
            <br>
            <br>
            <tr >
                <td></td>
            </tr>
            
            <tr style="font-style: italic">
                <td colspan="17"></td>
                <td colspan="14">Pembayaran</td>
                <td>:</td>
                <td colspan="25" style="text-indent: 500px"><strong>- L U N A S -</strong></td>
                <td colspan="10"  style="text-indent: 500px"></td>
            </tr>
            <tr>
                <td colspan="98">
                    <hr style="border: 0.5px solid black; margin: 10px 5px 10px 5px; text-indent: 20px">
                </td>
            </tr>
            <tr>
                <td colspan="0" style="text-indent: 15px"></td>
                <td colspan="13" style="text-indent: 300px"></td>
                <td ></td>
                <td colspan="50"></td>
                <td colspan="30" style="text-indent: 800px">Pekalongan,  {{\Carbon\Carbon::parse($tunais->tanggal)->isoFormat('D MMMM Y')}}</td>
                <td colspan="0" style="text-indent: 10px"></td>

            </tr>
            <tr>
                <td colspan="65" style="text-indent: 50px">   Penerima</td>
                <td colspan="26" style="text-indent: 70px">   Penyetor</td>
            </tr>

            <tr>
                <td colspan="10" ></td>
                <td colspan="30" ></td>
                <td colspan="20"></td>
                <td></td>
            </tr>
                <tr>
                <td rowspan="30" colspan="65">(...........................................)</td>
                <td rowspan="30" colspan="10" style="text-indent: 300px">(................................................)</td>
            </tr>
        </thead>
    </table>
  
    
  
    
    <script src="{{storage_path('app/js/bootstrap.min.js')}}"></script>
    {{-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>      --}}
</body>
</html>