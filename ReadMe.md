# Code standard

This package promotes uniformity across all EchoFusion framework packages by establishing a standardized set of rules for the "friendsofphp/php-cs-fixer" package.

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

Testing includes PHPUnit and PHPStan (Level 7).
``` bash
$ composer test
```

## Credits
Developed and maintained by [Amir Shadanfar](https://github.com/amir-shadanfar).  
Connect on [LinkedIn](https://www.linkedin.com/in/amir-shadanfar).

## License

The MIT License (MIT). Please see [License File](https://github.com/echo-fusion/middlewaremanager/blob/main/LICENSE) for more information.

