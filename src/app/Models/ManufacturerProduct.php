<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ManufacturerProduct extends Model
{
    use HasFactory;

    protected $fillable = [
        'manufacturer_number_1',
        'manufacturer_number_2',
        'manufacturer_number_3',
        'manufacturer_number_4',
        'manufacturer_number_5',
        'manufacturer_number_6',
        'manufacturer_number_7',
        'manufacturer_number_8',
        'manufacturer_number_9',
        'manufacturer_number_10',
    ];
}
