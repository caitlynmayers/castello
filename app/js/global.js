/*jslint nomen: true  */
/*global window: false, document: false, console: false, Masonry: false */

window.jQuery = window.jQuery || require('jquery');

// Make sure to also include jQuery plugins, through
require('GSAP');

var attachFastClick = require('fastclick');

var Global = {};

(function ($) {
    'use strict';
	
	// Showing and Hiding Mobile Menu
	var appState = '';
	function mobile_nav_trigger() {
		if (appState == '') {
			$('nav').addClass('menu-open');
			appState = 'menu-open';
		} else {
			$('nav').removeClass('menu-open');
			appState = '';
		}
	}
	
	// Showing and Hiding Search Field
	var searchState = '';
	function search_form_trigger() {
		if (searchState == '') {
			$('.form').addClass('form-open');
			searchState = 'menu-open';
		} else {
			$('.form').removeClass('form-open');
			searchState = '';
		}
	}

    Global = function () {

        var self = {}, __self = {};

        self.init = function () {
            $(document).ready(function () {

                try {
                    attachFastClick(document.body);
                } catch (err) {
                    console.log('attachFastClick failed');
                }

                $(window).on('orientationchange', self.updateOrientation);
                
                $('#mobile-menu-trigger').click(function(event){
					event.preventDefault();
					mobile_nav_trigger();
				});
				
				$('#search-trigger').click(function(event){
					event.preventDefault();
					search_form_trigger();
				});
               
            });
        };

        self.updateOrientation = function () {
            // fixes the iOS 7.1 grey bar caused by the minimal-ui meta tag on orientation change
            window.scrollTo(0, 0);
        };

        self.init();
        return self;
    };

    window.app = new Global();

}(window.jQuery));

module.exports = Global;
