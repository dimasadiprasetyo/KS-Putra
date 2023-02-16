@extends('layouts.main')
@section('title')
    Edit Kategori
@endsection
@section('judul')
    <u>EDIT</u>
@endsection
@section('content')
<div class="card card-primary">
    <!-- /.card-header -->
    <!-- form start -->
    <form action="{{route('kategori.update', $kategori->id)}}" method="POST">
      @method('PUT')
      @csrf
      <div class="card-body">
        <div class="form-group">
          <div class="row mb-2">
            <label for="nama" class="col-sm-1 col-form-label">Nama</label>
            <div class="col-5">
          <input type="text" value="{{$kategori->nama}}"  class="form-control" id="nama" name="nama" placeholder="Masukkan nama kategori">
        </div>
          </div>
        </div>
      <!-- /.card-body -->

      <div class="card-footer">
        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="{{route('kategori.index')}}" class="btn btn-danger">Kembali</a>
      </div>
    </form>
  </div>
@endsection