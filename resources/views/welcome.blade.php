@extends('layout.main')

@section('content')
<!-- Start Main Banner Area -->
<div class="home-slides owl-carousel owl-theme">
    @foreach($slides as $slide)
        <div class="main-banner banner-bg1" style="background-image: url('{{ asset($slide->image) }}');">
            <div class="d-table">
                <div class="d-table-cell">
                    <div class="container">
                        <div class="main-banner-content text-left">
                            <span class="sub-title">Limited Time Offer!</span>
                            <h1>{{$slide->title}}</h1>
                            <p>Take 20% Off ‘Sale Must-Haves'</p>
                            <div class="btn-box">
                                <a href="{{$slide->button_link}}" class="default-btn">{{$slide->button_text}}</a>
                                <a href="/shop" class="optional-btn">Shop Men's</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
</div>
<!-- End Main Banner Area -->

<!-- Start Categories Banner Area -->
<section class="categories-banner-area pt-100 pb-70">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="single-categories-box">
                    <img src="assets/img/categories/img1.jpg" alt="image">

                    <div class="content text-white">
                        <span>Don’t Miss Today</span>
                        <h3>50% OFF</h3>
                        <a href="/shop" class="default-btn">Discover Now</a>
                    </div>
                    <a href="/shop" class="link-btn"></a>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="single-categories-box">
                    <img src="assets/img/categories/img2.jpg" alt="image">

                    <div class="content">
                        <span>New Collection</span>
                        <h3>Need Now</h3>
                        <a href="/shop" class="default-btn">Discover Now</a>
                    </div>
                    <a href="/shop" class="link-btn"></a>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="single-categories-box">
                    <img src="assets/img/categories/img3.jpg" alt="image">

                    <div class="content">
                        <span>Your Looks</span>
                        <h3>Must Haves</h3>
                        <a href="/shop" class="default-btn">Discover Now</a>
                    </div>
                    <a href="/shop" class="link-btn"></a>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="single-categories-box">
                    <img src="assets/img/categories/img4.jpg" alt="image">

                    <div class="content text-white">
                        <span>Take 20% OFF</span>
                        <h3>Winter Spring!</h3>
                        <a href="/shop" class="default-btn">Discover Now</a>
                    </div>
                    <a href="/shop" class="link-btn"></a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Categories Banner Area -->

<!-- Start Products Area -->
<section class="products-area pb-70">
    <div class="container">
        <div class="section-title">
            <span class="sub-title">See Our Collection</span>
            <h2>Recent Products</h2>
        </div>

        <div class="row justify-content-center">
            @foreach($recentProducts as $product)
            <div class="col-lg-4 col-md-6 col-sm-6 productCard">
                <div class="single-products-box">
                    <div class="products-image">
                        <a href="/shop">
                        @php
                        $images = json_decode($product->images); // Convert JSON to array
                        @endphp
                        @if (!empty($images) && is_array($images))
                            <img src="{{asset("$images[0]")}}" class="main-image" alt="">
                            @if(count($images) > 1)
                                    <img src='{{ asset("$images[1]") }}' class="hover-image" alt="image">
                                    @endif
                                    @else
                                    <img src='{{ asset("$images[0]") }}' class="hover-image" alt="image">
                        @endif
                        </a>

                        <div class="products-button">
                            <ul>
                                <li>
                                    <div class="wishlist-btn">
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#shoppingWishlistModal">
                                            <i class='bx bx-heart'></i>
                                            <span class="tooltip-label">Add to Wishlist</span>
                                        </a>
                                    </div>
                                </li>
                                <li>
                                    <div class="compare-btn">
                                        <a href="compare.html">
                                            <i class='bx bx-refresh'></i>
                                            <span class="tooltip-label">Compare</span>
                                        </a>
                                    </div>
                                </li>
                                <li>
                                    <div class="quick-view-btn">
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#productsQuickView">
                                            <i class='bx bx-search-alt'></i>
                                            <span class="tooltip-label">Quick View</span>
                                        </a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="products-content">
                        <h3><a href="/shop">{{$product->name}}</a></h3>
                        <div class="price">
                            <span class="old-price">$321</span>
                            <span class="new-price">${{$product->price}}</span>
                        </div>
                        <div class="star-rating">
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                        </div>
                        <a href="cart.html" class="add-to-cart">Add to Cart</a>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </div>
