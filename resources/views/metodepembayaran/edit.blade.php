@extends('layouts.main')
@section('title')
    Edit Metode
@endsection
@section('judul')
    <u>EDIT</u>
@endsection
@section('content')
<div class="card card-primary">
    <!-- /.card-header -->
    <!-- form start -->
    <form action="{{route('metodepembayaran.update', $metodepembayaran->id)}}" method="POST">
        @csrf
        @method('PUT')
      <div class="card-body">
        <div class="form-group">
          <div class="row mb-1">
            <label for="pembayaran" class="col-sm-3 col-form-label">PEMBAYARAN</label>
            <div class="col-6">
          <input type="text" value="{{$metodepembayaran->pembayaran}}"  class="form-control" id="pembayaran" name="pembayaran" placeholder="Masukkan nama kategori">
        </div>
          </div>
      <!-- /.card-body -->

      <div class="card-footer">
        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="{{route('metodepembayaran.index')}}" class="btn btn-danger">Kembali</a>
      </div>
    </form>
  </div>
@endsection