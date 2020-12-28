<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Steps extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = [
        'details',
        'recipe_id'
    ];
}
