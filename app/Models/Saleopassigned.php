<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Saleopassigned extends Model
{
    public $table = "salesop_assigned";
    public $timestamps = false;
    use HasFactory;
    protected $fillable = [
        'salesop_id',
        'assigned_to',
        'assigned_by',
        'action_taken_at'
    ];
}
