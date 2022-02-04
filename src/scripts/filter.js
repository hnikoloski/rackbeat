const axios = require("axios");

jQuery(document).ready(function ($) {
    if ($('.filterable-apps').length) {
        getAllProjectsCategories();
        getAllProjects();
    }

    let linkText = '';
    if ($('html').attr('lang') == 'en-US') {
        return linkText = 'See More';
    } else if ($('html').attr('lang') == 'da-DK') {
        return linkText = 'Se mere';
    } else if ($('html').attr('lang') == 'sv-SE') {
        return linkText = 'Se mer';
    }

    function getAllProjects() {
        let apiLoader = `<div id="apiLoader"><i class="fas fa-spinner"></i></div>`;
        $(".filterable-apps .filterable-results").html(apiLoader);
        axios
            .get("/wp-json/wp/v2/projects?per_page=100")
            .then((response) => {
                let projectData = response.data;
                const projectsHtml = projectData.map((project) => {
                    let projectImage = project.fimg_url;
                    let projectName = project.title.rendered
                    let projectLink = project.link

                    return `<div class="col"><img src="${projectImage}" alt="${projectName}"> <a href="${projectLink}">${linkText}</a></div>`;
                })
                $(".filterable-apps .filterable-results").html(projectsHtml);
            })
            .catch((error) => {
                console.log(error);
            });
    }
    function filterProjects(filterParam) {
        let apiLoader = `<div id="apiLoader"><i class="fas fa-spinner"></i></div>`;
        $(".filterable-apps .filterable-results").html(apiLoader);
        axios
            .get("/wp-json/wp/v2/projects?per_page=100&?project_category=" + filterParam)
            .then((response) => {
                let projectData = response.data;
                const projectsHtml = projectData.map((project) => {
                    let projectImage = project.fimg_url;
                    let projectName = project.title.rendered
                    let projectLink = project.link

                    return `<div class="col"><img src="${projectImage}" alt="${projectName}"> <a href="${projectLink}">${linkText}</a></div>`;
                })
                $(".filterable-apps .filterable-results").html(projectsHtml);
            })
            .catch((error) => {
                console.log(error);
            });
    }
    function getAllProjectsCategories() {
        axios
            .get("/wp-json/wp/v2/project_category/?per_page=100")
            .then((response) => {
                let projectCategory = response.data;
                const categoryHtml = projectCategory.map((cat) => {
                    let catName = cat.name;
                    let catId = cat.id;
                    return `<li><a href="${catId}">${catName}</a></li>`;
                })
                $(".filterable-apps header .filter").append(categoryHtml);
            })
            .then(() => {
                $('.filterable-apps header .filter a').on('click', function (e) {
                    e.preventDefault();
                    $('.filterable-apps header .filter a').removeClass('active');
                    $(this).addClass('active');
                    let filterParam = $(this).attr('href');
                    if (filterParam == '*') {
                        getAllProjects();
                    } else {
                        filterProjects(filterParam);
                    }

                })
            })
            .catch((error) => {
                console.log(error);
            });
    }
})