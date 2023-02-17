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
              <form action="/member/{{$members->id}}" method="POST">
                @csrf
                @method('PUT')
                <div class="card-body">
                  <div class="form-group">
                  <label for="nama">Input nama</label>
                  <input type="text" name="nama" class="form-control" id="nama" placeholder="nama" 
                  value="{{ $members->nama}}" required>
                  @error('nama')
                        <div class="alert alert-danger">
                        {{$message}}
                        </div>
                    @enderror
                  </div>

                  <div class="form-group">
                    <label for="inputalamat">Input alamat</label>
                    <input type="text" name="alamat" class="form-control" id="inputalamat" placeholder="Alamat"
                    value="{{ $members->alamat}}" required>
                    @error('alamat')
                        <div class="alert alert-danger">
                        {{$message}}
                        </div>
                    @enderror
                  </div>

                  <div class="form-group">
                  <label for="tlp">Input tlp</label>
                  <input type="text" name="tlp" class="form-control" id="tlp" placeholder="tlp"
                   value="{{ $members->tlp}}" required>
                   @error('tlp')
                        <div class="alert alert-danger">
                        {{$message}}
                        </div>
                    @enderror
                  </div>

                  <div class="form-group">
                <label>Jenis</label>
                <select class="form-control" name="jenis_kelamin">
                  <option disabled selected>jenis kelamin</option>
                  <option value="L">laki-laki</option>
                  <option value="P">perempuan</option>
                </select>
                <!-- /.card-body -->

                
                <a class="btn btn-primary mr-3" href="{{ route('member.index') }}">
                 <i class="fa fa-arrow-left"></i>
                Kembali
                </a>

                <button type="submit" class="btn btn-primary">Save</button>
                <button type="reset" class="btn btn-primary">refresh</button>
                </div>
              </form>
            </div>
@endsection