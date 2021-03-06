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
                'admin/contactformsubmissions',
                'admin/speakers/addspeaker',
                'admin/speakers/editspeaker',
                'admin/pictures',
                'admin/pictures/addpicture',
                'admin/pictures/editpicture'
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
