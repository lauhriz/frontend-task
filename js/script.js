"use strict";

const awardsCarouselItem = document.querySelectorAll(".awards-carousel-item");
const totalSlideCount = document.querySelector(".total-count");
let slideIndex = document.querySelector(".slide-index");

totalSlideCount.textContent = awardsCarouselItem.length;

for (let i = 0; i < awardsCarouselItem.length; i++) {
  if (awardsCarouselItem[i].classList.contains("active")) {
    i++;
    console.log([i]);
    slideIndex.textContent = i;
    // console.log([i]);
  }
}
