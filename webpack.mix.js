const { mix } = require('laravel-mix');

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

/**
 * Control css
 */
mix.styles([
    'resources/assets/myfont/font-jozoor/jozoor-font.css',
    'Modules/Admin/Assets/vendor/fontawesome/css/font-awesome.min.css',
    'Modules/Admin/Assets/vendor/simple-line-icons/css/simple-line-icons.css',
    'Modules/Admin/Assets/vendor/animate.css/animate.min.css',
    'Modules/Admin/Assets/vendor/whirl/dist/whirl.css',
    'Modules/Admin/Assets/vendor/weather-icons/css/weather-icons.min.css',
    'Modules/Admin/Assets/vendor/app/css/bootstrap.css',
    'Modules/Admin/Assets/vendor/app/css/custom-bootstrap-margin-padding.css',
    'Modules/Admin/Assets/vendor/jquery-ui/themes/smoothness/jquery-ui.min.css',
    'Modules/Admin/Assets/vendor/select2/dist/css/select2.css',
    'Modules/Admin/Assets/vendor/select2-bootstrap-theme/dist/select2-bootstrap.css',
    'Modules/Admin/Assets/vendor/custom.datatable/media/css/dataTables.bootstrap.css',
    'Modules/Admin/Assets/vendor/custom.datatable/extensions/FixedColumns/css/fixedColumns.bootstrap.css',
    'Modules/Admin/Assets/vendor/custom.datatable/extensions/Responsive/css/responsive.bootstrap.css',
    'Modules/Admin/Assets/vendor/custom.datatable/extensions/Buttons/css/buttons.bootstrap.css',
    'Modules/Admin/Assets/vendor/sweetalert/dist/sweetalert2.min.css',
    'Modules/Admin/Assets/vendor/bootstrap-fileinput/css/fileinput.css',
    'Modules/Admin/Assets/vendor/cropper/dist/cropper.css',
    'Modules/Admin/Assets/vendor/dragula/dragula.css',
    'node_modules/loaders.css/loaders.css',
    'Aut/DataTable/src/Assets/css/ltr/datatables-custom-ltr.css',
    'Aut/DataTable/src/Assets/css/shared/datatables-custom.css',
    'Modules/Admin/Assets/vendor/app/css/app.css',
    'Modules/Admin/Assets/vendor/preloader/preloader.scss',

], 'public/css/admin-all-ltr.css').version();

mix.styles([
    'resources/assets/myfont/font-jozoor/jozoor-font.css',
    'Modules/Admin/Assets/vendor/fontawesome/css/font-awesome.min.css',
    'Modules/Admin/Assets/vendor/simple-line-icons/css/simple-line-icons.css',
    'Modules/Admin/Assets/vendor/animate.css/animate.min.css',
    'Modules/Admin/Assets/vendor/whirl/dist/whirl.css',
    'Modules/Admin/Assets/vendor/weather-icons/css/weather-icons.min.css',
    'Modules/Admin/Assets/vendor/app/css/bootstrap-rtl.css',
    'Modules/Admin/Assets/vendor/app/css/custom-bootstrap-margin-padding.css',
    'Modules/Admin/Assets/vendor/jquery-ui/themes/smoothness/jquery-ui.min.css',
    'Modules/Admin/Assets/vendor/select2/dist/css/select2.css',
    'Modules/Admin/Assets/vendor/select2-bootstrap-theme/dist/select2-bootstrap.css',
    'Modules/Admin/Assets/vendor/custom.datatable/media/css/dataTables.bootstrap.css',
    'Modules/Admin/Assets/vendor/custom.datatable/extensions/FixedColumns/css/fixedColumns.bootstrap.css',
    'Modules/Admin/Assets/vendor/custom.datatable/extensions/Responsive/css/responsive.bootstrap.css',
    'Modules/Admin/Assets/vendor/custom.datatable/extensions/Buttons/css/buttons.bootstrap.css',
    'Modules/Admin/Assets/vendor/sweetalert/dist/sweetalert2.min.css',
    'Modules/Admin/Assets/vendor/bootstrap-fileinput/css/fileinput.css',
    'Modules/Admin/Assets/vendor/bootstrap-fileinput/css/fileinput-rtl.css',
    'Modules/Admin/Assets/vendor/cropper/dist/cropper.css',
    'Modules/Admin/Assets/vendor/dragula/dragula.css',
    'node_modules/loaders.css/loaders.css',
    'Aut/DataTable/src/Assets/css/rtl/datatables-custom-rtl.css',
    'Aut/DataTable/src/Assets/css/shared/datatables-custom.css',
    'Modules/Admin/Assets/vendor/app/css/app-rtl.css',
    'Modules/Admin/Assets/vendor/preloader/preloader.scss',

], 'public/css/admin-all-rtl.css').version();


