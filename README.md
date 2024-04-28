# Laravel WHMCS

[![Latest Version](https://img.shields.io/packagist/v/hopekelldev/laravel_whmcs.svg?style=flat-square)](https://packagist.org/packages/hopekelldev/laravel_whmcs)
[![Total Downloads](https://img.shields.io/packagist/dt/hopekelldev/laravel_whmcs.svg?style=flat-square)](https://packagist.org/packages/hopekelldev/laravel_whmcs)
[![License](https://img.shields.io/packagist/l/hopekelldev/laravel_whmcs.svg?style=flat-square)](https://github.com/hopekelldev/laravel_whmcs/blob/main/LICENSE)
[![PHP Version](https://img.shields.io/packagist/php-v/hopekelldev/laravel_whmcs.svg?style=flat-square)](https://php.net)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/hopekelldev/LaravelWHMCS/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/hopekelldev/LaravelWHMCS)


A Laravel package for integrating with the WHMCS API.

## Installation

You can install the package via Composer:

```bash
composer require hopekelldev/laravel_whmcs
```
## Publish the configuration file:

```bash
php artisan vendor:publish --provider="HopekellDev\LaravelWHMCS\WhmcsServiceProvider" --tag="config"
```

## Set your WHMCS credentials in your .env file:

```bash
WHMCS_USERNAME=your_whmcs_username
WHMCS_PASSWORD=your_whmcs_password
```
## Now you can use the package in your Laravel application:
```bash
use HopekellDev\LaravelWHMCS\Facades\Whmcs;

// Example usage
$clients = Whmcs::client()->getClients();
```
# License
This package is licensed under the MIT License - see the LICENSE file for details.