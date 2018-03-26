
String.prototype.replaceAll = function(search, replaceAllment) {
    var target = this;
    return target.replace(new RegExp(search, 'g'), replaceAllment);
};

String.prototype.toCamelCase = function() {
    return this.replace(/^([A-Z])|[\s-_](\w)/g, function(match, p1, p2, offset) {
        if (p2) return p2.toUpperCase();
        return p1.toLowerCase();
    });
};

window.open_popup = function(url) {

    var w = 880;
    var h = 570;
    var l = Math.floor((screen.width - w) / 2);
    var t = Math.floor((screen.height - h) / 2);
    var win = window.open(url, 'ResponsiveFilemanager', "scrollbars=1,width=" + w + ",height=" + h + ",top=" + t + ",left=" + l);
};

var AUT_HELPER = {

    /**
     *
     * Set Value in Cookie.
     */
    setCookie : function (cookieName, value, exdays) {
        var exp = new Date();
        var x   = exp.getTime() + (exdays * 24 * 60 * 60 * 1000);
        exp.setTime(x);
        document.cookie = cookieName + "=" + encodeURI(value) + "; expires=" + exp.toGMTString() + ";path=/";
    },

    /**
     * Get Value from Cookie.
     */
    getCookie : function (name) {
        var nameEQ = name + "=";
        var ca = document.cookie.split(';');
        for (var i = 0; i < ca.length; i++) {
            var c = ca[i];
            while (c.charAt(0) == ' ') c = c.substring(1, c.length);
            if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length, c.length);
        }
        return null;
    },

    notify : function (notify) {

        var icon = (typeof notify.icon !== typeof undefined) ? '<em class="fa fa-' + notify.icon +  '"></em> ' : '';

        $.notify({
            message: notify.html || (icon + notify.message),
            pos: notify.pos || 'bottom-right',
            status: notify.status,
            timeout: notify.timeout || 1000
        });
    },

    getDataAttribute: function (dom) {

        var attributes = {} ,value = '';

        $.each($(dom).get(0).attributes, function(i, attrib){

            var matchValue = attrib.value.match("{"),
                matchData  = attrib.name.match("^data-");

            if(matchData)
            {
                if(matchValue && matchValue.length) {
                    value = JSON.parse(attrib.value);
                    attributes[attrib.name.slice(5)] = value;
                } else if(attrib.value) {
                    value = attrib.value;
                    attributes[attrib.name.slice(5)] = value;
                }
            }
        });

        return attributes;
    },

    /**
     *
     * @param string param
     * @param string|object extraParam
     * @returns {*}
     */
    convertStringParamToJson: function (param ,extraParam) {

        var objJson = function (param) {

            return JSON.parse('{"' + param.replace(/&|,/g, '","').replace(/=/g,'":"') + '"}', function(key, value) {
                return key === "" ? value : decodeURIComponent(value)
            });
        };

        if(typeof extraParam == typeof undefined)
            return objJson(param);

        var result = typeof extraParam == "object"
            ? $.extend(objJson(param), extraParam)
            : $.extend(objJson(param), objJson(extraParam));

        return result;
    },

    sweetalert_swal: function (param ,funcSuccess ,paramCancleSafe, funcCancle) {

        swal({
            title              : typeof param.title               != typeof undefined ? param.title               : null,
            text               : typeof param.text                != typeof undefined ? param.text                : null,
            type               : typeof param.type                != typeof undefined ? param.type                : null,
            showCancelButton   : typeof param.showCancelButton    != typeof undefined ? param.showCancelButton    : false,
            showCloseButton    : typeof param.showCloseButton     != typeof undefined ? param.showCloseButton     : false,
            allowEscapeKey     : typeof param.allowEscapeKey      != typeof undefined ? param.allowEscapeKey      : true,
            allowOutsideClick  : typeof param.allowOutsideClick   != typeof undefined ? param.allowOutsideClick   : true,
            confirmButtonColor : typeof param.confirmButtonColor  != typeof undefined ? param.confirmButtonColor  : '#3085d6',
            confirmButtonText  : typeof param.confirmButtonText   != typeof undefined ? param.confirmButtonText   : 'OK',
            cancelButtonText   : typeof param.cancelButtonText    != typeof undefined ? param.cancelButtonText    : 'Cancel',
            showLoaderOnConfirm: typeof param.showLoaderOnConfirm != typeof undefined ? param.showLoaderOnConfirm : false,
            width              : typeof param.width               != typeof undefined ? param.width               : '500px',
            html               : typeof param.html                != typeof undefined ? param.html                : '',
        }).then(funcSuccess, function (dismiss) {

            if (dismiss === 'cancel') {

                swal({
                    title : paramCancleSafe.cancleSafe.text,
                    text  : paramCancleSafe.cancleSafe.message,
                    confirmButtonText  : paramCancleSafe.ok,
                    type : "error",
                });

                if(typeof funcCancle == 'function')
                    funcCancle();
            }
        });
    }

};

