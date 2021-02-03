<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Onboarding extends Model
{
    use HasFactory;
    public $table = "onboardingtasks";
    public $timestamps = false;

    protected $fillable = [
        'employee',
        'task',
        'assigned_by',
        'assigned_datetime',
        'responsible_person',
        'status',
        'due_date',
        'task_completion_date'
    ];
}
