@extends('layouts.front')

@section('title', 'Equinox | Services')
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
                        <h1 class="page-title text-custom-white fw-600">Services</h1>
                        <ul class="custom-flex breadcrumb">
                            <li><a href="{{url('/')}}">Home</a></li>
                            <li>Services</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Subheader -->
    <!-- Start Services -->
    <section class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="choose-us-box style-2 mb-xl-30">
                        <div class="top-sec">
                            <div class="icon">
                                <img src="assets/images/devMang.png" />
                            </div>
                            <h4 class="fw-600 no-margin"><a href="#">Development Management</a></h4>
                        </div>
                        <p class="fw-500 mb-xl-10 sedra">
                            We provide development management services to property owners and investors with the critical expertise to successfully undertake real estate development throughout its life-cycle; i.e. from inception of the project all the way to completion and operation stages.
                        </p>
                        <a href="#" class="fw-600 fs-14 link">Read More <i class="fas fa-long-arrow-right text-orange"></i></a>
                        <i class="flaticon-statistics bg-icon"></i>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6">
                    <div class="choose-us-box style-2 mb-xl-30">
                        <div class="top-sec">
                            <div class="icon">
                                <img src="assets/images/hotelAsse.png" />
                            </div>
                            <h4 class="fw-600 no-margin"><a href="#">Hotel Asset Management</a></h4>
                        </div>
                        <p class="fw-500 mb-xl-10 sedra">
                            We fill the gap where ownership requires experts to undertake complete responsibility of management contracts, managing the manager, benchmarking property performance, and the capital improvement decision
                        </p>
                        <a href="#" class="fw-600 fs-14 link">Read More <i class="fas fa-long-arrow-right text-orange"></i></a>
                        <i class="flaticon-statistics bg-icon"></i>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6">
                    <div class="choose-us-box style-2 mb-xl-30">
                        <div class="top-sec">
                            <div class="icon">
                                <img src="assets/images/projMang.png" />
                            </div>
                            <h4 class="fw-600 no-margin"><a href="#">Project Management</a></h4>
                        </div>
                        <p class="fw-500 mb-xl-10 sedra">
                            We provide project management services to ensure that projects are carried out according to the development plans in terms of scope, cost, and schedule. For sizeable developments, we work with our technical affiliates in providing full project management services to manage, execute, supervise, monitor, and complete the projects.
                        </p>
                        <a href="#" class="fw-600 fs-14 link">Read More <i class="fas fa-long-arrow-right text-orange"></i></a>
                        <i class="flaticon-statistics bg-icon"></i>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6">
                    <div class="choose-us-box style-2 mb-xl-30">
                        <div class="top-sec">
                            <div class="icon">
                                <img src="assets/images/hosAdvis.png" />
                            </div>
                            <h4 class="fw-600 no-margin"><a href="#">Hospitality Advisory</a></h4>
                        </div>
                        <p class="fw-500 mb-xl-10 sedra">
                            The hotel industry has undergone fundamental structural changes over the last few decades. Hotels are now owned by a diverse range of investors, while operators much prefer to focus on management only. As industry specialist we provide services that fill the gap of knowledge and experience in full array of hotel project, development and successful operational needs.
                        </p>
                        <a href="#" class="fw-600 fs-14 link">Read More <i class="fas fa-long-arrow-right text-orange"></i></a>
                        <i class="flaticon-statistics bg-icon"></i>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Services -->

@endsection
