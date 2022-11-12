<nav class="navbar navbar-expand-lg bg-light sticky-top">
    <div class="container-fluid">
        <a class="navbar-brand" href="">Toko Vili</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
            <a class="nav-link{{ $activate == 'Beranda' ? ' active fw-bolder' : '' }}" href=" / ">Beranda</a>
            <a class="nav-link{{ $activate == 'Gallery' ? ' active fw-bolder' : '' }}" href=" /gallery ">Gallery</a>
            <a class="nav-link{{ $activate == 'Contact' ? ' active fw-bolder' : '' }}" href=" /contact ">Contact</a>
            <a class="nav-link disabled" href="{{ route('saran') }}">Saran</a>
        </div>
        </div>
    </div>
</nav>
