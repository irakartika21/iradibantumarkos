@extends('template.master')

@section('content')
<div class="row">
<div class="col-md-12">
  <!-- Form Element sizes -->
  <div class="card card-success">
    <div class="card-body">
      <form action="{{ route('transaksi.detail.store', request()->segment(2)) }}" method="post">
        @csrf
        <div class="row">
          <div class="form-group col-md-8">
            <select name="id_paket" id="id_paket" class="form-control">
              <option selected disabled>--Pilih Data Paket--</option>
              @forelse ($pakets as $paket)
                <option value="{{ $paket->id }}">{{ $paket->nama_paket }}</option>                  
              @empty
                <option selected disabled>Tidak Ada Paket Tersedia</option>
              @endforelse
            </select>
            @error('id_paket')
              <div class="text-danger small">{{ $message }}</div>
            @enderror
          </div>
          <div class="form-group  col-md-2">
            <input type="number" name="qty" id="qty" class="form-control" placeholder="Isi Qty">
            @error('qty')
              <div class="text-danger small">{{ $message }}</div>
            @enderror
          </div>
          <div class="form-group  col-md-2">
            <input type="submit" value="Tambah" class="btn btn-success form-control">
          </div>
        </div>
      </form>
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>
</div>
<div class="row">
  <!-- left column -->
  <div class="col-md-8">
    <!-- general form elements -->
    <div class="card card-primary">
      <div class="card-header">
        <h3 class="card-title">Data Member</h3>
      </div>
      <!-- /.card-header -->
      <!-- form start -->
        <div class="card-body">
          <div class="form-group">
              <label>Nama</label>
              <select class="form-select  form-control" aria-label="select example" name="member_id" >
                  <option selected>Open this select menu</option>
                  @foreach ($members as $member)
                  <option value="{{ $member->id}}">{{ $member->nama }}</option>
              @endforeach
            </select>
            </div>
            <div class="form-group ">
              <label>Nama paket</label>
              <select class="form-select  form-control" aria-label="Default select example" name="paket_id" >
                <option selected>Open this select menu</option>
                  @foreach ($pakets as $paket)
                <option value="{{ $paket->nama_paket}}">{{ $paket->nama_paket }}</option>
                  @endforeach
              </select>
             </div>
             <div class="form-group">
              <label>Kode Invoice</label>
              <select class="form-select form-control" aria-label="Default select example" name="kode_invoice" >
                <option selected>Open this select menu</option>
                  @foreach ($outlets as $outlet)
                <option value="{{ $outlet->id}}">{{ $outlet->id }}</option>
                  @endforeach
              </select>
             </div>
                  <div class="form-group">
                    <label for="harga_awal">SubTotal</label>
                    <input type="text" class="form-control" name="subTotal" id="SubTotal" placeholder="Rp.0" >
                  </div>
                  <div class="form-group">
                    <label for="harga_awal">Diskon</label>
                    <input type="text" name="diskon" class="form-control" id="Diskon" placeholder="Rp.0" >
                  </div>
                  <div class="form-group">
                    <label for="harga_awal">Total</label>
                    <input type="text" name="Total" class="form-control" id="Total" placeholder="Rp.0" >
                  </div>
           </div>
        </div>
    </div>
    <!-- /.card -->

  </div>
  <!--/.col (left) -->
  <!-- right column -->
  <!--/.col (right) -->
</div>
<script src="script.js"></script>

@endsection
