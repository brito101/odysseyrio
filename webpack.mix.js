const mix = require("laravel-mix");
require("laravel-mix-purgecss");

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js("resources/js/app.js", "public/js")
    .copy("resources/img", "public/img")
    .sass("resources/sass/app.scss", "public/css")
    /** Admin */
    .scripts(["resources/js/company.js"], "public/js/company.js")
    .scripts(["resources/js/address.js"], "public/js/address.js")
    .scripts(["resources/js/phone.js"], "public/js/phone.js")
    .scripts(["resources/js/button-top.js"], "public/js/button-top.js")
    .scripts(["node_modules/bootstrap/dist/js/bootstrap.min.js"], "public/js/bootstrap.js")
    .options({
        processCssUrls: false,
    })
    /** Site */
    .sass("resources/sass/site/app.scss", "public/css/site/")
    .sourceMaps()
    .purgeCss();
