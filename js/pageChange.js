"use strict";

document.addEventListener("DOMContentLoaded", ()=>{

// get the file name
// let currentLocation = window.location.pathname;

// let page = currentLocation.split("/").pop();

// replace with this because of using get paramaters or change the pathname
let urlParams = new URLSearchParams(window.location.search);
let page = urlParams.get("page") || "home"; // default to home if no page is specified


// select elements
let pageTitleDesktop = document.querySelector("#pages-home");
let pageTitleMobile = document.querySelector("#pages-home-mobile");


if (pageTitleDesktop && pageTitleMobile) {

switch(page){
	case "about":
	pageTitleDesktop.innerHTML = "About Us";
	pageTitleMobile.innerHTML = "About Us";
	break;
	
	case "mission_vision":
	pageTitleDesktop.innerHTML = "Mission / Vision";
	pageTitleMobile.innerHTML = "Mission / Vision";
	break;
	
	case "sec":
	pageTitleDesktop.innerHTML = "Security & Safety";
	pageTitleMobile.innerHTML = "Security & Safety";
	break;
	
	case "quality_policy":
	pageTitleDesktop.innerHTML = "Quality Policy";
	pageTitleMobile.innerHTML = "Quality Policy";
	break;
	
	case "projects":
	pageTitleDesktop.innerHTML = "List of Completed Projects";
	pageTitleMobile.innerHTML = "List of Completed Projects";
	break;

	case "contact":
	pageTitleDesktop.innerHTML = "Contact Us";
	pageTitleMobile.innerHTML = "Contact Us";
	break;

	case "gallery":
	pageTitleDesktop.innerHTML = "Gallery";
	pageTitleMobile.innerHTML = "Gallery";
	break;
}


}

});