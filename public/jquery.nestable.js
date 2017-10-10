/*!
 * Nestable jQuery Plugin - Copyright (c) 2012 David Bushell - http://dbushell.com/
 * Dual-licensed under the BSD or MIT licenses
 *
 * Modified :
 * 		Added a few callbacks
 * 			afterInit
 * 			beforeDragStart
 *			dragStart
 *			beforeDragEnd
 *			dragEnd
 *			dragMove
 */
;(function($, window, document, undefined)
{
    var hasTouch = 'ontouchstart' in document;
    // added by basheer
    var nestableCopy;
    // end added by basheer

    /**
     * Detect CSS pointer-events property
     * events are normally disabled on the dragging element to avoid conflicts
     * https://github.com/ausi/Feature-detection-technique-for-pointer-events/blob/master/modernizr-pointerevents.js
     */
    var hasPointerEvents = (function()
    {
        var el    = document.createElement('div'),
            docEl = document.documentElement;
        if (!('pointerEvents' in el.style)) {
            return false;
        }
        el.style.pointerEvents = 'auto';
        el.style.pointerEvents = 'x';
        docEl.appendChild(el);
        var supports = window.getComputedStyle && window.getComputedStyle(el, '').pointerEvents === 'auto';
        docEl.removeChild(el);
        return !!supports;
    })();

    var defaults = {
        listNodeName    : 'ol',
        itemNodeName    : 'li',
        rootClass       : 'dd',
        listClass       : 'dd-list',
        itemClass       : 'dd-item',
        dragClass       : 'dd-dragel',
        handleClass     : 'dd-handle',
        collapsedClass  : 'dd-collapsed',
        placeClass      : 'dd-placeholder',
        noDragClass     : 'dd-nodrag',
        emptyClass      : 'dd-empty',
        emptyText       : '',
        expandBtnHTML   : '<button data-action="expand" type="button">Expand</button>',
        collapseBtnHTML : '<button data-action="collapse" type="button">Collapse</button>',
        group           : 0,
        maxDepth        : 5,
        threshold       : 20,

        // added by basheer
        scroll              : false,
        scrollSensitivity   : 1,
        scrollSpeed         : 5,
        scrollTriggers      : {
            top: 40,
            left: 40,
            right: -40,
            bottom: -40
        },
        clone           : false,
        insertable      : true,
        reject          : [],
        // end added by basheer

        /* callback */
        afterInit: null,

        //method has 1 argument in which sends an object containing all
        //necessary details
        dropCallback    : null
    };

    function Plugin(element, options)
    {
        this.w  = $(document);
        this.el = $(element);

        // added by basheer
        this.rtl = this.el.css('direction') == "rtl";
        // end added by basheer

        this.options = $.extend({}, defaults, options);
        this.init();
    }

    Plugin.prototype = {

        init: function()
        {
            var list = this;

            list.reset();

            list.el.data('nestable-group', this.options.group);
            //added by basheer
            list.el.data('nestable-group_source', this.options.group_source);
            list.el.data('nestable-insertable', this.options.insertable);
            // end added by basheer

            list.placeEl = $('<div class="' + list.options.placeClass + '"/>');

            $.each(this.el.find(list.options.itemNodeName), function(k, el) {
                list.setParent($(el));
            });

            list.el.on('click', 'button', function(e) {
                if (list.dragEl) {
                    return;
                }
                var target = $(e.currentTarget),
                    action = target.data('action'),
                    item   = target.parent(list.options.itemNodeName);
                if (action === 'collapse') {
                    list.collapseItem(item);
                }
                if (action === 'expand') {
                    list.expandItem(item);
                }
            });

            var onStartEvent = function(e)
            {
                var handle = $(e.target);

                // added by basheer
                list.nestableCopy = handle.closest('.'+list.options.rootClass).clone(true);
                // end added by basheer

                /* callback for beforeDragStart */
                list.el.trigger('beforeDragStart', [handle]);

                if (!handle.hasClass(list.options.handleClass)) {
                    if (handle.closest('.' + list.options.noDragClass).length) {
                        return;
                    }
                    handle = handle.closest('.' + list.options.handleClass);
                }

                if (!handle.length || list.dragEl) {
                    return;
                }

                list.isTouch = /^touch/.test(e.type);
                if (list.isTouch && e.touches.length !== 1) {
                    return;
                }

                e.preventDefault();
                list.dragStart(e.touches ? e.touches[0] : e);

                /* callback for dragStart */
                var item = list.dragEl.find('.'+list.options.itemClass);
                list.dragRootEl.trigger('dragStart', [
                    item,           // List item
                    list.el        // Source list
                ]);
            };

            var onMoveEvent = function(e)
            {
                if (list.dragEl) {
                    e.preventDefault();
                    list.dragMove(e.touches ? e.touches[0] : e);
                    /* callback for dragMove */
                    var item = list.dragEl.find('.'+list.options.itemClass);
                    list.dragRootEl.trigger('dragMove', [
                        item,           // List item
                        list.el,       // Source list
                        list.dragRootEl // Destination
                    ]);
                }
            };

            var onEndEvent = function(e)
            {
                if (!list.dragEl) return;
                e.preventDefault();

                var feedback = {abort: false};

                var item = list.dragEl.find('.'+list.options.itemClass);
                var sourceList = list.el;
                var destinationList = list.dragRootEl;
                var position = list.placeEl.index();

                destinationList.trigger('beforeDragEnd', [
                    item,               // List item
                    sourceList,         // Source list
                    destinationList,    // Destination list
                    position,           // Position
                    feedback
                ]);

                if (feedback.abort) return;

                list.dragStop(e.touches ? e.touches[0] : e);

                destinationList.trigger('dragEnd', [
                    item,               // List item
                    sourceList,         // Source list
                    destinationList,    // Destination list
                    position            // Position
                ]);
            };

            if (hasTouch) {
                list.el[0].addEventListener('touchstart', onStartEvent, false);
                window.addEventListener('touchmove', onMoveEvent, false);
                window.addEventListener('touchend', onEndEvent, false);
                window.addEventListener('touchcancel', onEndEvent, false);
            }

            list.el.on('mousedown', onStartEvent);
            list.w.on('mousemove', onMoveEvent);
            list.w.on('mouseup', onEndEvent);

            /* callback for afterInit */
            if (typeof list.options.afterInit == 'function') {
                list.options.afterInit.call(window, this);
            }

            //added by basheer
            var destroyNestable = function()
            {
                list.el.find("button[data-action]").remove();

                if (hasTouch) {
                    list.el[0].removeEventListener('touchstart', onStartEvent, false);
                    window.removeEventListener('touchmove', onMoveEvent, false);
                    window.removeEventListener('touchend', onEndEvent, false);
                    window.removeEventListener('touchcancel', onEndEvent, false);
                }

                list.el.off('mousedown', onStartEvent);
                list.w.off('mousemove', onMoveEvent);
                list.w.off('mouseup', onEndEvent);

                list.el.off('click');
                list.el.unbind('destroy-nestable');

                list.el.data("nestable", null);
            };

            list.el.bind('destroy-nestable', destroyNestable);
            //end by basheer
        },

        //added by basheer
        destroy: function () {

            this.el.trigger('destroy-nestable');
        },
        //end by basheer

        serialize: function()
        {
            var data,
                depth = 0,
                list  = this;

            //added by basheer
            getAttributes = function(dom)
            {
                var attributes = {};
                $.each( dom.get(0).attributes, function(i, attrib){
                    if (attrib.name.match("^data-")) attributes[attrib.name.slice(5)] = attrib.value;
                });
                return attributes;
            }
            //end added by basheer
            step  = function(level, depth)
            {
                var array = [ ],
                    items = level.children(list.options.itemNodeName);
                items.each(function()
                {
                    var li   = $(this),
                        // update by basheer
                        item = $.extend({}, li.data()),
                        // item = $.extend({}, li.data,getAttributes(li)),
                        // item = $.extend({}, getAttributes(li)),
                        // end update by basheer
                        sub  = li.children(list.options.listNodeName);
                    if (sub.length) {
                        item.children = step(sub, depth + 1);
                    }
                    array.push(item);
                });
                return array;
            };
            data = step(list.el.find(list.options.listNodeName).first(), depth);
            return data;
        },

        serialise: function()
        {
            return this.serialize();
        },

        reset: function()
        {
            this.mouse = {
                offsetX   : 0,
                offsetY   : 0,
                startX    : 0,
                startY    : 0,
                lastX     : 0,
                lastY     : 0,
                nowX      : 0,
                nowY      : 0,
                distX     : 0,
                distY     : 0,
                dirAx     : 0,
                dirX      : 0,
                dirY      : 0,
                lastDirX  : 0,
                lastDirY  : 0,
                distAxX   : 0,
                distAxY   : 0
            };
            this.isTouch    = false;
            this.moving     = false;
            this.dragEl     = null;
            this.dragRootEl = null;
            this.dragDepth  = 0;
            this.hasNewRoot = false;
            this.pointEl    = null;
            this.sourceRoot = null;
        },

        expandItem: function(li)
        {
            li.removeClass(this.options.collapsedClass);
            li.children('[data-action="expand"]').hide();
            li.children('[data-action="collapse"]').show();
            li.children(this.options.listNodeName).show();

            // added by basheer
            this.el.trigger('expand', [li]);
            // end added by basheer
        },

        collapseItem: function(li)
        {
            var lists = li.children(this.options.listNodeName);
            if (lists.length) {
                li.addClass(this.options.collapsedClass);
                li.children('[data-action="collapse"]').hide();
                li.children('[data-action="expand"]').show();
                li.children(this.options.listNodeName).hide();
            }

            // added by basheer
            this.el.trigger('collapse', [li]);
            // end added by basheer
        },

        expandAll: function()
        {
            var list = this;
            list.el.find(list.options.itemNodeName).each(function() {
                list.expandItem($(this));
            });
        },

        collapseAll: function()
        {
            var list = this;
            list.el.find(list.options.itemNodeName).each(function() {
                list.collapseItem($(this));
            });
        },

        setParent: function(li)
        {
            if (li.children(this.options.listNodeName).length) {
                li.prepend($(this.options.expandBtnHTML));
                li.prepend($(this.options.collapseBtnHTML));
            }
            li.children('[data-action="expand"]').hide();
        },

        unsetParent: function(li)
        {
            li.removeClass(this.options.collapsedClass);
            li.children('[data-action]').remove();
            li.children(this.options.listNodeName).remove();
        },

        dragStart: function(e)
        {
            var mouse    = this.mouse,
                target   = $(e.target),

                // update by basheer
                //dragItem = target.closest(this.options.itemNodeName);
                dragItem = target.closest('.' + this.options.handleClass).closest(this.options.itemNodeName);
                // end update by basheer

            // added by basheer
            this.handle = target.closest('.' + this.options.handleClass);
            mouse.handleOffsetX = e.pageX - this.handle.offset().left;
            mouse.handleOffsetY = e.pageY - this.handle.offset().top;
            this.target_width = this.handle.width(); // for rtl
            // end added by basheer

            this.sourceRoot = target.closest('.' + this.options.rootClass);
            this.placeEl.css('height', dragItem.height());

            mouse.offsetX = e.offsetX !== undefined ? e.offsetX : e.pageX - target.offset().left;
            mouse.offsetY = e.offsetY !== undefined ? e.offsetY : e.pageY - target.offset().top;
            mouse.startX = mouse.lastX = e.pageX;
            mouse.startY = mouse.lastY = e.pageY;

            this.dragRootEl = this.el;

            this.dragEl = $(document.createElement(this.options.listNodeName)).addClass(this.options.listClass + ' ' + this.options.dragClass);
            this.dragEl.css('width', dragItem.width());

            // old
            // dragItem.after(this.placeEl);
            // dragItem[0].parentNode.removeChild(dragItem[0]);
            // dragItem.appendTo(this.dragEl);

            // added by basheer
            if(this.options.insertable){
                dragItem.after(this.placeEl);
            }
            if(this.options.clone) {
                dragItem.clone().appendTo(this.dragEl);
            } else {
                /* appendTo(obj) also remove obj
                   dragItem[0].parentNode.removeChild(dragItem[0]); */
                dragItem.appendTo(this.dragEl);
            }
            // end added by basheer

            // added by basheer
            var rtlFix = 0;
            if( this.rtl )
                rtlFix = this.dragEl.width() - this.target_width;
            // end added by basheer

            $(document.body).append(this.dragEl);
            this.dragEl.css({
                // updated by basheer
                //'left' : e.pageX - mouse.offsetX,
                //'top'  : e.pageY - mouse.offsetY
                'left' : e.pageX - mouse.handleOffsetX - rtlFix,
                'top'  : e.pageY - mouse.handleOffsetY
                // end updated by basheer
            });
            // total depth of dragging item
            var i, depth,
                items = this.dragEl.find(this.options.itemNodeName);
            for (i = 0; i < items.length; i++) {
                depth = $(items[i]).parents(this.options.listNodeName).length;
                if (depth > this.dragDepth) {
                    this.dragDepth = depth;
                }
            }
        },

        dragStop: function(e)
        {
            var el = this.dragEl.children(this.options.itemNodeName).first();
            el[0].parentNode.removeChild(el[0]);
            this.placeEl.replaceWith(el);

            // remove by basheer
            // this.dragEl.remove();
            // this.el.trigger('change');
            // if (this.hasNewRoot) {
            //     this.dragRootEl.trigger('change');
            // }
            // end remove by basheer

            // added by basheer
            var i;
            var isRejected = false;
            for (i in this.options.reject) {
                var reject = this.options.reject[i];
                if (reject.rule.apply(this.dragRootEl, el)) {
                    var nestableDragEl = el.clone(true);
                    this.dragRootEl.html(this.nestableCopy.children().clone(true));
                    if (reject.action) {
                        reject.action.apply(this.dragRootEl, [nestableDragEl]);
                    }
                    isRejected = true;
                    break;
                }
            }

            //Let's find out new parent id
            var parentItem = el.parent().parent();
            var parentId = null;
            if(parentItem !== null && !parentItem.is('.' + this.options.rootClass))
                parentId = parentItem.data('id');

            if($.isFunction(this.options.dropCallback)) {
                var details = {
                    sourceId   : el.data('id'),
                    destId     : parentId,
                    sourceEl   : el,
                    destParent : parentItem,
                    destRoot   : el.closest('.' + this.options.rootClass),
                    sourceRoot : this.sourceRoot
                };
                this.options.dropCallback.call(this, details);
            }

            if (!isRejected) {
                this.el.trigger('change');
                if (this.hasNewRoot) {
                    this.dragRootEl.trigger('change');
                }
            }

            this.dragEl.remove();
            // end added by basheer
            this.reset();
        },

        dragMove: function(e)
        {
            var list, parent, prev, next, depth,
                opt   = this.options,
                mouse = this.mouse;

            // added by basheer
            var rtlFix = 0;
            if( this.rtl )
                rtlFix = this.dragEl.width() - this.target_width;
            // end added by basheer

            this.dragEl.css({

                // updated by basheer
                // 'left' : e.pageX - mouse.offsetX,
                // 'top'  : e.pageY - mouse.offsetY
                'left' : e.pageX - mouse.handleOffsetX - rtlFix,
                'top'  : e.pageY - mouse.handleOffsetY
                // end updated by basheer
            });

            // mouse position last events
            mouse.lastX = mouse.nowX;
            mouse.lastY = mouse.nowY;
            // mouse position this events
            mouse.nowX  = e.pageX;
            mouse.nowY  = e.pageY;
            // distance mouse moved between events
            mouse.distX = mouse.nowX - mouse.lastX;
            mouse.distY = mouse.nowY - mouse.lastY;
            // direction mouse was moving
            mouse.lastDirX = mouse.dirX;
            mouse.lastDirY = mouse.dirY;
            // direction mouse is now moving (on both axis)
            mouse.dirX = mouse.distX === 0 ? 0 : mouse.distX > 0 ? 1 : -1;
            mouse.dirY = mouse.distY === 0 ? 0 : mouse.distY > 0 ? 1 : -1;
            // axis mouse is now moving on
            var newAx   = Math.abs(mouse.distX) > Math.abs(mouse.distY) ? 1 : 0;

            // do nothing on first move
            if (!mouse.moving) {
                mouse.dirAx  = newAx;
                mouse.moving = true;
                return;
            }

            // added by basheer
            //Do scrolling
            if (opt.scroll) {
                var scrolled = false;
                var scrollParent = this.el.scrollParent()[0];
                if(scrollParent != document && scrollParent.tagName != 'HTML') {
                    if((opt.scrollTriggers.bottom + scrollParent.offsetHeight) - e.pageY < opt.scrollSensitivity)
                        scrollParent.scrollTop = scrolled = scrollParent.scrollTop + opt.scrollSpeed;
                    else if(e.pageY - opt.scrollTriggers.top < opt.scrollSensitivity)
                        scrollParent.scrollTop = scrolled = scrollParent.scrollTop - opt.scrollSpeed;

                    if((opt.scrollTriggers.right + scrollParent.offsetWidth) - e.pageX < opt.scrollSensitivity)
                        scrollParent.scrollLeft = scrolled = scrollParent.scrollLeft + opt.scrollSpeed;
                    else if(e.pageX - opt.scrollTriggers.left < opt.scrollSensitivity)
                        scrollParent.scrollLeft = scrolled = scrollParent.scrollLeft - opt.scrollSpeed;
                } else {
                    if(e.pageY - $(document).scrollTop() < opt.scrollSensitivity)
                        scrolled = $(document).scrollTop($(document).scrollTop() - opt.scrollSpeed);
                    else if($(window).height() - (e.pageY - $(document).scrollTop()) < opt.scrollSensitivity)
                        scrolled = $(document).scrollTop($(document).scrollTop() + opt.scrollSpeed);

                    if(e.pageX - $(document).scrollLeft() < opt.scrollSensitivity)
                        scrolled = $(document).scrollLeft($(document).scrollLeft() - opt.scrollSpeed);
                    else if($(window).width() - (e.pageX - $(document).scrollLeft()) < opt.scrollSensitivity)
                        scrolled = $(document).scrollLeft($(document).scrollLeft() + opt.scrollSpeed);
                }
            }

            if (this.scrollTimer)
                clearTimeout(this.scrollTimer);
            if (opt.scroll && scrolled) {
                this.scrollTimer = setTimeout(function() {
                    $(window).trigger(e);
                }, 10);
            }
            // end added by basheer

            // calc distance moved on this axis (and direction)
            if (mouse.dirAx !== newAx) {
                mouse.distAxX = 0;
                mouse.distAxY = 0;
            } else {
                mouse.distAxX += Math.abs(mouse.distX);
                if (mouse.dirX !== 0 && mouse.dirX !== mouse.lastDirX) {
                    mouse.distAxX = 0;
                }
                mouse.distAxY += Math.abs(mouse.distY);
                if (mouse.dirY !== 0 && mouse.dirY !== mouse.lastDirY) {
                    mouse.distAxY = 0;
                }
            }
            mouse.dirAx = newAx;

            /**
             * move horizontal
             */
            if (mouse.dirAx && mouse.distAxX >= opt.threshold) {
                // reset move distance on x-axis for new phase
                mouse.distAxX = 0;
                prev = this.placeEl.prev(opt.itemNodeName);
                // increase horizontal level if previous sibling exists and is not collapsed

                // added by basheer
                //! rtl?
                var distX_direction = true;

                if( this.rtl && mouse.distX > 0 ) {
                    distX_direction = false;
                }
                if( !this.rtl && mouse.distX < 0 ) {
                    distX_direction = false;
                }
                // end added by basheer


                // added by basheer
                // if (mouse.distX > 0 && prev.length && !prev.hasClass(opt.collapsedClass)) {
                if ( distX_direction && prev.length && !prev.hasClass(opt.collapsedClass)) {
                // end added by basheer

                    // cannot increase level when item above is collapsed
                    list = prev.find(opt.listNodeName).last();
                    // check if depth limit has reached
                    depth = this.placeEl.parents(opt.listNodeName).length;
                    if (depth + this.dragDepth <= opt.maxDepth) {
                        // create new sub-level if one doesn't exist
                        if (!list.length) {
                            list = $('<' + opt.listNodeName + '/>').addClass(opt.listClass);
                            list.append(this.placeEl);
                            prev.append(list);
                            this.setParent(prev);
                        } else {
                            // else append to next level up
                            list = prev.children(opt.listNodeName).last();
                            list.append(this.placeEl);
                        }
                    }
                }
                // decrease horizontal level
                // updated by basheer
                // if (mouse.distX < 0) {
                if ( !distX_direction ) {
                // end updated by basheer

                    // we can't decrease a level if an item preceeds the current one
                    next = this.placeEl.next(opt.itemNodeName);
                    if (!next.length) {
                        parent = this.placeEl.parent();
                        this.placeEl.closest(opt.itemNodeName).after(this.placeEl);
                        if (!parent.children().length) {
                            this.unsetParent(parent.parent());
                        }
                    }
                }
            }

            var isEmpty = false;

            // find list item under cursor
            if (!hasPointerEvents) {
                this.dragEl[0].style.visibility = 'hidden';
            }
            // updated by basheer
            // this.pointEl = $(document.elementFromPoint(e.pageX - document.body.scrollLeft, e.pageY - (window.pageYOffset || document.documentElement.scrollTop)));
            this.pointEl = $(document.elementFromPoint(e.pageX - document.documentElement.scrollLeft, e.pageY - (window.pageYOffset || document.documentElement.scrollTop)));
            // end updated by basheer

            if (!hasPointerEvents) {
                this.dragEl[0].style.visibility = 'visible';
            }
            if (this.pointEl.hasClass(opt.handleClass)) {
                // updated by basheer
                //this.pointEl = this.pointEl.parent(opt.itemNodeName);
                this.pointEl = this.pointEl.closest(opt.itemNodeName);
                // end updated by basheer
            }
            if (this.pointEl.hasClass(opt.emptyClass)) {
                isEmpty = true;
            }
            else if (!this.pointEl.length || !this.pointEl.hasClass(opt.itemClass)) {
                return;
            }
            
            // find parent list of item under cursor
            var pointElRoot = this.pointEl.closest('.' + opt.rootClass),
                isNewRoot   = this.dragRootEl.data('nestable-id') !== pointElRoot.data('nestable-id');

            // added by basheer
            if(!pointElRoot.data('nestable-insertable')) {
                return;
            }
            // end added by basheer

            /**
             * move vertical
             */
            if (!mouse.dirAx || isNewRoot || isEmpty) {

                // check if groups match if dragging over new root
                if (isNewRoot && opt.group !== pointElRoot.data('nestable-group')) {
                    // added by basheer
                    // return;

                    // lets check if the target collection has defined a group source
                    if(typeof pointElRoot.data('nestable-group_source') === "undefined") {
                        return;
                    }

                    // lets check the source group id is there..
                    accepts = pointElRoot.data('nestable-group_source').indexOf(opt.group) > -1;

                    // if it was not found return
                    if(!accepts){ return; }
                    // end added by basheer
                }
                // check depth limit
                depth = this.dragDepth - 1 + this.pointEl.parents(opt.listNodeName).length;
                if (depth > opt.maxDepth) {
                    return;
                }
                var before = e.pageY < (this.pointEl.offset().top + this.pointEl.height() / 2);
                parent = this.placeEl.parent();
                // if empty create new list to replace empty placeholder
                if (isEmpty) {
                    list = $(document.createElement(opt.listNodeName)).addClass(opt.listClass);
                    list.append(this.placeEl);
                    this.pointEl.replaceWith(list);
                }
                else if (before) {
                    this.pointEl.before(this.placeEl);
                }
                else {
                    this.pointEl.after(this.placeEl);
                }
                if (!parent.children().length) {
                    this.unsetParent(parent.parent());
                }

                // updated by basheer
                if (!this.dragRootEl.find(opt.itemNodeName).length) {

                    // check if empty element exists
                    if (!this.dragRootEl.find(opt.emptyClass).length) {

                        this.dragRootEl.append('<div class="' + opt.emptyClass + '">' + opt.emptyText + '</div>');
                    }
                }
                // end updated by basheer

                // parent root list has changed
                // updated bu basheer
                this.dragRootEl = pointElRoot;
                if (isNewRoot) {
                    //this.dragRootEl = pointElRoot;
                    // end updated by basheer
                    this.hasNewRoot = this.el[0] !== this.dragRootEl[0];
                }
            }
        }

    };

    $.fn.nestable = function(params)
    {
        var lists  = this,
            retval = this;

        var generateUid = function (separator) {

            var delim = separator || "-";

            function S4() {
                return (((1 + Math.random()) * 0x10000) | 0).toString(16).substring(1);
            }

            return (S4() + S4() + delim + S4() + delim + S4() + delim + S4() + delim + S4() + S4() + S4());
        };

        // iel added by basheer
        lists.each(function(iel)
        {
            var plugin = $(this).data("nestable");

            if (!plugin) {
                $(this).data("nestable", new Plugin(this, params));
                // updated by basheer
                // $(this).data("nestable-id", new Date().getTime());
                // $(this).data("nestable-id", iel);
                $(this).data("nestable-id", generateUid());
                // end updated by basheer
            } else {
                if (typeof params === 'string' && typeof plugin[params] === 'function') {
                    retval = plugin[params]();
                }
            }
        });

        return retval || lists;
    };

})(window.jQuery || window.Zepto, window, document);
