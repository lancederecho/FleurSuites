var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function selectSlides(n) {
  showSlides(slideIndex = n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  if (n > slides.length) { slideIndex = 1 }
  if (n < 1) { slideIndex = slides.length }
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  slides[slideIndex - 1].style.display = "block";
}

/* function showSlides(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  if (n > x.length) { slideIndex = 1 }
  if (n < 1) { slideIndex = x.length };
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  x[slideIndex - 1].style.display = "block";
} */

/** Days to be disabled as an array */
var disableddates = ["12-3-2017", "12-11-2017", "12-25-2017", "12-20-2017"];

// Now check if the current date is in disabled dates array. 
if ($.inArray(currentdate, disableddates) != -1) {
  return [false];
}

document.getElementById("myDate").disabled = true;


$(function () {
  $("#juniorsuitecheckin").datepicker({
    beforeShowDay: DisableSpecificDates
  });
});