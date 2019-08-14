jQuery(".search-submit").click(function (event) {
    console.log(event);
    event.preventDefault();
    jQuery(".search-field").toggleClass("search-visible");
});

jQuery(".search-form").on('keydown', function (event) {
    if (event.which == 13) {
        jQuery(".search-form").submit();
    }
})