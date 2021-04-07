<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Improvementphotos extends Model
{
    public $table = "improvementphotos";
    public $timestamps = false;
    use HasFactory;
    protected $fillable = [
        'improvements_id',
        'file_name',
        'file_creation_date',
        'file_created_by',
        'file_type'
    ];
}
