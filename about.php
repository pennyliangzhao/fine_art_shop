<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700" rel="stylesheet">

    <title>About Page</title>

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
                <?php include("cartbutton.php");?>
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
                <li class="nav-item active">
                    <a class="nav-link" href="about.php">About</a>
                    <span class="sr-only">(current)</span>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact.php">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Page Content -->
<!-- About Page Starts Here -->
<div class="about-page">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-heading">
                    <div class="line-dec"></div>
                    <h1>About </h1>
                </div>
            </div>
            <div class="col-md-6">
                <div class="left-image">
                    <img src="assets/images/about-us.jpg" alt="">
                </div>
            </div>
            <div class="col-md-6">
                <div class="right-content">
                    <h3>A LITTLE ABOUT PENNY</h3>
                    <h4>Creativity is in her blood</h4>
                    <p>Penny is a passionate creative and when asked what she does, it's a bit of a mouthful. Penny is a
                        graphic designer, illustrator, content creator and cruelty free fine artist.</p>
                    <br>
                    <p>Penny's love for make up and application came naturally. To her it is just another form of
                        creativity. To encourage someone to feel as beautiful on the outside as they are on the inside
                        is a wonderful thing. She believes make up can imbue confidence and if used in the right way can
                        enhance one's natural beauty and radiance.</p>
                    <br>
                    <p>Penny began her beauty and lifestyle channels in 2014 and thoroughly enjoys creating beautiful
                        content to share with her viewers. In more recent times, Penny 's channels have evolved to
                        reflect her lifestyle change to living a vegan and cruelty free life and their purpose has
                        become more evident -- to show her followers that living a vegan lifestyle is easy, delicious
                        and fun! Penny has a social media following of 30,000+ across her social media channels.</p>
                    <br>
                    <p>Penny returned from living in Fiji for 18 months at the end of 2017 and is enjoying getting
                        settled back into the Kiwi way of life and working on exciting projects.You can contact Penny at
                        hello@pennyfineart.co.nz or use the contact form at the bottom of this page.</p>
                    <div class="share">
                        <h6>Find us on: <span><a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i
                                            class="fa fa-linkedin"></i></a><a href="#"><i class="fa fa-twitter"></i></a></span>
                        </h6>
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
                        <li><a href="index.php">Home</a></li>
                        <li><a href="#">Help</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">How It Works ?</a></li>
                        <li><a href="contact.php">Contact Us</a></li>
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
