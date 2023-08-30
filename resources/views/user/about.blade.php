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


    <!-- NAVBAR
    ================================================= -->
    @include('inc.navbar')

    <!-- HERO
    ================================================== -->
    <section class="page-banner-area page-about">
        <div class="overlay"></div>
        <!-- Content -->
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-9 col-md-12 col-12 text-center">
                    <div class="page-banner-content">
                        <h1 class="display-4 font-weight-bold">Creativity Agency</h1>
                        <p>We'd love to talk about how we can help you.</p>
                    </div>
                </div>
            </div> <!-- / .row -->
        </div> <!-- / .container -->
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


    <section class="section" id="projects-wrap">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section-heading">
                        <h1 class="text-white">We are trying to deliver 100% quality product and success their business
                            to achieve ultimate goal.</h1>
                    </div>
                </div>
                <div class="col-lg-6">
                    <p class="lead text-white">We are providing best service since 1990 to present , committed to best
                        service delivery.Nullam metus enim, placerat in lacus vel, porttitor egestas libero. Etiam ex
                        risus, feugiat eget accumsan eu, sagittis eu urna. In eget ultrices metus. Nunc accumsan </p>
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
                            Our duty towards you is to share The experience we're reaching in our work path with you.
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