</section>
<!-- End Products Area -->

<!-- Start Offer Area -->
<section class="offer-area bg-image1 ptb-100 jarallax" data-jarallax='{"speed": 0.3}'>
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-lg-5 col-md-6">
                <div class="offer-content">
                    <span class="sub-title">Limited Time Offer!</span>
                    <h2>-40% OFF</h2>
                    <p>Get The Best Deals Now</p>
                    <a href="products-one-row.html" class="default-btn">Discover Now</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Offer Area -->

<!-- Start Products Area -->
<section class="products-area pt-100 pb-70">
    <div class="container">
        <div class="section-title">
            <span class="sub-title">See Our Collection</span>
            <h2>Popular Products</h2>
        </div>

        <div class="row justify-content-center">
        @foreach($popularProducts as $product)
            <div class="productCard col-lg-4 col-md-6 col-sm-6">
                <div class="single-products-box">
                    <div class="products-image">
                        <a href="/shop">
                        @php
                        $images = json_decode($product->images); // Convert JSON to array
                        @endphp
                        @if (!empty($images) && is_array($images))
                            <img src="{{asset("$images[0]")}}" class="main-image" alt="">
                            @if(count($images) > 1)
                                    <img src='{{ asset("$images[1]") }}' class="hover-image" alt="image">
                                    @endif
                                    @else
                                    <img src='{{ asset("$images[0]") }}' class="hover-image" alt="image">
                        @endif
                        </a>

                        <div class="products-button">
                            <ul>
                                <li>
                                    <div class="wishlist-btn">
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#shoppingWishlistModal">
                                            <i class='bx bx-heart'></i>
                                            <span class="tooltip-label">Add to Wishlist</span>
                                        </a>
                                    </div>
                                </li>
                                <li>
                                    <div class="compare-btn">
                                        <a href="compare.html">
                                            <i class='bx bx-refresh'></i>
                                            <span class="tooltip-label">Compare</span>
                                        </a>
                                    </div>
                                </li>
                                <li>
                                    <div class="quick-view-btn">
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#productsQuickView">
                                            <i class='bx bx-search-alt'></i>
                                            <span class="tooltip-label">Quick View</span>
                                        </a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="products-content">
                        <h3><a href="/shop">{{$product->name}}</a></h3>
                        <div class="price">
                            <span class="old-price">$321</span>
                            <span class="new-price">${{$product->price}}</span>
                        </div>
                        <div class="star-rating">
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                        </div>
                        <a href="cart.html" class="add-to-cart">Add to Cart</a>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </div>
</section>
<!-- End Products Area -->

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

<!-- Start Products Area -->
<section class="products-area pb-70">
    <div class="container">
        <div class="section-title">
            <span class="sub-title">See Our Collection</span>
            <h2>Best Selling Products</h2>
        </div>

        <div class="row justify-content-center">
        @foreach($bestSellingProducts as $product)
            <div class="productCard col-lg-4 col-md-6 col-sm-6">
                <div class="single-products-box">
                    <div class="products-image">
                        <a href="/shop">
                        @php
                        $images = json_decode($product->images); // Convert JSON to array
                        @endphp
                        @if (!empty($images) && is_array($images))
                            <img src="{{asset("$images[0]")}}" class="main-image" alt="">
                            @if(count($images) > 1)
                                    <img src='{{ asset("$images[1]") }}' class="hover-image" alt="image">
                                    @endif
                                    @else
                                    <img src='{{ asset("$images[0]") }}' class="hover-image" alt="image">
                        @endif
                        </a>

                        <div class="products-button">
                            <ul>
                                <li>
                                    <div class="wishlist-btn">
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#shoppingWishlistModal">
                                            <i class='bx bx-heart'></i>
                                            <span class="tooltip-label">Add to Wishlist</span>
                                        </a>
                                    </div>
                                </li>
                                <li>
                                    <div class="compare-btn">
                                        <a href="compare.html">
                                            <i class='bx bx-refresh'></i>
                                            <span class="tooltip-label">Compare</span>
                                        </a>
                                    </div>
                                </li>
                                <li>
                                    <div class="quick-view-btn">
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#productsQuickView">
                                            <i class='bx bx-search-alt'></i>
                                            <span class="tooltip-label">Quick View</span>
                                        </a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="products-content">
                        <h3><a href="/shop">{{$product->name}}</a></h3>
                        <div class="price">
                            <span class="old-price">$321</span>
                            <span class="new-price">${{$product->price}}</span>
                        </div>
                        <div class="star-rating">
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                        </div>
                        <a href="cart.html" class="add-to-cart">Add to Cart</a>
                    </div>
                </div>
            </div>
            @endforeach


        </div>
    </div>
