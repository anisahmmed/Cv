<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>
    @yield('title')
  </title>
  <link rel="shortcut icon" href="{{ asset('cv_assets/img/profile.jpg') }}">
  <!-- Bootstrap core CSS -->
  <link href="{{ asset('cv_assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:500,700" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Muli:400,400i,800,800i" rel="stylesheet">
  <link href="{{ asset('cv_assets/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="{{ asset('cv_assets/css/resume.min.css') }}" rel="stylesheet">

</head>

<body id="page-top">

@yield('content')

  <!-- Bootstrap core JavaScript -->
  <script src="{{ asset('cv_assets/vendor/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('cv_assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

  <!-- Plugin JavaScript -->
  <script src="{{ asset('cv_assets/vendor/jquery-easing/jquery.easing.min.js') }}"></script>

  <!-- Custom scripts for this template -->
  <script src="{{ asset('cv_assets/js/resume.min.js') }}"></script>

</body>

</html>
