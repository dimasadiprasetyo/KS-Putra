@extends('layouts.main')
@section('title')
    Create penjualan
@endsection
@section('judul')
    <u>CREATE LAMA ANGSURAN</u>
@endsection
@section('content')
<div class="card card-primary">
    <!-- /.card-header -->
    <!-- form start -->
    <form action="{{route('lamaangsurantambah.store', $id)}}" method="POST">
        @csrf
        <div class="card-header">
            <button type="submit" class="btn btn-primary">Simpan</button>            
            <a href="{{route('lamaangsuran.index')}}" class="btn btn-danger"></i>Kembali</a>
                </div>
        <div class="card-body">
            <div class="form-group">
                <div class="row mb-3">
                <label class="col-sm-2 col-form-label">SubKategori</label>
                <div class="col-sm-5">
                <select name="subkategori_id" class="form-control select2 select2-hidden-accessible" style="width: 100%;" data-select2-id="1" tabindex="-1" aria-hidden="true">
                    <option disabled selected>-- Pilih Kategori --</option>
                    @foreach ($subkategori as $subkategorine)
                    <option value="{{$subkategorine->id}}">{{$subkategorine->namasub}}</option>
                    @endforeach
                </select>
              </div>
            </div>

              <div class="form-group">
                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label">Metode Pembayaran</label>
                  <div class="col-sm-5">
                  <input type="text" readonly class="form-control" value="{{$lamaangsuran->metodepembayaran->pembayaran}}">
                  </div>
                </div> 

                <div class="form-group">
                    <div class="row mb-3">
                      <label for="lamapembayaran" class="col-sm-2 col-form-label">Lama Angsuran</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="lamapembayaran" name="lamapembayaran" placeholder="example : 7">
                  </div>
                    </div>

                    
                      <div class="card-body">
                        <table class="table table-border">
                            <thead class="thead-dark">
                                <tr>
                                    <th>
                                        No 
                                    </th>
                                    <th>
                                        Periode Angsuran
                                    </th>
                                    <th>
                                        SubKategori
                                    </th>
                                <th>
                                        Keterangan
                                    </th>
                                    <th>
                                        Action
                                    </th>
                                </tr>
                            </thead>
                            <tbody style="font-size: 17px">
                                @foreach ($lamaAngsuranTambah as $lat)
                                <tr>
                                <td>
                                    {{$loop->iteration}}.
                                </td>
                                <td>
                                    {{$lat->lamapembayaran}} Bulan
                                        
                                </td>
                                <td>
                                    {{$lat->subkategori->namasub}}
                                </td>
                                <td>
                                    {{$lat->lamaangsuran->metodepembayaran->pembayaran}} 
                                </td>
                                <td>
                                    <a href="#" class="btn btn-xs btn-warning"><i class="fas fa-edit"></i></a>
                                    <form action="#" class="d-inline" method="POST">
                                        @csrf
                                        @method('DELETE')
                                    <button type="submit" class="btn btn-xs btn-danger">
                                        <i class="fas fa-trash-alt"></i>
                                    </button>
                                    </form>

                                </td>
                                @endforeach     
                            </tbody>
                        </table>
                    </div>
                    </div>
      <!-- /.card-body -->

      {{-- <div class="card-footer">
        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="" class="btn btn-danger">Kembali</a>
      </div> --}}
    </form>
  </div>
@endsection

