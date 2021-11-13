<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MaintenanceProduct extends Model
{
    use HasFactory;

    protected $fillable = [
        'maintenance_videos',
        'maintenance_video_title_1',
        'maintenance_video_url_1',
        'maintenance_video_title_2',
        'maintenance_video_url_2',
        'maintenance_video_title_3',
        'maintenance_video_url_3',
        'maintenance_video_title_4',
        'maintenance_video_url_4',
    ];
}
