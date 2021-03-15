@extends('layouts.front')

@section('title', 'Equinox | Careers')
@section('content')
    <!-- Start Header -->
    <header class="header header-3">
        <!-- navigation -->
        <div class="navigation">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="main-nav">
                            <div class="logo">
                                <a href="{{url('/')}}">
                                    <img src="assets/images/logo.png" class="image-fit" alt="">
                                </a>
                            </div>
                            <nav>
                                <ul class="custom-flex main-menu">
                                    <li class="menu-item">
                                        <a href="{{url('/')}}">HOME</a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="{{url('/about')}}">ABOUT</a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="{{url('/service')}}">SERVICES</a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="{{url('/project')}}">PROJECTS</a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="{{url('/news')}}">NEWS</a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="{{url('/contact')}}">CONTACT</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <div class="search-popup" id="search-popup">
                <form action="#" class="search-form">
                    <div class="input-group">
                        <input type="text" name="#" class="form-control form-control-custom" placeholder="Search">
                        <div class="input-group-prepend">
                            <button type="submit" class="theme-btn"><i class="fal fa-search"></i></button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="body-overlay" id="body-overlay"></div>
        </div>
        <!-- Mobile header -->
        <div class="mobile-header style-2">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="mobile-header-wrap">
                            <div class="logo">
                                <a href="{{url('/')}}">
                                    <img src="assets/images/logo.png" class="image-fit" alt="">
                                </a>
                            </div>
                            <div class="hamburger-btn">
                                <div class="menu-btn">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- End Header -->
    <!-- Start Subheader -->
    <div class="normal-bg subheader" style="background-image: url('assets/images/aboutCrumbs.jpg');">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="subheader-content">
                        <h1 class="page-title text-custom-white fw-600">Careers</h1>
                        <ul class="custom-flex breadcrumb">
                            <li><a href="{{url('/')}}">Home</a></li>
                            <li>Careers</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Subheader -->

    <!-- Start Team -->
    <section class="section-padding team-sec">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="team-block-2 p-relative mb-xl-30">
                        <div class="team-image animate-img">
                            <img src="assets/images/team1.png" class="image-fit" alt="">
                        </div>
                        <ul class="team-social-media custom">
                            <li>
                                <a href="#">
                                    <i class="fal fa-plus"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fab fa-twitter"></i>
                                </a>
                            </li>
                        </ul>
                        <div class="team-caption">
                            <h4 class="fw-600 mb-1"><a href="#">Shuja Zaidi</a></h4>
                            <p class="no-margin fw-500 double-lines text-orange"><span>Principal Consultant</span></p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="team-block-2 p-relative mb-xl-30">
                        <div class="team-image animate-img">
                            <img src="assets/images/team2.png" class="image-fit" alt="">
                        </div>
                        <ul class="team-social-media custom">
                            <li>
                                <a href="#">
                                    <i class="fal fa-plus"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fab fa-twitter"></i>
                                </a>
                            </li>
                        </ul>
                        <div class="team-caption">
                            <h4 class="fw-600 mb-1"><a href="#">Sahimi Saaidi</a></h4>
                            <p class="no-margin fw-500 double-lines text-orange"><span>Development Director</span></p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="team-block-2 p-relative mb-xl-30">
                        <div class="team-image animate-img">
                            <img src="assets/images/team3.png" class="image-fit" alt="">
                        </div>
                        <ul class="team-social-media custom">
                            <li>
                                <a href="#">
                                    <i class="fal fa-plus"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fab fa-twitter"></i>
                                </a>
                            </li>
                        </ul>
                        <div class="team-caption">
                            <h4 class="fw-600 mb-1"><a href="#">Abdullah Jamal</a></h4>
                            <p class="no-margin fw-500 double-lines text-orange"><span>Business Dev. Director</span></p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="team-block-2 p-relative mb-xl-30">
                        <div class="team-image animate-img">
                            <img src="assets/images/team4.png" class="image-fit" alt="">
                        </div>
                        <ul class="team-social-media custom">
                            <li>
                                <a href="#">
                                    <i class="fal fa-plus"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fab fa-twitter"></i>
                                </a>
                            </li>
                        </ul>
                        <div class="team-caption">
                            <h4 class="fw-600 mb-1"><a href="#">Abdul Waheed</a></h4>
                            <p class="no-margin fw-500 double-lines text-orange"><span>Finance Director</span></p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="team-block-2 p-relative mb-xl-30">
                        <div class="team-image animate-img">
                            <img src="assets/images/team5.png" class="image-fit" alt="">
                        </div>
                        <ul class="team-social-media custom">
                            <li>
                                <a href="#">
                                    <i class="fal fa-plus"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fab fa-twitter"></i>
                                </a>
                            </li>
                        </ul>
                        <div class="team-caption">
                            <h4 class="fw-600 mb-1"><a href="#">Mustafa Erqsous</a></h4>
                            <p class="no-margin fw-500 double-lines text-orange"><span>Head of Architectural Design</span></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Team -->

@endsection
