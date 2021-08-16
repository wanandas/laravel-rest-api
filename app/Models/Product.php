<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $casts = [
        'picture' => 'array'
    ];

    protected $fillable = [
        'rate', 'comment', 'price', 'categories', 'discount', 'picture', 'name'
    ];
}
