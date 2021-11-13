<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHoseProductsTable extends Migration
{
    public function up()
    {
        Schema::create('hose_products', function (Blueprint $table) {
            $table->id();
            $table->string('hose_inlet')->nullable();
            $table->string('hose_outlet')->nullable();
            $table->string('hose_length')->nullable();
            $table->string('hose_colour')->nullable();
            $table->string('hose_application')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('hose_products');
    }
}
