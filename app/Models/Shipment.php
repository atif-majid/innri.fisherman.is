<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shipment extends Model
{
    use HasFactory;
    public $table = "shipment";
    public $timestamps = false;

    protected $fillable = [
        'shipment_quantity',
        'shipment_unit',
        'delivery_storage',
        'storage_pallet',
        'create_date_time',
        'emp_id',
        'production_id'
    ];
}
