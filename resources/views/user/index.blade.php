@extends('template.master')

@section ('content')
<div class="card">
    <div class="card-header d-flex justify-content-between mb-3">
      <a href="/user/create" class="btn btn-primary">Tambah Operator</a>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <table id="example2" class="table table-bordered table-hover" class="datatable">
        <thead>
        <tr>
          <th class="th1">NO</th>
          <th class="th2">Nama User</th>
          <th class="th3">Username</th>
          <th class="th3">Otoritas</th>
          <th class="th3"> <center>Action</center></th>
          {{-- <th class="th3">Deskripsi Barang</th> --}}
          </tr>
        </thead>
        <tbody>
        <tr>
          @forelse ($users as $user)
          <tr>
            <td >{{ $loop -> iteration }}</td>
            <td >{{ $user->nama }}</td>
            <td >{{ $user->username }}</td>
            <td >{{ $user->role }}</td>
            {{-- <td >{{ $barang->deskripsi_barang }}</td> --}}
            <td> 
                <center>

              <form action="{{route('user.destroy', $user->id)}}" method="POST">
                <a class="btn btn-info mr-3" href="{{route('user.show', $user->id)}}">
                  <i class="far fa-eye"></i>
                Detail
                </a>
                <a class="btn btn-warning mr-3" href="{{route('user.edit', $user->id)}}">
                  <i class="fas fa-edit"></i>
                  Edit
                </a>
                @csrf
                @method('DELETE')
                <input type="submit" class="btn btn-danger" value="Delete">
              </form>
            </center>
            </td>
            </tr>
          @empty
          <tr>
            <td colspan="5" style="text-align: center" class="text-danger"><strong> Data Barang Kosong</strong></td>
          </tr>
          @endforelse ($users as $user)
        </tr>
        </tbody>
        </table>
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