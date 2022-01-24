<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Session extends Model
{
    use HasFactory;

    protected $fillable=[
        'id_activity',
        'date_session',
        'start_time',
        'end_time'
    ];
}
