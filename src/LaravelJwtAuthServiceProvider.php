<?php

namespace Andach\LaravelJwtAuth;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Andach\LaravelJwtAuth\Commands\LaravelJwtAuthCommand;

class LaravelJwtAuthServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-jwt-auth')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_laravel-jwt-auth_table')
            ->hasCommand(LaravelJwtAuthCommand::class);
    }
}
