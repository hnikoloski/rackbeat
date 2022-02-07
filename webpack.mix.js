// webpack.mix.js

const mix = require("laravel-mix");

// mix.disableNotifications();

mix
    .options({
        processCssUrls: false,
    })
    .js('src/app.js', 'js')
    .sass('src/app.scss', 'css')
    .setPublicPath('dist')
    .minify(['dist/css/app.css', 'dist/js/app.js'])

