/**
 * @license Copyright (c) 2003-2018, CKSource - Frederico Knabben. All rights reserved.
 * For licensing, see https://ckeditor.com/legal/ckeditor-oss-license
 */

CKEDITOR.editorConfig = function (config) {
    let basePath = CKEDITOR.basePath.replace('/ckeditor', '');

    // Define changes to default configuration here. For example:
    // config.language = 'fr';
    // config.uiColor = '#AADC6E';

    config.format_tags = 'p;h1;h2;h3;h4;h5;h6;pre;address;div;span;bullet;check;angle;decimal';

    config.format_h1 = {element: 'h1', attributes: {'class': 'mt-0 text-uppercase  line-bottom'}};
    config.format_h2 = {element: 'h2', attributes: {'class': 'mt-0 text-uppercase  line-bottom'}};
    config.format_h3 = {element: 'h3', attributes: {'class': 'mt-0 text-uppercase  line-bottom'}};
    config.format_h4 = {element: 'h4', attributes: {'class': 'mt-0 text-uppercase  line-bottom'}};
    config.format_h5 = {element: 'h5', attributes: {'class': 'mt-0 text-uppercase  line-bottom'}};
    config.format_h6 = {element: 'h6', attributes: {'class': 'mt-0 text-uppercase  line-bottom'}};
    config.format_span = {name: 'Colored Text', element: 'span', attributes: {'class': 'text-theme-color-2'}};

    config.format_bullet = {name: 'Bullet', element: 'ul', attributes: {'class': 'list'}};
    config.format_check = {name: 'Check', element: 'ul', attributes: {'class': 'list check'}};
    config.format_angle = {name: 'Angle', element: 'ul', attributes: {'class': 'list angle-double-right'}};
    config.format_decimal = {name: 'Decimal', element: 'ul', styles: {'list-style': 'decimal', 'padding': '0 20px'}};

    let contentCss = [];
    if (DIR == 'rtl') {
        contentsCss = [
            basePath + '/css/bootstrap.min.css',
            basePath + '/css/bootstrap-rtl.min.css',
            basePath + '/css/font-awesome.min.css',
            basePath + '/css/css-plugin-collections.css',
            basePath + '/css/css-plugin-collections-rtl.css',
            basePath + '/css/style-main.css',
            basePath + '/css/style-main-rtl.css',
            basePath + '/css/style-main-rtl-extra.css',
            basePath + '/css/custom-bootstrap-margin-padding.css',
            basePath + '/css/responsive.css',
            basePath + '/css/colors/theme-skin-color-set-7.css',
            basePath + '/theme-custom.css',
        ]
    } else {
        contentsCss = [
            basePath + '/css/bootstrap.min.css',
            basePath + '/css/font-awesome.min.css',
            basePath + '/css/css-plugin-collections.css',
            basePath + '/css/style-main.css',
            basePath + '/css/custom-bootstrap-margin-padding.css',
            basePath + '/css/responsive.css',
            basePath + '/css/colors/theme-skin-color-set-7.css',
            basePath + '/theme-custom.css',
        ]
    }

    config.contentsCss = contentsCss;
};
