<?php

namespace Nerdroid23\BladeIcomoon\Tests;

use BladeUI\Icons\BladeIconsServiceProvider;
use Orchestra\Testbench\TestCase as Orchestra;
use Nerdroid23\BladeIcomoon\BladeIcomoonServiceProvider;

class TestCase extends Orchestra
{
    public function setUp(): void
    {
        parent::setUp();
    }

    protected function getPackageProviders($app)
    {
        return [
            BladeIconsServiceProvider::class,
            BladeIcomoonServiceProvider::class,
        ];
    }

    public function getEnvironmentSetUp($app)
    {
        //
    }
}
