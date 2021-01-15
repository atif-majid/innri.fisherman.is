<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Improvements extends Model
{
    public $table = "improvements";
    public $timestamps = false;
    use HasFactory;
    protected $fillable = [
        'complainer',
        'phonenumber',
        'email',
        'product',
        'production_location',
        'supplier',
        'selling_location',
        'purchase_date',
        'lot_nr',
        'description',
        'assigned_to',
        'due_date',
        'response_improvements',
        'complain_creation_date',
        'complain_created_by'
    ];
}