/**
 * Control Js
 */
var js = [
    'Modules/Admin/Assets/vendor/modernizr/modernizr.custom.js',
    'Modules/Admin/Assets/vendor/matchMedia/matchMedia.js',
    'Modules/Admin/Assets/vendor/jquery/dist/jquery.js',
    // 'Modules/Admin/Assets/vendor/interact/interact.min.js',
    'Modules/Admin/Assets/vendor/jquery-ui/jquery-ui.js',
    'Aut/DataTable/src/Assets/js/jquery-request-types.js',
    'node_modules/jquery-validation/dist/jquery.validate.js',
    'node_modules/lodash/lodash.js',
    'node_modules/jspath/lib/jspath.js',
    'Modules/Admin/Assets/vendor/bootstrap/dist/js/bootstrap.js',
    'Modules/Admin/Assets/vendor/jQuery-Storage-API/jquery.storageapi.js',
    'Modules/Admin/Assets/vendor/jquery.easing/js/jquery.easing.js',
    'Modules/Admin/Assets/vendor/animo.js/animo.js',
    'Modules/Admin/Assets/vendor/slimScroll/jquery.slimscroll.min.js',
    'Modules/Admin/Assets/vendor/screenfull/dist/screenfull.js',
    'Modules/Admin/Assets/vendor/jquery-localize-i18n/dist/jquery.localize.js',
    'Modules/Admin/Assets/vendor/app/js/demo/demo-rtl.js',
    'Modules/Admin/Assets/vendor/sparkline/index.js',
    'Modules/Admin/Assets/vendor/Flot/jquery.flot.js',
    'Modules/Admin/Assets/vendor/flot.tooltip/js/jquery.flot.tooltip.min.js',
    'Modules/Admin/Assets/vendor/jquery.flot.resize.js',
    'Modules/Admin/Assets/vendor/jquery.flot.pie.js',
    'Modules/Admin/Assets/vendor/jquery.flot.time.js',
    'Modules/Admin/Assets/vendor/jquery.flot.categories.js',
    'Modules/Admin/Assets/vendor/flot-spline/js/jquery.flot.spline.min.js',
    'Modules/Admin/Assets/vendor/jquery-classyloader/js/jquery.classyloader.min.js',
    'Modules/Admin/Assets/vendor/moment/min/moment-with-locales.min.js',
    'Modules/Admin/Assets/vendor/app/js/demo/demo-flot.js',
    'Modules/Admin/Assets/vendor/custom.datatable/media/js/jquery.dataTables.js',
    'Modules/Admin/Assets/vendor/custom.datatable/media/js/dataTables.bootstrap.js',
    'Modules/Admin/Assets/vendor/custom.datatable/extensions/Buttons/js/dataTables.buttons.js',
    'Modules/Admin/Assets/vendor/custom.datatable/extensions/Buttons/js/buttons.bootstrap.js',
    'Modules/Admin/Assets/vendor/custom.datatable/extensions/Buttons/js/buttons.colVis.js',

    // test
    // 'Modules/Admin/Assets/vendor/custom.datatable/extensions/Buttons/js/buttons.flash.js',
    // 'Modules/Admin/Assets/vendor/jszip/jszip.min.js',
    // 'Modules/Admin/Assets/vendor/pdfmake/pdfmake.min.js',
    // 'Modules/Admin/Assets/vendor/pdfmake/vfs_fonts.js',
    // 'Modules/Admin/Assets/vendor/custom.datatable/extensions/Buttons/js/buttons.print.js',
    // 'Modules/Admin/Assets/vendor/custom.datatable/extensions/Buttons/js/buttons.html5.js',

    'Modules/Admin/Assets/vendor/custom.datatable/extensions/Responsive/js/dataTables.responsive.js',
    'Modules/Admin/Assets/vendor/custom.datatable/extensions/Responsive/js/responsive.bootstrap.js',
    'Modules/Admin/Assets/vendor/custom.datatable/extensions/FixedColumns/js/dataTables.fixedColumns.js',
    'Aut/DataTable/src/Assets/js/datatable.js',
    'Modules/Admin/Assets/vendor/sweetalert/dist/sweetalert2.min.js',
    'Modules/Admin/Assets/vendor/select2/dist/js/select2.js',
    'Modules/Admin/Assets/vendor/jquery-pjax/jquery.pjax.js',
    'Modules/Admin/Assets/vendor/pace/pace.min.js',
    'Modules/Admin/Assets/vendor/preloader/preloader.js',

    'Modules/Admin/Assets/vendor/bootstrap-fileinput/js/fileinput.js',
    'Modules/Admin/Assets/vendor/bootstrap-fileinput/themes/fa/theme.js',
    'Modules/Admin/Assets/vendor/cropper/dist/cropper.js',
    'Modules/Admin/Assets/vendor/dragula/dragula.js',


    // 'Modules/Admin/Assets/vendor/nestable/jquery.nestable.js',
    'Modules/Admin/Assets/vendor/jquery.inputmask/dist/jquery.inputmask.bundle.js',
    'Modules/Admin/Assets/vendor/jQuery-gMap/jquery.gmap.min.js',
    // 'Modules/Admin/Assets/vendor/app/js/app.js',
    //'public/formBuilder/dist/form-builder.min.js',
    // 'public/formBuilder/dist/form-render.min.js'
    // 'Modules/Admin/Assets/vendor/app/js/app.js'
];

