@extends('layouts.main')
@section('title')
    Create Datakavling
@endsection
@section('judul')
    <u>CREATE</u>
@endsection
@section('content')
<div class="card card-primary">
    <!-- /.card-header -->
    <!-- form start -->
    <form action="{{route('datakavling.store')}}" method="POST">
        @csrf
        <div class="card-body">
          <div class="row">
          <div class="col-md-5">
         <div class="form-group">
            <label>Kategori Kavling</label>
            <select name="kategori_id" class="form-control select2 select2-hidden-accessible" style="width: 100%;" data-select2-id="1" tabindex="-1" aria-hidden="true">
                <option disabled selected>-- Pilih Kategori --</option>
                @foreach ($DatakavlingA as $datakavlinga)
                <option value="{{$datakavlinga->id}}">{{$datakavlinga->nama}}</option>
                @endforeach
            </select>
          </div>
          

          <div class="form-group">
            <label>Subkategori</label>
            <select name="subkategori_id" class="form-control select2 select2-hidden-accessible" style="width: 100%;" data-select2-id="1" tabindex="-1" aria-hidden="true">
                <option disabled selected>-- Pilih Sub-Kategori --</option>
                @foreach ($datakavlingis as $Datakavling1)
                <option value="{{$Datakavling1->id}}">{{$Datakavling1->namasub}}</option>
                @endforeach
            </select>
          </div>
                      
        <div class="form-group">
          <label for="cluster">Cluster</label>
          <input type="text" class="form-control" id="cluster" name="cluster" placeholder=" example: A">
        </div>
        
        <div class="form-group">
            <label for="luaskavling" >Luas Kavling</label>
            <input type="text" class="form-control" id="luaskavling" name="luaskavling" placeholder="example: 16m2">
          </div>
                  
        <div class="form-group">
          <label for="hargacash">Harga(Cash)</label>
          <input type="text" class="form-control" id="hargacash" name="hargacash" placeholder="example: 120000000">
        </div>
        </div>

          <div class="col-md-6">
          <div class="form-group">
            <label for="ukurantanah">Ukuran Tanah</label>
            <input type="text" class="form-control" id="ukurantanah" name="ukurantanah" placeholder="example: 12 x 9m">
          </div>

          <div class="form-group">
            <label for="tipekavling">Tipe Kavling</label>
            <input type="text" class="form-control" id="tipekavling" name="tipekavling" placeholder="example: 16">
          </div>
            

          <div class="form-group">
            <label for="nomorkavling">Nomor Kavling</label>
            <input type="text" class="form-control" id="nomorkavling" name="nomorkavling" placeholder="example: 110">
          </div>

          <div class="form-group">
            <label for="nopbb">Nomor PPJB</label>
            <input type="text" class="form-control" id="nopbb" name="nopbb" placeholder="Masukkan Nomor PPJB 'Bila Ada'">
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