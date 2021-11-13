<?php

namespace App\Services\Imports;

use App\Models\AttributeProduct;
use App\Models\HoseProduct;
use App\Models\MaintenanceProducts;
use App\Models\ManufacturerProduct;
use App\Models\Product;
use App\Services\BaseImportFile;
use App\Services\FilesToImportInterface;
use Illuminate\Database\Eloquent\Model;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithStartRow;
use Maatwebsite\Excel\Facades\Excel;

class ProductImport extends BaseImportFile implements ToModel, WithStartRow, FilesToImportInterface
{
    private const FILE_TO_IMPORT = 'product.csv';

    public function model(array $row): ?Model
    {
      return  new AttributeProduct([
            'type' => $row[1],
            'sku' => $row[2],
            'opera_sku' => $row[3],
            'old_sku' => $row[4],
            'override_opera' => $row[5],
            'name' => $row[6],
            'inlet' => $row[7],
            'outlet' => $row[8],
            'hose_type' => $row[9],
            'angle_in_deg' => $row[10],
            'max_lpm' => $row[11],
            'voltage' => $row[12],
            'material' => $row[13],
            'bar' => $row[14],
            'o_ring_thickness' => $row[15],
            'diameter' => $row[16],
            'colour' => $row[17],
            'rpm' => $row[18],
            'status' => $row[19],
            'url_key' => $row[20],
            'visibility' => $row[21],
            'clearance' => $row[22],
            'max_temperature' => $row[23],
            'description' => $row[24],
            'short_description' => $row[25],
            'tech_spec_1' => $row[26],
            'tech_spec_2' => $row[27],
            'tech_spec_3' => $row[28],
            'product_videos' => $row[29],
            'nozzle_value' => $row[30],
            //nozzle_size
            'foam_value' => $row[32],
            'is_featured' => $row[33],
            'featured_position' => $row[34],
            'hose_clamp_size' => $row[35],
            'orifice_size' => $row[36],
            'shoe_size' => $row[37],
            'thread' => $row[38],
            'size_and_angle' => $row[39],
            'inlet_outlet' => $row[40],
            'clothing_size' => $row[41],
            'wheel_style' => $row[42],
            'flow_and_pressure' => $row[43],
            'country_of_manufacture' => $row[44],
            'select_nozzle_size' => $row[45],
            'dn_internal_diameter' => $row[46],
            'currency' => $row[47],
            'pack_size' => $row[48],
            'easyturn' => $row[49],
            'priority' => $row[50],
            'price' => $row[66],
            'special_price' => $row[67],
            'poa' => $row[68],
            'poa_price' => $row[69],
            'msrp' => $row[70],
            'meta_title' => $row[71],
            'meta_keywords' => $row[72],
            'meta_description' => $row[73],
            'pdf_title_1' => $row[74],
            'pdf_title_2' => $row[75],
            'pdf_title_3' => $row[76],
            'pdf_title_4' => $row[77],
            'categories' => $row[78],
            'bullet_point_1' => $row[79],
            'bullet_point_2' => $row[80],
            'bullet_point_3' => $row[81],
            'bullet_point_4' => $row[82],
            'stock_status' => $row[92],
            'related_products' => $row[93],
            'configurable_product_parent_id' => $row[94],
        ]);

        new HoseProduct([
            'hose_application' => $row[61],
            'hose_inlet' => $row[62],
            'hose_outlet' => $row[63],
            'hose_length' => $row[64],
            'hose_colour' => $row[65],
        ]);

        new MaintenanceProducts([
            'maintenance_videos' => $row[83],
            'maintenance_video_title_1' => $row[84],
            'maintenance_video_url_1' => $row[85],
            'maintenance_video_title_2' => $row[86],
            'maintenance_video_url_2' => $row[87],
            'maintenance_video_title_3' => $row[88],
            'maintenance_video_url_3' => $row[89],
            'maintenance_video_title_4' => $row[90],
            'maintenance_video_url_4' => $row[91],
        ]);

        new ManufacturerProduct([
            'manufacturer_number_1' => $row[51],
            'manufacturer_number_2' => $row[52],
            'manufacturer_number_3' => $row[53],
            'manufacturer_number_4' => $row[54],
            'manufacturer_number_5' => $row[55],
            'manufacturer_number_6' => $row[56],
            'manufacturer_number_7' => $row[57],
            'manufacturer_number_8' => $row[58],
            'manufacturer_number_9' => $row[59],
            'manufacturer_number_10' => $row[60],
        ]);

        new Product([
            'category_id',
            'attribute_id',
        ]);
    }

    public function import(): void
    {
        Excel::import($this, storage_path('/app/' . self::FILE_TO_IMPORT));
    }
}
