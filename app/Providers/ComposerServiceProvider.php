<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

class ComposerServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        View::composer(
            [
                'welcome',
                'about',
                'registration',
                'agenda',
                'speakers',
                'careers',
                'contact',
                'pictures',
                'press-release',
                'products-services',
                'includes/header',
                '2018-gala-dinner'
            
            ], 
            
            'App\Http\ViewComposers\PublicViewComposer'
        );
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
