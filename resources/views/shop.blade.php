@extends('layout.main')

@section('content')



<!-- Start Page Title -->
<div class="page-title-area">
    <div class="container">
        <div class="page-title-content">
            <h2>Women's</h2>
            <ul>
                <li><a href="index.html">Home</a></li>
                <li>Products</li>
            </ul>
        </div>
    </div>
</div>
<!-- End Page Title -->

<!-- Start Products Area -->
<section class="products-area pt-100 pb-70">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-4 col-md-12">
                <div class="woocommerce-widget-area">
                    <div class="woocommerce-widget filter-list-widget">
                        <h3 class="woocommerce-widget-title">Current Selection</h3>

                        <div class="selected-filters-wrap-list">
                            <ul>
                                <li><a href="#"><i class='bx bx-x'></i> 44</a></li>
                                <li><a href="#"><i class='bx bx-x'></i> XI</a></li>
                                <li><a href="#"><i class='bx bx-x'></i> Clothing</a></li>
                                <li><a href="#"><i class='bx bx-x'></i> Shoes</a></li>
                            </ul>

                            <a href="#" class="delete-selected-filters"><i class='bx bx-trash'></i> <span>Clear All</span></a>
                        </div>
                    </div>

                    <div class="woocommerce-widget collections-list-widget">
                        <h3 class="woocommerce-widget-title">Collections</h3>

                        <ul class="collections-list-row">
                            <li><a href="#">Men's</a></li>
                            <li class="active"><a href="#" class="active">Women’s</a></li>
                            <li><a href="#">Clothing</a></li>
                            <li><a href="#">Shoes</a></li>
                            <li><a href="#">Accessories</a></li>
                            <li><a href="#">Uncategorized</a></li>
                        </ul>
                    </div>

                    <div class="woocommerce-widget price-list-widget">
                        <h3 class="woocommerce-widget-title">Price</h3>

                        <div class="collection-filter-by-price">
                            <input class="js-range-of-price" type="text" data-min="0" data-max="1055" name="filter_by_price" data-step="10">
                        </div>
                    </div>

                    <div class="woocommerce-widget size-list-widget">
                        <h3 class="woocommerce-widget-title">Size</h3>

                        <ul class="size-list-row">
                            <li><a href="#">20</a></li>
                            <li><a href="#">24</a></li>
                            <li class="active"><a href="#">36</a></li>
                            <li><a href="#">30</a></li>
                            <li><a href="#">XS</a></li>
                            <li><a href="#">S</a></li>
                            <li><a href="#">M</a></li>
                            <li><a href="#">L</a></li>
                            <li><a href="#">L</a></li>
                            <li><a href="#">XL</a></li>
                        </ul>
                    </div>

                    <div class="woocommerce-widget color-list-widget">
                        <h3 class="woocommerce-widget-title">Color</h3>

                        <ul class="color-list-row">
                            <li class="active"><a href="#" title="Black" class="color-black"></a></li>
                            <li><a href="#" title="Red" class="color-red"></a></li>
                            <li><a href="#" title="Yellow" class="color-yellow"></a></li>
                            <li><a href="#" title="White" class="color-white"></a></li>
                            <li><a href="#" title="Blue" class="color-blue"></a></li>
                            <li><a href="#" title="Green" class="color-green"></a></li>
                            <li><a href="#" title="Yellow Green" class="color-yellowgreen"></a></li>
                            <li><a href="#" title="Pink" class="color-pink"></a></li>
                            <li><a href="#" title="Violet" class="color-violet"></a></li>
                            <li><a href="#" title="Blue Violet" class="color-blueviolet"></a></li>
                            <li><a href="#" title="Lime" class="color-lime"></a></li>
                            <li><a href="#" title="Plum" class="color-plum"></a></li>
                            <li><a href="#" title="Teal" class="color-teal"></a></li>
                        </ul>
                    </div>

                    <div class="woocommerce-widget brands-list-widget">
                        <h3 class="woocommerce-widget-title">Brands</h3>

                        <ul class="brands-list-row">
                            <li><a href="#">Gucci</a></li>
                            <li><a href="#">Virgil Abloh</a></li>
                            <li><a href="#">Balenciaga</a></li>
                            <li class="active"><a href="#">Moncler</a></li>
                            <li><a href="#">Fendi</a></li>
                            <li><a href="#">Versace</a></li>
                        </ul>
                    </div>

                    <div class="woocommerce-widget aside-trending-widget">
                        <div class="aside-trending-products">
                            <img src="assets/img/offer-bg.jpg" alt="image">

                            <div class="category">
                                <h3>Top Trending</h3>
                                <span>Spring/Summer 2024 Collection</span>
                            </div>
                            <a href="products-right-sidebar.html" class="link-btn"></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-8 col-md-12">
                <div class="products-filter-options">
                    <div class="row align-items-center justify-content-center">
                        <div class="col-lg-4 col-md-4">
                            <div class="d-lg-flex d-md-flex align-items-center">
                                <span class="sub-title d-lg-none"><a href="#" data-bs-toggle="modal" data-bs-target="#productsFilterModal"><i class='bx bx-filter-alt'></i> Filter</a></span>

                                <span class="sub-title d-none d-lg-block d-md-block">View:</span>

                                <div class="view-list-row d-none d-lg-block d-md-block">
                                    <div class="view-column">
                                        <a href="#" class="icon-view-one">
                                            <span></span>
                                        </a>

                                        <a href="#" class="icon-view-two active">
                                            <span></span>
                                            <span></span>
                                        </a>

                                        <a href="#" class="icon-view-three">
                                            <span></span>
                                            <span></span>
                                            <span></span>
                                        </a>

                                        <a href="#" class="view-grid-switch">
                                            <span></span>
                                            <span></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-4">
                            <p>Showing 1 – 18 of 100</p>
                        </div>

                        <div class="col-lg-4 col-md-4">
                            <div class="products-ordering-list">
                                <select>
                                    <option>Sort by Price: Low to High</option>
                                    <option>Default Sorting</option>
                                    <option>Sort by Popularity</option>
                                    <option>Sort by Average Rating</option>
                                    <option>Sort by Latest</option>
                                    <option>Sort by Price: High to Low</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="products-collections-filter" class="row">
                    @foreach($products as $product)
                    <div class="col-lg-6 col-md-6 col-sm-6 products-col-item">
                        <div class="single-products-box">
                            <div class="products-image">


                                @php
                                $images = json_decode($product->images, true); // Convert JSON to array
                                @endphp

                                @if (!empty($images) && is_array($images))
                                <a href="{{ route('show.product', $product->id) }}">
                                    <img src='{{ asset("$images[0]") }}' class="main-image" alt="Image">
                                    @if(count($images) > 1)
                                    <img src='{{ asset("$images[1]") }}' class="hover-image" alt="image">
                                    @endif
                                    @else
                                    <img src='{{ asset("$images[0]") }}' class="hover-image" alt="image">

                                </a>
                                @endif
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
                                                <a href="/compare">
                                                    <i class='bx bx-refresh'></i>
                                                    <span class="tooltip-label">Compare</span>
                                                </a>
                                            </div>
                                        </li>
                                        <!-- <li>
                                            <div class="quick-view-btn">
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#productsQuickView">
                                                    <i class='bx bx-search-alt'></i>
                                                    <span class="tooltip-label">Quick View</span>
                                                </a>
                                            </div>
                                        </li> -->
                                    </ul>
                                </div>
                            </div>

                            <div class="products-content">

                                <h3><a href="{{ route('show.product', $product->id) }}">{{$product->name}}</a></h3>
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


                <div class="pagination-area text-center">
                    @if ($products->onFirstPage())
                    <span class="prev page-numbers disabled"><i class='bx bx-chevron-left'></i></span>
                    @else
                    <a href="{{ $products->previousPageUrl() }}" class="prev page-numbers"><i class='bx bx-chevron-left'></i></a>
                    @endif

                    @foreach ($products->links()->elements[0] as $page => $url)
                    @if ($page == $products->currentPage())
                    <span class="page-numbers current" aria-current="page">{{ $page }}</span>
                    @else
                    <a href="{{ $url }}" class="page-numbers">{{ $page }}</a>
                    @endif
                    @endforeach

                    @if ($products->hasMorePages())
                    <a href="{{ $products->nextPageUrl() }}" class="next page-numbers"><i class='bx bx-chevron-right'></i></a>
                    @else
                    <span class="next page-numbers disabled"><i class='bx bx-chevron-right'></i></span>
                    @endif
                </div>

            </div>
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

