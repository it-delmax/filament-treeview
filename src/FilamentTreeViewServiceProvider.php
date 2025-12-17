<?php

namespace IT_Delmax\FilamentTreeView;

use Filament\Support\Assets\Css;
use Filament\Support\Assets\Js;
use Filament\Support\Facades\FilamentAsset;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class FilamentTreeViewServiceProvider extends PackageServiceProvider
{
    public static string $name = 'filament-treeview';

    public function configurePackage(Package $package): void
    {
        $package
            ->name(static::$name)
            ->hasViews()
            ->hasTranslations()
            ->hasConfigFile();
    }

    public function packageBooted(): void
    {
        // Register assets...
        FilamentAsset::register([
            Css::make('filament-treeview-styles', __DIR__.'/../resources/dist/filament-treeview.css'),
            Js::make('filament-treeview-scripts', __DIR__.'/../resources/dist/filament-treeview.js'),
        ], package: 'it-delmax/filament-treeview');

    }

}
