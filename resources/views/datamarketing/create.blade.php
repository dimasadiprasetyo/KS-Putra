@extends('layouts.main')
@section('title')
    Create Marketing
@endsection
@section('judul')
    <u>CREATE</u>
@endsection
@section('content')
<div class="card card-primary">
    <!-- /.card-header -->
    <!-- form start -->
    <form action="{{route('datamarketing.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
      <div class="card-body">
        <div class="form-group row col-6">
          <label for="nomarketing">Id Marketing</label>
          <input type="text" class="form-control" id="nomarketing" name="nomarketing" placeholder="example : M001">
        </div>
        <div class="form-group row col-6">
            <label for="nama">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama" placeholder="example : Adam">
          </div>
          <div class="form-group row col-6">
            <label for="alamat">Alamat</label>
            <input type="text" class="form-control" id="alamat" name="alamat" placeholder="example : Peturen">
          </div>
          <div class="form-group row col-6">
            <label for="telepon">Telpon</label>
            <input type="text" class="form-control" id="telepon" name="telepon" placeholder="example : 0899">
          </div>
          <div class="form-group row col-6">
            <label for="nik">NIK</label>
            <input type="text" class="form-control" id="nik" name="nik" placeholder="example : 33234">
          </div>
      <div class="form-group row col-6">	
					<div class="form-group">
						<b>KTP</b><br/>
						<input type="file" class="form-control-file" id="filename" name="filename" required>
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