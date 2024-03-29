<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Spare extends Model
{
    use HasFactory;

    protected $fillable = [
        'brand',
        'description',
        'photo',
        'user_id',
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function bikes(){
        return $this->belongsToMany(Bike::class);
    }
}
