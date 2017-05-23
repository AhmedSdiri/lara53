<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use View;

class ComposerServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        /*View::composer('pages.profile','App\HTTP\ViewComposers\ProfileComposer');
         View::composer('pages.settings','App\HTTP\ViewComposers\ProfileComposer');// this line is for making the settings variables global sharing variable */

        /* // the other method for sharing variables is making an array of views

        View::composer(['pages.profile','pages.settings' ],'App\HTTP\ViewComposers\ProfileComposer');*/

        //sharings with creator
        View::creator(['pages.profile','pages.settings' ],'App\HTTP\ViewComposers\ProfileComposer');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
