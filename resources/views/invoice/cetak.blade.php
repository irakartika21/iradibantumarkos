<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<title>Laundry | Invoice Print</title>

 <!-- Google Font: Source Sans Pro -->
 <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('adminlte/plugins/fontawesome-free/css/all.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('adminlte/dist/css/adminlte.min.css')}}">
</head>
<body>
<div class="wrapper">
  <!-- Main content -->
  <section class="invoice">
    <!-- title row -->
    <div class="row">
      <div class="col-12">
        <h2 class="page-header">
          <i class="fas fa-globe"></i> Laundry|Cuciin
          @if($details->count() > 0)
            <small class="float-right">{{ $details->first()->transaksi->tgl }}</small>
          @endif
        </h2>
      </div>
      <!-- /.col -->
    </div>
    <!-- info row -->
      <!-- /.col -->
      <div class="col-sm-4 invoice-col">
      @if($details->count() > 0)
      <b>Invoice : {{$details->first()->transaksi->kode_invoice }}</b><br>
        <br>
        <b> Kepada :{{$details->first()->transaksi->member->nama }}</b><br>
        @endif
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->

    <!-- Table row -->
    <div class="row">
      <div class="col-12 table-responsive">
      <table class="table table-striped">
  <thead>
    <tr>
      <td class="td1">No</td>
      <td class="td3">Barang</td>
      <td class="td3">harga</td>
      <td class="td4">Jumlah</td> 
      <td class="td4">Total</td>   
    </tr>
  </thead>
  <tbody>
    @php
    $total = 0; // inisialisasi variabel total
    @endphp
    @foreach($details as $detail)
    <tr>
      <td class="th1">{{ $loop->iteration }}</td>
      <td class="th3">{{ $detail->paket->nama_paket }}</td>
      <td class="th2">{{ $detail->harga }}</td>
      <td class="th2">{{ $detail->qty }}</td>
      <td class="th2">{{ $detail->harga * $detail->qty }}</td> <!-- hasil perkalian -->
    </tr>
    @php
    $total += $detail->harga * $detail->qty; // menambahkan hasil perkalian pada variabel total
    @endphp
    @endforeach
    <tr>
      <td colspan="4" class="text-right"><b>Total</b></td>
      <td class="th2 text-left"><b>{{ $total }}</b></td> <!-- menampilkan nilai total -->
    </tr>
  </tbody>
</table>

      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->

    <div class="row">
      <!-- accepted payments column -->
      <div class="col-6">
        <p class="lead">Payment</p>
        <img src="{{ asset('adminlte/dist/img/credit/visa.png')}}" alt="Visa">
        <img src="{{ asset('adminlte/dist/img/credit/mastercard.png')}}" alt="Mastercard">
        <img src="{{ asset('adminlte/dist/img/credit/american-express.png')}}" alt="American Express">
        <img src="{{ asset('adminlte/dist/img/credit/paypal2.png')}}" alt="Paypal">

        <p class="text-muted well well-sm shadow-none" style="margin-top: 10px;">
          
        </p>
      </div>
      <!-- /.col -->
      <div class="col-6">
        <p class="lead">Harga</p>

        <div class="table-responsive">
          <table class="table">
            <tr>
              <th style="width:50%">Kaos</th>
              <td>Rp.2000</td>
            </tr>
            <tr>
              <th>Bed Cover</th>
              <td>Rp.10.000</td>
            </tr>
            <tr>
              <th>Kiloan:</th>
              <td>Rp.5000</td>
            </tr>
            <tr>
              <th>Selimut:</th>
              <td>Rp.7000</td>
            </tr>
          </table>
        </div>
      </div>
            </div>
            <!-- /.invoice -->
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    </div>
    <!-- /.row -->
  </section>
  <!-- /.content -->
</div>
<!-- ./wrapper -->
<!-- Page specific script -->
</body>
</html>
<script type="text/javascript">
        window.print();
    </script>