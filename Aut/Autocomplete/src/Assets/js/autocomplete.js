/**
 *
 * please add this libs 
 * --------------------
 * 1 - bootstrap         css/js
 * 2 - select2           css/js
 * 3 - select2-bootstrap css
 *
 */
var APP_AMU = {

    // autocomplete select2
    autocomplete : {

        init : function (Data) {

            return function () {
                var $this = $(this);
                var data = (typeof Data !== typeof undefined) ? Data : [];
                $this.find('option:selected').each(function(i){
                    var $this = $(this);
                    data[i] = {id:$this.val(),name:$this.text()};
                });
                var url = $this.data('remote');
                var required = (typeof $this.data('required') !== typeof undefined) ? $this.data('required') : null;
                var placeholder = (typeof $this.data('placeholder') !== typeof undefined) ? $this.data('placeholder') : '';
                var target = (typeof $this.data('target') !== typeof undefined) ? $($this.data('target')) : '';
                var letters = (typeof $this.data('letter') !== typeof undefined) ? $this.data('letter'):3;
                var linkWith = $this.data('param') || '';
                if(linkWith.charAt(0) == '#') {
                    $(linkWith).change(function() {
                        $this.val('').change();
                    });
                }
                $this.select2({
                    ajax: {
                        url: url,
                        dataType: 'json',
                        delay: 400,
                        method : "GET",
                        data: function (params) {
                            var param = (typeof $this.data('param') !== typeof undefined)?$this.data('param'):null;
                            if(param && param.charAt(0) === '#') {
                                var name = $(param).attr('name') || $(param).attr('id');
                                var val = $(param).val() ? $(param).val() : 0;
                                param = JSON.parse('{"'+name+'":"'+val+'"}');
                            }
                            var $data = {q: params.term,page: params.page};
                            if(param) {
                                $data = $.extend($data,param);
                            }
                            return $data;
                        },
                        processResults: function (data, params) {
                            params.page = params.page || 1;

                            return {
                                results: data.items,
                                pagination: {
                                    more: (params.page * 30) < data.total_count
                                }
                            };
                        },
                        cache: true
                    },
                    escapeMarkup: function (markup) { return markup; },
                    dir:DIR,
                    language: LANG,
                    minimumInputLength: letters,
                    placeholder: placeholder,
                    allowClear: true,
                    templateResult: APP_AMU.autocomplete.formatRepo,
                    templateSelection: APP_AMU.autocomplete.formatRepoSelection,
                    dropdownParent: target,
                    theme: "bootstrap",
                    data: data
                });
            }
        },

        formatRepo : function (repo) {

            if (repo.loading)
                return repo.text;
            return repo.name;
        },

        formatRepoSelection : function (repo) {

            if(typeof repo.selected === typeof undefined)
                return repo.text;
            return repo.name;
        },

        selectedAutocomplete : function (selector ,data) {

            $(selector).each(APP_AMU.autocomplete.init(data));
        },

        reloadAutocomplete : function (selector) {

            $(selector).each(APP_AMU.autocomplete.init());
        },

        resetAutocomplete : function (selector) {

            //$('.autocomplete').val(null).trigger("change");
            $(selector).empty().trigger('change');
        },

        initAutocomplete : function (selector) {

            var selector = typeof selector != typeof undefined ? selector : '.autocomplete';

            $(selector).each(APP_AMU.autocomplete.init());
        },
    },
}

/**
 * init App
 */
$(function () {

    APP_AMU.autocomplete.initAutocomplete();
});