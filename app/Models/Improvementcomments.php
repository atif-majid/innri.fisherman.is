<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Improvementcomments extends Model
{
    public $table = "improvement_comments";
    public $timestamps = false;
    use HasFactory;
    protected $fillable = [
        'improvements_id',
        'comment',
        'comment_add_date',
        'comment_added_by'
    ];
}
