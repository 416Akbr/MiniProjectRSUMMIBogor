# RS UMMI Landing Page — Redesign

Landing Page Rumah Sakit UMMI Bogor yang dibangun menggunakan **Laravel Blade + Alpine.js + Bootstrap 5**.

## Spesifikasi

| Komponen | Teknologi |
|---|---|
| Framework | Laravel 12 (Blade Template) |
| CSS Framework | Bootstrap 5.3 |
| Interaktivitas | Alpine.js 3 |
| Build Tool | Vite |
| Styling | SCSS (Sass) |
| Font | Poppins (Google Fonts) |
| Icons | Bootstrap Icons |

## Struktur Proyek

```
RS ICOD/
├── resources/
│   ├── views/
│   │   ├── layouts/
│   │   │   └── app.blade.php           ← Layout utama
│   │   ├── components/
│   │   │   ├── navbar.blade.php        ← Header & Navigasi
│   │   │   ├── hero-banner.blade.php   ← Hero Banner + CTA
│   │   │   ├── profile.blade.php       ← Profil, Visi, Misi
│   │   │   ├── doctor-card.blade.php   ← Card Dokter (reusable)
│   │   │   ├── doctors.blade.php       ← Grid Daftar Dokter
│   │   │   └── footer.blade.php        ← Footer & Kontak
│   │   └── landing.blade.php           ← Halaman Landing Page
│   ├── css/
│   │   └── app.scss                    ← Design system (SCSS)
│   └── js/
│       └── app.js                      ← Alpine.js + Bootstrap JS
├── public/
│   └── images/                         ← Aset gambar
├── routes/
│   └── web.php                         ← Route definisi
└── vite.config.js                      ← Konfigurasi build
```

## Cara Menjalankan

### Prasyarat

Pastikan sudah terinstal:
- **PHP 8.2+** — [Download](https://windows.php.net/download/)
- **Composer** — [Download](https://getcomposer.org/download/)
- **Node.js 18+** — [Download](https://nodejs.org/)

> **Rekomendasi:** Gunakan [Laragon](https://laragon.org/download/) untuk instalasi all-in-one di Windows.

### Langkah Setup

```bash
# 1. Clone/masuk ke folder proyek
cd "RS ICOD"

# 2. Install dependensi PHP
composer install

# 3. Copy environment file & generate app key
copy .env.example .env
php artisan key:generate

# 4. Install dependensi Node.js
npm install

# 5. Compile asset frontend (development mode)
npm run dev

# 6. Jalankan server Laravel (di terminal terpisah)
php artisan serve
```

### Buka di Browser

Kunjungi: **http://localhost:8000**

## Aset Gambar

Sebelum menjalankan, pastikan file gambar berikut sudah ada di `public/images/`:

1. **Logo RS UMMI** → Download dari: `https://rsummi.co.id/assets/images/Logo%20RS%20UMMI.png`
   - Simpan sebagai: `public/images/logo-rs-ummi.png`

2. **Favicon** → Download dari: `https://rsummi.co.id/assets/images/logo.png`
   - Simpan sebagai: `public/images/logo.png`

3. **Hero Banner** → Gunakan foto gedung RS UMMI atau gambar placeholder
   - Simpan sebagai: `public/images/hero-banner.jpg`

4. **Profil Banner** → Download dari: `https://rsummi.co.id/assets/images/profile-banner.png`
   - Simpan sebagai: `public/images/profile-banner.png`

## Palet Warna

| Warna | Hex | Penggunaan |
|---|---|---|
| Navy | `#0F3066` | Primary, heading, footer |
| Blue | `#0087BC` | Aksen, link, CTA |
| Cyan | `#56C5F1` | Highlight, gradient |
| Ice Blue | `#EBF9FF` | Background section |
| Pale Blue | `#DCF5FF` | Badge, card background |

Tampilan Responsif
Layout aplikasi sudah disesuaikan agar rapi di berbagai ukuran layar:
1. Desktop (≥992px): Menggunakan menu horizontal penuh dengan tampilan grid 4 kolom untuk daftar dokter.
2. Tablet (577–991px): Navigasi berubah menjadi hamburger menu dengan grid 2 kolom untuk dokter.
3. Mobile (≤576px): Menggunakan hamburger menu dengan tampilan memanjang (1 kolom) untuk daftar dokter.

Tentang Project
Project ini merupakan Mini Project: Redesign Landing Page RS UMMI. Dibuat secara khusus untuk memenuhi tahap evaluasi teknis pada posisi Frontend Developer.
