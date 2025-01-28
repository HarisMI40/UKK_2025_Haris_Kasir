<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Lists extends Model
{
    protected $table = 'list';

    protected $fillable = [
        'nama'
    ];

    public function task()
    {
        return $this->hasMany(Task::class, "id_list", "id");
    }
}
