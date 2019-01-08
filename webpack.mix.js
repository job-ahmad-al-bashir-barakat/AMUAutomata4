const { mix } = require('laravel-mix');

/**
 * Control css
 */
mix.styles([
    // fonts
    'resources/assets/fonts/font-jozoor/jozoor-font.css',
    'Modules/Admin/Assets/vendor/fontawesome/css/font-awesome.min.css',
    'Modules/Admin/Assets/vendor/weather-icons/css/weather-icons.min.css',
    'Modules/Admin/Assets/vendor/simple-line-icons/css/simple-line-icons.css',
    // animate
    'Modules/Admin/Assets/vendor/animate.css/animate.min.css',
    'Modules/Admin/Assets/vendor/whirl/dist/whirl.css',
    'node_modules/loaders.css/loaders.css',
    // bootstrap
    'Modules/Admin/Assets/vendor/app/css/bootstrap.css',
    'Modules/Admin/Assets/vendor/app/css/custom-bootstrap-margin-padding.css',
    // jquery ui
    'Modules/Admin/Assets/vendor/jquery-ui/themes/smoothness/jquery-ui.min.css',
    // select2
    'Aut/Autocomplete/src/Assets/plugin/select2/css/select2.css',
    'Aut/Autocomplete/src/Assets/plugin/select2-bootstrap-theme/select2-bootstrap.css',
    // bootstrap-tagsinput
    'Aut/FormComponent/src/Assets/plugin/bootstrap-tagsinput/dist/bootstrap-tagsinput.css',
    // datatable
    'Aut/DataTable/src/Assets/plugin/datatable/media/css/dataTables.bootstrap.css',
    'Aut/DataTable/src/Assets/plugin/datatable/extensions/FixedColumns/css/fixedColumns.bootstrap.css',
    'Aut/DataTable/src/Assets/plugin/datatable/extensions/Responsive/css/responsive.bootstrap.css',
    'Aut/DataTable/src/Assets/plugin/datatable/extensions/Buttons/css/buttons.bootstrap.css',
    // x-editable
    'Modules/Admin/Assets/vendor/x-editable/dist/bootstrap3-editable/css/bootstrap-editable.css',
    // fileupload
    'Aut/FileUpload/src/Assets/plugin/bootstrap-fileinput/css/fileinput.css',
    'Aut/FileUpload/src/Assets/plugin/cropper/cropper.css',
    'Aut/FileUpload/src/Assets/plugin/lity/lity.css',
    // plugin
    'Modules/Admin/Assets/vendor/sweetalert/dist/sweetalert2.min.css',
    'Modules/Admin/Assets/vendor/dragula/dragula.css',
    // custom
    'Aut/DataTable/src/Assets/css/ltr/datatables-custom-ltr.css',
    'Aut/DataTable/src/Assets/css/shared/datatables-custom.css',
    // Gmap
    'Aut/GoogleMap/src/Assets/css/GMap.css',

    'Modules/Admin/Assets/vendor/app/css/app.css',
    'Modules/Admin/Assets/vendor/preloader/preloader.scss'

], 'public/css/admin-all-ltr.css');

