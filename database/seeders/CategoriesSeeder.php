<?php

namespace Database\Seeders;

use App\Models\Categories;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {

        // untuk mendapatkan kategory yang sesuai
        // dalam suatu produk maka menggunakan syntax ini

        // KATEGORI 1
        $aceDonutCategory = Categories::create([

            'nama_kategori' => "ACE",
            'slug_kategori' => "Ace"

        ]);

        // KATEGORI 2
        $kingDonutCategory = Categories::create([

            'nama_kategori' => "KING",
            'slug_kategori' => "King"

        ]);

        // KATEGORI 3
        $babyToruzCategory = Categories::create([

            'nama_kategori' => "BABY TORUZ",
            'slug_kategori' => "Baby Toruz"

        ]);

        return [
            'aceDonut' => $aceDonutCategory, 
            'kingDonut' => $kingDonutCategory,
            'babyToruz' => $babyToruzCategory
        ];

    }
}
