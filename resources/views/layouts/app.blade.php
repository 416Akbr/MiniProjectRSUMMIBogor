<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    {{-- SEO Meta Tags --}}
    <title>RS UMMI Bogor — Pelayanan Kesehatan Bernuansa Islami</title>
    <meta name="description"
        content="Rumah Sakit UMMI (RS UMMI) adalah rumah sakit umum tipe C di Bogor yang memberikan pelayanan kesehatan berkualitas bernuansa Islami. Pendaftaran pasien umum, BPJS, dan asuransi.">
    <meta name="keywords" content="RS UMMI Bogor, Rumah Sakit Bogor, Dokter Spesialis, BPJS, Pendaftaran Online">
    <meta name="author" content="SIMRS RS UMMI">

    {{-- Favicon --}}
    <link rel="icon" href="{{ asset('images/logo.png') }}" type="image/png">

    {{-- Google Fonts: Poppins --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,400;1,600&display=swap"
        rel="stylesheet">

    {{-- Bootstrap Icons CDN --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    {{-- Vite Assets (Bootstrap CSS + Custom SCSS + JS) --}}
    @vite(['resources/css/app.scss', 'resources/js/app.js'])
</head>

<body>
    @yield('content')
</body>

</html>
