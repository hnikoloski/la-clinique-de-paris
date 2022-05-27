var $ = require("jquery");
$(function () {
    $('.single-services main .cards-wrapper .card .trigger').on('click', function () {
        $(this).parent().parent().toggleClass('active');
    })
}); 