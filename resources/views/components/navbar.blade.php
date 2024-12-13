<nav class="navbar navbar-expand-lg bg-body-tertiary px-md-5 pb-md-0">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">
            <img src="{{ asset('assets/images/logo.png') }}" alt="logo" height="50" class="navbar-brand">
        </a>
        
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class="collapse navbar-collapse justify-content-center pt-5" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link {{ $title == "Beranda" ? 'active' : '' }}" aria-current="page" href="/">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ $title == "Galeri Inovasi" ? 'active' : '' }}" href="/galeri">Galeri Inovasi</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ $title == "Berita" ? 'active' : '' }}" href="/berita">Berita</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Tautan Terkait
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Tentang Riset & Inovasi
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Tanya Mentor</a>
                </li>
            </ul>
        </div>
        
        <div class="d-none d-lg-block">
            <ul class="navbar-nav gap-2">
                <li class="nav-item">
                    <button class="btn btn-success">Daftar</button>
                </li>
                <li class="nav-item">
                    <button class="btn btn-outline-success">Daftar</button>
                </li>
            </ul>
        </div>
    </div>
</nav>
