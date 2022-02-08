const axios = require("axios");

jQuery(document).ready(function ($) {

    if ($('#support-accordion').length) {
        getAllSupportTaxonomies();
    }

    function getAllSupportTaxonomies() {
        let apiLoader = `<div id="apiLoader"><i class="fas fa-spinner"></i></div>`;
        $(".filterable-apps .filterable-results").html(apiLoader);
        axios
            .get("/wp-json/wp/v2/support_category?per_page=100")
            .then((response) => {
                let singleTax = response.data;
                const taxonomyMarkup = singleTax.map((taxonomy) => {
                    let taxName = taxonomy.name
                    return `<li class="accordion-title"><a href="${taxonomy.link}" data-tax-id="${taxonomy.id}" class="accordion-btn accordion-${taxonomy.id}" data-tax-name="${taxName}">${taxName} </a><div class="content-wrapper"><div class="container"></div></div></li>`;
                })
                $('#support-accordion').html(taxonomyMarkup);
            }).then(() => {
                $('.accordion-btn').on('click', function (e) {
                    e.preventDefault();
                    let taxId = $(this).data('tax-id');
                    // $('.accordion-btn').removeClass('active');
                    $(this).toggleClass('active');
                    $(this).parent().toggleClass('active');
                    getSupportArticlesByTerm(taxId);
                })
            })

            .catch((error) => {
                console.log(error);
            });
    }
    function getSupportArticlesByTerm(taxId) {
        let apiLoader = `<div id="apiLoader"><i class="fas fa-spinner"></i></div>`;
        $(".filterable-apps .filterable-results").html(apiLoader);
        axios
            .get("/wp-json/wp/v2/support_articles?support_category=" + taxId + "&per_page=100")
            .then((response) => {
                let singleArticle = response.data;
                const articleMarkup = singleArticle.reverse().map((article) => {
                    let articleName = article.title.rendered;
                    return `<div class="single-article"><h5>${articleName}</h5> </div>`;
                })
                // $('.content-wrapper').slideUp();
                $('.accordion-btn.accordion-' + taxId).siblings('.content-wrapper').find('.container').html(articleMarkup);
                $('.accordion-btn.accordion-' + taxId).siblings('.content-wrapper').slideToggle();
            })
            .catch((error) => {
                console.log(error);
            });
    }

})