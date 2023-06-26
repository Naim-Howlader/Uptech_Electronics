
$('.topbar').owlCarousel({
    loop: true,

    nav: true,
    dots: false,
    margin: 10,
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
$('.category').owlCarousel({
    loop: true,
    dots: true,
    margin: 20,
    responsive: {
        0: {
            items: 2
        },
        640: {
            items: 2
        },
        768: {
            items: 3
        },
        1024: {
            items: 4
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

$(document).on('click', '.view-btn', function () {
    let image = $(this).data('image');
    let name = $(this).data('name');
    let full = 'http://localhost:8000/' + image;
    let price = $(this).data('price');
    let feature = $(this).data('feature');
    let description = $(this).data('description');
    let category = $(this).data('category');
    let url = $(this).data('url');
    //console.log(url);
    document.getElementById("name").innerHTML = name;
    document.getElementById("feature").innerHTML = feature;
    document.getElementById("description").innerHTML = description;
    document.getElementById("category").innerHTML = category;
    document.getElementById("price").innerHTML = '$' + price;
    document.getElementById("image").src = url + '/' + image;
});

// init Isotope
var $grid = $('.all-pro').isotope({
    // options
});
// filter items on button click
$('.pronav').on('click', 'li', function () {
    var filterValue = $(this).attr('data-filter');
    $grid.isotope({ filter: filterValue });
});






