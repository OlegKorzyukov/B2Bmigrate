<?php

namespace App\Services\Imports;

use App\Models\Category;
use App\Services\BaseImportFile;
use App\Services\FilesToImportInterface;
use Illuminate\Database\Eloquent\Model;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithStartRow;
use Maatwebsite\Excel\Facades\Excel;

class CategoryImport extends BaseImportFile implements ToModel, WithStartRow, FilesToImportInterface
{
    private const FILE_TO_IMPORT = 'category.csv';

    public function model(array $row): ?Model
    {
        return new Category([
            'name' => $row[1],
            'url_key' => $row[2],
            'description' => $row[3],
            'image' => $row[4],
            'parent_id' => $row[5]
        ]);
    }

    public function import(): void
    {
        Excel::import($this, storage_path('/app/' . self::FILE_TO_IMPORT));
    }
}
