<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Lists extends Model
{
    // NAMA TABLE
    protected $table = "list";

    // KOLOM KOLOM NYA
    protected $fillable = [ "nama" ];

    // RELASI
}
