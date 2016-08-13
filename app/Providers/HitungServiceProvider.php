<?php

namespace App\Providers;

use App\Services\Hitung;
use Illuminate\Support\ServiceProvider;

class HitungServiceProvider extends ServiceProvider
{
    protected $hitung;
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->hitung = new Hitung;
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('hitung', function(){
            return $this->hitung;
        });
    }
}
