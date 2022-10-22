<?php

namespace :vendor_namespace\:package_class_name\Tests;

use PHPUnit\Framework\TestCase;
use :vendor_namespace\:package_class_name\:package_class_name;

class :package_class_nameTest extends TestCase
{
    /** @test */
    
    public function it_can_getPackageDetail()
    {
        $array = (new :package_class_name)->getPackageDetail();

        $this->assertEquals([
            'author' => [
                'name' => ':author_name',
                'username' => ':author_username',
                'email' => ':author_email',
            ],
            'vendor' => [
                'name' => ':vendor_name',
                'slug' => ':vendor_slug',
            ],
            'package' => [
                'name' => ':package_name',
                'slug' => ':package_slug',
                'description' => ':package_description',
            ],
        ], $array);
    }
}