mix.styles([

    // fonts
    'resources/assets/fonts/font-jozoor/jozoor-font.css',
    'Modules/Admin/Assets/vendor/fontawesome/css/font-awesome.min.css',
    'Modules/Admin/Assets/vendor/weather-icons/css/weather-icons.min.css',
    'Modules/Admin/Assets/vendor/simple-line-icons/css/simple-line-icons.css',
    // animate
    'Modules/Admin/Assets/vendor/animate.css/animate.min.css',
    'Modules/Admin/Assets/vendor/whirl/dist/whirl.css',
    'node_modules/loaders.css/loaders.css',
    // bootstrap
    'Modules/Admin/Assets/vendor/app/css/bootstrap-rtl.css',
    'Modules/Admin/Assets/vendor/app/css/custom-bootstrap-margin-padding.css',
    // jquery ui
    'Modules/Admin/Assets/vendor/jquery-ui/themes/smoothness/jquery-ui.min.css',
    // select2
    'Aut/Autocomplete/src/Assets/plugin/select2/css/select2.css',
    'Aut/Autocomplete/src/Assets/plugin/select2-bootstrap-theme/select2-bootstrap.css',
    // bootstrap-tagsinput
    'Aut/FormComponent/src/Assets/plugin/bootstrap-tagsinput/dist/bootstrap-tagsinput.css',
    // datatable
    'Aut/DataTable/src/Assets/plugin/datatable/media/css/dataTables.bootstrap.css',
    'Aut/DataTable/src/Assets/plugin/datatable/extensions/FixedColumns/css/fixedColumns.bootstrap.css',
    'Aut/DataTable/src/Assets/plugin/datatable/extensions/Responsive/css/responsive.bootstrap.css',
    'Aut/DataTable/src/Assets/plugin/datatable/extensions/Buttons/css/buttons.bootstrap.css',
    // x-editable
    'Modules/Admin/Assets/vendor/x-editable/dist/bootstrap3-editable/css/bootstrap-editable.css',
    // fileupload
    'Aut/FileUpload/src/Assets/plugin/bootstrap-fileinput/css/fileinput.css',
    'Aut/FileUpload/src/Assets/plugin/bootstrap-fileinput/css/fileinput-rtl.css',
    'Aut/FileUpload/src/Assets/plugin/cropper/cropper.css',
    // plugin
    'Modules/Admin/Assets/vendor/sweetalert/dist/sweetalert2.min.css',
    'Modules/Admin/Assets/vendor/dragula/dragula.css',
    // custom
    'Aut/DataTable/src/Assets/css/rtl/datatables-custom-rtl.css',
    'Aut/DataTable/src/Assets/css/shared/datatables-custom.css',
    // Gmap
    'Aut/GoogleMap/src/Assets/css/GMap.css',

    'Modules/Admin/Assets/vendor/app/css/app-rtl.css',
    'Modules/Admin/Assets/vendor/preloader/preloader.scss',

], 'public/css/admin-all-rtl.css');

/**
 * Control Js
 */

