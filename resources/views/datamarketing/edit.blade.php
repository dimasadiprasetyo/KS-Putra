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
    <form action="{{route('datamarketing.update', $datamarketing->id)}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
      <div class="card-body">
        <div class="form-group row col-6">
          <label for="nomarketing">Id Marketing</label>
          <input type="text" readonly value="{{$datamarketing->nomarketing}}" class="form-control" id="nomarketing" name="nomarketing" placeholder="Masukkan nama kategori">
        </div>
        <div class="form-group row col-6">
            <label for="nama">Nama</label>
            <input type="text" value="{{$datamarketing->nama}}" class="form-control" id="nama" name="nama" placeholder="Masukkan nama kategori">
          </div>
          <div class="form-group row col-6">
            <label for="alamat">Alamat</label>
            <input type="text" value="{{$datamarketing->alamat}}" class="form-control" id="alamat" name="alamat" placeholder="Masukkan nama kategori">
          </div>
          <div class="form-group row col-6">
            <label for="telepon">Telpon</label>
            <input type="text" value="{{$datamarketing->telepon}}" class="form-control" id="telepon" name="telepon" placeholder="Masukkan nama kategori">
          </div>
          {{-- <div class="form-group row col-6">
            <label for="email">Email</label>
            <input type="text" class="form-control" id="email" name="email" placeholder="Masukkan nama kategori">
          </div> --}}
      <!-- /.card-body -->
      <div class="form-group row col-6">	
					<div class="form-group">
						<b>KTP</b><br/>
						<input type="file" value="{{$datamarketing->file}}" class="form-control-file" id="filename" name="filename" required>
					<img src="{{asset('images-marketing')}}" alt="">
          </div>
          <div class="form-group row col-6">
            <label for="nik">NIK</label>
            <input type="text" value="{{$datamarketing->nik}}" class="form-control" id="nik" name="nik" placeholder="Masukkan nama kategori">
          </div>
      
				</table>
			</div>
		</div>
      <div class="card-footer">
        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="{{route('datamarketing.index')}}" class="btn btn-danger">Kembali</a>
      </div>
    </form>
  </div>
@endsection