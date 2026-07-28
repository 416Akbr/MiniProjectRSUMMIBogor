{{-- Landing Page: RS UMMI Bogor --}}
@extends('layouts.app')

@section('content')
    {{-- Section 1: Header & Navigasi --}}
    <x-navbar />

    {{-- Section 2: Hero Banner --}}
    <x-hero-banner />

    {{-- Section 3: Profil Singkat --}}
    <x-profile />

    {{-- Section 4: Daftar Dokter --}}
    <x-doctors />

    {{-- Section 5: Footer & Kontak --}}
    <x-footer />
@endsection
