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
                        <h1 class="display-4 font-weight-bold">Request a Quote</h1>
                        <p>We'd love to talk about how we can help you.</p>
                    </div>
                </div>
            </div> <!-- / .row -->
        </div> <!-- / .container -->
    </section>


    <!-- SECTIONS
    ================================================== -->
    <section id="contact-info">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-4 col-sm-6 col-md-6">
                    <div class="contact-info-block text-center">
                        <i class="pe-7s-map-marker"></i>
                        <h4>Address</h4>
                        <p class="lead">Trio Complex, G.Floor</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 col-md-6">
                    <div class="contact-info-block text-center">
                        <i class="pe-7s-mail"></i>
                        <h4>Email</h4>
                        <p class="lead">info@qualitybrands.co.ke</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 col-md-6">
                    <div class="contact-info-block text-center">
                        <i class="pe-7s-phone"></i>
                        <h4>Phone Number</h4>
                        <p class="lead">+254 708 955 965</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section" id="contact">
        <div class="container">
            <div class="row mb-4">
                <div class="col-md-9 col-lg-9">
                    {{-- <h5>Leave a Message</h5> --}}
                    <!-- Heading -->
                    <h2 class="section-title mb-2 ">
                        <span class="font-weight-normal">Request a </span> FREE Quote
                    </h2>

                    <!-- Subheading -->
                    <p class="mb-5 ">
                        Thank you for considering our services. We would be happy to provide you with a free quote.
                        <br>
                        The field marked with asterisk <span class="text-danger">(*)</span> are mandatory when
                        requesting
                    </p>

                </div>
            </div> <!-- / .row -->

            <div class="row">
                <div class="col-lg-12">
                    <!-- form message -->
                    <div class="row">
                        <div class="col-12">
                            <div class="alert alert-success contact__msg" style="display: none" role="alert">
                                Your message was sent successfully.
                            </div>
                        </div>
                    </div>
                    <!-- end message -->
                    @if (session('success_message'))
                        <div class="alert alert-success">
                            {{ session('success_message') }}
                        </div>
                    @endif
                    <!-- Contacts Form -->
                    <form class="contact_form" method="POST"
                        action="{{ route('quote.send') }}"enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <!-- Input -->
                            <div class="col-sm-4 mb-6">
                                <div class="form-group">
                                    <label class="h6 small d-block text-uppercase">
                                        Your name
                                        <span class="text-danger">*</span>
                                    </label>

                                    <div class="input-group">
                                        <input class="form-control" name="name" id="name" required=""
                                            placeholder="John Doe" type="text">
                                    </div>
                                </div>
                            </div>
                            <!-- End Input -->

                            <!-- Input -->
                            <div class="col-sm-4 mb-6">
                                <div class="form-group">
                                    <label class="h6 small d-block text-uppercase">
                                        Your email address
                                        <span class="text-danger">*</span>
                                    </label>

                                    <div class="input-group ">
                                        <input class="form-control" name="email" id="email" required=""
                                            placeholder="john@gmail.com" type="email">
                                    </div>
                                </div>
                            </div>
                            <!-- End Input -->

                            <!-- Input -->
                            <div class="col-sm-4 mb-6">
                                <div class="form-group">
                                    <label class="h6 small d-block text-uppercase">
                                        Your Phone Number
                                        <span class="text-danger">*</span>
                                    </label>

                                    <div class="input-group ">
                                        <input class="form-control" id="phone" name="phone" required=""
                                            placeholder="1-800-643-4500" type="text">
                                    </div>
                                </div>
                            </div>
                            <!-- End Input -->
                            <div class="w-100"></div>

                            <!-- Input -->
                            <div class="col-sm-4 mb-6">
                                <div class="form-group">
                                    <label class="h6 small d-block text-uppercase">
                                        Service Required
                                        <span class="text-danger">*</span>
                                    </label>
                                    <div class="input-group">
                                        <select class="form-control" id="service-selection" name="service" required>
                                            <option value="">Select a service</option>
                                            <option value="web-design-and-development">Web Design & Development</option>
                                            <option value="payment-integration">Payment Integration</option>
                                            <option value="mobile-apps">Mobile Apps</option>
                                            <option value="graphic-designing">Graphic Designing</option>
                                            <option value="bulk-sms-integration">Bulk SMS Integration</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <!-- End Input -->

                            <!-- Input -->
                            <div class="col-sm-4 mb-6">
                                <div class="form-group">
                                    <label class="h6 small d-block text-uppercase">
                                        Your preferred mode of contact
                                        <span class="text-danger">*</span>
                                    </label>
                                    <div class="input-group">
                                        <select class="form-control" id="contact-mode" name="contactmode" required>
                                            <option value="both">Both</option>
                                            <option value="email">Email</option>
                                            <option value="phone">Phone</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <!-- End Input -->


                            <!-- Document upload -->
                            <div class="col-sm-4 mb-6">
                                <div class="form-group">
                                    <label class="h6 small d-block text-uppercase">
                                        Any Additional Document
                                        <span class="text-danger">*</span>
                                    </label>
                                    <div class="input-group">
                                        <input class="form-control" id="document-upload" name="file"
                                            required="" placeholder="Upload your document" type="file">
                                    </div>
                                </div>
                            </div>
                            <!-- End Document upload -->

                        </div>

                        <!-- Input -->
                        <div class="form-group mb-5">
                            <label class="h6 small d-block text-uppercase">
                                How can we help you?
                                <span class="text-danger">*</span>
                            </label>

                            <div class="input-group">
                                <textarea class="form-control" rows="4" name="message" id="message" required=""
                                    placeholder="Hi there, I would like to ..."></textarea>
                            </div>
                        </div>
                        <!-- End Input -->

                        <div class="">
                            <input name="submit" type="submit" class="btn btn-primary btn-circled"
                                value="Send Message">

                            <p class="small pt-3">We'll get back to you in ½ -1 business days.</p>
                        </div>
                    </form>
                    <!-- End Contacts Form -->
                    <span style="font-size: 14px;"><i class="fas fa-lock" style="margin-right: 5px;"></i>Your Privacy
                        is Our Priority</span>

                </div>

                {{-- <div class="col-lg-6 col-md-6">
                    <!-- START MAP -->
                    <div>
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3988.892152482478!2d36.87437207477589!3d-1.2345660355713628!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182f3fac6e6dcbf5%3A0xf7e22f48d1253a9!2sKenbras%20Quality%20Brands%20Ltd!5e0!3m2!1sen!2ske!4v1682343002769!5m2!1sen!2ske"
                            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                    <!-- END MAP -->
                </div> --}}
            </div>
        </div>
    </section>
    @include('inc.footer')
</body>

</html>
