<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @method static create(array $only)
 */
class Item extends Model
{
    use HasFactory;
    protected $fillable=[
        'name',
        'details',
        'description',
        'price'
    ];
}
