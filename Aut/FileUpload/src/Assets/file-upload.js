// Upload Function
var AUT_UPLOAD = {

    fileUpload : {

        selector : '.upload-file',

        formatBytes : function(bytes,decimals) {
            if(bytes == 0) return '0 Bytes';
            var k = 1024,
                dm = decimals || 2,
                sizes = ['Bytes', 'KB', 'MB', 'GB', 'TB', 'PB', 'EB', 'ZB', 'YB'],
                i = Math.floor(Math.log(bytes) / Math.log(k));
            return parseFloat((bytes / Math.pow(k, i)).toFixed(dm)) + ' ' + sizes[i];
        },

        /**
         *
         * @param file
         * @param typeObject | fileToUrlBlob,fileToDataUrl
         * @returns {{}}
         */
        convertFileToObject : function (file ,returnPlace) {

            var retutnObject = {};

            /**
             *  fileToDataUrl
             */
            if(returnPlace == 'fileToDataUrl')
            {
                var reader = new FileReader();
                reader.readAsDataURL(file);
                reader.onload = function () {

                    var fileToDataUrl = reader.result;

                    retutnObject = $.extend(retutnObject, { fileToDataUrl : fileToDataUrl });
                };

                reader.onerror = function (error) {

                    console.log('error: ', error);
                };

                return retutnObject;
            }

            /**
             *  fileToUrlBlob
             */
            if(returnPlace == 'fileToUrlBlob')
            {
                var fileToUrlBlob = URL.createObjectURL(file)

                retutnObject = $.extend(retutnObject, { fileToUrlBlob : fileToUrlBlob });

                return retutnObject;
            }
        },

        /**
         *
         * @param imageUrl
         * @param typeObject | canvasToUrlBlob,blobToDataUrl,imageWithBlob
         * @returns {{}}
         */
        convertImageToObject : function (imageUrl ,callback) {

            var retutnObject = {};

            // like image.png
            var img = new Image();
            img.src = imageUrl;
            img.onload = function () {

                var imageToCanvas = document.createElement('canvas'), context = imageToCanvas.getContext('2d');
                imageToCanvas.width = img.width;
                imageToCanvas.height = img.height;
                context.drawImage(img, 0, 0, img.width, img.height);
                $.extend(retutnObject, { imageToCanvas : imageToCanvas });

                var canvasToDataUrl = imageToCanvas.toDataURL('image/png');
                $.extend(retutnObject, { canvasToDataUrl : canvasToDataUrl});

                imageToCanvas.toBlob(function (blob) {

                    /**
                     *  canvasToUrlBlob
                     */
                    var canvasToUrlBlob = URL.createObjectURL(blob);
                    $.extend(retutnObject, { canvasToUrlBlob : canvasToUrlBlob });

                    /**
                     *  blobToDataUrl
                     */
                    var reader = new window.FileReader();
                    reader.readAsDataURL(blob);
                    reader.onloadend = function () {

                        var base64data    = reader.result;
                        $.extend(retutnObject, { blobToDataUrl : base64data });
                    }

                    /**
                     *  imageWithBlob
                     */
                    var imageWithBlob = document.createElement('img'),
                        urlBlob       = URL.createObjectURL(blob);

                    imageWithBlob.onload = function () {

                        /*
                         *  no longer need to read the blob so it's revoked
                         *
                         *  The URL.revokeObjectURL() static method releases an existing object URL which was previously created by calling URL.createObjectURL().
                         *  Call this method when you've finished using an object URL to let the browser know not to keep the reference to the file any longer.
                         *
                         *  https://developer.mozilla.org/en-US/docs/Web/API/URL/revokeObjectURL
                         */
                        URL.revokeObjectURL(urlBlob);
                    };

                    imageWithBlob.src = urlBlob;
                    $.extend(retutnObject, { imageWithBlob : imageWithBlob });

                    callback(retutnObject);
                });
            };
        },

        load: function(selector ,data) {

            if (typeof($.fn.fileinput) != 'undefined') {

                var $selector = selector || AUT_UPLOAD.fileUpload.selector;

                $($selector).each(function () {

                    var _this      = this,
                        $this      = $(_this),
                        $imageCont = $this.closest('.image-cont'),
                        cropperTemplete, infoTemplete, replacedFile = [], invalidRatio = [],
                        previewFileType             = $this.data('preview-file-type'),
                        allowedFileTypes            = $this.data('allowed-file-types').split(',') || null,
                        allowedFileExtensions       = $this.data('allowed-file-extensions').split(',') || null,
                        uploadUrl                   = $this.data('upload-url'),
                        ratioUrl                    = $this.data('ratio-url'),
                        deleteUrl                   = $this.data('delete-url'),
                        downloadFolder              = $this.data('download-folder'),
                        maxFileSize                 = $this.data('max-file-size') || 0,
                        maxFileCount                = $this.data('max-file-count') || 0,
                        minFileCount                = $this.data('min-file-count') || 0,
                        removeLabel                 = $this.data('remove-label'),
                        uploadRetryTitle            = $this.data('upload-retry-title'),
                        cropTitle                   = $this.data('crop-title'),
                        attributeTitle              = $this.data('attribute-title'),
                        showCaption                 = typeof $this.data('show-caption') != typeof undefined ? $this.data('show-caption') : false,
                        showPreview                 = typeof $this.data('show-preview') != typeof undefined ? $this.data('show-preview') : true,
                        imageWidth                  = $this.data('image-width')      || null,
                        imageHeight                 = $this.data('image-height')     || null,
                        minImageHeight              = $this.data('min-image-height') || null,
                        maxImageHeight              = $this.data('max-image-height') || null,
                        minImageWidth               = $this.data('min-image-width')  || null,
                        maxImageWidth               = $this.data('max-image-width')  || null,
                        param                       = $this.attr('data-param')       || '',
                        multiple                    = typeof $this.attr('multiple') != typeof undefined ? true : false,
                        target                      = $this.data('target') || '',
                        cropper                     = typeof $this.data('cropper') != typeof undefined ? $this.data('cropper') : true,
                        cropperSelector             = $this.data('cropper-selector') || '.aut-cropper-file-upload',
                        cropperModal                = $this.data('cropper-modal') || '',
                        datatable                   = $this.data('datatable'),
                        reloadDatatable             = typeof $this.data('reload-datatable') != undefined ? $this.data('reload-datatable') : true,
                        datatableInitialize         = typeof $this.data('datatable-initialize') != undefined ? $this.data('datatable-initialize') : true,
                        datatableInitializeProperty = $this.data('datatable-initialize-property') || '.image',
                        packageAppend               = typeof $this.data('package-append') != undefined ? $this.data('package-append') : true,
                        appendLocation              = $this.data('append-location') || '',
                        appendName                  = $this.data('append-name') || '',
                        appendName                  = (appendName || _this.id + '[]'),
                        allowedPreviewIcons         = typeof $this.data('allowed-preview-icons') != undefined ? $this.data('allowed-preview-icons') : false,
                        autoReplace                 = typeof $this.data('auto-replace') != undefined ? $this.data('auto-replace') : false,
                        allowRatio                  = typeof $this.data('allow-ratio') != undefined ? $this.data('allow-ratio') : false,
                        ratio                       = $this.data('ratio') || {},
                        ratioMessage                = $this.data('ratio-message') || '',
                        closeModal                  = typeof $this.data('close-modal') != undefined ? $this.data('close-modal') : true,
                        dropZoneEnabled             = typeof $this.data('drop-zone-enabled') != undefined ? $this.data('drop-zone-enabled') : true;

                    if(cropper)
                        cropperTemplete = '<button type="button" class="btn-crop-image btn btn-kv btn-default btn-outline-secondary" title="' + cropTitle + '"><i class="fa fa-crop"></i></button>';
                    infoTemplete = function (dataKey) {
                        return '<button type="button" class="btn-attr-image btn btn-kv btn-default btn-outline-secondary" title="' + attributeTitle + '" ' + dataKey + '><i class="fa fa-question-circle"></i></button>';
                    };

                    var params = {
                        rtl: DIR == 'rtl' ? true : false,
                        language: LANG,
                        theme : "fa",
                        uploadUrl: uploadUrl,
                        deleteUrl: deleteUrl,
                        uploadExtraData: {'upload' : true},
                        deleteExtraData: {},
                        validateInitialCount: true,
                        dropZoneEnabled: dropZoneEnabled,
                        minFileCount: minFileCount,
                        maxFileCount: maxFileCount,
                        showCaption: showCaption,
                        maxFileSize: maxFileSize,
                        allowedFileTypes: allowedFileTypes,
                        allowedFileExtensions: allowedFileExtensions,
                        previewFileType: previewFileType,
                        minImageHeight: minImageHeight,
                        maxImageHeight: maxImageHeight,
                        minImageWidth: minImageWidth,
                        maxImageWidth: maxImageWidth,
                        elErrorContainer: '.kv-fileinput-error',
                        otherActionButtons: '',
                        showUpload: true,
                        showDownload: true,
                        showPreview: showPreview,
                        autoReplace: autoReplace,
                        //required: true,
                        overwriteInitial: false,
                        layoutTemplates : {
                            actions: '<div class="file-actions">' +
                                     '    <div class="file-footer-buttons">' +
                                     '        <!--{upload}--> {download} {delete} {cropper} {info} {zoom} {other}' +
                                     '    </div>' +
                                     '</div>',
                        },
                        fileActionSettings: {
                            uploadRetryIcon: '<i class="fa fa-refresh"></i>',
                            downloadIcon: '<i class="fa fa-download"></i>'
                        },
                        removeLabel: removeLabel,
                        uploadRetryTitle: uploadRetryTitle,
                        previewThumbTags : {
                            '{cropper}'  : cropperTemplete || '',
                            '{info}'     : '',
                        },
                        initialPreviewShowDelete: true,
                        initialPreview: [],
                        initialPreviewAsData: true,
                        initialPreviewFileType: 'image',
                        initialPreviewConfig: [],
                        initialPreviewThumbTags : []
                    };

                    if(allowedPreviewIcons)
                        $.extend(params ,{

                            // set to empty, null or false to disable preview for all types
                            // allow only preview of image & text files
                            allowedPreviewTypes: null,
                            //allowedPreviewTypes: ['image', 'text'],
                            // allow content to be shown only for certain mime types
                            //allowedPreviewMimeTypes: ['image/jpeg', 'text/javascript'],
                            previewFileIcon: '<i class="fa fa-file"></i>',
                            // this will force thumbnails to display icons for following file extensions
                            preferIconicPreview: true,
                            // configure your icon file extensions
                            previewFileIconSettings: {
                                'doc': '<i class="fa fa-file-word-o text-primary"></i>',
                                'xls': '<i class="fa fa-file-excel-o text-success"></i>',
                                'ppt': '<i class="fa fa-file-powerpoint-o text-danger"></i>',
                                'pdf': '<i class="fa fa-file-pdf-o text-danger"></i>',
                                'zip': '<i class="fa fa-file-archive-o text-muted"></i>',
                                'htm': '<i class="fa fa-file-code-o text-info"></i>',
                                'txt': '<i class="fa fa-file-text-o text-info"></i>',
                                'mov': '<i class="fa fa-file-movie-o text-warning"></i>',
                                'mp3': '<i class="fa fa-file-audio-o text-warning"></i>',
                                // note for these file types below no extension determination logic
                                // has been configured (the keys itself will be used as extensions)
                                'jpg': '<i class="fa fa-file-photo-o text-danger"></i>',
                                'gif': '<i class="fa fa-file-photo-o text-warning"></i>',
                                'png': '<i class="fa fa-file-photo-o text-primary"></i>'
                            },
                            previewFileExtSettings: { // configure the logic for determining icon file extensions
                                'doc': function(ext) {
                                    return ext.match(/(doc|docx)$/i);
                                },
                                'xls': function(ext) {
                                    return ext.match(/(xls|xlsx)$/i);
                                },
                                'ppt': function(ext) {
                                    return ext.match(/(ppt|pptx)$/i);
                                },
                                'zip': function(ext) {
                                    return ext.match(/(zip|rar|tar|gzip|gz|7z)$/i);
                                },
                                'htm': function(ext) {
                                    return ext.match(/(htm|html)$/i);
                                },
                                'txt': function(ext) {
                                    return ext.match(/(txt|ini|csv|java|php|js|css)$/i);
                                },
                                'mov': function(ext) {
                                    return ext.match(/(avi|mpg|mkv|mov|mp4|3gp|webm|wmv)$/i);
                                },
                                'mp3': function(ext) {
                                    return ext.match(/(mp3|wav)$/i);
                                },
                            }
                        });

                    if(param != '')
                        _.each(param.split('&') , function(v ,i) {
                            var extra = JSON.parse('{"' + v.split('=')[0] + '" : "' + v.split('=')[1] + '"}');
                            $.extend(params.uploadExtraData ,extra);
                            $.extend(params.deleteExtraData ,extra);
                        });

                    var initialPreviewFunc = function ($params) {

                        var url = ($params.url).replaceAll('{folder}', downloadFolder);

                        params.initialPreview.push(url);

                        // deep clone object
                        var extra = jQuery.extend(true, {}, params.deleteExtraData , $params.extra);

                        params.initialPreviewConfig.push({
                            previewAsData: true,
                            type: $params.type,
                            url: deleteUrl,
                            caption: $params.caption,
                            size: $params.size,
                            key: $params.key,
                            downloadUrl: url,
                            extra: extra,
                        });

                        params.initialPreviewThumbTags.push({
                            '{cropper}' : '',
                            '{info}'    : infoTemplete('data-key=' + $params.key) || '',
                            '{caption}' : $params.caption,
                        });
                    };

                    /*
                     * new: this mean is the file in new and not stored inside pviot table
                     * deleted: this mean file is stored inside pviot table and you must delete it
                     * replaced: if file new this will not has hidden replace or if it old "mean exists inisde pviot table" it will has replaced hidden
                     */
                    var appendHiddenFunc = function (name ,value ,status) {

                        if(!packageAppend)
                            return;

                        var _appendLocation = $(appendLocation),
                            inputFile = $this.closest('.file-input'),
                            selector  = function (name ,extraClass) {

                                var select = 'input[type=hidden][name="' + name + '"][value="' + value + '"]';

                                if(extraClass)
                                    select = select + extraClass;

                                return select;
                            },
                            hidden    = '<input class="'+ status +'" type="hidden" name="' + name + '" value="' + value + '"/>';


                        var isNew = $(selector(name.replace('delete_' ,''))).hasClass('new');
                        // this condition will prevent to add delete_hidden if the file is still new and not instretd to pviot table
                        if(status == 'delete' && isNew)
                            return;

                        // this is prevent you from add more than one replaced file
                        if(status == 'replaced' && (isNew || $(selector(name ,'.replaced')).length > 0))
                            return;

                        // add hidden id foreach image uploaded
                        if(_appendLocation.length)
                            _appendLocation.append(hidden);
                        else
                            inputFile.before(hidden);
                    };

                    var deleteHiddenFunc = function (name ,value ,status) {

                        if(!packageAppend)
                            return;

                        var _appendLocation = $(appendLocation),
                            selector       = 'input[type=hidden][name="' + name + '"]';

                        if(value != null)
                            selector += '[value="' + value + '"]';

                        if(status == 'replaced')
                            selector += '.replaced';

                        if(_appendLocation.length)
                            _appendLocation.find(selector).remove();
                        else
                            $(selector).remove();
                    };

                    var changeInputFileData = function (response) {

                        if(!packageAppend)
                            return;

                        var sync = $.Deferred();
                        var fileInputData = [];

                        sync.done(function () {

                            $.each($this.fileinput('getPreview').config , function(i ,v) {
                                fileInputData.push(v.key);
                            });

                            if(response)
                                fileInputData.push(response[_this.id]['id']);

                            if(autoReplace)
                            {
                                $.each(replacedFile,function(k,v){
                                    var i = fileInputData.indexOf(v.key);
                                    fileInputData.splice(i, 1);
                                });
                            }

                        }).done(function( status ) {

                            var _appendLocation = $(appendLocation),
                                inputFile       = $this.closest('.file-input'),
                                hidden          = '<input class="data-file-input" type="hidden" name="' + appendName + '" value="' + fileInputData + '"/>';

                            $this.attr('data-file-input',fileInputData);

                            if(_appendLocation.length) {
                                _appendLocation.find('.data-file-input').remove();
                                _appendLocation.append(hidden);
                            } else {
                                inputFile.parent().find('.data-file-input').remove();
                                inputFile.before(hidden);
                            }
                        });

                        sync.resolve();
                    };

                    var initFileUpload = function (params) {

                        $this.fileinput('destroy');
                        $this.fileinput(params).off('fileimagesloaded').on('fileimagesloaded', function(event) {
                            // This event is triggered when all file images are fully loaded in the preview window.
                            // This is only applicable for image file previews and if showPreview is set to true.
                        }).off('fileloaded').on('fileloaded', function(event, file, previewId, index, reader) {

                            // check image ratio
                            var blob = AUT_UPLOAD.fileUpload.convertFileToObject(file ,'fileToUrlBlob').fileToUrlBlob;
                            var img = new Image;
                            img.onload = function() {

                                var invalid = true;
                                $.each(ratio ,function (i ,v) {
                                    var imageRatio = parseInt(img.width) / parseInt(img.height);
                                    var ratio      = parseInt(v.width) / parseInt(v.height);
                                    if(imageRatio === ratio)
                                        invalid = false;
                                });

                                if(invalid)
                                {
                                    $this.fileinput('updateStack', index, $.extend(file,{'need_crop': true}));
                                    $this.closest('.file-input').find('#' + previewId).prepend($imageCont.find('.need-crop').html());
                                    invalidRatio.push({ previewId: previewId, message: ratioMessage.replace('{name}' ,file.name) });
                                }
                            };
                            img.src = blob;

                            // this event trigger after select new file from browse
                            if(autoReplace)
                                if($this.fileinput('getFilesCount') > params.maxFileCount)
                                    $.each($this.fileinput('getPreview').config , function(i ,v) {

                                        //replaced file
                                        appendHiddenFunc('delete_' + appendName ,v.key ,'replaced');
                                        //push replaced item to array
                                        replacedFile.push($.extend(v.extra ,{ key : v.key }));
                                    });

                            // need crop hide/show upload btn
                            var fileCount = JSPath.apply('.need_crop',$this.fileinput('getFileStack')).length;
                            if(fileCount > 0)
                                $this.closest('.file-input').find('.fileinput-upload').attr('disabled',true);

                        }).off('fileclear').on('fileclear', function(event) {

                            if(autoReplace)
                                if($this.fileinput('getFilesCount') > params.maxFileCount)
                                {
                                    // remove replaced hidden ..
                                    deleteHiddenFunc('delete_' + appendName ,null ,'replaced');
                                    // reset replaced file from replaced items
                                    replacedFile = [];
                                }

                            invalidRatio = [];

                        }).off('fileuploaded').on('fileuploaded', function(event, data, previewId, index) {

                            var response  = data.response;

                            appendHiddenFunc(appendName ,response[_this.id]['id'] ,'new');

                            /*
                             * add hidden ids for exists images
                             */
                            // changeInputFileData(response);

                            if(autoReplace)
                                if($this.fileinput('getFilesCount') > params.maxFileCount)
                                {
                                    // delete delete_repaced hidden
                                    $.each(replacedFile ,function (i ,v) {

                                        // send post for delete replaced files
                                        $.post(params.deleteUrl , $.extend(v,{'autoReplace': true}));

                                        // delete new and uploaded
                                        deleteHiddenFunc(appendName ,v.key);
                                    });

                                    // reset replaced file from replaced items
                                    replacedFile = [];
                                }

                            // reload datatable after upload success
                            if(datatableInitialize == true && data && reloadDatatable)
                                aut_datatable_reload(datatable);

                            if ((typeof $this.data('fileuploaded') != typeof undefined) && $this.data('fileuploaded'))
                                window[$this.data('fileuploaded')](event, data, previewId, index);

                            // hide modal after upload success
                            if($(target).hasClass('modal') && closeModal)
                                $(target).modal('hide');

                        }).off('fileuploaderror').on('fileuploaderror', function(event, data, msg) {

                            if(data.jqXHR.responseJSON) {
                                closeModal  = false;
                                var errorUl = $('.file-error-message').find('ul');
                                errorUl.html('');
                                _.each(data.jqXHR.responseJSON ,function (v ,i) {
                                    var message = "<li data-file-id='" + data.id + "'><b>" + data.filenames[data.index] + " </b>" + data.jqXHR.statusText + "<pre>" + v[0] + "</pre></li>";
                                    errorUl.append(message);
                                });
                            }

                        }).off('filebatchuploaderror').on('filebatchuploaderror', function(event, data, msg) {

                            if(data.jqXHR.responseJSON) {
                                closeModal  = false;
                                var errorUl = $('.file-error-message').find('ul');
                                errorUl.html('');
                                _.each(data.jqXHR.responseJSON ,function (v ,i) {
                                    var message = "<li data-file-id='" + data.id + "'>" + data.jqXHR.statusText + "<pre>" + v[0] + "</pre></li>";
                                    errorUl.append(message);
                                });
                            }

                        }).off('filedeleted').on('filedeleted', function(event, key, jqXHR, data) {

                            appendHiddenFunc('delete_' + appendName ,key ,'delete');

                            deleteHiddenFunc(appendName ,key);

                            // changeInputFileData();

                            // reload datatable after upload success
                            if(datatableInitialize == true && data && reloadDatatable)
                                aut_datatable_reload(datatable);

                            if ((typeof $this.data('filedeleted') != typeof undefined) && $this.data('filedeleted'))
                                window[$this.data('filedeleted')](event, key, jqXHR, data);

                        }).off('filepreupload').on('filepreupload', function(event, data, previewId, index) {

                            console.log(data.files);
                            var message = JSPath.apply('.{.previewId == "' + previewId + '"}',invalidRatio)[0].message;
                            if (message && !data.files[index].crop) {
                                return {
                                    message: message,
                                    data: {data: data.files[index]}
                                };
                            }

                        }).off('filecustomerror').on('filecustomerror', function(event, params) {

                            // params.abortData will contain the additional abort data passed
                            // params.abortMessage will contain the aborted error message passed

                            // if(params.files[0].crop) {
                            //     $this.fileinput('upload');
                            // }

                        }).off('filezoomshow').on('filezoomshow', function(event, params) {

                            $(params.modal).find('.kv-zoom-title').html($('#'+params.previewId).find('.file-footer-caption').text());
                        });
                        /*
                        .on('filereset', function(event){ })
                        .on('fileselectnone', function(event) { })
                        .on('fileselect', function(event, numFiles, label) { })
                        .on('filebatchselected', function(event, files) { })
                        .on('filebrowse', function(event) { })
                        .on('filepreremove', function(event, id, index) { })
                        .on('fileremoved', function(event, id, index) { })
                        .on('filebeforedelete', function(event, key, data) { })
                        .on('filepredelete', function(event, key, jqXHR, data) { })
                        .on('filedeleted', function(event, key, jqXHR, data) { })
                        .on('filesuccessremove', function(event, id) {  })
                        .on('filecleared', function(event) { })
                        .on('change', function(event) { });*/

                        $this.closest('.file-input').off('click','.btn-attr-image').on('click' ,'.btn-attr-image' ,function () {

                            var $this = $(this);

                            $this.popover({
                                animation: true,
                                html: true,
                                content: $imageCont.find('.popover-alt-form').html(),
                                delay: { "show": 100, "hide": 100 },
                                placement: 'top',
                                trigger: 'manual',
                                template: '<div class="popover" style="border:0;" role="tooltip"><div class="popover-content p-0"></div></div>',
                            });

                            $this.off('shown.bs.popover').on('shown.bs.popover', function () {

                                var $popover = $('.popover');
                                // set data with hidden
                                $popover.find('#image_id').val($this.attr('data-key'));
                                // get data if exists
                                $.get($popover.find('form').data('get-data'),{ image_id: $this.attr('data-key') },function (res) {
                                    $popover.find('form [data-json]').map(function (i,input) {
                                        var input = $(input);
                                        input.val(res['info'][input.data('json')]);
                                    });
                                    $popover.find('.whirl').removeClass('whirl');
                                });
                                // init form
                                if(AUT_FORM_COMPONENT.validate)
                                    AUT_FORM_COMPONENT.validate.init('.ajaxCont');
                            });

                            $this.popover('toggle');
                        });

                        $('body')
                            .off('click.fileuploade_popover_attr_close','.modal')
                            .on('click.fileuploade_popover_attr_close','.modal', function(e){

                                if(!$(e.target).closest('.popover').length)
                                    $('.popover').popover('hide');
                            });

                        if(cropper) {

                            $this.closest('.file-input').on('click' ,'.btn-crop-image', function() {

                                var $cropImageBtn         = $(this),
                                    $cropperModal         = $(cropperModal),
                                    $cropRaio             = $cropperModal.find('.crop-ratio'),
                                    $cropRaioButtons      = $cropperModal.find('.ratio-button'),
                                    $cropRaioHiddenButton = $cropperModal.find('.crop-ratio-button-hidden');

                                if(allowRatio) {

                                    $cropRaio.removeClass('hide').show();
                                    $cropRaioButtons.html('');
                                    $.each(ratio ,function (i ,v) {

                                        var button = $cropRaioHiddenButton.clone(true ,true).removeClass('crop-ratio-button-hidden hide').show();
                                        button.attr('data-ratio' ,i);
                                        button.attr('data-width' ,v['width']);
                                        button.attr('data-height' ,v['height']);
                                        button.text(( v['title'] || i ) + ' ( ' + v['width'] + ' × ' + v['height'] + button.data('pixel') + ' )');
                                        $cropRaioButtons.append(button);
                                    });
                                } else {

                                    $cropRaio.addClass('hide').hide();
                                }

                                var $thisBtn   = $(this),
                                    $fileindex = $thisBtn.closest('div.kv-preview-thumb').data('fileindex');

                                var id = '#' + _this.id + AUT_UPLOAD.fileUpload.selector,
                                    files = $(id).fileinput('getFileStack'),
                                    file  = files[$fileindex];

                                $(cropperModal).off('shown.bs.modal').on('shown.bs.modal', function (event) {

                                    $(cropperModal).find(cropperSelector)
                                        .attr('data-fileindex' ,$fileindex)
                                        .attr('data-model'     ,_this.id)
                                        .attr('data-target'    ,id)
                                        .attr('data-width'     ,imageWidth)
                                        .attr('data-height'    ,imageHeight)
                                        .attr('data-maxWidth'  ,maxImageWidth)
                                        .attr('data-maxHeight' ,maxImageHeight)
                                        .attr('data-minHeight' ,minImageHeight)
                                        .attr('data-minWidth'  ,minImageWidth);

                                    AUT_UPLOAD.CROPPER.init(cropperSelector ,file ,$cropImageBtn);
                                });

                                $(cropperModal).modal('show');
                            });
                        }
                    };

                    if(datatableInitialize == true && data) {

                        var images = JSPath.apply(datatableInitializeProperty ,data);

                        _.each(images ,function (row ,index) {

                            if (row)
                                initialPreviewFunc({
                                    url : row.image_url,
                                    type : row.type,
                                    caption : row.name,
                                    size: row.size,
                                    key: row.id,
                                    extra : {file_name: row.hash_name }
                                });
                        });

                        initFileUpload(params);

                    } else if (datatableInitialize == false) {

                        var ids = [],
                            appendLocation = appendLocation ? $(appendLocation) : $this.closest('.file-input').parent(),
                            capture        = appendLocation.find('[name="' + appendName + '"]').not('.data-file-input'),
                            fileInputData  = $this.attr('data-file-input');

                        if(fileInputData) {
                            ids = fileInputData.split(',');
                        } else if(capture.length) {
                            capture.each(function (i ,v) {
                                ids.push($(v).val());
                            });
                        }

                        $.get(uploadUrl , $.extend(params.uploadExtraData ,{ images_id : ids }) ,function (data) {

                            _.each(data ,function (row ,index) {

                                if(row)
                                    initialPreviewFunc({
                                        url : row.image_url,
                                        type : row.type,
                                        caption : row.name,
                                        size: row.size,
                                        key: row.id,
                                        extra : {file_name: row.hash_name }
                                    });
                            });

                            initFileUpload(params);
                        });
                    }
                });
            }
        },
    },

    CROPPER : {
        // aut-cropper-datatable
        // aut-cropper-modal
        // aut-cropper-file-upload

        blobURL : '',

        file : [],

        placeImage : function (param) {

            var checkFileExists = typeof param.file != typeof undefined,
                fileType        = checkFileExists ? /^image\/\w+$/.test(param.file.type) : undefined,
                name            = checkFileExists ? param.file.name : undefined;

            if(name) {
                $(param.inputName).val(name.replaceAll(/\..+/,''));
                $(param.inputName).attr('data-real-ext' ,(_.head(name.match(/\..+/))).replace(/./,''));
            } else {
                $(param.inputName).val('');
                $(param.inputName).attr('data-real-ext','');
            }

            if (fileType) {

                AUT_UPLOAD.CROPPER.blobURL = URL.createObjectURL(param.file);

                var image = $(param.image);

                image.attr('src', AUT_UPLOAD.CROPPER.blobURL);

                image.load(function () {

                    image.cropper('destroy').cropper(param.options);

                    if(param.setRatioCallback)
                        param.setRatioCallback();
                });

                if($(param.inputImage).length)
                    $(param.inputImage).val('');

            } else {
                alert('Please choose an image file.');
            }
        },

        ratio : function ($image ,$width ,$height) {

            $image.cropper('setAspectRatio', (parseFloat($width) / parseFloat($height)));
            $image.cropper('setData',{width : $width , height : $height });
        },

        init: function (selector ,fileUpload ,cropImageBtn) {

            if (!$.fn.cropper) return;

            $(selector).each(function() {

                var $this           = $(this),
                    $image          = $this.find('.img-container > img'),
                    $inputImage     = $this.find('#inputImage'),
                    $inputName      = $this.find('#ImageName'),
                    URL             = window.URL || window.webkitURL,
                    imageDimintion  = $image[0].width * $image[0].height,
                    rationDimintion = $this.data('width') * $this.data('height'),

                options = {
                    // data: {
                    //   x: 420,
                    //   y: 60,
                    //   width: 640,
                    //   height: 360
                    // },
                    // strict: false,
                    // responsive: false,
                    // checkImageOrigin: false,

                    // modal: false,
                    // guides: false,
                    // highlight: false,
                    // background: false,

                    // autoCrop: false,
                    // autoCropArea: 0.5,
                    // dragCrop: false,
                    // rotatable: false,
                    // zoomable: false,
                    // touchDragZoom: false,
                    // mouseWheelZoom: false,
                    // cropBoxResizable: false,
                    // doubleClickToggle: false,

                    // minCanvasWidth: 320,
                    // minCanvasHeight: 180,
                    // minCropBoxWidth: 160,
                    // minCropBoxHeight: 90,
                    // minContainerWidth: 320,
                    // minContainerHeight: 180,

                    // build: null,
                    // built: null,
                    // dragstart: null,
                    // dragmove: null,
                    // dragend: null,
                    // zoomin: null,
                    // zoomout: null,

                    // minWidth: 256,
                    // minHeight: 256,
                    // maxWidth: 4096,
                    // maxHeight: 4096,
                    // imageSmoothingEnabled: true,
                    // imageSmoothingQuality: 'high',

                    width: rationDimintion < imageDimintion ? $this.data('width') : $image[0].width,
                    height: rationDimintion < imageDimintion ? $this.data('height') : $image[0].height,
                    fillColor: 'transparent',
                    movable: true,
                    cropBoxMovable: true,
                    dragMode: 'move',
                    viewMode: 2,
                    aspectRatio: 16 / 9,
                    preview: '.img-preview',
                    crop: function(data) {
                        $this.find('#dataX').val(Math.round(data.x));
                        $this.find('#dataY').val(Math.round(data.y));
                        $this.find('#dataHeight').val(Math.round(data.height));
                        $this.find('#dataWidth').val(Math.round(data.width));
                        $this.find('#dataRotate').val(Math.round(data.rotate));
                    }
                };

                // console.log(rationDimintion < imageDimintion ? $this.data('width') : $image[0].width);
                // console.log(rationDimintion < imageDimintion ? $this.data('height') : $image[0].height);
                // console.log('rationDimintion :',$this.data('width'),$this.data('height'));
                // console.log('imageDimintion :',$image[0].width,$image[0].height);

                $image.on({
                    'build.cropper': function (e) {
                        //console.log(e.type);
                    },
                    'built.cropper': function (e) {
                        //console.log(e.type);
                    },
                    'dragstart.cropper': function (e) {
                        //console.log(e.type, e.dragType);
                    },
                    'dragmove.cropper': function (e) {
                        //console.log(e.type, e.dragType);
                    },
                    'dragend.cropper': function (e) {
                        //console.log(e.type, e.dragType);
                    },
                    'zoomin.cropper': function (e) {
                        //console.log(e.type);
                    },
                    'zoomout.cropper': function (e) {
                        //console.log(e.type);
                    },
                    'change.cropper': function (e) {
                        //console.log(e.type);
                    }

                }).cropper(options);

                window.URL.revokeObjectURL(AUT_UPLOAD.CROPPER.blobURL);

                if(fileUpload) {

                    AUT_UPLOAD.CROPPER.file = fileUpload;

                    AUT_UPLOAD.CROPPER.placeImage({
                        image : $image ,
                        inputName : $inputName,
                        inputImage : $inputImage,
                        file : AUT_UPLOAD.CROPPER.file,
                        options : options,
                        setRatioCallback: function () {

                            var ratioWidth  = $image.data('ratio-width'),
                                ratioHeight = $image.data('ratio-height');

                            AUT_UPLOAD.CROPPER.ratio($image ,ratioWidth || $this.attr('data-width') ,ratioHeight || $this.attr('data-height'));
                        }
                    });
                }

                $this.off('click').on('click', '[data-method]', function() {

                    var $_this = $(this),data = $_this.data(),
                        $target,
                        result;

                    if (!$image.data('cropper')) {
                        return;
                    }

                    if($_this.data('method') === 'resetOption') {

                        $this.find('.docs-options :checkbox').each(function(index ,value){

                            var $_this = $(this);

                            if (!$image.data('cropper')) {
                                return;
                            }

                            if($_this.prop('checked') == false) {

                                $_this.prop('checked' ,true);
                                options[$_this.val()] = $_this.prop('checked');
                            }
                        });

                        AUT_UPLOAD.CROPPER.placeImage({
                            image : $image ,
                            inputName : $inputName,
                            inputImage : $inputImage,
                            file : AUT_UPLOAD.CROPPER.file,
                            options : options,
                        });

                        return;
                    }

                    if($_this.data('method') === 'setRatio') {

                        // AUT_UPLOAD.CROPPER.ratio($image ,$this.find('#dataWidth').val() ,$this.find('#dataHeight').val())
                        AUT_UPLOAD.CROPPER.ratio($image ,$this.data('width') ,$this.data('height'));

                        return;
                    }

                    if($_this.data('method') === 'cropResize') {

                        var ratio  = $_this.data('ratio'),
                            width  = $_this.data('width'),
                            height = $_this.data('height');

                        AUT_UPLOAD.CROPPER.ratio($image ,width ,height);

                        $_this.siblings('button').removeAttr('style');
                        $_this.attr('style' ,'background-color :#27c24c;');

                        $image.data('ratio-width' ,width);
                        $image.data('ratio-height' ,height);
                        $image.data('ratio' ,ratio);

                        return;
                    }

                    if (data.method) {
                        data = $.extend({}, data); // Clone a new one

                        if (typeof data.target !== 'undefined') {
                            $target = $(data.target);

                            if (typeof data.option === 'undefined') {
                                try {
                                    data.option = JSON.parse($target.val());
                                } catch (e) {
                                    console.log(e.message);
                                }
                            }
                        }

                        result = $image.cropper(data.method, data.option);

                        if (data.method === 'getCroppedCanvas') {

                            if(data.type == 'crop') {

                                var cropper = $this,
                                    realExt = '';

                                switch ($inputName.attr('data-real-ext'))
                                {
                                    case 'png': {realExt = 'png'}; break;
                                    default: { realExt = 'jpeg' };break;
                                }

                                result.toBlob(function (blob) {

                                    var target    = $(cropper.attr('data-target')),
                                        name      = $inputName.val() + '.' + realExt,
                                        real_name = name.split(',_,')[0];

                                    if(typeof $image.data('ratio') != typeof undefined)
                                        name = [ real_name , $image.data('ratio') ].join(',_,');

                                    $.extend(blob ,{ name : name ,crop : true});

                                    target.fileinput('updateStack', cropper.attr('data-fileindex') , blob);

                                    var object = result.toDataURL('image/' + realExt,'image/' + realExt, 0.8);

                                    target.closest('.file-input').find("[data-fileindex=" + cropper.attr('data-fileindex') + "] img").attr('src' ,object);

                                    target.closest('.file-input').find("[data-fileindex=" + cropper.attr('data-fileindex') + "] .file-footer-caption").html(real_name + "</br><samp>(" + AUT_UPLOAD.fileUpload.formatBytes(blob.size) + ")</samp>");

                                    var modal = $this.closest('.modal');

                                    if(modal.length)
                                        modal.modal('hide');

                                    // need crop hide/show upload btn
                                    // enabled upload button if cropped image = 0
                                    if(JSPath.apply('.need_crop',target.fileinput('getFileStack')).length == 0)
                                        target.closest('.file-input').find('.fileinput-upload').attr('disabled',false);

                                    cropImageBtn.closest('.file-preview-frame').find('.need-crop-label').remove();

                                },'image/' + realExt, 0.8);

                                return;
                            }

                            if(data.type == 'upload') {

                                //$('#getCroppedCanvasModal').modal().find('.modal-body').html(result);

                                //result.toDataURL('image/jpeg');
                                //.cropper('get-cropped-canvas').toDataURL('image/jpeg');
                                $image.cropper("getCroppedCanvas").toBlob(function (blob) {

                                    // var formData = new FormData();
                                    //
                                    // // dont forget add name to file upload blob
                                    // formData.append('croppedImage', blob);
                                    //
                                    // $.ajax('/path/to/upload', {
                                    //     method: "POST",
                                    //     data: formData,
                                    //     processData: false,
                                    //     contentType: false,
                                    //     success: function () {
                                    //         console.log('Upload success');
                                    //     },
                                    //     error: function () {
                                    //         console.log('Upload error');
                                    //     }
                                    // });
                                    //upload cropper
                                });

                                return;
                            }
                        }

                        if ($.isPlainObject(result) && $target) {
                            try {
                                $target.val(JSON.stringify(result));
                            } catch (e) {
                                console.log(e.message);
                            }
                        }
                    }

                }).on('keydown', function(e) {

                    if (!$image.data('cropper')) {
                        return;
                    }

                    switch (e.which) {
                        //left arrow
                        case 37:
                            e.preventDefault();
                            $image.cropper('move', -1, 0);
                            break;

                        //up arrow
                        case 38:
                            e.preventDefault();
                            $image.cropper('move', 0, -1);
                            break;

                        //right arrow
                        case 39:
                            e.preventDefault();
                            $image.cropper('move', 1, 0);
                            break;

                        //down arrow
                        case 40:
                            e.preventDefault();
                            $image.cropper('move', 0, 1);
                            break;
                    }
                });

                if (URL) {
                    $inputImage.off('change').on('change' ,function() {
                        var files = this.files;

                        if (!$image.data('cropper')) {
                            return;
                        }

                        if (files && files.length) {

                            AUT_UPLOAD.CROPPER.file = files[0];

                            AUT_UPLOAD.CROPPER.placeImage({
                                image : $image ,
                                inputName : $inputName,
                                inputImage : $(this),
                                file : AUT_UPLOAD.CROPPER.file,
                                options : options,
                            });
                        }
                    });
                } else {
                    $inputImage.parent().remove();
                }

                $this.find('.docs-options').off('change').on('change', ':checkbox', function() {

                    var $_this = $(this),
                        type = $_this.prop('type'),
                        cropBoxData,
                        canvasData;

                    if (!$image.data('cropper')) {
                        return;
                    }

                    if (type === 'checkbox') {

                        options[$_this.val()] = $_this.prop('checked');
                        cropBoxData = $image.cropper('getCropBoxData');
                        canvasData = $image.cropper('getCanvasData');

                        options.ready = function() {
                            $image.cropper('setCropBoxData', cropBoxData);
                            $image.cropper('setCanvasData', canvasData);
                        };
                    }

                    AUT_UPLOAD.CROPPER.placeImage({
                        image : $image ,
                        inputName : $inputName,
                        inputImage : $inputImage,
                        file : AUT_UPLOAD.CROPPER.file,
                        options : options,
                    });
                });

                $this.off('click.ratio').on('click.ratio' ,'.ratio' ,function () {

                    if(isNaN($(this).data('option')))
                        $('.cropper').find('#dataWidth ,#dataHeight').prop('readonly' , false);
                    else
                        $('.cropper').find('#dataWidth ,#dataHeight').prop('readonly' , true);
                });
            });
        },

        destroy : function (selector) {

            $(selector).find('.img-container > img').cropper('destroy');
        }
    },

    initFileUploadWithDatatable : function ($thisRow ,ImageModalId ,datatableId ,$param = '') {

        var inputFile = $(ImageModalId).find('.upload-file'),
            datatableRaw = _aut_datatable_getSelectedRowData(datatableId ,$($thisRow).closest('tr'));

        var $param = $param ? $param : 'id=' + $($thisRow).data('key');

        inputFile.attr('data-param' ,$param);

        AUT_UPLOAD.fileUpload.load(inputFile ,datatableRaw);

        $(ImageModalId).modal('show');
    },
};

/**=========================================================
 * Module: Image Upload And Cropper
 =========================================================*/

(function(window, document, $, undefined) {

    $(function() {

        AUT_UPLOAD.CROPPER.init();

        AUT_UPLOAD.fileUpload.load('.upload-file.load-file');
    });

})(window, document, window.jQuery);
