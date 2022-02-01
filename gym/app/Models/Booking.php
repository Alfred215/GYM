<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $fillable=[
        'fecha',
        'user_id',
        'session_id'
    ];

    public function users(){
        return $this->belongsTo(User::class);
    }

    public function sesions(){
        return $this->belongsTo(Sesion::class);
    }
}
