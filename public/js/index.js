jQuery(document).ready(function ($) {
    $("#menuMobile").hide();
    $("#toggleMobile").click(function () {
        $("#menuMobile").slideToggle(500);
    });
});
