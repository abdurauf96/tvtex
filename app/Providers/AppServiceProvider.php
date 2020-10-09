<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('partials.novinki', function($view){
            $tovels_new=\App\Towel::withTranslation(\App::getLocale())->where('status',1)->get();
            $view->with(compact('tovels_new'));
        });

        view()->composer('partials.filter', function($view){
            $tovels=\App\Towel::withTranslation(\App::getLocale())->paginate(8);
            $tkans=\App\Tkan::withTranslation(\App::getLocale())->get();
            $sizes=\App\Size::withTranslation(\App::getLocale())->get();
            $plotnosts=\App\Plotnost::withTranslation(\App::getLocale())->get();
            $types=\App\Type::withTranslation(\App::getLocale())->get();
            $view->with(compact('tovels', 'types', 'tkans', 'sizes', 'plotnosts'));
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
