<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Session extends Model
{
    use HasFactory;

    protected $fillable=[
        'date_session',
        'start_time',
        'end_time'
    ];

    protected $date =['date'];

    public function activity(){
        return $this->belongsTo(Activity::class);
    }
}
