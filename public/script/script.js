const dropdown = document.querySelector("#dropdown");
const dropdownLink = document.querySelector(".dropdown-link");

dropdown.addEventListener("click", () => {
  if (window.innerWidth < 1024) {
    dropdownLink.classList.toggle("hidden");
    dropdownLink.classList.toggle("block");
  }
});

let hamburger = document.querySelector("#hamburgerMenu");
let navbar = document.querySelector(".navbar");
hamburger.onclick = () => {
  navbar.classList.toggle("active");
};

let containerSliders = document.querySelector(".slideShow");


let slideIndex = 0;
let slides = document.querySelectorAll(".slideshow-item");
let dots = document.querySelectorAll(".dot");
let rangeBar = document.querySelector(".rangeTime");
let slideInternal;

function showSlides() {

  if (!slides.length || !dots.length || !rangeBar) return;

  rangeBar.classList.remove("active");
  void rangeBar.offsetWidth;
  rangeBar.classList.add("active");

  for (let i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slideIndex++;
  if (slideIndex > slides.length) {
    slideIndex = 1;
  }
  slides[slideIndex - 1].style.display = "block";
  dots[slideIndex - 1].className += " active";
  slideInternal = setTimeout(showSlides, 7000);
}

showSlides();

function plusSlides(n) {
  clearTimeout(slideInternal);
  slideIndex += n - 1;
  if (slideIndex >= slides.length) {
    slideIndex = 0;
  }
  if (slideIndex < 0) {
    slideIndex = slides.length - 1;
  }
  showSlides();
}

function currentSlide(n) {
  clearTimeout(slideInternal);
  slideIndex = n - 1;
  showSlides();
}


let modal = document.getElementById("myModal");
let images = document.querySelectorAll("#myImg");
let modalImg = document.getElementById("img01");
let span = document.getElementsByClassName("close")[0];

if(images) {
  // images.onclick = function(){
  //   modal.style.display = "block";
  //   modalImg.src = this.src;
  // }

  images.forEach((img) => {
    img.onclick = () => {
      modal.style.display = "block";
      modalImg.src = img.src;
    }
  })
}

if(span) { 
  span.onclick = function() { 
    modal.style.display = "none";
  }
}


let modalParent = document.querySelector(".modal-box");
let modalParent2 = document.querySelector(".modal-box2");

function showModal() {
  document.querySelector(".modal-box").style.display = "block";
}

modalParent.addEventListener("click", () => {
  document.querySelector(".modal-box").style.display = "none";
});

function showModal2() {
  document.querySelector(".modal-box2").style.display = "block";
}

modalParent2.addEventListener("click", () => {
  document.querySelector(".modal-box2").style.display = "none";
});