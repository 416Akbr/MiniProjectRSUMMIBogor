<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Landing Page Route
|--------------------------------------------------------------------------
|
| Route utama untuk halaman Landing Page RS UMMI.
| Menampilkan seluruh section: Header, Hero, Profil, Dokter, dan Footer.
|
*/

Route::get('/', function () {
    return view('landing');
})->name('landing');
