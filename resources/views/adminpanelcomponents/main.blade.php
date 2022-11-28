<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('fontawesome/css/all.css') }}">
    <link rel="stylesheet" href="{{ asset('css/font-styling.css') }}">
    <title>Welcome Admin</title>
</head>
<body>

</body>
</html>



<nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="{{ route('stocks') }}">stock</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('customers') }}">customer</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/saran">saran</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/pesanan">pesanan</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  @include('components.alert')
  @yield('main')


  <script src="{{ asset('js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('fontawesome/js/all.js') }}"></script>
