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
                  <input type="text" name="nama" class="form-control" id="nama" placeholder="nama">
                  </div>

                  <div class="form-group">
                    <label for="inputalamat">Input alamat</label>
                    <input type="text" name="alamat" class="form-control" id="inputalamat" placeholder="Alamat">
                  </div>

                  <div class="form-group">
                <label>Jenis</label>
                <select class="form-control" name="jenis_kelamin">
                  <option disabled selected>- Pilih Salah Satu -</option>
                  <option value="L">laki-laki</option>
                  <option value="P">perempuan</option>
                </select>

                  <div class="form-group">
                  <label for="telp">Input telp</label>
                  <input type="text" name="tlp" class="form-control" id="telp" placeholder="telp">
                  </div>
                <!-- /.card-body -->

                <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
@endsection
