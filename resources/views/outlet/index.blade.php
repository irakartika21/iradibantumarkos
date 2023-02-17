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
        @foreach ($outlets as $outlet)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $outlet->nama}}</td>
            <td>{{ $outlet->alamat}}</td>
            <td>{{ $outlet->telp }}</td>
        <td>
        <form action="{{ route ('outlet.destroy', [$outlet->id])}}" method="POST">
              <a class="btn btn-info mr-3" href="outlet/{{$outlet->id}}">
                <i class="fas fa-info-circle"></i>
                Detail
              </a>
              <a class="btn btn-warning mr-3" href="outlet/{{$outlet->id}}/edit">
              <i class="far fa-edit"></i> 
              Edit
              </a>
             @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger" value="Delete">
           <i class="fas fa-solid fa-trash"></i>
            Delete
           </button>
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