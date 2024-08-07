<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from themewagon.github.io/constra/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 26 Jul 2024 10:53:29 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->

<head>

    <!-- Basic Page Needs
================================================== -->
    <meta charset="utf-8">
    <title>Constra - Construction Html5 Template</title>

    <!-- Mobile Specific Metas
================================================== -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Construction Html5 Template">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">

    <!-- Favicon
================================================== -->
    <link rel="icon" type="image/png" href="{{ asset('assets/images/favicon.png') }}">

    <!-- CSS
================================================== -->
    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/bootstrap/bootstrap.min.css') }}">
    <!-- FontAwesome -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome/css/all.min.css') }}">
    <!-- Animation -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/animate-css/animate.css') }}">
    <!-- slick Carousel -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/slick/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/slick/slick-theme.css') }}">
    <!-- Colorbox -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/colorbox/colorbox.css') }}">
    <!-- Template styles-->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

</head>

<body>
    <div class="body-inner">

        <!-- Header start -->
        <header id="header" class="header-one">
            <div class="bg-white">
                <div class="container">
                    <div class="logo-area">
                        <div class="row align-items-center">
                            <div class="logo col-lg-3 text-center text-lg-left mb-3 mb-md-5 mb-lg-0">
                                <a class="d-block" href="{{ route('index') }}">
                                    <img loading="lazy" width="100" height="100"
                                        src="{{ asset('assets/images/final-logo.png') }}" alt="Constra">
                                </a>
                            </div><!-- logo end -->

                            <div class="col-lg-9 header-right">
                                <ul class="top-info-box">
                                    <li>
                                        <div class="info-box">
                                            <div class="info-box-content">
                                                <p class="info-box-title">Call Us</p>
                                                <p class="info-box-subtitle">(+9) 847-291-4353</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="info-box">
                                            <div class="info-box-content">
                                                <p class="info-box-title">Email Us</p>
                                                <p class="info-box-subtitle">office@Constra.com</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="last">
                                        <div class="info-box last">
                                            <div class="info-box-content">
                                                <p class="info-box-title">Global Certificate</p>
                                                <p class="info-box-subtitle">ISO 9001:2017</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="header-get-a-quote">
                                        <a class="btn btn-primary" href="contact.html">Get A Quote</a>
                                    </li>
                                </ul><!-- Ul end -->
                            </div><!-- header right end -->
                        </div><!-- logo area end -->

                    </div><!-- Row end -->
                </div><!-- Container end -->
            </div>

            <div class="site-navigation">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <nav class="navbar navbar-expand-lg navbar-dark p-0">
                                <button class="navbar-toggler" type="button" data-toggle="collapse"
                                    data-target=".navbar-collapse" aria-controls="navbar-collapse" aria-expanded="false"
                                    aria-label="Toggle navigation">
                                    <span class="navbar-toggler-icon"></span>
                                </button>

                                <div id="navbar-collapse" class="collapse navbar-collapse">
                                    <ul class="nav navbar-nav mr-auto">
                                        <li class="nav-item dropdown active">
                                            <a href="{{ route('index') }}" class="nav-link dropdown-toggle">Home</a>
                                            {{-- <ul class="dropdown-menu" role="menu">
                                                <li class="active"><a href="index.html">Home One</a></li>
                                                <li><a href="index-2.html">Home Two</a></li>
                                            </ul> --}}
                                        </li>

                                        <li class="nav-item dropdown">
                                            <a href="#" class="nav-link dropdown-toggle"
                                                data-toggle="dropdown">Company <i class="fa fa-angle-down"></i></a>
                                            <ul class="dropdown-menu" role="menu">
                                                <li><a href="about.html">About Us</a></li>
                                                <li><a href="team.html">Our People</a></li>
                                                <li><a href="testimonials.html">Testimonials</a></li>
                                                <li><a href="faq.html">Faq</a></li>
                                                <li><a href="pricing.html">Pricing</a></li>
                                            </ul>
                                        </li>

                                        <li class="nav-item dropdown">
                                            <a href="#" class="nav-link dropdown-toggle"
                                                data-toggle="dropdown">Projects <i class="fa fa-angle-down"></i></a>
                                            <ul class="dropdown-menu" role="menu">
                                                <li><a href="projects.html">Projects All</a></li>
                                                <li><a href="projects-single.html">Projects Single</a></li>
                                            </ul>
                                        </li>

                                        <li class="nav-item dropdown">
                                            <a href="#" class="nav-link dropdown-toggle"
                                                data-toggle="dropdown">Services <i class="fa fa-angle-down"></i></a>
                                            <ul class="dropdown-menu" role="menu">
                                                <li><a href="services.html">Services All</a></li>
                                                <li><a href="service-single.html">Services Single</a></li>
                                            </ul>
                                        </li>

                                        <li class="nav-item dropdown">
                                            <a href="#" class="nav-link dropdown-toggle"
                                                data-toggle="dropdown">Features <i class="fa fa-angle-down"></i></a>
                                            <ul class="dropdown-menu" role="menu">
                                                <li><a href="typography.html">Typography</a></li>
                                                <li><a href="404.html">404</a></li>
                                                <li class="dropdown-submenu">
                                                    <a href="#!" class="dropdown-toggle"
                                                        data-toggle="dropdown">Parent Menu</a>
                                                    <ul class="dropdown-menu">
                                                        <li><a href="#!">Child Menu 1</a></li>
                                                        <li><a href="#!">Child Menu 2</a></li>
                                                        <li><a href="#!">Child Menu 3</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>

                                        <li class="nav-item dropdown">
                                            <a href="#" class="nav-link dropdown-toggle"
                                                data-toggle="dropdown">News <i class="fa fa-angle-down"></i></a>
                                            <ul class="dropdown-menu" role="menu">
                                                <li><a href="news-left-sidebar.html">News Left Sidebar</a></li>
                                                <li><a href="news-right-sidebar.html">News Right Sidebar</a></li>
                                                <li><a href="news-single.html">News Single</a></li>
                                            </ul>
                                        </li>

                                        <li class="nav-item"><a class="nav-link" href="contact.html">Contact</a></li>
                                    </ul>
                                </div>
                            </nav>
                        </div>
                        <!--/ Col end -->
                    </div>
                    <!--/ Row end -->

                    <div class="nav-search">
                        <span id="search"><i class="fa fa-search"></i></span>
                    </div><!-- Search end -->

                    <div class="search-block" style="display: none;">
                        <label for="search-field" class="w-100 mb-0">
                            <input type="text" class="form-control" id="search-field"
                                placeholder="Type what you want and enter">
                        </label>
                        <span class="search-close">&times;</span>
                    </div><!-- Site search end -->
                </div>
                <!--/ Container end -->

            </div>
            <!--/ Navigation end -->
        </header>
        <!--/ Header end -->

        @yield('content')
        <footer id="footer" class="footer bg-overlay">
            <div class="footer-main">
                <div class="container">
                    <div class="row justify-content-between">
                        <div class="col-lg-4 col-md-6 footer-widget footer-about">
                            <h3 class="widget-title">About Us</h3>
                            <img loading="lazy" class="footer-logo"
                                src="{{ asset('assets/images/footer-logo.png') }}" alt="Constra">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor inci done
                                idunt ut
                                labore et dolore magna aliqua.</p>
                            <div class="footer-social">
                                <ul>
                                    <li><a href="https://facebook.com/themefisher" aria-label="Facebook"><i
                                                class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="https://twitter.com/themefisher" aria-label="Twitter"><i
                                                class="fab fa-twitter"></i></a>
                                    </li>
                                    <li><a href="https://instagram.com/themefisher" aria-label="Instagram"><i
                                                class="fab fa-instagram"></i></a></li>
                                    <li><a href="https://github.com/themefisher" aria-label="Github"><i
                                                class="fab fa-github"></i></a></li>
                                </ul>
                            </div><!-- Footer social end -->
                        </div><!-- Col end -->

                        <div class="col-lg-4 col-md-6 footer-widget mt-5 mt-md-0">
                            <h3 class="widget-title">Working Hours</h3>
                            <div class="working-hours">
                                We work 7 days a week, every day excluding major holidays. Contact us if you have an
                                emergency, with our
                                Hotline and Contact form.
                                <br><br> Monday - Friday: <span class="text-right">10:00 - 16:00 </span>
                                <br> Saturday: <span class="text-right">12:00 - 15:00</span>
                                <br> Sunday and holidays: <span class="text-right">09:00 - 12:00</span>
                            </div>
                        </div><!-- Col end -->

                        <div class="col-lg-3 col-md-6 mt-5 mt-lg-0 footer-widget">
                            <h3 class="widget-title">Services</h3>
                            <ul class="list-arrow">
                                <li><a href="service-single.html">Pre-Construction</a></li>
                                <li><a href="service-single.html">General Contracting</a></li>
                                <li><a href="service-single.html">Construction Management</a></li>
                                <li><a href="service-single.html">Design and Build</a></li>
                                <li><a href="service-single.html">Self-Perform Construction</a></li>
                            </ul>
                        </div><!-- Col end -->
                    </div><!-- Row end -->
                </div><!-- Container end -->
            </div><!-- Footer main end -->
        </footer><!-- Footer end -->


        <!-- Javascript Files
  ================================================== -->

        <!-- initialize jQuery Library -->
        <script src="{{ asset('assets/plugins/jQuery/jquery.min.js') }}"></script>
        <!-- Bootstrap jQuery -->
        <script src="{{ asset('assets/plugins/bootstrap/bootstrap.min.js') }}" defer></script>
        <!-- Slick Carousel -->
        <script src="{{ asset('assets/plugins/slick/slick.min.js') }}"></script>
        <script src="{{ asset('assets/plugins/slick/slick-animation.min.js') }}"></script>
        <!-- Color box -->
        <script src="{{ asset('assets/plugins/colorbox/jquery.colorbox.js') }}"></script>
        <!-- shuffle -->
        <script src="{{ asset('assets/plugins/shuffle/shuffle.min.js') }}" defer></script>


        <!-- Google Map API Key-->
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCcABaamniA6OL5YvYSpB3pFMNrXwXnLwU" defer></script>
        <!-- Google Map Plugin-->
        <script src="{{ asset('assets/plugins/google-map/map.js') }}" defer></script>

        <!-- Template custom -->
        <script src="{{ asset('assets/js/script.js') }}"></script>

    </div><!-- Body inner end -->
</body>


<!-- Mirrored from themewagon.github.io/constra/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 26 Jul 2024 10:53:50 GMT -->

</html>
