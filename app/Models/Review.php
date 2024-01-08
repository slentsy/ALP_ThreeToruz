<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    protected $fillable = ['review_customerName', 'review_description', 'review_email', 'produk_id'];

    public function product()
    {
        return $this->belongsTo(Produk::class, 'produk_id');
    }
}
