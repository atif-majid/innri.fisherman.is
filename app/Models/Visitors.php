<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Visitors extends Model
{
    use HasFactory;
    public $table = "visitors_data";
    public $timestamps = false;

    protected $fillable = [
        'fullname',
        'status',
        'company',
        'purpose',
        'purpose_other',
        'visit_date_time'
        ];
}
