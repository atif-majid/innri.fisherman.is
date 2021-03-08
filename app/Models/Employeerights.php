<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employeerights extends Model
{
    use HasFactory;
    public $table = "employeerights";
    public $timestamps = false;
    protected $fillable = [
        'emp_id',
        'routename',
        'rights'
    ];
}
