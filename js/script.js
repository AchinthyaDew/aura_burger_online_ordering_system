// images menu

function nextSlide(sliderId) {
    let slider = document.getElementById(sliderId);
    slider.scrollLeft += 220;
}

function prevSlide(sliderId) {
    let slider = document.getElementById(sliderId);
    slider.scrollLeft -= 220;
}


function scrollToSection(id) {
    document.getElementById(id).scrollIntoView({
        behavior: 'smooth'
    });
}

// cart icon

function addToCart(id) {
    fetch('../php/addto_cart.php?id=' + id)
        .then(response => response.text())
        .then(data => {
            document.getElementById('cart-count').innerText = data;
        })
        .catch(error => console.log(error));
}


