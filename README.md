# Laravel WHMCS

[![Latest Version](https://img.shields.io/packagist/v/hopekelldev/laravelwhmcs.svg?style=flat-square)](https://packagist.org/packages/hopekelldev/laravelwhmcs)
[![Total Downloads](https://img.shields.io/packagist/dt/hopekelldev/laravelwhmcs.svg?style=flat-square)](https://packagist.org/packages/hopekelldev/laravelwhmcs)
[![License](https://img.shields.io/github/license/HopekellDev/laravelwhmcs.svg?style=flat-square)](https://github.com/HopekellDev/laravelwhmcs/blob/master/LICENSE)
[![PHP Version](https://img.shields.io/packagist/php-v/hopekelldev/laravelwhmcs.svg?style=flat-square)](https://php.net)
[![Laravel](https://img.shields.io/badge/Laravel-10.x-orange.svg?style=flat-square)](https://laravel.com)
[![Scrutinizer Code Quality](https://img.shields.io/scrutinizer/quality/g/HopekellDev/laravelwhmcs/master.svg?style=flat-square)](https://scrutinizer-ci.com/g/HopekellDev/laravelwhmcs/)

A Laravel package for integrating with the WHMCS API in Laravel 10.
This package has been tested in laravel 10 and it's compatible with it, It has not been tested with the current version of laravel. We will be working on improving it.
You can are free to contribute to the project.

## Installation

You can install the package via Composer:

```bash
composer require hopekelldev/laravelwhmcs
```
## Register your service provider:
Add your service provider to the providers array in config/app.php:
```bash
'providers' => [
    // Other Service Providers
    HopekellDev\LaravelWHMCS\WHMCSServiceProvider::class,
],
```
Add Aliases
```bash
'aliases' => [
    // Other Aliases
    'WHMCS' => HopekellDev\LaravelWHMCS\Facades\WHMCS::class,
],
```

## Publish the configuration file:

```bash
php artisan vendor:publish --provider="HopekellDev\LaravelWHMCS\WHMCSServiceProvider" --tag="config"
```

## Set your WHMCS credentials in your .env file:

```bash
WHMCS_USERNAME=your_whmcs_username
WHMCS_PASSWORD=your_whmcs_password
```
## Now you can use the package in your Laravel application:
```bash
use HopekellDev\LaravelWHMCS\Facades\WHMCS;

// Example usage
$clients = WHMCS::getClients();
```
# License
This package is licensed under the MIT [![License](https://img.shields.io/github/license/HopekellDev/laravelwhmcs.svg?style=flat-square)](https://github.com/HopekellDev/laravelwhmcs/blob/master/LICENSE)
 - see the LICENSE file for details.