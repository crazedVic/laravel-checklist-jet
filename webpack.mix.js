const mix = require('laravel-mix');

mix.disableNotifications()

mix.js('resources/js/app.js', 'public/js')
    .sourceMaps()
    .postCss('resources/css/app.css', 'public/css', [
        require('postcss-import'),
        require('tailwindcss'),
    ]);

if (mix.inProduction()) {
    mix.version();
}
