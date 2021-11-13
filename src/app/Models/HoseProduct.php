<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HoseProduct extends Model
{
    use HasFactory;

    protected $fillable = [
        'hose_application',
        'hose_inlet',
        'hose_outlet',
        'hose_length',
        'hose_colour',
    ];
}
