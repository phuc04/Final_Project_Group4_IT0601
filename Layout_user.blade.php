<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>


    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <!--[if IE]>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicons Icon -->
    <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon" />
    <title>Linea - @yield('title')</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Mobile Specific -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!-- CSS Style -->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" media="all">
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css">
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.theme.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/jquery.mobile-menu.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/style.css') }}" media="all">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/revslider.css') }}">
    <!-- Google Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:700,600,800,400' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Poppins:400,300,500,600,700' rel='stylesheet' type='text/css'>
    <!-- Toastr style -->
    <link href="{{ asset('backend/css/plugins/toastr/toastr.min.css') }}" rel="stylesheet">
    @yield('css')
</head>

<body class="cms-index-index cms-home-page">
    <div id="page">
        <!-- Header -->
        <header>
       
            <div class="header-container">
                <div class="container">
                    <div class="row">
                        <!-- Header Language -->
                        <div class="col-xs-12 col-sm-4 col-md-6 col-lg-6 pull-left">
                            <div class="dropdown block-language-wrapper">
                                <a role="button" data-toggle="dropdown" data-target="#"
                                    class="block-language dropdown-toggle" href="#"><img
                                        src="{{ asset('frontend/images/english.png') }} " alt="English">English <span
                                        class="caret"></span> </a>
                                <ul class="dropdown-menu" role="menu">
                                    <li role="presentation">
                                        <a href="#"><img src="{{ asset('frontend/images/english.png') }} "
                                                alt="English">English</a>
                                    </li>
                                    <li role="presentation">
                                        <a href="#"><img src="{{ asset('frontend/images/francais.png') }} "
                                                alt="French">French</a>
                                    </li>
                                    <li role="presentation">
                                        <a href="#"><img src="{{ asset('frontend/images/german.png') }} "
                                                alt="German">German</a>
                                    </li>
                                </ul>
                            </div>
                            <!-- End Header Language -->
                            <!-- Header Currency -->
                            <div class="dropdown block-currency-wrapper"> <a role="button" data-toggle="dropdown"
                                    data-target="#" class="block-currency dropdown-toggle" href="#"> USD <span
                                        class="caret"></span></a>
                                <ul class="dropdown-menu" role="menu">
                                    <li role="presentation"><a href="#">$ - Dollar</a></li>
                                    <li role="presentation"><a href="#">£ - Pound</a></li>
                                    <li role="presentation"><a href="#">€ - Euro</a></li>
                                </ul>
                            </div>
                            <!-- End Header Currency -->
                            <div class="welcome-msg">Default welcome msg!</div>
                        </div>
                        <!-- Header Top Links -->
                        <div class="col-xs-12 col-sm-8 col-md-6 col-lg-6 pull-right hidden-xs">
                            <div class="toplinks">
                                <div class="links">
                                    @if (Auth::user())
                                        <div class="myaccount">
                                            <a title="My Account" href=""><span class="hidden-xs">My
                                                    Account</span></a>
                                        </div>
                                    @endif
                                    <div class="demo"><a title="Blog" href=""><span
                                                class="hidden-xs">Blog</span></a> </div>
                                    <!-- Header Company -->
                                    <div class="dropdown block-company-wrapper hidden-xs">
                                        <a role="button" data-toggle="dropdown" data-target="#"
                                            class="block-company dropdown-toggle" href="#"> Company <span
                                                class="caret"></span>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li role="presentation"><a href=""> About Us </a></li>
                                            <li role="presentation"><a href="{{ route('wishlist.create') }}"> Compare </a></li>
                                            @if (Auth::user())
                                            <li role="presentation"><a href="{{ route('wishlist.index') }}"> Wishlist </a></li>
                                            <li role="presentation"><a href="{{ route('history.index') }}"> History Order </a></li>
                                            @endif
                                        </ul>
                                    </div>
                                    <!-- End Header Company -->
                                    <div class="login">
                                        @if (!Auth::user())
                                            <a href="{{ route('login.index') }}">
                                                <span class="hidden-xs">Log In</span>
                                            </a>
                                        @else
                                            <a href="{{ route('logout.index') }}">
                                                <span class="hidden-xs">Log Out</span>
                                            </a>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <!-- End Header Top Links -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 logo-block">
                        <!-- Header Logo -->
                        <div class="logo">
                            <a title="Linea HTML Template" href="{{ route('home') }}"><img alt="Linea HTML"
                                    src="{{ asset('frontend/images/logo.png') }}"> </a>
                        </div>
                        <!-- End Header Logo -->
                    </div>
                    <div class="col-lg-7 col-md-6 col-sm-6 col-xs-3 hidden-xs category-search-form">
                        <div class="search-box">
                            <form id="search_mini_form" action="{{ route('home.create') }}" method="get">
                                <!-- Autocomplete End code -->
                                <input id="search" type="text" name="search" placeholder="Search entire store here..."
                                    value="" class="searchbox" maxlength="128">
                                <button type="submit" title="Search" class="search-btn-bg" id="submit-button"></button>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12 card_wishlist_area">
                        <div class="mm-toggle-wrap">
                            <div class="mm-toggle"><i class="fa fa-align-justify"></i><span
                                    class="mm-label">Menu</span> </div>
                        </div>
                        <div class="top-cart-contain" id="top-cart-contain">
                            <!-- Top Cart -->
                            <div class="mini-cart">
                                <div data-toggle="dropdown" data-hover="dropdown" class="basket dropdown-toggle">
                                    <a href="{{ route('cart.index') }}"><span class="price hidden-xs">Shopping
                                            Cart</span>
                                        <span class="cart_count hidden-xs" id="countCart"></span></a>
                                </div>
                                <div>
                                    <div class="top-cart-content" id="top-cart-content">
                                        <!--block-subtitle-->
                                        <ul class="mini-products-list" id="cart-sidebar">
                                        </ul>
                                        <!--actions-->
                                        <div class="actions">
                                            <button class="btn-checkout" title="Checkout" type="button">
                                                @if (Auth::user())
                                                    <a style="color: #fff;"
                                                        href="{{ route('cart-address.index') }}"><span>Checkout</span></a>
                                                @else
                                                    <a style="color: #fff;"
                                                        href="{{ route('login.index') }}"><span>Checkout</span></a>
                                                @endif
                                            </button>
                                            <a href="{{ route('cart.index') }}" class="view-cart"><span>View
                                                    Cart</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Top Cart -->

                        </div>
                        <!-- mgk wishlist -->
                    </div>
                </div>
            </div>
            <nav class="hidden-xs">
                <div class="nav-container">
                    <div class="col-md-3 col-xs-12 col-sm-4">
                        <div class="mega-container visible-lg visible-md visible-sm">
                            <div class="navleft-container">
                                <div class="mega-menu-title" id="mega-menu-title">
                                    <h3><i class="fa fa-navicon"></i> All Categories</h3>
                                </div>
                                <div class="mega-menu-category" id="mega-menu-category"
                                    style="{{ $url_canonical == route('home') || $url_canonical == route('cart-address.index') ? '' : 'display: none' }}">
                                    <ul class="nav">
                                        <li class="nosub"><a href="{{ route('home') }}"><i
                                                    class="fa fa-home"></i> Home</a>
                                        </li>
                                        <li><a href="#"><i class="fa fa-file-text"></i> Pages</a>
                                            <div class="wrap-popup">
                                                <div class="popup">
                                                    <div class="row">
                                                        <div class="col-sm-6">
                                                            <ul class="nav">
                                                                <li><a href="grid.html"><span>Grid</span></a></li>
                                                                <li>
                                                                    <a href="list.html"> <span>List</span> </a>
                                                                </li>
                                                                <li>
                                                                    <a href="product_detail.html"> <span>Product
                                                                            Detail</span> </a>
                                                                </li>
                                                                <li>
                                                                    <a href="shopping_cart.html"> <span>Shopping
                                                                            Cart</span> </a>
                                                                </li>
                                                                <li><a href="checkout.html"><span>Checkout</span></a>
                                                                </li>
                                                                <li>
                                                                    <a href="wishlist.html"> <span>Wishlist</span> </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-sm-6 has-sep">
                                                            <ul class="nav">
                                                                <li>
                                                                    <a href="dashboard.html"> <span>Dashboard</span>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="multiple_addresses.html"> <span>Multiple
                                                                            Addresses</span> </a>
                                                                </li>
                                                                <li><a href="compare.html"><span>Compare</span></a></li>
                                                                <li><a href="quick_view.html"><span>Quick
                                                                            View</span></a></li>
                                                                <li><a
                                                                        href="newsletter.html"><span>Newsletter</span></a>
                                                                </li>
                                                                <li><a href="404error.html"><span>404 Error
                                                                            Page</span></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        @foreach ($all_category as $all_cate)
                                            @php
                                                $childrencate = App\Category::where('category_sub', $all_cate->category_id)
                                                    ->where('category_status', 1)
                                                    ->orderBy('category_sorting', 'asc')
                                                    ->take(2)
                                                    ->get();
                                                $childrencate2 = App\Category::where('category_sub', $all_cate->category_id)
                                                    ->where('category_status', 1)
                                                    ->orderBy('category_sorting', 'asc')
                                                    ->skip(2)
                                                    ->take(2)
                                                    ->get();
                                            @endphp
                                            <li class="{{ count($childrencate) > 0 ? '' : 'nosub' }}">
                                                <a
                                                    href="{{ route('category-product.show', $all_cate->category_slug) }}"><i
                                                        class="{{ $all_cate->category_icon }}"></i>
                                                    {{ $all_cate->category_name }}</a>
                                                @if (count($childrencate) > 0)
                                                    <div class="wrap-popup">
                                                        <div class="popup">
                                                            <div class="row">
                                                                <div class="col-md-4 col-sm-6">
                                                                    @foreach ($childrencate as $item)
                                                                        @php
                                                                            $childcate = App\Category::where('category_sub', $item->category_id)
                                                                                ->where('category_status', 1)
                                                                                ->orderBy('category_sorting', 'asc')
                                                                                ->take(4)
                                                                                ->get();
                                                                        @endphp
                                                                        <h3>{{ $item->category_name }}</h3>
                                                                        <ul class="nav">
                                                                            @foreach ($childcate as $child)
                                                                                <li>
                                                                                    <a
                                                                                        href="{{ route('category-product.show', $child->category_slug) }}">
                                                                                        <span>{{ $child->category_name }}</span>
                                                                                    </a>
                                                                                </li>
                                                                            @endforeach
                                                                        </ul>
                                                                        <br>
                                                                    @endforeach
                                                                </div>
                                                                <div class="col-md-4 col-sm-6 has-sep">
                                                                    @foreach ($childrencate2 as $item)
                                                                        @php
                                                                            $childcate = App\Category::where('category_sub', $item->category_id)
                                                                                ->where('category_status', 1)
                                                                                ->orderBy('category_sorting', 'asc')
                                                                                ->take(4)
                                                                                ->get();
                                                                        @endphp
                                                                        <h3>{{ $item->category_name }}</h3>
                                                                        <ul class="nav">
                                                                            @foreach ($childcate as $child)
                                                                                <li>
                                                                                    <a
                                                                                        href="{{ route('category-product.show', $child->category_slug) }}">
                                                                                        <span>{{ $child->category_name }}</span>
                                                                                    </a>
                                                                                </li>
                                                                            @endforeach
                                                                        </ul>
                                                                        <br>
                                                                    @endforeach
                                                                </div>
                                                                <div class="col-md-4 has-sep hidden-sm">
                                                                    <div class="custom-menu-right">
                                                                        <div class="box-banner media">
                                                                            <div class="add-desc">
                                                                                <h3>Glass<br>
                                                                                    collection
                                                                                </h3>
                                                                                <div class="price-sale">
                                                                                    {{ now()->format('Y') }}</div>
                                                                                <a href="#">Shopping Now</a>
                                                                            </div>
                                                                            <div class="add-right"><img
                                                                                    src="{{ asset('frontend/images/menu-img2.jpg') }}"
                                                                                    alt=""></div>
                                                                        </div>
                                                                        <div class="box-banner media">
                                                                            <div class="add-desc">
                                                                                <h3>Save up to</h3>
                                                                                <div class="price-sale">70
                                                                                    <sup>%</sup><sub>off</sub>
                                                                                </div>
                                                                                <a href="#">Shopping Now</a>
                                                                            </div>
                                                                            <div class="add-right"><img
                                                                                    src="{{ asset('frontend/images/menu-img3.jpg') }}"
                                                                                    alt=""></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endif
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- features box -->
                    <div class="our-features-box hidden-xs">
                        <div class="features-block">
                            <div class="col-lg-7 col-md-9 col-xs-12 col-sm-8 offer-block">
                                <div class="feature-box first">
                                    <div class="content">
                                        <h3>Free Shipping Worldwide </h3>
                                    </div>
                                </div>
                                <span class="separator">/</span>
                                <div class="feature-box">
                                    <div class="content">
                                        <h3>Money Back Guarantee</h3>
                                    </div>
                                </div>
                                <span class="separator">/</span>
                                <div class="feature-box last">
                                    <div class="content">
                                        <h3>Hotline +(012) 365-6531</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-1 col-sm-2 hidden-sm hidden-md"><span
                                    class="offer-label">Offer Zone</span></div>
                        </div>
                    </div>
                </div>
            </nav>
        </header>
        <!-- end header -->
        @yield('content')
        <!-- Footer -->
        <footer class="footer">
            <div class="newsletter-wrap">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="newsletter">
                                <form>
                                    <div>
                                        <h4><span>newsletter</span></h4>
                                        <input type="text" placeholder="Enter your email address"
                                            class="input-text" title="Sign up for our newsletter" id="newsletter1"
                                            name="email">
                                        <button class="subscribe" title="Subscribe"
                                            type="submit"><span>Subscribe</span></button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--newsletter-->
            <div class="footer-middle">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3 col-sm-6">
                            <div class="footer-column pull-left">
                                <h4>Shopping Guide</h4>
                                <ul class="links">
                                    <li><a href="blog.html" title="How to buy">Blog</a></li>
                                    <li><a href="faq.html" title="FAQs">FAQs</a></li>
                                    <li><a href="#" title="Payment">Payment</a></li>
                                    <li><a href="#" title="Shipment">Shipment</a></li>
                                    <li><a href="#" title="Where is my order?">Where is my order?</a></li>
                                    <li><a href="#" title="Return policy">Return policy</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="footer-column pull-left">
                                <h4>Style Advisor</h4>
                                <ul class="links">
                                    <li><a href="login.html" title="Your Account">Your Account</a></li>
                                    <li><a href="#" title="Information">Information</a></li>
                                    <li><a href="#" title="Addresses">Addresses</a></li>
                                    <li><a href="#" title="Addresses">Discount</a></li>
                                    <li><a href="#" title="Orders History">Orders History</a></li>
                                    <li><a href="#" title="Order Tracking">Order Tracking</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="footer-column pull-left">
                                <h4>Information</h4>
                                <ul class="links">
                                    <li><a href="sitemap.html" title="Site Map">Site Map</a></li>
                                    <li><a href="#" title="Search Terms">Search Terms</a></li>
                                    <li><a href="#" title="Advanced Search">Advanced Search</a></li>
                                    <li><a href="about_us.html" title="About Us">About Us</a></li>
                                    <li><a href="contact_us.html" title="Contact Us">Contact Us</a></li>
                                    <li><a href="#" title="Suppliers">Suppliers</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <h4>contact us</h4>
                            <div class="contacts-info">
                                <address>
                                    <i class="add-icon">&nbsp;</i>123 Main Street, Anytown, <br>
                                    &nbsp;CA 12345 USA
                                </address>
                                <div class="phone-footer"><i class="phone-icon">&nbsp;</i> +(012) 365-6531
                                </div>
                                <div class="email-footer"><i class="email-icon">&nbsp;</i> <a
                                        href="mailto:abc@magikcommerce.com">abc@magikcommerce.com</a> </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-top">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-sm-6">
                            <div class="social">
                                <ul>
                                    <li class="fb">
                                        <a href="#"></a>
                                    </li>
                                    <li class="tw">
                                        <a href="#"></a>
                                    </li>
                                    <li class="googleplus">
                                        <a href="#"></a>
                                    </li>
                                    <li class="rss">
                                        <a href="#"></a>
                                    </li>
                                    <li class="pintrest">
                                        <a href="#"></a>
                                    </li>
                                    <li class="linkedin">
                                        <a href="#"></a>
                                    </li>
                                    <li class="youtube">
                                        <a href="#"></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                            <div class="payment-accept">
                                <img src="{{ asset('frontend/images/payment-1.png') }}" alt="">
                                <img src="{{ asset('frontend/images/payment-2.png') }}" alt="">
                                <img src="{{ asset('frontend/images/payment-3.png') }}" alt="">
                                <img src="{{ asset('frontend/images/payment-4.png') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-5 col-xs-12 coppyright"> &copy; {{ now()->format('Y') }} Magikcommerce.
                            All Rights Reserved.
                        </div>
                        <div class="col-sm-7 col-xs-12 company-links">
                            <ul class="links">
                                <li><a href="#" title="Magento Themes">Magento Themes</a></li>
                                <li><a href="#" title="Premium Themes">Premium Themes</a></li>
                                <li><a href="#" title="Service Packs">Service Packs</a></li>
                                <li class="last"><a href="#" title="Extensions &amp; Plugins">Extensions
                                        &amp; Plugins</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- End Footer -->
    </div>
    <!-- mobile menu -->
    <div id="mobile-menu">
        <ul>
            <li>
                <div class="mm-search">
                    <form id="search1" name="search">
                        <div class="input-group">
                            <div class="input-group-btn">
                                <button class="btn btn-default" type="submit"><i class="fa fa-search"></i>
                                </button>
                            </div>
                            <input type="text" class="form-control simple" placeholder="Search ..." name="srch-term"
                                id="srch-term">
                        </div>
                    </form>
                </div>
            </li>
            <li><a href="index.html">Home</a>
                <ul>
                    <li><a href="index.html">Home Version 1</a></li>
                    <li><a href="../blue/newsletter.html">Home Version 2</a></li>
                    <li><a href="../green/newsletter.html">Home Version 3</a></li>
                    <li><a href="../yellow/newsletter.html">Home Version 4</a></li>
                </ul>
            </li>
            <li><a href="#">Pages</a>
                <ul>
                    <li><a href="grid.html">Grid</a></li>
                    <li><a href="list.html">List</a></li>
                    <li><a href="product_detail.html">Product Detail</a></li>
                    <li><a href="shopping_cart.html">Shopping Cart</a></li>
                    <li><a href="checkout.html">Checkout</a></li>
                    <li><a href="wishlist.html">Wishlist</a></li>
                    <li><a href="dashboard.html">Dashboard</a></li>
                    <li><a href="multiple_addresses.html">Multiple Addresses</a></li>
                    <li><a href="about_us.html">About us</a></li>
                    <li><a href="blog.html">Blog</a>
                        <ul>
                            <li><a href="blog-detail.html">Blog Detail</a></li>
                        </ul>
                    </li>
                    <li><a href="contact_us.html">Contact us</a></li>
                    <li><a href="404error.html">404 Error Page</a></li>
                </ul>
            </li>
            <li><a href="#">Women</a>
                <ul>
                    <li><a href="#">Stylish Bag</a>
                        <ul>
                            <li><a href="grid.html">Clutch Handbags</a></li>
                            <li><a href="grid.html">Diaper Bags</a></li>
                            <li><a href="grid.html">Bags</a></li>
                            <li><a href="grid.html">Hobo handbags</a></li>
                        </ul>
                    </li>
                    <li><a href="grid.html">Material Bag</a>
                        <ul>
                            <li><a href="grid.html">Beaded Handbags</a></li>
                            <li><a href="grid.html">Fabric Handbags</a></li>
                            <li><a href="grid.html">Handbags</a></li>
                            <li><a href="grid.html">Leather Handbags</a></li>
                        </ul>
                    </li>
                    <li><a href="grid.html">Shoes</a>
                        <ul>
                            <li><a href="grid.html">Flat Shoes</a></li>
                            <li><a href="grid.html">Flat Sandals</a></li>
                            <li><a href="grid.html">Boots</a></li>
                            <li><a href="grid.html">Heels</a></li>
                        </ul>
                    </li>
                    <li><a href="grid.html">Jwellery</a>
                        <ul>
                            <li><a href="grid.html">Bracelets</a></li>
                            <li><a href="grid.html">Necklaces &amp; Pendent</a></li>
                            <li><a href="grid.html">Pendants</a></li>
                            <li><a href="grid.html">Pins &amp; Brooches</a></li>
                        </ul>
                    </li>
                    <li><a href="grid.html">Dresses</a>
                        <ul>
                            <li><a href="grid.html">Casual Dresses</a></li>
                            <li><a href="grid.html">Evening</a></li>
                            <li><a href="grid.html">Designer</a></li>
                            <li><a href="grid.html">Party</a></li>
                        </ul>
                    </li>
                    <li><a href="grid.html">Swimwear</a>
                        <ul>
                            <li><a href="grid.html">Swimsuits</a></li>
                            <li><a href="grid.html">Beach Clothing</a></li>
                            <li><a href="grid.html">Clothing</a></li>
                            <li><a href="grid.html">Bikinis</a></li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li><a href="grid.html">Men</a>
                <ul>
                    <li><a href="grid.html">Shoes</a>
                        <ul class="level1">
                            <li class="level2"><a href="grid.html">Sport Shoes</a></li>
                            <li class="level2"><a href="grid.html">Casual Shoes</a></li>
                            <li class="level2"><a href="grid.html">Leather Shoes</a></li>
                            <li class="level2"><a href="grid.html">canvas shoes</a></li>
                        </ul>
                    </li>
                    <li><a href="grid.html">Dresses</a>
                        <ul class="level1">
                            <li class="level2"><a href="grid.html">Casual Dresses</a></li>
                            <li class="level2"><a href="grid.html">Evening</a></li>
                            <li class="level2"><a href="grid.html">Designer</a></li>
                            <li class="level2"><a href="grid.html">Party</a></li>
                        </ul>
                    </li>
                    <li><a href="grid.html">Jackets</a>
                        <ul class="level1">
                            <li class="level2"><a href="grid.html">Coats</a></li>
                            <li class="level2"><a href="grid.html">Formal Jackets</a></li>
                            <li class="level2"><a href="grid.html">Leather Jackets</a></li>
                            <li class="level2"><a href="grid.html">Blazers</a></li>
                        </ul>
                    </li>
                    <li><a href="#.html">Watches</a>
                        <ul class="level1">
                            <li class="level2"><a href="grid.html">Fasttrack</a></li>
                            <li class="level2"><a href="grid.html">Casio</a></li>
                            <li class="level2"><a href="grid.html">Titan</a></li>
                            <li class="level2"><a href="grid.html">Tommy-Hilfiger</a></li>
                        </ul>
                    </li>
                    <li><a href="grid.html">Sunglasses</a>
                        <ul class="level1">
                            <li class="level2"><a href="grid.html">Ray Ban</a></li>
                            <li class="level2"><a href="grid.html">Fasttrack</a></li>
                            <li class="level2"><a href="grid.html">Police</a></li>
                            <li class="level2"><a href="grid.html">Oakley</a></li>
                        </ul>
                    </li>
                    <li><a href="grid.html">Accesories</a>
                        <ul class="level1">
                            <li class="level2"><a href="grid.html">Backpacks</a></li>
                            <li class="level2"><a href="grid.html">Wallets</a></li>
                            <li class="level2"><a href="grid.html">Laptops Bags</a></li>
                            <li class="level2"><a href="grid.html">Belts</a></li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li><a href="grid.html">Electronics</a>
                <ul>
                    <li><a href="grid.html"><span>Mobiles</span></a>
                        <ul>
                            <li><a href="grid.html"><span>Samsung</span></a></li>
                            <li><a href="grid.html"><span>Nokia</span></a></li>
                            <li><a href="grid.html"><span>IPhone</span></a></li>
                            <li><a href="grid.html"><span>Sony</span></a></li>
                        </ul>
                    </li>
                    <li><a href="grid.html"><span>Accesories</span></a>
                        <ul>
                            <li><a href="grid.html"><span>Mobile Memory Cards</span></a></li>
                            <li><a href="grid.html"><span>Cases &amp; Covers</span></a></li>
                            <li><a href="grid.html"><span>Mobile Headphones</span></a></li>
                            <li><a href="grid.html"><span>Bluetooth Headsets</span></a></li>
                        </ul>
                    </li>
                    <li><a href="grid.html"><span>Cameras</span></a>
                        <ul>
                            <li><a href="grid.html"><span>Camcorders</span></a></li>
                            <li><a href="grid.html"><span>Point &amp; Shoot</span></a></li>
                            <li><a href="grid.html"><span>Digital SLR</span></a></li>
                            <li><a href="grid.html"><span>Camera Accesories</span></a></li>
                        </ul>
                    </li>
                    <li><a href="grid.html"><span>Audio &amp; Video</span></a>
                        <ul>
                            <li><a href="grid.html"><span>MP3 Players</span></a></li>
                            <li><a href="grid.html"><span>IPods</span></a></li>
                            <li><a href="grid.html"><span>Speakers</span></a></li>
                            <li><a href="grid.html"><span>Video Players</span></a></li>
                        </ul>
                    </li>
                    <li><a href="grid.html"><span>Computer</span></a>
                        <ul>
                            <li><a href="grid.html"><span>External Hard Disk</span></a></li>
                            <li><a href="grid.html"><span>Pendrives</span></a></li>
                            <li><a href="grid.html"><span>Headphones</span></a></li>
                            <li><a href="grid.html"><span>PC Components</span></a></li>
                        </ul>
                    </li>
                    <li><a href="grid.html"><span>Appliances</span></a>
                        <ul>
                            <li><a href="grid.html"><span>Vaccum Cleaners</span></a></li>
                            <li><a href="grid.html"><span>Indoor Lighting</span></a></li>
                            <li><a href="grid.html"><span>Kitchen Tools</span></a></li>
                            <li><a href="grid.html"><span>Water Purifier</span></a></li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li><a href="grid.html">Furniture</a>
                <ul>
                    <li><a href="grid.html">Living Room</a>
                        <ul>
                            <li><a href="grid.html">Racks &amp; Cabinets</a></li>
                            <li><a href="grid.html">Sofas</a></li>
                            <li><a href="grid.html">Chairs</a></li>
                            <li><a href="grid.html">Tables</a></li>
                        </ul>
                    </li>
                    <li><a href="grid.html">Dining &amp; Bar</a>
                        <ul>
                            <li><a href="grid.html">Dining Table Sets</a></li>
                            <li><a href="grid.html">Serving Trolleys</a></li>
                            <li><a href="grid.html">Bar Counters</a></li>
                            <li><a href="grid.html">Dining Cabinets</a></li>
                        </ul>
                    </li>
                    <li><a href="grid.html">Bedroom</a>
                        <ul>
                            <li><a href="grid.html">Beds</a></li>
                            <li><a href="grid.html">Chest of Drawers</a></li>
                            <li><a href="grid.html">Wardrobes &amp; Almirahs</a></li>
                            <li><a href="grid.html">Nightstands</a></li>
                        </ul>
                    </li>
                    <li><a href="grid.html">Kitchen</a>
                        <ul>
                            <li><a href="grid.html">Kitchen Racks</a></li>
                            <li><a href="grid.html">Kitchen Fillings</a></li>
                            <li><a href="grid.html">Wall Units</a></li>
                            <li><a href="grid.html">Benches &amp; Stools</a></li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li><a href="grid.html">Kids</a></li>
            <li><a href="contact-us.html">Contact Us</a></li>
        </ul>
        <div class="top-links">
            <ul class="links">
                <li><a title="My Account" href="login.html">My Account</a></li>
                <li><a title="Wishlist" href="wishlist.html">Wishlist</a></li>
                <li><a title="Checkout" href="checkout.html">Checkout</a></li>
                <li><a title="Blog" href="blog.html"><span>Blog</span></a></li>
                <li class="last"><a title="Login" href="login.html"><span>Login</span></a></li>
            </ul>
        </div>
    </div>
    @foreach ($product_modal as $pro_show)
    @php
        $gallery_show = App\Gallery::where('pro_id',$pro_show->product_id)->get();
    @endphp
    <!-- The modal -->
    <div class="modal fade bd-example-modal-lg" id="quickview_product{{ $pro_show->product_id }}" tabindex="-1" role="dialog" aria-labelledby="modalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header" style="border-bottom: 0px !important;">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="col-sm-12 col-xs-12">
                        <article class="col-main">
                            <div class="product-view">
                                <div class="product-essential">
                                    <form method="post" id="product_addtocart_form_quickview{{$pro_show->product_id}}">
                                        <input type="hidden" name="id_hidden_quickview" id="id_hidden_quickview{{$pro_show->product_id}}" value="{{ $pro_show->product_id }}">
                                        <div class="product-img-box col-lg-4 col-sm-5 col-xs-12">

                                            <div class="product-image">
                                                <div class="product-full">
                                                    <img id="product-zoom"
                                                        src="{{ asset('uploads/product/'.$pro_show->product_image) }}"
                                                        data-zoom-image="{{ asset('uploads/product/'.$pro_show->product_image) }}"
                                                        alt="{{ $pro_show->product_name }}" width="274.33px" height="274.33px"/>
                                                </div>
                                                <div class="more-views">
                                                    <div class="slider-items-products">
                                                        <div id="gallery_01"
                                                            class="product-flexslider hidden-buttons product-img-thumb">
                                                            <div class="slider-items slider-width-col4 block-content">
                                                                @foreach ($gallery_show as $gal)
                                                                <div class="more-views-items">
                                                                    <a href="#"
                                                                        data-image="{{ asset('uploads/gallery/' . $gal->gallery_image) }}"
                                                                        data-zoom-image="{{ asset('uploads/gallery/' . $gal->gallery_image) }}">
                                                                        <img id="product-zoom2"
                                                                            src="{{ asset('uploads/gallery/' . $gal->gallery_image) }}"
                                                                            alt="product-image-{{ $gal->gallery_id }}"
                                                                            width="73px" height="73px" />
                                                                    </a>
                                                                </div>
                                                                @endforeach
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- end: more-images -->
                                        </div>
                                        <div class="product-shop col-lg-8 col-sm-7 col-xs-12">
                                            <div class="product-next-prev"> <a class="product-next"
                                                    href="#"><span></span></a> <a class="product-prev"
                                                    href="#"><span></span></a> </div>
                                            <div class="product-name">
                                                <h1>{{ $pro_show->product_name }}</h1>
                                            </div>
                                            <div class="ratings">
                                                <div class="rating-box">
                                                    <div class="rating width80"></div>
                                                </div>
                                                <p class="rating-links"> <a href="#">1 Review(s)</a> <span
                                                        class="separator">|</span> <a href="#">Add Your Review</a>
                                                </p>
                                            </div>
                                            <div class="price-block">
                                                <div class="price-box">
                                                    @if ($pro_show->product_price_sale != 0)
                                                    <p class="special-price"> <span class="price-label">Special
                                                        Price</span> <span class="price"> {{ number_format($pro_show->product_price_sale) }} vnđ</span>
                                                    </p>
                                                    <p class="old-price"> <span class="price-label">Regular
                                                            Price:</span> <span class="price"> {{ number_format($pro_show->product_price) }} vnđ</span>
                                                    </p>
                                                    @else
                                                    <p class="special-price"> <span class="price-label">Special
                                                        Price</span> <span class="price"> {{ number_format($pro_show->product_price) }} vnđ</span>
                                                    </p>
                                                    @endif

                                                    <p class="availability in-stock pull-right"><span>In Stock</span>
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="add-to-box">
                                                <div class="add-to-cart">
                                                    <div class="pull-left">
                                                        <div class="custom pull-left"> <span class="qty-label">QTY:</span>
                                                            <button
                                                                onClick="var result = document.getElementById('qty{{ $pro_show->product_id }}'); var qty = result.value; if( !isNaN( qty ) &amp;&amp; qty &gt; 0 ) result.value--;return false;"
                                                                class="reduced items-count" type="button"><i
                                                                    class="fa fa-minus">&nbsp;</i></button>
                                                            <input type="number" class="input-text qty" title="Qty" value="1"
                                                                maxlength="12" id="qty{{ $pro_show->product_id }}" name="qty" min="1"
                                                                max="{{ $pro_show->product_quantity }}"
                                                                oninput="validity.valid||(value='');">
                                                            <button
                                                                onClick="var result = document.getElementById('qty{{ $pro_show->product_id }}'); var qty = result.value; if( !isNaN( qty )) result.value++;return false;"
                                                                class="increase items-count" type="button"><i
                                                                    class="fa fa-plus">&nbsp;</i></button>
                                                        </div>
                                                    </div>
                                                    <button class="button btn-cart" title="Add to Cart"
                                                        type="submit">Add to Cart</button>
                                                </div>

                                            </div>
                                            <div class="short-description">
                                                <h2>Quick Overview</h2>
                                                <span style="text-align: justify;">{!! substr($pro_show->product_desc, 0, 450) !!}...</span>
                                            </div>
                                            <div class="email-addto-box">
                                                <ul class="add-to-links">
                                                    <li>
                                                        @if (Auth::user())
                                                        @php
                                                            $check_wish = App\Wishlist::where('user_id',Auth::id())->where('pro_id',$pro_show->product_id)->first();
                                                        @endphp
                                                            @if ($check_wish)
                                                            <a class="link-wishlist add_Wishlist wishcolor"
                                                            id="{{ $pro_show->product_id }}"><span>Add to Wishlist</span></a>
                                                            @else
                                                            <a class="link-wishlist add_Wishlist"
                                                            id="{{ $pro_show->product_id }}"><span>Add to Wishlist</span></a>
                                                            @endif
                                                        @else
                                                        <a class="link-wishlist"
                                                            href="{{ route('login.index') }}"><span>Add to Wishlist</span></a>
                                                        @endif
                                                    </li>
                                                    <li>
                                                        <span class="separator">|</span>
                                                        <a class="link-compare add_compare" data-compare_id="{{ $pro_show->product_id }}">
                                                            <span>Add to Compare</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                                <p class="email-friend"><a href="#"><span>Email to a
                                                            Friend</span></a></p>
                                            </div>
                                            <div class="social">
                                                <ul class="link">
                                                    <li class="fb"><a href="#"></a></li>
                                                    <li class="tw"><a href="#"></a></li>
                                                    <li class="googleplus"><a href="#"></a></li>
                                                    <li class="rss"><a href="#"></a></li>
                                                    <li class="pintrest"><a href="#"></a></li>
                                                    <li class="linkedin"><a href="#"></a></li>
                                                    <li class="youtube"><a href="#"></a></li>
                                                </ul>
                                            </div>

                                            <ul class="shipping-pro">
                                                <li>Free Wordwide Shipping</li>
                                                <li>30 days return</li>
                                                <li>Member Discount</li>
                                            </ul>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </article>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach
        <style>
            .wishcolor {
                color: red !important;
            }
            .dropdown-menu>.active>a, .dropdown-menu>.active>a:focus, .dropdown-menu>.active>a:hover{
                background-color: #1fc0a0 !important;
            }
            .typeahead {
                width: 100%;
            }
        </style>

        <!-- JavaScript -->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.2/bootstrap3-typeahead.min.js" ></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js"></script>
        <script src="{{ asset('frontend/js/revslider.js') }} "></script>
        <script src="{{ asset('frontend/js/common.js') }} "></script>
        <!-- Toastr script -->
        <script src="{{ asset('backend/js/plugins/toastr/toastr.min.js') }}"></script>

        @if (Session::get('message'))
            toastr.success(Session::get('message'), 'Notification');
        @endif
        @if (Session::get('message_err'))
            toastr.error(Session::get('message_err'), 'Notification');
        @endif
        <script>
            function loadSidebar() {
                $.ajax({
                    type: 'get',
                    url: '{{ route('home.create') }}',
                    dataType: 'json',
                    success: function(response) {
                        $('#countCart').html(response.countData);
                        $('#cart-sidebar').html(response.data);
                    }
                });
            }

            function loadShopping() {
                $.ajax({
                    type: 'get',
                    url: '{{ route('cart.index') }}',
                    dataType: 'json',
                    success: function(response) {
                        $('#loadShoppingcart').html(response.data);
                        $('#cartTotal').html(response.dataTotal);
                        $('#delButtonall').html(response.dataDel);
                    }
                });
            }

            function loadCompare() {
                $.ajax({
                    type: 'get',
                    url: '{{ route('product-detail.create') }}',
                    dataType: 'json',
                    success: function(response) {
                        $('#loadare').html(response.data);
                    }
                });
            }
            @if (Session::get('compare'))
                @foreach (Session::get('compare') as $com)
                    var id_session = {{ $com['id_pro'] }};

                    if(id_session){
                    $('a[data-compare_id='+id_session+']').addClass('wishcolor');
                    }else{
                    $('a[data-compare_id='+id_session+']').removeClass('wishcolor');
                    }
                @endforeach
            @endif
            $(document).ready(function() {
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                });
                loadSidebar();
                // Add Cart
                $(document).on('click', '.add_cart', function(e) {
                    e.preventDefault();
                    var id_procart = $(this).data('id_pro');

                    $.ajax({
                        type: 'post',
                        url: '{{ route('home.store') }}',
                        data: {
                            id_procart: id_procart
                        },
                        dataType: 'json',
                        success: function(response) {
                            if (response.status == 200) {
                                loadSidebar();
                                loadShopping();
                                toastr.success(response.message, 'Notification');
                            } else {
                                toastr.error(response.message, 'Notification');
                            }
                        }
                    });
                });
                // Delete Cart Sidebar Ajax
                $(document).on('click', '.remove_cart_rowId', function(e) {
                    var href_rowid = $(this).data('href_rowid');

                    $.ajax({
                        type: 'get',
                        url: href_rowid,
                        success: function(response) {
                            loadSidebar();
                            loadShopping();
                        }
                    });
                });
                // Add Wishlist
                $(document).on('click', '.add_Wishlist', function(e) {
                    e.preventDefault();
                    var id = $(this).attr('id');

                    $.ajax({
                        type: 'post',
                        url: '{{ route('wishlist.store') }}',
                        data: {
                            id: id
                        },
                        success: function(response) {
                            if (response.action == 'Add') {
                                $('a[id=' + id + ']').addClass('wishcolor');
                                toastr.success(response.message, 'Notification');
                            } else {
                                $('a[id=' + id + ']').removeClass('wishcolor');
                            }
                        }
                    });
                });
                // Add Compare
                $(document).on('click', '.add_compare', function(e) {
                    e.preventDefault();
                    var id = $(this).data('compare_id');

                    $.ajax({
                        type: 'get',
                        url: '{{ route('wishlist.create') }}',
                        data: {
                            id: id
                        },
                        dataType: 'json',
                        success: function(response) {
                            if (response.action == 'Add') {
                                $('a[data-compare_id=' + id + ']').addClass('wishcolor');
                                toastr.success(response.message, 'Notification');
                                loadCompare()
                            } else {
                                $('a[data-compare_id=' + id + ']').removeClass('wishcolor');
                                loadCompare()
                            }
                        }
                    });
                });
                // Add Cart Quickview
                @foreach ($product_modal as $pro_show)
                $(document).on('submit','#product_addtocart_form_quickview{{$pro_show->product_id}}', function(e){
                    e.preventDefault();
                    var id_pro = {{$pro_show->product_id}};
                    var qtycart = $('#qty{{$pro_show->product_id}}').val();

                    $.ajax({
                        type: 'post',
                        url: '{{ route('cart.store') }}',
                        data: {
                            qtycart:qtycart,
                            id_pro:id_pro
                        },
                        dataType: 'json',
                        success:function(response){
                            loadSidebar();
                            toastr.success(response.message, 'Notification');
                        }
                    });
                });
                @endforeach
                // Autocomplete Search
                $('#search').typeahead({

                    source: function(query, process){

                        $.ajax({
                            type: 'get',
                            url: "{{ route('home') }}",
                            data: {query:query},
                            dataType: 'JSON',
                            success:function(data){
                                process(data);
                            }
                        });

                    }

                });

            });
        </script>
        @yield('js')
        <script src="https://www.gstatic.com/dialogflow-console/fast/messenger/bootstrap.js?v=1"></script>
<df-messenger
  intent="WELCOME"
  chat-icon="blob:https://www.pinterest.com/fe356e16-7b86-48ad-9ecf-798b75f144ff"
  chat-title="Linea Shop"
  agent-id="2299199c-1782-449e-827b-546606b0a5ba"
  language-code="en"
></df-messenger>



</body>

</html>
