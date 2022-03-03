<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrefixController extends Controller
{
    public function edugames () {
        echo "Marbel Premium <br>" ;
        echo "Marbel Juz Amma <br>" ;
        echo "Marbel Shalat" ;
    }

    public function kidsgames () {
        echo "Marbel Eye Center <br>" ;
        echo "Marbel Berlari <br>" ;
        echo "Marbel Hospital" ;
    }

    public function storybooks () {
        echo "Landak dan Ular <br>" ;
        echo "Kreasi Kaleng Bekas <br>" ;
        echo "Kawah Si Kidang" ;
    }

    public function kidssongs () {
        echo "Lagu Anak Gosok Gigi <br>" ;
        echo "Kids Song Alphabet <br>" ;
        echo "Lagu Anak Kak Dodi" ;
    }


    public function karir () {
        echo "Yuk Cari Karir Kamu DISINI" ;
    }
    public function magang () {
        echo "Yuk Cari Magang Kamu DISINI" ;
    }

    public function industri () {
        echo "Ini adalah beberapa Dokumentasi Kunjungan Indusri di Educa Studio" ;
    }
}
