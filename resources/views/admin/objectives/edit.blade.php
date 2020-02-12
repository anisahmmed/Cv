@extends('admin.app')
@section('title')
  Objective Edit
@endsection
@section('content')
  <body class="bg-gradient-primary">

    <div class="container">

      <div class="card o-hidden border-0 shadow-lg my-5">
        <div class="card-body p-0">
          <!-- Nested Row within Card Body -->
          <div class="row">
            {{-- <div class="col-lg-5 d-none d-lg-block bg-register-image"></div> --}}
            <div class="col-lg-7 offset-lg-2">
              <div class="p-5">
                <div class="text-center">
                  <h1 class="h4 text-gray-900 mb-4">Objective</h1>
                </div>
                <form class="user" method="post" action="{{ route('objective_update') }}">

                  @csrf

                  <div class="form-group">
                    <textarea name="objective" rows="5" class="form-control" >{{ $single_objective->objective }}</textarea>
                    <input type="hidden" name="id" class="form-control" value="{{ $single_objective->id }}">
                  </div>
                  <div class="form-group">
                    <select class="form-control" name="status">
                      @if ($single_objective->status == 1)
                        <option value="1" class="bg-success text-white">Active</option>
                        @else
                          <option value="0" class="bg-danger text-white">Deactive</option>
                      @endif
                      <option value="1">Active</option>
                      <option value="0">Deactive</option>
                    </select>
                  </div>
                  <input class="btn btn-primary btn-block" type="submit" value="Update">
                  <a href="{{ route('objective_info') }}" class="btn btn-info btn-block">Skip</a>
                  <hr>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>


  </body>
@endsection
