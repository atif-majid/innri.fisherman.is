<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employees extends Model
{
    public $timestamps = false;
    use HasFactory;
    protected $fillable = [
        'name',
        'email',
        'designation',
        'department',
        'direct_phone',
        'gsm',
        'userlevel',
        'address',
        'postcode',
        'city',
        'h_number',
        'id_number',
        'status',
        'picture'
    ];
}
