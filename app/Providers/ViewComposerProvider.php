<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class ViewComposerProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
      view()->composer('*', function($view){
        $view->with('pages', \App\Models\Pages::all());
      });
      view()->composer('*', function($view){
        $view->with('category', \App\Models\Category::all());
      });
      view()->composer('*', function($view){
        $view->with('service', \App\Models\Service::all());
      });
      view()->composer('*', function($view){
        $view->with('setting', \App\Models\Setting::first());
      });
      view()->composer('*', function($view){
        $view->with('bannerimage', \App\Models\Bannerimage::first());
      });


    }
}
