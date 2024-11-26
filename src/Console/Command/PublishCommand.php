<?php

namespace Remco\InnoStyles\Console\Commands;

use Illuminate\Console\Command;

class PublishCommand extends Command
{
    protected $signature = 'inno-styles:install';
    protected $description = 'Install the InnoStyles package and publish assets';

    public function handle()
    {
        $this->call('vendor:publish', [
            '--provider' => "Remco\\InnoStyles\\InnoStylesServiceProvider",
            '--force' => true
        ]);

        $this->info('InnoStyles package installed successfully!');
    }
}
