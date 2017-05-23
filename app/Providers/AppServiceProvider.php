<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use View;
use Carbon\Carbon;
use Auth;
use Illuminate\Support\Facades\Blade;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
       //vid 22
        Blade::directive('age', function($expression){
            $data = json_decode($expression);
           dd($data);
           return "<?php echo dd($data); ?>";
        });

       /* $age = Carbon::createFromDate(1999,1,1)->age;
        View::share('age', $age);
        View::share('myname', 'Admin');
        //View::share('auth', Auth::user());
        View::composer('*',function($view){ $view->with('auth',Auth::user());});*/
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
          $age = Carbon::createFromDate(1999,1,1)->age;
        View::share('age', $age);
        View::share('myname', 'Admin');
        //View::share('auth', Auth::user());
        View::composer('*',function($view){ $view->with('auth',Auth::user());});
    }
}
