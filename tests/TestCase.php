<?php

namespace Tests;

use Carvemerson\Potato\Providers\PotatoServiceProvider;

abstract class TestCase extends \Orchestra\Testbench\TestCase
{
    protected function getPackageProviders($app)
    {
        return [
            PotatoServiceProvider::class,
        ];
    }
}
