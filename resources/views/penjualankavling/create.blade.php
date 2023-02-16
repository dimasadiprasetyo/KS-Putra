@extends('layouts.main')
@section('title')
    Create penjualan
@endsection
@section('judul')
<u>CREATE ANGSURAN</u>
@endsection
@section('content')
<div class="card card-primary">
    <!-- /.card-header -->
    <!-- form start -->
    <form action="{{route('penjualankavling.store')}}" method="POST">
        @csrf
        <div class="card-body">
            <div class="row">
            <div class="col-md-5">
            <div class="form-group ">
              <label>kategori</label>
              <select name="kategori_id" class="form-control cb" style="width: 100%;" data-select2-id="1" tabindex="-1" aria-hidden="true">
                  <option disabled selected>-- Pilih Kategori --</option>
                  @foreach ($Penjualankavlings1 as $penjualan1)
                  <option value="{{$penjualan1->id}}">{{$penjualan1->nama}}</option>
                  @endforeach
              </select>
            </div>

            <div class="form-group">
              <label>Subkategori</label>
              <select name="subkategori_id" class="form-control cb" style="width: 100%;" data-select2-id="1" tabindex="-1" aria-hidden="true">
                  <option disabled selected>-- Pilih SubKategori --</option>
                  @foreach ($Penjualankavlings2 as $penjualan2)
                  <option value="{{$penjualan2->id}}">{{$penjualan2->namasub}}</option>
                  @endforeach
              </select>
            </div>
            <div class="form-group">
              <label>kavling</label>
              <select name="datakavling_id" class="form-control cb" style="width: 100%;" data-select2-id="1" tabindex="-1" aria-hidden="true">
                  <option disabled selected>-- Pilih kavling --</option>
                  @foreach ($Penjualankavlings3 as $penjualan3)
                  <option value="{{$penjualan3->id}}">{{$penjualan3->cluster}}{{$penjualan3->nomorkavling}}</option>
                  @endforeach
              </select>
            </div>
             <div class="form-group">
              <label>Data Pembeli</label>
              <select name="datapembeli_id" class="form-control cb" style="width: 100%;" data-select2-id="1" tabindex="-1" aria-hidden="true">
                  <option disabled selected>-- Pilih Data --</option>
                  @foreach ($Penjualankavlings4 as $penjualan4)
                  <option value="{{$penjualan4->id}}">{{$penjualan4->nopembeli}}-{{$penjualan4->namapembeli}}</option>
                  @endforeach
              </select>
            </div>
            <div class="form-group">
              <label>Metode Pembayaran</label>
              <select name="metodepembayaran_id" class="form-control cb" style="width: 100%;" data-select2-id="1" tabindex="-1" aria-hidden="true">
                  <option disabled selected>-- Pilih Metode --</option>
                  @foreach ($Penjualankavlings5 as $penjualan5)
                  <option value="{{$penjualan5->id}}">{{$penjualan5->pembayaran}}</option>
                  @endforeach
              </select>
            </div>

            <div class="form-group">
              <label>Lama Angsuran</label>
              <select name="lamaangsurantambah_id" class="form-control cb" style="width: 100%;" data-select2-id="1" tabindex="-1" aria-hidden="true">
                  <option disabled selected>-- Pilih Angsuran --</option>
                  @foreach ($Penjualankavlings6 as $penjualan6)
                  <option value="{{$penjualan6->id}}">{{$penjualan6->lamapembayaran}} Bulan - {{$penjualan6->subkategori->namasub}}</option>
                  @endforeach
              </select>
            </div>
            
            @include('penjualankavling.tanggal')
            </div>
            <div class="col-md-5">
              <div class="form-group">
                <label>Data Marketing</label>
                <select name="datamarketing_id" class="form-control cb" style="width: 100%;" data-select2-id="1" tabindex="-1" aria-hidden="true">                  
                  <option disabled selected>-- Pilih Data --</option>
                    @foreach ($Penjualankavlings7 as $penjualan7)
                    <option value="{{$penjualan7->id}}">{{$penjualan7->nomarketing}}-{{$penjualan7->nama}}</option>
                    @endforeach
                </select>
              </div>
            <div class="form-group">
              <label for="promo">Promo</label>
              <input type="text" class="form-control" id="promo" name="promo" placeholder="Masukkan nama subkategori">
            </div>
            <div class="form-group">
              <label for="dp">Jumlah DP</label>
              <input type="text" class="form-control" id="dp" name="dp" placeholder="Masukkan nama subkategori">
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

