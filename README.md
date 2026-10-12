# CodeStandard

[![CI](https://github.com/echo-fusion/codestandard/actions/workflows/ci.yml/badge.svg)](https://github.com/echo-fusion/codestandard/actions/workflows/ci.yml) [![Packagist](https://img.shields.io/packagist/v/echo-fusion/codestandard.svg)](https://packagist.org/packages/echo-fusion/codestandard) [![PHP](https://img.shields.io/badge/php-8.1%20%7C%208.2%20%7C%208.3-777bb4.svg)](https://www.php.net) [![License](https://img.shields.io/badge/license-MIT-blue.svg)](LICENSE)

This package promotes uniformity across all EchoFusion framework packages by establishing a standardized set of rules for the "friendsofphp/php-cs-fixer" package.

> Part of [EchoFusion](https://github.com/echo-fusion), a modular PHP framework built from small packages.

## Installation

```bash
composer require echo-fusion/codestandard
```

## Requirements

* PHP 8.1, 8.2 or 8.3

## Usage

To develop packages that will integrate with the EchoFusion framework, follow this rule set configuration. Here's how to apply it:

Copy the phpcs-fixer configuration file from the template directory and remove the 'template' extension. Your final configuration file should be named:
``
.php-cs-fixer.dist.php
``

Now you can execute command:

``` bash
./vendor/bin/php-cs-fixer fix --config=.php-cs-fixer.dist.php
```

## Testing

```bash
composer test
```

## Credits

- [Amir Shadanfar](https://github.com/amir-shadanfar)

## License

The MIT License (MIT). Please see [LICENSE](LICENSE) for more information.
