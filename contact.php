</html><!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700" rel="stylesheet">

    <title>Pixie Template - Contact</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/main.css">


</head>

<body>

<!-- Pre Header -->
<div id="pre-header">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <input type="text" placeholder="Search..">
                <!--                <button class="nav-bar-buttons" onclick="document.getElementById('login').style.display='block'">Login-->
                <!--                </button>-->
                <!--                <button class="nav-bar-buttons" onclick="document.getElementById('signup').style.display='block'" style="width:auto;">Sign up-->
                <!--                </button>-->
                <button class="nav-bar-buttons"
                "onclick="document.getElementById('shopping_cart').style.display='block'" style="width:auto;">
                Shopping Cart<i class="fa fa-shopping-cart"></i>
                </button>
            </div>
        </div>
    </div>
</div>

<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top">
    <div class="container">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="products.php">Products
                        <span class="sr-only">(current)</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about.php">About</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="contact.php">Contact</a>
                    <span class="sr-only">(current)</span>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Page Content -->
<!-- About Page Starts Here -->
<div class="contact-page">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-heading">
                    <div class="line-dec"></div>
                    <h1>Contact Us</h1>
                </div>
            </div>
            <div class="col-md-6">
                <div id="map">
                    <!-- How to change your own map point
                           1. Go to Google Maps
                           2. Click on your location point
                           3. Click "Share" and choose "Embed map" tab
                           4. Copy only URL and paste it within the src="" field below
                    -->

                    <iframe src="https://www.google.com/maps/embed?pb=yJa36uHwU8fSxTdw8" width="100%" height="500px"
                            frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
            </div>
            <div class="col-md-6">
                <div class="right-content">
                    <div class="container">
                        <form id="contact" action="" method="post">
                            <div class="row">
                                <div class="col-md-6">
                                    <fieldset>
                                        <input name="name" type="text" class="form-control" id="name"
                                               placeholder="Your name..." required="">
                                    </fieldset>
                                </div>
                                <div class="col-md-6">
                                    <fieldset>
                                        <input name="email" type="text" class="form-control" id="email"
                                               placeholder="Your email..." required="">
                                    </fieldset>
                                </div>
                                <div class="col-md-12">
                                    <fieldset>
                                        <input name="subject" type="text" class="form-control" id="subject"
                                               placeholder="Subject..." required="">
                                    </fieldset>
                                </div>
                                <div class="col-md-12">
                                    <fieldset>
                                        <textarea name="message" rows="6" class="form-control" id="message"
                                                  placeholder="Your message..." required=""></textarea>
                                    </fieldset>
                                </div>
                                <div class="col-md-12">
                                    <fieldset>
                                        <button type="submit" id="form-submit" class="button">Send Message</button>
                                    </fieldset>
                                </div>
                                <div class="col-md-12">
                                    <div class="share">
                                        <h6>You can also keep in touch on: <span><a href="#"><i
                                                            class="fa fa-facebook"></i></a><a href="#"><i
                                                            class="fa fa-linkedin"></i></a><a href="#"><i
                                                            class="fa fa-twitter"></i></a></span></h6>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About Page Ends Here -->

<!-- Subscribe Form Starts Here -->
<div class="subscribe-form">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-heading">
                    <div class="line-dec"></div>
                    <h1>Subscribe now!</h1>
                </div>
            </div>
            <div class="col-md-8 offset-md-2">
                <div class="main-content">
                    <div class="container">
                        <form id="subscribe" action="" method="get">
                            <div class="row">
                                <div class="col-md-7">
                                    <fieldset>
                                        <input name="email" type="text" class="form-control" id="email"
                                               onfocus="if(this.value == 'Your Email...') { this.value = ''; }"
                                               onBlur="if(this.value == '') { this.value = 'Your Email...';}"
                                               value="Your Email..." required="">
                                    </fieldset>
                                </div>
                                <div class="col-md-5">
                                    <fieldset>
                                        <button type="submit" id="form-submit" class="button">Subscribe Now!</button>
                                    </fieldset>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Subscribe Form Ends Here -->


<!-- Footer Starts Here -->
<div class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-12">

            </div>
            <div class="col-md-12">
                <div class="footer-menu">
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Help</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">How It Works ?</a></li>
                        <li><a href="#">Contact Us</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-12">
                <div class="social-icons">
                    <ul>
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="#"><i class="fa fa-rss"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Footer Ends Here -->


<!-- Sub Footer Starts Here -->
<div class="sub-footer">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="copyright-text">
                    <p>Copyright &copy; 2019 PENNY'S FINE ART</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Sub Footer Ends Here -->


<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


</body>

</html>