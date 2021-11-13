<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AttributeProduct extends Model
{
    use HasFactory;

    protected $fillable = [
        'type',
        'sku',
        'opera_sku',
        'old_sku',
        'override_opera',
        'name',
        'inlet',
        'outlet',
        'hose_type',
        'angle_in_deg',
        'max_lpm',
        'voltage',
        'material',
        'bar',
        'o_ring_thickness',
        'diameter',
        'colour',
        'rpm',
        'status',
        'url_key',
        'visibility',
        'clearance',
        'max_temperature',
        'description',
        'short_description',
        'tech_spec_1',
        'tech_spec_2',
        'tech_spec_3',
        'product_videos',
        'nozzle_value',
        'foam_value',
        'is_featured',
        'featured_position',
        'hose_clamp_size',
        'orifice_size',
        'shoe_size',
        'thread',
        'size_and_angle',
        'inlet_outlet',
        'clothing_size',
        'wheel_style',
        'flow_and_pressure',
        'country_of_manufacture',
        'select_nozzle_size',
        'dn_internal_diameter',
        'currency',
        'pack_size',
        'easyturn',
        'priority',
        'price',
        'special_price',
        'poa',
        'poa_price',
        'msrp',
        'meta_title',
        'meta_keywords',
        'meta_description',
        'pdf_title_1',
        'pdf_title_2',
        'pdf_title_3',
        'pdf_title_4',
        'categories',
        'bullet_point_1',
        'bullet_point_2',
        'bullet_point_3',
        'bullet_point_4',
        'stock_status',
        'related_products',
        'configurable_product_parent_id',
    ];
}
