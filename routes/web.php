<?php

use App\Http\Controllers\ListController;
use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;
// use App\Htpp\Controllers\ListController;
// use App\Http\Controllers\ListController as ControllersListController;

// Route::get(URL, FILE MANA YANG MAU DI BUKA);
Route::get("/", [ListController::class, "index"]);
Route::post("/list", [ListController::class, "store"]);
Route::get("/{id}", [TaskController::class, "index"]);
Route::post("/{id}", [TaskController::class, "store"]);
Route::delete("/{id}", [TaskController::class, "destroy"]);
Route::get("/task/{id}/edit", [TaskController::class, "edit"]);
Route::put("/task/{id}", [TaskController::class, "update"]);

// Route::prefix("pelanggan")->controller(PelangganController::class) ->group(function(){
//     Route::get('/', "index");
//     Route::get('/tambah', "create");
//     Route::post('/tambah', "store");
//     Route::get('/edit/{id}', "edit");
//     Route::PUT('/update/{id}', "update");
//     Route::delete('/{id}', "destroy"); 
// });