@extends('layouts.main')
@section('title')
    Dasboard
@endsection
@section('content')
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                {{-- <h3>{{$Dasboard1}} <sup style="font-size: 20px">Orang</sup></h3> --}}
                <p><sup style="font-size: 17px">PEMBELI</sup></p>
              </div>
              <div class="icon">
                <i class="fas fa-user-friends"></i>
              </div>
              <a href="{{route('datapembeli.index')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>

          <!-- Penjualan-->
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>53<sup style="font-size: 20px">%</sup></h3>      
                <p><sup style="font-size: 17px">TERJUAL</sup></p>
              </div>
              <div class="icon">
                <i class="fas fa-shopping-cart"></i>
              </div>
              <a href="{{route('datakavling.index')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>

          <!--Tunai-->
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                {{-- <h3>{{$Dasboard3}}<sup style="font-size: 20px">Orang</sup></h3>       --}}
                <p><sup style="font-size: 17px">TUNAI</sup></p>
              </div>
              <div class="icon">
                <i class="fab fa-bitcoin"></i>
              </div>
              <a href="{{route("penjualantunai.index")}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>

          
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                {{-- web<h3>{{$Dasboard2}} <sup style="font-size: 20px">Orang</sup></h3> --}}
                <p><sup style="font-size: 17px">ANGSURAN</sup></p>
              </div>
              <div class="icon">
                <i class="fas fa-coins"></i>
              </div>
              <a href="{{route('penjualankavling.index')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
        </div>
      </div><!-- /.container-fluid -->
    </section>
      
@endsection
