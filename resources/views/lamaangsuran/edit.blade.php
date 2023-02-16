@extends('layouts.main')
@section('title')
    Create Angsuran
@endsection
@section('judul')
    <u>EDIT</u>
@endsection
@section('content')
<div class="card card-primary">
    <!-- /.card-header -->
    <!-- form start -->
    <form action="{{route('lamaangsuran.store')}}" method="POST">
        @csrf
        <div class="card-header">
            <button type="submit" class="btn btn-primary">Simpan</button>            
            <a href="{{route('lamaangsuran.index')}}" class="btn btn-danger"></i>Kembali</a>
                </div>
        <div class="card-body">
            <div class="form-group row col-6">
                <label>Kategori Kavling</label>
                <select name="kategori_id" class="form-control select2 select2-hidden-accessible" style="width: 100%;" data-select2-id="1" tabindex="-1" aria-hidden="true">
                    <option disabled selected>-- Pilih Kategori --</option>
                    @foreach ($lamaangsurane as $lamaAngsurane)
                    <option value="{{$lamaAngsurane->id}}">{{$lamaAngsurane->nama}}</option>
                    @endforeach
                </select>
              </div>
                <div class="form-group row col-6">
                    <label>Pembayaran</label>
                    <select name="metodepembayaran_id" class="form-control select2 select2-hidden-accessible" style="width: 100%;" data-select2-id="1" tabindex="-1" aria-hidden="true">
                        <option disabled selected>-- Pilih Kategori --</option>
                        @foreach ($lamaAngsuran as $LamaAngsuran)
                        <option value="{{$LamaAngsuran->id}}">{{$LamaAngsuran->pembayaran}}</option>
                        @endforeach
                    </select>
                  </div>
                    <div class="form-group row col-6">
                      <label for="lamaangsuran">Lama Angsuran</label>
                      <input type="text" class="form-control" id="lamaangsuran" name="lamaangsuran" placeholder="Masukkan nama kategori">
                    </div>
                    <div class="form-group row col-6">
                        <label for="pembayaransales">Lama Pembayaran Komisi</label>
                        <input type="text" class="form-control" id="pembayaransales" name="pembayaransales" placeholder="Masukkan nama kategori">
                      </div>
                      <div class="form-group row col-6">
                        <label for="komisisales">Komisi Marketing</label>
                        <input type="text" class="form-control" id="komisisales" name="komisisales" placeholder="Masukkan nama kategori">
                      </div>
                      <div class="card-body">
                        <table class="table table-border">
                            <thead>
                                <tr>
                                    <th>
                                        No 
                                    </th>
                                    <th>
                                        Lama Angsuran
                                    </th>
                                    <th>
                                        Lama Pembayaran Komisi Sales
                                    </th>
                                    <th>
                                        Komisi Sales
                                    </th>
                                    <th>
                                        Keterangan
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($Lamaangsuransi as $lama)
                                <tr>
                                <td>
                                    {{$loop->iteration}}
                                </td>
                                <td>
                                    {{$lama->lamaangsuran}}    
                                </td>
                                <td>
                                    {{$lama->pembayaransales}}
                                </td>
                                <td>
                                    {{$lama->komisisales}}
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