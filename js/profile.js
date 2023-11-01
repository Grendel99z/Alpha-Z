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
	location.reload();
}
