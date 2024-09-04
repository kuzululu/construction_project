"use strict";

document.addEventListener("DOMContentLoaded", ()=>{

// parallax effect
window.addEventListener('scroll',  () => {
let scrollPosition = window.pageYOffset;

let parallaxVideo = document.querySelector("#parallax-video");
let pagesVideo = document.querySelector("#pages-video");

if (parallaxVideo) {
parallaxVideo.style.transform = 'translateY(' + scrollPosition * 0.5 + 'px) translate(-50%, -50%)';
}

if (pagesVideo) {
pagesVideo.style.transform = 'translateY(' + scrollPosition * 0.5 + 'px) translate(-50%, -50%)';
}

});

});