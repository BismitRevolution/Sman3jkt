$(document).ready(function () {
    // $("#home-nav").removeClass("active");
    // $("#dashboard-nav").addClass("active");

    $('.carousel').carousel({
        interval: 5000
    }).carousel('cycle');

    if ($(window).width() < 768) {
        $("#visi-misi").addClass("max-bg");
        $("#visi-misi").removeClass("half-bg");
    }

});
