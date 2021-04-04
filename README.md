# SEO Tool For My Laravel Applications

[![Latest Version on Packagist](https://img.shields.io/packagist/v/devsrealm/seo_tool.svg?style=flat-square)](https://packagist.org/packages/devsrealm/seo_tool)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/devsrealm/seo_tool/run-tests?label=tests)](https://github.com/devsrealm/seo_tool/actions?query=workflow%3ATests+branch%3Amaster)
[![GitHub Code Style Action Status](https://img.shields.io/github/workflow/status/devsrealm/seo_tool/Check%20&%20fix%20styling?label=code%20style)](https://github.com/devsrealm/seo_tool/actions?query=workflow%3A"Check+%26+fix+styling"+branch%3Amaster)
[![Total Downloads](https://img.shields.io/packagist/dt/devsrealm/seo_tool.svg?style=flat-square)](https://packagist.org/packages/devsrealm/seo_tool)

[](delete) 1) manually replace `The_Devsrealm_Guy, devsrealm, auhor@domain.com, devsrealm, devsrealm, Vendor Name, seo-tool, seo_tool, seo_tool, SeoTool, SEO Tool For My Laravel Applications` with their correct values
[](delete) in `CHANGELOG.md, LICENSE.md, README.md, ExampleTest.php, ModelFactory.php, SeoTool.php, SeoToolCommand.php, SeoToolFacade.php, SeoToolServiceProvider.php, TestCase.php, composer.json, create_seo_tool_table.php.stub`
[](delete) and delete `configure-seo_tool.sh`

[](delete) 2) You can also run `./configure-seo_tool.sh` to do this automatically.

This is where your description should go. Limit it to a paragraph or two. Consider adding a small example.

## Support us

[<img src="https://github-ads.s3.eu-central-1.amazonaws.com/package-seo_tool-laravel.jpg?t=1" width="419px" />](https://spatie.be/github-ad-click/package-seo_tool-laravel)

We invest a lot of resources into creating [best in class open source packages](https://spatie.be/open-source). You can support us by [buying one of our paid products](https://spatie.be/open-source/support-us).

We highly appreciate you sending us a postcard from your hometown, mentioning which of our package(s) you are using. You'll find our address on [our contact page](https://spatie.be/about-us). We publish all received postcards on [our virtual postcard wall](https://spatie.be/open-source/postcards).

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
