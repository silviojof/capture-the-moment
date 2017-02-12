// Function for the hamburguer menu
function mobileMenu(event) {
    document.getElementsByClassName('header-nav-menu')[0].classList.toggle("responsive");
}


// Variables to index slider functions
var time;
var slideIndex = 0;
var slides = document.getElementsByClassName("slide-box");
var dots = document.getElementsByClassName("dot");
var dots;
showSlides();

// Function to excecute Slider
function showSlides() {
    var i;
    for (i = 0; i < slides.length; i++) {
       slides[i].style.display = "none";  
    }
    slideIndex++;
    if (slideIndex> slides.length) {slideIndex = 1;}    
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" dots-active", "");
    }
    slides[slideIndex-1].style.display = "block";  
    dots[slideIndex-1].className += " dots-active";
    time = setTimeout(showSlides, 5000);
};

// Function to move to next or previous slide manually
function moveSlide(n) {
    clearTimeout(time);
    var i;
    for (i = 0; i < slides.length; i++) {
       slides[i].style.display = "none";  
    }
    slideIndex += n;
    if (slideIndex > slides.length) {slideIndex = 1;}
    if (slideIndex <= 0 ) {slideIndex = slides.length;}
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" dots-active", "");
    }
    slides[slideIndex-1].style.display = "block";  
    dots[slideIndex-1].className += " dots-active";
    time = setTimeout(showSlides, 5000);
}


// Variable to porfolio/gallery modal
var slideOrder = 1;

// Function to open de modal
function openModal(n) {
    document.getElementsByClassName('modal')[0].style.display = "block";
    gallerySlide(slideOrder = n);
}

// Function to close modal
function closeModal() {
    document.getElementsByClassName('modal')[0].style.display = "none";
}

// Function to Move to next image in modal
function moveModal(n) {
    gallerySlide(slideOrder += n);
}

// Funtion to Move
function gallerySlide(n) {
    let i;
    let slides = document.getElementsByClassName('modal-slide');
    if(n > slides.length) {slideOrder =1;}
    if(n < 1) {slideOrder = slides.length;}
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
        slides[slideOrder-1].style.display = "block";
    }
}