var js = [

    'Modules/Admin/Assets/vendor/modernizr/modernizr.custom.js',
    'Modules/Admin/Assets/vendor/matchMedia/matchMedia.js',
    // jquery
    'Modules/Admin/Assets/vendor/jquery/dist/jquery.js',
    'Modules/Admin/Assets/vendor/jquery-ui/jquery-ui.js',
    'Aut/DataTable/src/Assets/js/jquery-request-types.js',
    'Aut/FormComponent/src/Assets/plugin/jquery-validation/dist/jquery.validate.js',
    // theme lib
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
    // datatable
    'Aut/DataTable/src/Assets/plugin/datatable/media/js/jquery.dataTables.js',
    'Aut/DataTable/src/Assets/plugin/datatable/media/js/dataTables.bootstrap.js',
    'Aut/DataTable/src/Assets/plugin/datatable/extensions/Buttons/js/dataTables.buttons.js',
    'Aut/DataTable/src/Assets/plugin/datatable/extensions/Buttons/js/buttons.bootstrap.js',
    'Aut/DataTable/src/Assets/plugin/datatable/extensions/Buttons/js/buttons.colVis.js',
    'Aut/DataTable/src/Assets/plugin/datatable/extensions/Responsive/js/dataTables.responsive.js',
    'Aut/DataTable/src/Assets/plugin/datatable/extensions/Responsive/js/responsive.bootstrap.js',
    'Aut/DataTable/src/Assets/plugin/datatable/extensions/FixedColumns/js/dataTables.fixedColumns.js',
    // x-editable
    'Modules/Admin/Assets/vendor/x-editable/dist/bootstrap3-editable/js/bootstrap-editable.js',
    // datatable button print ... et
    // 'Modules/Admin/Assets/vendor/custom.datatable/extensions/Buttons/js/buttons.flash.js',
    // 'Modules/Admin/Assets/vendor/jszip/jszip.min.js',
    // 'Modules/Admin/Assets/vendor/pdfmake/pdfmake.min.js',
    // 'Modules/Admin/Assets/vendor/pdfmake/vfs_fonts.js',
    // 'Modules/Admin/Assets/vendor/custom.datatable/extensions/Buttons/js/buttons.print.js',
    // 'Modules/Admin/Assets/vendor/custom.datatable/extensions/Buttons/js/buttons.html5.js',

    // helper lib
    'node_modules/lodash/lodash.js',
    'node_modules/jspath/lib/jspath.js',
    // plugin
    'Modules/Admin/Assets/vendor/sweetalert/dist/sweetalert2.min.js',
    'Aut/Autocomplete/src/Assets/plugin/select2/js/select2.js',
    'Modules/Admin/Assets/vendor/jquery-pjax/jquery.pjax.js',
    'Modules/Admin/Assets/vendor/pace/pace.min.js',
    'Aut/FileUpload/src/Assets/plugin/bootstrap-fileinput/js/fileinput.js',
    'Aut/FileUpload/src/Assets/plugin/bootstrap-fileinput/themes/fa/theme.js',
    'Aut/FileUpload/src/Assets/plugin/cropper/cropper.js',
    'Aut/FileUpload/src/Assets/plugin/lity/lity.js',
    'Aut/FileUpload/src/Assets/plugin/jquery.panzoom/jquery.panzoom.js',
    'Modules/Admin/Assets/vendor/dragula/dragula.js',
    'Modules/Admin/Assets/vendor/nestable/jquery.nestable.js',
    'Modules/Admin/Assets/vendor/jquery.inputmask/dist/jquery.inputmask.bundle.js',
    'Aut/FormComponent/src/Assets/plugin/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js',
    'Aut/GoogleMap/src/Assets/plugin/jQuery-gMap/jquery.gmap.min.js',

    // custom
    'Aut/GoogleMap/src/Assets/js/GMap.js',
    'Aut/FormComponent/src/Assets/js/form-component.js',
    'Aut/FileUpload/src/Assets/file-upload.js',
    'Aut/Autocomplete/src/Assets/js/autocomplete.js',
    'Aut/TreeView/src/Assets/js/tree-view.js',
    'Aut/DataTable/src/Assets/js/datatable.js',
    // 'public/formBuilder/dist/form-builder.min.js',
    // 'public/formBuilder/dist/form-render.min.js'
    'Modules/Admin/Assets/vendor/preloader/preloader.js',
    'Modules/Admin/Assets/vendor/app/js/app.js'
];

mix.scripts(js.concat([
    'Aut/FileUpload/src/Assets/plugin/bootstrap-fileinput/js/locales/en.js',
    'Aut/Autocomplete/src/Assets/plugin/select2/js/i18n/en.js',
]), 'public/js/admin-all-ltr.js');

mix.scripts(js.concat([
    'Aut/FileUpload/src/Assets/plugin/bootstrap-fileinput/js/locales/ar.js',
    'Aut/Autocomplete/src/Assets/plugin/select2/js/i18n/ar.js',
    'Aut/FormComponent/src/Assets/plugin/jquery-validation/dist/localization/messages_ar.js'
]), 'public/js/admin-all-rtl.js');

