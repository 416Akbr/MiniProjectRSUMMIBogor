{{--
    Komponen: Doctor Card (Reusable)
    ────────────────────────────────
    • Kartu dokter individual yang dapat digunakan kembali
    • Props: $name, $specialization, $photo (opsional)
    • Menampilkan foto, nama, dan spesialisasi
    • Hover effect: shadow + subtle scale
--}}

@props([
    'name' => 'Nama Dokter',
    'specialization' => 'Spesialis',
    'photo' => null,
])

<div class="col">
    <div class="card doctor-card h-100 border-0">
        {{-- Foto Dokter --}}
        <div class="doctor-photo-wrapper">
            @if ($photo)
                <img src="{{ asset('images/doctors/' . $photo) }}"
                    alt="Foto {{ $name }}"
                    class="card-img-top doctor-photo">
            @else
                <div class="doctor-photo-placeholder d-flex align-items-center justify-content-center">
                    <i class="bi bi-person-fill"></i>
                </div>
            @endif
        </div>

        {{-- Info Dokter --}}
        <div class="card-body text-center px-3 pt-3 pb-2">
            <p class="doctor-name mb-1">{{ $name }}</p>
            <p class="doctor-specialization mb-0">{{ $specialization }}</p>
        </div>

        {{-- Footer Bar --}}
        <div class="card-footer doctor-card-footer border-0"></div>
    </div>
</div>
