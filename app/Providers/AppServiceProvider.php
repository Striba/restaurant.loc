<?php

namespace Rest\Providers;

use Illuminate\Support\ServiceProvider;
use Blade;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //Директива присваевания значения переменной @set($i,10)
        Blade::directive('set', function ($exp){
            list($name,$val) = explode(',',$exp);
            return "<? $name = $val ?>";
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
