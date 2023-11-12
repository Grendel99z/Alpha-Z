const defaultSidePaneTemplate = `
<div id="mySidepanel" class="sidepanel">
    <div id="SPHeader">
        <h2>Log In</h2>
        <a class="closebtn" onclick="closeNav()">x</a>
    </div>
    <hr>
    <h3>Please Log in into your profile</h3>
    <form method="post" onSubmit="return validateLogIn()" action="server/sign_in.php">
    <input type="email" name="email" id="logIn-email" placeholder="email">
    <input type="password" name="password" id="logIn-password" placeholder="password">
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
    <h3>Please Sign Up for new profile</h3>
    <form method="post" onSubmit="return validateSignUp()" action="server/sign_up.php">
    <input  type="email" name="email" id="signUp-email" placeholder="Email">
    <input  type="text" name="firstName" id="signUp-first-name" placeholder="First Name">
    <input  type="text" name="lastName" id="signUp-last-name" placeholder="Last Name">
    <input  type="tel" name="phone_number" id="signUp-phone-number" placeholder="Phone Number">
    <textarea  id="signUp-address" name="address" placeholder="Address"></textarea>
    <input  type="password" name="password" id="signUp-password" placeholder="Password">
    <input  type="password" name="password2" id="signUp-confirm-password" placeholder="Confirm Password">
    <button type="submit" id="signup-button">Sign Up</button>
    <button id="login-button" onClick="changeToSignIn()" >Log In</button>
    </form>
</div>
`;

document.getElementById("defaultSidePane").innerHTML = defaultSidePaneTemplate;
