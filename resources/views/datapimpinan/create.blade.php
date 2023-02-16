@extends('layouts.main')
@section('title')
    Create Datapimpinan
@endsection
@section('judul')
    <u>CREATE</u>
@endsection
@section('content')
<div class="card card-primary">
    <!-- /.card-header -->
    <!-- form start -->
    <form action="{{route('datapimpinan.store')}}" method="POST">
        @csrf
      <div class="card-body">
        <div class="form-group row col-6">
          <label for="idpimpinan">Id Pimpinan</label>
          <input type="text" class="form-control" id="idpimpinan" name="idpimpinan" placeholder="Masukkan nama kategori">
        </div>
        <div class="form-group row col-6">
            <label for="nama">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan nama kategori">
          </div>
          <div class="form-group row col-6">
            <label for="alamat">Alamat</label>
            <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Masukkan nama kategori">
          </div>
          <div class="form-group row col-6">
            <label for="telepon">Telpon</label>
            <input type="text" class="form-control" id="telepon" name="telepon" placeholder="Masukkan nama kategori">
          </div>
          <div class="form-group row col-6">
            <label for="email">Email</label>
            <input type="text" class="form-control" id="email" name="email" placeholder="Masukkan nama kategori">
          </div>
      <!-- /.card-body -->

      <div class="card-footer">
        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="{{route('datapimpinan.index')}}" class="btn btn-danger">Kembali</a>
      </div>
    </form>
  </div>
@endsection