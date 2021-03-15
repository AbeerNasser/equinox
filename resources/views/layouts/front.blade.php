<!DOCTYPE html>
<html lang="zxx">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <meta name="keywords" content="#">
        <meta name="description" content="#">
        <title> @yield('title') </title>
        <!-- Fav and touch icons -->
        <link rel="shortcut icon" href="{{asset('assets/images/favicon.png')}}">
        <!-- Plugin -->
        <link href="{{asset('assets/css/plugin.css')}}" rel="stylesheet">
        <!-- Custom Stylesheet -->
        <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">
        <!-- Custom Responsive -->
        <link href="{{asset('assets/css/responsive.css')}}" rel="stylesheet">
        <!-- place -->
    </head>
    <body>
        @yield('content')

        <!-- Start Footer -->
        <footer class="section-padding bg-dark-blue footer style-3">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6">
                        <div class="ft-logo mb-lg-80">
                            <img src="assets/images/logo-light.png" class="image-fit" alt="">
                        </div>
                        <br />
                        <p style="color:white;">
                            Equinox Group is a development management and hospitality advisory services company with primary focus on large scale mixed-use and hospitality projects.
                        </p>
                    </div>
                    <div class="col-xl-2 col-md-2 col-sm-2">
                        <div class="footer-widgets mb-sm-80">
                            <h5 class="text-custom-white fw-600">EQUINOX<span class="text-red">.</span></h5>
                            <ul class="custom">
                                <li>
                                    <a href="about.html">About Us</a>
                                </li>
                                <li>
                                    <a href="careers.html">Careers</a>
                                </li>
                                <li>
                                    <a href="contact.html">Contact</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-2 col-md-2 col-sm-2">
                        <div class="footer-widgets mb-sm-80">
                            <h5 class="text-custom-white fw-600">ABOUT US<span class="text-red">.</span></h5>
                            <ul class="custom">
                                <li>
                                    <a href="services.html">Services</a>
                                </li>
                                <li>
                                    <a href="projects.html">Projects</a>
                                </li>
                                <li>
                                    <a href="news.html">News</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-2 col-md-2 col-sm-2">
                        <div class="footer-widgets mb-xs-80">
                            <h5 class="text-custom-white fw-600">OUT LINKS<span class="text-red">.</span></h5>
                            <ul class="custom">
                                <li>
                                    <a href="#">PDF Docs</a>
                                </li>
                                <li>
                                    <a href="#">Leadership</a>
                                </li>
                                <li>
                                    <a href="#">Company Profile</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <div class="copyright">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-4 col-md-6">
                        <ul class="custom-flex ft-menu">
                            <li>
                                <a href="#" class="text-custom-white">Services</a>
                            </li>
                            <li>
                                <a href="#" class="text-custom-white">Projects</a>
                            </li>
                            <li>
                                <a href="#" class="text-custom-white">About</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <p class="text-custom-white fw-500">Copyright &copy; 2021 | EQUINOX Group</p>
                    </div>
                    <div class="col-lg-4">
                        <ul class="custom-flex ft-social">
                            <li>
                                <a href="#" class="text-custom-white">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="text-custom-white">
                                    <i class="fab fa-twitter"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="text-custom-white">
                                    <i class="fab fa-behance"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="text-custom-white">
                                    <i class="fab fa-linkedin"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="text-custom-white">
                                    <i class="fab fa-youtube"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div id="back-top" class="back-top">
            <a href="#top"><i class="fal fa-long-arrow-up"></i></a>
        </div>
        <!-- End Footer -->
        <!-- Place all Scripts Here -->
        <!-- jQuery -->
        <script src="{{asset('assets/js/jquery.min.js')}}"></script>
        <!-- Popper -->
        <script src="{{asset('assets/js/popper.min.js')}}"></script>
        <!-- Bootstrap -->
        <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
        <!-- Inview -->
        <script src="{{asset('assets/js/jquery.inview.min.js')}}"></script>
        <!-- Slick Slider -->
        <script src="{{asset('assets/js/slick.min.js')}}"></script>
        <!-- Nice Select -->
        <script src="{{asset('assets/js/jquery.nice-select.js')}}"></script>
        <!-- Range Slider -->
        <script src="{{asset('assets/js/jquery-ui.js')}}"></script>
        <!-- Morris Chart -->
        <script src="{{asset('assets/js/raphael-min.js')}}"></script>
        <script src="{{asset('assets/js/morris.min.js')}}"></script>
        <!-- Maps -->
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDnd9JwZvXty-1gHZihMoFhJtCXmHfeRQg"></script>
        <!-- Custom Js -->
        <script src="{{asset('assets/js/custom.js')}}"></script>
        <!-- /Place all Scripts Here -->
    </body>
</html>

