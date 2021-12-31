(function ($) {
    var form = $("#add-form");
    var input = form.find("#text");

    input.val("").focus();

    form.on("submit", function (event) {
        event.preventDefault();

        var req = $.ajax({
            type: "POST",
            url: form.attr("action"),
            data: form.serialize(),
        });

        req.done(function (data) {
            if (data === "success") {
                var li = $(
                    '<li class="list-group-item">' + input.val() + "</li>"
                );

                li.hide().appendTo(".list-group").fadeIn();

                input.val("").focus();
            }
        });
    });

    input.on("keypress", function (event) {
        if (event.which === 13) {
            form.submit();
            return false;
        }
    });
})(jQuery);
