@extends('admin.app')
@section('title')
  AddressLine Infos
@endsection
@section('content')
  <!-- Begin Page Content -->
  <div class="container-fluid">
    <a href="{{ route('address_line') }}" class="btn btn-primary"><i class="fas fa-plus">Add New</i></a>
    <hr>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
      <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">AddressLine Information</h6>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
              <tr>
                <th>SL</th>
                <th>Address</th>
                <th>Contact</th>
                <th>Email</th>
                <th>Status</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($all_addressline_info as $all_info)
                <tr>
                  <td>{{ $all_info->id }}</td>
                  <td>{{ $all_info->address }}</td>
                  <td>{{ $all_info->contact }}</td>
                  <td>{{ $all_info->email }}</td>
                  @if ($all_info->status ==1)
                    <td>Active</td>
                    @else
                    <td>Deactive</td>
                  @endif
                  <td>
                    <a href="{{ url('/dashboard/addressline-info/edit')}}/{{ $all_info->id }} " class="btn btn-primary"><i class="fas fa-edit"></i>Edit</a>
                  </td>
                </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>

  </div>
  <!-- /.container-fluid -->
@endsection
