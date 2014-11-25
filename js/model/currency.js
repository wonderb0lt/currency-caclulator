define([
    'underscore',
    'backbone'
], function (_, Backbone) {
    return Backbone.Model.extend({
        defaults: {
            key: "none",
            "name": "none"
        }
    });
});
