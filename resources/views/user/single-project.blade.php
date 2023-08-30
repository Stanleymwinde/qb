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


    <?php
    $project = config('projects');
    ?>

    <!-- HERO
    ================================================== -->
    <section class="page-banner-area page-about">
        <div class="overlay"></div>
        <!-- Content -->
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-9 col-md-12 col-12 text-center">
                    <div class="page-banner-content">
                        <h1 class="display-4 font-weight-bold">{{ $projects['name'] }}</h1>
                        <p>We'd love to talk about how we can help you.</p>
                    </div>
                </div>
            </div> <!-- / .row -->
        </div> <!-- / .container -->
    </section>



    <!-- SECTIONS
    ================================================== -->

    <section class="section" id="single-project">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-lg-16">
                            <div class="project-lg-img">
                                <img src="{{ $projects['mocap'] }}" alt="img" class="img-fluid w-100">
                            </div>

                            <div class="project-details-info">
                                <div class="info-block-2">
                                    <h5>Client</h5>
                                    <p>{{ $projects['client'] }}</p>
                                </div>
                                <div class="info-block-2">
                                    <h5>Date</h5>
                                    <p>{{ $projects['date'] }}</p>
                                </div>
                                <div class="info-block-2">
                                    <h5>Category</h5>
                                    <p>{{ $projects['category'] }}</p>
                                </div>
                                <div class="info-block-2">
                                    <h5>Website</h5>
                                    <p> <a href="{{ $projects['website'] }}">{{ $projects['website'] }}</a></p>
                                </div>
                                <div class="info-block-2">
                                    <h5>Services</h5>
                                    <p>{{ $projects['services'] }}</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row justify-content-center">
                        <div class="col-lg-6">
                            <div class="project-single-info">
                                <p>Capitalize on low hanging fruit to identify a ballpark value added activity to beta
                                    test. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nostrum ipsa, vero
                                    delectus odit provident consequuntur amet laudantium tempora, distinctio, dolorem ex
                                    id nihil voluptatum velit quae explicabo porro. Aperiam, fugiat.</p>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="project-single-info">
                                <p>Override the digital divide with additional clickthroughs from DevOps. Nanotechnology
                                    immersion along the information highway will close the loop on focusing solely on
                                    the bottom line. Podcasting operational change management inside of workflows to
                                    establish a framework. Taking seamless key performance indicators offline.</p>
                            </div>
                        </div>
                    </div>

                    <div class="row justify-content-center mt50">
                        <div class="col-lg-6">
                            <div class="project-info">
                                <h3>How we did it</h3>
                                <p>Capitalize on low hanging fruit to identify a ballpark value added activity to beta
                                    test. </p>

                                <ul class="list-unstyled">
                                    <li>
                                        <h5>Research about the project</h5>
                                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Libero, eveniet.
                                        </p>
                                    </li>
                                    <li>
                                        <h5>Make a prototype</h5>
                                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Libero, eveniet.
                                        </p>
                                    </li>
                                    <li>
                                        <h5>Design & Develop The Web</h5>
                                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Libero, eveniet.
                                        </p>
                                    </li>
                                    <li>
                                        <h5>Launch The project</h5>
                                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Libero, eveniet.
                                        </p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <img src="/images/projects/2-min.jpg" alt="" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('inc.footer')

</body>

</html>
