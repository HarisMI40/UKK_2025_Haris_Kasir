<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = DB::table("users")->get();
        $nomor = 1;
        return view("user.index", ["data" => $data, "nomor" => $nomor]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("user.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = [
            "name" => $request->input("name"),
            "email" => $request->input("email"),
            "password" => $request->input("password") ? $request->input("password") : Hash::make("123"),
        ];

        
        DB::table("users")->insert($data);
        return redirect("user");
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
        $data = DB::table("users")->where("id", $id)->first();
        return view("user.edit", ["data" => $data]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = [
            "name" => $request->input("name"),
            "email" => $request->input("email"),
        ];

        if($request->input("password")){
            $data["password"] = $request->input("password");
        }


        DB::table("users")->where("id", $id)->update($data);
        return redirect("user");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = DB::table("users")->where("id", $id)->delete();
        return redirect("user");
    }
}
