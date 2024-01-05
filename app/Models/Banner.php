<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    use HasFactory;

    protected $fillable =
        [
            'banner_pict',
            'banner_judul',
            'banner_deskripsi',
            'starting_time',
            'Ending_time'
        ];

}
