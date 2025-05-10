# Laravel ERS Client

[![Latest Version on Packagist](https://img.shields.io/packagist/v/checkybot-labs/laravel-ers-client.svg?style=flat-square)](https://packagist.org/packages/checkybot-labs/laravel-ers-client)
[![Run tests](https://github.com/checkybot-labs/laravel-ers-client/actions/workflows/run-tests.yml/badge.svg)](https://github.com/checkybot-labs/laravel-ers-client/actions/workflows/run-tests.yml)
[![PHPStan](https://github.com/checkybot-labs/laravel-ers-client/actions/workflows/phpstan.yml/badge.svg)](https://github.com/checkybot-labs/laravel-ers-client/actions/workflows/phpstan.yml)
[![Total Downloads](https://img.shields.io/packagist/dt/checkybot-labs/laravel-ers-client.svg?style=flat-square)](https://packagist.org/packages/checkybot-labs/laravel-ers-client)


A fork of [`facade/flare-client-php`](https://github.com/facade/flare-client-php) with extended support for sending errors to a custom endpoint.

---

## ✨ What's Different

This package includes a few key enhancements that allow you to use the Flare client logic for your own error reporting service:

- 🌐 **Custom error reporting URL** (`ERS_ERROR_API_URL`)
- ⏱ **Custom timeout setting** (`ERS_ERROR_API_TIMEOUT`)
- 🔒 **Option to disable SSL verification** (`ERS_SSL_VERIFY_PEER`)

These options are configurable via environment variables or the provided config file.

For all other base features and behavior, please refer to the [original documentation](https://github.com/facade/flare-client-php).

---

## 📦 Installation

Install via Composer:

```bash
composer require checkybot-labs/laravel-ers-client
```

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

