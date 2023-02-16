@extends('layouts.main')
@section('title')
    Create Subkategori
@endsection
@section('judul')
    <u>CREATE</u>
@endsection
@section('content')
<div class="card card-primary">
    <!-- /.card-header -->
    <!-- form start -->
    <form action="{{route('subkategori.store')}}" method="POST">
        @csrf
      <div class="card-body">
        <div class="form-group">
          <div class="row mb-2">
            <label for="namasub" class="col-sm-2 col-form-label">Sub Kategori</label>
            <div class="col-4">  
              <input type="text" class="form-control" id="namasub" name="namasub" placeholder="Masukkan nama subkategori">
        </div>
          </div>
        </div>

        <div class="form-group">
          <div class="row mb-2">
            <label class="col-sm-2 col-form-label">Kategori</label>
            <div class="col-4">  
            <select name="kategori_id" class="form-control select2 select2-hidden-accessible" style="width: 100%;" data-select2-id="1" tabindex="-1" aria-hidden="true">
                <option disabled selected>-- Pilih Kategori --</option>
                @foreach ($subkategories as $subkategori)
                <option value="{{$subkategori->id}}">{{$subkategori->nama}}</option>
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