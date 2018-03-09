<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

class PrivateComposerServiceProvider extends ServiceProvider
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
                'admin/home',
                'admin/sponsors',
                'admin/speakers',
                'admin/contactformsubmissions'
            ], 
            
            'App\Http\ViewComposers\PrivateViewComposer'
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
