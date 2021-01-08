<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Improvementsnotifications extends Model
{
    public $table = "improvements_notifications";
    public $timestamps = false;
    use HasFactory;
    protected $fillable = [
        'improvements_id',
        'notification_name'
    ];
}
