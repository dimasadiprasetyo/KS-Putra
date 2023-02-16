@extends('layouts.main')
@section('title')
    Create Metode
@endsection
@section('judul')
    <u>CREATE</u>
@endsection
@section('content')
<div class="card card-primary">
    <!-- /.card-header -->
    <!-- form start -->
    <form action="{{route('metodepembayaran.store')}}" method="POST">
        @csrf
      <div class="card-body">
        <div class="col-md-7">
        <div class="form-group">
          <div class="row mb-2">
          <label for="pembayaran" class="col-sm-3 col-form-label">PEMBAYARAN</label>
          <div class="col-7">
          <input type="text" class="form-control" id="pembayaran" name="pembayaran" placeholder="example: 'Tunai/Angsuran'">
        </div>
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