// datatable for others
// mix.scripts([
//     'Aut/DataTable/src/Assets/plugin/datatable/media/js/jquery.dataTables.js',
//     'Aut/DataTable/src/Assets/plugin/datatable/media/js/dataTables.bootstrap.js',
//     'Aut/DataTable/src/Assets/plugin/datatable/extensions/Buttons/js/dataTables.buttons.js',
//     'Aut/DataTable/src/Assets/plugin/datatable/extensions/Buttons/js/buttons.bootstrap.js',
//     'Aut/DataTable/src/Assets/plugin/datatable/extensions/Buttons/js/buttons.colVis.js',
//     'Aut/DataTable/src/Assets/plugin/datatable/extensions/Responsive/js/dataTables.responsive.js',
//     'Aut/DataTable/src/Assets/plugin/datatable/extensions/Responsive/js/responsive.bootstrap.js',
//     'Aut/DataTable/src/Assets/plugin/datatable/extensions/FixedColumns/js/dataTables.fixedColumns.js',
//     'Modules/Admin/Assets/vendor/sweetalert/dist/sweetalert2.min.js',
//     'node_modules/lodash/lodash.js',
//     'node_modules/jspath/lib/jspath.js',
//     'Aut/DataTable/src/Assets/js/datatable.js',
// ], 'public/datatable/datatable.js');
// mix.styles([
//     'Modules/Admin/Assets/vendor/sweetalert/dist/sweetalert2.min.css',
//     'Aut/DataTable/src/Assets/plugin/datatable/media/css/dataTables.bootstrap.css',
//     'Aut/DataTable/src/Assets/plugin/datatable/extensions/FixedColumns/css/fixedColumns.bootstrap.css',
//     'Aut/DataTable/src/Assets/plugin/datatable/extensions/Responsive/css/responsive.bootstrap.css',
//     'Aut/DataTable/src/Assets/plugin/datatable/extensions/Buttons/css/buttons.bootstrap.css',
//     'Aut/DataTable/src/Assets/css/ltr/datatables-custom-ltr.css',
//     'Aut/DataTable/src/Assets/css/shared/datatables-custom.css',
// ], 'public/datatable/datatable-ltr.css');
// mix.styles([
//     'Modules/Admin/Assets/vendor/sweetalert/dist/sweetalert2.min.css',
//     'Aut/DataTable/src/Assets/plugin/datatable/media/css/dataTables.bootstrap.css',
//     'Aut/DataTable/src/Assets/plugin/datatable/extensions/FixedColumns/css/fixedColumns.bootstrap.css',
//     'Aut/DataTable/src/Assets/plugin/datatable/extensions/Responsive/css/responsive.bootstrap.css',
//     'Aut/DataTable/src/Assets/plugin/datatable/extensions/Buttons/css/buttons.bootstrap.css',
//     'Aut/DataTable/src/Assets/css/rtl/datatables-custom-rtl.css',
//     'Aut/DataTable/src/Assets/css/shared/datatables-custom.css',
// ], 'public/datatable/datatable-rtl.css');

/**
 * control copy font,image
 */
mix.copy('Modules/Admin/Assets/vendor/laravel-filemanager', 'public/vendor/laravel-filemanager' ,false);
mix.copy('Modules/Admin/Assets/vendor/ckeditor', 'public/ckeditor' ,false);
mix.copy('Modules/Admin/Assets/vendor/app/css/theme-*.css', 'public/css');
mix.copy('Modules/Admin/Assets/theme-custom.css', 'public');
mix.copy('node_modules/leaflet/dist/leaflet.css', 'public/css');
mix.copy('node_modules/leaflet/dist/leaflet.js', 'public/js');

mix.copy('Aut/GoogleMap/src/Assets/plugin/jQuery-gMap/marker_red.png', 'public/images' ,false);
mix.copy('Aut/GoogleMap/src/Assets/plugin/jQuery-gMap/marker_red.png', 'public/css/images/marker-icon.png' ,false);
mix.copy('node_modules/leaflet/dist/images/marker-shadow.png', 'public/css/images/' ,false);
mix.copy('Modules/Admin/Assets/vendor/app/i18n', 'public/i18n');

// mix.copy('Modules/Admin/Assets/vendor/jquery-ui/themes/smoothness/images', 'public/css/images');
mix.copy('Modules/Admin/Assets/vendor/img', 'public/img' ,false);
mix.copy('Modules/Admin/Assets/vendor/images', 'public/images' ,false);
mix.copy('Aut/FileUpload/src/Assets/plugin/bootstrap-fileinput/img', 'public/img' ,false);
mix.copy('Aut/FileUpload/src/Assets/img/mb-sample.jpg', 'public/img' ,false);

mix.copy('Modules/Admin/Assets/vendor/fontawesome/fonts', 'public/fonts');
mix.copy('Modules/Admin/Assets/vendor/simple-line-icons/fonts', 'public/fonts');
mix.copy('Modules/Admin/Assets/vendor/simple-line-icons/css/simple-line-icons.css', 'public/css');
mix.copy('Modules/Admin/Assets/vendor/weather-icons/font', 'public/font' ,false);
mix.copy('resources/assets/fonts/font-jozoor/fonts', 'public/css/fonts' ,false);



