<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Salesopportunity extends Model
{
    public $table = "sales_opportunity";
    public $timestamps = false;
    use HasFactory;

    protected $fillable = [
        'who_notified',
        'phone_number',
        'email',
        'description',
        'assigned_to',
        'response',
        'created_by',
        'creation_time',
        'status',
        'business_potential'
    ];
}
