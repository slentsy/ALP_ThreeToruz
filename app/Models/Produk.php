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
        'kategori_id'

    ];
}
