<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Improvementassigned extends Model
{
    public $table = "improvementassigned";
    public $timestamps = false;
    use HasFactory;
    protected $fillable = [
        'improvements_id',
        'assigned_to',
        'assigned_by',
        'due_date',
        'action_taken_at'
    ];
}
