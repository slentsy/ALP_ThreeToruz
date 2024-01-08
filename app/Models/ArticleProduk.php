<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ArticleProduk extends Model
{
    use HasFactory;

    protected $fillable = 
    [
        'produk_id',
        'article_id'
    ];

    public function produk()
    {
        return $this->belongsTo(Produk::class);
    }

    public function article()
    {
        return $this->belongsTo(Article::class);
    }
}
