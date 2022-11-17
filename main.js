const menuToggle = document.querySelector('.toggle');
const showcase = document.querySelector('.showcase');

menuToggle.addEventListener('click', () => {
  menuToggle.classList.toggle('active');
  showcase.classList.toggle('active');
})

let slideIndex = 0;
showSlides();

function showSlides() {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  slideIndex++;
  if (slideIndex > slides.length) { slideIndex = 1 }
  slides[slideIndex - 1].style.display = "block";
  setTimeout(showSlides, 2000);
}

document.getElementById("validationUsername").addEventListener("focusout", function(){
  var valid = true, error = "", field = "";

  // (C2) NAME
  field = document.getElementById("fname");
  error = document.getElementById("cname");
  if (!field.checkValidity()) {
    valid = false;
    field.classList.add("err");
    error.innerHTML = "Name must be 2-4 characters\r\n";
  } else {
    field.classList.remove("err");
    error.innerHTML = "";
  }

  // (C3) NUMBER
  field = document.getElementById("fnumber");
  error = document.getElementById("cnumber");
  if (!field.checkValidity()) {
    valid = false;
    field.classList.add("err");
    error.innerHTML = "Num must be between 1-12\r\n";
  } else {
    field.classList.remove("err");
    error.innerHTML = "";
  }

  // (C4) RESULT
  return valid;

})
