<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;

    protected $fillable = 
    [
        // kategori_id
        // highlight
        'nama_produk', 
        'harga_produk', 
        'deskripsi_produk', 
        // kategori_id nantinya akan otomatis terbuat
        // saat direlasikan
        

    ];

    // ini method untuk relasi produk dengan kategori
    public function categories()
    {
        // mengembalikan relasi dari model Produk ke kategori
        // model produk berelasi dengan model kategori
        return $this->belongsTo(Categories::class);
    }

    // ini method untuk relasi article
    public function article()
    {
        return $this->hasMany(Article::class);
    }

}