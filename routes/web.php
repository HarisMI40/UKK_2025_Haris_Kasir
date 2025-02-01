<?php

use App\Http\Controllers\ListController;
use Illuminate\Support\Facades\Route;
// use App\Htpp\Controllers\ListController;
// use App\Http\Controllers\ListController as ControllersListController;

// Route::get(URL, FILE MANA YANG MAU DI BUKA);
Route::get("/", [ListController::class, "index"]);
Route::get("/tambahList", [ListController::class, "store"]);
Route::get("/hapusList/{id}", [ListController::class, "hapus"]);

// Route::prefix("pelanggan")->controller(PelangganController::class) ->group(function(){
//     Route::get('/', "index");
//     Route::get('/tambah', "create");
//     Route::post('/tambah', "store");
//     Route::get('/edit/{id}', "edit");
//     Route::PUT('/update/{id}', "update");
//     Route::delete('/{id}', "destroy"); 
// });