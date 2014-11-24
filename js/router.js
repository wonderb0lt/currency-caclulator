define([
    'jquery',
    'underscore',
    'backbone',
], function ($, _, Backbone) {
    var Router = Backbone.Router.extend({
        routes: {
            '': 'index'
        }
    });

    var initialize = function () {
        var router = new Router;
        router.on('route:index', function () {
            console.log('Home, sweet home')
        });

        Backbone.history.start();
    };

    return {
        initialize: initialize
    };
});
