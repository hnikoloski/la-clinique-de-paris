var $ = require("jquery");
$(document).ready(function () {

    $('#hero-home').ripples({
        resolution: 512,
        dropRadius: 50, //px
        perturbance: 0.015,
        strength: 0.01,
    })
    // setTimeout(function () {
    //     $('#hero-home').ripples('destroy');
    // }, 35000);
})