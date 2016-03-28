<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use App\article;

class ViewComposerServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        $this->composeNavbar();
        
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

    private function composeNavbar()
    {
       /* view()->composer('partials.navbar', function($view)
        {
            $view->with('latest', article::latest()->first());
        });
        */
        // with the above code we can handle the whole navbar binding thing. But below is a dedicated class
        //for the same purpose.

        view()->composer('partials.navbar', 'App\Http\Composers\NavBarComposer');
    }
}
