<?php

namespace TomatoPHP\FilamentSimpleTheme;

use Filament\Contracts\Plugin;
use Filament\Panel;


class FilamentSimpleThemePlugin implements Plugin
{
    public function getId(): string
    {
        return 'filament-simple-theme';
    }

    public function register(Panel $panel): void
    {
        $panel->viteTheme('vendor/tomatophp/filament-simple-theme/resources/css/theme.css');
    }

    public function boot(Panel $panel): void
    {
        //
    }

    public static function make(): static
    {
        return new static();
    }
}
