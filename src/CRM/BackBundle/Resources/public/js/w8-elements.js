
(function (a, b) {
    a.fn.ace_spinner = function (c) {
        this.each(function () {
            var f = c.icon_up || "icon-chevron-up";
            var i = c.icon_down || "icon-chevron-down";
            var e = c.btn_up_class || "";
            var g = c.btn_down_class || "";
            var d = c.max || 999;
            d = ("" + d).length;
            var j = a(this).addClass("spinner-input").css("width", (d * 10) + "px").wrap('<div class="ace-spinner">').after('<div class="spinner-buttons btn-group btn-group-vertical">						<button type="button" class="btn spinner-up btn-mini ' + e + '">						<i class="' + f + '"></i>						</button>						<button type="button" class="btn spinner-down btn-mini ' + g + '">						<i class="' + i + '"></i>						</button>						</div>').closest(".ace-spinner").spinner(c).wrapInner("<div class='input-append'></div>");
            a(this).on("mousewheel DOMMouseScroll", function (k) {
                var l = k.originalEvent.detail < 0 || k.originalEvent.wheelDelta > 0 ? 1 : -1;
                j.spinner("step", l > 0);
                j.spinner("triggerChangedEvent");
                return false
            });
            var h = a(this);
            j.on("changed", function () {
                h.trigger("change")
            })
        });
        return this
    }
})(jQuery);
(function (a, b) {
    a.fn.ace_wizard = function (c) {
        this.each(function () {
            var h = a(this);
            var d = h.find("li");
            var e = d.length;
            var f = parseFloat((100 / e).toFixed(1)) + "%";
            d.css({
                "min-width": f,
                "max-width": f
            });
            h.removeClass("hidden").wizard();
            var g = h.nextAll(".wizard-actions").eq(0);
            var i = h.data("wizard");
            i.$prevBtn = g.find(".btn-prev").eq(0).on("click", function () {
                h.wizard("previous")
            });
            i.$nextBtn = g.find(".btn-next").eq(0).on("click", function () {
                h.wizard("next")
            });
            i.nextText = i.$nextBtn.text()
        });
        return this
    }
})(jQuery);
(function (a, b) {
    a.fn.ace_tree = function (d) {
        var c = {
            "open-icon": "icon-folder-open",
            "close-icon": "icon-folder-close",
            selectable: true,
            "selected-icon": "icon-ok",
            "unselected-icon": "tree-dot"
        };
        c = a.extend({}, c, d);
        this.each(function () {
            var e = a(this);
            e.html('<div class = "tree-folder" style="display:none;">				<div class="tree-folder-header">					<i class="' + c["close-icon"] + '"></i>					<div class="tree-folder-name"></div>				</div>				<div class="tree-folder-content"></div>				<div class="tree-loader" style="display:none"></div>			</div>			<div class="tree-item" style="display:none;">				' + (c["unselected-icon"] == null ? "" : '<i class="' + c["unselected-icon"] + '"></i>') + '				<div class="tree-item-name"></div>			</div>');
            e.addClass(c.selectable == true ? "tree-selectable" : "tree-unselectable");
            e.tree(c)
        });
        return this
    }
})(jQuery);