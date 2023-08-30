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
    <section class="page-banner-area page-project">
        <div class="overlay"></div>
        <!-- Content -->
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-9 col-md-12 col-12 text-center">
                    <div class="page-banner-content">
                        <h1 class="display-4 font-weight-bold">We grow your brand</h1>
                        <p>We'd love to talk about how we can help you achieve that.</p>
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


    <section id="work-wrap">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section-heading">
                        <h1>We are delivering 100% quality products and success Client businesses aimming to achieve
                            ultimate
                            goal.</h1>
                    </div>
                </div>
                <div class="col-lg-6">
                    <p class="lead">We have been providing excellent service since 1990, and we are committed to
                        continuing to deliver top-notch service. We strive to ensure customer satisfaction. We
                        specialize in a wide range of services.We compare hundreds of leading products and plans across
                        many categories to bring you the best value for money. </p>
                </div>
            </div>
        </div>
    </section>
    <?php
    $projects = config('projects');
    ?>

    <section id="work" class="section-bottom">
        <div class="container">
            <div class="row">
                @foreach ($projects as $project)
                    <div class="col-lg-4 col-md-6 p-3">
                        <div class="work-block">
                            <img src="{{ $project['logo'] }}" alt="work-img" class="img-fluid">
                            <div class="overlay-content-block">
                                <h4>{{ $project['name'] }}</h4>
                                <p>{{ $project['services'] }}</p>
                                <a href="{{ route('single', ['id' => $project['id']]) }}"><i class="fa fa-link"></i></a>
                            </div>
                        </div>
                    </div>
                    {{-- <div class="col-lg-4 col-md-6 p-0">
                    <div class="work-block">
                        <img src="images/mocaps/insta-pumps.jpeg" alt="work-img" class="img-fluid">
                        <div class="overlay-content-block">
                            <h4>Probiz portfolio template</h4>
                            <p>Web Development</p>
                            <a href="{{ route('single') }}"><i class="fa fa-link"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 p-0">
                    <div class="work-block">
                        <img src="images/mocaps/seed-delight.jpeg" alt="work-img" class="img-fluid">
                        <div class="overlay-content-block">
                            <h4>Probiz portfolio template</h4>
                            <p>Web Development</p>
                            <a href="{{ route('single') }}"><i class="fa fa-link"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 p-0">
                    <div class="work-block">
                        <img src="images/mocaps/south-south-biogas.jpeg" alt="work-img" class="img-fluid">
                        <div class="overlay-content-block">
                            <h4>Probiz portfolio template</h4>
                            <p>Web Development</p>
                            <a href="{{ route('single') }}"><i class="fa fa-link"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 p-0">
                    <div class="work-block">
                        <img src="images/mocaps/afrinova.jpeg" alt="work-img" class="img-fluid">
                        <div class="overlay-content-block">
                            <h4>Probiz portfolio template</h4>
                            <p>Web Development</p>
                            <a href="{{ route('single') }}"><i class="fa fa-link"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 p-0">
                    <div class="work-block">
                        <img src="images/mocaps/timo-fresh.jpeg" alt="work-img" class="img-fluid">
                        <div class="overlay-content-block">
                            <h4>Probiz portfolio template</h4>
                            <p>Web Development</p>
                            <a href="{{ route('single') }}"><i class="fa fa-link"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 p-0">
                    <div class="work-block">
                        <img src="images/work/10.jpg" alt="work-img" class="img-fluid">
                        <div class="overlay-content-block">
                            <h4>Probiz portfolio template</h4>
                            <p>Web Development</p>
                            <a href="{{ route('single') }}"><i class="fa fa-link"></i></a>
                        </div>
                    </div>
                </div> --}}
                @endforeach
            </div>
        </div>
    </section>

    @include('inc.footer')
</body>

</html>
