<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateManufacturerProductsTable extends Migration
{
    public function up()
    {
        Schema::create('manufacturer_products', function (Blueprint $table) {
            $table->id();
            $table->string('manufacturer_number_1')->nullable();
            $table->string('manufacturer_number_2')->nullable();
            $table->string('manufacturer_number_3')->nullable();
            $table->string('manufacturer_number_4')->nullable();
            $table->string('manufacturer_number_5')->nullable();
            $table->string('manufacturer_number_6')->nullable();
            $table->string('manufacturer_number_7')->nullable();
            $table->string('manufacturer_number_8')->nullable();
            $table->string('manufacturer_number_9')->nullable();
            $table->string('manufacturer_number_10')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('manufacturer_products');
    }
}
