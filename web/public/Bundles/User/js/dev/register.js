/**
 * Created by maciej on 16.07.16.
 */
var Register = (function () {
    'use strict';

    function encryptPasswords() {
        var firstPassword = jQuery('input[name="fos_user_registration_form[plainPassword][first]"]'),
            secondPassword = jQuery('input[name="fos_user_registration_form[plainPassword][second]"]');

        firstPassword.val(MD5.Run(firstPassword.val()));
        secondPassword.val(MD5.Run(secondPassword.val()));
    }

    return {
        Run: function () {
            encryptPasswords();
        }
    }
})();
