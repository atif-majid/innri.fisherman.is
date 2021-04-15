<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recipephotos extends Model
{
    public $table = "recipephotos";
    public $timestamps = false;
    use HasFactory;
    protected $fillable = [
        'recipe_id',
        'file_name',
        'file_creation_date',
        'file_created_by',
        'file_type'
    ];
}
