@extends('layouts.main')
@section('title')
    Edit Subkategori
@endsection
@section('judul')
    <u>EDIT</u>
@endsection
@section('content')
<div class="card card-primary">
    <!-- /.card-header -->
    <!-- form start -->
    <form action="{{route('subkategori.update', $subkategori->id)}}" method="POST">
        @csrf
        @method('PUT')
      <div class="card-body">
        <div class="form-group">
          <div class="row mb-2">
            <label for="nama" class="col-sm-2 col-form-label">Sub Kategori</label>
            <div class="col-4">  
          <input type="text" value="{{$subkategori->namasub}}"class="form-control" id="nama" name="nama" placeholder="Masukkan nama subkategori">
        </div>
      </div>
        </div>

        <div class="form-group">
        <div class="row mb-2">
          <label class="col-sm-2 col-form-label">Kategori</label>
          <div class="col-4">      
            <select name="kategori_id"class="form-control select2 select2-hidden-accessible" style="width: 100%;" data-select2-id="1" tabindex="-1" aria-hidden="true">
                <option disabled selected>-- Pilih Kategori --</option>
                @foreach ($subkategories as $kategori)
                <option value="{{$kategori->id}}" {{$kategori->id ? 'selected' : null}}>{{$kategori->nama}}</option>
                @endforeach
            </select>
          </div>
        </div>
      </div>
      <!-- /.card-body -->

      <div class="card-footer">
        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="{{route('subkategori.index')}}" class="btn btn-danger">Kembali</a>
      </div>
    </form>
  </div>
@endsection