filterSelection("all");

function filterSelection(selectedType) {
	var allButtons, curButton;
	allButtons = document.getElementsByClassName("btn");
	curButton = document.getElementById(selectedType + "Button");
	for (i = 0; i < allButtons.length; i++) {
		allButtons[i].classList.remove("active");
	}
	curButton.classList.add("active");

	var allItems, i;
	allItems = document.getElementsByClassName("product-card");
	var count = allItems.length;
	if (selectedType == "all") {
		for (i = 0; i < allItems.length; i++) {
			allItems[i].style.display = "";
		}
	} else {
		count = 0;
		for (i = 0; i < allItems.length; i++) {
			if (allItems[i].classList.contains(selectedType)) {
				allItems[i].style.display = "";
				count++;
			} else {
				allItems[i].style.display = "none";
			}
		}
	}

	document.getElementById("resultCount").innerHTML = count + " results found";
}
