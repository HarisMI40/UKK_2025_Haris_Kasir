<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = DB::table("produk")->get();
        $nomor = 1;
        return view("produk.index", ["data" => $data, "nomor" => $nomor]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("produk.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = [
            "nama_produk" => $request->input("nama_produk"),
            "harga" => $request->input("harga"),
            "stok" => $request->input("stok"),
        ];
        DB::table("produk")->insert($data);
        return redirect("produk");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = DB::table("produk")->where("id", $id)->first();
        return view("produk.edit", ["data" => $data]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = [
            "nama_produk" => $request->input("nama_produk"),
            "harga" => $request->input("harga"),
            "stok" => $request->input("stok"),
        ];
        DB::table("produk")->where("id", $id)->update($data);
        return redirect("produk");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = DB::table("produk")->where("id", $id)->delete();
        return redirect("produk");
    }
}