mix.scripts(js.concat([
    'Modules/Admin/Assets/vendor/bootstrap-fileinput/js/locales/en.js',
    'Modules/Admin/Assets/vendor/select2/dist/js/i18n/en.js',
]), 'public/js/admin-all-ltr.js').version();

mix.scripts(js.concat([
    'Modules/Admin/Assets/vendor/bootstrap-fileinput/js/locales/ar.js',
    'Modules/Admin/Assets/vendor/select2/dist/js/i18n/ar.js',
    'Modules/Admin/Assets/vendor/jquery-validation/dist/localization/messages_ar.js',
]), 'public/js/admin-all-rtl.js').version();

/**
 * control copy font,image
 */
mix.copy('Modules/Admin/Assets/vendor/ckeditor', 'public/ckeditor' ,false);
mix.copy('Aut/FileManager/src/Assets', 'public/filemanager' ,false);
mix.copy('Modules/Admin/Assets/vendor/app/css/theme-*.css', 'public/css');

mix.copy('Modules/Admin/Assets/vendor/jQuery-gMap/marker_red.png', 'public/images' ,false);
mix.copy('Modules/Admin/Assets/vendor/app/i18n', 'public/i18n');

// mix.copy('Modules/Admin/Assets/vendor/jquery-ui/themes/smoothness/images', 'public/css/images');
mix.copy('Modules/Admin/Assets/vendor/img', 'public/img' ,false);
mix.copy('Modules/Admin/Assets/vendor/bootstrap-fileinput/img', 'public/img' ,false);

mix.copy('Modules/Admin/Assets/vendor/simple-line-icons/fonts', 'public/fonts');
mix.copy('Modules/Admin/Assets/vendor/fontawesome/fonts', 'public/fonts');
mix.copy('resources/assets/myfont/font-jozoor/fonts', 'public/css/fonts' ,false);


/**
 * Login Css
 */
