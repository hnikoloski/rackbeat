const axios = require("axios");

jQuery(document).ready(function ($) {
    function getAllWebinars() {
        let apiLoader = `<div id="apiLoader"><i class="fas fa-spinner"></i></div>`;
        $(".filterable-apps .filterable-results").html(apiLoader);
        axios
            .get("/wp-json/wp/v2/free-webinars")
            .then((response) => {
                let webinarData = response.data;
                const webinarMarkup = webinarData.reverse().map((webinar) => {
                    let webinarName = webinar.title.rendered

                    return `<option value="${webinarName}">${webinarName}</option>`;
                })
                $("#webinarsList").html(webinarMarkup);
            })
            .then(() => {
                $('#webinarHidden').val($('#webinarsList').val());

                $('#webinarsList').on('change', function () {
                    $('#webinarHidden').val($(this).val());
                }
                );
            })
            .catch((error) => {
                console.log(error);
            });
    }
    if ($('.page-template-webinars').length) {
        getAllWebinars();
    }
})