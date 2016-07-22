/**
 * Created by maciej on 15.07.16.
 */
var Login = (function () {
    'use strict';

    function preparePostRequest() {
        var username = jQuery('input[name="_username"]').val(),
            password = MD5.Run(jQuery('input[name="_password"]').val()),
            submit = jQuery('input[name="_submit"]').val(),
            rememberMe = jQuery('input[name="_remember_me"]:checked').val(),
            csrfToken = jQuery('input[name="_csrf_token"]').val(),
            serializedData =
                '_username=' + username
                + '&_password=' + password
                + '&_submit=' + submit
                + '&_remember_me=' + rememberMe
                + '&_csrf_token=' + csrfToken;

        return serializedData + '&_checksum=' + MD5.Run(username + password + submit + rememberMe + csrfToken);
    }

    function doRequest() {
        var request, serializedData, form = $('#login_form'), inputs = form.find('input');

        form.submit(function (event) {
            if (request) {
                request.abort();
            }

            serializedData = preparePostRequest();

            inputs.prop("disabled", true);

            request = $.ajax({
                url: '/login_check',
                type: 'post',
                data: serializedData
            });

            request.done(function (response) {
                if (response.success) {
                    window.location.replace("app");
                } else {
                    toastr.warning(response.message);
                }
            });

            request.fail(function (jqXHR, textStatus, error) {
                toastr.error(error);
            });

            request.always(function () {
                inputs.prop("disabled", false);
            });

            event.preventDefault();
        });
    }

    return {
        Run: function () {
            doRequest();
        }
    }
})();
