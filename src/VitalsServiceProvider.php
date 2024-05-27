<?php
namespace Jumppeak\Vitals;



use Illuminate\Support\ServiceProvider;

class VitalsServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->publishes([
            __DIR__.'/config/vitals.php' => config_path('vitals.php'),
        ], 'vitals-config');


        $this->mergeConfigFrom(
            __DIR__.'/config/vitals.php', 'vitals'
        );

        $this->app->register(RouteServiceProvider::class);
    }


    public function boot()
    {
    }

}
