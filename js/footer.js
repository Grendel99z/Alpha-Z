const footerTemplate = `
<footer>
            <hr>
            <div class = "footer-content">
                <div class = "email-subscription">
                    <div id = "es-information">
                        Be the first to know about our special offers, news, and updates
                    </div>
                    <div id = "input">
                        <form action="server/send_mail.php"method="post" >
                            <input type="email" name="email" id="email-input">
                            <button type="submit" id="email-button">Sign up</button>
                        </form>
                    </div>
                    <div id = "es-title">
                        <h2>Sign up for our newsletter</h2>
                    </div>
                </div>
                <div id = "footer-column">
                    <div id = "fc-pc">
                        <p><a href="PCs.php">Pcs</a></p>
                            <ul>
                                <li><a href="PCDetails.php?pc=zenith">Zenith</a></li>
                                <li><a href="PCDetails.php?pc=horizon">Horizon</a></li>
                                <li><a href="PCDetails.php?pc=alpha">Alpha</a></li>
                            </ul>
                        </div>
                        <div id="fc-laptop">
                            <p><a href="laptops.php">Laptops</a></p>
                            <ul>
                                <li><a href="product_customization.php?product=spectre">Spectre</a></li>
                                <li><a href="product_customization.php?product=pavilion">Pavilion</a></li>
                                <li><a href="product_customization.php?product=stream">Stream</a></li>
                            </ul>
                        </div>
                        <div id="fc-accessories">
                            <p><a href="accessories.php">Accessories</a></p>
                            <ul>
                                <li><a href="product_customization.php?product=deathadder">DeathAdder</a></li>
                                <li><a href="product_customization.php?product=G%20Pro%20X">G Pro X</a></li>
                                <li><a href="product_customization.php?product=kraken">Kraken</a></li>
                            </ul>
                        </div>
                    <div id = "fc-contactus">
                        <p><a href="contact.php">Contact Us</a></p>
                    </div>
                </div>
            </div>
            <div id = "copyright">
                Copyright &copy; 2023 Alpha Z. All rights reserved.
            </div>
        </footer>
`;

document.getElementById("footer").innerHTML = footerTemplate;
