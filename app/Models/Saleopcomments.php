<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Saleopcomments extends Model
{
    public $table = "salesop_comments";
    public $timestamps = false;
    use HasFactory;
    protected $fillable = [
        'salesop_id',
        'comment',
        'comment_add_date',
        'comment_added_by'
    ];
}
