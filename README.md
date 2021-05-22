# Blade IcoMoon

[![Latest Version on Packagist](https://img.shields.io/packagist/v/nerdroid23/blade-icomoon.svg?style=flat-square)](https://packagist.org/packages/nerdroid23/blade-icomoon)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/nerdroid23/blade-icomoon/run-tests?label=tests)](https://github.com/nerdroid23/blade-icomoon/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/workflow/status/nerdroid23/blade-icomoon/Check%20&%20fix%20styling?label=code%20style)](https://github.com/nerdroid23/blade-icomoon/actions?query=workflow%3A"Check+%26+fix+styling"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/nerdroid23/blade-icomoon.svg?style=flat-square)](https://packagist.org/packages/nerdroid23/blade-icomoon)

A package to easily make use of IcoMoon in your Laravel Blade views.

## Installation

You can install the package via composer:

```bash
composer require nerdroid23/blade-icomoon
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --provider="Nerdroid23\BladeIcomoon\BladeIcomoonServiceProvider" --tag="blade-icomoon-migrations"
php artisan migrate
```

You can publish the config file with:
```bash
php artisan vendor:publish --provider="Nerdroid23\BladeIcomoon\BladeIcomoonServiceProvider" --tag="blade-icomoon-config"
```

This is the contents of the published config file:

```php
return [
];
```

## Usage

```php
$blade-icomoon = new Nerdroid23\BladeIcomoon();
echo $blade-icomoon->echoPhrase('Hello, Spatie!');
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Joe Sylnice](https://github.com/nerdroid23)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
