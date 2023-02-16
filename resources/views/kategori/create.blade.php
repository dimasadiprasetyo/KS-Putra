@extends('layouts.main')
@section('title')
    Create Kategori
@endsection
@section('judul')
    <u>CREATE</u>
@endsection
@section('content')
<div class="card card-primary">
    <!-- /.card-header -->
    <!-- form start -->
    <form action="{{route('kategori.store')}}" method="POST">
        @csrf
      <div class="card-body">
          <div class="form-group">
            <div class="row mb-2">
              <label for="nama" class="col-sm-1 col-form-label">Nama</label>
              <div class="col-5">
                @error('nama')
                {{$message}}  
              @enderror
          <input type="text" class="form-control" id="nama" name="nama" value="{{old('nama')}}" placeholder="Masukkan nama kategori">
        </div>
            </div>
          </div>
      <!-- /.card-body -->

      <div class="card-footer">
        <button type="submit" class="btn btn-primary" class="text-left" >Simpan</button>
        <a href="{{route('kategori.index')}}" class="btn btn-danger" class="text-left">Kembali</a>
      </div>
    </form>
  </div>
@endsection