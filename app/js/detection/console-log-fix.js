// global window: false

/**
 * Protect window.console method calls, e.g. console is not defined on IE
 * unless dev tools are open, and IE doesn't define console.debug
 */
 
(function () {
    'use strict';

    var m, i;

    if (!window.console) {
        window.console = {};
        // union of Chrome, FF, IE, and Safari console methods
        m = [
            "log", "info", "warn", "error", "debug", "trace", "dir", "group",
            "groupCollapsed", "groupEnd", "time", "timeEnd", "profile", "profileEnd",
            "dirxml", "assert", "count", "markTimeline", "timeStamp", "clear"
        ];
        // define undefined methods as noops to prevent errors
        for (i = 0; i < m.length; i += 1) {
            if (!window.console[m[i]]) {
                window.console[m[i]] = function () {};
            }
        }
    }
}());