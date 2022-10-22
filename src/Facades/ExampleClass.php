<?php

namespace :vendor_namespace\:package_class_name\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \VendorName\Skeleton\Skeleton
 */
class Skeleton extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \:vendor_namespace\:package_class_name\:package_class_name::class;
    }
}