var AUTOMATA_APP = {

    initModalEvent: function () {

        $(document).on({

            'shown.bs.modal': function () {
                //
            },

            'hidden.bs.modal': function () {
                //
            }

        }, '.modal');
    },

    changeColorControleTheme: function () {

        // store theme color on click
        $('body').on('click', '[data-load-css]', function () {

            var $this  = $(this),
                $color = $this.find('.color');

            AUT_HELPER.setCookie('controleThemeColorUrl', $this.data('load-css'));
            AUT_HELPER.setCookie('controleThemeColorRGB', $color.first().css('background-color').replaceAll(/ /, ''));
            AUT_HELPER.setCookie('controleThemeColorColorClass', $color.first().attr('class'));

            //change pace loader color
            $('#dynamic-style').remove();
            $('#globalStyle').after('<style id="dynamic-style"> .pace .pace-progress { background-color: ' + AUT_HELPER.getCookie("controleThemeColorRGB") + '!important; } </style>');
        });

        // set theme color on load
        $("[data-load-css='" + AUT_HELPER.getCookie('controleThemeColorUrl') + "']").click();
    },

    initPjax: function (container) {

        if ($.support.pjax) {

            $.fn.initializeMyPlugin = function () {

                AUTOMATA_APP.COLLAPSE_PANELS();
                AUTOMATA_APP.ajax.init();
            };

            // time in milliseconds
            $.pjax.defaults.timeout = 1000;
            // maxCacheLength
            $.pjax.defaults.maxCacheLength = 0;

            $(document).on('click', 'a.ajax', function (event) {

                if ($(container).length == 0 || $(this).hasClass('no-ajax')) {
                    return;
                }

                $.pjax.click(event, {
                    container: container,
                    timeout: 1000,
                });
            });

            // always fires after ajax, regardless of result
            $(document).on("pjax:complete", function () {

            });
            // after replacing HTML content loaded from the server
            $(document).on("pjax:success", function () {

                $('head [role="header"]').not(container + ' [role="header"]').remove();
                $('head').append($(container).find('[role="header"]'));

                $('body [role="footer"]').not(container + ' [role="footer"]').remove();
                $('body').append($(container).find('[role="footer"]'));
            });

            // before replacing content
            $(document).on("pjax:start", function (event) {

                $(container).fadeOut(300);
            });

            // 	after replacing content
            $(document).on("pjax:end", function (event) {

                $(container).fadeIn(300);

                $(event.target).initializeMyPlugin();
            });

            // event direction property: "back"/"forward"
            $(document).on("pjax:popstate", function (event) {
            });
            // right before replacing HTML with content from cache
            $(document).on("pjax:beforeReplace", function (event) {
            });
            // on ajax error; will hard refresh unless canceled
            $(document).on("pjax:error", function (event, xhr, textStatus, errorThrown, options) {
                console.log('Event', event);
                console.log('XHR', xhr);
                console.log('Text Status', textStatus);
                console.log('Error Thrown', errorThrown);
                console.log('Options', options);
                /*options.success(xhr.responseText, textStatus, xhr);
                 return false;*/
            });
            // fires after options.timeout; will hard refresh unless canceled
            $(document).on("pjax:timeout", function (event) {
                event.preventDefault();
            });

            $(document).on('click', '[data-reload]', function () {

                $.pjax({url: window.location.href, container: container, timeout: 1000});
            });
        }
    },

    ckeditor: {

        init: function ($cont, $target) {

            var $cont   = $($cont),
                _editor = [];

            if (typeof(CKEDITOR) != 'undefined') {
                $cont.find($target).each(function (i ,v) {

                    var orginal_id = this.id;//$(this).data('original-id');

                    // Only open filemanager(type=0 and not set field_id):
                    // path to filemanager../filemanager/dialog.php?type=0&fldr=
                    //
                    // Select Image: (type=1 and set id of input text in field_id variable):
                    // path to filemanager../filemanager/dialog.php?type=1&field_id=fieldID
                    //
                    // Select Video: (type=3 and set id of input text in field_id variable):
                    // path to filemanager../filemanager/dialog.php?type=3&field_id=fieldID
                    //
                    // Select File: (type=2 and set id of input text in field_id variable):
                    // path to filemanager../filemanager/dialog.php?type=2&field_id=fieldID

                    // Get Variables list
                    // type: the type of filemanager (1:images files 2:all files 3:video files)
                    // fldr: the folder where i enter (the root folder remains the same). default=""
                    // sort_by: the element to sorting (values: name,size,extension,date) default=""
                    // descending: descending? or ascending (values=1 or 0) default="0"
                    // lang: the language code (ex: &lang=en_EN). default="en_EN"
                    // relative_url: should be	added to the request with a value of "1" when opening RFM.
                    // Otherwise returned URL-s will be absolute.
                    // extensions: a json encoded array of available files extensions (ex: &extensions=["pdf",'doc'])

                    var params = {
                        filebrowserBrowseUrl: BASE_URL + LANG + '/filemanager/dialog?type=2&editor=ckeditor&fldr=',
                        filebrowserUploadUrl: BASE_URL + LANG + '/filemanager/dialog?type=2&editor=ckeditor&fldr=',
                        filebrowserImageBrowseUrl: BASE_URL + LANG + '/filemanager/dialog?type=1&editor=ckeditor&fldr=',
                        contentsLangDirection: $(this).hasClass('en') ? 'ltr' : $(this).hasClass('ar') ? 'rtl' : '',
                        language: LANG,
                        resize_enabled: typeof $(this).data('resize') != typeof undefined ? $(this).data('resize') : true,
                        resize_dir: typeof $(this).data('resize-type') != typeof undefined ? $(this).data('resize-type') : 'both',
                    };

                    AUTOMATA_APP.ckeditor.reset($cont, $target, 'single', orginal_id);
                    var $textarea = CKEDITOR.replace(orginal_id, params);
                    $textarea.on('fileUploadRequest', function (evt) {
                        evt.data.requestData.type = 'ckeditor';
                        var xhr = evt.data.fileLoader.xhr;
                        xhr.setRequestHeader('X-Requested-With', 'XMLHttpRequest');
                        xhr.setRequestHeader('X-CSRF-TOKEN', CSRF_TOKEN);
                        xhr.setRequestHeader('Content-Type', 'application/json');
                        xhr.send(this.file);
                        evt.stop();
                    });
                });

                // CKEDITOR.on('instanceCreated', function (event) {
                //     alert('Editor instance created');
                // });

                // CKEDITOR.on('currentInstance', function(event) {
                //     Removes the current listener.
                //     ev.removeListener();
                //
                //     CKEDITOR.instances[element_id].checkDirty()
                // });

                CKEDITOR.on('instanceReady', function (event) {

                    var editor = event.editor;

                    editor.on('change', function (event) {

                        // Sync textarea
                        this.updateElement();
                    });

                    editor.on('resize', function (event) {
                        //
                    });

                    //Indicates that no further listeners are to be called.
                    event.stop();
                });

                CKEDITOR.on('dialogDefinition', function (event) {

                    var editor = event.editor;

                    aut_filemanager_handleImageUpload(event, BASE_URL, LANG);

                    event.stop();
                });
            }
            else
                console.log('warning: ckeditor is not defined');
        },

        reset: function ($cont, $target, $type, $orginal_id) {

            if (typeof(CKEDITOR) != 'undefined') {
                switch ($type) {
                    // delete only all instance
                    case 'all'    : {

                        for (name in CKEDITOR.instances) {

                            var editor = CKEDITOR.instances[name];
                            if (editor) {
                                delete CKEDITOR.instances[name];
                                // CKEDITOR.remove(editor);
                                // editor.destroy(false);
                            }
                        }

                    } ;break;

                    // delete only one instance
                    case 'single' : {

                        var editor = CKEDITOR.instances[$orginal_id];
                        if (editor) {
                            delete CKEDITOR.instances[$orginal_id];
                            // CKEDITOR.remove(editor);
                            // editor.destroy(true);
                        }

                    }; break;
                }
            }
        },

        clear: function ($cont, $target) {

            if (typeof(CKEDITOR) != 'undefined') {
                for (instance in CKEDITOR.instances) {
                    CKEDITOR.instances[instance].setData('');
                }
            }
        },

        fixCkeditorModal: function () {

            //fix ckeditor modal
            $.fn.modal.Constructor.prototype.enforceFocus = function () {
                var modal_this = this;
                $(document).on('focusin.modal', function (e) {
                    if (modal_this.$element[0] !== e.target && !modal_this.$element.has(e.target).length
                        && !$(e.target.parentNode).hasClass('cke_dialog_ui_input_select')
                        && !$(e.target.parentNode).hasClass('cke_dialog_ui_input_text')) {
                        modal_this.$element.focus();
                    }
                });
            };
        }
    },

    inputMask: {

        init: function (selector) {

            /**
             * data param
             *
             * data-masked
             * data-inputmask = 'mask':'(999)999-9999'
             * data-inputmask-type
             */

            $(selector).each(function () {

                var $this = $(this),
                    $type = typeof $this.data('inputmask-type') != typeof undefined ? $this.data('inputmask-type') : false,
                    $mask;

                switch ($type) {

                    case 'phone': {
                        $mask = '(9{3}) 9{7}';
                    }; break;

                    case 'mobile': {
                        $mask = '(9{3}) 9{3}-9{4}';
                    }; break;

                    case 'fax': {
                        $mask = '+\\963 (9{2}) 9{3}-9{4}';
                    }; break;
                }

                $this.attr('dir', 'ltr');
                $this.inputmask($mask, {
                    rightAlign: DIR == 'ltr' ? false : true,
                    clearMaskOnLostFocus: true,
                });
            });
        },
    },

    ajax: {

        init: function () {

            AUT_AUTOCOMPLETE_PACK.autocomplete.initAutocomplete();
            AUT_AUTOCOMPLETE_PACK.select.initSelect();
            AUT_FORM_COMPONENT.validate.init('.ajaxCont');
            AUT_TREE_VIEW.tree.initTree();
            AUTOMATA_APP.ckeditor.init('body', '.text-editor');
            AUTOMATA_APP.inputMask.init('[data-masked]');
            AUT_UPLOAD.fileUpload.load('.upload-file.load-file');

            $('.datatable').each(AUT_DATATABLE.loadDatatable);
            //Added By AA1992
            onPageLoad.loadPjax();
        }
    },

    htmlTable: {
        init: function (){
            AUTOMATA_APP.htmlTable.initInputs();
            $(document).on('click.table_copy_row', '[table-copy-row]', function () {
                var $btn = $(this);
                var $table = $($btn.attr('table-copy-row'));
                AUTOMATA_APP.htmlTable.cloneTr($table);
            });
            $(document).on('click.table_delte_row', '.delete-action', function () {
                var $this  = $(this);
                var $table = $this.closest('table');
                var isNew  = $this.hasClass('new');
                var $tr    = $this.closest('tr');
                var inputName = $table.attr('table-dynamic-input');
                if(isNew) {
                    $tr.remove();
                } else {
                    var isForDelete = $tr.hasClass('row-for-delete');
                    if(isForDelete){
                        $tr.removeClass('row-for-delete');
                        // $tr.attr('table-dynamic-temp-val', val);
                        $tr.find('#delete_' + inputName).remove();
                    } else {
                        $tr.addClass('row-for-delete');
                        var val = $tr.find('#' + inputName).val();
                        $tr.find(':has(.delete-action)')
                            .append("<input type='hidden' table-dynamic-modal='"+inputName+"' name='delete_"+inputName+"[]' id='delete_"+inputName+"' value='"+val+"' />");
                    }
                }
            })
        },

        initHtmlTable: function (){
            AUTOMATA_APP.htmlTable.init();
        },

        initInputs: function () {
            $('.table-dynamic .template-row :input').each(function (){
                var $this = $(this);
                var disabled = $this.attr('disabled') || false;
                if(disabled){
                    $this.attr('table-dynamic-disabled', 'disabled');
                } else {
                    $this.attr('disabled', 'disabled');
                }
            });
        },

        cloneTr: function ($table, $rowData) {
            var $templateRow = $table.find('thead #template_row');
            var rowId = $templateRow.attr('dynamic-table-id') || null;
            var $newRow = $templateRow.clone();
            $newRow.removeClass('template-row hide').attr('id', rowId).appendTo($table.find('tbody'));
            $newRow.find(':input').each(function () {
                var $this = $(this);
                var classes = $this.attr('table-dynamic-class');
                var disabled = $this.attr('table-dynamic-disabled') || false;
                $this.attr('table-dynamic-class', null);
                $this.attr('disabled', disabled);

                if($rowData) {
                    var key = $this.attr('table-dynamic-modal') || $this.attr('table-dynamic-modal-option');
                    var option = key.split(':');
                    if (option.length > 1) {
                        var htmloption = "<option selected value='" + AUTOMATA_APP.htmlTable.getValue($rowData, option[0]) + "'>" + AUTOMATA_APP.htmlTable.getValue($rowData, option[1]) + "</option>";
                        $this.html(htmloption);
                    } else if (option.length) {
                        $this.val(AUTOMATA_APP.htmlTable.getValue($rowData, option[0]));
                    }
                }
                $this.addClass(classes);
            });
            if(!$rowData) {
                $newRow.find('.delete-action').addClass('new');
            }
            AUT_AUTOCOMPLETE_PACK.autocomplete.initAutocomplete(false, $newRow);
            AUT_AUTOCOMPLETE_PACK.select.initSelect(false, $newRow);

            return true;
        },

        fillTableData: function ($table, $tableData) {
            AUTOMATA_APP.htmlTable.clearRows($table);
            if(typeof $tableData == 'object') {
                for (var $rowData in $tableData) {
                    AUTOMATA_APP.htmlTable.cloneTr($table, $tableData[$rowData]);
                }
            } else {
                for (var i = 0; i < $tableData.length; i++) {
                    AUTOMATA_APP.htmlTable.cloneTr($table, $tableData[i]);
                }
            }
        },

        clearRows: function ($table){
            $table.find('tbody tr').remove();
        },

        getValue: function (arr, key){
            var keys = key.split('.');
            var val = arr;
            for(var i = 0; i < keys.length; i++) {
                val = val[keys[i]];
            }
            return val;
        }
    },

    COLLAPSE_PANELS: function () {

        var panelSelector = '[data-tool="panel-collapse"]',
            storageKeyName = 'jq-panelState';

        // Prepare the panel to be collapsable and its events
        $(panelSelector).each(function() {
            // find the first parent panel
            var $this        = $(this),
                parent       = $this.closest('.panel'),
                state        = typeof $this.data('save-state') != typeof undefined ? JSON.parse($this.data('save-state')) : false,
                wrapper      = parent.find('.panel-wrapper'),
                collapseOpts = {toggle: false},
                iconElement  = $this.children('em'),
                panelId      = parent.attr('id');

            // if wrapper not added, add it
            // we need a wrapper to avoid jumping due to the paddings
            if( ! wrapper.length) {
                wrapper =
                    parent.children('.panel-heading').nextAll() //find('.panel-body, .panel-footer')
                        .wrapAll('<div/>')
                        .parent()
                        .addClass('panel-wrapper');
                collapseOpts = {};
            }

            // Init collapse and bind events to switch icons
            wrapper
                .collapse(collapseOpts)
                .on('hide.bs.collapse', function() {
                    setIconHide( iconElement );
                    if(state)
                        savePanelState( panelId, 'hide' );
                    wrapper.prev('.panel-heading').addClass('panel-heading-collapsed');
                })
                .on('show.bs.collapse', function() {
                    setIconShow( iconElement );
                    if(state)
                        savePanelState( panelId, 'show' );
                    wrapper.prev('.panel-heading').removeClass('panel-heading-collapsed');
                });

            // Load the saved state if exists
            if(state) {
                var currentState = loadPanelState( panelId );
                if(currentState) {
                    setTimeout(function() { wrapper.collapse( currentState ); }, 50);
                    savePanelState( panelId, currentState );
                }
            }
        });

        // finally catch clicks to toggle panel collapse
        $(document).on('click', panelSelector, function () {

            var parent = $(this).closest('.panel');
            var wrapper = parent.find('.panel-wrapper');

            wrapper.collapse('toggle');

        });

        /////////////////////////////////////////////
        // Common use functions for panel collapse //
        /////////////////////////////////////////////
        function setIconShow(iconEl) {
            iconEl.removeClass('fa-plus').addClass('fa-minus');
        }

        function setIconHide(iconEl) {
            iconEl.removeClass('fa-minus').addClass('fa-plus');
        }

        function savePanelState(id, state) {
            var data = $.localStorage.get(storageKeyName);
            if(!data) { data = {}; }
            data[id] = state;
            $.localStorage.set(storageKeyName, data);
        }

        function loadPanelState(id) {
            var data = $.localStorage.get(storageKeyName);
            if(data) {
                return data[id] || false;
            }
        }
    },

    initGlobalJs: function () {

        $(document).ajaxError(function( event, jqxhr, settings, thrownError ) {

            if(jqxhr.responseJSON && jqxhr.responseJSON.redirect_url)
                window.location.href = jqxhr.responseJSON.redirect_url;
        });

        $(document).ajaxSuccess(function( event, jqxhr, settings, thrownError ) {

            if(jqxhr.responseJSON && jqxhr.responseJSON.redirect_url)
                window.location.href = jqxhr.responseJSON.redirect_url;
        });
    },
};

