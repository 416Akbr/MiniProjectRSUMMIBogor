{{--
    Komponen: Hero Banner
    ─────────────────────
    • Visual banner statis full-width
    • Pesan sambutan utama + tagline
    • Tombol CTA "Daftar Sekarang"
    • Background overlay gradient untuk kontras teks
--}}

<section id="hero-banner" class="hero-section d-flex align-items-center">
    {{-- Overlay gradient --}}
    <div class="hero-overlay"></div>

    <div class="container position-relative z-1">
        <div class="row align-items-center">
            <div class="col-lg-7 col-md-8 col-12">
                {{-- Label selamat datang --}}
                <span class="hero-welcome-badge mb-3 d-inline-block">
                    <i class="bi bi-heart-pulse-fill me-2"></i>Selamat Datang di RS UMMI
                </span>

                {{-- Heading utama --}}
                <h1 class="hero-title mb-3">
                    Pelayanan Kesehatan <br>
                    <span class="hero-title-accent">Bernuansa Islami</span>
                </h1>

                {{-- Tagline --}}
                <p class="hero-tagline mb-2">
                    "We Care and Cure with Heart"
                </p>

                {{-- Deskripsi singkat --}}
                <p class="hero-description mb-4">
                    RS UMMI adalah rumah sakit umum tipe C di Bogor yang mengutamakan
                    keselamatan dan kepuasan pelanggan dengan layanan kesehatan berkualitas.
                </p>

                {{-- CTA Button --}}
                <div class="d-flex flex-wrap gap-3">
                    <a href="#" class="btn btn-cta btn-lg" id="btn-daftar">
                        <i class="bi bi-clipboard2-plus me-2"></i>Daftar Sekarang
                    </a>
                    <a href="#profil" class="btn btn-cta-outline btn-lg" id="btn-selengkapnya">
                        <i class="bi bi-info-circle me-2"></i>Selengkapnya
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
