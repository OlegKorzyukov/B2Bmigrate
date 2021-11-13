<?php

namespace App\Services;

use Illuminate\Container\RewindableGenerator;

class ParserFilesService
{
    private RewindableGenerator $imports;

    public function __construct(RewindableGenerator $imports)
    {
        $this->imports = $imports;
    }

    public function getImports(): RewindableGenerator
    {
        return $this->imports;
    }

    public function import()
    {
        foreach ($this->imports as $import) {
            /** @var FilesToImportInterface $import*/
            $import->import();
        }
    }
}
