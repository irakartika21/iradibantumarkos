 <!-- Main content -->
 <section class="content">

<!-- Default box -->
<div class="card card-solid">
  <div class="card-body pb-0">
    <div class="row">
      <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch flex-column">
        <div class="card bg-light d-flex flex-fill">
          <div class="card-header text-muted border-bottom-0">
          Owner
          </div>
          <div class="card-body pt-0">
            <div class="row">
              <div class="col-7">
                <h2 class="lead"><b>IRA KARTIKA</b></h2>
                <p class="text-muted text-sm"><b>About: </b> Owner Laundry </p>
                <ul class="ml-4 mb-0 fa-ul text-muted">
                  <li class="small"><span class="fa-li"><i class="fas fa-lg fa-building"></i></span> Addres : Adiarsa Puasaka | RT01/07</li>
                  <li class="small"><span class="fa-li"><i class="fas fa-lg fa-phone"></i></span> Phone : 
                  +62468653687978767</li>
                </ul>
              </div>
              <div class="col-5 text-center">
                <img src="{{ asset('adminlte/dist/img/owner.jpg')}}" alt="user-avatar" class="img-circle img-fluid">
              </div>
            </div>
          </div>
          <div class="card-footer">
            <div class="text-right"> 
            </div>
          </div>
        </div>
      </div>
    </div>
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
            </td>
         </tr>
         @empty
         <tr>
          <td>Data Masih Kosong</td>
        </tr>
        @endforelse
      </table>
    </div>
</div>
<!-- /.card -->

</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->
