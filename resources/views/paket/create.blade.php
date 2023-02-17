@extends('template.master')

@section ('content')
<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Tambah Data</h3>
              </div>

              <form action="{{route('paket.index')}}" method="POST">
                @csrf
              <div class="form-group">
                <label>nama outlet</label>
              <select class="form-control" name="outlet_id" >
                 <option disabled selected>- Pilih Salah Satu -</option>
                    @foreach ($outlet as $item)
                    <option value="{{ $item->id}}">{{ $item->nama . '|' . $item->alamat }}</option>
                    @endforeach
                  </select>
                </div>

              <div class="form-group">
                <label>Jenis</label>
                <select class="form-control" name="jenis">
                  <option disabled selected>Jenis laundry</option>
                  <option value="kiloan">kiloan</option>
                  <option value="selimut">selimut</option>
                  <option value="bed_cover">bed cover</option>
                  <option value="kaos">kaos</option>
                  <option value="lain">lainnya</option>
                </select>
                <div class="form-group">
                    <label for="nama paket">nama paket</label>
                    <input type="text" name="nama_paket" class="form-control" id="nama paket" placeholder="nama paket">
                  </div>
                <div class="form-group">
                    <label for="harga">harga</label>
                    <input type="text" name="harga" class="form-control" id="harga" placeholder="harga">
                  </div> 

                <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
              </a>
@endsection