<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vehicles extends Model
{
    protected $table = 'vehicles';

    protected $fillable = [
        'vehicle_name',
        'petrol',
        'plate',
        'vehicle_color',
        'vehicle_type',
        'vehicle_seat',
        'vehicle_price',
        'vehicle_year',
        'vehicle_engine',
        'vehicle_doors',
        'vehicle_transmision',
        'vehicle_merk',
        'vehicle_status',
        'vehicle_image',
    ];
}
