<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700" rel="stylesheet">

    <title>Products</title>

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
                onclick="document.getElementById('id03').style.display='block'" style="width:auto;">
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
<!-- Items Starts Here -->
<div class="featured-page">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-12">
                <div class="section-heading">
                    <div class="line-dec"></div>
                    <h1>Featured Items</h1>
                </div>
            </div>
            <div class="col-md-8 col-sm-12">
                <div id="filters" class="button-group">
                    <button class="btn btn-primary" data-filter="*">All Products</button>
                    <button class="btn btn-primary" data-filter=".new">Newest</button>
                    <button class="btn btn-primary" data-filter=".low">Low Price</button>
                    <button class="btn btn-primary" data-filter=".high">Hight Price</button>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="featured container no-gutter">

    <div class="row posts">
        <div id="1" class="item new col-md-4">
            <a href="single-product1.php">
                <div class="featured-item">
                    <img src="assets/images/item1.webp" alt="">
                    <h4>Surfboards</h4>
                    <h6>$15.00</h6>
                </div>
            </a>
        </div>
        <div id="2" class="item high col-md-4">
            <a href="single-product2.php">
                <div class="featured-item">
                    <img src="assets/images/item2.webp" alt="">
                    <h4>Denim Summer 18 Jacket</h4>
                    <h6>$25.00</h6>
                </div>
            </a>
        </div>
        <div id="3" class="item low col-md-4">
            <a href="single-product1.php">
                <div class="featured-item">
                    <img src="assets/images/item3.webp" alt="">
                    <h4>Fat Cactus</h4>
                    <h6>$35.00</h6>
                </div>
            </a>
        </div>
        <div id="4" class="item low col-md-4">
            <a href="single-product1.php">
                <div class="featured-item">
                    <img src="assets/images/item4.webp" alt="">
                    <h4>Banana Leaves</h4>
                    <h6>$45.00</h6>
                </div>
            </a>
        </div>
        <div id="5" class="item new high col-md-4">
            <a href="single-product1.php">
                <div class="featured-item">
                    <img src="assets/images/item5.webp" alt="">
                    <h4>Prickly Cactus</h4>
                    <h6>$55.00</h6>
                </div>
            </a>
        </div>
        <div id="6" class="item new col-md-4">
            <a href="single-product1.php">
                <div class="featured-item">
                    <img src="assets/images/item6.webp" alt="">
                    <h4>Summer Umbrella</h4>
                    <h6>$65.00</h6>
                </div>
            </a>
        </div>
        <div id="7" class="item new high col-md-4">
            <a href="single-product1.php">
                <div class="featured-item">
                    <img src="assets/images/item7.webp" alt="">
                    <h4>Love Bite Apple</h4>
                    <h6>$75.00</h6>
                </div>
            </a>
        </div>
        <div id="8" class="item low new col-md-4">
            <a href="single-product1.php">
                <div class="featured-item">
                    <img src="assets/images/item8.webp" alt="">
                    <h4>Snow White & Friends</h4>
                    <h6>$85.00</h6>
                </div>
            </a>
        </div>
        <div id="9" class="item new col-md-4">
            <a href="single-product1.php">
                <div class="featured-item">
                    <img src="assets/images/item9.webp" alt="">
                    <h4>Hipster Puppi</h4>
                    <h6>$95.00</h6>
                </div>
            </a>
        </div>
    </div>
</div>

<div class="page-navigation">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <ul>
                    <li class="current-page"><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- Featred Page Ends Here -->


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