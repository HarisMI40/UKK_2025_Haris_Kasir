<?php

namespace App\Http\Controllers;

use App\Models\Lists;
use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($id)
    {
        $list = Lists::with("task")->find($id); 

        // return $list;
        return view("task.index", ["list" => $list]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, $id)
    {
        $data = [
            "nama" => $request->input("nama"),
            "status" => "belum_selesai",
            "tanggal" => date("Y-m-d"),
            "prioritas" => "1",
            "id_list" => $id,
        ];

        Task::create($data);
        return redirect()->back();
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
        $task = Task::find($id);

        return view("task.edit", ["task" => $task]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $task = Task::find($id);

        $data = [
            "nama" => $request->input("nama"),
            "status" => $request->input("status"),
            "tanggal" => $request->input("tanggal"),
            "prioritas" => $request->input("prioritas"),
        ];


        $task->update($data);

        return redirect("/$task->id_list");


    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Task::find($id)->delete();
        return redirect()->back();
    }
}
