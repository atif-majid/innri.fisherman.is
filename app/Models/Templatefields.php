<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Templatefields extends Model
{
    public $table = "template_fields";
    public $timestamps = false;
    use HasFactory;

    protected $fillable = [
        'field_title',
        'template_id'
    ];
}
