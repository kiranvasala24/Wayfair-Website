<?php
$ConnectingDB = mysqli_connect('localhost', 'root', '', 'foodzy');


if (isset($_POST['submit'])) {
    $username = mysqli_real_escape_string($ConnectingDB, $_POST['username']);
    $password = mysqli_real_escape_string($ConnectingDB, $_POST['password']);

    $query = " SELECT username, password FROM users ";
    $query .= " WHERE username = '$username' AND password = '$password' ";

    $execute = mysqli_query($ConnectingDB, $query);

    if (mysqli_num_rows($execute) != 0) {

        header("Location: logged.html");
        exit;
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Wayfair Showroom</title>

    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="css/fontAwesome.css">
    <link rel="stylesheet" href="css/hero-slider.css">
    <link rel="stylesheet" href="css/owl-carousel.css">
    <link rel="stylesheet" href="css/datepicker.css">
    <link rel="stylesheet" href="css/templatemo-style.css">
    <link rel="stylesheet" href="css/login.css">

    <link href="https://fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700,800,900" rel="stylesheet">

    <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>

</head>

<body>

    <div class="wrap">
        <header id="header">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <button id="primary-nav-button" type="button">Menu</button>
                        <a href="index.html">
                            <div class="logo">
                                <img src="img/logo.jpg" alt="Wayfair Logo">
                            </div>
                        </a>
                        <nav id="primary-nav" class="dropdown cf">
                            <ul class="dropdown menu">
                                <li class='active'><a href="#">Popular</a></li>
                                <li><a href="#">Most favorites</a>
                                    <ul class="sub-menu">
                                        <li><a href="product.html">Sofa</a></li>
                                        <li><a href="product.html">Table</a></li>
                                        <li><a href="product.html">Chair</a></li>
                                    </ul>
                                </li>
                                <li><a class="scrollTo" data-scrollTo="blog" href="blog.html">Client Reviews</a>
                                </li>
                                <li><a class="scrollTo" data-scrollTo="services" href="about.html">Our
                                        Services</a></li>
                                <li><a class="scrollTo" data-scrollTo="contact" href="contact.html">Contact
                                        Us</a></li>
                            </ul>
                        </nav><!-- / #primary-nav -->
                    </div>
                </div>
            </div>
        </header>
    </div>



    <section class="banner" id="top">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="banner-caption">
                        <div class="line-dec"></div>
                        <h2>Wayfair Showroom</h2>
                        <span>everyone should live in a home they love.</span>
                        <div class="blue-button">
                            <a class="scrollTo" data-scrollTo="popular" href="#">Discover More</a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <div class="login">
        <div class="wrapper fadeInDown">
            <div id="formContent">
                <!-- Tabs Titles -->
                <h2 class="active"> Sign In </h2>


                <form method="post">
                    <input type="text" id="login" class="fadeIn second" name="username" placeholder="login">
                    <input type="password" id="password" class="fadeIn third" name="password" placeholder="password">
                    <button name="submit" class="fadeIn fourth" type="submit">Log In</button>
                </form>

                <!-- Remind Passowrd -->
                <div id="formFooter">
                    <a class="underlineHover" href="#">Forgot Password?</a>
                </div>

            </div>
        </div>

    </div>



    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <div class="about-veno">
                        <div class="logo">
                            <img src="img/footer_logo.jpg" alt="footer Logo">
                        </div>
                        <p>Wayfair believes everyone should live in a home they love. Through
                            technology and innovation, Wayfair makes it possible
                            for shoppers to quickly and easily find exactly what they want from
                            a selection of more than 18 million items across
                            home furnishings, décor, home improvement, housewares and more.
                            Committed to delighting its customers every step of the
                            way, Wayfair is reinventing the way people shop for their homes -
                            from product discovery to final delivery.</p>
                        <ul class="social-icons">
                            <li>
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                                <a href="#"><i class="fa fa-rss"></i></a>
                                <a href="#"><i class="fa fa-dribbble"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- <div class="col-md-4">
                    <div class="useful-links">
                        <div class="footer-heading">
                            <h4>Useful Links</h4>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <ul>
                                    <li><a href="#"><i class="fa fa-stop"></i>Help FAQs</a></li>
                                    <li><a href="#"><i class="fa fa-stop"></i>Register</a></li>
                                    <li><a href="#"><i class="fa fa-stop"></i>Login</a></li>
                                    <li><a href="#"><i class="fa fa-stop"></i>My Profile</a></li>
                                    <li><a href="#"><i class="fa fa-stop"></i>How It Works?</a></li>
                                    <li><a href="#"><i class="fa fa-stop"></i>More About Us</a></li>
                                </ul>
                            </div>
                            <div class="col-md-6">
                                <ul>
                                    <li><a href="#"><i class="fa fa-stop"></i>Our Clients</a></li>
                                    <li><a href="#"><i class="fa fa-stop"></i>Partnerships</a></li>
                                    <li><a href="#"><i class="fa fa-stop"></i>Blog Entries</a></li>
                                    <li><a href="#"><i class="fa fa-stop"></i>Contact Us</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div> -->
                <div class="col-md-5">
                    <div class="contact-info">
                        <div class="footer-heading">
                            <h4>Contact Information</h4>
                        </div>
                        <p>Wayfair is a rapidly growing company with a variety of career opportunities. We offer
                            employees exciting work in a fun,
                            dynamic environment that encourages learning and growth. We are accepting résumés on a
                            rolling basis from motivated
                            individuals who are interested in working in the e−commerce industry.</p>
                        <ul>
                            <li><span>Phone:</span><a href="#">010-050-0550</a></li>
                            <li><span>Email:</span><a href="#">manager@wayfair.co</a></li>
                            <li><span>Address:</span><a href="#">wayfair.com</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <div class="sub-footer">
        <p>Copyright &copy; 2018 Wayfair


    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js" type="text/javascript"></script>
    <script>
        window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')
    </script>

    <script src="js/vendor/bootstrap.min.js"></script>

    <script src="js/datepicker.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>
</body>

</html>