function openNav() {
	document.getElementById("mySidepanel").style.width = "300px";
}

function closeNav() {
	document.getElementById("mySidepanel").style.width = "0";
}

function changeToSignUp() {
	document.getElementById("defaultSidePane").innerHTML = signUpTemplate;
	document.getElementById("mySidepanel").style.width = "300px";
}

function changeToSignIn() {
	document.getElementById("defaultSidePane").innerHTML =
		defaultSidePaneTemplate;
	document.getElementById("mySidepanel").style.width = "300px";
}

const validateFirstName = (firstNameInput) => {
	const firstNameRegex = /^\w+$/;
	if (!firstNameRegex.test(firstNameInput.value)) {
		firstNameInput.classList.add("error");
		return "Please enter a valid first name.\n\n";
	} else {
		firstNameInput.classList.remove("error");
		return "";
	}
};

const validateLastName = (lastNameInput) => {
	const lastNameRegex = /^\w+$/;
	if (!lastNameRegex.test(lastNameInput.value)) {
		lastNameInput.classList.add("error");
		return "Please enter a valid last name.\n\n";
	} else {
		lastNameInput.classList.remove("error");
		return "";
	}
};

const validatePhoneNumber = (phoneNumberInput) => {
	const phoneNumberRegex = /^\d{8}$/;
	if (!phoneNumberRegex.test(phoneNumberInput.value)) {
		phoneNumberInput.classList.add("error");
		return "Please enter a valid 8-digit phone number.\n\n";
	} else {
		phoneNumberInput.classList.remove("error");
		return "";
	}
};

const validateEmail = (emailInput) => {
	const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
	if (!emailRegex.test(emailInput.value)) {
		emailInput.classList.add("error");
		return "Please enter a valid email address.\n\n";
	} else {
		emailInput.classList.remove("error");
		return "";
	}
};

const validatePassword = (passwordInput) => {
	const passwordRegex = /^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{6,}$/;
	if (!passwordRegex.test(passwordInput.value)) {
		passwordInput.classList.add("error");
		return "Please enter a password that is at least 6 characters long and contains at least one letter and one number.\n\n";
	} else {
		passwordInput.classList.remove("error");
		return "";
	}
};

const validateConfirmPassword = (confirmPasswordInput, passwordInput) => {
	if (confirmPasswordInput.value.trim() === "") {
		confirmPasswordInput.classList.add("error");
		return "Please confirm your password.\n\n";
	} else if (confirmPasswordInput.value !== passwordInput.value) {
		confirmPasswordInput.classList.add("error");
		return "Passwords do not match.\n\n";
	} else {
		confirmPasswordInput.classList.remove("error");
		return "";
	}
};

const validateAddress = (addressInput) => {
	if (addressInput.value.trim() === "") {
		addressInput.classList.add("error");
		return "Please enter your address.\n\n";
	} else if (addressInput.value.length > 255) {
		addressInput.classList.add("error");
		return "Address should not be more than 255 characters.\n\n";
	} else {
		addressInput.classList.remove("error");
		return "";
	}
};

const validateSignUp = () => {
	console.log("happenning");
	const firstNameInput = document.getElementById("signUp-first-name");
	const lastNameInput = document.getElementById("signUp-last-name");
	const phoneNumberInput = document.getElementById("signUp-phone-number");
	const emailInput = document.getElementById("signUp-email");
	const passwordInput = document.getElementById("signUp-password");
	const confirmPasswordInput = document.getElementById(
		"signUp-confirm-password"
	);
	const addressInput = document.getElementById("signUp-address");

	let isValid = true;
	let alert = "";

	alert += validateFirstName(firstNameInput);
	alert += validateLastName(lastNameInput);
	alert += validatePhoneNumber(phoneNumberInput);
	alert += validateEmail(emailInput);
	alert += validatePassword(passwordInput);
	alert += validateConfirmPassword(confirmPasswordInput, passwordInput);
	alert += validateAddress(addressInput);

	window.alert(alert);
	if (alert !== "") {
		isValid = false;
	}

	return isValid;
};

const validateLogIn = () => {
	const emailInput = document.getElementById("logIn-email");
	const passwordInput = document.getElementById("logIn-password");

	let isValid = true;
	let alert = "";

	alert += validateEmail(emailInput);
	alert += validatePassword(passwordInput);

	if (alert !== "") {
		window.alert(alert);
		isValid = false;
	}

	return isValid;
};
