{{--
    Komponen: Profil Singkat
    ────────────────────────
    • Ringkasan profil RS UMMI
    • Visi dan Misi rumah sakit
    • Tata nilai utama
    • Tanpa komponen animasi statistik (sesuai spesifikasi MVP)
--}}

<section id="profil" class="profile-section py-5">
    <div class="container">
        {{-- Header Section --}}
        <div class="text-center mb-5">
            <span class="section-label">Tentang Kami</span>
            <h2 class="section-title mt-2">
                Mengenal <span class="text-accent">RS UMMI</span>
            </h2>
            <div class="section-divider mx-auto"></div>
        </div>

        {{-- Profil Content: Gambar + Teks --}}
        <div class="row align-items-center mb-5 gy-4">
            <div class="col-lg-5 col-md-6 text-center">
                <div class="profile-image-wrapper">
                    <img src="{{ asset('images/profile-banner.png') }}"
                        alt="RS UMMI Bogor — Gedung Rumah Sakit"
                        class="img-fluid profile-image">
                    <div class="profile-image-accent"></div>
                </div>
            </div>
            <div class="col-lg-7 col-md-6">
                <span class="profile-welcome-text">SELAMAT DATANG DI RS UMMI</span>
                <p class="profile-tagline mt-2">"We Care and Cure with Heart"</p>
                <p class="profile-description">
                    Rumah Sakit UMMI (RS UMMI) adalah rumah sakit umum tipe C yang memberikan
                    pelayanan kesehatan bernuansa Islami. Pada awal pendirian rumah sakit, layanan
                    unggulan RS UMMI adalah pelayanan kesehatan bagi ibu dan anak serta geriatri.
                </p>
                <p class="profile-description">
                    RS UMMI diresmikan pada tanggal 18 Mei 2013 di Bogor. Terletak di kawasan pusat
                    kota Bogor di dekat kaki Gunung Salak sehingga menjadikan rumah sakit ini sejuk,
                    nyaman dan tenang. Berdiri di atas lahan tanah seluas lebih dari 5000 m² dengan
                    fasilitas yang sangat lengkap.
                </p>

                {{-- Tata Nilai Badges --}}
                <div class="mt-3">
                    <p class="profile-values-label mb-2">Tata Nilai Utama:</p>
                    <div class="d-flex flex-wrap gap-2">
                        @foreach (['Amanah', 'Ikhlas', 'Profesional', 'Integritas', 'Semangat', 'Kolaborasi', 'Inovasi', 'Orientasi Pelanggan'] as $nilai)
                            <span class="badge-value">{{ $nilai }}</span>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>

        {{-- Visi & Misi --}}
        <div class="row gy-4 mt-2">
            {{-- Visi --}}
            <div class="col-md-4">
                <div class="visi-misi-card visi-card h-100">
                    <div class="visi-misi-icon">
                        <i class="bi bi-eye-fill"></i>
                    </div>
                    <h3 class="visi-misi-title">
                        Visi <span class="text-accent">Kami</span>
                    </h3>
                    <div class="visi-misi-divider"></div>
                    <p class="visi-misi-content">
                        Menjadi rumah sakit <span class="text-accent fw-semibold">terkemuka dan terpercaya</span> di Bogor
                    </p>
                </div>
            </div>

            {{-- Misi --}}
            <div class="col-md-8">
                <div class="visi-misi-card misi-card h-100">
                    <div class="visi-misi-icon">
                        <i class="bi bi-bullseye"></i>
                    </div>
                    <h3 class="visi-misi-title">
                        Misi <span class="text-accent">Kami</span>
                    </h3>
                    <div class="visi-misi-divider"></div>
                    <ol class="misi-list">
                        <li>Menyelenggarakan pelayanan kesehatan yang berkualitas dengan mengutamakan keselamatan dan kepuasan pelanggan</li>
                        <li>Menyelenggarakan pelayanan kesehatan dengan menerapkan kendali mutu dan kendali biaya</li>
                        <li>Menyelenggarakan pelayanan yang komprehensif</li>
                        <li>Menyediakan SDM yang profesional dan menjunjung tinggi etika profesi</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</section>
