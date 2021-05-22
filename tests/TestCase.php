<?php

namespace Nerdroid23\BladeIcomoon\Tests;

use BladeUI\Icons\BladeIconsServiceProvider;
use Nerdroid23\BladeIcomoon\BladeIcomoonServiceProvider;
use Orchestra\Testbench\TestCase as Orchestra;

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
