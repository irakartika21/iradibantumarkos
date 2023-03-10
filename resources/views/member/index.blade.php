@extends('template.master')

@section('judul')
 <h1> Halaman Member </h1>
@endsection

@section('content')    
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
      <h3 class="card-title">Data Member</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
    <a href="/member/create" class="btn btn-info mb-3">
          <i class="fas fa-plus"></i>
           Create
        </a>
      <table id="example2" class="table table-bordered table-hover">
        <thead>
    <tr>
        <td class="td1">No</td>
        <td class="td5">nama</td>
        <td class="td3">alamat</td>
        <td class="td2">telepon</td>
        <td class="td4">jenis_kelamin</td>
        <td class="td4">Action</td>
    </tr>
        </thead>
        <tbody>
            <tr>
          @forelse($members as $member)
          <th class="th1">{{ $loop->iteration}}</th>
            <td class="th2">{{ $member->nama }}</td>
            <td class="th3">{{ $member->alamat }}</td>
            <td class="th2">{{ $member->tlp }}</td>
            <td class="th2">{{ $member->jenis_kelamin }}</td>
            <td class="th4">
            <form action="{{ route ('member.destroy', [$member->id])}}" method="POST">
              <a class="btn btn-info mr-3" href="member/{{$member->id}}">
                <i class="fas fa-info-circle"></i>
                Detail
              </a>
              <a class="btn btn-warning mr-3" href="member/{{$member->id}}/edit">
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