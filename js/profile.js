function makeEditable() {
	const elements = document.querySelectorAll(".editspace");
	elements.forEach((element) => {
		element.readOnly = false;
		element.style.cssText =
			" background-color: white; color:black; border: 1px solid gold;";
	});
	const editButton = document.getElementById("update_profile_button");
	const saveButton = document.getElementById("save_profile_button");
	const cancelButton = document.getElementById("cancel_profile_button");

	editButton.style.display = "none";
	saveButton.style.display = "";
	cancelButton.style.display = "";
}

function makeUneditable() {
	const elements = document.querySelectorAll(".editspace");
	elements.forEach((element) => {
		element.readOnly = true;
		element.style.cssText = " background-color: transparent; color:white;";
	});
	const editButton = document.getElementById("update_profile_button");
	const saveButton = document.getElementById("save_profile_button");
	const cancelButton = document.getElementById("cancel_profile_button");

	editButton.style.display = "";
	saveButton.style.display = "none";
	cancelButton.style.display = "none";
}

function toggleDiv(id) {
	const toggleButton = document.getElementById("toggleButton" + id);
	const transaction = document.getElementById(id);
	if (toggleButton.checked) {
		transaction.style.display = "";
	} else {
		transaction.style.display = "none";
	}
}

function makeProductEditable(id) {
	const elements = document.querySelectorAll("#editableProduct" + id);
	elements.forEach((element) => {
		element.readOnly = false;
		element.style.cssText =
			" background-color: white; color:black; border: 1px solid gold;";
	});
	const editButton = document.getElementById("updateProductButton" + id);
	const saveButton = document.getElementById("saveProductButton" + id);
	const cancelButton = document.getElementById("cancelProductButton" + id);

	editButton.style.display = "none";
	saveButton.style.display = "";
	cancelButton.style.display = "";
}

function makeProductUneditable(id) {
	const elements = document.querySelectorAll("#editableProduct" + id);
	elements.forEach((element) => {
		element.readOnly = true;
		element.style.cssText = " background-color: transparent; color:white;";
	});
	const editButton = document.getElementById("updateProductButton" + id);
	const saveButton = document.getElementById("saveProductButton" + id);
	const cancelButton = document.getElementById("cancelProductButton" + id);

	editButton.style.display = "";
	saveButton.style.display = "none";
	cancelButton.style.display = "none";
}
