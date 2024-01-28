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

mix.webpackConfig({
    module: {
        rules: [
            {
                test: /\.wav/,
                type: 'asset/resource',
                generator : {
                    filename : 'assets/audio/[hash][ext][query]',
                    emit: true, //disable copy audio files
                }
            }
        ]
    }
});

// mix.scripts([
//     // 'node_modules/bootstrap/dist/js/bootstrap.js',
//     'node_modules/bootstrap/dist/js/bootstrap.bundle.js',
//     'resources/js/background-confetti.js'
// ], 'public/js/main-footer.min.js');

// mix.scripts([
//     //'resources/js/bootstrap-color-modes.js',
//     'resources/js/mdb-color-modes.js',
// ], 'public/js/main-head.min.js');

mix.sass('resources/sass/app.scss', 'public/css');
mix.sass('resources/sass/games/snake/ipa-snake-game.scss', 'public/css');
//    .postCss('resources/css/app.css', 'public/css', [
//        //
//    ]);

mix.copyDirectory('resources/img', 'public/img');
// mix.copyDirectory('resources/assets/audio', 'public/assets/audio');
// mix.copyDirectory('node_modules/@fortawesome/fontawesome-free/webfonts', 'public/fonts/fontawesome');

mix.clean({
    cleanOnceBeforeBuildPatterns: ['./js/*', './css/*', './fonts/*', './img/*', './audio/*' ],
});

// adding version to files
if (mix.inProduction()) {
    mix.js('resources/js/main-head.js', 'public/js/main-head.min.js');
    mix.js('resources/js/main-footer.js', 'public/js/main-footer.min.js');
    mix.js('resources/js/games/snake/ipa-snake-game.js', 'public/js/ipa-snake-game.min.js');
    mix.js('resources/js/games/tetris/ipa-tetris-game.js', 'public/js/ipa-tetris-game.min.js');
    mix.version();
} else {
    mix.js('resources/js/main-head.js', 'public/js/main-head.min.js').sourceMaps();
    mix.js('resources/js/main-footer.js', 'public/js/main-footer.min.js').sourceMaps();
    mix.js('resources/js/games/snake/ipa-snake-game.js', 'public/js/ipa-snake-game.min.js').sourceMaps();
    mix.js('resources/js/games/tetris/ipa-tetris-game.js', 'public/js/ipa-tetris-game.min.js').sourceMaps();
}
