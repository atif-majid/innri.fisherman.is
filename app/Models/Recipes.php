<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recipes extends Model
{
    use HasFactory;
    public $timestamps = false;
    /*protected $fillable = [
        'title',
        'preparation_time',
        'cooking_time'
    ];*/
    protected $fillable = [
        'title',
        'product_number',
        'created_date',
        'created_by',
        'amount',
        'unit',
        'production_site'
    ];
}
