# SEO Tool For My Laravel Applications

[![Latest Version on Packagist](https://img.shields.io/packagist/v/devsrealm/seo_tool.svg?style=flat-square)](https://packagist.org/packages/devsrealm/seo_tool)
[![Total Downloads](https://img.shields.io/packagist/dt/devsrealm/seo_tool.svg?style=flat-square)](https://packagist.org/packages/devsrealm/seo_tool)


This is where your description should go. Limit it to a paragraph or two. Consider adding a small example.

## Support us


## Installation

You can install the package via composer:

```bash
composer require devsrealm/seo_tool
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --provider="Devsrealm\SeoTool\SeoToolServiceProvider" --tag="seo_tool-migrations"
php artisan migrate
```

You can publish the config file with:
```bash
php artisan vendor:publish --provider="Devsrealm\SeoTool\SeoToolServiceProvider" --tag="seo_tool-config"
```

This is the contents of the published config file:

```php
return [
];
```

## Usage

```php
$seo_tool = new Devsrealm\SeoTool();
echo $seo_tool->echoPhrase('Hello, Spatie!');
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [The_Devsrealm_Guy](https://github.com/devsrealm)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
