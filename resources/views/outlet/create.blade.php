@extends('template.master')

@section ('content')
<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Tambah Data</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->

              <form action="{{route('outlet.index')}}" method="POST">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                  <label for="nama">Input nama</label>
                  <input type="text" name="nama" class="form-control" id="nama" placeholder="nama">
                  </div>

                  <div class="form-group">
                    <label for="inputalamat">Input alamat</label>
                    <input type="text" name="alamat" class="form-control" id="inputalamat" placeholder="Alamat">
                  </div>

                  <div class="form-group">
                  <label for="telp">Input telp</label>
                  <input type="text" name="telp" class="form-control" id="telp" placeholder="telp">
                  </div>
                <!-- /.card-body -->

                <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
@endsection