<!-- ruff -->
 <!-- <div class="modal fade productsQuickView" id="productsQuickView{{$product->id}}" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                <span aria-hidden="true"><i class='bx bx-x'></i></span>
            </button>

            <div class="row align-items-center justify-content-center">
                <div class="col-lg-6 col-md-6">
                    <div class="products-image">
                        @if (!empty($images) && is_array($images))
                        <img src='{{ asset("$images[0]") }}' alt="Image">
                        @endif
                    </div>
                </div>

                <div class="col-lg-6 col-md-6">
                    <div class="products-content">
                        <h3><a href="#">{{$product->name}}</a></h3>

                        <div class="price">
                            <span class="old-price">$210.00</span>
                            <span class="new-price">{{$product->price}}</span>
                        </div>

                        <div class="products-review">
                            <div class="rating">
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                            </div>
                            <a href="#" class="rating-count">3 reviews</a>
                        </div>

                        <ul class="products-info">
                            <li><span>Vendor:</span> <a href="#">Lereve</a></li>
                            <li><span>Availability:</span> <a href="#">In stock (7 items)</a></li>
                            <li><span>Products Type:</span> <a href="#">T-Shirt</a></li>
                        </ul>

                        <div class="products-color-switch">
                            <h4>Color:</h4>

                            <ul>
                                @foreach(json_decode($product->color) as $color)
                                <li><a href="#" title="Black" class="color-{{$color}}"></a></li>
                                @endforeach
                            </ul>
                        </div>

                        <div class="products-size-wrapper">
                            <h4>Size:</h4>

                            <ul>
                                @foreach(json_decode($product->size) as $size)
                                <li><a style="text-transform: uppercase;" href="#">{{$size}}</a></li>
                                @endforeach
                            </ul>
                        </div>

                        <div class="products-add-to-cart">
                            <div class="input-counter">
                                <span class="minus-btn"><i class='bx bx-minus'></i></span>
                                <input type="text" value="1">
                                <span class="plus-btn"><i class='bx bx-plus'></i></span>
                            </div>

                            <form action="{{ route('cart.add') }}" method="POST" style="display: inline;">
                                @csrf
                                <input type="hidden" name="product_id" value="{{ $product->id }}">
                                <input type="hidden" name="product_name" value="{{ $product->name }}">
                                <input type="hidden" name="product_price" value="{{ $product->price }}">
                                <form action="{{ route('cart.add') }}" method="POST" style="display: inline;">
                                    @csrf
                                    <input type="hidden" name="product_id" value="{{ $product->id }}">
                                    <input type="hidden" name="product_name" value="{{ $product->name }}">
                                    <input type="hidden" name="product_price" value="{{ $product->price }}">
                                    <button type="submit" class="default-btn"><i class="fas fa-cart-plus"></i>Add to Cart</button>
                                </form>
                            </form>
                        </div>

                        <a href="{{ route('show.product', $product->id) }}" class="view-full-info">View Full Info</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> -->
