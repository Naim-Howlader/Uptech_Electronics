
$('.owl-carousel').owlCarousel({
    loop: true,

    nav: true,
    dots: false,
    navText: ['<span class="material-symbols-outlined navicon border text-white p-2">arrow_back_ios</span >', '<span class="material-symbols-outlined navicon-r border text-white p-2">arrow_forward_ios</span>'],
    responsive: {
        0: {
            items: 1
        },
        600: {
            items: 1
        },
        1000: {
            items: 1
        }
    }
})
let activelink = document.querySelectorAll('.product-link');
activelink.forEach(singlelink => {
    singlelink.addEventListener('click', function () {
        activelink.forEach(link => link.classList.remove('active', 'product-link-h'));
        this.classList.add('active');
    });
});
$(document).ready(function() {
    $("ul:eq(1) > li").click(function() {
       $('ul:eq(1) > li').removeClass("active");
       $(this).addClass("active");
    });
})
jQuery(function ($) {
    $("ul a")
        .click(function(e) {
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
        .each(function() {
            var link = $(this);
            if (link.get(0).href === location.href) {
                link.addClass("activedas").parents("li").addClass("activedas");
                return false;
            }
        });
});




