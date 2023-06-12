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
    })
})
