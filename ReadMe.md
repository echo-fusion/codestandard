# Code standard

This is a package for making uniformity cross all echo-fusion framework packages.

## Installation

Install the package via Composer:

```bash
composer require echo-fusion/codestandard
```

## Requirements

The following versions of PHP are supported by this version.

* PHP 8.1
* PHP 8.2
* PHP 8.3

## Usage

To create packages that will integrate with the EchoFusion framework in the future, you should adhere to the following rule sets configuration. Here's how to implement it:

This package includes "friendsofphp/php-cs-fixer" for maintaining coding style, so you don't need to list it in your composer.json file.

Simply copy the phpcs-fixer configuration file located in the template directory and remove the 'template' extension from the end. Your final config file should be named:
``
.php-cs-fixer.dist.php
``

Now you can execute command:

``` bash
./vendor/bin/php-cs-fixer fix --config=.php-cs-fixer.dist.php
```

## Testing

Testing includes PHPUnit and PHPStan (Level 7).
``` bash
$ composer test
```

## Credits

- [Amir Shadanfar](https://github.com/amir-shadanfar)

## License

The MIT License (MIT). Please see [License File](https://github.com/echo-fusion/middlewaremanager/blob/main/LICENSE) for more information.

