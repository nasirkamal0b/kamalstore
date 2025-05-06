@extends('layout.main')

@section('content')


<!-- Start Page Title -->
<div class="page-title-area">
    <div class="container">
        <div class="page-title-content">
            <h2>Cart</h2>
            <ul>
                <li><a href="index.html">Home</a></li>
                <li>Cart</li>
            </ul>
        </div>
    </div>
</div>
<!-- End Page Title -->

<!-- Start Cart Area -->
<section class="cart-area ptb-100">
    <div class="container">
        <form>
            <div class="cart-table table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">Product</th>
                            <th scope="col">Name</th>
                            <th scope="col">Unit Price</th>
                            <th scope="col">Quantity</th>
                            <th scope="col">Total</th>
                        </tr>
                    </thead>

                    <tbody>
                        @if(session('cart'))
                        @foreach($cart as $id => $item)
                        <tr>
                            <td class="product-thumbnail">
                                @if($img = json_decode($item['image']))
                                <a href="#">
                                    <img src="{{$img[0]}}" alt="image">
                                </a>
                                @endif
                            </td>

                            <td class="product-name">
                                <a href="#">{{$item['name']}}</a>
                                <ul>
                                    <li>Color: <span></span></li>
                                    <li>Size: <span></span></li>
                                    <li>Material: <span>Cotton</span></li>
                                </ul>
                            </td>

                            <td class="product-price">
                                <span class="unit-amount">${{$item['price']}}</span>
                            </td>

                            <td class="product-quantity">
                                <div class="input-counter">
                                    <span class="minus-btn"><i class='bx bx-minus'></i></span>
                                    <input type="text" min="1" value="{{$item['quantity']}}" data-id="{{ $id }}">
                                    <span class="plus-btn"><i class='bx bx-plus'></i></span>
                                </div>
                            </td>

                            <td class="product-subtotal">
    <span class="subtotal-amount">${{ number_format($item['price'] * $item['quantity'], 2) }}</span>
    <a type="button" class="remove" data-id="{{ $id }}">
        <i class='bx bx-trash'></i>
    </a>
</td>

                        </tr>
                        @endforeach
                        @endif
                    </tbody>

                </table>
            </div>

            <div class="cart-buttons">
                <div class="row align-items-center justify-content-center">
                    <div class="col-lg-7 col-sm-7 col-md-7">
                        <a href="/shop" class="optional-btn">Continue Shopping</a>
                    </div>

                    <div class="col-lg-5 col-sm-5 col-md-5 text-end">
                        <a type="button" class="default-btn update-cart-btn">Update Cart</a>
                    </div>

                </div>
            </div>

            <div class="cart-totals">
                <h3>Cart Totals</h3>

                <ul>
                    <li>Subtotal <span>$800.00</span></li>
                    <li>Shipping <span>$30.00</span></li>
                    <li>Total <span>$830.00</span></li>
                </ul>

                <a href="{{route('checkout')}}" class="default-btn">Proceed to Checkout</a>
            </div>
        </form>
    </div>
</section>
<!-- End Cart Area -->

<!-- ===================== -->
@include('js.menagePricingInCart')
<!-- ==================== -->

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
