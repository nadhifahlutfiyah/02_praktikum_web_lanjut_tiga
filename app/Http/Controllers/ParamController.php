<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ParamController extends Controller
{
    public function berita () {
        echo "Ini beberapa Berita di tahun 2022" ;
    }

    public function news () {
        echo "Ini adalah Berita Berbagi Warga Sekitar yang Terdampak COVID-19" ;
    }
}
