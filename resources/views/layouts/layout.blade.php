<!DOCTYPE html>

    <head>
        <title>Marble</title>
        <link href="css/app.css" rel="stylesheet" type="text/css">
        <meta name="viewport" content="width=device-width">
        <script>
            // Picture element HTML5 shiv
            document.createElement( "picture" );
        </script>
        <script src="https://cdn.rawgit.com/scottjehl/picturefill/master/dist/picturefill.min.js" async></script>
    </head>
    
    <body>
        
        <header>
                <!-- Top navigation -->
                <div class="topnav">

                    <!-- Centered link -->
                    <div class="topnav-centered">
                    <a href="#home" class="logo"></a>
                    </div>
                
                    <!-- Left-aligned links (default) -->
                    <a href="#news">Shop</a>
                    <a href="#contact">Our Story</a>
                    <a href="#contact">Expertise</a>
                
                    <!-- Right-aligned links -->
                    <div class="topnav-right">
                    <a href="#search">Contact</a>
                    <a href="#about"><img src="images/search.png" alt=""></a>
                    <a href="#about"><img src="images/user.png" alt=""></a>
                    <a href="#about"><img src="images/cart.png" alt=""></a>
                    </div>
                
                </div>
        </header>
        
        @yield('content')
        
        <footer>
            <div class="wrapper">
                <ul>
                    <li><h4>Get In Touch</h4></li>
                    <li>Fusce dapibus, tellus commodo, tortor mauris condimentum utellus fermentum, porta sem malesuada magna.</li>
                    <li>Moonshine Street No: 14/05</li>
                    <li>Light City, Jupiter</li>
                    <li>0247 541 65 87</li>
                    <li>support@longwave.com</li>
                </ul>
                <ul>
                    <li><h4>Twitter</h4></li>
                    <li class="tw">Donec ullamcorper metus auctor fringilla. Nullam quis risus eget.</li>
                    <li class="tw">Donec ullamcorper metus auctor fringilla. Nullam quis risus eget.</li>
                    <li class="tw">Donec ullamcorper metus auctor fringilla. Nullam quis risus eget.</li>
                </ul>
                <ul>
                    <li><h4>Popular Posts</h4></li>
                    <li>Vivamus sagittis lacus vel augue laoreet rutrum dolor auctor. <br />14 Nov, 2012</li>
                    <li>Vivamus sagittis lacus vel augue laoreet rutrum dolor auctor. <br />14 Nov, 2012</li>
                    <li>Vivamus sagittis lacus vel augue laoreet rutrum dolor auctor. <br />14 Nov, 2012</li>
                </ul>
                <ul>
                    <li><h4>About Us</h4></li>
                    <li>Vestibulum id ligula porta felis euismod semper. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.</li>
                    <li>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus curabitur blandit tempus.</li>
                </ul>
                <div id="copyright">&copy; 2021. All rights reserved. Fullstack developer.</div>
                <div id="links">
                    <a href="#"><img src="images/paymentmethod1.png" alt=""></a>
                    <a href="#"><img src="images/applepay.png" alt=""></a>
                    <a href="#"><img src="images/paypal.png" alt=""></a>
                    <a href="#"><img src="images/visa.png" alt=""></a>
                </div>
            </div>
        </footer>
        
    </body>
    
    <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
    <script src="menu.js"></script>
    </footer>
</body>
</html>