/**
 * Login Css
 */
mix.styles([
    'resources/assets/fonts/font-jozoor/jozoor-font.css',
    'Modules/Admin/Assets/vendor/fontawesome/css/font-awesome.min.css',
    'Modules/Admin/Assets/vendor/simple-line-icons/css/simple-line-icons.css',
    'Modules/Admin/Assets/vendor/app/css/bootstrap.css',
    'Modules/Admin/Assets/vendor/loaders.css/loaders.css',
    'Modules/Admin/Assets/vendor/animate.css/animate.min.css',
    'Modules/Admin/Assets/vendor/app/css/app.css',
], 'public/css/admin-membership-ltr.css');

mix.styles([
    'resources/assets/fonts/font-jozoor/jozoor-font.css',
    'Modules/Admin/Assets/vendor/fontawesome/css/font-awesome.min.css',
    'Modules/Admin/Assets/vendor/simple-line-icons/css/simple-line-icons.css',
    'Modules/Admin/Assets/vendor/app/css/bootstrap-rtl.css',
    'Modules/Admin/Assets/vendor/loaders.css/loaders.css',
    'Modules/Admin/Assets/vendor/animate.css/animate.min.css',
    'Modules/Admin/Assets/vendor/app/css/app-rtl.css',
], 'public/css/admin-membership-rtl.css');

/**
 * Login js
 */
var loginJs = [
    'Modules/Admin/Assets/vendor/modernizr/modernizr.custom.js',
    'Modules/Admin/Assets/vendor/jquery/dist/jquery.js',
    'Modules/Admin/Assets/vendor/bootstrap/dist/js/bootstrap.js',
    'Modules/Admin/Assets/vendor/jQuery-Storage-API/jquery.storageapi.js',
    'Aut/FormComponent/src/Assets/js/form-component.js',
];

mix.scripts(loginJs.concat([
    'Aut/FormComponent/src/Assets/plugin/jquery-validation/dist/jquery.validate.js',
]), 'public/js/admin-membership-ltr.js');

mix.scripts(loginJs.concat([
    'Aut/FormComponent/src/Assets/plugin/jquery-validation/dist/jquery.validate.js',
    'Aut/FormComponent/src/Assets/plugin/jquery-validation/dist/localization/messages_ar.js',
]), 'public/js/admin-membership-rtl.js');

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
    'resources/assets/css/style.css',
    // CSS | Main style file
    'resources/assets/css/style-main.css',

], 'public/css/theme-ltr.css');

mix.styles([
    'resources/assets/js/revolution-slider/css/settings.css',
    'resources/assets/js/revolution-slider/css/layers.css',
    'resources/assets/js/revolution-slider/css/navigation.css',
], 'public/js/revolution-slider/css/revolution-slider.css');

/**
 * theme js
 */

mix.scripts([
    'resources/assets/js/revolution-slider/js/jquery.themepunch.tools.min.js',
    'resources/assets/js/revolution-slider/js/jquery.themepunch.revolution.min.js',
], 'public/js/revolution-slider/js/revolution-slider.js');

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
], 'public/js/revolution-slider/js/extensions/revolution-slider-extensions.js');

mix.scripts([
    'resources/assets/js/html5shiv.min.js',
    'resources/assets/js/respond.min.js',
], 'public/js/ie.js');

mix.scripts([
    // external javascripts
    'resources/assets/js/jquery.min.js',
    'resources/assets/js/jquery-ui.min.js',
    'resources/assets/js/revolution-slider/js/jquery.ui.slider-rtl.js',
    'resources/assets/js/bootstrap.min.js',

    // JS | jquery plugin collection for this theme
    'resources/assets/js/jquery-plugin-collection.js',
    // JS | Custom script for all pages
    'resources/assets/js/jquery.gmap.js',
    'resources/assets/js/custom.js',
], 'public/js/main.js');

mix.copy('resources/assets', 'public', false);
mix.copy('Modules/Admin/Assets/admin-custom.css', 'public', false);
mix.copy('Modules/Admin/Assets/admin-custom.js', 'public', false);
mix.copy('resources/assets', 'public', false);

mix.version();