@extends('template.master')

@section('judul')
<h1>Halaman Data Transaksi</h1>
@endsection

@section('content')
<div class="row">
  <div class="col-md-6">
    <div class="card card-primary">
      <div class="card-header">
        <h3 class="card-title">Pilih Member</h3>
      </div>
      <form action="{{route('transaksi.index')}}" method="POST">
      @csrf
        <div class="card-body">
            <label>-Pilih data Member-</label>
           <select class="form-control" name="id_member" id="id_outlet">
            @forelse ($member as $member)
            <option value="{{$member->id}}">{{$member->nama}}</option>
            @empty
            <option value=""disabled>Tidak Ada Member</option>
            @endforelse
           </select>
          </div>
    </div>
    <div class="card card-secondary">
      <div class="card-header">
        <h3 class="card-title">Pilih Data Outlet</h3>
      </div>
        <div class="card-body">
            <label>-Pilih data outlet-</label>
           <select class="form-control" name="id_outlet" id="id_outlet">
            @forelse ($outlet as $outlet)
            <option value="{{$outlet->id}}">{{$outlet->nama}}</option>
            @empty
            <option value=""disabled>Tidak Ada outlet</option>
            @endforelse
           </select>
          </div>
    </div>

  </div>
  <div class="col-md-6">
  <div class="card card-success">
      <div class="card-header">
        <h3 class="card-title">Pilih Paket</h3>
      </div>
      <div class="card-body">
      <label for="exampleInputEmail1">Pilih Jenis Paket</label> 
      <select class="form-control" name="id_paket" id="nama_paket"> 
        @forelse ($paket as $paket)
        <option value="{{ $paket->id}}">{{ $paket->nama_paket }}</option>
        @empty
       <option value="" disabled> Tidak Ada paket</option>
        @endforelse
     </select>
    </div>
    <div class="card-body">
      <label for="qty"> Jumlah </label>
      <input type="number" class="form-control" name="qty" id="qty">
    </div>   
    </div>
  </div>
</div>
<div class="card card-danger">
              <div class="card-header">
                <h3 class="card-title">Tambah Data</h3>
              </div>
              <div class="card-body">
              <div class="form-group">
                    <label for="">Kode Invoice</label>
                    <input type="text" name="kode_invoice" class="form-control" id="kode invoice" placeholder="kode invoice" >
                  </div>
                  <div class="form-group">
                <label for="harga_awal">Tanggal</label>
                <input type="date" name="tgl" class="form-control" id="Tanggal"
                 placeholder="Tanggal">
                </div>

                 <div class="form-group">
                <label for="harga_awal">Tanggal Bayar</label>
                <input type="date" name="tgl_bayar" class="form-control" id="Tgl_Bayar" 
                placeholder="Tanggal Bayar" >
              </div>

              <div class="form-group">
                <label for="harga_awal">Batas Waktu</label>
                <input type="date" name="batas_waktu" class="form-control" id="Batas_Waktu" 
                placeholder="Tanggal Bayar" >
              </div>

              <div class="form-group">
                <label for="harga_awal">Biaya Tambahan</label>
                <input type="text" name="biaya_tambahan" class="form-control" id="Biaya_Tambahan" 
                placeholder="Biaya Tambahan">
              </div>

              <div class="form-group">
                <label for="harga_awal">Diskon</label>
                <input type="text" name="diskon" class="form-control" id="Diskon" 
                placeholder="Diskon" >
              </div>

              <div class="form-group">
                <label for="harga_awal">Pajak</label>
                <input type="text" name="pajak" class="form-control" id="Pajak"
                 placeholder="Pajak">
              </div>
       
            <div class="form-group">
                <label>Status</label>
                <select class="form-control" name="status">
                  <option disabled selected>Status Barang</option>
                  <option value="di ambil">di ambil</option>
                  <option value="proses">proses</option>
                  </select>

                  <div class="form-group">
                <label>Keterngan</label>
                <select class="form-control" name="status">
                  <option disabled selected>Keterangan di bayar</option>
                  <option value="Dibayar">Dibayar</option>
                  <option value="Belum Diayar">Belum Dibayar</option>
                  </select>
              </div>
              <button type="submit" class="btn btn-danger">Submit</button>
                </div>
              </form>
            </div>
              </a>
</div>
@endsection