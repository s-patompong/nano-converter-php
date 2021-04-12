# Nano converter

[![Latest Version on Packagist](https://img.shields.io/packagist/v/s-patompong/nano-converter-php.svg?style=flat-square)](https://packagist.org/packages/s-patompong/nano-converter-php)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/s-patompong/nano-converter-php/run-tests?label=tests)](https://github.com/s-patompong/nano-converter-php/actions?query=workflow%3ATests+branch%3Amaster)
[![GitHub Code Style Action Status](https://img.shields.io/github/workflow/status/s-patompong/nano-converter-php/Check%20&%20fix%20styling?label=code%20style)](https://github.com/s-patompong/nano-converter-php/actions?query=workflow%3A"Check+%26+fix+styling"+branch%3Amaster)
[![Total Downloads](https://img.shields.io/packagist/dt/s-patompong/nano-converter-php.svg?style=flat-square)](https://packagist.org/packages/s-patompong/nano-converter-php)

Convert between Nano currency unit.

## Support me

You can support me by send NANO to `nano_1pondb4akejp534dirzgbrkdkqdibksn3owbjwosgw7mkm83oiyat8dk8cdw`

## Installation

You can install the package via composer:

```bash
composer require s-patompong/nano-converter-php
```

## Usage

Convert NANO to Raw.
```php
$nano = new \SPatompong\NanoConverter\NANO("45.225513");
echo $nano->toRaw();

// Output: "45225513000000000000000000000000"
```

Convert Raw to NANO.

```php
$raw = new \SPatompong\NanoConverter\Raw("7126405971523");
echo $raw->toNANO();

// Output: "0.000000000000000007126405971523"
```

It's important to note that the returned response is the object of BigDecimal class.

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please email me at `p.pangpond@gmail.com` if you found vulnerabilities.

## Credits

- [Patompong Savaengsuk](https://github.com/s-patompong)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
