<nav class="navbar navbar-expand-lg bg-light sticky-top">
    <div class="container">
        <a class="navbar-brand" href=""><i class="fa-solid fa-shop fs-1"></i></a>
        <button class="navbar-toggler mb-2 mt-2" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-between" id="navbarNavAltMarkup">
            <div class="navbar-nav text-center">
                <a class="nav-link{{ $activate == 'Beranda' ? ' text-light fw-bolder bg-secondary rounded-5' : '' }}" href="{{ route('beranda') }}">Beranda</a>
                <a class="nav-link{{ $activate == 'About' ? ' text-light fw-bolder bg-secondary rounded-5' : '' }}" href="{{ route('about') }}">About</a>
                <a class="nav-link{{ $activate == 'Contact' ? ' text-light fw-bolder bg-secondary rounded-5' : '' }}" href="{{ route('contact') }}">Contact</a>
            </div>
            <div class=" text-center">
                <div>Profile</div>
            </div>
        </div>
    </div>
</nav>
