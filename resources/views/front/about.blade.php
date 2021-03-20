@extends('layouts.front')

@section('title', 'Equinox |  About Us')
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
                        <h1 class="page-title text-custom-white fw-600">About Us</h1>
                        <ul class="custom-flex breadcrumb">
                            <li><a href="{{url('/')}}">Home</a></li>
                            <li>About Us</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Subheader -->
    <!-- Start About us -->
    <section class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <div style="text-align:left;">
                        <img src="assets/images/logoBig.png" style="padding-bottom:20px; text-align:left;" />
                    </div>
                    <p style="font-size:17px;" class="sedra">
                        Established in 2008, Equinox Group is an affiliate of Equinox Hospitality Group based in
                        San Francisco, US. Our current operation is in the Middle East region with emphasis on projects within Saudi Arabia and United Arab Emirates.
                        <br /><br />
                        In 2015, SEERA Group Holdings (formerly known as Al-Tayyar Travel Group) identified a strategic need for the Group’s expansion into hospitality sector and acquired shareholding with the formation of Equinox Hospitality Middle East. Equinox is now a fully integrated affiliate entity of SEERA Group.
                        <br /><br />
                        Equinox manages and delivers property development projects end-to-end; from inception, feasibility, funding, contracts, design, construction to the operation stages.
                    </p>
                </div>
                <div class="col-6">
                    <div id="accordion" class="custom-faqs">
                        <div class="card">
                            <div class="card-header">
                                <a class="card-link" data-toggle="collapse" href="#collapseTwo">
                                    EQUINOX Mission
                                    <span>
                                        <i class="fal fa-arrow-down"></i>
                                    </span>
                                </a>
                            </div>
                            <div id="collapseTwo" class="collapse show" data-parent="#accordion">
                                <div class="card-body sedra">
                                    Providing services through the use of the latest technologies, industry practices, and bodies of knowledge, applying years of on-the-ground experience, and taking them from the lenses of the project owners and stakeholders.
                                    <br /><br />
                                    By providing fully custom-tailored service to the needs of each project as we believe expensive and large assets are unique and there is no one solution that fits all. so, we help developers, project owners and investors to stay ahead of the curve.
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <a class="collapsed card-link" data-toggle="collapse" href="#collapseOne">
                                    EQUINOX Philosophy
                                    <span>
                                        <i class="fal fa-arrow-down"></i>
                                    </span>
                                </a>
                            </div>
                            <div id="collapseOne" class="collapse" data-parent="#accordion">
                                <div class="card-body">
                                    <ul>
                                        <li>Timing is everything in life</li>
                                        <li>Make business decisions based on logic not emotion</li>
                                        <li>Do not be afraid to take calculated risks</li>
                                        <li>Be decisive, direct, and honest in your dealings with people</li>
                                        <li>Always keep things documented so there are no misunderstandings</li>
                                        <li>Good accounting sustains good partnerships</li>
                                        <li>Get involved in the community and truly be a part of it</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End About us -->


    <!-- Start Services -->
    <section class="section-padding bg-light">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="section-header">
                        <div class="section-heading">
                            <h3 class="text-blue title" style="font-family:'Playfair Display';">Management Principles<span class="text-orange">.</span></h3>
                            <p class="sedra">
                                Equinox Hospitality & Equinox Hotels is a service-driven, people-sensitive company. Effective management and excellent relationships with the business community is essential to our successful operation and profitable growth.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-6">
                    <div class="service-style-2">
                        <div class="service-icon text-orange">
                            <i class="flaticon-target"></i>
                        </div>
                        <div class="service-content">
                            <h4 class="fw-600"><a>Employees</a></h4>
                            <p class="fw-500 sedra">
                                Successful corporations are built around people who function as a loyal team. Our employees share in the common vision of our company’s Mission. They participate in the planning and implementation of the company’s action plan. Open and honest two-way communication, delegation and empowerment coupled with high but realistic performance standards generate maximum productivity.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="service-style-2">
                        <div class="service-icon text-orange">
                            <i class="flaticon-target"></i>
                        </div>
                        <div class="service-content">
                            <h4 class="fw-600"><a>Service</a></h4>
                            <p class="fw-500 sedra">
                                In order to maintain a leadership position in a competitive market, there must be a merger between the efficiency of advanced technology and the refined understanding of human needs. Service Excellence is the bridge. Service Excellence for our customers is critical to the successful management of our hotel properties. Equinox Hospitality delivers consistent quality product and associated services to our guests resulting in a leadership position in the markets we serve.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="service-style-2">
                        <div class="service-icon text-orange">
                            <i class="flaticon-target"></i>
                        </div>
                        <div class="service-content">
                            <h4 class="fw-600"><a>Customers</a></h4>
                            <p class="fw-500 sedra">
                                Our customers are the foundation of our business. Our Management System is designed to generate superior customer satisfaction at every level.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="service-style-2">
                        <div class="service-icon text-orange">
                            <i class="flaticon-target"></i>
                        </div>
                        <div class="service-content">
                            <h4 class="fw-600"><a>Profitability</a></h4>
                            <p class="fw-500 sedra">
                                Equinox is profit driven and implements strategies that provide for consistent growth and profitability.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="service-style-2">
                        <div class="service-icon text-orange">
                            <i class="flaticon-target"></i>
                        </div>
                        <div class="service-content">
                            <h4 class="fw-600"><a>Owners</a></h4>
                            <p class="fw-500 sedra">
                                Financial partners of the properties we manage are an integral part of our team. We strive to keep a professional, open, and harmonious relationship with our partners. We manage assets focused on providing a return on investment consistent with ownership’s expectations.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="service-style-2">
                        <div class="service-icon text-orange">
                            <i class="flaticon-target"></i>
                        </div>
                        <div class="service-content">
                            <h4 class="fw-600"><a>Management & Labor</a></h4>
                            <p class="fw-500 sedra">
                                Our objective is to generate a positive relationship between Management and Labor, working together in a spirit of cooperation to lower costs, increase productivity, and consistently upgrade all levels of service. We monitor labor laws and regulations to assure continuity in the interaction between Management and Employees.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="service-style-2">
                        <div class="service-icon text-orange">
                            <i class="flaticon-target"></i>
                        </div>
                        <div class="service-content">
                            <h4 class="fw-600"><a>Community</a></h4>
                            <p class="fw-500 sedra">
                                The Community is an important part of the Equinox Hotels family. We always strive to play a leadership role in the communities we work in.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Services -->


    <!-- Start Team -->
    <section class="section-padding team-sec">
        <div class="container">
            <div class="section-header">
                <div class="section-heading">
                    <h3 class="text-blue fw-700 title">Our Leaders<span class="text-orange">.</span></h3>
                </div>
            </div>
            <div class="row">
                @if (count($leaders)==0)
                    <div class="text-center">No Team</div>
                @else
                    @foreach ($leaders as $index=>$leader)
                        <div class="col-lg-3 col-md-6">
                            <div class="team-block-2 p-relative mb-xl-30">
                                <div class="team-image animate-img">
                                    <img src="{{asset('uploads/leaders/'.$leader->photo)}}" class="image-fit" alt="">
                                </div>
                                <ul class="team-social-media custom">
                                    <li>
                                        <a href="#">
                                            <i class="fal fa-plus"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{$leader->facebook_link}}">
                                            <i class="fab fa-facebook-f"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{$leader->twitter_link}}">
                                            <i class="fab fa-twitter"></i>
                                        </a>
                                    </li>
                                </ul>
                                <div class="team-caption">
                                    <h4 class="fw-600 mb-1"><a href="#">{{$leader->name}}</a></h4>
                                    <p class="no-margin fw-500 double-lines text-orange"><span>{{$leader->title}}</span></p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
    </section>
    <!-- End Team -->

@endsection
