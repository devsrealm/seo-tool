<?php

namespace Devsrealm\SeoTool;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Devsrealm\SeoTool\Commands\SeoToolCommand;

class SeoToolServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('seo_tool')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_seo_tool_table')
            ->hasCommand(SeoToolCommand::class);
    }
}
