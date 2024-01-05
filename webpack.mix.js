const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

require('laravel-mix-clean');

mix.scripts([
    'node_modules/bootstrap/dist/js/bootstrap.bundle.js',
    'resources/js/app.js'
], 'public/js/main-footer.min.js');

mix.scripts([
    'resources/js/color-modes.js',
], 'public/js/main-head.min.js');

mix
    .sass('resources/sass/app.scss', 'public/css');
//    .postCss('resources/css/app.css', 'public/css', [
//        //
//    ]);

mix.copyDirectory('resources/img', 'public/img');
//mix.copyDirectory('node_modules/@fortawesome/fontawesome-free/webfonts', 'public/fonts/fontawesome');

mix.clean({
    cleanOnceBeforeBuildPatterns: ['./js/*', './css/*', './fonts/*', './img/*'],
});

// adding version to files
if (mix.inProduction()) {
    mix.version();
}
