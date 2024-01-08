<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    protected $fillable = 
    [
        'judul_article',
        'deskripsi_article', 
        'gambar'
    ];

    // ini method untuk relasi article ke produk
    public function produks()
    {
        return $this->belongsToMany(Produk::class);
    }
}
