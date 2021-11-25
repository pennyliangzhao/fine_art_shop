<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700" rel="stylesheet">

    <title>Product1 Detail</title>

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
                <button class="nav-bar-buttons" "onclick="document.getElementById('shopping_cart').style.display='block'" style="width:auto;">
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
                <li class="nav-item active">
                    <a class="nav-link" href="products.php">Products
                        <span class="sr-only">(current)</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about.php">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact.php">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>


<!-- Page Content -->
<!-- Single Starts Here -->
<div class="about-page">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-heading">
                    <div class="line-dec"></div>
                    <h1> </h1>
                </div>
            </div>
            <div class="col-md-6">
                <div class="left-image">
                    <img src="assets/images/item1.webp" alt="">
                </div>
            </div>
            <div class="col-md-6">
                <div class="right-content">
                    <h4>Surfboards</h4>
                    <h6>$15.00</h6>
                    <p> Penny crafted an art piece that captures the essence of a fun and hot summer. The green pastel
                        tones are reminicent of a cool, calm drink in a hot humid climate - a reflection of Penny's life
                        in Fiji and move back to New Zealand for a Summer Christmas. </p>
                    <span>7 left on stock</span>
                    <br>
                    <form action="" method="get">
                        <label for="quantity">Quantity:</label>
                        <input name="quantity" type="quantity" class="quantity-text" id="quantity"
                               onfocus="if(this.value == '1') { this.value = ''; }"
                               onBlur="if(this.value == '') { this.value = '1';}"
                               value="1">
                        <input type="submit" class="button" value="Order Now!">
                    </form>
                    <div class="down-content">
                        <div class="categories">
                            <h6>Category: <span><a href="#">Summer</a>,<a href="#">Joy</a>,<a
                                            href="#">Lifestyle</a></span></h6>
                        </div>
                        <div class="share">
                            <h6>Share: <span><a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i
                                                class="fa fa-linkedin"></i></a><a href="#"><i class="fa fa-twitter"></i></a></span>
                            </h6>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- Single Page Ends Here -->

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
                    <p>Godard four dollar toast prism, authentic heirloom raw denim messenger bag gochujang put a bird
                        on it celiac readymade vice.</p>
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


</body>

</html>
