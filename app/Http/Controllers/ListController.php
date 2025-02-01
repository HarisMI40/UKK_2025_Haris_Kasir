<?php

namespace App\Http\Controllers;

use App\Models\Lists;
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
    public function store(Request $request){
        $data = [
            "nama" => $request->input("nama"),
        ];

        Lists::create($data);
        
        return redirect()->back();
    }

    // untuk menghapus list
    public function hapus(){}
}
