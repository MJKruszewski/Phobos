/**
 * Created by maciej on 15.07.16.
 */
var Login = (function () {
    'use strict';

    function doRequest() {
        var request, serializedData, form = $('#login_form'), inputs = form.find('input');
        console.log(form);
        form.submit(function (event) {
            if (request) {
                request.abort();
            }

            serializedData =
                '_username=' + jQuery('input[name="_username"]').val()
                // + '&_password=' + MD5.Run(jQuery('input[name="_password"]').val())
                + '&_password=' + jQuery('input[name="_password"]').val()
                + '&_submit=' + jQuery('input[name="_submit"]').val()
                + '&_csrf_token=' + jQuery('input[name="_csrf_token"]').val();

            inputs.prop("disabled", true);

            request = $.ajax({
                url: '/login_check',
                type: 'post',
                data: serializedData
            });

            request.done(function (response, textStatus, jqXHR) {
                if (response == 1) {
                    // window.location.replace("../pages/index");
                } else {
                    toastr.warning(response);
                }
            });

            request.fail(function (jqXHR, textStatus, errorThrown) {
                toastr.error('Wystąpił nieoczekiwany błąd');
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
