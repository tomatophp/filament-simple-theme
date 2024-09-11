![Screenshot](https://raw.githubusercontent.com/tomatophp/filament-simple-theme/master/arts/3x1io-tomato-simple-theme.jpg)

# Filament Simple Theme

[![Latest Stable Version](https://poser.pugx.org/tomatophp/filament-simple-theme/version.svg)](https://packagist.org/packages/tomatophp/filament-simple-theme)
[![License](https://poser.pugx.org/tomatophp/filament-simple-theme/license.svg)](https://packagist.org/packages/tomatophp/filament-simple-theme)
[![Downloads](https://poser.pugx.org/tomatophp/filament-simple-theme/d/total.svg)](https://packagist.org/packages/tomatophp/filament-simple-theme)

A simple theme for FilamentPHP

## Screenshots

![Dashboard](https://raw.githubusercontent.com/tomatophp/filament-simple-theme/master/arts/dashboard.png)
![User Menu](https://raw.githubusercontent.com/tomatophp/filament-simple-theme/master/arts/user-menu.png)
![Resource](https://raw.githubusercontent.com/tomatophp/filament-simple-theme/master/arts/resource.png)

## Installation

```bash
composer require tomatophp/filament-simple-theme
```
after install your package please run this command

```bash
php artisan filament-simple-theme:install
```

now run npm

```bash
npm i && npm run dev
```

finally register the plugin on `/app/Providers/Filament/AdminPanelProvider.php`

```php
->plugin(\TomatoPHP\FilamentSimpleTheme\FilamentSimpleThemePlugin::make())
```

## Publish Assets

you can publish config file by use this command

```bash
php artisan vendor:publish --tag="filament-simple-theme-config"
```

you can publish views file by use this command

```bash
php artisan vendor:publish --tag="filament-simple-theme-views"
```

you can publish languages file by use this command

```bash
php artisan vendor:publish --tag="filament-simple-theme-lang"
```

you can publish migrations file by use this command

```bash
php artisan vendor:publish --tag="filament-simple-theme-migrations"
```

## Support

you can join our discord server to get support [TomatoPHP](https://discord.gg/Xqmt35Uh)

## Docs

you can check docs of this package on [Docs](https://docs.tomatophp.com/plugins/laravel-package-generator)

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Security

Please see [SECURITY](SECURITY.md) for more information about security.

## Credits

- [Tomatophp](mailto:info@3x1.io)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
