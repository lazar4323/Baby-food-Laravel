@extends('layouts.app')

@section('title')
	Food-menu page
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
        
		<title>Mezban HomeChef Single</title>
	</head>

	<body>
		<!-- preloader -->
		<div class="preloader"><div class="load loade"><hr/><hr/><hr/><hr/></div></div>
		<!-- preloader -->

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
						<a href="index.html"><img src="assets/images/logo/01.png" alt="logo"></a>
					</div>
					<div class="main-menu">
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
					</div>
					<div class="author-option">
						<div class="author-area">
							<div class="city-lang">
								<img src="assets/images/header/01.png" alt="city-lang">
								<select name="lang" id="lang">
									<option value="1">ENG</option>
									<option value="2">BAN</option>
									<option value="3">ESP</option>
								</select>
							</div>
							<div class="cart-option">
								<img src="assets/images/header/cart.png" alt="shop-cart">
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
							<div class="author-account">
								<div class="author-icon">
									<img src="assets/images/chef/author/08.jpg" alt="author">
								</div>
								<div class="author-select">
									<select name="author-select" id="author-select">
										<option value="1">My Account </option>
										<option value="2">Log Out </option>
									</select>
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
                <img src="assets/images/banner/shape/01.png" alt="banner">
            </div>
            <div class="shape-2">
                <img src="assets/images/banner/shape/02.png" alt="banner">
            </div>
            <div class="container">
                <div class="page-title text-center">
                    <h3>Sanzida Laila Trisha</h3>
                    <ul class="breadcrumb">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">HomeChef</a></li>
                        <li>Sanzida Laila Trisha</li>
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
                                            <img src="assets/images/chef/01.jpg" alt="food-chef">
                                        </div>
                                        <div class="chef-content">
                                            <div class="chef-author">
                                                <img src="assets/images/chef/author/09.jpg" alt="chef-author">
                                            </div>
                                            <div class="chef-desc">
                                                <div class="chef-desc-top">
                                                    <div class="title">
                                                        <h5>Sanzida laila Trisha</h5>
                                                        <p>Month Top <a href="#">Homechef</a></p>
                                                    </div>
                                                    <div class="scocial-share">
                                                        <a href="#" class="facebook"><i class="icofont-facebook"></i></a>
                                                        <a href="#" class="food-btn"><span><i class="icofont-ui-user"></i> follow</span></a>
                                                    </div>
                                                </div>
                                                <div class="chef-desc-middle">
                                                    <p>I love to cook for my friends and family . Special expertise of Making Pitha , achar , local food and have passonate to produce and promote organic food...</p>
                                                    <ul>
                                                        <li><span>Location</span>: 240 Block Road Mohakhali 1209</li>
                                                        <li><span>Joined</span>: 02 December 2018</li>
                                                        <li><span>Delivered</span>: 248+ Orders</li>
                                                        <li><span>Earned</span>: Tk 1,21,000/=</li>
                                                    </ul>
                                                </div>
                                                <div class="chef-footer">
                                                    <div class="chef-menu chef-con">
                                                        <h6>296</h6>
                                                        <a href="#">Food Menu</a>
                                                    </div>
                                                    <div class="chef-recipe chef-con">
                                                        <h6>33</h6>
                                                        <a href="#">Recipe</a>
                                                    </div>
                                                    <div class="chef-followers chef-con">
                                                        <h6>504</h6>
                                                        <a href="#">Followers</a>
                                                    </div>
                                                    <div class="chef-following chef-con">
                                                        <h6>333</h6>
                                                        <a href="#">Following</a>
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
                                        <li class="tablinks" onclick="openCity(event, 'recipe')">
                                            <span>Recipes</span>
                                        </li>
                                        <li class="tablinks" onclick="openCity(event, 'followers')">
                                            <span>Followers</span>
                                        </li>
                                        <li class="tablinks" onclick="openCity(event, 'following')">
                                            <span>Following</span>
                                        </li>
                                    </ul>
                                    <div id="food_menu" class="tabcontent">
                                        <div class="popular-foods">
                                            <div class="section-wrapper">
                                                <div class="row justify-content-center">
                                                    <div class="col-md-6 col-12">
                                                        <div class="p-food-item">
                                                            <div class="p-food-inner">
                                                                <div class="p-food-thumb">
                                                                    <img src="assets/images/popular-food/01.jpg" alt="p-food">
                                                                    <span>$20 - $30</span>
                                                                </div>
                                                                <div class="p-food-content">
                                                                    <div class="p-food-author">
                                                                        <a href="#"><img src="assets/images/chef/author/01.jpg" alt="food-author"></a>
                                                                    </div>
                                                                    <h6><a href="#">Dragon Express</a></h6>
                                                                    <div class="p-food-group">
                                                                        <span>Type of food :</span>
                                                                        <a href="#">Beef Roast</a>
                                                                        <a href="#">Pizza</a>
                                                                        <a href="#">Stakes</a>
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
                                                    <div class="col-md-6 col-12">
                                                        <div class="p-food-item">
                                                            <div class="p-food-inner">
                                                                <div class="p-food-thumb">
                                                                    <img src="assets/images/popular-food/02.jpg" alt="p-food">
                                                                    <span>$20 - $30</span>
                                                                </div>
                                                                <div class="p-food-content">
                                                                    <div class="p-food-author">
                                                                        <a href="#"><img src="assets/images/chef/author/02.jpg" alt="food-author"></a>
                                                                    </div>
                                                                    <h6><a href="#">Dragon Express</a></h6>
                                                                    <div class="p-food-group">
                                                                        <span>Type of food :</span>
                                                                        <a href="#">Beef Roast</a>
                                                                        <a href="#">Pizza</a>
                                                                        <a href="#">Stakes</a>
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
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="recipe" class="tabcontent">
                                        <div class="recent-recipe">
                                            <div class="section-wrapper">
                                                <div class="row justify-content-center">
                                                    <div class="col-md-6 col-12">
                                                        <div class="recipe-item">
                                                            <div class="recipe-thumb">
                                                                <a href="#"> <img src="assets/images/food-recipe/01.jpg" alt="food-recipe"></a>
                                                            </div>
                                                            <div class="recipe-content">
                                                                <div class="meta-tag">
                                                                    <div class="categori">
                                                                        <a href="#">Chicken</a>
                                                                    </div>
                                                                    <div class="rating">
                                                                        <i class="icofont-star"></i>
                                                                        <i class="icofont-star"></i>
                                                                        <i class="icofont-star"></i>
                                                                        <i class="icofont-star"></i>
                                                                        <i class="icofont-star"></i>
                                                                        <span>(5.5)</span>
                                                                    </div>
                                                                </div>
                                                                <h6><a href="#">Food Corner: Top Japanese Best Restaurants for Sushi</a></h6>
                                                                <div class="meta-post">
                                                                    <ul>
                                                                        <li>
                                                                            <img src="assets/images/meta-post/recipe/01.jpg" alt="food-recipe">
                                                                            <a href="#" class="author">Hunter Max </a>
                                                                        </li>
                                                                        <li>
                                                                            <i class="icofont-clock-time"></i>
                                                                            <a href="#" class="date">Time: 30 min</a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-12">
                                                        <div class="recipe-item">
                                                            <div class="recipe-thumb">
                                                                <a href="#"> <img src="assets/images/food-recipe/02.jpg" alt="food-recipe"></a>
                                                            </div>
                                                            <div class="recipe-content">
                                                                <div class="meta-tag">
                                                                    <div class="categori">
                                                                        <a href="#">Chicken</a>
                                                                    </div>
                                                                    <div class="rating">
                                                                        <i class="icofont-star"></i>
                                                                        <i class="icofont-star"></i>
                                                                        <i class="icofont-star"></i>
                                                                        <i class="icofont-star"></i>
                                                                        <i class="icofont-star"></i>
                                                                        <span>(5.5)</span>
                                                                    </div>
                                                                </div>
                                                                <h6><a href="#">Food Corner: Top Japanese Best Restaurants for Sushi</a></h6>
                                                                <div class="meta-post">
                                                                    <ul>
                                                                        <li>
                                                                            <img src="assets/images/meta-post/recipe/01.jpg" alt="food-recipe">
                                                                            <a href="#" class="author">Hunter Max </a>
                                                                        </li>
                                                                        <li>
                                                                            <i class="icofont-clock-time"></i>
                                                                            <a href="#" class="date">Time: 30 min</a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
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
                                            <div class="food-item">
                                                <div class="food-inner">
                                                    <div class="food-thumb">
                                                        <a href="#"><img src="assets/images/food/01.png" alt="food"></a>
                                                    </div>
                                                    <div class="food-content">
                                                        <a href="#">Breakfast</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="food-item">
                                                <div class="food-inner">
                                                    <div class="food-thumb">
                                                        <a href="#"><img src="assets/images/food/02.png" alt="food"></a>
                                                    </div>
                                                    <div class="food-content">
                                                        <a href="#">Lunch</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="food-item">
                                                <div class="food-inner">
                                                    <div class="food-thumb">
                                                        <a href="#"><img src="assets/images/food/03.png" alt="food"></a>
                                                    </div>
                                                    <div class="food-content">
                                                        <a href="#">Dinner</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="food-item">
                                                <div class="food-inner">
                                                    <div class="food-thumb">
                                                        <a href="#"><img src="assets/images/food/04.png" alt="food"></a>
                                                    </div>
                                                    <div class="food-content">
                                                        <a href="#">Drink</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="food-item">
                                                <div class="food-inner">
                                                    <div class="food-thumb">
                                                        <a href="#"><img src="assets/images/food/05.png" alt="food"></a>
                                                    </div>
                                                    <div class="food-content">
                                                        <a href="#">Juice</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="food-item">
                                                <div class="food-inner">
                                                    <div class="food-thumb">
                                                        <a href="#"><img src="assets/images/food/06.png" alt="food"></a>
                                                    </div>
                                                    <div class="food-content">
                                                        <a href="#">Coffee</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="food-item">
                                                <div class="food-inner">
                                                    <div class="food-thumb">
                                                        <a href="#"><img src="assets/images/food/07.png" alt="food"></a>
                                                    </div>
                                                    <div class="food-content">
                                                        <a href="#">Tea</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="food-item">
                                                <div class="food-inner">
                                                    <div class="food-thumb">
                                                        <a href="#"><img src="assets/images/food/08.png" alt="food"></a>
                                                    </div>
                                                    <div class="food-content">
                                                        <a href="#">Beef Roast</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="contact-from">
                                        <div class="section-header">
                                            <h6>Register Now</h6>
                                        </div>
                                        <form action="/">
                                            <input type="text" name="name" placeholder="Full Name*">
                                            <input type="email" name="email" placeholder="Your Eamil*">
                                            <input type="number" name="number" placeholder="Phone Number">
                                            <input type="submit" value="Contact Chef">
                                        </form>
                                    </div>
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
								<li><a href="#">Home</a></li>
								<li><a href="#">How it works?</a></li>
								<li><a href="#">Menus</a></li>
								<li><a href="#">Chefs</a></li>
								<li><a href="#">Recipes</a></li>
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
		<script src="assets/js/tab.js"></script>
		<script src="assets/js/lightcase.js"></script>
		<script src="assets/js/swiper.min.js"></script>
		<script src="assets/js/jquery.counterup.min.js"></script>
		<script src="assets/js/functions.js"></script>
	</body>
</html>
@endsection