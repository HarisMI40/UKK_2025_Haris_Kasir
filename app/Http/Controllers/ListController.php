<?php

namespace App\Http\Controllers;

use App\Models\Lists;
use App\Models\Task;
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

    public function show($id){
        // Lists::where("id", $id)->get();

        $lists = Lists::find($id);
        $task  = Task::where("id_list", $id)->get();


        return view("Task.index", ["data" => $lists, "todo" => $task]);
    }

    // proses masukan ke database
    public function store(Request $request){
        // cara 1
        $daftar = new Lists;
            $daftar->nama = $request->nama_list;

        $daftar->save();
        return redirect()->back();
        // // cara 2
        // Lists::create([
        //     "nama" => "Tugas Marsina"
        // ]);
    }

    // untuk menghapus list
    public function hapus($id){
        $data = Lists::find($id);

        $data->delete();

        return redirect()->back();
    }
}
