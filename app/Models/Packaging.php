<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Packaging extends Model
{
    use HasFactory;
    public $table = "packaging";
    public $timestamps = false;

    protected $fillable = [
        'packing_type',
        'package_size',
        'packing_unit',
        'package_quantity',
        'package_total',
        'create_date_time',
        'emp_id',
        'production_id'
    ];

}
