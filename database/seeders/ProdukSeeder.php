<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProdukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // ACE DONUT
        // DONUT 1
        DB::table('produks')->insert([
            'nama_produk' => "Mighty Lumberjack",
            'harga_produk' => "15000",
            'deskripsi_produk' => "Topping Tiramisu dan Kitkat",
        ]);

        // DONUT 2
        DB::table('produks')->insert([
            'nama_produk' => "Royal Sovereign",
            'harga_produk' => "15000",
            'deskripsi_produk' => "Topping Tiramisu dan Regal",
        ]);

        // DONUT 3
        DB::table('produks')->insert([
            'nama_produk' => "Giga Lotus",
            'harga_produk' => "15000",
            'deskripsi_produk' => "Topping selai Lotus Biscoff dan biskuit Lotus",
        ]);

        // DONUT 4
        DB::table('produks')->insert([
            'nama_produk' => "Infinite Void",
            'harga_produk' => "15000",
            'deskripsi_produk' => "Bomboloni Cookies n Cream Filling",
        ]);

        // DONUT 5
        DB::table('produks')->insert([
            'nama_produk' => "Jade Palace",
            'harga_produk' => "15000",
            'deskripsi_produk' => "Bomboloni Green Tea Filling",
        ]);

        // DONUT 6
        DB::table('produks')->insert([
            'nama_produk' => "Tsar Bomba",
            'harga_produk' => "15000",
            'deskripsi_produk' => "Bomboloni Chocolate Filling",
        ]);
        // AKHIR ACE DONUT

        // KING DONUT
        // DONUT 1
        DB::table('produks')->insert([
            'nama_produk' => "Choco Coffin",
            'harga_produk' => "12000",
            'deskripsi_produk' => "Topping Coklat dan Beng-Beng",
        ]);

        // DONUT 2
        DB::table('produks')->insert([
            'nama_produk' => "Infinite Horizon",
            'harga_produk' => "12000",
            'deskripsi_produk' => "Topping Coklat dengan Chacha",
        ]);

        // DONUT 3
        DB::table('produks')->insert([
            'nama_produk' => "Rumbling",
            'harga_produk' => "12000",
            'deskripsi_produk' => "Topping Matcha dan Almond",
        ]);

        // DONUT 4
        DB::table('produks')->insert([
            'nama_produk' => "Red Knight",
            'harga_produk' => "12000",
            'deskripsi_produk' => "Topping Red Velvet dan Coklat Thunder",
        ]);

        // DONUT 5
        DB::table('produks')->insert([
            'nama_produk' => "Candy Kingdom",
            'harga_produk' => "12000",
            'deskripsi_produk' => "Topping Strawberry dengan Whipcream dan Marshmallow",
        ]);

        // DONUT 6
        DB::table('produks')->insert([
            'nama_produk' => "Bloodforest",
            'harga_produk' => "12000",
            'deskripsi_produk' => "Topping Blackforest dan selai Strawberry",
        ]);

        // DONUT 7
        DB::table('produks')->insert([
            'nama_produk' => "The Apocalypse",
            'harga_produk' => "12000",
            'deskripsi_produk' => "Topping Avocado dan Oreo",
        ]);

        // DONUT 8
        DB::table('produks')->insert([
            'nama_produk' => "Crownpuccino",
            'harga_produk' => "12000",
            'deskripsi_produk' => "Topping Cappuccino dengan Cream Mocca dan Oreo",
        ]);

        // DONUT 9
        DB::table('produks')->insert([
            'nama_produk' => "Berry Delight",
            'harga_produk' => "12000",
            'deskripsi_produk' => "Whipcream dan selai Blueberry",
        ]);
        // AKHIR KING DONUT

        // BABY TORUZ
        DB::table('produks')->insert([
            'nama_produk' => "Sugar Baby Toruz",
            'harga_produk' => "70000",
            'deskripsi_produk' => "12 Different Flavors and Pre-Order only!",
        ]);
        // AKHIR BABY TORUZ
    }
}
