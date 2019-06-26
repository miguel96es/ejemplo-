<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->

<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>EduWily Education Category Bootstrap Responsive Web Template | Contact :: W3layouts</title>
    <!-- Meta tag Keywords -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8" />
    <meta name="keywords" content="EduWily Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script>
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }

    </script>
    <!-- //Meta tag Keywords -->
    <!-- Custom-Files -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <!-- Bootstrap-Core-CSS -->
    <link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
    <!-- Style-CSS -->
    <!-- font-awesome-icons -->
    <link href="css/font-awesome.css" rel="stylesheet">
    <!-- //font-awesome-icons -->
    <!-- /Fonts -->
    <link href="//fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800" rel="stylesheet">
    <!-- //Fonts -->
</head>

<body>
    <!-- home -->
    <div id="home" class="inner-w3pvt-page">
        <div class="overlay-innerpage">
            <!-- banner -->
            <div class="top_w3pvt_main container">

                <!-- nav -->
                <div class="nav_w3pvt text-center">
                    <!-- nav -->
                    <nav class="lavi-wthree">
                        <div id="logo">
                            <h1> <a class="navbar-brand" href="/">EduWily</a>
                            </h1>
                        </div>

                        <label for="drop" class="toggle">Menu</label>
                        <input type="checkbox" id="drop" />
                        <ul class="menu mr-auto">
                            <li><a href="/">Home</a></li>
                            <li><a href="/about">About</a></li>
                            <li>
                                <!-- First Tier Drop Down -->
                                <label for="drop-2" class="toggle">Drop Down <span class="fa fa-angle-down" aria-hidden="true"></span> </label>
                                <a href="#">Drop Down <span class="fa fa-angle-down" aria-hidden="true"></span></a>
                                <input type="checkbox" id="drop-2" />
                                <ul>
                                    <li><a href="/">Services</a>
                                    </li>
                                    <li><a href="/">Gallery</a>
                                    </li>
                                    <li><a href="/">Testimonials</a>
                                    </li>
                                    <li><a href="/under">Blogs</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="active"><a href="/contact">Contact</a>
                            <li class="log-vj ml-lg-5"><a href="/contact"><span class="fa fa-user-circle-o" aria-hidden="true"></span> Join</a>
                        </ul>
                    </nav>
                    <!-- //nav -->
                </div>
            </div>
            <!-- //nav -->

        </div>
        <!-- //banner -->
    </div>
    <!-- //home -->

    <!-- about -->
    <section class="about py-5">
        <div class="container py-md-5">
            <h3 class="tittle-wthree text-center">Contact Us</h3>
            <p class="sub-tittle text-center mt-4 mb-sm-5 mb-4">Sed do eiusmod tempor incididunt ut labore et dolore
                magna
                aliqua. Ut enim ad minim veniam, quis nostrud exercitation</p>
            <div class="row">

                <div class="col-lg-6 contact-info-left">
                    <ul class="list-unstyled w3ls-items">
                        <li>
                            <div class="row mt-5">
                                <div class="col-3">
                                    <div class="con-icon">
                                        <span class="fa fa-home"></span></div>
                                </div>
                                <div class="col-9">
                                    <h6>Address</h6>
                                    <p>The company name
                                        <br>5768 Morris Park,
                                        <br>New York City. </p>
                                </div>
                            </div>
                        </li>

                        <li>
                            <div class="row mt-5">
                                <div class="col-3">
                                    <div class="con-icon">
                                        <span class="fa fa-envelope"></span></div>
                                </div>
                                <div class="col-9">
                                    <h6>Email</h6>
                                    <a href="mailto:info@example.com">mail@example.com</a>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="row mt-5">
                                <div class="col-3">
                                    <div class="con-icon">
                                        <span class="fa fa-phone"></span> </div>
                                </div>
                                <div class="col-9">
                                    <h6>Phone</h6>
                                    <p>1234567890</p>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-6 contact-right-wthree-info login">
                    <h5 class="text-center mb-4"></h5>
                    <form action="{{route('mensajes')}}" method="post">
                      {{csrf_field()}}
                        <div class="form-group mt-4">
                            <label>Name</label>

                            <input name="nombre" type="text" class="form-control" id="validationDefault01" placeholder="" required="">
                        </div>
                        <div  class="form-group mt-4">
                            <label>E-mail</label>
                            <input name="correo" type="email" class="form-control" id="validationDefault02" placeholder="" required="">
                        </div>

                        <div class="form-group mt-4">
                            <label class="mb-2">Password</label>
                            <input name="clave" type="password" class="form-control" id="password1" placeholder="" required="">
                        </div>
                        <div class="form-group mt-4">
                            <label class="mb-2">Message</label>
                            <textarea class="form-control" name="mensaje" placeholder="" required=""></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary submit mb-4">Submit </button>

                    </form>

                </div>
            </div>

            <div class="map-wthree mt-5 p-2">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d845.93408835394!2d-70.13009422211339!3d-20.231346426335282!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x91521413c6dff01b%3A0x8644180b26fd331!2sAv.+Diego+Portales+%26+Progreso%2C+Iquique%2C+Regi%C3%B3n+de+Tarapac%C3%A1!5e0!3m2!1ses!2scl!4v1560981884533!5m2!1ses!2scl" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                

            </div>
        </div>
    </section>
    <!-- //about -->

    <!-- footer -->
    <footer class="py-5">
        <div class="container py-sm-3">
            <div class="row footer-grids">
                <div class="col-lg-3 col-sm-6 mb-lg-0 mb-sm-5 mb-4">
                    <h2> <a class="navbar-brand mb-3" href="/">EduWily</a>
                    </h2>
                    <p class="mb-3">Onec Consequat sapien ut cursus rhoncus. Nullam dui mi, vulputate ac metus semper quis luctus sed.</p>
                    <h5>Trusted by <span>500+ People</span> </h5>
                </div>
                <div class="col-lg-3 col-sm-6 mb-md-0 mb-sm-5 mb-4">
                    <h4 class="mb-4">Address Info</h4>
                    <p><span class="fa mr-2 fa-map-marker"></span>64d canal street TT 9436 <span>Newyork, NY.</span></p>
                    <p class="phone py-2"><span class="fa mr-2 fa-phone"></span> +1(12) 123 456 789 </p>
                    <p><span class="fa mr-2 fa-envelope"></span><a href="mailto:info@example.com">info@example.com</a></p>
                </div>
                <div class="col-lg-2 col-sm-6 mb-lg-0 mb-sm-5 mb-4">
                    <h4 class="mb-4">Quick Links</h4>
                    <ul>
                        <li><a href="#">Online Education</a></li>
                        <li class="my-2"><a href="#">Free Application</a></li>
                        <li><a href="#">Support Helpline</a></li>
                        <li class="mt-2"><a href="#">Privacy Ploicy</a></li>
                    </ul>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <h4 class="mb-4">Subscribe Us</h4>
                    <p class="mb-3">Subscribe to our newsletter</p>
                    <form action="#" method="post" class="d-flex newsletter-w3pvt">
                        <input type="email" id="email" name="EMAIL" placeholder="Enter your email here" required="">
                        <button type="submit" class="btn">Subscribe</button>
                    </form>
                    <div class="icon-social mt-4">
                        <a href="#" class="button-footr">
                            <span class="fa mx-2 fa-facebook"></span>
                        </a>
                        <a href="#" class="button-footr">
                            <span class="fa mx-2 fa-twitter"></span>
                        </a>
                        <a href="#" class="button-footr">
                            <span class="fa mx-2 fa-dribbble"></span>
                        </a>
                        <a href="#" class="button-footr">
                            <span class="fa mx-2 fa-pinterest"></span>
                        </a>
                        <a href="#" class="button-footr">
                            <span class="fa mx-2 fa-google-plus"></span>
                        </a>

                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- //footer -->
    <!-- copyright -->
    <div class="copy_right p-3 d-flex justify-content-around">

        <p>© 2019 EduWily. All rights reserved | Design by
            <a href="http://w3layouts.com/">W3layouts</a>

        </p>
        <!-- move top -->
        <div class="move-top">
            <a href="#home" class="move-top">
                <span class="fa fa-angle-double-up mt-3" aria-hidden="true"></span>
            </a>
        </div>
        <!-- move top -->
    </div>
    <!-- //copyright -->






</body>

</html>
