<?php

namespace TomatoPHP\FilamentSimpleTheme;

use Filament\Support\Facades\FilamentView;
use Filament\View\PanelsRenderHook;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;
use Livewire\Livewire;
use TomatoPHP\FilamentSimpleTheme\Livewire\TopBarEnd;
use TomatoPHP\FilamentSimpleTheme\Livewire\TopBarStart;


class FilamentSimpleThemeServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        //Register generate command
        $this->commands([
           \TomatoPHP\FilamentSimpleTheme\Console\FilamentSimpleThemeInstall::class,
        ]);

        //Register Config file
        $this->mergeConfigFrom(__DIR__.'/../config/filament-simple-theme.php', 'filament-simple-theme');

        //Publish Config
        $this->publishes([
           __DIR__.'/../config/filament-simple-theme.php' => config_path('filament-simple-theme.php'),
        ], 'filament-simple-theme-config');

        //Register Migrations
        $this->loadMigrationsFrom(__DIR__.'/../database/migrations');

        //Publish Migrations
        $this->publishes([
           __DIR__.'/../database/migrations' => database_path('migrations'),
        ], 'filament-simple-theme-migrations');
        //Register views
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'filament-simple-theme');

        //Publish Views
        $this->publishes([
           __DIR__.'/../resources/views' => resource_path('views/vendor/filament-simple-theme'),
        ], 'filament-simple-theme-views');

        //Register Langs
        $this->loadTranslationsFrom(__DIR__.'/../resources/lang', 'filament-simple-theme');

        //Publish Lang
        $this->publishes([
           __DIR__.'/../resources/lang' => base_path('lang/vendor/filament-simple-theme'),
        ], 'filament-simple-theme-lang');

        //Register Routes
        $this->loadRoutesFrom(__DIR__.'/../routes/web.php');

        Livewire::component('topbar-start', TopBarStart::class);
        Livewire::component('topbar-end', TopBarEnd::class);
    }

    public function boot(): void
    {
        FilamentView::registerRenderHook(
            PanelsRenderHook::SIDEBAR_FOOTER,
            fn() => view('filament-simple-theme::sidebar-nav-end')
        );

        FilamentView::registerRenderHook(
            PanelsRenderHook::TOPBAR_START,
            fn() => Blade::render('@livewire(TomatoPHP\FilamentSimpleTheme\Livewire\TopBarStart::class)')
        );

        FilamentView::registerRenderHook(
            PanelsRenderHook::TOPBAR_END,
            fn() => Blade::render('@livewire(TomatoPHP\FilamentSimpleTheme\Livewire\TopBarEnd::class)')
        );
    }
}
