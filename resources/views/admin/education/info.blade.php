@extends('admin.app')
@section('title')
  Education Information
@endsection
@section('content')
  <!-- Begin Page Content -->
  <div class="container-fluid">
    <a href="{{ route('education_index') }}" class="btn btn-primary"><i class="fas fa-plus">Add New Qualification</i></a>
    <hr>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
      <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Education Informations</h6>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
              <tr>
                <th>SL</th>
                <th>Institute Name</th>
                <th>Degree</th>
                <th>Passing Year</th>
                <th>GPA/CGPA</th>
                <th>Duration</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($all_education as $education)
                <tr>
                  <td>{{ $education->id }}</td>
                  <td>{{ $education->institute_name }}</td>
                  <td>{{ $education->degree }}</td>
                  <td>{{ $education->passing_year }}</td>
                  <td>{{ $education->gpa }}</td>
                  <td>{{ $education->duration }}</td>
                  <td>
                    <a href="#" class="btn btn-primary"><i class="fas fa-edit"></i>Edit</a>
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
