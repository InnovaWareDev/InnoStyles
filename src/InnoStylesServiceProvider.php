<?php

namespace Remco\InnoStyles;

use Illuminate\Support\ServiceProvider;

class InnoStylesServiceProvider extends ServiceProvider
{
    /**
     * Boot the service provider.
     */
    public function boot()
    {
        // Load the views directly without publishing
        $this->loadViewsFrom(__DIR__ . '/resources/views', 'inno-styles');

        // Publish views with a custom tag 'inno-styles-views'
        $this->publishes([
            __DIR__ . '/resources/views' => resource_path('views/vendor/inno-styles'),
        ], 'inno-styles-views');

        // Load Blade components from the package
        $this->loadViewComponentsAs('icons', [
            __DIR__ . '/resources/views/components/icons',
        ]);
    }
}