var onPageLoad = {
    pjax: [
        AUTOMATA_APP.htmlTable.initInputs
    ],
    onLoad: [
        /**
          * Delegate Load
          */
        AUTOMATA_APP.initGlobalJs,
        AUTOMATA_APP.COLLAPSE_PANELS,
        AUTOMATA_APP.changeColorControleTheme,
        function (){AUTOMATA_APP.initPjax('#pjax-container')},
        AUTOMATA_APP.initModalEvent,
        AUTOMATA_APP.htmlTable.initHtmlTable,
        /**
          * Load
          */
        function (){AUTOMATA_APP.ckeditor.init('body' ,'.text-editor')},
        AUTOMATA_APP.ckeditor.fixCkeditorModal,
        function (){AUTOMATA_APP.inputMask.init('[data-masked]')},
    ],
    loadPjax: function (){
        for(var i = 0; i < this.pjax.length; i++){
            var func = this.pjax[i];
            func();
        }
    },
    loadOnLoad: function (){
        for(var i = 0; i < this.onLoad.length; i++){
            var func = this.onLoad[i];
            func();
        }
    },
    loadAll: function () {
        this.loadPjax();
        this.loadOnLoad();
    }
};

/**
 * init App
 */
$(function () {

    onPageLoad.loadOnLoad();
});