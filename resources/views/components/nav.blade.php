<nav class="navbar navbar-expand-lg bg-light sticky-top">
    <div class="container">
        <a class="navbar-brand" href=""><i class="fa-solid fa-shop fs-1"></i></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-between" id="navbarNavDropdown">
            <ul class="navbar-nav text-center">
                <li class="nav-item"><a class="nav-link{{ $activate == 'Beranda' ? ' text-light fw-bolder bg-secondary rounded-5' : '' }}" href="{{ route('beranda') }}">Beranda</a></li>
                <li class="nav-item"><a class="nav-link{{ $activate == 'About' ? ' text-light fw-bolder bg-secondary rounded-5' : '' }}" href="{{ route('about') }}">About</a></li>
                <li class="nav-item"><a class="nav-link{{ $activate == 'Contact' ? ' text-light fw-bolder bg-secondary rounded-5' : '' }}" href="{{ route('contact') }}">Contact</a></li>
                @can('admin')
                    <li class="nav-item"><a class="nav-link" href="{{ route('pesanan') }}">Admin</a></li>
                @endcan
            </ul>
            @auth
                <ul class="navbar-nav text-center dropdon">
                    <li class="nav-item"><a href="{{ route('showUser', Auth::user()->email ?? 0) }}" class="fs-5 nav-link {{ $activate == 'User' ? ' text-light fw-bolder bg-secondary rounded-5' : '' }}"><i class="fa-regular fa-user"></i> {{ Auth::user()->nama ?? 'tidak ada nama' }}</a></li>
                </ul>
            @endauth
            @guest
                <ul class="navbar-nav text-center">
                    <li class="nav-item"><i class="fa-regular fa-address-card nav-link fs-2"></i></li>
                    <li class="nav-item"><a href="{{ route('login') }}" class="nav-link link-auth fs-5 {{ $activate == 'Login' ? 'bg-secondary text-light fw-bolder rounded-5' : '' }}">Login</a></li>
                    <li class="nav-item"><a href="{{ route('register') }}" class="nav-link link-auth fs-5 {{ $activate == 'Register' ? 'bg-secondary text-light fw-bolder rounded-5' : '' }}">Daftar</a></li>
                </ul>
            @endguest
        </div>
    </div>
</nav>