</section>
<!-- End Products Area -->

<!-- Start Partner Area -->
<div class="partner-area ptb-70">
    <div class="container">
        <div class="section-title">
            <h2>Our Partners</h2>
        </div>

        <div class="partner-slides owl-carousel owl-theme">
            <div class="partner-item">
                <a href="index.html"><img src="assets/img/partner/partner1.png" alt="image"></a>
            </div>

            <div class="partner-item">
                <a href="index.html"><img src="assets/img/partner/partner2.png" alt="image"></a>
            </div>

            <div class="partner-item">
                <a href="index.html"><img src="assets/img/partner/partner3.png" alt="image"></a>
            </div>

            <div class="partner-item">
                <a href="index.html"><img src="assets/img/partner/partner4.png" alt="image"></a>
            </div>

            <div class="partner-item">
                <a href="index.html"><img src="assets/img/partner/partner5.png" alt="image"></a>
            </div>

            <div class="partner-item">
                <a href="index.html"><img src="assets/img/partner/partner6.png" alt="image"></a>
            </div>
        </div>
    </div>
</div>
<!-- End Partner Area -->

<!-- Start Blog Area -->
<section class="blog-area pt-100 pb-70">
    <div class="container">
        <div class="section-title">
            <span class="sub-title">Recent Story</span>
            <h2>From The Xton Blog</h2>
        </div>

        <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6">
                <div class="single-blog-post">
                    <div class="post-image">
                        <a href="single-blog-1.html">
                            <img src="assets/img/blog/img1.jpg" alt="image">
                        </a>
                        <div class="date">
                            <span>January 29, 2024</span>
                        </div>
                    </div>

                    <div class="post-content">
                        <span class="category">Ideas</span>
                        <h3><a href="single-blog-1.html">The #1 eCommerce blog to grow your business</a></h3>
                        <a href="single-blog-1.html" class="details-btn">Read Story</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="single-blog-post">
                    <div class="post-image">
                        <a href="single-blog-1.html">
                            <img src="assets/img/blog/img2.jpg" alt="image">
                        </a>
                        <div class="date">
                            <span>January 29, 2024</span>
                        </div>
                    </div>

                    <div class="post-content">
                        <span class="category">Advice</span>
                        <h3><a href="single-blog-1.html">Latest ecommerce trend: The rise of shoppable posts</a></h3>
                        <a href="single-blog-1.html" class="details-btn">Read Story</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="single-blog-post">
                    <div class="post-image">
                        <a href="single-blog-1.html">
                            <img src="assets/img/blog/img3.jpg" alt="image">
                        </a>
                        <div class="date">
                            <span>January 29, 2024</span>
                        </div>
                    </div>

                    <div class="post-content">
                        <span class="category">Social</span>
                        <h3><a href="single-blog-1.html">Building eCommerce wave: Social media shopping</a></h3>
                        <a href="single-blog-1.html" class="details-btn">Read Story</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Blog Area -->

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
