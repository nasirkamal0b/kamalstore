@extends('../layout.main')
@section('content')
<!-- Start Page Title -->
<div class="page-title-area">
            <div class="container">
                <div class="page-title-content">
                    <h2>My Account</h2>
                    <ul>
                        <li><a href="/login">Login</a></li>
                        <li>Signup</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- End Page Title -->

        <!-- Start SignUP Area -->
        <section class="signup-area ptb-100">
            <div class="container">
                <div class="signup-content">
                    <h2>Create an Account</h2>

                    <form class="signup-form" method="POST" action="{{ route('register') }}">
    @csrf

    <div class="form-group">
        <label>Full Name</label>
        <input type="text" class="form-control @error('name') is-invalid @enderror" placeholder="Full Name" id="fname" name="name" value="{{ old('name') }}">

        @error('name')
        <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <div class="form-group">
        <label>Email</label>
        <input type="email" class="form-control @error('email') is-invalid @enderror" placeholder="Enter your Email" id="email" name="email" value="{{ old('email') }}">

        @error('email')
        <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <div class="form-group">
        <label>Password</label>
        <input type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Enter your password" id="password" name="password">

        @error('password')
        <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <div class="form-group">
        <label>Confirm Password</label>
        <input type="password" class="form-control @error('password_confirmation') is-invalid @enderror" placeholder="Confirm Password" id="password_confirmation" name="password_confirmation">

        @error('password_confirmation')
        <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <button type="submit" class="default-btn">Signup</button>

    <a href="index.html" class="return-store">or Return to Store</a>
</form>

                </div>
            </div>
        </section>
        <!-- End SignUP Area -->

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
