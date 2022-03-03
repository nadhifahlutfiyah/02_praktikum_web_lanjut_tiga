<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactUsController extends Controller
{
    public function index () {
        echo "Ini adalah Contact Kami <br>" ;
        echo "<a href='https://www.educastudio.com/contact-us'>Contact</a>" ;
    }
}
