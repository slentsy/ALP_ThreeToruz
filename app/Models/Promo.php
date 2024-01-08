<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Promo extends Model
{
    use HasFactory;

    protected $fillable = 
    [
        'image', 
        'name', 
        'price',
        'tanggal_mulai', 
        'tanggal_berakhir', 
        'description'

    ]; 
}
