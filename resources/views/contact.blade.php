@extends('layouts.master')

@section('content')



<div class="page-content">
    <!-- Start breadcume area -->
    <div class="breadcume-area">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="breadcrumb">
                        <a title="Return to Home" href="index.html" class="home"><i class="fa fa-home"></i></a>
                        <span class="navigation-pipe">&gt;</span>
                        Contact Us
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End breadcume area -->
    <!-- Start contact page area -->
    <div class="container">
        <!-- Start contact-map -->
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <h4 class="cart-title">Contact Us</h4>
                <div class="contact-map">
                    <div id="googleMap"></div>
                </div>
            </div>
        </div>
        <!-- End contact-map -->
        <!-- Start contact from atea -->
        <div class="contact-from-atea">
            <div class="form-and-info">
                <div class="row">
                    <div class="col-xs-12 col-sm-4 col-md-4">
                        <div class="contactDetails contactHead">
                            <h3>CONTACT Info</h3>
                            <p>
                                <span class="iconContact"><i class="fa fa-map-marker"></i></span>
                                8901 Binghamton Road, Glasgow <br> D04 89 GR, New York.
                            </p>
                            <p>
                                <span class="iconContact"><i class="fa fa-phone"></i></span>
                                Telephone: (801) 2345 - 6789 <br> Fax: (801) 2345 - 6789
                            </p>
                            <p>
                                <span class="iconContact"><i class="fa fa-envelope-o"></i></span>
                                Email: support@lionthemes.com <br> Website: www.lionthemes.com
                            </p>
                        </div>
                        <div class="social-area contactHead">
                            <h3>Flowe us</h3>
                            <ul class="socila-icon">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-rss"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-8 col-md-8">
                        <div class="contactfrom">
                            <h3>message</h3>
                            <form class="">
                                <div class="row">
                                    <div class="col-md-6">
                                        <input type="text" placeholder="Full name" id="InputName" class="form-control">
                                    </div>
                                    <div class="col-md-6 contactemail">
                                        <input type="email" placeholder="Email" id="InputEmail" class="form-control">
                                    </div>
                                    <div class="col-md-12">
                                        <textarea placeholder="Massage" rows="13" class="form-control"></textarea>
                                    </div>
                                </div>
                                <button class="btn btnContact" type="submit">send message</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End contact from atea -->
    </div>
</div>

@endsection