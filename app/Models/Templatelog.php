<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Templatelog extends Model
{
    public $table = "templatelog";
    public $timestamps = false;
    use HasFactory;

    protected $fillable = [
        'template_id',
        'changelog',
        'change_time',
        'changed_by',
    ];
}
