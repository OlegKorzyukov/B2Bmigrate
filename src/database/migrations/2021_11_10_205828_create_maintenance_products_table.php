<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMaintenanceProductsTable extends Migration
{
    public function up()
    {
        Schema::create('maintenance__products', function (Blueprint $table) {
            $table->id();
            $table->string('maintenance_videos')->nullable();
            $table->string('maintenance_video_title_1')->nullable();
            $table->string('maintenance_video_url_1')->nullable();
            $table->string('maintenance_video_title_2')->nullable();
            $table->string('maintenance_video_url_2')->nullable();
            $table->string('maintenance_video_title_3')->nullable();
            $table->string('maintenance_video_url_3')->nullable();
            $table->string('maintenance_video_title_4')->nullable();
            $table->string('maintenance_video_url_4')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('maintenance__products');
    }
}
