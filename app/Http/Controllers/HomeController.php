<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index () {
        echo "Selamat Datang di  WEBSITE  Nadhifah L.M" ;
    }

    public function about () {
        echo "Ini adalah Tentang Kami <br>" ;
        echo "<br>" ;
        echo "Sejarah Educa Studio" ;
    }
}
