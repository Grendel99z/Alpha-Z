

<?php
if (isset($_SESSION["userId"])){
    echo '<div id="mySidepanel" class="sidepanel">';
    echo '<div id="SPHeader">';
    echo '<h2>Your Profile</h2>';
    echo '<a class="closebtn" onclick="closeNav()">x</a>';
    echo '</div>';
    echo '<hr />';
    echo '<div class="panelDiv" >';
    echo '<div class = "panelNav">';
    echo '<img src="assets/profile.png" class="panelIcon" />';
    echo '<p>Profile Details</p>';
    echo '<a>></a>';
    echo '</div>';
    echo '<hr class = "panelLine"/>';
    echo '</div>';
    echo '<div class="panelDiv" >';
    echo '<div class = "panelNav">';
    echo '<img src="assets/logOut.png" class="panelIcon"/>';
    echo '<p>Log Out</p>';
    echo '<a>></a>';
    echo '</div>';
    echo '<hr class = "panelLine"/>';
    echo '</div>';
    echo '</div>';

}
else{
    echo '<div id="mySidepanel" class="sidepanel">';
    echo '<div id="SPHeader">';
    echo '<h2>Log In</h2>';
    echo '<a class="closebtn" onclick="closeNav()">x</a>';
    echo '</div>';
    echo '<hr>';
    echo '<h3>Please Log in into your profile</h3>';
    echo '<form>';
    echo '<input type="email" id="logIn-email" placeholder="email">';
    echo '<input type="password" id="logIn-password" placeholder="password">';
    echo '<button type="submit" id="login-button" >Log In</button>';
    echo '<button id="signup-button" onClick="changeToSignUp()">Sign Up</button>';
    echo '</form>';
    echo '</div>';
    return;
}
