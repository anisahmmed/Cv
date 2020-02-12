@extends('admin.app')
@section('title')
  Links
@endsection
@section('content')
  <!-- Begin Page Content -->
  <div class="container-fluid">
    <a href="{{ route('link_index') }}" class="btn btn-primary"><i class="fas fa-plus">Add New</i></a>
    <hr>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
      <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Links Information</h6>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
              <tr>
                <th>SL</th>
                <th>Link</th>
                <th>Icon Class</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($all_link_info as $links)
                <tr>
                  <td>{{ $links->id }}</td>
                  <td>{{ $links->link }}</td>
                  <td>{{ $links->icon_class }}</td>
                  <td>
                    <a href="{{ url('/dashboard/links/edit') }}/{{ $links->id }}" class="btn btn-primary"><i class="fas fa-edit"></i>Edit</a>
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
