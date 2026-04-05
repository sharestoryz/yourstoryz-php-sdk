# YourStoryz PHP SDK

[![Latest Version on Packagist](https://img.shields.io/packagist/v/sharestoryz/yourstoryz-php-sdk.svg?style=flat-square)](https://packagist.org/packages/sharestoryz/yourstoryz-php-sdk)
[![Tests](https://img.shields.io/github/actions/workflow/status/sharestoryz/yourstoryz-php-sdk/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/sharestoryz/yourstoryz-php-sdk/actions/workflows/run-tests.yml)
[![Total Downloads](https://img.shields.io/packagist/dt/sharestoryz/yourstoryz-php-sdk.svg?style=flat-square)](https://packagist.org/packages/sharestoryz/yourstoryz-php-sdk)

A PHP SDK for the [YourStoryz API](https://dashboard.yourstoryz.com/docs), built on top of [Saloon](https://docs.saloon.dev). Provides a fluent interface to interact with companies, departments, stories, users, and published videos.

## Support us

[<img src="https://github-ads.s3.eu-central-1.amazonaws.com/yourstoryz-php-sdk.jpg?t=1" width="419px" />](https://spatie.be/github-ad-click/yourstoryz-php-sdk)

We invest a lot of resources into creating [best in class open source packages](https://spatie.be/open-source). You can support us by [buying one of our paid products](https://spatie.be/open-source/support-us).

We highly appreciate you sending us a postcard from your hometown, mentioning which of our package(s) you are using. You'll find our address on [our contact page](https://spatie.be/about-us). We publish all received postcards on [our virtual postcard wall](https://spatie.be/open-source/postcards).

## Installation

You can install the package via composer:

```bash
composer require sharestoryz/yourstoryz-php-sdk
```

## Usage

### Initialization

```php
use YourStoryz\PhpSdk\YourStoryz;

$client = new YourStoryz('your-api-token');
```

### Companies

```php
// List all companies
$response = $client->companies()->all();

// Get a single company
$response = $client->companies()->get(id: 1);

// Get company settings
$response = $client->companies()->settings(companyId: 1);

// Get company departments
$response = $client->companies()->departments(companyId: 1);

// Get company stories
$response = $client->companies()->stories(companyId: 1);

// Get company published videos
$response = $client->companies()->publishedVideos(companyId: 1);
```

### Departments

```php
// List all departments
$response = $client->departments()->all();

// Get a single department
$response = $client->departments()->get(id: 1);

// Get department settings
$response = $client->departments()->settings(departmentId: 1);

// Get department stories
$response = $client->departments()->stories(departmentId: 1);

// Get department published videos
$response = $client->departments()->publishedVideos(departmentId: 1);
```

### Stories

```php
// List all stories
$response = $client->stories()->all();

// Get a single story
$response = $client->stories()->get(id: 1);

// Create a story
$response = $client->stories()->create();

// Update a story
$response = $client->stories()->update(id: 1);

// Delete a story
$response = $client->stories()->delete(id: 1);
```

### Users

```php
// Get the authenticated user
$response = $client->users()->me();

// Get user stories
$response = $client->users()->stories(userId: 1);

// Get user published videos
$response = $client->users()->publishedVideos(userId: 1);
```

### Published Videos

```php
// Get a single published video
$response = $client->publishedVideos()->get(id: 1);
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](https://github.com/spatie/.github/blob/main/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Jan Henk Hazelaar](https://github.com/jhhazelaar)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
