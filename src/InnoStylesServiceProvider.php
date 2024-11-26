<?php

namespace Remco\InnoStyles;

use Illuminate\Support\ServiceProvider;
use Remco\InnoStyles\Console\Commands\PublishCommand;

class InnoStylesServiceProvider extends ServiceProvider
{
    /**
     * Boot the service provider.
     */
    public function boot()
    {
        // Load views directly without publishing
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'inno-styles');

        // Automatically copy assets to public directory
        $this->publishAssets();
    }

    protected function publishAssets()
    {
        $targetCss = public_path('css/inno-styles');
        $targetJs = public_path('js/inno-styles');

        if (!file_exists($targetCss)) {
            mkdir($targetCss, 0755, true);
        }
        if (!file_exists($targetJs)) {
            mkdir($targetJs, 0755, true);
        }

        copy(__DIR__ . '/../resources/css/style.css', $targetCss . '/style.css');
        copy(__DIR__ . '/../resources/js/script.js', $targetJs . '/script.js');
        $this->register();
    }
    public function register()
    {
        $this->commands([
            PublishCommand::class,
        ]);
    }
}
