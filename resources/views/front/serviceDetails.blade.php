@extends('layouts.front')

@section('title', 'Equinox | Service Details')
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
                        <h1 class="page-title text-custom-white fw-600">Development Management</h1>
                        <ul class="custom-flex breadcrumb">
                            <li><a href="{{url('/')}}">Home</a></li>
                            <li><a href="services.html">Services</a></li>
                            <li>Development Management</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Subheader -->
    <!-- Start About us -->
    <section class="section-padding-bottom">
        <div class="top-about-sec">
            <div class="container">

                <div class="row">
                    <div class="col-12">
                        <div class="about-wrap-box">
                            <div class="row no-gutters">
                                <div class="col-lg-6">
                                    <div class="left-side full-height">
                                        <img src="assets/images/about-page.jpg" class="image-fit" alt="">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="right-side">
                                        <div class="section-header left-heading">
                                            <div class="section-heading">
                                                <h3 class="text-blue fw-700 title">Development Management Services<span class="text-orange">.</span></h3>
                                                <p class="desc">
                                                    We provide development management services to property owners and investors with the critical
                                                    expertise to successfully undertake real estate development throughout its life-cycle; i.e. from
                                                    inception of the project all the way to completion and operation stages.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12">
                        <h4>We help our clients to focus on three key aspects of any real estate ventures:</h4>
                        <ul>
                            <li>Business (Owners’ visions and business objectives, market supply and demand, market gaps, etc.)</li>
                            <li>Technical (master planning, scope integration, designs, cost, scheduling, project constraints, etc.)</li>
                            <li>Financial (feasibility, shareholders' returns, cash flow, debt/equity financing, etc.). </li>
                        </ul>
                    </div>

                    <div class="col-12" style="margin-top:50px;">
                        <h4>Our end-to-end services cover all the multiple stages of the development process: </h4>
                        <div id="accordion" class="custom-faqs">
                            <div class="card">
                                <div class="card-header">
                                    <a class="card-link" data-toggle="collapse" href="#collapseTwo">
                                        Inception
                                        <span>
                                            <i class="fal fa-arrow-down"></i>
                                        </span>
                                    </a>
                                </div>
                                <div id="collapseTwo" class="collapse show" data-parent="#accordion">
                                    <div class="card-body">
                                        • Undertake high-level assessment of potential sites, target market, project components, and product offerings<br />
                                        • Establish initial development strategy (BTO, BTS, BTL, LTS, LTI, LTL etc.), and tentative project timing<br />
                                        • Make rough estimates of cash inflows and outflows to check high-level project viability before proceeding any further
                                    </div>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-header">
                                    <a class="collapsed card-link" data-toggle="collapse" href="#collapseThree">
                                        Feasibility
                                        <span>
                                            <i class="fal fa-arrow-down"></i>
                                        </span>
                                    </a>
                                </div>
                                <div id="collapseThree" class="collapse" data-parent="#accordion">
                                    <div class="card-body">
                                        • Analyze market data (market and economic trends, supply, demand, and market gaps)<br />
                                        • Refine development ideas by establishing conceptual designs of facilities, and development schedule & phasing<br />
                                        • Prepare financial model including projected revenue, expenses, cash flows, project returns and sensitivity analysis<br />
                                        • At the end of this stage, the property owner/investor will be sufficiently confident to proceed with the development
                                    </div>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-header">
                                    <a class="collapsed card-link" data-toggle="collapse" href="#collapseOne">
                                        Funding
                                        <span>
                                            <i class="fal fa-arrow-down"></i>
                                        </span>
                                    </a>
                                </div>
                                <div id="collapseOne" class="collapse" data-parent="#accordion">
                                    <div class="card-body">
                                        • Assist clients in setting-up deal structures among investors and joint-venture partners<br />
                                        • Work with investors, investment companies, and financing institutions to secure project funding<br />
                                        • Justifiable information including valuation, cost, revenue and project cash flows is vital in securing the required funds
                                    </div>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-header">
                                    <a class="collapsed card-link" data-toggle="collapse" href="#collapseFour">
                                        Contracts
                                        <span>
                                            <i class="fal fa-arrow-down"></i>
                                        </span>
                                    </a>
                                </div>
                                <div id="collapseFour" class="collapse" data-parent="#accordion">
                                    <div class="card-body">
                                        • Draw-up various contracts together with legal counsels including JV agreements, consultancy agreements, construction
                                        contracts, management and lease agreements (as applicable)<br />
                                        • Recommend investor’s or property owner’s firm commitment to materialize these contracts as means to execute the
                                        development
                                    </div>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-header">
                                    <a class="collapsed card-link" data-toggle="collapse" href="#collapseFive">
                                        Design & Construction
                                        <span>
                                            <i class="fal fa-arrow-down"></i>
                                        </span>
                                    </a>
                                </div>
                                <div id="collapseFive" class="collapse" data-parent="#accordion">
                                    <div class="card-body">
                                        • Perform design management function and work with consultants to prepare design drawings and specifications<br />
                                        • Undertake plans submissions to relevant authorities for approvals and permits on behalf of project owners<br />
                                        • Oversee the project management activities including procurement of contractors, and construction works<br />
                                        • Ensure project delivery according to specified scope, cost, time, and quality in conjunction with technical consultants
                                    </div>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-header">
                                    <a class="collapsed card-link" data-toggle="collapse" href="#collapseSix">
                                        Handover & Operation
                                        <span>
                                            <i class="fal fa-arrow-down"></i>
                                        </span>
                                    </a>
                                </div>
                                <div id="collapseSix" class="collapse" data-parent="#accordion">
                                    <div class="card-body">
                                        • Manage testing and commissioning activities<br />
                                        • Ensure smooth transition of project handover to owners/operators<br />
                                        • Provide technical support to clients and operators during pre-opening stages<br />
                                        • Close-out project contracts and accounts
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- End About us -->

@endsection


