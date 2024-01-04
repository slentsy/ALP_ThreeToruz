<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use HasFactory;

    protected $fillable =
        [
            'message_nama',
            'message_email',
            'message_nomor_hp',
            'message_pesan'

        ];
}
