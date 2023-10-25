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
