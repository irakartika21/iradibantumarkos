@extends('template.master')

@section ('content')
<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Tambah Data</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->

              <form action="{{ route('outlet.index')}}" method="POST">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                  <label for="nama">Input nama</label>
                  <input type="text" name="nama" class="form-control" id="nama" placeholder="Nama" value="{{ $outlet->nama }}" disabled> 
                  </div>

                  <div class="form-group">
                    <label for="inputalamat">Input alamat</label>
                    <input type="text" name="alamat" class="form-control" id="inputalamat" placeholder="Alamat" value="{{ $outlet->alamat }}" disabled>
                  </div>

                  <div class="form-group">
                  <label for="telp">Input telp</label>
                  <input type="text" name="telp" class="form-control" id="telp" placeholder="Telp" value="{{ $outlet->telp }}" disabled>
                  </div>
                <!-- /.card-body -->

                <a class="btn btn-primary" href="{{ route('outlet.index') }}">
                 <i class="fa fa-arrow-left"></i>
                Kembali
                </a>
                </div>
              </form>
            </div>
@endsection