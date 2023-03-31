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
            <select name="paket_id" id="id_paket" class="form-control">
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
           <div class="form-group col-md-8">
            <label>Jenis Paket</label>
          <select name="jenis" id="jenis" class="form-control">
            <option selected disabled>--jenis Paket --</option>
            @foreach ($pakets as $paket)
                <option value="{{ $paket->nama_paket }}" data-harga="{{ $paket->harga }}">{{ $paket->jenis }}</option>
            @endforeach
          </select>
            </div>
          </div>
          <div class="form-group  col-md-2">
            <input type="submit" value="Tambah" class="btn btn-success form-control">
          </div>
        </div>
    </div>
  </div>
</form>
</div>
<div class="card">
    <div class="card-header">
    <div class="card-tools">
    <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
            </button>
          </div>
      <h3 class="card-title">Data Transaksi</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <table id="example2" class="table table-bordered table-hover">
        <thead>
    <tr>
        <td class="td1">No</td>
        <td class="td3">Nama Member</td>
        <td class="td3">Tanggal</td>
        <td class="td4">Status</td>
        <td class="td4">Dibayar</td>
        <td class="td4">Harga</td>
        <td class="td4">Action</td>
        
    </tr>
        </thead>
        <tbody>
            <tr>
          @forelse($details as $details)
          <th class="th1">{{ $loop->iteration}}</th>
            <td class="th3">{{ $details->transaksi->member->nama }}</td>
            <td class="th2">{{ $details->transaksi->tgl}}</td>
            <td class="th2">{{ $details->transaksi->status}}</td>
            <td class="th2">{{ $details->transaksi->dibayar}}</td>
            <td class="th2">{{ $details->paket->harga}}</td>
            <td>
            <form action="{{ route('transaksi.updateStatus', $details->transaksi->id) }}" method="POST">
                @csrf
                @method('PATCH')
                <button type="submit" class="btn btn-primary">Update Status</button>
              </form>
            </td>
         </tr>
         @empty
         <tr>
          <td>Data Masih Kosong</td>
        </tr>

        @endforelse
      </table>
    </div>

@endsection