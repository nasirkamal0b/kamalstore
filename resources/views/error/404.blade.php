@extends('layout.main')

@section('content')
<!-- Start Page Title -->
<div class="page-title-area">
            <div class="container">
                <div class="page-title-content">
                    <h2>404 Not Found</h2>
                    <ul>
                        <li><a href="index.html">Home</a></li>
                        <li>404 Not Found</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- End Page Title -->

        <!-- Start Error Area -->
		<section class="error-area ptb-100">
            <div class="container">
                <div class="error-content">
                    <img src="assets/img/error-404.png" alt="error">
                    <h3>Page Not Found</h3>
                    <p>The page you are looking for might have been removed had its name changed or is temporarily unavailable.</p>
                    <a href="/" class="default-btn">Go to Home</a>
                </div>
            </div>
        </section>
		<!-- End Error Area -->

        <!-- Start Facility Area -->
        <section class="facility-area pb-70">
            <div class="container">
                <div class="facility-slides owl-carousel owl-theme">
                    <div class="single-facility-box">
                        <div class="icon">
                            <i class='flaticon-tracking'></i>
                        </div>
                        <h3>Free Shipping Worldwide</h3>
                    </div>

                    <div class="single-facility-box">
                        <div class="icon">
                            <i class='flaticon-return'></i>
                        </div>
                        <h3>Easy Return Policy</h3>
                    </div>

                    <div class="single-facility-box">
                        <div class="icon">
                            <i class='flaticon-shuffle'></i>
                        </div>
                        <h3>7 Day Exchange Policy</h3>
                    </div>

                    <div class="single-facility-box">
                        <div class="icon">
                            <i class='flaticon-sale'></i>
                        </div>
                        <h3>Weekend Discount Coupon</h3>
                    </div>

                    <div class="single-facility-box">
                        <div class="icon">
                            <i class='flaticon-credit-card'></i>
                        </div>
                        <h3>Secure Payment Methods</h3>
                    </div>

                    <div class="single-facility-box">
                        <div class="icon">
                            <i class='flaticon-location'></i>
                        </div>
                        <h3>Track Your Package</h3>
                    </div>

                    <div class="single-facility-box">
                        <div class="icon">
                            <i class='flaticon-customer-service'></i>
                        </div>
                        <h3>24/7 Customer Support</h3>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Facility Area -->
@endsection
