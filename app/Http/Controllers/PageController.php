<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    function index() {
        return "Selamat Datang";
    }

    function about() {
        return "NIM: 2141720250 <br> Nama: Rr. Denti Nurramadhona";
    }

    function articles($id){
        return "Halaman artikel dengan ID " . $id;
    }
}
