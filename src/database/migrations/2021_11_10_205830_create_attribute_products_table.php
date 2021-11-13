<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAttributeProductsTable extends Migration
{
    public function up()
    {
        Schema::create('attribute_products', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('hose_id');
            $table->unsignedBigInteger('maintenance_id');
            $table->unsignedBigInteger('manufacturer_id');
            $table->string('type');
            $table->string('sku');
            $table->string('opera_sku')->nullable();
            $table->string('old_sku')->nullable();
            $table->integer('override_opera');
            $table->string('name');
            $table->string('inlet')->nullable();
            $table->string('outlet')->nullable();
            $table->string('hose_type')->nullable();
            $table->integer('angle_in_deg')->nullable();
            $table->integer('max_lpm')->nullable();
            $table->integer('voltage')->nullable();
            $table->integer('material')->nullable();
            $table->integer('bar')->nullable();
            $table->integer('o_ring_thickness')->nullable();
            $table->integer('diameter')->nullable();
            $table->integer('colour')->nullable();
            $table->integer('rpm')->nullable();
            $table->integer('status')->nullable();
            $table->string('url_key')->nullable();
            $table->string('visibility')->nullable();
            $table->string('clearance')->nullable();
            $table->string('max_temperature')->nullable();
            $table->string('description')->nullable();
            $table->string('short_description')->nullable();
            $table->string('tech_spec_1')->nullable();
            $table->string('tech_spec_2')->nullable();
            $table->string('tech_spec_3')->nullable();
            $table->string('product_videos')->nullable();
            $table->string('nozzle_value')->nullable();
            $table->string('foam_value')->nullable();
            $table->string('is_featured')->nullable();
            $table->string('featured_position')->nullable();
            $table->string('hose_clamp_size')->nullable();
            $table->string('orifice_size')->nullable();
            $table->string('shoe_size')->nullable();
            $table->string('thread')->nullable();
            $table->string('size_and_angle')->nullable();
            $table->string('inlet_outlet')->nullable();
            $table->string('clothing_size')->nullable();
            $table->string('wheel_style')->nullable();
            $table->string('flow_and_pressure')->nullable();
            $table->string('country_of_manufacture')->nullable();
            $table->string('select_nozzle_size')->nullable();
            $table->string('dn_internal_diameter')->nullable();
            $table->string('currency')->nullable();
            $table->string('pack_size')->nullable();
            $table->string('easyturn')->nullable();
            $table->string('priority')->nullable();
            $table->string('price')->nullable();
            $table->string('special_price')->nullable();
            $table->string('poa')->nullable();
            $table->string('poa_price')->nullable();
            $table->string('msrp')->nullable();
            $table->string('meta_title')->nullable();
            $table->string('meta_keywords')->nullable();
            $table->string('meta_description')->nullable();
            $table->string('pdf_title_1')->nullable();
            $table->string('pdf_title_2')->nullable();
            $table->string('pdf_title_3')->nullable();
            $table->string('pdf_title_4')->nullable();
            $table->string('categories')->nullable();
            $table->string('bullet_point_1')->nullable();
            $table->string('bullet_point_2')->nullable();
            $table->string('bullet_point_3')->nullable();
            $table->string('bullet_point_4')->nullable();
            $table->string('stock_status')->nullable();
            $table->string('related_products')->nullable();
            $table->string('configurable_product_parent_id')->nullable();
            $table->timestamps();

            $table->foreign('manufacturer_id')->references('id')->on('manufacturer_products');
            $table->foreign('maintenance_id')->references('id')->on('maintenance__products');
            $table->foreign('hose_id')->references('id')->on('hose_products');
        });
    }

    public function down()
    {
        Schema::dropIfExists('attribute_products');
    }
}
