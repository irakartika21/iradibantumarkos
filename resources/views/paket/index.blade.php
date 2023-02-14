@extends('template.master')

@section ('content')
<div class="card" >
<div class="card-header" >
<a class="btn btn-primary" href="{{route('paket.create')}}">Tambah Data</a>
              </div>
              <!-- /.card-header -->
              @csrf
              <div class="card-body">
                <table id="data-table" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                  <td>No</td>
                  <td>outlet id</td>
                  <td>jenis</td>
                  <td>nama paket</td>
                  <td>harga</td>
                  <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($paket as $paket)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $paket->outlet_id}}</td>
            <td>{{ $paket->jenis}}</td>
            <td>{{ $paket->nama_paket}}</td>
            <td>{{ $paket->harga }}</td>
        <td>
            <form action="{{ route('paket.destroy',[$paket->id]) }}"method="POST">
        <a class="btn btn-info mr-3" href="paket/{{($paket->id)}}"> detail</a>
        <a class="btn btn-warning mr-3" href="paket/{{($paket->id)}}/edit">edit</a>
        
        @method('DELETE')
        <button class="btn btn-danger ">Delete</button>
        </form>
         </td>
        </tr>
        @empty
        @endforelse
                  </tr>
                  </thead>
                  
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
@endsection

@push('scripts')
    <script src="{{asset('adminlte/plugins/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('adminlte/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
    <script src="{{asset('adminlte/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
    <script src="{{asset('adminlte/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
    <script src="{{asset('adminlte/plugins/datatables-buttons/js/dataTables.buttons.min.js')}}"></script>
    <script src="{{asset('adminlte/plugins/datatables-buttons/js/buttons.bootstrap4.min.js')}}"></script>
    <script>
    $(function () {
            $("#data-table").DataTable();
        });
    </script>
@endpush