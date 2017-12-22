$(function () {
    $('#publish_started_at').datetimepicker({'format': 'YYYY-MM-DD HH:mm:ss', 'defaultDate': new Date()});
    $('#publish_ended_at').datetimepicker({'format': 'YYYY-MM-DD HH:mm:ss'});
    
    $('#cover-image').change(function (event) {
        $('#cover-image-preview').attr('src', URL.createObjectURL(event.target.files[0]));
    });

    $('#button-preview').click(function () {
        var editor = $('#edit'),
            html = editor.froalaEditor('html.get', false, false);
        $('#preview-title').val($('#title').val());
        $('#preview-locale').val($('#locale').val());
        $('#preview-content').val($('#froala-editor').val());
        $('#form-preview').submit();
        return false;
    });
});

// Begin: init CKEditor
if ( CKEDITOR.env.ie && CKEDITOR.env.version < 9 ) {
    CKEDITOR.tools.enableHtml5Elements( document );
}

// The trick to keep the editor in the sample quite small
// unless user specified own height.
CKEDITOR.config.height = 400;
CKEDITOR.config.width = 'auto';

var initCKEditor = function () {
    var config = {
        extraPlugins: 'codesnippet,emojione',
        codeSnippet_theme: 'monokai_sublime',
        height: 356,

    };

    CKEDITOR.replace( 'article-content-editor', config );

};
// End: init CKEditor
