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
        $this->app->singleton(ParserFilesService::class, function(){
            return new ParserFilesService(new ProductImport());
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
