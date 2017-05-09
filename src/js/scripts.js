$(function() {
    $(".ui.dropdown").dropdown();
    $(".ui.menu-sticky").sticky();
    $(".message .close").on("click", function() {
            $(this)
                .closest(".message")
                .transition("fade");
        });
});
