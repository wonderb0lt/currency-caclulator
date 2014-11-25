define([
    'jquery',
    'underscore',
    'backbone',
    'views/form'
], function ($, _, Backbone, FormView) {
    var Router = Backbone.Router.extend({
        routes: {
            '': 'index'
        }
    });

    var initialize = function () {
        var router = new Router;
        router.on('route:index', function () {
            new FormView().render();
        });

        Backbone.history.start();
    };

    return {
        initialize: initialize
    };
});
