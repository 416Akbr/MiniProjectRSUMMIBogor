{{--
    Komponen: Daftar Dokter (Grid)
    ──────────────────────────────
    • Grid kartu dokter dengan informasi spesialisasi statis
    • Layout: 4 kolom (desktop) → 2 kolom (tablet) → 1 kolom (mobile)
    • Menggunakan komponen reusable <x-doctor-card />
    • Data referensi dari website rsummi.co.id
--}}

<section id="dokter" class="doctors-section py-5">
    <div class="container">
        {{-- Header Section --}}
        <div class="text-center mb-5">
            <span class="section-label">Tim Medis</span>
            <h2 class="section-title mt-2">
                Dokter <span class="text-accent">Kami</span>
            </h2>
            <div class="section-divider mx-auto"></div>
            <p class="section-subtitle mt-3">
                Tenaga medis profesional yang siap memberikan pelayanan terbaik untuk Anda
            </p>
        </div>

        {{-- Grid Kartu Dokter --}}
        <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-4 g-4">

            <x-doctor-card
                name="dr. Ahmad Fauzi, Sp.A"
                specialization="Dokter Spesialis Anak" />

            <x-doctor-card
                name="dr. Siti Nurhaliza, Sp.OG"
                specialization="Dokter Spesialis Kandungan" />

            <x-doctor-card
                name="dr. Muhammad Rizki, Sp.B"
                specialization="Dokter Spesialis Bedah" />

            <x-doctor-card
                name="dr. Hana Safitri, Sp.JP"
                specialization="Dokter Spesialis Jantung & Pembuluh Darah" />

            <x-doctor-card
                name="dr. Irfan Hakim, Sp.PD"
                specialization="Dokter Spesialis Penyakit Dalam" />

            <x-doctor-card
                name="drg. Laila Amira"
                specialization="Dokter Gigi" />

            <x-doctor-card
                name="dr. Bayu Pratama"
                specialization="Dokter Klinik Umum" />

            <x-doctor-card
                name="dr. Dewi Kartika, Sp.M"
                specialization="Dokter Spesialis Mata" />

        </div>
    </div>
</section>
