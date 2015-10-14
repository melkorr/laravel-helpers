# laravel-helpers
Useful Laravel helpers not found in the Laravel framework.

The only helper for now is a dump helper, the 'd' function that does a dump exactly like the laravel dd function, only it does not exit the code after.

To add to your project, add this to your 'composer.json' file and run 'composer install'.

"repositories": [
    {
        "type": "git",
        "url": "https://github.com/melkorr/laravel-helpers"
    }
],
"require-dev": {
    "melkorr/laravel-helpers": "dev-master"
},
