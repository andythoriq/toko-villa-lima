<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ asset('fontawesome/css/all.css') }}">
<link rel="stylesheet" href="{{ asset('css/font-styling.css') }}">


<nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="/product">product</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/customer">customer</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/saran">saran</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  @yield('main')


  <script src="{{ asset('js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('fontawesome/js/all.js') }}"></script>
