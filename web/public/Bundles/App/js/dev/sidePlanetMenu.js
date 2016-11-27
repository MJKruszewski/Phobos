/**
 * Created by maciej on 25.07.16.
 */
var SidePlanetMenu = (function () {
    'use strict';

    function setActiveButtonOnSideMenu() {
        var pathname = window.location.href,
            splited = pathname.split("/");

        $(document).ready(function () {
            $('*[id*=' + splited[splited.length - 1] + ']:visible').each(function () {
                $(this).addClass('active');
            })
        });
    }

    return {
        Run: function () {
            setActiveButtonOnSideMenu();
        }
    }
})();
