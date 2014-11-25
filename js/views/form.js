define([
    'jquery',
    'underscore',
    'backbone',
    'text!templates/form.html',

    // View libraries
    'jqueryui'
], function ($, _, Backbone, formTemplate) {
    return Backbone.View.extend({
        el: $('#page'),
        render: function () {
            // Work around a quirk in OER which keeps us from using Collections
            var currencies = JSON.parse($.ajax({
                url: 'https://openexchangerates.org/api/currencies.json?app_id=12a9fc80491043a5a133c3c355dfb874',
                async: false
            }).responseText);
            var names = _.values(currencies);

            var compiledTemplate = _.template(formTemplate)({
                currencies: JSON.stringify(names)
            });

            this.$el.append(compiledTemplate);
        }
    });
});
