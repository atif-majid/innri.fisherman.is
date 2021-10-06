<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rawfish extends Model
{
    use HasFactory;
    public $table = "rawfish";
    public $timestamps = false;

    protected $fillable = [
        'fish_type',
        'quantity',
        'unit_quantity',
        'sort',
        'cases',
        'pallets',
        'lot_nr',
        'supplier',
        'lot_nr_supplier',
        'fish_received',
        'fish_received_by',
        'production_site',
        'assessment',
        'asc_msc',
        'temp_on_reception',
        'swabsure',
        'comments',
        'added_by',
        'added_on'
    ];
}
