@extends('template.master')

@section('content')
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
          <small class="float-right">20/11/2023</small>
        </h2>
      </div>
      <!-- /.col -->
    </div>
    <!-- info row -->
      <!-- /.col -->
      <div class="col-sm-4 invoice-col">
        <b>Invoice #007612</b><br>
        <br>
        <b>Order ID:</b> 4F3S8J<br>
        <b>Payment Due:</b> 2/22/2014<br>
        <b>Account:</b> 968-34567
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
        <td class="td5">nama</td>
        <td class="td3">Nama paket</td>
        <td class="td2">Jumlah</td>
        <td class="td4">Harga</td>
</tr>
</thead>
        <tbody>
            <tr>
          @foreach($transaksis as $transaksi)
          <th class="th1">{{ $loop->iteration}}</th>
          <td class="th2">{{ $transaksi->nama }}</td>
            <td class="th3">{{ $transaksi->nama_paket }}</td>
            <td class="th2">{{ $transaksi->Jumlah }}</td>
            <td class="th2">{{ $transaksi->Harga }}</td>
          </tr>
          @endforeach
          </tbody>
        </table>
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->

    <div class="row">
      <!-- accepted payments column -->
      <div class="col-6">
        <p class="lead">Payment Methods:</p>
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
      <div class="row no-print">
                <div class="col-12">
                  <a href="invoice-print.html" rel="noopener" target="_blank" class="btn btn-default"><i class="fas fa-print"></i> Print</a>
                  <button type="button" class="btn btn-success float-right"><i class="far fa-credit-card"></i> Submit
                    Payment
                  </button>
                  <button type="button" class="btn btn-primary float-right" style="margin-right: 5px;">
                    <i class="fas fa-download"></i> Generate PDF
                  </button>
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
@endsection
