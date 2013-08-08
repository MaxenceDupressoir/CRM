jQuery.fn.confirmBox = function (options)
{
    var $this;
    var modal = $('#confirmBox');
    var confirmBox = this;
    var jQconfirmBox = $(this);

    var settings = $.extend({
            method: 'get',
            redirect : false,
            title: 'Demande de confirmation',
            content: 'Êtes-vous sur de vouloir continuer ?'
        },options
    );

    this.getContent = function(element)
    {
        if (element.data('content') != undefined) {
            html = element.data('content');
        } else {
            html = settings.content;
        }
        if (settings.method == 'post') {
            form = $('<form method="post" id="confirmBoxForm" action=""></form>');
            form.attr('action', element.attr('href'));
            if (element.data('value') != undefined) {
                form.append('<input type="hidden" value="' + element.data('value') + '" name="value" />');
            } else {
                form.append('<input type="hidden" value="" name="value" />');
            }
            if (settings.redirect == true && element.data('redirect') != undefined) {
                form.append('<input type="hidden" value="' + element.data('redirect') + '" name="redirect" />');
            }
            html = html + $('<div>').append(form).html();
        }
        return html;
    }

    this.click(function(event) {
        event.preventDefault();
        if ($(this).data('method') != undefined) {
            settings.method = $(this).data('method');
        }
        $this = $(this);
        if ($this.data('title') != undefined) {
            modal.find('h3').text($this.data('title'));
        } else {
            modal.find('h3').text(settings.title);
        }
        modal.find('.modal-body').html(confirmBox.getContent($this));
        if (settings.method == 'post') {
            modal.find('#confirmBoxSubmit').click(function(event){
                event.preventDefault();
                modal.find('#confirmBoxForm').submit();
            });
        } else if (settings.method == 'form') {
            var form = $(this).parents('form');
            modal.find('#confirmBoxSubmit').click(function (event){
                event.preventDefault();
                form.submit();
            })
        } else {
            modal.find('#confirmBoxSubmit').attr('href', $this.attr('href'));
            if ($(this).data('target') != undefined) {
                modal.find('#confirmBoxSubmit').attr('target', $(this).data('target'));
                modal.find('#confirmBoxSubmit').click(function (event){
                    modal.modal('hide');
                })
            }
        }
        modal.modal('show');
    });
};