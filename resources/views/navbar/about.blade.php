@extends('layouts.app')

@section('title')
	About page
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
        
		<title>@section('page-name')
			About
		@endsection</title>
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
                                <a href="#0">Home</a>
                                <ul>
                                    <li><a href="index.html">Home Page One</a></li>
                                    <li><a href="index-2.html">Home Page Two</a></li>
                                    <li><a href="index-3.html">Home Page Three</a></li>
                                    <li><a href="index-4.html">Home Page Four</a></li>
                                </ul>
                            </li>
                            <li><a class="active" href="about.html">About</a></li>
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
		<header class="header-section header-2 d-xl-block d-none">
            <div class="container">
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
                            <li><a class="active" href="about.html">About</a></li>
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
                    <h3>About Our Mezban</h3>
                    <ul class="breadcrumb">
                        <li><a href="#">Home</a></li>
                        <li>About</li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- Page Header Section Ending Here -->

        
        <!-- About Section Start here -->
		<section class="about about-page padding-tb">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-12">
                        <div class="about-thumb">
                            <img src="assets/images/about/01.png" alt="about-food">
                        </div>
                    </div>
                    <div class="col-lg-6 col-12">
                        <div class="about-content">
                            <div class="section-header">
                                <span>Welcome Mezban</span>
                                <h3>About Restaurant History!</h3>
                            </div>
                            <div class="section-wrapper">
                                <p>Synergistca conceptualize leveraged inte ectual capital through virtual and the a and Proactiviely initiate lrisk highyield a platforms after realtme froms growth that awesome tently matrix robusti method powerm foistcky Sytical concepta leved ntelectua anding capita hrough virtua nteectua that capta the and Proactiviely initiate low risk highyield platforms after realtme froms that there andin Proctive initate low risk high yeld platform aftering Conven iterate optimal paradigms reliable techno</p>
                                <a href="#" class="food-btn style-2"><span>get diraction</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
		<!-- About Section Ending here -->

        <!-- Popular Home Chef Section Start Here -->
		<section class="popular-chef padding-tb" style="background-color: #fafeff;">
			<div class="container">
				<div class="section-header">
					<h3>Popular HomeChef</h3>
					<p>Completely network impactful users whereas next-generation applications engage out thinking via tactical action.</p>
				</div>
				<div class="section-wrapper">
					<div class="row justify-content-center">
						<div class="col-xl-4 col-md-6 col-12">
							<div class="chef-item">
								<div class="chef-inner">
									<div class="chef-thumb">
										<img src="assets/images/chef/01.jpg" alt="food-chef">
									</div>
									<div class="chef-content">
										<div class="chef-author">
											<a href="#">
												<img src="assets/images/chef/author/07.jpg" alt="chef-author">
											</a>
										</div>
										<h5><a href="#">Sanzida laila Trisha</a></h5>
										<p>Month Top Homechef</p>
										<div class="scocial-share">
											<a href="#" class="food-btn"><span><i class="icofont-ui-user"></i> follow</span></a>
										</div>
										<div class="chef-footer">
											<div class="chef-earn chef-con">
												<h6>$290.00</h6>
												<a href="#">Earned</a>
											</div>
											<div class="chef-menu chef-con">
												<h6>96</h6>
												<a href="#">Food Menu</a>
											</div>
											<div class="chef-recipe chef-con">
												<h6>33</h6>
												<a href="#">Recipe</a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-4 col-md-6 col-12">
							<div class="chef-item">
								<div class="chef-inner">
									<div class="chef-thumb">
										<img src="assets/images/chef/02.jpg" alt="food-chef">
									</div>
									<div class="chef-content">
										<div class="chef-author">
											<a href="#">
												<img src="assets/images/chef/author/08.jpg" alt="chef-author">
											</a>
										</div>
										<h5><a href="#">Jinnat Raihun Sumi</a></h5>
										<p>Month Top Homechef</p>
										<div class="scocial-share">
											<a href="#" class="food-btn"><span><i class="icofont-ui-user"></i> follow</span></a>
										</div>
										<div class="chef-footer">
											<div class="chef-earn chef-con">
												<h6>$290.00</h6>
												<a href="#">Earned</a>
											</div>
											<div class="chef-menu chef-con">
												<h6>96</h6>
												<a href="#">Food Menu</a>
											</div>
											<div class="chef-recipe chef-con">
												<h6>33</h6>
												<a href="#">Recipe</a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-4 col-md-6 col-12">
							<div class="chef-item">
								<div class="chef-inner">
									<div class="chef-thumb">
										<img src="assets/images/chef/03.jpg" alt="food-chef">
									</div>
									<div class="chef-content">
										<div class="chef-author">
											<a href="#">
												<img src="assets/images/chef/author/09.jpg" alt="chef-author">
											</a>
										</div>
										<h5><a href="#">Shahana Anam Khan</a></h5>
										<p>Month Top Homechef</p>
										<div class="scocial-share">
											<a href="#" class="food-btn"><span><i class="icofont-ui-user"></i> follow</span></a>
										</div>
										<div class="chef-footer">
											<div class="chef-earn chef-con">
												<h6>$290.00</h6>
												<a href="#">Earned</a>
											</div>
											<div class="chef-menu chef-con">
												<h6>96</h6>
												<a href="#">Food Menu</a>
											</div>
											<div class="chef-recipe chef-con">
												<h6>33</h6>
												<a href="#">Recipe</a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- Popular Home Chef Section Ending Here -->


        <!-- Booking Table Section Start Here -->
        <section class="booking-table padding-tb">
            <div class="shape-1">
                <img src="assets/images/banner/shape/02.png" alt="banner">
            </div>
            <div class="shape-2">
                <img src="assets/images/banner/shape/02.png" alt="banner">
            </div>
            <div class="container">
                <div class="section-header">
                    <h3>Book a Online Table</h3>
                    <p>Completely network impactful users whereas next-generation applications engage out thinking via tactical action.</p>
                </div>
                <div class="section-wrapper">
                    <div class="row justify-content-center align-items-center">
                        <div class="col-lg-6 col-12">
                            <div class="bg-table"></div>
                        </div>
                        <div class="col-lg-6 col-12">
                            <div class="contact-form">
                                <form action="/">
                                    <input type="text" name="name" placeholder="Full Name*">
                                    <input type="email" name="email" placeholder="Your Eamil*">
                                    <input type="text" name="number" placeholder="Phone Number">
                                    <div class="res-tab time-zone">
                                        <select>
                                            <option value="1">Enter Time</option>
                                            <option value="2">10:00 AM</option>
                                            <option value="3">11:00 AM</option>
                                            <option value="4">12:00 PM</option>
                                            <option value="5">01:00 PM</option>
                                            <option value="6">02:00 PM</option>
                                            <option value="7">03:00 PM</option>
                                            <option value="8">04:00 PM</option>
                                            <option value="9">05:00 PM</option>
                                        </select>
                                    </div>
                                    <div class="res-tab table-zone">
                                        <select>
                                            <option value="1">Table Size</option>
                                            <option value="2">2F - 3F</option>
                                            <option value="3">2.5F - 3.5F</option>
                                            <option value="4">3F - 4F</option>
                                            <option value="5">3.5F - 4.5F</option>
                                            <option value="6">4F - 5F</option>
                                            <option value="7">4.5F - 5.5F</option>
                                            <option value="8">5F - 6F</option>
                                            <option value="9">5.5F - 6.5F</option>
                                        </select>
                                    </div>
                                    <input type="date" name="time" data-provide="datepicker">
                                    <textarea name="message" rows="6" placeholder="Message"></textarea>
                                    <button type="submit" class="food-btn style-2"><span>book a table</span></button>
                                </form>
							</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Booking Table Section Ending Here -->

        <!-- Testimonial Section Start Here -->
		<section class="testimonial padding-tb" style="background-image: url(assets/css/bg-image/category-bg.jpg); background-size: cover;">
			<div class="container">
				<div class="section-wrapper">
					<div class="quete-thumb">
						<img src="assets/images/testimonial/icon/01.jpg" alt="food-quete">
					</div>
					<div id="demo" class="carousel slide vert">
						<div class="carousel-inner">
							<div class="carousel-item active">
								<div class="testi-item">
									<p>Extend Accurate Services  Long Term High Impact Experiences Interactiv Streamline Team Compelingly Simplify Solutions Before Technicaly Sound Leadership Skills Creative Holstic Process Improvements Proactively Streamline Alternative Niche Markets Forwor Resource Conveniently cultivate pandemic technology and corporate.</p>
									<h6>Somrat Islam <span>(UI Designer)</span></h6>
									<div class="rating">
										<i class="icofont-star"></i>
										<i class="icofont-star"></i>
										<i class="icofont-star"></i>
										<i class="icofont-star"></i>
										<i class="icofont-star"></i>
									</div>
								</div>
							</div>
							<div class="carousel-item">
								<div class="testi-item">
									<p>Extend Accurate Services  Long Term High Impact Experiences Interactiv Streamline Team Compelingly Simplify Solutions Before Technicaly Sound Leadership Skills Creative Holstic Process Improvements Proactively Streamline Alternative Niche Markets Forwor Resource Conveniently cultivate pandemic technology and corporate.</p>
									<h6>Somrat Islam <span>(UI Designer)</span></h6>
									<div class="rating">
										<i class="icofont-star"></i>
										<i class="icofont-star"></i>
										<i class="icofont-star"></i>
										<i class="icofont-star"></i>
										<i class="icofont-star"></i>
									</div>
								</div>
							</div>
							<div class="carousel-item">
								<div class="testi-item">
									<p>Extend Accurate Services  Long Term High Impact Experiences Interactiv Streamline Team Compelingly Simplify Solutions Before Technicaly Sound Leadership Skills Creative Holstic Process Improvements Proactively Streamline Alternative Niche Markets Forwor Resource Conveniently cultivate pandemic technology and corporate.</p>
									<h6>Somrat Islam <span>(UI Designer)</span></h6>
									<div class="rating">
										<i class="icofont-star"></i>
										<i class="icofont-star"></i>
										<i class="icofont-star"></i>
										<i class="icofont-star"></i>
										<i class="icofont-star"></i>
									</div>
								</div>
							</div>
						</div>
						<div class="carousel-indicators">
							<div data-target="#demo" data-slide-to="0" class="item active">
								<img src="assets/images/testimonial/01.jpg" alt="">
							</div>
							<div data-target="#demo" data-slide-to="1" class="item">
								<img src="assets/images/testimonial/02.jpg" alt="">
							</div>
							<div data-target="#demo" data-slide-to="2" class="item">
								<img src="assets/images/testimonial/03.jpg" alt="">
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- Testimonial Section Ending Here -->
        
        

        <!-- Sponsor Section Start Here -->
		<div class="sponsor-section">
            <div class="container">
                <div class="section-wrapper">
                    <div class="sponsor-slider">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="sponsor-item">
                                    <div class="sponsor-thumb">
                                        <a href="#"><img src="assets/images/sponsor/01.png" alt="food-sopnsor"></a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="sponsor-item">
                                    <div class="sponsor-thumb">
                                        <a href="#"><img src="assets/images/sponsor/02.png" alt="food-sopnsor"></a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="sponsor-item">
                                    <div class="sponsor-thumb">
                                        <a href="#"><img src="assets/images/sponsor/03.png" alt="food-sopnsor"></a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="sponsor-item">
                                    <div class="sponsor-thumb">
                                        <a href="#"><img src="assets/images/sponsor/04.png" alt="food-sopnsor"></a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="sponsor-item">
                                    <div class="sponsor-thumb">
                                        <a href="#"><img src="assets/images/sponsor/05.png" alt="food-sopnsor"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Sponsor Section Ending Here -->

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
		<script src="assets/js/swiper.min.js"></script>
		<script src="assets/js/lightcase.js"></script>
		<script src="assets/js/jquery.counterup.min.js"></script>
        <script src="assets/js/functions.js"></script>
	</body>
</html>
@endsection