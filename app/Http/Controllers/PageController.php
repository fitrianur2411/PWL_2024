<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() { 
        return 'Selamat Datang!'; 
    }

    public function about() { 
        return 'Nama : Fitria Nur Sholikah - NIM : 2241760004'; 
    }

    public function articles($Id) { 
        return 'Halaman Artikel dengan ID : '. $Id; 
    }
}
