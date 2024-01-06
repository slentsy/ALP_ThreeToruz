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
        'foto_produk',
        'nama_produk', 
        'harga_produk', 
        'deskripsi_produk', 
        'category_id'
        

    ];

    // ini method untuk relasi produk dengan kategori
    public function category()
    {
        // mengembalikan relasi dari model Produk ke kategori
        // model produk berelasi dengan model kategori
        return $this->belongsTo(Category::class);
    }

    // ini method untuk relasi article
    public function article()
    {
        return $this->hasMany(Article::class);
    }

}