<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LocTime extends Model
{
    use HasFactory;

    protected $fillable = [
        'loc',
        'time',
        'description'
    ];
}
