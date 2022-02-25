<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Foodorder extends Model
{
    use HasFactory;
    public $table = "foodorder";
    public $timestamps = false;

    protected $fillable = [
        'emp_id',
        'fordate',
        'fish_course',
        'meat_course',
        'comments',
        'orderdate'
    ];
}
