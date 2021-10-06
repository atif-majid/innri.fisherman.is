<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rawfishphoto extends Model
{
    public $table = "rawfishphoto";
    public $timestamps = false;
    use HasFactory;
    protected $fillable = [
        'raw_fish_id',
        'file_name',
        'file_creation_date',
        'file_created_by',
        'file_type'
    ];
}
