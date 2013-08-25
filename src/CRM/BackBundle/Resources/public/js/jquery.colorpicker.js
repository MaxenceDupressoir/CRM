(function (a, b) {
    a.fn.colorpicker = function (c) {
        var d = a.extend({
            pull_right: false,
            caret: true
        }, c);
        this.each(function () {
            var g = a(this);
            var e = "";
            var f = "";
            a(this).hide().find("option").each(function () {
                var h = "colorpick-btn";
                if (this.selected) {
                    h += " selected";
                    f = this.value
                }
                e += '<li><a class="' + h + '" href="#" style="background-color:' + this.value + ';" data-color="' + this.value + '"></a></li>'
            }).end().on("change.inner_call", function () {
                    a(this).next().find(".btn-colorpicker").css("background-color", this.value)
                }).after('<div class="dropdown dropdown-colorpicker"><a data-toggle="dropdown" class="dropdown-toggle" href="#"><span class="btn-colorpicker" style="background-color:' + f + '"></span></a><ul class="dropdown-menu' + (d.caret ? " dropdown-caret" : "") + (d.pull_right ? " pull-right" : "") + '">' + e + "</ul></div>").next().find(".dropdown-menu").on("click", function (j) {
                    var h = a(j.target);
                    if (!h.is(".colorpick-btn")) {
                        return false
                    }
                    h.closest("ul").find(".selected").removeClass("selected");
                    h.addClass("selected");
                    var i = h.data("color");
                    g.val(i).change();
                    j.preventDefault();
                    return true
                })
        });
        return this
    }
})(jQuery);
