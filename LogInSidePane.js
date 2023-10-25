const defaultSidePaneTemplate = `
<div id="mySidepanel" class="sidepanel">
    <div id="SPHeader">
        <h2>Log In</h2>
        <a class="closebtn" onclick="closeNav()">x</a>
    </div>
    <hr>
    <h3>Please Log in into your profile</h3>
    <form>
    <input type="email" id="logIn-email" placeholder="email">
    <input type="password" id="logIn-password" placeholder="password">
    <button type="submit" id="login-button" >Log In</button>
    <button id="signup-button" onClick="changeToSignUp()">Sign Up</button>
    </form>
</div>
`;

const signUpTemplate = `
<div id="mySidepanel" class="sidepanel">
    <div id="SPHeader">
        <h2>Sign Up</h2>
        <a class="closebtn" onclick="closeNav()">x</a>
    </div>
    <hr>
    <h3>Please Log in into your profile</h3>
    <form>
    <input type="email" id="signUp-email" placeholder="Email">
    <input type="text" id="signUp-first-name" placeholder="First Name">
    <input type="text" id="signUp-last-name" placeholder="Last Name">
    <input type="tel" id="signUp-phone-number" placeholder="Phone Number">
    <textarea id="signUp-address" placeholder="Address"></textarea>
    <input type="password" id="signUp-password" placeholder="Password">
    <input type="password" id="signUp-confirm-password" placeholder="Confirm Password">
    <button type="submit" id="signup-button">Sign Up</button>
    <button id="login-button" onClick="changeToSignIn()" >Log In</button>
    </form>
</div>
`;

const loggedInTemplate = `

<div id="mySidepanel" class="sidepanel">
	<div id="SPHeader">
		<h2>Your Profile</h2>
		<a class="closebtn" onclick="closeNav()">x</a>
	</div>
	<hr />
	<div class="panelDiv" >
		<div class = "panelNav">
			<img src="assets/profile.png" class="panelIcon" />
			<p>Profile Details</p>
			<a>></a>
		</div>
		<hr class = "panelLine"/>
	</div>
	<div class="panelDiv" >
		<div class = "panelNav">
			< img src="assets/logOut.png" class="panelIcon"/>
			<p>Log Out</p>
			<a>></a>
		</div>
		<hr class = "panelLine"/>
	</div>
</div>

`;

document.getElementById("defaultSidePane").innerHTML = defaultSidePaneTemplate;
