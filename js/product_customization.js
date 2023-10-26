// This function replaces the image shown with id "selectedImage" with the clicked image
function replaceSelectedImage(e) {
	const selectedImage = document.getElementById("selectedImage");
	selectedImage.src = e.target.src;
}

const imgs = document.getElementsByClassName("imagesOptions");
for (let img of imgs) {
	img.addEventListener("click", replaceSelectedImage);
}
