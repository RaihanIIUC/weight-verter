<?php

namespace Raihan\WeightVerter;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Raihan\WeightVerter\Commands\WeightVerterCommand;

class WeightVerterServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('weight-verter')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_weight-verter_table')
            ->hasCommand(WeightVerterCommand::class);
    }
}
