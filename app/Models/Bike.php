<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bike extends Model
{
    use HasFactory;

    protected $fillable = [
       'name',
       'brand',
       'photo',
       'price',
       'user_id' 
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function spares(){
        return $this->belongsToMany(Spare::class);
    }
}
