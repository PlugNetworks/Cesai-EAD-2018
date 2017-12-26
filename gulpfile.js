var elixir = require('laravel-elixir');

elixir(function(mix) {
    mix.sass([
        '../../../resources/assets/sass/app.sass'

    ], 'public/dist/css/style.css');

    mix.version('public/dist/css/style.css');

    mix.styles([
        '../../../node_modules/font-awesome/css/font-awesome.css',
        '../../../resources/assets/lightbox/dist/css/lightbox.css'

    ], 'public/dist/css/main.css');

    mix.styles([
        '../../../node_modules/bootstrap/scss/bootstrap.scss',
    ], 'public/bootstrap/tema-alpha.4.css');

    mix.scripts([
        '../../../node_modules/popper.js/dist/popper.js'

    ], 'public/bootstrap/popper.js');

    mix.scripts([
        '../../../node_modules/jquery/dist/jquery.js'

    ], 'public/dist/js/jQuery.js');

    mix.scripts([
        '../../../resources/assets/lightbox/dist/js/lightbox.js'

    ], 'public/dist/js/lightbox.js');

    mix.copy('node_modules/font-awesome/fonts', 'public/dist/fonts');
    mix.copy('resources/assets/lightbox/dist/images', 'public/dist/images');
});
