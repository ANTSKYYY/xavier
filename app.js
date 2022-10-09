	let allGridItems = [...document.getElementsByClassName("image-grid")];
	let popupBg = document.getElementById("popup-bg");
	let bodyy = document.getElementById("grille");
	let header = document.getElementById("header");
	let footer = document.getElementById("footer");
	let popupImg = document.getElementById("popup-img");

	const openPopup = (e) => {
	    let clickedImageSrc = e.target.src;
	    popupBg.classList.add("active");
	    bodyy.classList.add("active");
	    header.classList.add("active");
	    footer.classList.add("active");
	    popupImg.src = clickedImageSrc;
	};

	const closePopup = () => {
	    popupBg.classList.remove("active");
	    header.classList.remove("active");
	    footer.classList.remove("active");
	    bodyy.classList.remove("active");
	};

	allGridItems.forEach((el) => el.addEventListener("click", openPopup));

	popupImg.addEventListener("click", (e) => e.stopPropagation());
	popupBg.addEventListener("click", closePopup);


