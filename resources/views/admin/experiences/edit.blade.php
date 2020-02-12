@extends('admin.app')
@section('title')
  Experiences Edit
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
                  <h1 class="h4 text-gray-900 mb-4">Edit Experiences</h1>
                </div>
                <form class="user" method="post" action="{{ route('experience_update') }}">

                  @csrf

                  <div class="form-group">
                    <input type="text" class="form-control" name="position" value="{{ $single_experience->position }}">
                    <input type="hidden" class="form-control" name="id" value="{{ $single_experience->id }}">
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control" name="company" value="{{ $single_experience->company }}">
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control" name="type" value="{{ $single_experience->type }}">
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control" name="duration" value="{{ $single_experience->duration }}">
                  </div>
                  <input class="btn btn-primary btn-block" type="submit" value="Update">
                  <a href="{{ route('experience_info') }}" class="btn btn-info btn-block">Skip</a>
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
