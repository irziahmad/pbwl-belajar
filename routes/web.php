<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PasienController;

Route::get('/', function () {
    return view('home');
});



Route::get('/about', function () {
    return view('about');
});

Route::get('/profil', function () {
    return view('profil');
});

Route::get('/mahasiswa', function () {
    $npm = [123, 124, 125, 126];
    $nama = ['jono', 'Joni', 'Juna', 'Jena'];
    $jumlah = count($npm);
    return view('mahasiswa', compact('npm', 'nama', 'jumlah'));
});

Route::get('/array', function () {
    //array
    $nilai_awal = 1;
    while ($nilai_awal <= 100) {
        echo "Hello Laravel " . $nilai_awal . "x<br>";
        $nilai_awal++;
    }
});

Route::get('/for', function () {
    //for
    for ($i = 1; $i <= 5; $i++) {
        echo "Hello world " . $i . "x<br>";
    }
});
Route::get('/pasien', [PasienController::class, 'index'])->name('pasien.index');
