@extends('layouts.main')
@section('title')
    Edit Datakavling
@endsection
@section('judul')
    <u>EDIT</u>
@endsection
@section('content')
<div class="card card-primary">
    <!-- /.card-header -->
    <!-- form start -->
    <form action="{{route('datakavling.update', $datakavling->id )}}" method="POST">
        @csrf
        @method('PUT')
        <div class="card-body">
          <div class="row">
            <div class="col-md-5">
        <div class="form-group">
            <label>Kategori Kavling</label>
            <select name="kategori_id" class="form-control select2 select2-hidden-accessible" style="width: 100%;" data-select2-id="1" tabindex="-1" aria-hidden="true">
                <option disabled selected>-- Pilih Kategori --</option>
                @foreach ($Datakavling as $data)
                <option value="{{$data->id}}" {{$data->id ? 'selected' : null}}>{{$data->nama}}</option>
                @endforeach
            </select>
          </div>
          
          <div class="form-group">
            <label>Subkategori</label>
            <select name="subkategori_id" class="form-control select2 select2-hidden-accessible" style="width: 100%;" data-select2-id="1" tabindex="-1" aria-hidden="true">
                <option disabled selected>-- Pilih Kategori --</option>
                @foreach ($datakavlingis as $Datakavling1)
                <option value="{{$Datakavling1->id}}" {{$Datakavling1->id ? 'selected' : null}}>{{$Datakavling1->namasub}}</option>
                @endforeach
            </select>
          </div>

        <div class="form-group">
          <label for="cluster">Cluster</label>
          <input type="text" value="{{$datakavling->cluster}}" class="form-control" id="cluster" name="cluster" placeholder="Masukkan nama subkategori">
        </div>

        <div class="form-group">
          <label for="luaskavling">Luas Kavling</label>
          <input type="text" value="{{$datakavling->luaskavling}}" class="form-control" id="luaskavling" name="luaskavling" placeholder="Masukkan nama subkategori">
        </div>

        <div class="form-group">
          <label for="hargacash">Harga(Cash)</label>
          <input type="text" value="{{$datakavling->hargacash}}" class="form-control" id="hargacash" name="hargacash" placeholder="Masukkan nama subkategori">
        </div>

            </div>
          <div class="col-md-5">
          <div class="form-group">
            <label for="ukurantanah">Ukuran Tanah</label>
            <input type="text" value="{{$datakavling->ukurantanah}}" class="form-control" id="ukurantanah" name="ukurantanah" placeholder="Masukkan nama subkategori">
          </div>
          <div class="form-group">
            <label for="tipekavling">Tipe Kavling</label>
            <input type="text" value="{{$datakavling->tipekavling}}" class="form-control" id="tipekavling" name="tipekavling" placeholder="Masukkan nama subkategori">
          </div>
          <div class="form-group">
            <label for="nomorkavling">Nomor Kavling</label>
            <input type="text" value="{{$datakavling->nomorkavling}}"class="form-control" id="nomorkavling" name="nomorkavling" placeholder="Masukkan nama subkategori">
          </div>
          <div class="form-group">
            <label for="nopbb">Nomor PPJB</label>
            <input type="text" value="{{$datakavling->nopbb}}"class="form-control" id="nopbb" name="nopbb" placeholder="Masukkan nama subkategori">
          </div>

        </div>
            </div>
          </div>
        </div>
          

      <!-- /.card-body -->

      <div class="card-footer">
        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="{{route('datakavling.index')}}" class="btn btn-danger">Kembali</a>
      </div>
    </form>
  </div>
@endsection