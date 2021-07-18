<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Instructions extends Model
{
    use HasFactory;
    public $table = "instructions";
    public $timestamps = false;

    protected $fillable = [
        'instruction_date',
        'chk_make',
        'chk_freeze',
        'chk_pack',
        'chk_send',
        'chk_clean',
        'chk_cut',
        'chk_salt',
        'chk_smoke',
        'chk_bone_cleaning',
        'chk_sliced',
        'create_date_time',
        'emp_id',
        'production_id'
    ];
}
