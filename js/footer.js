const footerTemplate = `
<footer>
            <hr>
            <div class = "footer-content">
                <div class = "email-subscription">
                    <div id = "es-information">
                        Be the first to know about our special offers, news, and updates
                    </div>
                    <div id = "input">
                        <form>
                            <input type="email" id="email-input">
                            <button type="submit" id="email-button">Sign up</button>
                        </form>
                    </div>
                    <div id = "es-title">
                        <h2>Sign up for our newsletter</h2>
                    </div>
                </div>
                <div id = "footer-column">
                    <div id = "fc-pc">
                        <p>Pcs</p>
                        <ul>
                            <li>PC1</li>
                            <li>PC2</li>
                            <li>PC3</li>
                        </ul>
                    </div>
                    <div id = "fc-laptop">
                        <p>Laptops</p>
                        <ul>
                            <li>Laptop1</li>
                            <li>Laptop2</li>
                            <li>Laptop3</li>
                        </ul>
                    </div>
                    <div id = "fc-accessories">
                            <p>Accessories</p>
                            <ul>
                                <li>Accessory1</li>
                                <li>Accessory2</li>
                                <li>Accessory3</li>
                            </ul>
                    </div>
                    <div id = "fc-contactus">
                        <p>Contact Us</p>
                    </div>
                </div>
            </div>
            <div id = "copyright">
                Copyright &copy; 2023 Alpha Z. All rights reserved.
            </div>
        </footer>
`;

document.getElementById("footer").innerHTML = footerTemplate;
