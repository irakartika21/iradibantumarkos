@extends('template.master')

@section ('content')
<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Tambah data</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->

              <form action="{{route('member.index')}}" method="POST">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                  <label for="nama">Input nama</label>
                  <input type="text" name="nama" class="form-control" id="nama" placeholder="nama" value="{{ $member->nama }}" disabled>
                  </div>

                  <div class="form-group">
                    <label for="inputalamat">Input alamat</label>
                    <input type="text" name="alamat" class="form-control" id="inputalamat" placeholder="alamat" value="{{ $member->alamat }}" disabled>
                  </div>

                  <div class="form-group">
                  <label for="telp">Input telp</label>
                  <input type="text" name="tlp" class="form-control" id="telp" placeholder="tlp" value="{{ $member->tlp }}" disabled>
                  </div>

                  <div class="form-group">
                <label>Jenis</label>
                <select class="form-control" name="jenis_kelamin">
                  <option disabled selected></option>
                  <option value="L" disabled {{ $member->jenis_kelamin == "L" ? "selected" : ""}}>laki-laki</option>
                  <option value="P" disabled {{ $member->jenis_kelamin == "P" ? "selected" : ""}}>perempuan</option>
                </select>
                <!-- /.card-body -->

                <div class="card-footer">
              <a class="btn btn-primary" href="/member">
                <i class="nav-icon fas fa-solid fa-arrow-left"></i>
                back
              </a>
              </form>
            </div>
@endsection