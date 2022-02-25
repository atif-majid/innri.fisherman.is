<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;
    public $table = "menu";
    public $timestamps = false;

    protected $fillable = [
        'date',
        'fish_course',
        'meat_course',
        'updated_by',
        'updated_on'
    ];
}
