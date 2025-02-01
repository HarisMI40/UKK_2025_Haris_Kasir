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
        $lists = Lists::all();

        return view("Dashboard", ["lists" => $lists]);
    }

    // tambah List
    public function tambah(){
        echo "Halooooo Tambah";
    }

    // proses masukan ke database
    public function store(){
        // cara 1
        $daftar = new Lists;
            $daftar->nama = "Tugas Nayla";

        $daftar->save();

        // cara 2
        Lists::create([
            "nama" => "Tugas Marsina"
        ]);
    }

    // untuk menghapus list
    public function hapus($id){
        $data = Lists::find($id);

        $data->delete();
    }
}
