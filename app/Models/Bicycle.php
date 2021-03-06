<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bicycle extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'image',
        'price',
        'quantity',
    ];

    // When updating a bicycle the format of price is divided by 1000 the formatting of laravel forms.



    // protected function price(): Attribute
    // {
    //     return new Attribute(
    //         get: fn ($value) => number_format($value, 0, ".", "."),
    //         set: fn ($value) => $value,
    //     );
    // }
}
