$(document).ready(function () {
    // $("#home-nav").removeClass("active");
    // $("#dashboard-nav").addClass("active");
    if ($(window).width() < 768) {
        $("fab").each(function() {
            $(this).addClass("fa-2x");
        });
        $("fab").each(function() {
            $(this).removeClass("fa-4x");
        });
    } else {
        $("fab").each(function() {
            $(this).addClass("fa-4x");
        });
        $("fab").each(function() {
            $(this).removeClass("fa-2x");
        });
    }
});
