<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    use HasFactory;

    protected $fillable = 
    [
        'nama_kategori'
    ]; 

    // relasi untuk satu kategori punya banyak produk
    // produks karena harus menggunakan plural
    public function produks()
    {
        return $this->hasMany(Produk::class);

    }
}
