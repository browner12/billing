# billing

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Software License][ico-license]](LICENSE.md)
[![Build Status][ico-travis]][link-travis]
[![Coverage Status][ico-scrutinizer]][link-scrutinizer]
[![Quality Score][ico-code-quality]][link-code-quality]
[![Total Downloads][ico-downloads]][link-downloads]

**Note:** Replace ```Andrew Brown``` ```browner12``` `````` ```browner12@gmail.com``` ```browner12``` ```billing``` ```accept payments``` with their correct values in [README.md](README.md), [CHANGELOG.md](CHANGELOG.md), [CONTRIBUTING.md](CONTRIBUTING.md), [LICENSE.md](LICENSE.md) and [composer.json](composer.json) files, then delete this line.

This is a billing package. It abstracts the implementation allowing you to quickly setup billing using your preferred provided. Please note that currently only the Stripe implementation is available.

## Install

Via Composer

``` bash
$ composer require browner12/billing
```

## Setup

Add the service provider to the providers array in `config/app.php`.

``` php
'providers' => [
    browner12\billing\BillingServiceProvider::class,
];
```

## Publishing

You can publish everything at once

``` php
php artisan vendor:publish --provider="browner12\billing\HelperServiceProvider"
```

or you can publish groups individually.

``` php
php artisan vendor:publish --provider="browner12\billing\HelperServiceProvider" --tag="config"
```

## Usage

Make sure you start by updating your new `billing.php` config file. You must select a provider, and set the API key. Your API key should most likely use an environment variable.

Next you will want to instantiate the biller with dependency injection.

``` php
public function __construct(BillingInterface $biller)
{
    //assign
    $this->biller = $biller;
}
```

To create a charge call the `charge` method.

``` php
$this->biller->charge(2199, $token, 'description of the charge');
```

The `$token` will come from your service provider. The token allows you to prevent any payment details from ever touching your server.

## Change log

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Testing

``` bash
$ composer test
```

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) and [CONDUCT](CONDUCT.md) for details.

## Security

If you discover any security related issues, please email browner12@gmail.com instead of using the issue tracker.

## Credits

- [Andrew Brown][link-author]
- [All Contributors][link-contributors]

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

[ico-version]: https://img.shields.io/packagist/v/browner12/billing.svg?style=flat-square
[ico-license]: https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square
[ico-travis]: https://img.shields.io/travis/browner12/billing/master.svg?style=flat-square
[ico-scrutinizer]: https://img.shields.io/scrutinizer/coverage/g/browner12/billing.svg?style=flat-square
[ico-code-quality]: https://img.shields.io/scrutinizer/g/browner12/billing.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/browner12/billing.svg?style=flat-square

[link-packagist]: https://packagist.org/packages/browner12/billing
[link-travis]: https://travis-ci.org/browner12/billing
[link-scrutinizer]: https://scrutinizer-ci.com/g/browner12/billing/code-structure
[link-code-quality]: https://scrutinizer-ci.com/g/browner12/billing
[link-downloads]: https://packagist.org/packages/browner12/billing
[link-author]: https://github.com/browner12
[link-contributors]: ../../contributors
