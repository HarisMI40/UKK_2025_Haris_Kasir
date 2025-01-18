<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;

Route::get('/', function(){
    return view("dashboard");
});


Route::prefix("produk")->controller(ProductController::class) ->group(function(){
    Route::get('/', "index");
    Route::get('/tambah', "create");
    Route::post('/tambah', "store");
    Route::get('/edit/{id}', "edit");
    Route::PUT('/update/{id}', "update");
    Route::delete('/{id}', "destroy"); 
});


Route::prefix("user")->controller(UserController::class) ->group(function(){
    Route::get('/', "index");
    Route::get('/tambah', "create");
    Route::post('/tambah', "store");
    Route::get('/edit/{id}', "edit");
    Route::PUT('/update/{id}', "update");
    Route::delete('/{id}', "destroy"); 
});

// Route::get('/produk', [ProductController::class, "index"]);
// Route::get('/produk/tambah', [ProductController::class, "create"]);
// Route::post('/produk/tambah', [ProductController::class, "store"]);
// Route::get('/produk/edit/{id}', [ProductController::class, "edit"]);
// Route::PUT('/produk/update/{id}', [ProductController::class, "update"]);
// Route::delete('/produk/{id}', [ProductController::class, "destroy"]);


Route::get("login", function(){
    return view("login");
});
