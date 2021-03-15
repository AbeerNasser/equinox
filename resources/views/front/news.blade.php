@extends('layouts.front')

@section('title', 'Equinox | News')
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
                        <h1 class="page-title text-custom-white fw-600">News</h1>
                        <ul class="custom-flex breadcrumb">
                            <li><a href="{{url('/')}}">Home</a></li>
                            <li>News</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Subheader -->

    <!-- Start News -->
    <section class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="blog-style-1 mb-xl-30">
                        <div class="post-img animate-img">
                            <a href="news-detail.html">
                                <img src="assets/images/news.png" class="image-fit" alt="">
                            </a>
                        </div>
                        <div class="post-date">
                            <span class="date">24</span>
                            <span class="month">Jan</span>
                        </div>
                        <div class="post-content">
                            <div class="post-category">
                                <p class="double-lines text-orange fw-600 mb-1"><span><a href="#" class="text-orange">EQUINOX GROUP</a></span></p>
                            </div>
                            <h2 class="post-title"><a href="#">News Title Here</a></h2>
                            <ul class="custom-flex post-meta">
                                <li>
                                    <a href="#">
                                        <i class="fal fa-user text-orange"></i>
                                        Mahmoud Eladawi.
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fal fa-calendar-alt text-orange"></i>
                                        24th Jan 2021
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="blog-style-1 mb-xl-30">
                        <div class="post-img animate-img">
                            <a href="news-detail.html">
                                <img src="assets/images/news.png" class="image-fit" alt="">
                            </a>
                        </div>
                        <div class="post-date">
                            <span class="date">24</span>
                            <span class="month">Jan</span>
                        </div>
                        <div class="post-content">
                            <div class="post-category">
                                <p class="double-lines text-orange fw-600 mb-1"><span><a href="#" class="text-orange">EQUINOX GROUP</a></span></p>
                            </div>
                            <h2 class="post-title"><a href="#">News Title Here</a></h2>
                            <ul class="custom-flex post-meta">
                                <li>
                                    <a href="#">
                                        <i class="fal fa-user text-orange"></i>
                                        Mahmoud Eladawi.
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fal fa-calendar-alt text-orange"></i>
                                        24th Jan 2021
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="blog-style-1 mb-xl-30">
                        <div class="post-img animate-img">
                            <a href="news-detail.html">
                                <img src="assets/images/news.png" class="image-fit" alt="">
                            </a>
                        </div>
                        <div class="post-date">
                            <span class="date">24</span>
                            <span class="month">Jan</span>
                        </div>
                        <div class="post-content">
                            <div class="post-category">
                                <p class="double-lines text-orange fw-600 mb-1"><span><a href="#" class="text-orange">EQUINOX GROUP</a></span></p>
                            </div>
                            <h2 class="post-title"><a href="#">News Title Here</a></h2>
                            <ul class="custom-flex post-meta">
                                <li>
                                    <a href="#">
                                        <i class="fal fa-user text-orange"></i>
                                        Mahmoud Eladawi.
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fal fa-calendar-alt text-orange"></i>
                                        24th Jan 2021
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="blog-style-1 mb-xl-30">
                        <div class="post-img animate-img">
                            <a href="news-detail.html">
                                <img src="assets/images/news.png" class="image-fit" alt="">
                            </a>
                        </div>
                        <div class="post-date">
                            <span class="date">24</span>
                            <span class="month">Jan</span>
                        </div>
                        <div class="post-content">
                            <div class="post-category">
                                <p class="double-lines text-orange fw-600 mb-1"><span><a href="#" class="text-orange">EQUINOX GROUP</a></span></p>
                            </div>
                            <h2 class="post-title"><a href="#">News Title Here</a></h2>
                            <ul class="custom-flex post-meta">
                                <li>
                                    <a href="#">
                                        <i class="fal fa-user text-orange"></i>
                                        Mahmoud Eladawi.
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fal fa-calendar-alt text-orange"></i>
                                        24th Jan 2021
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End News -->

 @endsection
