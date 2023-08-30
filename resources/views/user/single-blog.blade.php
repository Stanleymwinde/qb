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
                        <h1 class="display-4 font-weight-bold">Single Blog</h1>
                        <p>We'd love to talk about how we can help you.Check Us Out 😃</p>
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
                <div class="col-lg-10">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="project-lg-img">
                                <img src="{{ asset($blog->imagePath) }}" alt=""
                                    style="height:45rem; width:55rem;">
                            </div>

                            <div class="project-details-info">
                                <div class="info-block-2">
                                    <h4>Blog Title</h4>
                                    <p>{{ $blog->title }}</p>
                                </div>
                                <div class="info-block-2" style="padding-left:15rem; padding-right:12rem;">
                                    <h5>Date</h5>
                                    <p> {{ $blog->created_at->diffForHumans() }}</p>
                                </div>

                                <div class="info-block-2">
                                    <h3>Category</h3>
                                    <p>{{ $blog->category->name }}</p>
                                </div>

                                {{-- <div class="info-block-2">
                                    <h5>Website</h5>
                                    <p>www.themefisher.com</p>
                                </div>
                                <div class="info-block-2">
                                    <h5>Services</h5>
                                    <p>Web Development, UX Design</p>
                                </div> --}}
                            </div>
                        </div>
                    </div>

                    <div class="row justify-content-center">
                        <div class="col-lg-6">
                            <div class="project-single-info">
                                <p>{{ $blog->description }}</p>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="project-single-info">
                                <p>{{ $blog->body }}</p>
                            </div>
                        </div>
                    </div>

                    {{-- <div class="row justify-content-center mt50">
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
                            <img src="images/projects/2-min.jpg" alt="" class="img-fluid">
                        </div>
                    </div> --}}

                </div>
                <h2 style="padding: 5rem; margin-left:8rem;">Related Blogs</h2>

                <div class="moreblogs">
                    <div class="row">
                        @foreach ($blogsData as $blog)
                            <div class="col-lg-3 col-sm-6">
                                <div class="single-post-wrap style-black">
                                    <div class="thumb">
                                        <img src="{{ asset($blog->imagePath) }}" style="width:7rem; height:5rem;">
                                        <br>
                                        <a class="tag-base tag-blue"
                                            href="{{ route('singleblog', ['slug' => $blog->slug]) }}">
                                            {{ $blog->title }}
                                        </a>
                                    </div>
                                    <div class="details">
                                        <h6 class="title">
                                            <a href="{{ route('singleblog', ['slug' => $blog->slug]) }}"
                                                style="color:#1D2124 ;">
                                                {{ $blog->description }}
                                            </a>
                                        </h6>
                                        <div class="post-meta-single mt-3">
                                            <ul>
                                                <li style="color:#1D2124 ;">
                                                    <i class="fa fa-clock-o"></i>
                                                    {{ $blog->created_at->diffForHumans() }}
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>

    </section>

    @include('inc.footer')

</body>

</html>
