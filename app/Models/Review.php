<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    protected $fillable = 
    [
        'nama_pelanggan', 
        'deskripsi_review', 
        'rating_review', 
        'visibility_nama',
        'status_accepted',
        'produk_id', 
        'reply_id'

    ]; 
}
