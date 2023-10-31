

<?php
if (isset($_SESSION["logged_in"])){
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
    echo '<a href="profile.html">></a>';
    echo '</div>';
    echo '<hr class="panelLine"/>';
    echo '</div>';
    echo '<div class="panelDiv" >';
    echo '<div class = "panelNav">';
    echo '<img src="assets/logOut.png" class="panelIcon"/>';
    echo '<p>Log Out</p>';
    echo '<form method="post" action="php/log_out.php">';
    echo '<input type="hidden" name="log_out" value="true"/>';
    echo '<a onClick="this.parentNode.submit();">></a>';
    echo '</form>';
    echo '</div>';
    echo '<hr class="panelLine"/>';
    echo '</div>';
    echo '</div>';

}
else{
    echo '<script src="js/LogInSidePane.js"></script>';
    return;
}
?>
