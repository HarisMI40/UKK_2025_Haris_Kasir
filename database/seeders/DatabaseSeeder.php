<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
// use Illuminate\Database\Query\Builder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        
        // $data = [
        //     [
        //         'nama_produk' => 'Product 1',
        //         'harga' => 10.99,
        //         'stok' => 10,
        //         'created_at' => now(),
        //         'updated_at' => now(),
        //     ],
        //     [
        //         'nama_produk' => 'Product 2',
        //         'harga' => 9.99,
        //         'stok' => 20,
        //         'created_at' => now(),
        //         'updated_at' => now(),
        //     ],
        //     [
        //         'nama_produk' => 'Product 3',
        //         'harga' => 12.99,
        //         'stok' => 15,
        //         'created_at' => now(),
        //         'updated_at' => now(),
        //     ],
        //     [
        //         'nama_produk' => 'Product 4',
        //         'harga' => 8.99,
        //         'stok' => 25,
        //         'created_at' => now(),
        //         'updated_at' => now(),
        //     ],
        //     [
        //         'nama_produk' => 'Product 5',
        //         'harga' => 11.99,
        //         'stok' => 18,
        //         'created_at' => now(),
        //         'updated_at' => now(),
        //     ],
        // ];
        
        // DB::table('produk')->insert($data);
    }
}
