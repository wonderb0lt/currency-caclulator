require.config({
    paths: {
        jquery: '//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.1/jquery.min',
        underscore: '//cdnjs.cloudflare.com/ajax/libs/underscore.js/1.7.0/underscore-min',
        backbone: '//cdnjs.cloudflare.com/ajax/libs/backbone.js/1.1.2/backbone-min',
        text: '//cdnjs.cloudflare.com/ajax/libs/require-text/2.0.12/text',
        jqueryui: '//cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min'
    }
});

require([
    'app'
], function (App) {
    App.initialize();
});
