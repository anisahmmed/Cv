@extends('admin.app')
@section('title')
  Objectives
@endsection
@section('content')
  <!-- Begin Page Content -->
  <div class="container-fluid">
    <a href="{{ route('objective_index') }}" class="btn btn-primary"><i class="fas fa-plus">Add New</i></a>
    <hr>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
      <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Objectives Information</h6>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
              <tr>
                <th>SL</th>
                <th>Objective</th>
                <th>Status</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($all_objectives as $objectives)
                <tr>
                  <td>{{ $objectives->id }}</td>
                  <td>{{ $objectives->objective }}</td>
                  @if ($objectives->status == 1)
                    <td>Active</td>
                    @else
                      <td>Deactive</td>
                  @endif
                  <td>
                    <a href="{{ url('/dashboard/objective_info/edit') }}/{{ $objectives->id }}" class="btn btn-primary"><i class="fas fa-edit"></i>Edit</a>
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
