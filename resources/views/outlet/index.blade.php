@extends('template.master')

@section ('content')
<div class="card" >
<div class="card-header" >
<a class="btn btn-primary" href="{{route('outlet.create')}}">Tambah Data</a>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="data-table" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                  <td>No</td>
                  <td>Nama</td>
                  <td>alamat</td>
                  <td>telp</td>
                  <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($outlets as $item)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $item->nama}}</td>
            <td>{{ $item->alamat}}</td>
            <td>{{ $item->telp }}</td>
        <td>
            <form action="{{ route('outlet.destroy',[$item->id]) }}"method="POST">
        <a class="btn btn-info mr-3" href="{{route('outlet.show', $item->id)}}"> 
            detail
        </a>
        <a class="btn btn-warning mr-3" href="{{route('outlet.edit', $item->id)}}">
            edit
        </a>
        @csrf
        @method('DELETE')
        <button class="btn btn-danger ">Delete</button>
        </form>
         </td>
        </tr>
        @endforeach
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