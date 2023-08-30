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
     <section class="page-banner-area page-contact">
         <div class="overlay"></div>
         <!-- Content -->
         <div class="container">
             <div class="row justify-content-center">
                 <div class="col-lg-9 col-md-12 col-12 text-center">
                     <div class="page-banner-content">
                         <h1 class="display-4 font-weight-bold">Check Us Out</h1>
                         <p>We'd love to talk about how we can help you, but first check us Out</p>
                     </div>
                 </div>
             </div> <!-- / .row -->
         </div> <!-- / .container -->
     </section>

     {{-- Blog start --}}
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
                                 <img src="{{ $blog->imagePath }}" alt="" class="img-fluid blog-img"
                                     style="height:17rem; width:23rem;">
                             </div>
                             <div class="single-blog">
                                 <div class="blog-content">
                                     <h6> {{ $blog->created_at->diffForHumans() }}</h6>
                                     <a href="#!">
                                         <h3 class="card-title">{{ $blog->title }}</h3>
                                     </a>
                                     <p>{{ $blog->description }}</p>
                                     <a href="{{ route('singleblog', ['slug' => $blog->slug]) }}" class="read-more">Read
                                         More</a>
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
