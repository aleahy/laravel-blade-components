<?php

namespace Aleahy\LaravelBladeComponents\Tests;

use Aleahy\LaravelBladeComponents\LaravelBladeComponentsServiceProvider;
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
            LaravelBladeComponentsServiceProvider::class,
        ];
    }
}
