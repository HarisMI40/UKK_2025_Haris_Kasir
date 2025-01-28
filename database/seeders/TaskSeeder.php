<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('task')->insert([
            ["nama" => "Todo 1", "status" => "belum_selesai", "tanggal" => "2025-01-23", "prioritas" => "1", "id_list" => 1],
            ["nama" => "Todo 2", "status" => "belum_selesai", "tanggal" => "2025-01-23", "prioritas" => "1", "id_list" => 1],
            ["nama" => "Todo 3", "status" => "belum_selesai", "tanggal" => "2025-01-23", "prioritas" => "1", "id_list" => 1],
        ]);
    }
}
