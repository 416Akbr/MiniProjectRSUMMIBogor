{{--
    Komponen: Footer & Kontak
    ─────────────────────────
    • Informasi alamat RS UMMI
    • Jam operasional (IGD, Poliklinik, Farmasi)
    • Kontak darurat & email
    • Link sosial media
    • Copyright
--}}

<footer id="footer" class="footer-section">
    {{-- Main Footer --}}
    <div class="footer-main py-5">
        <div class="container">
            <div class="row gy-4">

                {{-- Kolom 1: Tentang RS UMMI --}}
                <div class="col-lg-4 col-md-6">
                    <div class="footer-brand mb-3">
                        <img src="{{ asset('images/logo-rs-ummi.png') }}"
                            alt="Logo RS UMMI"
                            width="200"
                            class="footer-logo mb-3">
                    </div>
                    <p class="footer-description">
                        Rumah Sakit UMMI adalah rumah sakit umum tipe C di Bogor yang memberikan
                        pelayanan kesehatan berkualitas bernuansa Islami sejak tahun 2013.
                    </p>

                    {{-- Sosial Media --}}
                    <div class="footer-social d-flex gap-2 mt-3">
                        <a href="https://www.instagram.com/rs_ummi/" target="_blank"
                            class="social-link" aria-label="Instagram RS UMMI">
                            <i class="bi bi-instagram"></i>
                        </a>
                        <a href="https://www.facebook.com/rsummibogor" target="_blank"
                            class="social-link" aria-label="Facebook RS UMMI">
                            <i class="bi bi-facebook"></i>
                        </a>
                        <a href="https://www.youtube.com/@rsummiofficial" target="_blank"
                            class="social-link" aria-label="YouTube RS UMMI">
                            <i class="bi bi-youtube"></i>
                        </a>
                        <a href="https://www.tiktok.com/@rsummi" target="_blank"
                            class="social-link" aria-label="TikTok RS UMMI">
                            <i class="bi bi-tiktok"></i>
                        </a>
                    </div>
                </div>

                {{-- Kolom 2: Jam Operasional --}}
                <div class="col-lg-4 col-md-6">
                    <h5 class="footer-heading">
                        <i class="bi bi-clock-fill me-2"></i>Jam Operasional
                    </h5>
                    <ul class="footer-schedule list-unstyled">
                        <li class="d-flex justify-content-between">
                            <span>IGD (Unit Gawat Darurat)</span>
                            <span class="schedule-badge badge-24h">24 Jam</span>
                        </li>
                        <li class="d-flex justify-content-between">
                            <span>Farmasi</span>
                            <span class="schedule-badge badge-24h">24 Jam</span>
                        </li>
                        <li class="d-flex justify-content-between">
                            <span>Poliklinik</span>
                            <span class="schedule-badge">Senin–Sabtu</span>
                        </li>
                        <li class="d-flex justify-content-between">
                            <span>Rawat Inap</span>
                            <span class="schedule-badge badge-24h">24 Jam</span>
                        </li>
                    </ul>
                </div>

                {{-- Kolom 3: Kontak & Alamat --}}
                <div class="col-lg-4 col-md-12">
                    <h5 class="footer-heading">
                        <i class="bi bi-geo-alt-fill me-2"></i>Kontak & Alamat
                    </h5>
                    <ul class="footer-contact list-unstyled">
                        <li>
                            <i class="bi bi-building me-2"></i>
                            Jl. Empang II No.2, Empang, Kec. Bogor Selatan,<br>
                            <span class="ms-4">Kota Bogor, Jawa Barat 16132</span>
                        </li>
                        <li>
                            <i class="bi bi-whatsapp me-2"></i>
                            <a href="https://wa.me/628111695118" target="_blank" class="footer-link">
                                0811-1695-118
                            </a>
                            <span class="text-muted small">(WhatsApp)</span>
                        </li>
                        <li>
                            <i class="bi bi-envelope-fill me-2"></i>
                            <a href="mailto:sekretariat@rsummi.co.id" class="footer-link">
                                sekretariat@rsummi.co.id
                            </a>
                        </li>
                        <li>
                            <i class="bi bi-globe me-2"></i>
                            <a href="https://rsummi.co.id" target="_blank" class="footer-link">
                                rsummi.co.id
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    {{-- Copyright Bar --}}
    <div class="footer-bottom py-3">
        <div class="container text-center">
            <p class="mb-0 small">
                &copy; {{ date('Y') }} <strong>RS UMMI Bogor</strong>. All rights reserved.
                <span class="d-none d-md-inline">|</span>
                <br class="d-md-none">
                <span class="text-muted">SIMRS RS UMMI</span>
            </p>
        </div>
    </div>
</footer>
