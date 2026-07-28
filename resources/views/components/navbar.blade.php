{{--
    Komponen: Navbar (Header & Navigasi)
    ─────────────────────────────────────
    • Logo RS UMMI dengan link ke beranda
    • Menu navigasi dengan dropdown (Tentang Kami, Informasi)
    • Sticky Header (tetap di atas saat scroll)
    • Hamburger Menu untuk tampilan mobile (< 992px)
    • Shadow muncul saat scroll menggunakan Alpine.js
--}}

<nav x-data="navbar"
    :class="{ 'navbar-scrolled': scrolled }"
    class="navbar navbar-expand-lg navbar-light sticky-top navbar-custom"
    id="main-navbar">
    <div class="container">
        {{-- Logo --}}
        <a class="navbar-brand" href="{{ url('/') }}">
            <img src="{{ asset('images/logo-rs-ummi.png') }}"
                alt="Logo RS UMMI Bogor"
                class="navbar-logo"
                width="234"
                height="auto">
        </a>

        {{-- Hamburger Toggle (Mobile) --}}
        <button class="navbar-toggler border-0"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarMainMenu"
            aria-controls="navbarMainMenu"
            aria-expanded="false"
            aria-label="Toggle navigasi">
            <i class="bi bi-list fs-2"></i>
        </button>

        {{-- Menu Navigasi --}}
        <div class="collapse navbar-collapse" id="navbarMainMenu">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0 d-flex gap-lg-3 gap-xl-4 align-items-lg-center">

                {{-- Beranda --}}
                <li class="nav-item">
                    <a class="nav-link active" href="{{ url('/') }}">Beranda</a>
                </li>

                {{-- Tentang Kami (Dropdown) --}}
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle"
                        href="#"
                        role="button"
                        data-bs-toggle="dropdown"
                        aria-expanded="false"
                        id="dropdown-tentang-kami">
                        Tentang Kami
                    </a>
                    <ul class="dropdown-menu dropdown-menu-custom" aria-labelledby="dropdown-tentang-kami">
                        <li><a class="dropdown-item" href="#profil">Profil</a></li>
                        <li><a class="dropdown-item" href="#dokter">Dokter Kami</a></li>
                    </ul>
                </li>

                {{-- Informasi (Dropdown) --}}
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle"
                        href="#"
                        role="button"
                        data-bs-toggle="dropdown"
                        aria-expanded="false"
                        id="dropdown-informasi">
                        Informasi
                    </a>
                    <ul class="dropdown-menu dropdown-menu-custom" aria-labelledby="dropdown-informasi">
                        <li><a class="dropdown-item" href="#">Pusat Bantuan</a></li>
                        <li><a class="dropdown-item" href="#">Jadwal Dokter</a></li>
                        <li><a class="dropdown-item" href="#">Poliklinik</a></li>
                    </ul>
                </li>

                {{-- Karir --}}
                <li class="nav-item">
                    <a class="nav-link" href="#">Karir</a>
                </li>

                {{-- Download --}}
                <li class="nav-item">
                    <a class="nav-link" href="#">Download</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
