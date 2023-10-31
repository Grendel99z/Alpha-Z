const headerTemplate = `
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
                    <a href="homepage.html">Alpha Z</a>
                </div>
                <nav>
                    <ul>
                        <li><a href="PCs.html">PCs</a></li>
                        <li><a href="Laptops.html">Laptop</a></li>
                        <li><a href="Accessories.html">Accessories</a></li>
                        <li><a href="contact.html">Contact</a></li>
                    </ul>
                </nav>
                <div class = "right-nav">
                    <div id="profile-logo">
                        <img src="assets/profile.png" class="openbtn" onclick="openNav()">
                    </div>
                    <div id = "cart">
                        <div id = "cart-logo">
                            <a href="cart.html"><img src="assets/cart.png"></a>
                        </div>
                        <div id = "cart-content">
                            0
                        </div>
                    </div>
                </div>
            </div>
            <hr>
        </div>
`;

document.getElementById("header").innerHTML = headerTemplate;
