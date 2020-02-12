@extends('admin.app')
@section('title')
  Addess Line
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
                  <h1 class="h4 text-gray-900 mb-4">Input Address Line Infos</h1>
                </div>
                <form class="user" method="post" action="{{ route('addressline_insert') }}">

                  @csrf

                  <div class="form-group">
                    <textarea name="address" rows="3" class="form-control" placeholder="Address..."></textarea>
                    {{-- <input type="text" name="address" class="form-control" placeholder="Address"> --}}
                  </div>
                  <div class="form-group">
                    <input type="number" name="contact" class="form-control" placeholder="Contact">
                  </div>
                  <div class="form-group">
                    <input type="email" name="email" class="form-control" id="exampleInputEmail" placeholder="Email">
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
