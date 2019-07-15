Requirements
------------

**PHP 7:**

This is usually bundled with your operating system, or fetchable using a package manager like `apt` or `homebrew`.

Windows users can find the latest version here: https://windows.php.net/download#php-7.3

If you want to compile from source code, that can be found here: https://www.php.net/downloads.php

**Composer:**

Composer is PHP's main package and dependency management tool.

It can be downloaded here: https://getcomposer.org/download/

Getting Started
---------------

To begin the kata, install the dependencies and run `phpunit`:

```
cd HTask
composer install
vendor/bin/phpunit
```

## Compliance with requirements:

 * 'Item' class is do not alter.
 * 'Item' class property is also do not alter.
 * All tests pass after code refactoring.
 
## Changes

 * Items was seperated by them type.
 * Every Item has updateQuality method where quality is updating by some rules which was in requirements
 