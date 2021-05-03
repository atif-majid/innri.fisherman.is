<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Templatesubmitfields extends Model
{
    public $table = "template_submit_fields";
    public $timestamps = false;
    use HasFactory;

    protected $fillable = [
        'field_title',
        'chk_emp_confirm',
        'emp_value',
        'emp_comment',
        'chk_supervisor_confirmed',
        'supervisor_comment',
        'template_submit_id'
    ];
}
