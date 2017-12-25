/**
 * Created by thanhnt on 10/8/17.
 */

if ( CKEDITOR.env.ie && CKEDITOR.env.version < 9 )
    CKEDITOR.tools.enableHtml5Elements( document );

// The trick to keep the editor in the sample quite small
// unless user specified own height.
CKEDITOR.config.height = 400;
CKEDITOR.config.width = 'auto';

var initSample2 = function () {
    var config = {
        extraPlugins: 'codesnippet,emojione',
        codeSnippet_theme: 'monokai_sublime',
        height: 356,

    };

    CKEDITOR.replace( 'editor', config );

};