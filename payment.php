<?php
require('services/db-config.php');
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="assets/css/payment.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/css/login.css">
    <link rel="stylesheet" href="assets/css/signup.css">
</head>
<!-- Pre Header -->

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <?php
                if(!isset($_SESSION['logged_in'])) {
                    echo '<button class="nav-bar-buttons" onclick="document.getElementById(\'id01\').style.display=\'block\'">Login <i class="fa fa-sign-in"></i></button>'.

                        '<button class="nav-bar-buttons" onclick="document.getElementById(\'id02\').style.display=\'block\'">Sign up<i class="fa fa-user-plus"></i></button>';
                }else{
                    echo '<a class="button-link" href="services/logout.php">logout<i class="fa fa-sign-out"></i></a>';

                }
                ?>

            </div>
        </div>
    </div>
</div>

<!-- Navigation -->
<div>
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top">
            <!--            <div class="collapse navbar-collapse" id="navbarResponsive">-->
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
</div>

<!-- Featured Ends Here -->
<!-- Page Content -->
<h2 class="checkout">Checkout</h2>
<div class="row">
    <div class="col-75">
        <div class="container">
            <div>

                <div class="row">
                    <div class="col-50">
                        <h3>Billing Address</h3>
                        <label for="fname"><i class="fa fa-user"></i> Full Name</label>
                        <input type="text" id="fname" name="firstname" placeholder="John M. Doe">
                        <label for="email"><i class="fa fa-envelope"></i> Email</label>
                        <input type="text" id="email" name="email" placeholder="john@example.com">
                        <label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
                        <input type="text" id="adr" name="address" placeholder="542 W. 15th Street">
                        <label for="city"><i class="fa fa-institution"></i> City</label>
                        <input type="text" id="city" name="city" placeholder="New York">

                        <div class="row">
                            <div class="col-50">
                                <label for="state">State</label>
                                <input type="text" id="state" name="state" placeholder="NY">
                            </div>
                            <div class="col-50">
                                <label for="zip">Zip</label>
                                <input type="text" id="zip" name="zip" placeholder="10001">
                            </div>
                        </div>
                    </div>

                    <div class="col-50">
                        <h3>Payment</h3>
                        <label for="fname">Accepted Cards</label>
                        <div class="icon-container">
                            <i class="fa fa-cc-visa" style="color:navy;"></i>
                            <i class="fa fa-cc-amex" style="color:blue;"></i>
                            <i class="fa fa-cc-mastercard" style="color:red;"></i>
                            <i class="fa fa-cc-discover" style="color:orange;"></i>
                        </div>
                        <label for="cname">Name on Card</label>
                        <input type="text" id="cname" name="cardname" placeholder="John More Doe">
                        <label for="ccnum">Credit card number</label>
                        <input type="text" id="ccnum" name="cardnumber" placeholder="1111-2222-3333-4444">
                        <label for="expmonth">Exp Month</label>
                        <input type="text" id="expmonth" name="expmonth" placeholder="September">
                        <div class="row">
                            <div class="col-50">
                                <label for="expyear">Exp Year</label>
                                <input type="text" id="expyear" name="expyear" placeholder="2018">
                            </div>
                            <div class="col-50">
                                <label for="cvv">CVV</label>
                                <input type="text" id="cvv" name="cvv" placeholder="352">
                            </div>
                        </div>
                    </div>

                </div>
                <label>
                    <input type="checkbox" checked="checked" name="sameadr"> Shipping address same as billing
                </label>
                <input id="checkout" value="Continue to checkout" class="btn">
            </form>
        </div>
    </div>
<!--    <div class="col-25">-->
<!--        <div class="container">-->
<!--            <p><a href="#">Product 1</a> <span class="price">$15</span></p>-->
<!--            <p><a href="#">Product 2</a> <span class="price">$5</span></p>-->
<!--            <p><a href="#">Product 3</a> <span class="price">$8</span></p>-->
<!--            <p><a href="#">Product 4</a> <span class="price">$2</span></p>-->
<!--            <hr>-->
<!--            <p>Total <span class="price" style="color:black"><b>$30</b></span></p>-->
<!--        </div>-->
<!--    </div>-->
</div>
</div>
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="scripts/login.js"></script>
<script src="scripts/signup.js"></script>
<script src="vendor/scripts/order-product.js"></script>
</body>
</html>

