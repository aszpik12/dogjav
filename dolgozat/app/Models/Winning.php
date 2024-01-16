<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Winning extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'brand_id',
        'part_id',
        'product_id',
        'date',
    ];
}
