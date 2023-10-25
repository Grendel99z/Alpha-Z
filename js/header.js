const headerTemplate=`
<div class = "header">
            <div class = "promotion">
                <div id = "currency">
                    SGD
                </div>
                <div id = "promo-info">
                    Free Shipping on Our Gaming PCs, Nov 11-20.
                </div>
                <div id = "support">
                    support
                </div>
            </div>
            <div class = "navbar">
                <div id = "logo">
                    Alpha Z
                </div>
                <nav>
                    <ul>
                        <li><a href="#">PCs</a></li>
                        <li><a href="#">Laptop</a></li>
                        <li><a href="#">Accessories</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>
                </nav>
                <div class = "right-nav">
                    <div id="profile-logo">
                        <img src="assets/profile.png" class="openbtn" onclick="openNav()">
                    </div>
                    <div id = "cart">
                        <div id = "cart-logo">
                            <img src="assets/cart.png">
                        </div>
                        <div id = "cart-content">
                            0
                        </div>
                    </div>
                </div>
            </div>
            <hr>
        </div>
`

document.getElementById("header").innerHTML = headerTemplate;