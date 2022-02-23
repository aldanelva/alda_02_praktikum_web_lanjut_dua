<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        echo "Selamat Datang";
    }

    public function about(){
        echo "NIM   : 2041720158 <br>";
        echo "Nama  : Alda Nelva Putri Sumita<br>";
        echo "Kelas : TI 2D<br>";
    }

    public function articles($id){
        echo "Halaman Artikel dengan ID ".$id;
    }

}
