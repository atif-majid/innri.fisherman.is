<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Templatesubmit extends Model
{
    public $table = "template_submit";
    public $timestamps = false;
    use HasFactory;

    protected $fillable = [
        'template_id',
        'template_title',
        'template_version',
        'submit_date',
        'supervisor',
        'user_id',
        'production_site',
        'reviewed',
        'reviewed_datetime',
        'with_checkboxes',
        'instruction',
        'comments',
        'template_created_on'
    ];
}
