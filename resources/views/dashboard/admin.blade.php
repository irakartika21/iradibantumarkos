@extends('template.master')

@section('content')
<section class="content">
      <div class="container-fluid">
      <div class="card card-solid">
  <div class="card-body pb-0">
    <div class="row">
      <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch flex-column">
        <div class="card bg-light d-flex flex-fill">
          <div class="card-header text-muted border-bottom-0">
            ADMIN
          </div>
          <div class="card-body pt-0">
            <div class="row">
              <div class="col-7">
                <h2 class="lead"><b>IRA KARTIKA</b></h2>
                <p class="text-muted text-sm"><b>About: </b> Admin Laundry </p>
                <ul class="ml-4 mb-0 fa-ul text-muted">
                  <li class="small"><span class="fa-li"><i class="fas fa-lg fa-building"></i></span> Addres : Adiarsa Puasaka | RT01/07</li>
                  <li class="small"><span class="fa-li"><i class="fas fa-lg fa-phone"></i></span> Phone : 
                  +62468653687978767</li>
                </ul>
              </div>
              <div class="col-5 text-center">
                <img src="{{ asset('adminlte/dist/img/admin.jpg')}}" alt="user-avatar" class="img-circle img-fluid">
              </div>
            </div>
          </div>
          <div class="card-footer">
            <div class="text-right">
            </div>
          </div>
        </div>
</div>
<div class="container-fluid">
<div class="card-body pt-0">
        <div class="row">
          <div class="col-lg-3 col-6">
            <div class="small-box bg-info">
              <div class="inner">
                <h3>Outlet</h3>

                <p>Outlet</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="/outlet" class="small-box-footer">GO <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>Paket</h3>

                <p>Paket</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="{{route('paket.index')}}" class="small-box-footer">GO <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>Pelanggan</h3>

                <p>Pelanggan</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="/member" class="small-box-footer">GO<i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>Pengguna</h3>

                <p>Data Pengguna</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="/user" class="small-box-footer">GO<i class="fas fa-arrow-circle-right"></i></a>
            </div>
            </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">  
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>Transaksi</h3>
                <p>Transaksi</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="/transaksi" class="small-box-footer">GO<i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          </div>
          </div>
    </section>


@endsection