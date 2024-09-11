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
![Dark Dashboard](https://raw.githubusercontent.com/tomatophp/filament-simple-theme/master/arts/dashboard-dark.png)
![Dark Resource](https://raw.githubusercontent.com/tomatophp/filament-simple-theme/master/arts/resource-dark.png)

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

## Other Filament Packages

Checkout our [Awesome TomatoPHP](https://github.com/tomatophp/awesome)

