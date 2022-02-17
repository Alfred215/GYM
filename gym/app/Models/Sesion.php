<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sesion extends Model
{
    use HasFactory;

    protected $fillable=[
        'date_session',
        'start_time',
        'end_time',
        'activity_id'
    ];

    protected $date =['date'];

    public function activity(){
        return $this->belongsToMany(Activity::class);
    }

    public function sesions(){
        return $this->hasMany(User::class);
    }
}
