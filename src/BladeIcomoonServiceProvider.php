<?php

namespace Nerdroid23\BladeIcomoon;

use BladeUI\Icons\Factory;
use Illuminate\Container\Container;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class BladeIcomoonServiceProvider extends PackageServiceProvider
{
    const ICON_SET = 'icomoon';
    const PACKAGE_NAME = 'blade-icomoon';

    public function configurePackage(Package $package): void
    {
        $package
            ->name(self::PACKAGE_NAME)
            ->hasConfigFile();
    }

    public function registeringPackage()
    {
        $this->callAfterResolving(
            Factory::class,
            function (Factory $factory, Container $container) {
                $config = $container
                    ->make('config')
                    ->get(self::PACKAGE_NAME, []);

                $factory->add(self::ICON_SET, array_merge([
                    'path' => __DIR__ . '/../resources/svg',
                ], $config));
            }
        );
    }

    public function bootingPackage()
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__ . '/../resources/svg' => public_path('vendor/' . self::PACKAGE_NAME),
            ], self::PACKAGE_NAME . '-icons');
        }
    }
}
