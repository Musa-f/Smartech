const slide1 = document.querySelector("#slide1");
const slide2 = document.querySelector("#slide2");
const slide3 = document.querySelector("#slide3");
const slide4 = document.querySelector("#slide4");
const slide5 = document.querySelector("#slide5");
const slides = [slide1, slide2, slide3, slide4, slide5];

let currentSlideIndex = 0;
const next = document.querySelector("#right");
const previous = document.querySelector("#left");

const printSlide = (target) => {
  for(i=0; i<slides.length; i++) {
    slides[i].classList.remove("slideActive");
  }
  target.classList.add("slideActive"); // classe display actif
}

printSlide(slides[currentSlideIndex]);

const handleNext = () => {
  if(currentSlideIndex === slides.length - 1) {
    currentSlideIndex = 0;
  }
  else {
    currentSlideIndex += 1;
  }
  printSlide(slides[currentSlideIndex]);
}

const handlePrevious = () => {
  if(currentSlideIndex === 0) {
    currentSlideIndex = slides.length - 1;
  }
  else {
    currentSlideIndex -= 1;
  }
  printSlide(slides[currentSlideIndex]);
}

next.addEventListener("click", handleNext);
previous.addEventListener("click", handlePrevious);