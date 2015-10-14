# Laravel Helpers
Useful Laravel helpers not found in the Laravel Framework.

The only helper for now is a dump helper, the  `d()` function that does a dump exactly like the laravel  `dd() ` function, only it does not exit the code after.

# Installation

To add to your project, add this to your `composer.json` file and run `composer install`.

```json
"repositories": [
    {
        "type": "git",
        "url": "https://github.com/melkorr/laravel-helpers"
    }
],
"require-dev": {
    "melkorr/laravel-helpers": "dev-master"
},
```