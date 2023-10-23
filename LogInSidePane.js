const sidePaneTemplate = `
<div id="mySidepanel" class="sidepanel">
<a class="closebtn" onclick="closeNav()">x</a>
<a href="#">About</a>
<a href="#">Services</a>
<a href="#">Clients</a>
<a href="#">Contact</a>
</div>
`

document.getElementById("sidePane").innerHTML = sidePaneTemplate;