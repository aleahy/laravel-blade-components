<?php

namespace Aleahy\LaravelBladeComponents\Tests;

use Illuminate\Database\Eloquent\Factories\Factory;
use Orchestra\Testbench\TestCase as Orchestra;
use Aleahy\LaravelBladeComponents\LaravelBladeComponentsServiceProvider;

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
