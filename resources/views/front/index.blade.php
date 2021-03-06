@extends('layouts.front')

@section('title', 'Equinox | Homepage')
@section('content')
    <!-- Start Banner -->
    <div class="main-banner-3 normal-bg" style="background-image: url('assets/images/slider2.jpg');">
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
        <div class="transform-center">
            <div class="main-slider-3">
                <div class="slide-item">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="banner-text">
                                    <h1 class="fw-600 text-custom-white heading-title" style="font-size:50px; padding-top:15%;">Sustainable Development is the pathway to the future</h1>
                                    <br />
                                    <a href="{{url('/service')}}" class="theme-btn btn-red mr-3">Our Services <i class="fal fa-plus"></i></a>
                                    <a href="{{url('/about')}}" class="theme-btn btn-border">About EQUINOX<i class="fal fa-plus"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slide-item">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="banner-text">
                                    <h1 class="fw-600 text-custom-white heading-title" style="font-size:50px; padding-top:15%;">Hotel Management is a challenge and we are unique in it.</h1>
                                    <br />
                                    <a href="{{url('/service')}}" class="theme-btn btn-red mr-3">Our Services <i class="fal fa-plus"></i></a>
                                    <a href="{{url('/about')}}" class="theme-btn btn-border">About EQUINOX<i class="fal fa-plus"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Banner -->
    <!-- Start about us -->
    <section class="section-padding aboutus-3">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="section-header left-heading">
                        <div class="section-heading">
                            <!--<h6 class="text-red mb-xl-10 sub-heading"><span>EQUINOX Group</span></h6>-->
                            <h3 class="fw-700 title">ABOUT US<span class="text-red">.</span></h3>
                            <p class="desc fw-500 sedra">
                                Established in 2008, Equinox Group is an affiliate of Equinox Hospitality Group based in San Francisco, US. Our current operation is in the Middle East region with emphasis on projects within Saudi Arabia and United Arab Emirates.
                            </p>
                        </div>
                    </div>
                    <ul class="custom about-list">
                        <li>
                            <span>
                                <i class="fal fa-eye"></i>
                            </span>
                            <div class="content">
                                <h5 class="fw-600 text-red">EQUINOX Mission & Vision</h5>
                                <p class="fw-500 sedra">
                                    Providing services through the use of the latest technologies, industry practices, and bodies of knowledge, applying years of on-the-ground experience, and taking them from the lenses of the project owners and stakeholders.
                                    <br /><br />
                                    By providing fully custom-tailored service to the needs of each project as we believe expensive and large assets are unique and there is no one solution that fits all. so, we help developers, project owners and investors to stay ahead of the curve.
                                </p>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-6">
                    <div class="right-side p-relative">
                        <img src="assets/images/homeAbout.png" class="image-fit" alt="">
                        <div class="about-counter">
                            <div>
                                <span class="count">13</span><span class="text-custom-white">+</span>
                                <p class="no-margin fs-12 text-custom-white">Years Of Experience</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End about us -->

    <!-- Start tabs Services -->
    <section class="section-padding bg-light">
        <div class="container">
            <div class="section-header">
                <div class="section-heading">
                    <h3 class="fw-700 title">Our Services<span class="text-red">.</span></h3>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="custom-tabs">
                        <ul class="custom-flex nav nav-tabs row">
                            @foreach ($services as $index=>$service)
                            <li class="nav-item col-lg-3 col-sm-3 col-6">
                                <a href="#service{{$index+1}}" class="nav-link " data-toggle="tab">
                                    <i><img src="{{asset('uploads/sevicesimg/'.$service->logo)}}" /></i>
                                    <span class="fw-500" style="font-size:15px;">{{$service->title}}</span>
                                </a>
                            </li>
                            @endforeach
                        </ul>
                        <div class="tab-content">
                            @foreach ($services as $index=>$service)
                            <div class="tab-pane fade show" id="service{{$index+1}}">
                                <div class="tab-inner">
                                    <div class="row">
                                        <div class="col-lg-5">
                                            <img src="assets/images/projectManagement.png" class="image-fit" alt="">
                                        </div>
                                        <div class="col-lg-7">
                                            <div class="right-side">
                                                <h3 class="fw-600"><a href="#">{{$service->title}}</a></h3>
                                                <p class="fw-500 sedra">
                                                    {{$service->description}}
                                                </p>
                                                <br />
                                                <a href="{{url('/service')}}" class="theme-btn btn-red">View More Details</a>
                                                <i class="flaticon-target"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End tabs Services -->

    <!-- Start Portfolio -->
    <section class="section-padding">
        <div class="container">
            <div class="section-header">
                <div class="section-heading">
                    <h3 class="fw-700 title">Our Projects<span class="text-red">.</span></h3>
                </div>
            </div>
            <div class="row">
                @if (count($projects)==0)
                    <div class="text-center">No projects</div>
                @else
                    @foreach ($projects as $index=>$project)
                        <div class="col-lg-4 col-md-6">
                            <div class="portfolio-box mb-xl-30">
                                <div class="portfolio-img animate-img">
                                    <a href="project-detail.html">
                                        <img src="{{asset('uploads/projects/'.$project->image)}}" class="image-fit" alt="">
                                    </a>
                                    <div class="portfolio-overlay">
                                        <div class="portfolio-text">
                                            <h4 class="fw-600 no-margin"><a href="#" class="text-custom-white">{{$project->name}}<span class="text-orange">.</span></a></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif
                <div class="col-lg-12 col-md-12">
                    <center>
                        <a href="{{url('/project')}}" class="theme-btn btn-red">View More Projects</a>
                    </center>
                </div>
            </div>
        </div>
    </section>
    <!-- End Portfolio -->

    <!-- Start team -->
    <section class="section-padding team-sec bg-light">
        <div class="container">
            <div class="section-header">
                <div class="section-heading">
                    <h3 class="text-blue fw-700 title">Our Leaders<span class="text-orange">.</span></h3>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="team-slider row">
                        @if (count($leaders)==0)
                            <div class="text-center">No Team</div>
                        @else
                            @foreach ($leaders as $index=>$leader)
                            <div class="slide-item col-12">
                                <div class="team-box animate-img">
                                    <img src="{{asset('uploads/leaders/'.$leader->photo)}}" class="image-fit" alt="">
                                    <div class="team-caption">
                                        <div class="content">
                                            <h5 class="fw-600 mb-1"><a href="{{url('/career')}}" class="text-custom-white">{{$leader->name}}</a></h5>
                                            <p class="text-orange fw-600 double-lines"><span>{{$leader->title}}</span></p>
                                            <p class="text-light-white">
                                                {{$leader->description}}.
                                            </p>
                                            <ul class="custom-flex team-social">
                                                <li>
                                                    <a href="{{$leader->facebook_link}}" class="text-light-white">
                                                        <i class="fab fa-facebook-f"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="{{$leader->twitter_link}}" class="text-light-white">
                                                        <i class="fab fa-twitter"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#" class="text-light-white">
                                                        <i class="fab fa-behance"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#" class="text-light-white">
                                                        <i class="fab fa-linkedin"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#" class="text-light-white">
                                                        <i class="fab fa-youtube"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End team -->

    <!-- Start Quote -->
    <div class="quote-sec style-2 p-relative">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="quote-box bg-dark-blue">
                        <div class="row align-items-end justify-content-between">
                            <div class="col-xl-5 col-lg-6">
                                <img src="assets/images/faq-man.png" class="image-fit quote-img" alt="">
                            </div>
                            <div class="col-xl-6 col-lg-6">
                                <div class="quote-text">
                                    <div class="section-header left-heading">
                                        <div class="section-heading">
                                            <h3 class="fw-700 title text-custom-white">Join Our Team<span class="text-orange">.</span></h3>
                                        </div>
                                    </div>
                                    <p class="text-custom-white">
                                        You Have the Passion & Determination ? We Definitely Have a Place For You.
                                    </p>
                                    <a href="{{url('/career')}}" class="text-custom-white contact-no">
                                        <i class="fal fa-briefcase text-orange"></i>
                                        Apply Now
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Quote -->

    <!-- Start Blog -->
    <section class="section-padding">
        <div class="container">
            <div class="section-header">
                <div class="section-heading">
                    <h3 class="text-blue fw-700 title">Our News<span class="text-orange">.</span></h3>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="blog-slider row">
                        @if (count($newes)==0)
                            <div class="text-center">No news</div>
                        @else
                            @foreach ($newes as $index=>$newe)
                                <div class="col-lg-12 slide-item">
                                    <div class="blog-style-1">
                                        <div class="post-img animate-img">
                                            <a href="news-detail.html">
                                                <img src="{{asset('uploads/newes/'.$newe->image)}}" class="image-fit" alt="">
                                            </a>
                                        </div>
                                        <div class="post-date">
                                            <span class="date">{{ $newe->created_at->format('d') }}</span>
                                            <span class="month">{{ \Carbon\Carbon::parse($newe->created_at)->locale('en')->monthName}}</span>
                                        </div>
                                        <div class="post-content">
                                            <div class="post-category">
                                            </div>
                                            <h2 class="post-title"><a href="news-detail.html">{{$newe->title}}</a></h2>
                                            <ul class="custom-flex post-meta">
                                                <li>
                                                    <a href="#">
                                                        <i class="fal fa-user text-orange"></i>
                                                        {{$newe->user['name']}}.
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <i class="fal fa-calendar-alt text-orange"></i>
                                                        {{ \Carbon\Carbon::parse($newe->created_at)->locale('en')->isoFormat('MMM Do YYYY')}}
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Blog -->

@endsection
