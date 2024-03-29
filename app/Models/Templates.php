<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Templates extends Model
{
    public $table = "templates";
    public $timestamps = false;
    use HasFactory;

    protected $fillable = [
        'title',
        'created_on',
        'created_by',
        'with_checkboxes',
        'supervisor',
        'version',
        'instruction',
        'updated_on',
        'status'
    ];
}
