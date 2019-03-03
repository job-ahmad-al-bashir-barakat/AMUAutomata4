// Toggle RTL mode for demo
// -----------------------------------
(function (window, document, $, undefined) {
    $(function () {
        var maincss = $('#maincss');
        $('#chk-rtl').on('change', function () {
            maincss.attr('href', this.checked ? RTL_CSS : LTR_CSS);
        });

        $(document).on('click','.langs', function () {
            switch ($(this).data('set-lang')) {
                case 'en':
                    maincss.attr('href', LTR_CSS);
                    break;
                case 'ar':
                    maincss.attr('href', RTL_CSS);
                    break;
            }
        });
    });
})(window, document, window.jQuery);