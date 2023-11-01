<?php
session_start();
    if($_SESSION['error']){
        echo '<script>alert("'.$_SESSION['error'].'")</script>';
    }
  
  unset($_SESSION['error']);
?>
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
                    <a href="homepage.php">Alpha Z</a>
                </div>
                <nav>
                    <ul>
                        <li><a href="PCs.php">PCs</a></li>
                        <li><a href="Laptops.php">Laptop</a></li>
                        <li><a href="Accessories.php">Accessories</a></li>
                        <li><a href="contact.php">Contact</a></li>
                    </ul>
                </nav>
                <div class = "right-nav">
                    <div id="profile-logo">
                        <img src="../assets/profile.png" class="openbtn" onclick="openNav()">
                    </div>
                    <div id = "cart">
                        <div id = "cart-logo">
                            <a href="cart.html"><img src="../assets/cart.png"></a>
                        </div>
                        <div id = "cart-content">
                            0
                        </div>
                    </div>
                </div>
            </div>
            <hr>
        </div>