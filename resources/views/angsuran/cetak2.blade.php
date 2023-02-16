<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv= "x-ua-compatible content= ie=edge">
        <meta name="csrf-token" content="{{csrf_token()}}">
        <style>
            table.static{
                position: relative;
                border: 1px solid #543535;
            }
        </style>
    </head>
    <body>
        <div class="form-group">
            <p align="center"><b>KWITANSI PEMBAYARAN</b></p>
            <hr size="5px">
            <table class="static" align="center" rules="all" border="1px" style="width: 95%"></table>
            <title>Data Kavling</title>
            <table class="table" >
                
                <thead>
                    <tr>
                        <td>ID </td>
                        {{-- <td> {{$ang->penjualankavling->kategori->nama}}</td>                    --}}
                     </tr>
                    <tr>
                        <td>Nama</td>
                        <td>Malang, 14 Mei 2000</td>
                    </tr>
                    <tr>
                        <td>Nomor Kavling</td>
                        <td>1110181004</td>
                    </tr>
                    <tr>
                        <td>Tanggal Pembayaran</td>   
                        <td>D4</td>
                    </tr>
                    <tr>
                        <td>Nominal Pembayaran</td> 
                        <td>Teknik Elektronika</td>
                    </tr>
                    <tr>
                        <td>Sisa Pembayaran</td>
                        <td>1 D4 EA</td>
                    </tr>
                    <tr>
                        <td>Periode</td>
                        <td>Jl. Marabahan 5 no. 8 GKB, Suci, Manyar, Gresik</td>
                    </tr>
                    <tr>
                        <td>No. Telepon</td> 
                        <td>08974688360</td>
                    </tr>    
                    
                </thead>
            </table>
            
        </div>
        <script type="text/javascript">        
        window.print();

        </script>
    </body>

</html>

