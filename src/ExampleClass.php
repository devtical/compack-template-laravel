<?php

namespace :vendor_namespace\:package_class_name;

class :package_class_name
{
    public function getPackageDetail()
    {
        return [
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
        ];
    }
}
