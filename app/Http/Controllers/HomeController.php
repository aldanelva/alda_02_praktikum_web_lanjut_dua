<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        echo "Ini adalah halaman home";
    }

    public function about(){
        echo "NIM   : 2041720158 ";
        echo "Nama  : Alda Nelva Putri Sumita ";
        echo "Kelas : TI 2D";
    }

    public function articles($id){
        echo "Ini merupakan halaman dengan ID".$id;
    }

}
