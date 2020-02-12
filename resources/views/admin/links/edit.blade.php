@extends('admin.app')
@section('title')
  Edit Links
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
                  <h1 class="h4 text-gray-900 mb-4">Edit Links</h1>
                </div>
                <form class="user" method="post" action="{{ route('link_update') }}">

                  @csrf

                  <div class="form-group">
                    <input type="text" class="form-control" name="link" value="{{ $single_link_info->link }}">
                    <input type="hidden" class="form-control" name="id" value="{{ $single_link_info->id }}">
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control" name="icon_class" value="{{ $single_link_info->icon_class }}">
                  </div>
                  <input class="btn btn-primary btn-block" type="submit" value="Submit">
                  <a href="{{ route('link_info') }}" class="btn btn-info btn-block">Skip</a>
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
