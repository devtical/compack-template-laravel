# :package_name

:package_description

## Installation

You can install the package via composer:

```bash
composer require :vendor_slug/:package_slug
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --tag=":package_slug.migrations"
php artisan migrate
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag=":package_slug.config"
```

This is the contents of the published config file:

```php
return [
    'package-name' => :package_name
];
```

Optionally, you can publish the views using

```bash
php artisan vendor:publish --tag=":package_slug.views"
```

## Usage

```php
use :vendor_namespace\:package_class_name\:package_class_name;

$packageDetail = (new :package_class_name)->getPackageDetail();

dd($packageDetail);
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security

If you discover any security related issues, please email `:author_email` instead of using the issue tracker.

## Credits

- [:author_name](https://github.com/:author_username)
- [All Contributors](https://github.com/:vendor_slug/:package_slug/graphs/contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
