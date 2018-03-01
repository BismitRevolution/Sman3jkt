<div class="navbar-collection shadow-bottom">
    <div class="nav-top">
        <nav id="header" class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <div class="container row">
                    <div class="col-lg-8 col-md-12 col-sm-12 row">
                        <div class="col-xs">
                            <a href="{{ route('index') }}"><img src="{{ asset('img/logo_transparent.png') }}" width="auto" height="80" class="align-top d-none d-sm-block" alt="logo"></a>
                        </div>
                        <div class="col">
                            <h4 class="navbar-brand">SMA NEGERI 3 JAKARTA</h4>
                            <h5 class="d-none d-sm-block" style="color: white;">"Excellent Carrer Begins with Excellent Education"</h5>
                        </div>
                    </div>
                    <div class="col-lg-4 d-none d-md-none d-lg-block">
                        <a href="https://www.facebook.com/sman3jktschid/" target="_blank">Facebook</a>
                        <span style="color: white" class="mx-3">|</span>
                        <a href="https://twitter.com/sman3jkt" target="_blank">Twitter</a>
                        <span style="color: white" class="mx-3">|</span>
                        <a href="https://www.instagram.com/mpkosis3teladan/" target="_blank">Instagram</a>
                    </div>
                </div>
            </div>
        </nav>
    </div>

    <div class="nav-down">
        <nav id="sticky-nav" class="navbar navbar-expand-lg navbar-dark bg-semi-dark">
            <div class="container">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarDashboard" aria-controls="navbarDashboard" aria-expanded="false" aria-label="Toggle Navigation">
                    <span class="navbar-toggler-icon"></span>
                    MENU
                </button>
                <!-- Toggleable -->
                <div class="collapse navbar-collapse" id="navbarDashboard">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('index') }}">Home</a>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="{{ url('/') }}" id="navbardrop" data-toggle="dropdown">
                                Profil
                            </a>
                            <div class="dropdown-menu">
                                <div class="dropdown-submenu dropdown-item">
                                    <a href="{{ route('profile') }}">Profil</a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a class="dropdown-item" href="{{ url('/profile') }}">Visi Misi</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="{{ url('/profile') }}">Sejarah</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="{{ url('/profile') }}">Lambang SMAN 3 Jakarta</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="{{ url('/profile') }}"">Identitas Sekolah</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="dropdown-submenu dropdown-item">
                                    <a href="{{ route('sarana-prasarana') }}">Sarana dan Prasarana</a>
                                    <!-- <i class="float-right fas fa-angle-right"></i> -->
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a class="dropdown-item" href="#">Fasilitas</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="#">Perpustakaan</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="#">Akses dan Lingkungan</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="dropdown-submenu dropdown-item">
                                    <a href="{{ route('staf') }}">Manajemen dan Staf</a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a class="dropdown-item" href="#">Struktur Organisasi</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="#">Sambutan Kepsek</a>
                                        </li>
                                    </ul>
                                </div>
                                <a class="dropdown-item" href="">Guru</a>
                            </div>
                        </li>

                        <li class="nav-item">
<<<<<<< HEAD
                            <a class="nav-link" href="{{ url('/ppdb') }}">PPDB</a>
=======
                            <a class="nav-link" href="{{ route('ppdb') }}">PPDB</a>
>>>>>>> master
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="{{ route('akademik') }}" id="navbardrop" data-toggle="dropdown">
                                Akademik
                            </a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="{{ url('/akademik') }}">Kalender Akademik</a>
                                <a class="dropdown-item" href="{{ url('/akademik') }}">MIPA</a>
                                <a class="dropdown-item" href="{{ url('/akademik') }}">IPS</a>
                            </div>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="{{ route('bidang') }}" id="navbardrop" data-toggle="dropdown">
                                Bidang
                            </a>
                            <div class="dropdown-menu">
                                <div class="dropdown-submenu dropdown-item">Kurikulum
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a class="dropdown-item" href="#">Manajemen Kurikulum</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="#">Seputar Kurikulum</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="dropdown-submenu dropdown-item">Kesiswaan
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a class="dropdown-item" href="#">Manajemen Kesiswaan</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="#">Seputar Kesiswaan</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="dropdown-submenu dropdown-item">Humas
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a class="dropdown-item" href="#">Manajemen Humas</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="#">Seputar Humas</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="dropdown-submenu dropdown-item">Sarana dan Prasarana
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a class="dropdown-item" href="#">Manajemen Sarana dan Prasarana</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="#">Seputar Sarana dan Prasarana</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="dropdown-submenu dropdown-item">Ketatausahaan
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a class="dropdown-item" href="#">Manajemen Ketatausahaan</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="#">Seputar Ketatausahaan</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('event') }}">Berita dan Acara</a>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="{{ route('prestasi') }}" id="navbardrop" data-toggle="dropdown">
                                Prestasi
                            </a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Akademik</a>
                                <a class="dropdown-item" href="#">Olahraga</a>
                                <a class="dropdown-item" href="#">Seni</a>
                                <a class="dropdown-item" href="#">Lainnya</a>
                            </div>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="route('alumni')">Alumni</a>
                        </li>

                    </ul>
                </div>
            </div>
        </nav>
    </div>
</div>
