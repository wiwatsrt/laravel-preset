# 🚀 Laravel Tailwind CSS Preset.

A Laravel frontend preset that scaffolds out new applications.

What it includes:

- [Tailwind CSS](https://tailwindcss.com)
- [postcss-nesting](https://github.com/jonathantneal/postcss-nesting) for nested CSS support
- [Purgecss](https://www.purgecss.com/), via [spatie/laravel-mix-purgecss](https://github.com/spatie/laravel-mix-purgecss)
- [Vue.js](https://vuejs.org/)
- Removes Bootstrap and jQuery
- Adds compiled assets to `.gitignore`
- Adds a simple Tailwind-tuned default layout template
- Replaces the `welcome.blade.php` template with one that extends the main layout

## Installation

This package isn't on Packagist (yet), so to get started, add it as a repository to your `composer.json` file:

```json
"repositories": [
    {
        "type": "vcs",
        "url": "https://github.com/wiwatsrt/laravel-tailwindcss-preset"
    }
]
```

Next, run this command to add the preset to your project:

```
composer require wiwatsrt/laravel-tailwindcss-preset --dev
```

Finally, apply the scaffolding by running:

```
php artisan preset tailwindcss
```
