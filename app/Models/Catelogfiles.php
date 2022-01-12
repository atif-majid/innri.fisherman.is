<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Catelogfiles extends Model
{
    public $table = "catelogfiles";
    public $timestamps = false;
    use HasFactory;

    protected $fillable = [
        'title',
        'filename',
        'file_type',
        'uploaded_by',
        'uploaded_on',
        'status'
    ];
}
