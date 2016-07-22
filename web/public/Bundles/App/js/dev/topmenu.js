/**
 * Created by maciej on 22.07.16.
 */
var TopMenu = (function () {
    'use strict';

    function setActiveButtonOnTopMenu() {
        var pathname = window.location.href,
            splited = pathname.split("/");

        $(document).ready(function () {
            $('#' + splited[3]).addClass('active');
        });
    }

    return {
        Run: function () {
            setActiveButtonOnTopMenu();
        }
    }
})();
