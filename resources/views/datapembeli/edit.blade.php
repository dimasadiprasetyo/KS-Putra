@extends('layouts.main')
@section('title')
    Edit Pembeli
@endsection
@section('judul')
    <u>EDIT</u>
@endsection
@section('content')
<div class="card card-primary">
    <!-- /.card-header -->
    <!-- form start -->
    <form action="{{route('datapembeli.update', $datapembeli->id)}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
      <div class="card-body">
        <div class="form-group row col-6">
          <label for="nopembeli">Id Pembeli</label>
          <input type="text" readonly value="{{$datapembeli->nopembeli}}" class="form-control" id="nopembeli" name="nopembeli" placeholder="Masukkan nama kategori">
        </div>
        <div class="form-group row col-6">
            <label for="namapembeli">Nama</label>
            <input type="text" value="{{$datapembeli->namapembeli}}" class="form-control" id="namapembeli" name="namapembeli" placeholder="Masukkan nama kategori">
          </div>
          <div class="form-group row col-6">
            <label for="alamat">Alamat</label>
            <input type="text" value="{{$datapembeli->alamat}}" class="form-control" id="alamat" name="alamat" placeholder="Masukkan nama kategori">
          </div>
          <div class="form-group row col-6">
            <label for="telepon">Telpon</label>
            <input type="text" value="{{$datapembeli->telepon}}" class="form-control" id="telepon" name="telepon" placeholder="Masukkan nama kategori">
          </div>

          <div class="form-group row col-6">
            <label for="nik">NIK</label>
            <input type="text" value="{{$datapembeli->nik}}" class="form-control" id="nik" name="nik" placeholder="Masukkan nama kategori">
          </div>
      <!-- /.card-body -->
      <div class="form-group row col-6">	
					<div class="form-group">
						<b>KTP</b><br/>
            <input type="file" value="{{$datapembeli->file}}" class="form-control-file" id="filename" name="filename" required>
            <br>
					<img src="{{asset('images/'. $datapembeli->file)}}" height="200px" width="300px" alt="" srcset="">
          </div>
          
      
				</table>
			</div>
		</div>
      <div class="card-footer">
        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="{{route('datapembeli.index')}}" class="btn btn-danger">Kembali</a>
      </div>
    </form>
  </div>
@endsection