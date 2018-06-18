/* *************************** IMAGENES SLIDER QUE CAMBIAN AMENIDADES ESTILO DE VIDA  ************************************ */
var slideIndex = 0;
showSlides();

function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    for (i = 0; i < slides.length; i++) {
       slides[i].style.display = "none";  
    }
    slideIndex++;
    if (slideIndex > slides.length) {slideIndex = 1}   
    slides[slideIndex-1].style.display = "block";  
    setTimeout(showSlides, 4000); // Change image every 2 seconds
}
/* ************************ MODAL 1: MODELO 1 DEPTO ************************************** */
// Get the modalPhotoVirtual
var modalPhotoVirtual = document.getElementById('myModalPhotoVirtual');

// Get the button that opens the modalPhotoVirtual
var btn = document.getElementById("btnVirtual");

// Get the <span> element that closeBtnPhotos the modalPhotoVirtual
var span = document.getElementsByClassName("closeBtnPhoto")[0];

// When the user clicks the button, open the modalPhotoVirtual 
btn.onclick = function() {
    modalPhotoVirtual.style.display = "block";
}

// When the user clicks on <span> (x), closeBtnPhoto the modalPhotoVirtual
span.onclick = function() {
    modalPhotoVirtual.style.display = "none";
}

// When the user clicks anywhere outside of the modalPhotoVirtual, closeBtnPhoto it
window.onclick = function(event) {
    if (event.target == modalPhotoVirtual) {
        modalPhotoVirtual.style.display = "none";
    }
}
/* ********************************** MODAL 1: MODELO 1 DEPTO ************************************** */
// Get the modalPhotoVirtual2
var modalPhotoVirtual2 = document.getElementById('myModalPhotoVirtual2');

// Get the button that opens the modalPhotoVirtual2
var btn2 = document.getElementById("btnVirtual2");

// Get the <span> element that closeBtnPhotos the modalPhotoVirtual2
var span2 = document.getElementsByClassName("closeBtnPhoto2")[0];

// When the user clicks the button, open the modalPhotoVirtual2 
btn2.onclick = function() {
    modalPhotoVirtual2.style.display = "block";
}

// When the user clicks on <span2> (x), closeBtnPhoto the modalPhotoVirtual2
span2.onclick = function() {
    modalPhotoVirtual2.style.display = "none";
}

// When the user clicks anywhere outside of the modalPhotoVirtual2, closeBtnPhoto it
window.onclick = function(event) {
    if (event.target == modalPhotoVirtual2) {
        modalPhotoVirtual2.style.display = "none";
    }
}
/* ************************ SLIDERS DE VENDEDORES ************************************** */
var slideIndexPhotoSales = 1;
showSlidesPhotoSales(slideIndexPhotoSales);

function plusSlides(n) {
  showSlidesPhotoSales(slideIndexPhotoSales += n);
}

function currentSlide(n) {
  showSlidesPhotoSales(slideIndexPhotoSales = n);
}

function showSlidesPhotoSales(n) {
  var i;
  var slidesPhoto = document.getElementsByClassName("mySalesManSlider");
  if (n > slidesPhoto.length) {slideIndexPhotoSales = 1}    
  if (n < 1) {slideIndexPhotoSales = slidesPhoto.length}
  for (i = 0; i < slidesPhoto.length; i++) {
      slidesPhoto[i].style.display = "none";  
  }
  slidesPhoto[slideIndexPhotoSales-1].style.display = "block";
}

/* **************************************************************************************************** */
