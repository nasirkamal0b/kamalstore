<div class="top-header">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-lg-6 col-md-12">
                <ul class="header-contact-info">
                    <li>Welcome to Xton</li>
                    <li>Call: <a href="tel:+01321654214">+01 321 654 214</a></li>
                    <li>
                        <div class="dropdown language-switcher d-inline-block">
                            <button class="dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img src="assets/img/us-flag.jpg" alt="image">
                                <span>Eng <i class='bx bx-chevron-down'></i></span>
                            </button>

                            <div class="dropdown-menu">
                                <a href="#" class="dropdown-item d-flex align-items-center">
                                    <img src="assets/img/germany-flag.jpg" class="shadow-sm" alt="flag">
                                    <span>Ger</span>
                                </a>
                                <a href="#" class="dropdown-item d-flex align-items-center">
                                    <img src="assets/img/france-flag.jpg" class="shadow-sm" alt="flag">
                                    <span>Fre</span>
                                </a>
                                <a href="#" class="dropdown-item d-flex align-items-center">
                                    <img src="assets/img/spain-flag.jpg" class="shadow-sm" alt="flag">
                                    <span>Spa</span>
                                </a>
                                <a href="#" class="dropdown-item d-flex align-items-center">
                                    <img src="assets/img/russia-flag.jpg" class="shadow-sm" alt="flag">
                                    <span>Rus</span>
                                </a>
                                <a href="#" class="dropdown-item d-flex align-items-center">
                                    <img src="assets/img/italy-flag.jpg" class="shadow-sm" alt="flag">
                                    <span>Ita</span>
                                </a>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>

            <div class="col-lg-6 col-md-12">
                <ul class="header-top-menu">
                @auth
    <li><a href="/login"><i class='bx bxs-user'></i> My Account</a></li>
    @else
    <li><a href="/login"><i class='bx bxs-user'></i> Login</a></li>
@endauth

                    <li><a href="#" data-bs-toggle="modal" data-bs-target="#shoppingWishlistModal"><i class='bx bx-heart'></i> Wishlist</a></li>
                    <li><a href="/compare"><i class='bx bx-shuffle'></i> Compare</a></li>
                    @auth
                    <a href=""><form style="display: inline;" method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button class="sala" type="submit" style="background: none; border: none; cursor: pointer; color: inherit; font: inherit;">
                            <i class='bx bx-log-in'></i> Logout </button>
                    </form></a>
                 @endauth
                </ul>

                <ul class="header-top-others-option">
                    <div class="option-item">
                        <div class="search-btn-box">
                            <i class="search-btn bx bx-search-alt"></i>
                        </div>
                    </div>

                    <div class="option-item">
                        <div class="cart-btn">
                            <a href="#" data-bs-toggle="modal" data-bs-target="#shoppingCartModal"><i class='bx bx-shopping-bag'></i><span>0</span></a>
                        </div>
                    </div>
                </ul>
            </div>
        </div>
    </div>
</div>
