<?php

namespace :vendor_namespace\:package_class_name\Tests;

use Orchestra\Testbench\TestCase as Testbench;

abstract class TestbenchTestCase extends Testbench
{
    public function setUp(): void
    {
        parent::setUp();
    }

    public function tearDown(): void
    {
       parent::tearDown();
    }

    protected function getPackageProviders($app): array
    {
        return [':vendor_namespace\:package_class_name\:package_class_nameServiceProvider'];
    }
}