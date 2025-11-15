<?php

use App\Http\Controllers\SiswaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function () {
   return 'Hello World, sudah sampai mana mimpinya yang tidur';
});

//route bersegmen
Route::get('/hello/tidur', function () {
   echo '<h1>Hello Tidur</h1>';
   echo '<h2>sudah sampai mana mimpinya</h2>';
});

//route parameter
Route::get('/siswa/{nama?}/{kelas?}', function ($nama='invalid',$kelas='xi-industri') {
   return "menampilkan nama siswa $nama kelas $kelas";
});

Route::get('/hubungi-kami', function () {
    return '<h1>Hubungi Kami</h1>';
});

Route::redirect('/contact-us','/hubungi-kami');

Route::prefix('/latihan')->group(function () {
    Route::get('/tes', function () {
        return view('tes');
    });

    Route::get('/contoh', function () {
        return view('contoh');
    });
});



Route::get('/users', fn() => view('contoh'));

Route::get('/tampilsiswa',[SiswaController::class,'tampil']);

Route::get('/indexsiswa',[SiswaController::class,'index']);
