<div class="navbar-area">
    <div class="xton-responsive-nav">
        <div class="container">
            <div class="xton-responsive-menu">
                <div class="logo">
                    <a href="index.html">
                        <img src="assets/img/logo.png" class="main-logo" alt="logo">
                        <img src="assets/img/white-logo.png" class="white-logo" alt="logo">
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="xton-nav">
        <div class="container">
            <nav class="navbar navbar-expand-md navbar-light">
                <a class="navbar-brand" href="/">
                    <img src="assets/img/logo.png" class="main-logo" alt="logo">
                    <img src="assets/img/white-logo.png" class="white-logo" alt="logo">
                </a>

                <div class="collapse navbar-collapse mean-menu">
                    <ul class="navbar-nav">
                        <li class="nav-item"><a href="/" class="nav-link active">Home</a></li>

                        <li class="nav-item megamenu"><a href="/shop" class="nav-link">Shop</a></li>

                        

                        @foreach($categories as $category)
                        <li class="nav-item megamenu"><a href="/shop" class="nav-link">{{ $category->name }}<i class='bx bx-chevron-down'></i></a>
                            <ul class="dropdown-menu">
                                <li class="nav-item">
                                    <div class="container">
                                        <div class="row justify-content-center">
                                            <div class="col">
                                                <h6 class="submenu-title">{{ $category->description }}</h6>


                                                @if($category->subcategories->count())
                                                <ul class="megamenu-submenu">
                                                    @foreach($category->subcategories as $subcategory)
                                                    <li><a href="{{ route('subcategory.show', $subcategory->id) }}"> {{ $subcategory->name }}</a></li>
                                                    @endforeach
                                                </ul>
                                                @endif

                                            </div>

                                            <div class="col-md-3">
                                                <ul class="megamenu-submenu">
                                                    <li>
                                                        <div class="aside-trending-products">
                                                            <img src="assets/img/categories/img1.jpg" alt="image">

                                                            <div class="category">
                                                                <h4>Top Trending</h4>
                                                            </div>

                                                            <a href="products-right-sidebar.html" class="link-btn"></a>
                                                        </div>

                                                        <div class="aside-trending-products">
                                                            <img src="assets/img/categories/img2.jpg" alt="image">

                                                            <div class="category">
                                                                <h4>Popular Products</h4>
                                                            </div>

                                                            <a href="products-right-sidebar.html" class="link-btn"></a>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        @endforeach

                        <li class="nav-item"><a href="/blog" class="nav-link">Blog</a>

                        </li>
                    </ul>

                    <div class="others-option">
                        <div class="option-item">
                            <div class="search-btn-box">
                                <i class="search-btn bx bx-search-alt"></i>
                            </div>
                        </div>

                        <div class="option-item">
                            <div class="cart-btn">
                                <!--"to call add to cart model" ===> data-bs-toggle="modal" data-bs-target="#shoppingCartModal" -->
                                <a href="{{route('cart.view')}}" ><i class='bx bx-shopping-bag'></i><span id="cart-count">{{ count(session('cart', [])) }}</span>
                                </a>
                            </div>
                        </div>

                        <div class="option-item">
                            <div class="burger-menu" data-bs-toggle="modal" data-bs-target="#sidebarModal">
                                <span class="top-bar"></span>
                                <span class="middle-bar"></span>
                                <span class="bottom-bar"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</div>
<!-- End Navbar Area -->

<!-- Start Sticky Navbar Area -->
<div class="navbar-area header-sticky">
    <div class="xton-nav">
    <div class="container">
            <nav class="navbar navbar-expand-md navbar-light">
                <a class="navbar-brand" href="/">
                    <img src="assets/img/logo.png" class="main-logo" alt="logo">
                    <img src="assets/img/white-logo.png" class="white-logo" alt="logo">
                </a>

                <div class="collapse navbar-collapse mean-menu">
                    <ul class="navbar-nav">
                        <li class="nav-item"><a href="/" class="nav-link active">Home</a></li>

                        <li class="nav-item"><a href="/shop" class="nav-link">Shop</a>

                        </li>

                        

                        @foreach($categories as $category)
                        <li class="nav-item megamenu"><a href="/shop" class="nav-link">{{ $category->name }}<i class='bx bx-chevron-down'></i></a>
                            <ul class="dropdown-menu">
                                <li class="nav-item">
                                    <div class="container">
                                        <div class="row justify-content-center">
                                            <div class="col">
                                                <h6 class="submenu-title">{{ $category->description }}</h6>


                                                @if($category->subcategories->count())
                                                <ul class="megamenu-submenu">
                                                    @foreach($category->subcategories as $subcategory)
                                                    <li><a href="{{ route('subcategory.show', $subcategory->id) }}"> {{ $subcategory->name }}</a></li>
                                                    @endforeach
                                                </ul>
                                                @endif

                                            </div>

                                            <div class="col-md-3">
                                                <ul class="megamenu-submenu">
                                                    <li>
                                                        <div class="aside-trending-products">
                                                            <img src="assets/img/categories/img1.jpg" alt="image">

                                                            <div class="category">
                                                                <h4>Top Trending</h4>
                                                            </div>

                                                            <a href="products-right-sidebar.html" class="link-btn"></a>
                                                        </div>

                                                        <div class="aside-trending-products">
                                                            <img src="assets/img/categories/img2.jpg" alt="image">

                                                            <div class="category">
                                                                <h4>Popular Products</h4>
                                                            </div>

                                                            <a href="products-right-sidebar.html" class="link-btn"></a>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        @endforeach

                        <li class="nav-item"><a href="/blog" class="nav-link">Blog</a>

                        </li>
                    </ul>

                    <div class="others-option">
                        <div class="option-item">
                            <div class="search-btn-box">
                                <i class="search-btn bx bx-search-alt"></i>
                            </div>
                        </div>

                        <div class="option-item">
                            <div class="cart-btn">
                                <!--"to call add to cart model" ===> data-bs-toggle="modal" data-bs-target="#shoppingCartModal" -->
                                <a href="{{route('cart.view')}}" ><i class='bx bx-shopping-bag'></i><span id="cart-count">{{ count(session('cart', [])) }}</span>
                                </a>
                            </div>
                        </div>

                        <div class="option-item">
                            <div class="burger-menu" data-bs-toggle="modal" data-bs-target="#sidebarModal">
                                <span class="top-bar"></span>
                                <span class="middle-bar"></span>
                                <span class="bottom-bar"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</div>


<div class="search-overlay">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="search-overlay-layer"></div>
            <div class="search-overlay-layer"></div>
            <div class="search-overlay-layer"></div>

            <div class="search-overlay-close">
                <span class="search-overlay-close-line"></span>
                <span class="search-overlay-close-line"></span>
            </div>

            <div class="search-overlay-form">
                <form>
                    <input type="text" class="input-search" placeholder="Search here...">
                    <button type="submit"><i class='bx bx-search-alt'></i></button>
                </form>
            </div>
        </div>
    </div>
</div>
