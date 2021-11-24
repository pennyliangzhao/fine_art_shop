<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <title>Penny's Fine Art</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/css/login.css">
    <link rel="stylesheet" href="assets/css/signup.css">

</head>

<body>

<!-- Pre Header -->
<div id="pre-header">
    <div class="container">
        <div class="row">
            <div class="col-md-12">

                <button class="nav-bar-buttons" onclick="document.getElementById('id01').style.display='block'">Login
                </button>
                <button class="nav-bar-buttons" onclick="document.getElementById('id02').style.display='block'">Sign up
                </button>
                <!--                <button onclick="document.getElementById('shopping_cart').style.display='block'" style="width:auto;">-->
                <!--                    Shopping Cart<i class="fa fa-shopping-cart"></i>-->
                <!--                </button>-->

            </div>
        </div>
    </div>
</div>
<!-- Page Content -->

<!--login window-->
<div id="id01" class="modal">

    <form class="modal-content animate" action="/action_page.php" method="post">

        <div class="container">
            <label for="uname"><b>Username</b></label>
            <input type="text" placeholder="Enter Username" name="uname" required>

            <label for="psw"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="psw" required>

            <button type="submit">Login</button>
            <label>
                <input type="checkbox" checked="checked" name="remember"> Remember me
            </label>
        </div>

        <div class="container" style="background-color:#f1f1f1">
            <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">
                Cancel
            </button>
            <span class="psw">Forgot <a href="#">password?</a></span>
        </div>
    </form>
</div>
<!--login window end-->

<!--signup window-->
<div id="id02" class="modal">
    <span onclick="document.getElementById('id02').style.display='none'" class="close"
          title="Close Modal">&times;</span>
    <form class="modal-content" action="/action_page.php">
        <div class="container">
            <h1>Sign Up</h1>
            <p>Please fill in this form to create an account.</p>
            <hr>
            <label for="email"><b>Email</b></label>
            <input type="text" placeholder="Enter Email" name="email" required>

            <label for="psw"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="psw" required>

            <label for="psw-repeat"><b>Repeat Password</b></label>
            <input type="password" placeholder="Repeat Password" name="psw-repeat" required>

            <label>
                <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
            </label>

            <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

            <div class="clearfix">
                <button type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn">
                    Cancel
                </button>
                <button type="submit" class="signupbtn">Sign Up</button>
            </div>
        </div>
    </form>
</div>
<!--signup window end-->

<!-- Banner Starts Here -->
<div class="header">
    <h2><span class="span">PENNY'S</span> FINE ART PRINTS</h2>
    <h1 class="h1">SHOP</h1>

    <p class="p1">THE ART OF LIVING</p>
</div>
<!-- Banner Ends Here -->

<!-- Navigation -->

<div class="container">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top">
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Home
                        <span class="sr-only">(current)</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="products.php">Products</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about.php">About </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact.php">Contact </a>
                </li>

                <li class="nav-item">
                    <form action="/action_page.php">
                <li class="nav-item">
            </ul>
        </div>
    </nav>


    <!-- Featured Starts Here -->
    <div class="featured-items">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading">
                        <div class="line-dec"></div>
                        <!--  <h1>Featured Items</h1>-->
                    </div>
                </div>
                <div class="col-md-12">

                    <div class="featured container no-gutter">

                        <div class="row posts">
                            <div id="1" class="item new col-md-4">
                                <a href="single-product1.php">
                                    <div class="featured-item">
                                        <img src="assets/images/item1.webp" alt="">
                                        <!--    <h4>Surfboards</h4>-->
                                        <!--   <h6>$15.00</h6>-->
                                    </div>
                                </a>
                            </div>
                            <div id="2" class="item high col-md-4">
                                <a href="single-product2.php">
                                    <div class="featured-item">
                                        <img src="assets/images/item2.webp" alt="">
                                        <!--  <h4>Denim Summer 18 Jacket</h4>-->
                                        <!--   <h6>$25.00</h6>-->
                                    </div>
                                </a>
                            </div>
                            <div id="3" class="item low col-md-4">
                                <a href="single-product1.php">
                                    <div class="featured-item">
                                        <img src="assets/images/item3.webp" alt="">
                                        <!--   <h4>Fat Cactus</h4>-->
                                        <!--   <h6>$35.00</h6>-->
                                    </div>
                                </a>
                            </div>
                            <div id="4" class="item low col-md-4">
                                <a href="single-product1.php">
                                    <div class="featured-item">
                                        <img src="assets/images/item4.webp" alt="">
                                        <!--                                        <h4>Banana Leaves</h4>-->
                                        <!--                                        <h6>$45.00</h6>-->
                                    </div>
                                </a>
                            </div>
                            <div id="5" class="item new high col-md-4">
                                <a href="single-product1.php">
                                    <div class="featured-item">
                                        <img src="assets/images/item5.webp" alt="">
                                        <!--                                        <h4>Prickly Cactus</h4>-->
                                        <!--                                        <h6>$55.00</h6>-->
                                    </div>
                                </a>
                            </div>
                            <div id="6" class="item new col-md-4">
                                <a href="single-product1.php">
                                    <div class="featured-item">
                                        <img src="assets/images/item6.webp" alt="">
                                        <!--                                        <h4>Summer Umbrella</h4>-->
                                        <!--                                        <h6>$65.00</h6>-->
                                    </div>
                                </a>
                            </div>
                            <div id="7" class="item new high col-md-4">
                                <a href="single-product1.php">
                                    <div class="featured-item">
                                        <img src="assets/images/item7.webp" alt="">
                                        <!--                                        <h4>Love Bite Apple</h4>-->
                                        <!--                                        <h6>$75.00</h6>-->
                                    </div>
                                </a>
                            </div>
                            <div id="8" class="item low new col-md-4">
                                <a href="single-product1.php">
                                    <div class="featured-item">
                                        <img src="assets/images/item8.webp" alt="">
                                        <!--                                        <h4>Snow White & Friends</h4>-->
                                        <!--                                        <h6>$85.00</h6>-->
                                    </div>
                                </a>
                            </div>
                            <div id="9" class="item new col-md-4">
                                <a href="single-product1.php">
                                    <div class="featured-item">
                                        <img src="assets/images/item9.webp" alt="">
                                        <!--                                        <h4>Hipster Puppi</h4>-->
                                        <!--                                        <h6>$95.00</h6>-->
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Featured Ends Here -->


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

                </div>
</body>
<script src="scripts/login.js"></script>
<script src="scripts/signup.js"></script>
</html>
