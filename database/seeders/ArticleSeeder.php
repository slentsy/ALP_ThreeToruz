<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */

    public function run(): void
    {

    // bikin variabel untuk tanggal
    $tanggalPublish = Carbon::now()->toDateString();

    //mendapatkan data id semua produk karena ini hanya percobaan saja
    $produks = DB::table('produks')->pluck('id');

        //percobaan 1 untuk data CRUD
        DB::table('articles')->insert([
            'produk_id' => $produks->random() ,
            'judul_article' => "Mengapa kalian harus memilih Infinite Horizon ?🤔",
            'deskripsi_article' => "Donut Three Toruz yang masuk di dalam kategori King ini 
                                    merupakan menu donat pertama yang dibuat oleh Sang Owner loh‼️. 
                                    Infinite Horizon juga menjadi donut yang pertama kali dijadikan tester 
                                    kepada beberapa dosen dan mahasiswa/i di Universitas Ciputra Surabaya🙆🏻
                                    Karena banyak yang suka dan mereka mengatakan donut nya sudah semua, 
                                    tanpa ada kekurangan. Para Owner pun yakin untuk produksi Infinite Horizon 
                                    lebih banyak melalui sistem Pre-Order😋",
            'tanggal_publish' => $tanggalPublish
        ]);
    }
}
