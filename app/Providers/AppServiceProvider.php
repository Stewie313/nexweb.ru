<?php

namespace HD\Providers;

use Illuminate\Support\ServiceProvider;
use Blade;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
      Blade::directive('myDir',function($var) {
        return "<h1>New Directive - $var</h1>";
      });

      Blade::if('admin', function() {
    return true;
    });
    }
}
