@extends('layouts.front')

@section('title', 'Equinox | Contact Us')
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
                        <h1 class="page-title text-custom-white fw-600">Contact Us</h1>
                        <ul class="custom-flex breadcrumb">
                            <li><a href="{{url('/')}}">Home</a></li>
                            <li>Contact Us</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Subheader -->

    <!-- Start contact form -->
    <div class="section-padding-top">
        <div class="container">
            <h5>Please let us know if you have a question, want to leave a comment, or would like further information about Consulting.</h5>
            <div class="col-12">
                <div class="contact-form">
                    <form action="#" method="POST">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group group-form">
                                    <input type="text" name="#" class="form-control form-control-custom" placeholder="Full Name"/>
                                    <span class="icon">
                                        <i class="fal fa-user"></i>
                                    </span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group group-form">
                                    <input type="text" name="#" class="form-control form-control-custom" placeholder="Email Address"/>
                                    <span class="icon">
                                        <i class="fal fa-envelope"></i>
                                    </span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group group-form">
                                    <input type="text" name="#" class="form-control form-control-custom" placeholder="Phone Number"/>
                                    <span class="icon">
                                        <i class="fal fa-phone-alt"></i>
                                    </span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group group-form">
                                    <select class="form-control form-control-custom">
                                        <option>Select Subject</option>
                                        <option>option 1</option>
                                        <option>option 2</option>
                                        <option>option 3</option>
                                        <option>option 4</option>
                                    </select>
                                    <span class="icon">
                                        <i class="fal fa-book"></i>
                                    </span>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group group-form">
                                    <textarea name="#" class="form-control form-control-custom"></textarea>
                                    <span class="icon">
                                        <i class="fal fa-pencil-alt"></i>
                                    </span>
                                </div>
                            </div>
                            <div class="col-12 text-center">
                                <button type="submit" class="theme-btn btn-orange">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- End contact form -->
    <!-- Start Map -->
    <div class="contact-map">
        <iframe title="contact map" class="image-fit" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3019.754790234679!2d39.184829!3d21.559572!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x6f40061cd2f8dd66!2sEquinox%20Hospitality%20Middle%20East!5e1!3m2!1sen!2sus!4v1614793973988!5m2!1sen!2sus"></iframe>
    </div>
    <!-- Start Map -->
    <!-- Start contact detail -->
    <section class="section-padding">
        <div class="container">
            <div class="section-header">
                <div class="section-heading">
                    <h3 class="text-blue fw-700 title">Catch us here also<span class="text-orange">.</span></h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="contact-info-box mb-md-30">
                        <div class="icon text-orange">
                            <i class="fal fa-map"></i>
                        </div>
                        <h3 class="fw-600">Office Address</h3>
                        <a href="#" class="fw-500 fs-16">4th floor, SERAFI Mall Office Complex, P.O. Box 126655 – Jeddah 21352, KSA.</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="contact-info-box mb-md-30">
                        <div class="icon text-orange">
                            <i class="fal fa-phone"></i>
                        </div>
                        <h3 class="fw-600">Phone Number</h3>
                        <a href="tel:+966126600254" class="fw-500 fs-16">+966 (0) 12 660 02 54</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="contact-info-box">
                        <div class="icon text-orange">
                            <i class="fal fa-globe"></i>
                        </div>
                        <h3 class="fw-600">Web Connect</h3>
                        <a href="mailto:info@equinoxhotels-me.com" class="fw-500 fs-16">info@equinoxhotels-me.com</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End contact detail -->

@endsection
