"use strict";

document.addEventListener("DOMContentLoaded", ()=>{

 let nightMode = document.querySelector("#nightMode");
 let brightMode = document.querySelector("#brightMode");
 let navbar = document.querySelector("#navbar");
 let lightBackgroundMode = document.querySelectorAll(".lightBackgroundMode");
 let textchangeColor = document.querySelectorAll(".text-change-color");

 let parallaxVideo = document.querySelector("#parallax-video");
 let pagesVideo = document.querySelector("#pages-video");

 let applyNightMode = ()=>{

 	brightMode.style.display = "block";
 	nightMode.style.display = "none";

 	if (parallaxVideo) {
 		parallaxVideo.style.filter = "brightness(120%)";
 	}

 	if (pagesVideo) {
				pagesVideo.style.filter = "brightness(120%)"; 		
 	}

 	lightBackgroundMode.forEach(element =>{
 		element.classList.add("lightBackgroundMode-bg");
 	});

 	textchangeColor.forEach(element =>{
 		element.classList.add("text-change-color-bg");
 	});

 	navbar.classList.add("night-mode-bg");
 }

 let removeNightMode = ()=>{

 	brightMode.style.display = "none";
 	nightMode.style.display = "block";

 	if (parallaxVideo) {
 		parallaxVideo.style.filter = "brightness(80%)";
 	}

 	if (pagesVideo) {
				pagesVideo.style.filter = "brightness(80%)"; 		
 	}

 	lightBackgroundMode.forEach(element =>{
 		element.classList.remove("lightBackgroundMode-bg");
 	});

 	textchangeColor.forEach(element =>{
 		element.classList.remove("text-change-color-bg");
 	});

 	navbar.classList.remove("night-mode-bg");
 }

 // check if nightMode is already set in sessionStorage
 // use sessionStorage if want to remove the history after close the browser
 if (sessionStorage.getItem("mode") === "night") {
 	applyNightMode();
 }

 nightMode.addEventListener("click", ()=>{
 	applyNightMode();
 	sessionStorage.setItem("mode", "night");
 });

 brightMode.addEventListener("click", ()=>{
 	removeNightMode();
 	sessionStorage.setItem("mode", "bright");
 });

});