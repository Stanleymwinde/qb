<!DOCTYPE html>

<!--
 // WEBSITE: https://themefisher.com
 // TWITTER: https://twitter.com/themefisher
 // FACEBOOK: https://www.facebook.com/themefisher
 // GITHUB: https://github.com/themefisher/
-->

<html lang="en">

@include('inc.header')

<body id="top-header">

    <!-- LOADER TEMPLATE -->
    <div id="page-loader">
        <div class="loader-icon fa fa-spin colored-border"></div>
    </div>
    <!-- /LOADER TEMPLATE -->

    <div class="top-bar bg-dark py-2 py-md-0" id="top-bar">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6">
                    <div class="top-bar-left text-white text-md-left text-sm-center">
                        <i class="fas fa-map-marker-alt"></i>
                        <span class="ml-2">Trio Complex G.floor, Nairobi, Kenya</span>
                    </div>
                </div>

                <div class="col-lg-4 ml-lg-auto col-md-6">
                    <ul class="list-inline list-unstyled header-socials text-md-right text-sm-center">
                        <li class="list-inline-item"><a href="https://www.facebook.com/KenbrasQuality"> <i
                                    class="fab fa-facebook-f"></i></a></li>
                        <li class="list-inline-item"><a href="https://www.twitter.com/KenbrasQuality"> <i
                                    class="fab fa-twitter"></i></a></li>
                        <li class="list-inline-item"><a href="https://www.pinterest.com/KenbrasQualityBrands"> <i
                                    class="fab fa-pinterest-p"></i></a></li>
                        <li class="list-inline-item"><a href="https://ke.linkedin.com/company/kenbrasquality"> <i
                                    class="fab fa-linkedin"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="logo-bar d-none d-md-block d-lg-block bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-2">
                    <div class="logo d-none d-lg-block">
                        <!-- Brand -->
                        {{-- <a class="navbar-brand js-scroll-trigger" href="index.html">
                            <h2 class="mb-0">Rappo</h2>
                        </a> --}}
                        <img src="/images/ken-logo.jpg" alt="logo" href="{{ route('home') }}" style="width:9rem;"
                            height="45px;">
                    </div>
                </div>

                <div class="col-lg-8 justify-content-end ml-lg-auto d-flex col-12 col-md-12 justify-content-md-center">
                    <div class="top-info-block d-inline-flex">
                        <div class="icon-block">
                            <i class="ti-mobile"></i>
                        </div>
                        <div class="info-block">
                            <a href="tel:+254708955965">
                                <h5 class="font-weight-500">+254708955965</h5>
                            </a>
                            <p>Call Free</p>
                        </div>
                    </div>

                    <div class="top-info-block d-inline-flex">
                        <div class="icon-block">
                            <i class="ti-email"></i>
                        </div>
                        <div class="info-block">
                            <a href="mailto:info@qualitybrands.co.ke">
                                <h5 class="font-weight-500">info@qualitybrands.co.ke</h5>
                            </a>
                            <p>Email Us</p>
                        </div>
                    </div>
                    <div class="top-info-block d-inline-flex">
                        <div class="icon-block">
                            <i class="ti-time"></i>
                        </div>
                        <div class="info-block">
                            <h5 class="font-weight-500">Mon-Sat 8:00-5.00 </h5>
                            <p>Sunday Closed</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- NAVBAR
    ================================================= -->
    @include('inc.homenav')

    {{-- website video  --}}
    <br>
    <div class="local-video" style="max-width: 100%; overflow: hidden;">
        <video muted autoplay loop style="width: 100%;">
            <source src="{{ asset('/video/kenbras-website.mp4') }}" type="video/mp4">
        </video>
    </div>

    <!-- HERO
    ================================================== -->
    <section class="banner-area py-7">
        <!-- Content -->
        <div class="container">
            <div class="row  align-items-center">
                <div class="col-md-12 col-lg-7 text-center text-lg-left">
                    <div class="main-banner">
                        <!-- Heading -->
                        <h1 class="display-4 mb-4 font-weight-normal">
                            Industry Leading Managed Services Solutions
                        </h1>

                        <!-- Subheading -->
                        <p class="lead mb-4">
                            Kenbras Quality Brands is a full-service digital service provider based in
                            Kenya. We combine creativity, technological trends, and strategic planning to help
                            businesses flourish in this fast-paced digital era. With technological expertise and
                            analytical know-how, our team of curious, creative, and technical experts provide support to
                            help businesses in the digital transformation of their business models. We are driven by
                            passion to sustainably improve digital experiences in all business areas. We implement
                            digital projects, harness innovation, and bring efficiency to business processes and system
                            landscapes
                        </p>

                        <!-- Button -->
                        <p class="mb-0">
                            <a href="/about" class="btn btn-primary btn-circled">
                                More About Us
                            </a>
                        </p>
                    </div>
                </div>

                <div class="col-lg-5 d-none d-lg-block">
                    <div class="banner-img-block">
                        <img src="images/about.jpeg" alt="banner-img" class="img-fluid">
                    </div>
                </div>
            </div> <!-- / .row -->
        </div> <!-- / .container -->
    </section>


    <section class="section bg-grey" id="feature">
        <div class="container">
            <div class="row justy-content-center">
                <div class="col-lg-3 col-sm-6 col-md-6">
                    <div class="text-center feature-block">
                        <div class="img-icon-block mb-4">
                            <i class="ti-thumb-up"></i>
                        </div>
                        <h4 class="mb-2">The right advice</h4>
                        <p>Our team are experts in matching you with the right provider.</p>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6 col-md-6">
                    <div class="text-center feature-block">
                        <div class="img-icon-block mb-4">
                            <i class="ti-cup"></i>
                        </div>
                        <h4 class="mb-2">Recognised for excellence</h4>
                        <p>We've been awarded for our high rate of customer satisfaction.</p>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6 col-md-6">
                    <div class="text-center feature-block">
                        <div class="img-icon-block mb-4">
                            <i class="ti-wallet"></i>
                        </div>
                        <h4 class="mb-2">Compare the best</h4>
                        <p>We only compare market leaders with a reputation for service quality.</p>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6 col-md-6">
                    <div class="text-center feature-block">
                        <div class="img-icon-block mb-4">
                            <i class="ti-dashboard"></i>
                        </div>
                        <h4 class="mb-2">Premium Services</h4>
                        <p>We only compare market leaders with a reputation for service quality.</p>
                    </div>
                </div>
            </div>
        </div> <!-- / .container -->
    </section>



    <!-- SERVICE-1
    ================================================== -->
    <section class="bg-grey" id="service">
        <div class="container">
            <div class="row ">
                <div class="col-lg-4">
                    <div class="service-img">
                        <img src="/images/ind/main.jpg" alt="" class="img-fluid" style="border-radius: 7px">
                    </div>
                </div>

                <div class="col-lg-6 pl-4">
                    <div class="service-content">
                        <h1>Get a better deal and start saving money today</h1>
                        <p>We compare hundreds of leading products and plans across many categories to bring you the
                            best value for money.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="pt-5 service-wrap">
        <div class="container">
            <div class="row ">
                <div class="col-lg-8 offset-lg-4">
                    <div class="carousel slide " id="service-carousel" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="col-lg-12">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="service-block media">
                                                <div class="service-icon">
                                                    <i class="ti-reload"></i>
                                                </div>
                                                <div class="service-inner-content media-body">
                                                    <h4>Backup System</h4>
                                                    <p>Our team are experts in matching you with the right provider.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="service-block media">
                                                <div class="service-icon">
                                                    <i class="ti-cloud"></i>
                                                </div>
                                                <div class="service-inner-content media-body">
                                                    <h4>Cloud Hosting</h4>
                                                    <p>Our team are experts in matching you with the right provider.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="carousel-item">
                                <div class="col-lg-12">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="service-block media">
                                                <div class="service-icon">
                                                    <i class="ti-world"></i>
                                                </div>
                                                <div class="service-inner-content media-body">
                                                    <h4>Web hosting</h4>
                                                    <p>Our team are experts in matching you with the right provider.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="service-block media">
                                                <div class="service-icon">
                                                    <i class="ti-server"></i>
                                                </div>
                                                <div class="service-inner-content media-body">
                                                    <h4>Office Cloud</h4>
                                                    <p>Our team are experts in matching you with the right provider.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <p class="pl-3">Want to know more about this? <a href="/contact">Contact us</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section" id="process">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6 text-center">
                    <div class="section-heading">
                        <!-- Heading -->
                        <h2 class="section-title">
                            Our Working process
                        </h2>

                        <!-- Subheading -->
                        <p>
                            Collaboration is key, communication is crucial, iteration leads to progress and success.
                        </p>

                    </div>
                </div>
            </div> <!-- / .row -->

            <div class="row justify-content-center">
                <div class="col-lg-4 col-sm-6 col-md-6">
                    <div class="process-block">
                        {{-- <img src="images/process/process-1.jpg" alt="" class="img-fluid"> --}}
                        <img src="images/ind/research2.jpg" alt="" class="img-fluid"
                            style="height: 10rem; width:22rem;">
                        <h3>Project Research</h3>
                        <p>innovative methodologies to push the boundaries of what's
                            possible</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 col-md-6">
                    <div class="process-block">
                        {{-- <img src="images/process/process-2.jpg" alt="" class="img-fluid"> --}}
                        <img src="images/ind/research3.jpg" alt="" class="img-fluid"
                            style="height: 10rem; width:22rem;">
                        <h3>Project demonstration</h3>
                        <p>Showcases the results and capabilities of our innovative solutions to potential
                            stakeholders."</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 col-md-6">
                    <div class="process-block">
                        <img src="images/process/process-3.jpg" alt="" class="img-fluid"
                            style="height: 10rem; width:22rem;">

                        <h3>Development & delivery</h3>
                        <p>Successful software development requires both quality code and efficient delivery to meet
                            customer needs.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="section" id="services-2">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6 text-center">
                    <div class="section-heading">
                        <!-- Heading -->
                        <h2 class="section-title mb-2 text-white">
                            Web Services
                        </h2>

                        <!-- Subheading -->
                        <p class="mb-5 text-white">
                            We implement digital projects, harness innovation, and bring efficiency to business
                            processes and system landscapes.
                        </p>
                    </div>
                </div>
            </div> <!-- / .row -->

            <div class="row">
                <div class="col-lg-4 col-sm-6 col-md-6 mb-30">
                    <div class="web-service-block">
                        <i class="ti-light-bulb"></i>
                        <h3>Creative Design</h3>
                        <p>Not just about aesthetics, but also solving problems and enhancing the user experience in
                            innovative ways.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 col-md-6 mb-30">
                    <div class="web-service-block">
                        <i class="ti-desktop"></i>
                        <h3>Web Development</h3>
                        <p>Involves designing, building, and maintaining websites using a combination of programming
                            languages, frameworks, and tools for optimal functionality.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 col-md-6 mb-30">
                    <div class="web-service-block">
                        <i class="ti-announcement"></i>
                        <h3>Digital Marketing</h3>
                        <p>leverages various online channels and strategies to reach and engage with a targeted
                            audience, ultimately driving business growth.</p>
                    </div>
                </div>

                <div class="col-lg-4 col-sm-6 col-md-6 ">
                    <div class="web-service-block">
                        <i class="ti-layers-alt"></i>
                        <h3>Graphic Design</h3>
                        <p>combines art and technology to create visually appealing designs that communicate messages
                            effectively through various media.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 col-md-6 ">
                    <div class="web-service-block">
                        <i class="ti-mobile"></i>
                        <h3>App Development</h3>
                        <p>The creation of mobile or desktop applications using specialized programming languages,
                            tools, and frameworks for optimal functionality and user experience.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 col-md-6 ">
                    <div class="web-service-block">
                        <i class="ti-settings"></i>
                        <h3>Wordpress Installation</h3>
                        <p>The setup and configuration of the WordPress content management system (CMS) for website or
                            blog creation and management..</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- pricing --}}
    {{-- <section class="section" id="pricing">
        <!-- Content -->
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6 text-center">
                    <div class="section-heading">
                        <!-- Heading -->
                        <h2 class="section-title">
                            Affordable Price Plan
                        </h2>

                        <!-- Subheading -->
                        <p>
                            Rappo can be used to create anything from a small marketing page to a sophisticated website.
                        </p>
                    </div>
                </div>
            </div> <!-- / .row -->

            <div class="row justify-content-center">
                <div class="col-lg-4 col-sm-6 col-md-6">
                    <div class="pricing-box">
                        <h3>Stnadard</h3>
                        <div class="price-block">
                            <h2><small>$</small>13<span>monthly</span></h2>
                        </div>

                        <ul class="price-features list-unstyled">
                            <li>Unlimited Domain</li>
                            <li>Unmetered Bandwidth</li>
                            <li>Free SSL Certificate </li>
                            <li>20 Email Subscription</li>
                            <li>SSD Hosting</li>
                        </ul>

                        <a href="#!" class="btn btn-outline-dark btn-circled">Purchase Now</a>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 col-md-6">
                    <div class="pricing-box">
                        <h3>Premium</h3>
                        <div class="price-block">
                            <h2><small>$</small>23<span>monthly</span></h2>
                        </div>

                        <ul class="price-features list-unstyled">
                            <li>Unlimited Domain</li>
                            <li>Unmetered Bandwidth</li>
                            <li>Free SSL Certificate </li>
                            <li>20 Email Subscription</li>
                            <li>SSD Hosting</li>
                        </ul>

                        <a href="#!" class="btn btn-primary btn-circled">Purchase Now</a>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-8 col-md-6">
                    <div class="pricing-box ">
                        <h3>Business</h3>
                        <div class="price-block">
                            <h2><small>$</small>33<span>monthly</span></h2>
                        </div>

                        <ul class="price-features list-unstyled">
                            <li>Unlimited Domain</li>
                            <li>Unmetered Bandwidth</li>
                            <li>Free SSL Certificate </li>
                            <li>20 Email Subscription</li>
                            <li>SSD Hosting</li>
                        </ul>

                        <a href="#!" class="btn btn-outline-dark btn-circled">Purchase Now</a>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    {{-- pricing end --}}

    <section class="section" id="projects-wrap">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section-heading">
                        <h1 class="text-white">We are delivering 100% quality products and success Client businesses
                            aimming to achieve ultimate
                            goal.</h1>
                    </div>
                </div>
                <div class="col-lg-6">
                    <p class="lead text-white">We have been providing excellent service since 1990, and we are
                        committed to continuing to deliver top-notch service. We strive to ensure customer satisfaction.
                        We specialize in a wide range of services.We compare hundreds of leading products and plans
                        across many categories to bring you the best value for money.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="projects" class="section-bottom">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6 col-sm-6 mb-5">
                    <div class="single-project">
                        <img src="/images/ind/onepage.jpg" alt="" class="img-fluid">
                        <div class="project-content">
                            <h4>Project: onepage</h4>
                            <p>A one-page project plan summarizes the project's key objectives, deliverables, timelines,
                                and resources, making it easy to track progress and communicate with stakeholders.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 mb-5">
                    <div class="single-project">
                        <img src="images/projects/p-4.jpg" alt="" class="img-fluid">
                        <div class="project-content">
                            <h4>Project: business</h4>
                            <p>Planned initiative with specific goals and objectives aimed at achieving organizational
                                growth, increasing profits, and improving overall performance.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-8 ">
                    <div class="single-project">
                        <img src="images/projects/p-3.jpg" alt="" class="img-fluid">
                        <div class="project-content">
                            <h4>Project : Marketing</h4>
                            <p>Involves identifying and satisfying customer needs through the creation, promotion, and
                                distribution of products or services, ultimately driving business growth.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row py-4">
                <div class="col-lg-7 col-md-12 col-sm-12 ">
                    <div class="single-project">
                        {{-- <img src="images/bg/banner_bg.jpg" alt="" class="img-fluid"> --}}
                        <img src="images/ind/research.jpg" alt="" class="img-fluid">
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12 ">
                    <div class="project-content-block">
                        <h4>Do you know who we are?</h4>
                        <h2>More than just service your products...</h2>
                        <p>Explain to you how all this mistaken idea of denouncing pleasure and praising pain was born
                            and we will give you a complete account of the system.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section" id="section-testimonial">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-4 col-sm-12 col-md-12">
                    <div class="section-heading testimonial-heading">
                        <h1>What they say <br>about us</h1>
                        <p>Our Company has earned a reputation for delivering innovative and reliable solutions,
                            backed by exceptional customer service and positive customer feedback.</p>
                    </div>
                </div>
                <div class="col-lg-8 col-sm-12 col-md-12">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="test-inner ">
                                <div class="test-author-thumb d-flex">
                                    <img src="images/ind/man.jpeg" alt="Testimonial author" class="img-fluid">
                                    <div class="test-author-info">
                                        <h4>Sir.Daniel Irungu</h4>
                                        <h6>C.E.O Properties Guy UK</h6>
                                    </div>
                                </div>

                                "I recommend you this youngsters, They're doing high Quality work, I've had a good
                                experience with this Company".

                                <i class="fa fa-quote-right"></i>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="test-inner ">
                                <div class="test-author-thumb d-flex">
                                    <img src="images/ind/lady.jpeg" alt="Testimonial author" class="img-fluid">
                                    <div class="test-author-info">
                                        <h4>Rossioliet</h4>
                                        <h6>C.E.O KCCBL</h6>
                                    </div>
                                </div>

                                "Good Workmanship!, They did our Business Website <a href="https://kccbl.co.ke/"
                                    target="_blank">www.kccbl.co.ke </a>, I recommend them anywhere."

                                <i class="fa fa-quote-right"></i>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="test-inner ">
                                <div class="test-author-thumb d-flex">
                                    <img src="images/ind/man.jpeg" alt="Testimonial author" class="img-fluid">
                                    <div class="test-author-info">
                                        <h4>Vission Cardiology</h4>
                                        <h6>Managing Director</h6>
                                    </div>
                                </div>

                                Very good professional Expertise with quality, reliable and a package of value and
                                services. I highly recommend Kenbras Quality Brands Ltd.

                                <i class="fa fa-quote-right"></i>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="test-inner ">
                                <div class="test-author-thumb d-flex">
                                    <img src="images/ind/man.jpeg" alt="Testimonial author" class="img-fluid">
                                    <div class="test-author-info">
                                        <h4>Will Barrow</h4>
                                        <h6>Sunrise Paradise Hotel</h6>
                                    </div>
                                </div>

                                Quas ut distinctio tenetur animi nihil rem, amet dolorum totam. Ab repudiandae tempore
                                qui fugiat amet ipsa id omnis ipsam, laudantium! Dolorem.

                                <i class="fa fa-quote-right"></i>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="test-inner">
                                <div class="test-author-thumb d-flex">
                                    <img src="images/ind/man.jpeg" alt="Testimonial author" class="img-fluid">
                                    <div class="test-author-info">
                                        <h4>Will Barrow</h4>
                                        <h6>Sunrise Paradise Hotel</h6>
                                    </div>
                                </div>

                                Quas ut distinctio tenetur animi nihil rem, amet dolorum totam. Ab repudiandae tempore
                                qui fugiat amet ipsa id omnis ipsam, laudantium! Dolorem.

                                <i class="fa fa-quote-right"></i>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="test-inner">
                                <div class="test-author-thumb d-flex">
                                    <img src="images/ind/man.jpeg" alt="Testimonial author" class="img-fluid">
                                    <div class="test-author-info">
                                        <h4>Will Barrow</h4>
                                        <h6>Sunrise Paradise Hotel</h6>
                                    </div>
                                </div>

                                Quas ut distinctio tenetur animi nihil rem, amet dolorum totam. Ab repudiandae tempore
                                qui fugiat amet ipsa id omnis ipsam, laudantium! Dolorem.

                                <i class="fa fa-quote-right"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section" id="blog">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6 text-center">
                    <div class="section-heading">
                        <!-- Heading -->
                        <h2 class="section-title">
                            Read our latest news
                        </h2>

                        <!-- Subheading -->
                        <p>
                            Our duty towards you is to share our experience we're reaching in our work path with you.
                        </p>
                    </div>
                </div>
            </div> <!-- / .row -->

            <div class="row justify-content-center">
                @foreach ($blogs as $blog)
                    <div class="col-lg-4 col-md-6">
                        <div class="blog-box">
                            <div class="blog-img-box">
                                <img src="{{ asset($blog->imagePath) }}" alt="" class="img-fluid blog-img"
                                    style="height:17rem; width:23rem;">
                            </div>
                            <div class="single-blog">
                                <div class="blog-content">
                                    <h6> {{ $blog->created_at->diffForHumans() }}</h6>
                                    <a href="{{ route('singleblog', ['slug' => $blog->slug]) }}">
                                        <h3 class="card-title">{{ $blog->title }}</h3>
                                    </a>
                                    <p>{{ $blog->description }}</p>
                                    <a href="{{ route('singleblog', ['slug' => $blog->slug]) }}"
                                        class="read-more">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                {{-- <div class="col-lg-4 col-md-6">
                    <div class="blog-box">
                        <div class="blog-img-box">
                            <img src="images/blog/blog-2.jpg" alt="" class="img-fluid blog-img">
                        </div>
                        <div class="single-blog">
                            <div class="blog-content">
                                <h6> 17 October 2018</h6>
                                <a href="#!">
                                    <h3 class="card-title">Brand your site value with marketing strategies</h3>
                                </a>

                                <p>There are many variations of passages Lorem Ipsum available, but majority have ama
                                    suffered altratio. the lorem.</p>
                                <a href="#!" class="read-more">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-8">
                    <div class="blog-box">
                        <div class="blog-img-box">
                            <img src="images/blog/blog-3.jpg" alt="" class="img-fluid blog-img">
                        </div>
                        <div class="single-blog">
                            <div class="blog-content">
                                <h6> 17 October 2018</h6>
                                <a href="#!">
                                    <h3 class="card-title">Website Optimization is very essential for site speed</h3>
                                </a>
                                <p>There are many variations of passages Lorem Ipsum available, but majority have ama
                                    suffered altratio. the lorem.</p>
                                <a href="#!" class="read-more">Read More</a>
                            </div>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
    </section>

    @include('inc.footer')
</body>

</html>
