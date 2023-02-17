@extends('template.master')

@section('judul')
<h1>Edit</h1>
@endsection

@section('content')
<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Data Baru</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="/outlet/{{$outlet->id}}" method="POST">
                @csrf
                @method('PUT')
                <div class="card-body">
                  <div class="form-group">
                  <label for="nama">Input nama</label>
                  <input type="text" name="nama" class="form-control" id="nama" placeholder="nama" 
                  value="{{ $outlet->nama}}" required>
                  @error('nama')
                        <div class="alert alert-danger">
                        {{$message}}
                        </div>
                    @enderror
                  </div>

                  <div class="form-group">
                    <label for="inputalamat">Input alamat</label>
                    <input type="text" name="alamat" class="form-control" id="inputalamat" placeholder="Alamat"
                    value="{{ $outlet->alamat}}" required>
                    @error('alamat')
                        <div class="alert alert-danger">
                        {{$message}}
                        </div>
                    @enderror
                  </div>

                  <div class="form-group">
                  <label for="telp">Input telp</label>
                  <input type="text" name="telp" class="form-control" id="telp" placeholder="telp"
                   value="{{ $outlet->telp}}" required>
                   @error('telp')
                        <div class="alert alert-danger">
                        {{$message}}
                        </div>
                    @enderror
                  </div>
                <!-- /.card-body -->

                
                <a class="btn btn-primary mr-3" href="{{ route('outlet.index') }}">
                 <i class="fa fa-arrow-left"></i>
                Kembali
                </a>

                <button type="submit" class="btn btn-primary">Save</button>
                <button type="reset" class="btn btn-primary">refresh</button>
                </div>
              </form>
            </div>
@endsection