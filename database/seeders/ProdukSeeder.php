<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
//>>>>>>> sophia

class ProdukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // membuat variabel categories
        $categories = app(CategorySeeder::class)->run();

        // ACE DONUT
        // DONUT 1
        // produks menuju ke tabel produk yang 
        // ada di database
        $categories['aceDonut']->produks()->create([
            'nama_produk' => "Mighty Lumberjack",
            'harga_produk' => "15000",
            'deskripsi_produk' => "Topping Tiramisu dan Kitkat",
            'highlights_produk' => null,
        ]);

        // DONUT 2
        $categories['aceDonut']->produks()->create([
            'nama_produk' => "Royal Sovereign",
            'harga_produk' => "15000",
            'deskripsi_produk' => "Topping Tiramisu dan Regal",
            'highlights_produk' => null
        ]);

        // DONUT 3
        $categories['aceDonut']->produks()->create([
            'nama_produk' => "Giga Lotus",
            'harga_produk' => "15000",
            'deskripsi_produk' => "Topping selai Lotus Biscoff dan biskuit Lotus",
            'highlights_produk' => null
        ]);

        // DONUT 4
        $categories['aceDonut']->produks()->create([
            'nama_produk' => "Infinite Void",
            'harga_produk' => "15000",
            'deskripsi_produk' => "Bomboloni Cookies n Cream Filling",
            'highlights_produk' => null
        ]);

        // DONUT 5
        $categories['aceDonut']->produks()->create([
            'nama_produk' => "Jade Palace",
            'harga_produk' => "15000",
            'deskripsi_produk' => "Bomboloni Green Tea Filling",
            'highlights_produk' => null
        ]);

        // DONUT 6
        $categories['aceDonut']->produks()->create([
            'nama_produk' => "Tsar Bomba",
            'harga_produk' => "15000",
            'deskripsi_produk' => "Bomboloni Chocolate Filling",
            'highlights_produk' => null
        ]);
        // AKHIR ACE DONUT

        // KING DONUT
        // DONUT 1
        $categories['kingDonut']->produks()->create([
            'nama_produk' => "Choco Coffin",
            'harga_produk' => "12000",
            'deskripsi_produk' => "Topping Coklat dan Beng-Beng",
            'highlights_produk' => null
        ]);

        // DONUT 2
        $categories['kingDonut']->produks()->create([
            'nama_produk' => "Infinite Horizon",
            'harga_produk' => "12000",
            'deskripsi_produk' => "Topping Coklat dengan Chacha",
        ]);

        // DONUT 3
        $categories['kingDonut']->produks()->create([
            'nama_produk' => "Rumbling",
            'harga_produk' => "12000",
            'deskripsi_produk' => "Topping Matcha dan Almond",
            'highlights_produk' => null
        ]);

        // DONUT 4
        $categories['kingDonut']->produks()->create([
            'nama_produk' => "Red Knight",
            'harga_produk' => "12000",
            'deskripsi_produk' => "Topping Red Velvet dan Coklat Thunder",
            'highlights_produk' => null
        ]);

        // DONUT 5
        $categories['kingDonut']->produks()->create([
            'nama_produk' => "Candy Kingdom",
            'harga_produk' => "12000",
            'deskripsi_produk' => "Topping Strawberry dengan Whipcream dan Marshmallow",
            'highlights_produk' => null
        ]);

        // DONUT 6
        $categories['kingDonut']->produks()->create([
            'nama_produk' => "Bloodforest",
            'harga_produk' => "12000",
            'deskripsi_produk' => "Topping Blackforest dan selai Strawberry",
            'highlights_produk' => null
        ]);

        // DONUT 7
        $categories['kingDonut']->produks()->create([
            'nama_produk' => "The Apocalypse",
            'harga_produk' => "12000",
            'deskripsi_produk' => "Topping Avocado dan Oreo",
            'highlights_produk' => null
        ]);

        // DONUT 8
        $categories['kingDonut']->produks()->create([
            'nama_produk' => "Crownpuccino",
            'harga_produk' => "12000",
            'deskripsi_produk' => "Topping Cappuccino dengan Cream Mocca dan Oreo",
            'highlights_produk' => null
        ]);

        // DONUT 9
        $categories['kingDonut']->produks()->create([
            'nama_produk' => "Berry Delight",
            'harga_produk' => "12000",
            'deskripsi_produk' => "Whipcream dan selai Blueberry",
            'highlights_produk' => null
        ]);
        // AKHIR KING DONUT

        // BABY TORUZ
        $categories['babyToruz']->produks()->create([
            'nama_produk' => "Sugar Baby Toruz",
            'harga_produk' => "70000",
            'deskripsi_produk' => "12 Different Flavors and Pre-Order only!",
            'highlights_produk' => null
        ]);
        // AKHIR BABY TORUZ

    }
}
