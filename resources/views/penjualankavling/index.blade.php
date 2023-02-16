@extends('layouts.main')
@section('title')
    Kategori
@endsection
@section('judul')
    <u>PENJUALAN ANGSURAN</u>
@endsection
@section('content')
<div class="card">
    <div class="card-header">
<a href="{{route('penjualankavling.create')}}" class="btn btn-success"><i class="fas fa-plus"></i> Tambah Data</a>
    </div>
    
<div class="card-body">
    <table class="table table-border" id="tabel">
        <thead class="thead-dark">
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
                    Jumlah DP
                </th>
                <th>
                    Periode Pembayaran
                </th>
                <th>
                    Tanggal
                </th>
                <th>
                    action
                </th>
            </tr>
        </thead>
        <tbody style="font-size: 17px">
            @foreach ($penjualankavlings as $penjualan)
            <tr>
            <td>
                {{$loop->iteration}}.
            </td>
            <td>
                {{-- <strong>{{$penjualan->datakavling->cluster}}{{$penjualan->datakavling->nomorkavling}}</strong> --}}
                <br>
                {{-- {{$penjualan->kategori->nama}}- --}}
                <br>    
                {{-- {{$penjualan->subkategori->namasub}} --}}
                <br>
                {{-- <strong>Rp.{{number_format($penjualan->datakavling->hargacash, 0, ',','.')}}</strong> --}}
                <br>
                <a href="#" class="link-primary">Pindah Blok</a>
            </td>
            {{-- <td>
                <strong>{{$penjualan->datapembeli->namapembeli}}</strong>
                <br>
                NIK: {{$penjualan->datapembeli->nik}}
                <br>
                Telp: {{$penjualan->datapembeli->telepon}}
                <br>
                <a href="{{route('datapembeli.edit', $penjualan->datapembeli->id)}}" class="link-primary">Perbarui Data Pembeli</a>
            </td>
            <td>
                Rp. {{number_format($penjualan->dp, 0, ',','.')}}
                <br>
                Promo Rp.{{number_format($penjualan->promo, 0, ',','.')}}
                <br>
                <a href="{{route('penjualankavling.edit', $penjualan->id)}}" class="link-primary">Edit Penjualan</a>
            </td>
            <td>
                {{$penjualan->lamaangsurantambah->lamapembayaran ?? null}} Bulan
                <br>
                {{-- Rp.{{number_format(($loop->iteration == 1 ? $hargacash : $hargacash -= ($ang->bayarangsuran - $ang->dendaangsuran)), 0, ',','.')}} --}}
            </td>
            <td>
                {{-- {{\Carbon\Carbon::parse($penjualan->tertanggal)->isoFormat('D MMMM Y')}} --}}
            </td>
            <td> --}}
                {{-- <a href="{{route('penjualankavling.edit', $penjualan->id)}}" class="btn btn-warning">Edit</a> --}}
                <a href="{{route('angsuran.index', $penjualan->id)}}" class="btn btn-xs btn-primary"><i class="fas fa-plus-square"></i></a>
                <form action="{{route('penjualankavling.destroy', $penjualan->id)}}" id="delete{{$penjualan->id}}" class="d-inline" method="POST">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-xs btn-danger "type="submit">
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
@push('Awal')
    <link rel="stylesheet" href="{{asset('asset/dist/css/jquery.dataTables.min.css')}}">    
@endpush
@push('Akhir')
    <script src="{{asset('asset/dist/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('asset/dist/js/sweetalert.min.js')}}"></script>


    <script>
    $(document).ready( function () {
        $('#tabel').DataTable();
    } );
    </script>

    {{-- <script>
$(".confirm").click(function(e) {
    id= e.target.dataset.id;
    swal({
        title: 'Yakin Mau Hapus Data?',
        text: 'Data Yang Dihapus Tidak Bisa Kembalikan Lagi!',
        icon: 'warning',
        buttons: true,
        dangerMode: true,
      })
      .then((willDelete) => {
        if (willDelete) {
    
        $('#delete').submit();
        }
      });
  });

    </script> --}}
@endpush


