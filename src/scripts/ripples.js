var $ = require("jquery");
import 'jquery.ripples';
$(function () {

    $('#hero-home').ripples({
        resolution: 512,
        dropRadius: 80, //px
        perturbance: 0.015,
        strength: 0.05,
    })
    // setTimeout(function () {
    //     $('#hero-home').ripples('destroy');
    // }, 35000);
})