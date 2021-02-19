<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Saleopphotos extends Model
{
    public $table = "so_photos";
    public $timestamps = false;
    use HasFactory;

    protected $fillable = [
        'so_id',
        'file_name',
        'file_creation_date',
        'file_created_by'
    ];
}
