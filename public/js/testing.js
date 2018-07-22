$(document).ready(function() {
    console.log("testing loaded");

    $(".base").height($(".block").width() * 2);
    $(".block").height($(".block").width());
});
