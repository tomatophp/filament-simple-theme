<?php

namespace TomatoPHP\FilamentSimpleTheme\Console;

use Illuminate\Console\Command;
use TomatoPHP\ConsoleHelpers\Traits\HandleFiles;
use TomatoPHP\ConsoleHelpers\Traits\RunCommand;

class FilamentSimpleThemeInstall extends Command
{
    use RunCommand;
    use HandleFiles;

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $name = 'filament-simple-theme:install';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'install package and publish assets';

    public function __construct()
    {
        parent::__construct();
    }


    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $this->info('Publish Vendor Assets');
        $this->copyFile(__DIR__ . '/../../publish/vite.config.js', base_path('vite.config.js'));
        $this->copyFile(__DIR__ . '/../../publish/package.json', base_path('package.json'));
        $this->copyFile(__DIR__ . '/../../publish/postcss.config.js', base_path('postcss.config.js'));
        $this->artisanCommand(["filament:optimize"]);
        $this->info('Filament Simple Theme installed successfully. please run npm install && npm run dev');
    }
}
