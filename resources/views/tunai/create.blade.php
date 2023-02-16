@extends('layouts.main')
@section('title')
    Create penjualan
@endsection
@section('judul')
    TAMBAH PENJUALAN KAVLING
@endsection
@section('content')
<div class="card card-primary">
    <!-- /.card-header -->
    <!-- form start -->
    <form action="{{route('tunai.store', $id)}}" method="POST">
        @csrf
  <div class="card-body">
    <div class="form-group">
    <div class="row mb-3">
      <label class="col-sm-2 col-form-label">Id Pembeli</label>
    <div class="col-3">
      <input type="text" class="form-control" readonly value="{{$penjualantunai->datapembeli->nopembeli}}">
    </div>
    <div class="col-3">
        <input type="text" class="form-control" readonly value="{{$penjualantunai->datapembeli->namapembeli}}">
  </div>
  </div>

    <div class="form-group">
      <div class="row mb-3">
        <label class="col-sm-2 col-form-label">Cluster Kavling</label>
        <div class="col-sm-5">
        <input type="text" class="form-control" readonly value="{{$penjualantunai->datakavling->cluster}}{{$penjualantunai->datakavling->nomorkavling}}">
    </div>
      </div>

    <div class="form-group">
      <div class="row mb-4">
        <label class="col-sm-2 col-form-label">Pembayaran</label>
      <div class="col-sm-1">
        <input type="text" class="form-control" readonly value="{{$penjualantunai->metodepembayaran->pembayaran}}">
      </div>
      <div class="col-sm-4">
        <input type="date" name="tanggal" id="tanggal" placeholder="tanggal" class="form-control">
    </div>
   </div>
 
 <div class="form-group">
  <div class="row mb-4">
    <label class="col-sm-2 col-form-label">Jumlah (Rp)</label>
  <div class="col-sm-5">
      <input type="text" class="form-control" id="pembayarantunai" name="pembayarantunai" placeholder="example : 1200000">
  </div>
  </div>
  
    </table>
  </div>
</div>
  <div class="card-footer">
    <button type="submit" class="btn btn-primary">Simpan</button>
    <a href="{{route('tunai.index',$id)}}" class="btn btn-danger">Kembali</a>
  </div>
</form>
</div>
@endsection

