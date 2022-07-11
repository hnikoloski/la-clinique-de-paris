import axios from "axios";
var $ = require("jquery");

$(function () {
    let api_url = "/wp-json/wp/v2/api";
    getFilterData("")
    function getFilterData(filter) {
        let config = {
            method: "get",
            url: api_url + "/media-posts",
            params: {
                category: filter
            }
        };
        axios(config)
            .then(function (response) {
                let postsData = response.data;
                let postHtml = "";
                postsData.forEach(function (singlePost) {
                    postHtml += cardComponent(singlePost.link, singlePost.title, singlePost.thumbnail)
                });

                // const postHtml = postsData.map((singlePost) => {
                //     return cardComponent(singlePost.link, singlePost.title, singlePost.thumbnail);
                // });


                $(".media-filtered-results").html(postHtml);
            })
            .catch(function (error) {
                console.log(error);
            });
    }
    $('.page-template-media-archive .filter li a').on('click', function (e) {
        e.preventDefault();
        $('.page-template-media-archive .filter li a').removeClass('active');
        $(this).addClass('active');
        let filter = $(this).attr('data-filter');
        if (filter == "*") {
            getFilterData("")
        } else {
            getFilterData(filter);
        }
    })
    function cardComponent(permaLink, theTitle, backgroundUrl) {
        return `
        <article class="blog-card fade-in-item">
        <a href="${permaLink}" class="single">
            <div class="content">
                <h4 class="heading">${theTitle}</h4>
                <div class="wrapper">
                    <div class="arrow-link arrow-link-white">
                        <div class="icon">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 40.607 40.607">
                                <path d="M20,0,34.142,5.858,40,20,34.142,34.142,20,40,5.858,34.142,0,20,5.858,5.858Z" transform="translate(0.304 40.303) rotate(-90)" fill="currentColor" stroke="#A67744" stroke-miterlimit="10" stroke-width="0.561"></path>
                            </svg>
                            <span class="material-icons">arrow_forward_ios</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="image" style="background-image:url('${backgroundUrl}');"></div>
        </a>
    </article>
        `
    }
});
