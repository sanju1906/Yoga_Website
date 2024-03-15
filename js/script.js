let menu = document.querySelector('#menu-btn');
let navbar = document.querySelector('.header .navbar');

// home menu button on click
menu.onclick = () =>{ 
    menu.classList.toggle('fa-times'); //menu button icon rotate
    navbar.classList.toggle('active'); //nav bar content display
}

//Mobile view - open menu bar closes on scroll
window.onscroll = () =>{
    menu.classList.remove('fa-times');
    navbar.classList.remove('active');
}

//menu page - initial swipper images
var swiper = new Swiper(".home-slider",{
    loop:true,
    pagination: {
        el: '.swiper-pagination',
    },    
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
    scrollbar: {
        el: '.swiper-scrollbar',
    },
});

//about- reviews swiper 
var swiper = new Swiper(".reviews-slider",{
    loop:true,
    spaceBetween:20,
    autoHeight: true,
    grabCursor:true,
    breakpoints:{
        640: {
            slidesPerView:2,
        },
        768: {
            slidesPerView:2,
        },
        1024: {
            slidesPerView:3,
        },
        
    },
});

// packages - load more

let loadMoreBtn = document.querySelector('.packages .load-more .btn');
let currentItem = 3;

loadMoreBtn.onclick = () =>{
    let boxes = [...document.querySelectorAll('.packages .box-container .box')];
    for(var i = currentItem; i < currentItem + 3 && i < boxes.length; i++){
        boxes[i].style.display = 'inline-block';
    };
    currentItem += 3;
    if(currentItem >= boxes.length){
        loadMoreBtn.style.display = 'none';
    }
}
