<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ListSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('list')->insert([
            ["nama" => "Todo List"],
            ["nama" => "Today List"],
            ["nama" => "Favorite List"],
        ]);
    }
}
