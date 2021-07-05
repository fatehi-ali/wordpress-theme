jQuery(document).ready(function($) {
    var uploader;
    $(document).on('click', '#choosepicture', function(e) {
        e.preventDefault();
        if (uploader) {
            uploader.open();
            return;
        }
        uploader = wp.media({
            title: 'انتخاب تصویر',
            button: {
                text: 'انتخاب تصویر'
            },
            multiple: false

        });
        uploader.on('select', function() {
            var attachment = uploader.state().get('selection').first().toJSON();
            console.log(attachment);
            $("#imguploader").attr("src", attachment.url);
            $("#urluploader").attr("value", attachment.url);
        });
    });
});