<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PromoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        // PROMO 1
        DB::table('promos')->insert([
            'nama_promo' => "1 Box ACE",
            'diskon' => null,
            'tanggal_mulai' => null,
            'tanggal_berakhir' => null,
            'deskripsi_promo' => "80000 for 6 pcs",
        ]);
        // PROMO 2
        DB::table('promos')->insert([
            'nama_promo' => "1 Box KING",
            'diskon' => null,
            'tanggal_mulai' => null,
            'tanggal_berakhir' => null,
            'deskripsi_promo' => "60000 for 6 pcs",
        ]);
        // PROMO 3
        DB::table('promos')->insert([
            'nama_promo' => "JOKER : MIX DONUT",
            'diskon' => null,
            'tanggal_mulai' => null,
            'tanggal_berakhir' => null,
            'deskripsi_promo' => "70000 for 3 ACE + 3 KING and Best Deal!",
        ]);
    }
}
