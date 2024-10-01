# Template Response Class for standardized response format

[![Latest Version on Packagist](https://img.shields.io/packagist/v/tyasa81/ezresponse.svg?style=flat-square)](https://packagist.org/packages/tyasa81/ezresponse)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/tyasa81/ezresponse/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/tyasa81/ezresponse/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/tyasa81/ezresponse/fix-php-code-style-issues.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/tyasa81/ezresponse/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/tyasa81/ezresponse.svg?style=flat-square)](https://packagist.org/packages/tyasa81/ezresponse)

Simple Response and Form Request Base Templates to Make all projects consistent.

## Installation

You can install the package via composer:

```bash
composer require tyasa81/ezresponse
```

## Usage

```php
return new SuccessResponse(data: ["test"=>1]);
return new FailResponse(message: "test", data: ["test"=>1]);
return new TooManyRequestResponse();
return new UnauthorizedResponse();
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Tony Yasa](https://github.com/tyasa81)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
