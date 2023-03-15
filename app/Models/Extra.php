<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Extra extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'brand',
        'price',
        'description',
        'photo',
        'user_id',
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
