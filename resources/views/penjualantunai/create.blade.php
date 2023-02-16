@extends('layouts.main')
@section('title')
    Create penjualan
@endsection
@section('judul')
PENJUALAN  TUNAI
@endsection
@section('content')
<div class="card card-primary">
    <!-- /.card-header -->
    <!-- form start -->
    <form action="{{route('penjualantunai.store')}}" method="POST">
        @csrf
        <div class="card-body">
            <div class="row">
            <div class="col-md-5">
            <div class="form-group ">
              <label>kategori</label>
              <select name="kategori_id" class="form-control cb" style="width: 100%;" data-select2-id="1" tabindex="-1" aria-hidden="true">
                  <option disabled selected>-- Pilih Kategori --</option>
                  @foreach ($tunai1 as $Tunai1)
                  <option value="{{$Tunai1->id}}">{{$Tunai1->nama}}</option>
                  @endforeach
              </select>
            </div>

            <div class="form-group">
              <label>Subkategori</label>
              <select name="subkategori_id" class="form-control cb" style="width: 100%;" data-select2-id="1" tabindex="-1" aria-hidden="true">
                  <option disabled selected>-- Pilih SubKategori --</option>
                  @foreach ($tunai2 as $Tunai2)
                  <option value="{{$Tunai2->id}}">{{$Tunai2->namasub}}</option>
                  @endforeach
              </select>
            </div>
            <div class="form-group">
              <label>kavling</label>
              <select name="datakavling_id" class="form-control cb" style="width: 100%;" data-select2-id="1" tabindex="-1" aria-hidden="true">
                  <option disabled selected>-- Pilih kavling --</option>
                  @foreach ($tunai3 as $Tunai3)
                  <option value="{{$Tunai3->id}}">{{$Tunai3->cluster}}{{$Tunai3->nomorkavling}}- Rp.{{number_format($Tunai3->hargacash, 0, ',','.')}}</option>
                  @endforeach
              </select>
            </div>
             <div class="form-group">
              <label>Data Pembeli</label>
              <select name="datapembeli_id" class="form-control cb" style="width: 100%;" data-select2-id="1" tabindex="-1" aria-hidden="true">
                  <option disabled selected>-- Pilih Data --</option>
                  @foreach ($tunai4 as $Tunai4)
                  <option value="{{$Tunai4->id}}">{{$Tunai4->nopembeli}}-{{$Tunai4->namapembeli}}</option>
                  @endforeach
              </select>
            </div>
            <div class="form-group">
              <label>Metode Pembayaran</label>
              <select name="metodepembayaran_id" class="form-control cb" style="width: 100%;" data-select2-id="1" tabindex="-1" aria-hidden="true">
                  <option disabled selected>-- Pilih Metode --</option>
                  @foreach ($tunai6 as $Tunai6)
                  <option value="{{$Tunai6->id}}">{{$Tunai6->pembayaran}}</option>
                  @endforeach
              </select>
            </div>

            </div>
            <div class="col-md-5">
              <div class="form-group">
                <label>Data Marketing</label>
                <select name="datamarketing_id" class="form-control cb" style="width: 100%;" data-select2-id="1" tabindex="-1" aria-hidden="true">                  
                  <option disabled selected>-- Pilih Data --</option>
                    @foreach ($tunai5 as $Tunai5)
                    <option value="{{$Tunai5->id}}">{{$Tunai5->nomarketing}}-{{$Tunai5->nama}}</option>
                    @endforeach
                </select>
              </div>
            <div class="form-group">
              <label for="promo">Promo</label>
              <input type="text" class="form-control" id="promo" name="promo" placeholder="example : 70000000 'Jangan dikasih titik'">
            </div>
            <div class="form-group">
              <label for="bayar">Jumlah Bayar Tunai</label>
              <input type="text" class="form-control" id="bayar" name="bayar" placeholder="example : 70000000 'Jangan dikasih titik'">
            </div>
            <div class="form-group">
              <label for="tertanggal">Tertanggal</label>
              <br>
              <input type="date" name="tertanggal" id="tertanggal" placeholder="Tanggal Lahir" class="form-control">
            </div>
            
          </div>
          </div>
          </div>
          <!-- /.card-body -->
          <div class="card-footer">
            <button type="submit" name="submit" class="btn btn-success float-right">Simpan</button>
          </div>
    </form>
  </div>
@endsection

