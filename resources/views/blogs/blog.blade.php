@extends('layouts.app')

@section('title')
	Blog page
@endsection

@section('content')
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		
		<!-- favicon -->
		<link rel="shortcut icon" href="assets/images/favicon.png" type="image/png">
		<!-- animate scss -->
		<link rel="stylesheet" href="assets/css/animate.css">
		<!-- bootstarp css -->
		<link rel="stylesheet" href="assets/css/bootstrap.min.css">
		<!-- icofont -->
		<link rel="stylesheet" href="assets/css/icofont.min.css">
		<!-- lightcase css -->
		<link rel="stylesheet" href="assets/css/lightcase.css">
		<!-- swiper css -->
		<link rel="stylesheet" href="assets/css/swiper.min.css">
		<!-- cusyom scss -->
        <link rel="stylesheet" href="assets/css/style.css">
        
		<title>Mezban Blog</title>
	</head>

	<body>
		<!-- preloader -->
		<div class="preloader"><div class="load loade"><hr/><hr/><hr/><hr/></div></div>
		<!-- preloader -->


        <!-- search area -->
        <div class="search-area">
            <div class="search-input">
                <div class="search-close">
                    <span></span>
                    <span></span>
                </div>
                <form>
                    <input type="text" name="text" placeholder="*Search Here.......">
                </form>
            </div>
        </div>
        <!-- search area -->

		<!-- Mobile Menu Start Here -->
		<div class="mobile-menu">
			<nav class="mobile-header d-xl-none">
				<div class="header-logo">
					<a href="index.html" class="logo"><img src="assets/images/logo/01.png" alt="logo"></a>
				</div>
				<div class="header-bar">
					<span></span>
					<span></span>
					<span></span>
				</div>
			</nav>
			<nav class="menu">
				<div class="mobile-menu-area d-xl-none">
					<div class="mobile-menu-area-inner" id="scrollbar">
						<div class="mobile-search">
							<input type="text" placeholder="Search Here.........">
							<button type="submit"><i class="icofont-search-2"></i></button>
						</div>
						<ul>
                            <li>
                                <a href="{{ route('home') }}">Home</a>
                            </li>
                            <li><a href="{{ route('about') }}">About</a></li>
                            <li>
                                <a href="#0">Pages</a>
                                <ul>
                                    <li>
                                        <a href="#0">Category</a>
                                        <ul>
                                            <li><a href="food-menu.html">Food Category</a></li>
                                            <li><a href="menu-card.html">Category style 1</a></li>
                                            <li><a href="menu-card-2.html">Category style 2</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#0">Chef</a>
                                        <ul>
                                            <li><a href="homechef.html">Home Chef</a></li>
                                            <li><a href="homechef-single.html">Home Chef Single</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="recepi-single.html">Single Recipe</a></li>
                                    <li><a href="404.html">404 Page</a></li>
                                    <li><a href="coming-soon.html">Coming Soon Page</a></li>
                                </ul>
                            </li>
                            <li>
                                <a class="active" href="#0">Blog</a>
                                <ul>
                                    <li><a class="active" href="blog.html">Blog</a></li>
                                    <li><a href="blog-single.html">Blog Single</a></li>
                                </ul>								
                            </li>
                            <li>
                                <a href="#0">Shop</a>
                                <ul>
                                    <li><a href="shop-page.html">Shop Page</a></li>
                                    <li><a href="shop-single.html">Shop Single style-1</a></li>
                                    <li><a href="shop-single-2.html">Shop Single style-2</a></li>
                                    <li><a href="cart-page.html">Cart Page</a></li>
                                </ul>
                            </li>						
                            <li><a href="contact-us.html">Contact</a></li>
                        </ul>
						<div class="scocial-media">
							<a href="#" class="facebook"><i class="icofont-facebook"></i></a>
							<a href="#" class="twitter"><i class="icofont-twitter"></i></a>
							<a href="#" class="linkedin"><i class="icofont-linkedin"></i></a>
							<a href="#" class="vimeo"><i class="icofont-vimeo"></i></a>
						</div>
					</div>
				</div>
			</nav>
		</div>
		<!-- Mobile Menu Ending Here -->

		<!-- header section start -->
		<header class="header-section header-2 d-xl-block d-none">
            <div class="container">
                <div class="header-area">
                    <div class="logo">
                        <a href="index.html"><img src="assets/images/logo/01.png" alt="logo"></a>
                    </div>
                    <div class="main-menu">
                        <ul>
                            <li>
                                <a href="{{ route('home') }}">Home</a>
                            </li>
                            <li><a href="{{ route('about') }}">About</a></li>
                            <li>
                                <a href="#0">Pages</a>
                                <ul>
                                    <li>
                                        <a href="#0">Category</a>
                                        <ul>
                                            <li><a href="{{ route('category') }}">Food Category</a></li>
                                            <li><a href="{{ route('categories') }}">Categories</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#0">Chef</a>
                                        <ul>
                                            <li><a href="{{ route('allChefs') }}">Chefs</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a class="active" href="#0">Blog</a>
                                <ul>
                                    <li><a class="active" href="#">Blog</a></li>
                                </ul>								
                            </li>
                            <li>
                                <a href="#0">Shop</a>
                                <ul>
                                    <li><a href="{{route('shop')}}">Shop Page</a></li>
                                </ul>
                            </li>						
                            <li><a href="{{ route('contact') }}">Contact</a></li>
                        </ul>
                    </div>
                    <div class="author-option">
                        <div class="author-area">
                            <div class="author-account">
                                <i class="icofont-ui-user"></i>
                                <div class="author-select">
                                    <select name="author-select" id="author-select">
                                        <option value="1">My Account </option>
                                        <option value="2">Log Out </option>
                                    </select>
                                </div>
                            </div>
                            <div class="cart-option">
                                <div class="cart-icon">
                                    <img src="assets/images/header/cart-2.png" alt="shop-cart">
                                </div>
								<div class="count-item">04</div>
                                <div class="cart-content">
                                    <div class="cart-title">
                                        <div class="add-item">4 Items Added</div>
                                        <div class="list-close"><a href="#">Close</a></div>
                                    </div>
                                    <div class="cart-scr scrollbar">
                                        <div class="cart-con-item">
                                            <div class="cart-item">
                                                <div class="cart-inner">
                                                    <div class="cart-top">
                                                        <div class="thumb">
                                                            <a href="#"><img src="assets/images/popular-food/01.jpg" alt=""></a>
                                                        </div>
                                                        <div class="content">
                                                            <a href="#">Split Remedy Split End Shampoo</a>
                                                        </div>
                                                        <div class="remove-btn">
                                                            <a href="#"><i class="icofont-close"></i></a>
                                                        </div>
                                                    </div>
                                                    <div class="cart-bottom">
                                                        <div class="sing-price">Tk. 140</div>
                                                        <div class="cart-plus-minus"><div class="dec qtybutton">-</div>
                                                            <div class="dec qtybutton">-</div>
                                                            <input class="cart-plus-minus-box" type="text" name="qtybutton" value="1">
                                                            <div class="inc qtybutton">+</div>
                                                        <div class="inc qtybutton">+</div></div>
                                                        <div class="total-price">Tk. 280.00</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="cart-item">
                                                <div class="cart-inner">
                                                    <div class="cart-top">
                                                        <div class="thumb">
                                                            <a href="#"><img src="assets/images/popular-food/02.jpg" alt=""></a>
                                                        </div>
                                                        <div class="content">
                                                            <a href="#">Split Remedy Split End Shampoo</a>
                                                        </div>
                                                        <div class="remove-btn">
                                                            <a href="#"><i class="icofont-close"></i></a>
                                                        </div>
                                                    </div>
                                                    <div class="cart-bottom">
                                                        <div class="sing-price">Tk. 140</div>
                                                        <div class="cart-plus-minus"><div class="dec qtybutton">-</div>
                                                            <div class="dec qtybutton">-</div>
                                                            <input class="cart-plus-minus-box" type="text" name="qtybutton" value="1">
                                                            <div class="inc qtybutton">+</div>
                                                        <div class="inc qtybutton">+</div></div>
                                                        <div class="total-price">Tk. 280.00</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="cart-item">
                                                <div class="cart-inner">
                                                    <div class="cart-top">
                                                        <div class="thumb">
                                                            <a href="#"><img src="assets/images/popular-food/03.jpg" alt=""></a>
                                                        </div>
                                                        <div class="content">
                                                            <a href="#">Split Remedy Split End Shampoo</a>
                                                        </div>
                                                        <div class="remove-btn">
                                                            <a href="#"><i class="icofont-close"></i></a>
                                                        </div>
                                                    </div>
                                                    <div class="cart-bottom">
                                                        <div class="sing-price">Tk. 140</div>
                                                        <div class="cart-plus-minus"><div class="dec qtybutton">-</div>
                                                            <div class="dec qtybutton">-</div>
                                                            <input class="cart-plus-minus-box" type="text" name="qtybutton" value="1">
                                                            <div class="inc qtybutton">+</div>
                                                        <div class="inc qtybutton">+</div></div>
                                                        <div class="total-price">Tk. 280.00</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="cart-item">
                                                <div class="cart-inner">
                                                    <div class="cart-top">
                                                        <div class="thumb">
                                                            <a href="#"><img src="assets/images/popular-food/04.jpg" alt=""></a>
                                                        </div>
                                                        <div class="content">
                                                            <a href="#">Split Remedy Split End Shampoo</a>
                                                        </div>
                                                        <div class="remove-btn">
                                                            <a href="#"><i class="icofont-close"></i></a>
                                                        </div>
                                                    </div>
                                                    <div class="cart-bottom">
                                                        <div class="sing-price">Tk. 140</div>
                                                        <div class="cart-plus-minus"><div class="dec qtybutton">-</div>
                                                            <div class="dec qtybutton">-</div>
                                                            <input class="cart-plus-minus-box" type="text" name="qtybutton" value="1">
                                                            <div class="inc qtybutton">+</div>
                                                        <div class="inc qtybutton">+</div></div>
                                                        <div class="total-price">Tk. 280.00</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="cart-scr-bottom">
                                        <ul>
                                            <li>
                                                <div class="title">Subtotal</div>
                                                <div class="price">Tk. 1045.00</div>
                                            </li>
                                            <li>
                                                <div class="title">Shipping</div>
                                                <div class="price">Tk. 40.00</div>
                                            </li>
                                            <li>
                                                <div class="title">Cart Total</div>
                                                <div class="price">Tk. 1085.00</div>
                                            </li>
                                        </ul>
                                        <a href="#" class="food-btn"><span>Place Order</span></a>
                                    </div>
                                </div>
                            </div>
                            <div class="search-start">
                                <i class="icofont-search-2"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
		<!-- header section ending -->
        
        <!-- Page Header Section Start Here -->
        <section class="page-header style-2">
            <div class="container">
                <div class="page-title text-center">
                    <h3>All blogs</h3>
                    <ul class="breadcrumb">
                        <li><a href="{{  route('home')}}">Home</a></li>
                        <li>Blog</li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- Page Header Section Ending Here -->

		
        <!-- Blog Page Section Start Here -->
        <div class="blog-section blog-page padding-tb">
            <div class="container">
                <div class="section-wrapper">
                    <div class="row justify-content-center">
                        <div class="col-lg-8 col-12">
                            @foreach ($blogs as $blog)
                            <div class="post-item">
                                <div class="post-inner">
                                    <div class="post-thumb">
                                        <a href="{{route('blogSingle',['id'=>$blog->id])}}">
                                            <img src="/chef_images/{{ $blog->image }}" alt="blog" >
                                        </a>
                                    </div>
                                    <div class="post-content">
                                        <h4><a href="{{  route('blogSingle',['id'=>$blog->id]) }}">{{ $blog->title }}</a></h4>
                                        <div class="meta-post">
                                            <ul>
                                                <li>
                                                    <i class="icofont-calendar"></i>
                                                    <a class="date">{{ $blog->created_at }}</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <p>{{ $blog->description }}</p>
                                        <a href="{{  route('blogSingle',['id'=>$blog->id]) }}" class="food-btn"><span>Read More</span></a>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- Blog Page Section Ending Here -->


		<!-- Newsletter Section Start Here -->
        <div class="news-letter">
            <div class="container">
                <div class="section-wrapper">
                    <div class="news-title">
                        <h3>For Newsletter</h3>
                    </div>
                    <div class="news-form">
                        <form action="/">
                            <label>
                                <input type="email" name="email" placeholder="Enter Your Email">
                            </label>
                            <input type="submit" name="submit" value="Subscribe now">
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Newsletter Section Ending Here -->

		<!-- Footer Section Start Here -->
		<footer class="footer">
			<div class="bg-shape-style"></div>
			<div class="container">
				<div class="footer-top">
					<div class="footer-area text-center">
						<div class="footer-logo">
							<a href="index.html"><img src="assets/images/header/footer/01.png" alt="footer-logo"></a>
						</div>
						<div class="scocial-media">
							<a href="#" class="facebook"><i class="icofont-facebook"></i></a>
							<a href="#" class="twitter"><i class="icofont-twitter"></i></a>
							<a href="#" class="linkedin"><i class="icofont-linkedin"></i></a>
							<a href="#" class="vimeo"><i class="icofont-vimeo"></i></a>
						</div>
						<div class="footer-menu">
							<ul>
								<li><a href="{{  route('home') }}">Home</a></li>
								<li><a href="{{  route('category') }}">Menus</a></li>
								<li><a href="{{  route('allChefs') }}">Chefs</a></li>
								<li><a href="#">Contact</a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="footer-bottom text-center">
					<p>&copy; 2019 <a href="#"><span>Mezban</span></a> Design by <a href="#"><span>FoxCoders</span></a>.</p>
				</div>
			</div>
		</footer>
        <!-- Footer Section Ending Here -->
        
        <!-- scrollToTop start here -->
		<a href="#" class="scrollToTop"><i class="icofont-swoosh-up"></i></a>
		<!-- scrollToTop ending here -->


        
        <script src="assets/js/jquery.js"></script>
        <script src="assets/js/waypoints.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/isotope.pkgd.min.js"></script>
        <script src="assets/js/wow.min.js"></script>
        <script src="assets/js/swiper.min.js"></script>
        <script src="assets/js/lightcase.js"></script>
        <script src="assets/js/jquery.counterup.min.js"></script>
        <script src="assets/js/functions.js"></script>
    </body>
</html>
@endsection
