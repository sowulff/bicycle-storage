<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wishlist extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'user_id',
        'bicycle_id',
    ];

    // public function wishtList()
    // {
    //     return $this->hasMany(User::class);
    // }
}
