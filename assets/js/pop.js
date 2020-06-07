/*
 * Scripts for the Pops controller.
 */
+function ($) { "use strict";

    var formPops = function() {

        this.clickRecord = function(recordId) {
            var newPopup = $('<a />')

            newPopup.popup({
                handler: 'onUpdateForm',
                extraData: {
                    'record_id': recordId,
                }
            })
        }

        this.createRecord = function() {
            var newPopup = $('<a />');newPopup.popup({ handler: 'onCreateForm' })
        }

    }

    $.formPops = new formPops;

}(window.jQuery);
