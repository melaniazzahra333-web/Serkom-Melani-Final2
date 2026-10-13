
<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg fixed-top" style="background:white;">
    <div class="container">

        <a href="{{ route('home') }}" class="navbar-brand d-flex align-items-center">
            <img src="{{ asset('assets/images/logo1.png') }}" alt="Logo" style="width:70px;height:60px;object-fit:contain;" class="me-3">
            <span class="fw-bold">SMA LENTERA BANGSA</span>
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menu">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="menu">
            <ul class="navbar-nav ms-lg-3 align-items-lg-center">

                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}" href="{{ route('home') }}">
                        <i class="fa-solid fa-house me-1"></i>Beranda
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('staf.guru*') ? 'active' : '' }}" href="{{ route('staf.guru') }}">
                        <i class="fa-solid fa-chalkboard-user me-1"></i>Guru
                    </a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle {{ request()->routeIs('ekstrakurikuler*', 'prestasi*') ? 'active' : '' }}" href="#" data-bs-toggle="dropdown">
                        <i class="fa-solid fa-users me-1"></i>Kesiswaan
                    </a>

                    <ul class="dropdown-menu">
                        <li>
                            <a class="dropdown-item {{ request()->routeIs('ekstrakurikuler*') ? 'active' : '' }}" href="{{ route('ekstrakurikuler') }}">
                                Ekstrakurikuler
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item {{ request()->routeIs('prestasi*') ? 'active' : '' }}" href="{{ route('prestasi') }}">
                                Prestasi
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle {{ request()->routeIs('pengumuman*', 'berita*') ? 'active' : '' }}" href="#" data-bs-toggle="dropdown">
                        <i class="fa-solid fa-newspaper me-1"></i>Publikasi
                    </a>

                    <ul class="dropdown-menu">
                        <li>
                            <a class="dropdown-item {{ request()->routeIs('pengumuman*') ? 'active' : '' }}" href="{{ route('pengumuman') }}">
                                Pengumuman
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item {{ request()->routeIs('berita*') ? 'active' : '' }}" href="{{ route('berita') }}">
                                Berita
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('galeri*') ? 'active' : '' }}" href="{{ route('galeri') }}">
                        <i class="fa-solid fa-images me-1"></i>Galeri
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('profil.sekolah*') ? 'active' : '' }}" href="{{ route('profil.sekolah') }}">
                        <i class="fa-solid fa-building me-1"></i>Profil Sekolah
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('nilai') ? 'active' : '' }}"
                    href="{{ route('nilai') }}">
                        <i class="fa-solid fa-file-pen"></i>Ujikom
                    </a>
                </li>

                @if(session('login'))
                    <li class="nav-item ms-lg-2 mt-2 mt-lg-0">
                        <a href="{{ route('admin.dashboard') }}" class="btn btn-primary px-3">
                            Dashboard
                        </a>
                    </li>
                @else
                    <li class="nav-item ms-lg-2 mt-2 mt-lg-0">
                        <a href="{{ route('login') }}" class="btn btn-primary px-3">
                            Login
                        </a>
                    </li>
                @endif

                <!-- <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('nilai') ? 'active' : '' }}"
                    href="{{ route('nilai') }}">
                        <i class="fa-solid fa-calculator me-1"></i>Cek Nilai
                    </a>
                </li> -->

            </ul>
        </div>
    </div>
</nav>
