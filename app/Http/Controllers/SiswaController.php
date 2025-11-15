<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function index()
    {
        return view('contoh');
    }

    public function tampil()
    {
        return 'ini dari route tampilsiswa';
    }
}
