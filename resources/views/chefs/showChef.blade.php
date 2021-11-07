@extends('layouts.app')

@section('title')
    Chef page
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
		<link rel="shortcut icon" href="../assets/images/favicon.png" type="image/png">
		<!-- animate scss -->
		<link rel="stylesheet" href="assets/css/animate.css">
		<link rel="stylesheet" href="../assets/css/animate.css">
		<!-- bootstarp css -->
		<link rel="stylesheet" href="assets/css/bootstrap.min.css">
		<link rel="stylesheet" href="../assets/css/bootstarp.min.css">
		<!-- icofont -->
		<link rel="stylesheet" href="assets/css/icofont.min.css">
		<link rel="stylesheet" href="../assets/css/icofont.min.css">
		<!-- lightcase css -->
		<link rel="stylesheet" href="assets/css/lightcase.css">
		<!-- swiper css -->
		<link rel="stylesheet" href="assets/css/swiper.min.css">
		<link rel="stylesheet" href="../assets/css/lightcase.css">
		<!-- swiper css --> 
		<link rel="stylesheet" href="../assets/css/swiper.min.css">
		<!-- cusyom scss -->
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="../assets/css/style.css">

		<title>Mezban HomeChef Single</title>
	</head>

	<body>

		<!-- Mobile Menu Start Here -->
		<div class="mobile-menu">
			<nav class="mobile-header d-xl-none">
				<div class="header-logo">
					<a href="index.html" class="logo"><img src="assets/images/logo/01.png" alt="logo"></a>
					<a href="index.html" class="logo"><img src="../assets/images/logo/01.png" alt="logo"></a>
				</div>
				<div class="header-bar">
					<span></span>
					<span></span>
					<span></span>
				</div>
			</nav>
			<nav class="menu">
				<div class="mobile-menu-area d-xl-none">
					<div class="mobile-menu-area-inner scrollbar">
						<div class="mobile-search">
							<input type="text" placeholder="Search Here.........">
							<button type="submit"><i class="icofont-search-2"></i></button>
						</div>
						<ul>
                            <li>
                                <a href="#0">Home</a>
                                <ul>
                                    <li><a href="index.html">Home Page One</a></li>
                                    <li><a href="index-2.html">Home Page Two</a></li>
                                    <li><a href="index-3.html">Home Page Three</a></li>
                                    <li><a href="index-4.html">Home Page Four</a></li>
                                </ul>
                            </li>
                            <li><a href="about.html">About</a></li>
                            <li>
                                <a class="active" href="#0">Pages</a>
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
                                        <a class="active" href="#0">Chef</a>
                                        <ul>
                                            <li><a href="homechef.html">Home Chef</a></li>
                                            <li><a class="active" href="homechef-single.html">Home Chef Single</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="recepi-single.html">Single Recipe</a></li>
                                    <li><a href="404.html">404 Page</a></li>
                                    <li><a href="coming-soon.html">Coming Soon Page</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#0">Blog</a>
                                <ul>
                                    <li><a href="blog.html">Blog</a></li>
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
		<header class="header-section d-xl-block d-none">
			<div class="container-fluid">
				<div class="header-area">
					<div class="logo">  
						<a href="index.html"><img src="../assets/images/logo/01.png" alt="logo"></a>
					</div>
					<div class="main-menu">
                        <ul>
                            <li>
                                <a href="">@include('auth.check')</a>
                            </li>
                            <li><a href="about.html">About</a></li>
                            <li>
                                <a href="{{ route('home') }}">Home</a>
                            </li>
                            <li><a href="{{ route('about') }}">About</a></li>
                            <li>
                                <a class="active" href="#0">Pages</a>
                                <ul>
                                    <li>
                                        <a href="#0">Category</a>
                                        <ul>
                                            <li><a href="{{ route('category') }}">Food Category</a></li>
                                            <li><a href="{{ route('categories') }}">Categories</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a class="active" href="#0">Chef</a>
                                        <ul>
                                            <li><a href="{{ route('allChefs') }}">All Chefs</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#0">Blog</a>
                                <ul>
                                    <li><a href="{{  route('blog') }}">Blog</a></li>
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
							<div class="cart-option">
								<img src="../assets/images/header/cart.png" alt="shop-cart">
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
															<a href="#"><img src="../assets/images/popular-food/01.jpg" alt=""></a>
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
															<a href="#"><img src="../assets/images/popular-food/02.jpg" alt=""></a>
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
															<a href="#"><img src="../assets/images/popular-food/03.jpg" alt=""></a>
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
															<a href="#"><img src="../assets/images/popular-food/04.jpg" alt=""></a>
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
							<div class="author-account">
								<div class="author-icon">
									<img src="assets/images/chef/author/08.jpg" alt="author">
								</div>
								<div class="author-select">
									@include('auth.check')

								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</header>
		<!-- header section ending -->
        <!-- Page Header Section Start Here -->
        <section class="page-header">
            <div class="shape-1">
                <img src="../assets/images/banner/shape/01.png" alt="banner">
            </div>
            <div class="shape-2">
                <img src="../assets/images/banner/shape/02.png" alt="banner">
            </div>
            <div class="container">
                <div class="page-title text-center">
                    <h3 style="margin-left: -500px;">{{ $chef->name }}</h3>
                    <ul class="breadcrumb">
                        <li style="margin-left: -500px;" ><a href="{{ route('home') }}">Home</a></li>
                    </ul>
                </div>
            </div>
        </section>
		<!-- Page Header Section Ending Here -->
		<!-- Popular Home Chef Section Start Here -->
		<div class="popular-chef single padding-tb">
			<div class="container">
				<div class="section-wrapper">
					<div class="row justify-content-center">
						<div class="col-xl-8 col-12">
                            <article>
                                <div class="chef-item">
                                    <div class="chef-inner">
                                        <div class="chef-thumb">
                                            @if (isset($chef->image1))
                                            <img src="../assets/images/chef/01.jpg" alt="food-chef" style="width: 1000px;">
                                            @endif
                                        </div>
                                        <div class="chef-content">
                                            <div class="chef-author">
                                                @if (isset($chef->image1))
                                                    <img src="/chef_images/{{ $chef->image1 }}" alt="food-chef">
                                                @endif
                                            </div>
                                            <div class="chef-desc">
                                                <div class="chef-desc-top">
                                                    <div class="scocial-share">
                                                        <h5>{{ $chef->name }}</h5>
                                                        <p>{{ $chef->position }}</p>
                                                    </div>
                                                </div>
                                                <div class="chef-desc-middle">
                                                    <p>I love to cook for my friends and family . Special expertise of Making Pitha , achar , local food and have passonate to produce and promote organic food...</p>
                                                    <p style="color: white;">{{ $chef->description }}</p>
                                                    <ul>
                                                        <li><span>Location</span>: {{ $chef->location }}</li>
                                                        <li><span>Joined</span>: {{ $chef->joined }}</li>
                                                        <li><span>Delivered</span>: {{ $chef->delivered_orders }} Orders</li>
                                                    </ul>
                                                </div>
                                                <div class="chef-footer">
                                                    <div class="chef-menu chef-con">
                                                        <h6>{{ $chef->salary }}$</h6>
                                                    </div>
                                                    <div class="chef-recipe chef-con">
                                                        <h6>Age: {{ $chef->age }}</h6>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="related">
                                    <ul class="tab-bar">
                                        <li class="tablinks" id="defaultOpen" onclick="openCity(event, 'food_menu')">
                                            <span>Food Menu</span>
                                        </li>
                                    </ul>
                                    <div id="food_menu" class="tabcontent">
                                        <div class="popular-foods">
                                            <div class="section-wrapper">
                                                <div class="row justify-content-center">
                                                    @foreach ($cards as $card)
                                                    <div class="col-md-6 col-12">
                                                        <div class="p-food-item">
                                                            <div class="p-food-inner">
                                                                <div class="p-food-thumb">
                                                                @if (isset($card->image1))
                                                                    <img src="/card_images/{{ $card->image1 }}" alt="">
                                                                @endif
                                                                    <span>{{ $card->price }}din</span>
                                                                </div>
                                                                <div class="p-food-content">
                                                                    <div class="p-food-author">
                                                                        <a href="#">	
                                                                        @if (isset($card->image2))
                                                                            <img src="/card_images/{{ $card->image2 }}" alt="">
                                                                        @endif</a>
                                                                    </div>
                                                                    <h6><a >{{ $card->name }}</a></h6>
                                                                    <div class="p-food-group">
                                                                        <span>Type of food : {{ $card->foodname }}</span>
                                                                    </div>
                                                                    <ul class="del-time">
                                                                        <li>
                                                                            <i class="icofont-cycling-alt"></i>
                                                                            <div class="time-tooltip">
                                                                                <div class="time-tooltip-holder">
                                                                                    <span class="tooltip-label">Delivery time
                                                                                    <span class="tooltip-info">Your order will be delivered in 20 minutes.</span>
                                                                                </span></div>
                                                                            </div>
                                                                        </li>
                                                                        <li>
                                                                            <i class="icofont-stopwatch"></i>
                                                                            <div class="time-tooltip">
                                                                                <div class="time-tooltip-holder">
                                                                                    <span class="tooltip-label">Pickup time</span>
                                                                                    <span class="tooltip-info">You can pickup order in 20 minutes.
                                                                                </span></div>
                                                                            </div>
                                                                        </li>
                                                                    </ul>
                                                                    <div class="p-food-footer">
                                                                        <div class="left">
                                                                            <div class="rating">
                                                                                <i class="icofont-star"></i>
                                                                                <i class="icofont-star"></i>
                                                                                <i class="icofont-star"></i>
                                                                                <i class="icofont-star"></i>
                                                                                <i class="icofont-star"></i>
                                                                            </div>
                                                                        </div>
                                                                        <div class="right"><i class="icofont-home"></i>6th Avenue New York</div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                
                                    <div id="followers" class="tabcontent">
                                        <div class="product style-4">
                                            <div class="section-wrapper">
                                                <div class="row justify-content-center">
                                                    <div class="col-lg-4 col-md-6 col-12">
                                                        <div class="product-item">
                                                            <div class="product-thumb">
                                                                <img src="assets/images/chef/author/07.jpg" alt="food-product">
                                                                <img src="../assets/images/chef/author/07.jpg" alt="food-product">
                                                            </div>
                                                            <div class="product-content">
                                                                <h6><a href="#">Sanzida laila Trisha</a></h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 col-md-6 col-12">
                                                        <div class="product-item">
                                                            <div class="product-thumb">
                                                                <img src="assets/images/chef/author/08.jpg" alt="food-product">
                                                                <img src="../assets/images/chef/author/08.jpg" alt="food-product">
                                                            </div>
                                                            <div class="product-content">
                                                                <h6><a href="#">Jinnat Raihun Sumi</a></h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 col-md-6 col-12">
                                                        <div class="product-item">
                                                            <div class="product-thumb">
                                                                <img src="assets/images/chef/author/09.jpg" alt="food-product">
                                                                <img src="../assets/images/chef/author/09.jpg" alt="food-product">
                                                            </div>
                                                            <div class="product-content">
                                                                <h6><a href="#">Shahana Anam Khan</a></h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="following" class="tabcontent">
                                        <div class="product style-4">
                                            <div class="section-wrapper">
                                                <div class="row justify-content-center">
                                                    <div class="col-lg-4 col-md-6 col-12">
                                                        <div class="product-item">
                                                            <div class="product-thumb">
                                                                <img src="assets/images/chef/author/09.jpg" alt="food-product">
                                                                <img src="../assets/images/chef/author/09.jpg" alt="food-product">
                                                            </div>
                                                            <div class="product-content">
                                                                <h6><a href="#">Shahin Anam Khan</a></h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 col-md-6 col-12">
                                                        <div class="product-item">
                                                            <div class="product-thumb">
                                                                <img src="assets/images/chef/author/07.jpg" alt="food-product">
                                                                <img src="../assets/images/chef/author/07.jpg" alt="food-product">
                                                            </div>
                                                            <div class="product-content">
                                                                <h6><a href="#">Jinnat Raihun</a></h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 col-md-6 col-12">
                                                        <div class="product-item">
                                                            <div class="product-thumb">
                                                                <img src="assets/images/chef/author/08.jpg" alt="food-product">
                                                                <img src="../assets/images/chef/author/08.jpg" alt="food-product">
                                                            </div>
                                                            <div class="product-content">
                                                                <h6><a href="#">Shadhaf Khan</a></h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </div>
						<div class="col-xl-4 col-md-7 col-12">
                            <aside>
                                <div class="popular-chef-widget">
                                    <div class="food-category">
                                        <div class="section-header">
                                            <h6>Browse Food Category</h6>
                                        </div>
                                        <div class="section-wrapper">
                                            @foreach ($cat as $cat)
                                            <div class="food-item">
                                                <div class="food-inner">
                                                    <div class="food-thumb">
                                                        @if (isset($cat->image1))
                                                            <img src="/card_images/{{ $cat->image1 }}" alt="">
                                                        @endif</a></a>
                                                    </div>
                                                    <div class="food-content">
                                                    <a href="{{  route('recipe',['id'=>$cat->id])}}">{{ $cat->foodname }}</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                            @endforeach
                                    </div>
                                    <div class="contact-from">
                                        <div class="section-header">
                                            <h6>Register Now</h6>
                                        </div>
                                        <form action="/">
                                        <form action="{{ route('allChefs.contactChef') }}" method="get">
                                            @csrf
                                            <input type="text" name="name" placeholder="Full Name*">
                                            <input type="email" name="email" placeholder="Your Eamil*">
                                            <input type="number" name="number" placeholder="Phone Number">
                                            <input type="submit" value="Contact Chef">
                                        </form>
                                    </div>
                                    @if (Session::get('finished'))
                                    <div class="alert alert-success" role="alert">
                                        {{ Session::get('finished') }}
                                    </div>
                                 @endif
                                </div>
                            </aside>
                        </div>
					</div>
				</div>
			</div>
		</div>
		<!-- Popular Home Chef Section Ending Here -->
		<!-- Footer Section Start Here -->
		<footer class="footer">
			<div class="bg-shape-style"></div>
			<div class="container">
				<div class="footer-top">
					<div class="footer-area text-center">
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



		<script src="../assets/js/jquery.js"></script>
		<script src="../assets/js/waypoints.min.js"></script>
		<script src="../assets/js/bootstrap.min.js"></script>
		<script src="../assets/js/isotope.pkgd.min.js"></script>
		<script src="../assets/js/wow.min.js"></script>
		<script src="../assets/js/tab.js"></script>
		<script src="../assets/js/lightcase.js"></script>
		<script src="../assets/js/swiper.min.js"></script>
		<script src="../assets/js/jquery.counterup.min.js"></script>
		<script src="../assets/js/functions.js"></script>
</html>
@endsection