@extends('admin.app')
@section('title')
  Objective
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
                <form class="user" method="post" action="{{ route('objective_insert') }}">

                  @csrf

                  <div class="form-group">
                    <textarea name="objective" rows="5" class="form-control" placeholder="Write objective here..."></textarea>
                    {{-- <input type="text" name="address" class="form-control" placeholder="Address"> --}}
                  </div>
                  <input class="btn btn-primary btn-user btn-block" type="submit" value="Submit">
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
