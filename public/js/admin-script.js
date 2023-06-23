$(document).ready(function () {
    $("ul:eq(1) > li").click(function () {
        $('ul:eq(1) > li').removeClass("active");
        $(this).addClass("active");
    });
})
jQuery(function ($) {
    $(".dash ul a")
        .click(function (e) {
            var link = $(this);

            var item = link.parent("li");

            if (item.hasClass("activedas")) {
                item.removeClass("activedas").children("a").removeClass("activedas");
            } else {
                item.addClass("activedas").children("a").addClass("activedas");
            }

            if (item.children("ul").length > 0) {
                var href = link.attr("href");
                link.attr("href", "#");
                setTimeout(function () {
                    link.attr("href", href);
                }, 300);
                e.preventDefault();
            }
        })
        .each(function () {
            var link = $(this);
            if (link.get(0).href === location.href) {
                link.addClass("activedas").parents("li").addClass("activedas");
                return false;
            }
        });
});
ClassicEditor
    .create(document.querySelector('#feature'))
    .then(editor => {
        console.log(editor);
    })
    .catch(error => {
        console.error(error);
    });
