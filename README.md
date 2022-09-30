# Laravel Storyblok - Typography plugin

[![Latest Version on Packagist](https://img.shields.io/packagist/v/riclep/laravel-storyblok-typography.svg?style=flat-square)](https://packagist.org/packages/riclep/laravel-storyblok-typography)
[![Total Downloads](https://img.shields.io/packagist/dt/riclep/laravel-storyblok-typography.svg?style=flat-square)](https://packagist.org/packages/riclep/laravel-storyblok-typography)
![GitHub Actions](https://github.com/riclep/laravel-storyblok-typography/actions/workflows/main.yml/badge.svg)

Make your content sing with enhanced typography thanks to [PHP Typography](https://github.com/mundschenk-at/php-typography). The package include a trait making it simple to apply typographic fixes such as proper quotes '' -> ‘’, small caps and useful class names for styling numbers etc.

## Installation

You can install the package via composer:

```bash
composer require riclep/laravel-storyblok-typography
```

## Usage

It’s really simple to use, just add the trait to any `Block`s you want to apply typography to. Create an `$applyTypography` property containing an array of fields. It will work for text and html content and has sensible defaults but you can override the settings on a `Block` by `Block` basis.

```php
<?php

namespace App\Storyblok;


use Riclep\Storyblok\Block as BaseBlock;
use Riclep\StoryblokTypography\Traits\AppliesTypography;

class Block extends BaseBlock
{
	use AppliesTypography;

	protected $applyTypography = ['Text', 'Html'];
}
```

[Read the docs for more](https://ls.sirric.co.uk/docs/2.13/typography).

### Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

### Security

If you discover any security related issues, please email ric@sirric.co.uk instead of using the issue tracker.

## Credits

-   [Richard Le Poidevin](https://github.com/riclep)
-   [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

## Laravel Package Boilerplate

This package was generated using the [Laravel Package Boilerplate](https://laravelpackageboilerplate.com).
