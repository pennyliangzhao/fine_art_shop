<?php
require('services/db-config.php');
session_start();
?>
<head>
    <meta charset="UTF-8">
    <title>Login Page</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/signup.css">
    <link rel="stylesheet" href="assets/css/error.css">
    <link rel="stylesheet" href="assets/css/main.css">
</head>
<body>
<button class="nav-bar-buttons" onclick="document.getElementById('id02').style.display='block'">Sign
    up<i class="fa fa-user-plus"></i></button>
<!-- Main Content -->
<div class="container-fluid">
    <div class="row main-content bg-success text-center">
        <div class="col-md-4 text-center company__info">
            <span class="company__logo"></span>
            <h4 class="company_title"><span id="company_title">Penny's</span> Fine Art Prints Shop</h4>
        </div>
        <div class="col-md-8 col-xs-12 col-sm-12 login_form ">

            <div class="container-fluid">
                <div class="row">
                    <h2 id="error-h2">Please login first to access this page...</h2>
                    <h3>Log In</h3>
                </div>
                <div class="row">
                    <form action="services/login.php" method="post" class="form-group">
                        <div class="row">
                            <input type="text" name="uname" id="username" class="form__input"
                                   placeholder="Username">
                        </div>
                        <div class="row">
                            <input type="password" name="psw" id="password" class="form__input"
                                   placeholder="Password">
                        </div>
                        <div class="row">
                            <input type="checkbox" name="remember_me" id="remember_me" class="">
                            <label for="remember_me">Remember Me!</label>
                        </div>
                        <div class="row">
                            <input type="submit" value="Submit" class="btn">
                        </div>
                    </form>
                </div>
                <div class="row">
                    <span onclick="document.getElementById('id02').style.display='none'" class="close"
                          title="Close Modal">&times;</span>
                </div>
            </div>
        </div>
    </div>
</div>
<!--signup window-->
<div id="id02" class="modal" style="display: none">
    <form class="modal-content" action="services/signup.php" method="post">
        <div class="container">
            <h1>Sign Up</h1>
            <p>Please fill in this form to create an account.</p>
            <hr>
            <label for="username"><b>Username</b></label>
            <input type="text" placeholder="Enter username" name="username" required><br>

            <label for="psw"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="psw" required><br>

            <label for="psw-repeat"><b>Repeat Password</b></label>
            <input type="password" placeholder="Repeat Password" name="psw-repeat" required><br>

            <label>
                <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
            </label>

            <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

            <div class="clearfix">
                <button type="button" onclick="document.getElementById('id02').style.display='none'"
                        class="cancelbtn">
                    Cancel
                </button>
                <button type="submit" class="signupbtn">Sign Up</button>
            </div>
        </div>
</div>
<!--signup window end-->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="vendor/scripts/signup.js"></script>
</body>

