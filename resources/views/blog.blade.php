@extends('layout.main')
@section('content')

<!-- Start Page Title -->
<div class="page-title-area">
            <div class="container">
                <div class="page-title-content">
                    <h2>Blog Grid (2 in Row)</h2>
                    <ul>
                        <li><a href="/">Home</a></li>
                        <li>Blog</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- End Page Title -->

        <!-- Start Blog Area -->
        <section class="blog-area ptb-100">
            <div class="container">
                <div class="row justify-content-center">
                    @foreach($blogs as $blog)
                    <div class="col-lg-6 col-md-6">
                        <div class="single-blog-post">
                            <div class="post-image">
                                <a href="/blog/{{$blog->id}}">
                                    <img src="{{$blog->image}}" alt="image">
                                </a>
                                <div class="date">
                                    <span>January 29, 2024</span>
                                </div>
                            </div>

                            <div class="post-content">
                                <span class="category">Ideas</span>
                                <h3><a href="/blog/{{$blog->id}}">{{$blog->title}}</a></h3>
                                <a href="/blog/{{$blog->id}}" class="details-btn">Read Story</a>
                            </div>
                        </div>
                    </div>
                    @endforeach

                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="pagination-area text-center">
                            <a href="#" class="prev page-numbers"><i class='bx bx-chevron-left'></i></a>
                            <span class="page-numbers current" aria-current="page">1</span>
                            <a href="#" class="page-numbers">2</a>
                            <a href="#" class="page-numbers">3</a>
                            <a href="#" class="page-numbers">4</a>
                            <a href="#" class="page-numbers">5</a>
                            <a href="#" class="next page-numbers"><i class='bx bx-chevron-right'></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Blog Area -->

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

        <!-- Start Instagram Area -->
        <div class="instagram-area">
            <div class="container-fluid">
                <div class="instagram-title">
                    <a href="#" target="_blank"><i class='bx bxl-instagram'></i> Follow us on @xton</a>
                </div>

                <div class="instagram-slides owl-carousel owl-theme">
                    <div class="single-instagram-post">
                        <img src="assets/img/instagram/img1.jpg" alt="image">
                        <i class='bx bxl-instagram'></i>
                        <a href="https://www.instagram.com/" target="_blank" class="link-btn"></a>
                    </div>

                    <div class="single-instagram-post">
                        <img src="assets/img/instagram/img2.jpg" alt="image">
                        <i class='bx bxl-instagram'></i>
                        <a href="https://www.instagram.com/" target="_blank" class="link-btn"></a>
                    </div>

                    <div class="single-instagram-post">
                        <img src="assets/img/instagram/img3.jpg" alt="image">
                        <i class='bx bxl-instagram'></i>
                        <a href="https://www.instagram.com/" target="_blank" class="link-btn"></a>
                    </div>

                    <div class="single-instagram-post">
                        <img src="assets/img/instagram/img4.jpg" alt="image">
                        <i class='bx bxl-instagram'></i>
                        <a href="https://www.instagram.com/" target="_blank" class="link-btn"></a>
                    </div>

                    <div class="single-instagram-post">
                        <img src="assets/img/instagram/img10.jpg" alt="image">
                        <i class='bx bxl-instagram'></i>
                        <a href="https://www.instagram.com/" target="_blank" class="link-btn"></a>
                    </div>

                    <div class="single-instagram-post">
                        <img src="assets/img/instagram/img6.jpg" alt="image">
                        <i class='bx bxl-instagram'></i>
                        <a href="https://www.instagram.com/" target="_blank" class="link-btn"></a>
                    </div>

                    <div class="single-instagram-post">
                        <img src="assets/img/instagram/img7.jpg" alt="image">
                        <i class='bx bxl-instagram'></i>
                        <a href="https://www.instagram.com/" target="_blank" class="link-btn"></a>
                    </div>

                    <div class="single-instagram-post">
                        <img src="assets/img/instagram/img8.jpg" alt="image">
                        <i class='bx bxl-instagram'></i>
                        <a href="https://www.instagram.com/" target="_blank" class="link-btn"></a>
                    </div>

                    <div class="single-instagram-post">
                        <img src="assets/img/instagram/img9.jpg" alt="image">
                        <i class='bx bxl-instagram'></i>
                        <a href="https://www.instagram.com/" target="_blank" class="link-btn"></a>
                    </div>

                    <div class="single-instagram-post">
                        <img src="assets/img/instagram/img5.jpg" alt="image">
                        <i class='bx bxl-instagram'></i>
                        <a href="https://www.instagram.com/" target="_blank" class="link-btn"></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Instagram Area -->

@endsection
