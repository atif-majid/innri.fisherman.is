<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ingredients extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = [
        'name',
        'amount',
        'unit',
        'recipe_id'
    ];
}
