function showSlidesPa() {
    var i;
    var slides = document.getElementsByClassName("block-pa");

    for (i = 0; i < slides.length; i++) {
       slides[i].style.display = "none"; 
    }
    slideIndex++;
    if (slideIndex> slides.length) {slideIndex = 1}    

    slides[slideIndex-1].style.display = "block";  
    setTimeout(showSlidesPa, 700); // Change image every 2 seconds
}
var slideIndex = 0;
showSlidesPa();