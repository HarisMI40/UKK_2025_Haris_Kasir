<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ListController extends Controller
{
    // Attribut
    // Method

    // tampil LIst
    public function index(){
        return view("Dashboard");
    }

    // tambah List
    public function tambah(){
        echo "Halooooo Tambah";
    }

    // proses masukan ke database
    public function store(){}

    // untuk menghapus list
    public function hapus(){}
}
