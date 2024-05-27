<?php
namespace Jumppeak\Vitals;


use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Route;

class RouteServiceProvider extends ServiceProvider
{
    public function boot()
    {
        parent::boot();
    }
    public function map()
    {
        Route::prefix(config('vitals.prefix'))
            ->middleware(config('vitals.middleware'))
            ->group(__DIR__.'/routes/api.php');
    }

}
