<?php

namespace App\Console\Commands;

use App\Services\ParserFilesService;
use Illuminate\Console\Command;

class ParseFiles extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'parse:file';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Parse files data to database';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct(ParserFilesService $filesService)
    {
        parent::__construct();

        $this->filesService = $filesService;
    }

    /**
     * Execute the console command.
     **/
    public function handle(): void
    {
        try {
            $this->filesService->import();
        } catch (\Exception $e) {
            $this->error($e->getMessage());
        }
        $this->info('File is import to database Success!!!');
    }
}
