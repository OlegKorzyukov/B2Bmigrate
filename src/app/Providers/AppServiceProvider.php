<?php

namespace App\Providers;

use App\Services\Imports\ProductImport;
use App\Services\Imports\CategoryImport;
use App\Services\ParserFilesService;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->tag([CategoryImport::class, ProductImport::class], 'imports');

        $this->app->bind(ParserFilesService::class, function($app){
            $imports = $app->tagged('imports');

            return new ParserFilesService($imports);
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {

    }
}
