<?php

namespace App\Services;

class ParserFilesService
{
    private FilesToImportInterface $filesToImport;

    public function __construct(FilesToImportInterface $filesToImport)
    {
        $this->filesToImport = $filesToImport;
    }

    public function import()
    {
        $this->filesToImport->import();
    }
}
