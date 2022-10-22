<?php

namespace :vendor_namespace\:package_class_name;

use Illuminate\Support\ServiceProvider;

class :package_class_nameServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot(): void
    {
        // $this->loadTranslationsFrom(__DIR__.'/../resources/lang', ':vendor_slug');
        // $this->loadViewsFrom(__DIR__.'/../resources/views', ':vendor_slug');
        // $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
        // $this->loadRoutesFrom(__DIR__.'/routes.php');

        // Publishing is only necessary when using the CLI.
        if ($this->app->runningInConsole()) {
            $this->bootForConsole();
        }
    }

    /**
     * Register any package services.
     *
     * @return void
     */
    public function register(): void
    {
        // $this->mergeConfigFrom(__DIR__.'/../config/:package_slug.php', ':package_slug');

        // Register the service the package provides.
        // $this->app->singleton(':package_slug', function ($app) {
        //     return new :package_class_name;
        // });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return [':package_slug'];
    }

    /**
     * Console-specific booting.
     *
     * @return void
     */
    protected function bootForConsole(): void
    {
        // Publishing the configuration file.
        // $this->publishes([
        //     __DIR__.'/../config/:package_slug.php' => config_path(':package_slug.php'),
        // ], ':package_slug.config');

        // Publishing the migrations.
        // $this->publishes([
        //     __DIR__.'/../database/migrations/' => database_path('migrations')
        // ], ':package_slug.migrations');

        // Publishing the views.
        // $this->publishes([
        //     __DIR__.'/../resources/views' => base_path('resources/views/vendor/:vendor_slug'),
        // ], ':package_slug.views');

        // Publishing assets.
        // $this->publishes([
        //     __DIR__.'/../resources/assets' => public_path('vendor/:vendor_slug'),
        // ], ':package_slug.views');

        // Publishing the translation files.
        // $this->publishes([
        //     __DIR__.'/../resources/lang' => resource_path('lang/vendor/:vendor_slug'),
        // ], ':package_slug.views');

        // Registering package commands.
        // $this->commands([]);
    }
}
