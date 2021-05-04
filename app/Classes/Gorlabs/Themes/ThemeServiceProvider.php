<?php
namespace App\Classes\Gorlabs\Themes;
use Illuminate\Support\ServiceProvider;


class ThemeServiceProvider extends ServiceProvider {

    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Bootstrap the application events.
     *
     * @return void
     */
    public function boot()
    {

    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        // init theme with default finder
        $this->app->singleton('theme', function($app) {
            return $theme = new Theme($app, $this->app['view']->getFinder(), $this->app['translator']->getLoader());
        });
    }



    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return array();
    }

}
