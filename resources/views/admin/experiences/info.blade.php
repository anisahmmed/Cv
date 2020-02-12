@extends('admin.app')
@section('title')
  Experiences
@endsection
@section('content')
  <!-- Begin Page Content -->
  <div class="container-fluid">
    <a href="{{ route('experience_index') }}" class="btn btn-primary"><i class="fas fa-plus">Add New Experience</i></a>
    <hr>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
      <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Experiences Information</h6>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
              <tr>
                <th>SL</th>
                <th>Position</th>
                <th>Company</th>
                <th>Type</th>
                <th>Duration</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($all_experience_info as $experiences)
                <tr>
                  <td>{{ $experiences->id }}</td>
                  <td>{{ $experiences->position }}</td>
                  <td>{{ $experiences->company }}</td>
                  <td>{{ $experiences->type }}</td>
                  <td>{{ $experiences->duration }}</td>
                  <td>
                    <a href="{{ url('/dashboard/experiences/edit') }}/{{ $experiences->id }}" class="btn btn-primary"><i class="fas fa-edit"></i>Edit</a>
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
