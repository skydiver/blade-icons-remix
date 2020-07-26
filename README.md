# Blade Icons: Remix Icon
> Use Remix Icon with Blade Icons

## Credits
Icons made by [Remix-Design](https://github.com/Remix-Design/remixicon)

For more information visit https://remixicon.com/

## Requirements
- PHP 7.2 or higher
- Laravel 7.14 or higher

## Installation
```bash
composer require skydiver/blade-icons-remix
```

## Usage
1. goto https://remixicon.com/ and search for your icon
2. use Blade components tag with `<x-remix-` prefix and icon name.
3. if the icon is called `ri-briefcase-4-line` your component will be named `<x-remix-briefcase-4-line />`

Icons can be used a self-closing Blade components which will be compiled to SVG icons:
```blade
<x-remix-hand-sanitizer-fill />
```

You can also pass classes to your icon components:

```blade
<x-remix-ship-fill class="w-6 h-6 text-red-400 fill-current"/>
```

And even use inline styles:
```blade
<x-remix-home-heart-line style="width:64px; height:64px; fill:red" />
```

### Raw SVG Icons
If you want to use the raw SVG icons as assets, you can publish them using:
```bash
php artisan vendor:publish --tag=blade-icons-remix --force
```

Then use them in your views like:
```blade
<img src="{{ asset('vendor/blade-icons-remix/o-adjustments.svg') }}" width="10" height="10"/>
```

### Blade Icons
Blade Icons Remix uses Blade Icons under the hood. Please refer to [the Blade Icons readme](https://github.com/blade-ui-kit/blade-icons) for additional functionality.

## License
Blade Heroicons is open-sourced software licensed under [the MIT license](LICENSE.md).
