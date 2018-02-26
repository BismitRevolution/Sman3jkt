$(document).ready(function () {
    // $("#home-nav").removeClass("active");
    // $("#dashboard-nav").addClass("active");

    $('.carousel').carousel({
        interval: 5000
    }).carousel('cycle');

    if ($(window).width() < 768) {
        $("#misi").addClass("max-bg");
        $("#misi").removeClass("half-bg");
        $("#misi .heading").addClass("clear-margin");
        $("#misi .paragraf").addClass("clear-margin");
        $("#misi .heading").addClass("white");
        $("#misi .paragraf").addClass("white");
    }

});
