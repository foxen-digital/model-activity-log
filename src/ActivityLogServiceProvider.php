<?php

namespace Foxen\ActivityLog;

use Foxen\ActivityLog\Commands\ActivityLogCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class ActivityLogServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('model-activity-log')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_model_activity_log_table')
            ->hasCommand(ActivityLogCommand::class);
    }
}