mix.styles([
    'resources/assets/myfont/font-jozoor/jozoor-font.css',
    'Modules/Admin/Assets/vendor/fontawesome/css/font-awesome.min.css',
    'Modules/Admin/Assets/vendor/simple-line-icons/css/simple-line-icons.css',
    'Modules/Admin/Assets/vendor/app/css/bootstrap.css',
    'Modules/Admin/Assets/vendor/loaders.css/loaders.css',
    'Modules/Admin/Assets/vendor/animate.css/animate.min.css',
    'Modules/Admin/Assets/vendor/app/css/app.css',
], 'public/css/admin-login.css').version();

/**
 * Login js
 */
var loginJs = [
    'Modules/Admin/Assets/vendor/modernizr/modernizr.custom.js',
    'Modules/Admin/Assets/vendor/jquery/dist/jquery.js',
    'Modules/Admin/Assets/vendor/bootstrap/dist/js/bootstrap.js',
    'Modules/Admin/Assets/vendor/jQuery-Storage-API/jquery.storageapi.js',
];

mix.scripts(loginJs.concat([
    'node_modules/jquery-validation/dist/jquery.validate.js',
]), 'public/js/admin-login-ltr.js').version();

mix.scripts(loginJs.concat([
    'node_modules/jquery-validation/dist/jquery.validate.js',
    'Modules/Admin/Assets/vendor/jquery-validation/dist/localization/messages_ar.js',
]), 'public/js/admin-login-rtl.js').version();

/**
 * theme css
 */

mix.styles([
    'resources/assets/css/bootstrap.min.css',
    'resources/assets/css/jquery-ui.min.css',
    'resources/assets/css/animate.css',
    'resources/assets/css/css-plugin-collections.css',
    // CSS | menuzord megamenu skins
    'resources/assets/css/menuzord-skins/menuzord-rounded-boxed.css',
    // CSS | Preloader Styles
    'resources/assets/css/preloader.css',
    // CSS | Custom Margin Padding Collection
    'resources/assets/css/custom-bootstrap-margin-padding.css',
    // CSS | Responsive media queries
    'resources/assets/css/responsive.css',
    // CSS | Main style file
    'resources/assets/css/style-main.css',

], 'public/css/theme-ltr.css').version();

mix.styles([
    'resources/assets/js/revolution-slider/css/settings.css',
    'resources/assets/js/revolution-slider/css/layers.css',
    'resources/assets/js/revolution-slider/css/navigation.css',
], 'public/js/revolution-slider/css/revolution-slider.css').version();

/**
 * theme js
 */

mix.scripts([
    'resources/assets/js/revolution-slider/js/jquery.themepunch.tools.min.js',
    'resources/assets/js/revolution-slider/js/jquery.themepunch.revolution.min.js',
], 'public/js/revolution-slider/js/revolution-slider.js').version();

mix.scripts([
    'resources/assets/js/revolution-slider/js/extensions/revolution.extension.actions.min.js',
    'resources/assets/js/revolution-slider/js/extensions/revolution.extension.carousel.min.js',
    'resources/assets/js/revolution-slider/js/extensions/revolution.extension.kenburn.min.js',
    'resources/assets/js/revolution-slider/js/extensions/revolution.extension.layeranimation.min.js',
    'resources/assets/js/revolution-slider/js/extensions/revolution.extension.migration.min.js',
    'resources/assets/js/revolution-slider/js/extensions/revolution.extension.navigation.min.js',
    'resources/assets/js/revolution-slider/js/extensions/revolution.extension.parallax.min.js',
    'resources/assets/js/revolution-slider/js/extensions/revolution.extension.slideanims.min.js',
    'resources/assets/js/revolution-slider/js/extensions/revolution.extension.video.min.js',
], 'public/js/revolution-slider/js/extensions/revolution-slider-extensions.js').version();

mix.scripts([
    'resources/assets/js/html5shiv.min.js',
    'resources/assets/js/respond.min.js',
], 'public/js/ie.js').version();

mix.scripts([
    // external javascripts
    'resources/assets/js/jquery.min.js',
    'resources/assets/js/jquery-ui.min.js',
    'resources/assets/js/bootstrap.min.js',

    // JS | jquery plugin collection for this theme
    'resources/assets/js/jquery-plugin-collection.js',
    // JS | Custom script for all pages
    'resources/assets/js/custom.js',
], 'public/js/main.js').version();

mix.copy('resources/assets', 'public' ,false);