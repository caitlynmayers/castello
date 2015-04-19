// Include Plugins
window.jRespond = window.jRespond || require('jRespond');

var attachFastClick = require('fastclick');

var Global = {};

(function ($) {
    'use strict';

    Global = function () {

        var self = {}, __self = {};

        self.init = function () {

                try {
                    attachFastClick(document.body);
                } catch (err) {
                    console.log('attachFastClick failed');
                }

                $(window).on('orientationchange', self.updateOrientation);
        };

        self.updateOrientation = function () {
            // fixes the iOS 7.1 grey bar caused by the minimal-ui meta tag on orientation change
            window.scrollTo(0, 0);
        };

        $(document).ready(function () {
            self.init();
        });

        return self;
    };

    window.app = new Global();

}(window.jQuery));

module.exports = Global;