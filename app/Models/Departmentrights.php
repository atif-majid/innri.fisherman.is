<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Departmentrights extends Model
{
    public $table = "departmentrights";
    public $timestamps = false;
    use HasFactory;

    protected $fillable = [
        'department',
        'routename',
        'rights'
    ];
}
