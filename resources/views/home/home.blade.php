@extends('layouts.app')

@section('title')
	Home page
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
		<!-- custom scss -->
		<link rel="stylesheet" href="assets/css/style.css">

		<title>Home</title>
	</head>

	<body>
		
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
                                <a class="active" href="#0">Home</a>
                                <ul>
                                    <li><a class="active" href="index.html">Home Page One</a></li>
                                </ul>
                            </li>
                            <li><a href="about.html">About</a></li>
                            <li>
                                <a href="#0">Pages</a>
                                <ul>
                                    <li>
                                        <a href="#0">Category</a>
                                        <ul>
                                            <li><a href="food-menu.html">Food Category</a></li>
                                            <li><a href="menu-card.html">Categories</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#0">Chef</a>
                                        <ul>
                                            <li><a href="{{ route('allChefs') }}">Home Chef</a></li>
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
								<a href="">@include('auth.check')</a><br>
							</li>
                            <li>
							<a class="{{ (route('home')) ? 'active' : '' }}  " href="{{ route('home') }}">Home</a>
                            </li>
                            <li><a class="#0" href="{{ route('about') }}">About</a></li>
                            <li>
                                <a href="#0">Pages</a>
                                <ul>
                                    <li>
                                        <a href="#0">Category</a>
                                        <ul>
                                            <li><a  href="{{ route('category') }}"">Food Category</a></li>
                                            <li><a href="{{ route('categories') }}">Categories</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#0">Chef</a>
                                        <ul>
                                            <li><a href="{{ route('allChefs') }}">All Chefs</a></li>
                                            <li><a href="{{ route('chefSingle') }}">Home Chef Single</a></li>
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
                                    <li><a href="cart-page.html">Cart Page</a></li>
                                </ul>
                            </li>						
                            <li><a href="contact-us.html">Contact</a></li>
                        </ul>
					</div>
					<div class="author-option">
						<div class="author-area">
							<div class="cart-option">	
								<img src="assets/images/header/cart.png" alt="shop-cart">
							<div class="count-item"></div>
								<div class="cart-content">
									<div class="cart-title">
										<div class="add-item">Items Added</div> 
										<div class="list-close"><a href="#">Close</a></div>
									</div>
									<div class="cart-scr scrollbar">
										<div class="cart-con-item">
											{{-- @foreach ($card as $card)
											<div class="cart-item">
												<div class="cart-inner">
													<div class="cart-top">
														<div class="thumb">
															<a href="#">
															@if (isset($card->image1))
																<img src="/card_images/{{ $card->image1 }}" alt="">
															@endif</a> 
														</div>
														<div class="content">
														<a href="#">{{ $card->foodname }}</a>
														<a href="#">{{ $card->price }} din</a>
														</div>
														<div class="remove-btn">
															<a href="#"><i class="icofont-close"></i></a>
														</div>
														<a href="">{{ $card->name }}</a>
													</div>
													<div class="cart-bottom">
														<div class="sing-price"></div>
														<div class="cart-plus-minus"><div class="dec qtybutton">-</div>
															<div class="dec qtybutton">-</div>
															<input class="cart-plus-minus-box" type="text" name="qtybutton" value="1">
															<div class="inc qtybutton">+</div>
														<div class="inc qtybutton">+</div></div>
														<div class="total-price"></div>
													</div>
												</div>
											</div>
											@endforeach --}}
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
						<a href="{{ route('home.addDeposit') }}" class="btn btn-secondary">Add deposit</a>
						<a class="btn btn-info " href="">Deposit: {{ (Auth::user()->deposit) ? Auth::user()->deposit : 0 }}</a>
						<a class="btn btn-warning" href="{{ route('home.showCardForm') }}">Create card</a>
						</div>
					</div>
				</div>
			</div>
		</header>
		<!-- header section ending -->

		<!-- Banner Section Start Here -->
		<section class="banner">
			<div class="shape-1">
				<img style="width: 791px; height: 550px;" src="assets/images/banner/shape/01.png" alt="banner">
			</div>
			<div class="shape-2">
				<img  src="assets/images/banner/shape/02.png" alt="banner">
			</div>
			<div class="banner-area">
				<div class="container">
					<div class="row">
						<div class="col-8">
							<div class="banner-content">
								<h2 style="color: #FB524F; margin-left: 200px; margin-bottom: 20px;">Baby food...</h2>
								<form action="{{ route('home') }}" method="get">
									<input type="search" name="search" placeholder="Enter your restaurant name">
									<button type="submit"><i class="icofont-search-2"></i></button>		
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- Banner Section Ending Here -->


		<!-- Food Catagory Section Start here -->
		<section class="food-category padding-tb" style="background-image: url(assets/css/bg-image/category-bg.jpg); background-size: cover;">
			<div class="container">
				<div class="food-box">
					<div class="section-header">
						<h3>Browse Food Category</h3>
						<p>Completely network impactful users whereas next-generation applications engage out thinking via tactical action.</p>
					</div>
					<div class="section-wrapper">
						<div class="food-slider">
							<div class="swiper-wrapper">
								@foreach ($all_cards as $card)
									<div class="food-item">
										<div class="food-thumb">
											<a href="#">
											@if (isset($card->image1))
												<img src="/card_images/{{ $card->image1 }}" alt="">
											@endif</a>
										</div>
										<div class="food-content">
											<a href="#">{{ $card->foodname }}</a>
										</div>
								</div>
								@endforeach
							</div>
						</div>
						<div class="food-slider-next"><i class="icofont-double-left"></i></div>
						<div class="food-slider-prev"><i class="icofont-double-right"></i>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- Food Catagory Section Ending here -->

		<!-- Food Services Section Start here -->
		<section class="food-services padding-tb">
			<div class="container">
				<div class="section-header">
					<h3>How it Works</h3>
					<p>Completely network impactful users whereas next-generation applications engage out thinking via tactical action.</p>
				</div>
				<div class="section-wrapper">
					<div class="service-item">
						<div class="service-inner">
							<div class="service-thumb">
								<img src="assets/images/service/01.jpg" alt="food-service">
								<span>01 step</span>
							</div>
							<div class="service-content">
								<h6><a href="#">Choose Your Favorite</a></h6>
							</div>
						</div>
					</div>
					<div class="service-item">
						<div class="service-inner">
							<div class="service-thumb">
								<img src="assets/images/service/02.jpg" alt="food-service">
								<span>02 step</span>
							</div>
							<div class="service-content">
								<h6><a href="#">We Deliver Your Meals</a></h6>
							</div>
						</div>
					</div>
					<div class="service-item">
						<div class="service-inner">
							<div class="service-thumb">
								<img src="assets/images/service/03.jpg" alt="food-service">
								<span>03 step</span>
							</div>
							<div class="service-content">
								<h6><a href="#">Cash on Delivery</a></h6>
							</div>
						</div>
					</div>
					<div class="service-item">
						<div class="service-inner">
							<div class="service-thumb">
								<img src="assets/images/service/04.jpg" alt="food-service">
								<span>04 step</span>
							</div>
							<div class="service-content">
								<h6><a href="#">Eat And Enjoy</a></h6>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- Food Services Section Ending here -->

		<!-- Popular Food Section Start Here -->
		<section class="popular-foods padding-tb" style="background-color: #fafeff;">
			<div class="container">
				<div class="section-header">
					<h3>Most Popular Foods</h3>
					<p>Completely network impactful users whereas next-generation applications engage out thinking via tactical action.</p>
				</div>
			<div class="section-wrapper">
				<div class="row">
					@foreach ($all_cards as $card)
					<div class="col-xl-4 col-md-6 col-12">
						<div class="p-food-item">
							<div class="p-food-inner">
								<div class="p-food-thumb">
									@if (isset($card->image1))
										<img src="/card_images/{{ $card->image1 }}" alt="">
									@endif
	
									<span>{{ $card->price }} din</span>
								</div>
								<div class="p-food-content">
									<div class="p-food-author">
										<a href="#">
										@if(isset($card->image2))
											<img src="/card_images/{{ $card->image2 }}" alt="">
										@endif
										</a>
									</div>	
									<h6><a href="#">{{ $card->name }}</a></h6>
									<div class="p-food-group">
									<span>Type of food : </span>
										<a href="#">{{ $card->foodname }}</a>
									</div>
									<ul class="del-time">
										<li>
											<i class="icofont-cycling-alt"></i>
											<div class="time-tooltip">
												<div class="time-tooltip-holder">
													<span class="tooltip-label">Delivery time</span>
													<span class="tooltip-info">Your order will be delivered in {{ $rand = rand(30, 120) }} minutes.</span>
												</div>
											</div>
										</li>
										<li>
											<i class="icofont-stopwatch"></i>
											<div class="time-tooltip">
												<div class="time-tooltip-holder">
													<span class="tooltip-label">Pickup time</span>
													<span class="tooltip-info">You can pickup order in {{ $rand-5 }} minutes.</span>
												</div>
											</div>
										</li>
									</ul>
									<div class="p-food-footer">
										<div class="">
											<a href="{{ route('home.deleteCard',['id'=>$card->id])}}" class="btn btn-danger m-2 " >Delete card</a>
										</div>
										<div class="">
											<a href="{{ route('home.buyFood',['id'=>$card->id])}}" class="btn btn-success m-2 " >Buy item</a>
										</div>
										<div class="">
											<a href="{{ route('home.editCardView',['id'=>$card->id])}}" class="btn btn-info m-2 " >Edit card</a>
										</div>
										<div class="">
											<a href="{{ route('home')}}" class="btn btn-primary m-2 " >Add to cart</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					@endforeach		
				</div>
			</div>
			@if (Session::get('failed'))
				<div class="alert alert-danger" role="alert">
					{{ Session::get('failed') }}
				</div>
			 @endif
			 @if (Session::get('completed'))
			 <div class="alert alert-success" role="alert">
				 {{ Session::get('completed') }}
			 </div>
		  @endif
		</section>
		<!-- Popular Food Section Ending Here -->

		<!-- Food Apps Section Start here -->
		<!-- Food Apps Section Start here -->

		<!-- Popular Food Section Style 2 Start Here -->
		<section class="popular-foods padding-tb">
			<div class="container">
				<div class="section-header">
					<h3>Popular Weekly Foods</h3>
					<p>Completely network impactful users whereas next-generation applications engage out thinking via tactical action.</p>
				</div>
				<div class="section-wrapper">
					<div class="row">
						@foreach ($all_cards as $card)
						<div class="col-lg-6 col-12">
							<div class="p-food-item style-2">
								<div class="p-food-inner">
									<div class="p-food-thumb">
										@if (isset($card->image1))
											<img src="/card_images/{{ $card->image1 }}" alt="">
										@endif
										<span>{{ $card->price}} din</span>
									</div>
									<div class="p-food-content">
										<h6><a href="#">{{$card->name}}</a></h6>
										<div class="p-food-group">
										<span>Type of food : </span>
											<a href="#">{{ $card->foodname }}</a>
										</div>
										<ul class="del-time">
											<li><a href="#">
											@if (isset($card->image2))
												<img src="/card_images/{{ $card->image2 }}" alt="">
											@endif
										</a></li>
											<li>
												<i class="icofont-cycling-alt"></i>
												<div class="time-tooltip">
													<div class="time-tooltip-holder">
														<span class="tooltip-label">Delivery time</span>
														<span class="tooltip-info">Your order will be delivered in 20 minutes.</span>
													</div>
												</div>
											</li>
											<li>
												<i class="icofont-stopwatch"></i>
												<div class="time-tooltip">
													<div class="time-tooltip-holder">
														<span class="tooltip-label">Pickup time</span>
														<span class="tooltip-info">You can pickup order in 20 minutes.</span>
													</div>
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
		</section>
		<!-- Popular Food Section Style 2 Ending Here -->


		<!-- top Restaurants section start here -->
		<section class="restaurant-section padding-tb">
			<div class="container">
				<div class="section-header">
					<h3>Top Restaurants</h3>
					<p>Completely network impactful users whereas next-generation applications engage out thinking via tactical action.</p>
				</div>
			<div class="section-wrapper">
				<div class="top-restaurant">
					@foreach ($all_cards as $card)
					<div class="restaurant-item">
						<div class="restaurant-inner">
							<div class="restaurant-thumb">
								<a href="#">
									@if (isset($card->image2))	
										<img src="/card_images/{{ $card->image2 }}" alt="">
									@endif
								</a>
							</div>
						</div>
					</div>
					@endforeach
				</div>
			</div>
		</section>
		<!-- top Restaurants section ending here -->

		
		<!-- Popular Home Chef Section Start Here -->
		<section class="popular-chef padding-tb" style="background-color: #fafeff;">
			<div class="container">
				<div class="section-header">
					<h3>Popular HomeChef</h3>
					<p>Completely network impactful users whereas next-generation applications engage out thinking via tactical action.</p>
				</div>
				<div class="section-wrapper">
					<div class="row justify-content-center">
					@foreach ($chefs as $chef)
					<div class="col-xl-4 col-md-6 col-12">
						<div class="chef-item">
							<div class="chef-inner">
								<div class="chef-thumb">
									@if (isset($chef->image1))
									<img src="/chef_images/{{ $chef->image1 }}" alt="">
								@endif
								</div>
								<div class="chef-content">
									<div class="chef-author">
										<a href="#">
											@if (isset($chef->image2))
											<img src="/chef_images/{{ $chef->image2 }}" alt="">
										@endif
										</a>
									</div>
									<h5><a href="#">{{ $chef->name }}</a></h5>
								<p>{{ $chef->position }}</p>
									<div class="scocial-share">
										<a href="#" class="food-btn"><span><i class="icofont-ui-user"></i> follow</span></a>
									</div>
									<div class="chef-footer">
										<div class="chef-earn chef-con">
											<h6>{{ rand(100,300) }}$</h6>
											<a href="#">Earned</a>
										</div>
										<div class="chef-menu chef-con">
											<h6>{{ rand(30,35) }}</h6>
											<a href="#">Age</a>
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
					@endforeach		
				</div>
			</div>
			<center><a href="{{ route('home.chefForm') }}" class="btn btn-secondary mt-5">Add home chef</a></center>
		</section>
		<!-- Popular Home Chef Section Ending Here -->
		
		<!-- Testimonial Section Start Here -->
		<!-- Testimonial Section Ending Here -->

		<!-- Blog Section Start here -->
		<section class="blog-section padding-tb">
			<div class="container">
				<div class="section-header">
					<h3>Most Popular Blog</h3>
					<p>Completely network impactful users whereas next-generation applications engage out thinking via tactical action.</p>
				</div>
				<div class="section-wrapper">
					<div class="row">
					@foreach ($blogs as $blog)
						<div class="col-xl-6 col-12 blog-right">
							<div class="col-md-13 col-12">
								<div class="post-item">
									<div class="post-inner">
										<div class="post-thumb">
											<a href="#">
												<img src="/chef_images/16333772181.png" alt="blog-image">
											</a>
										</div>
										<div class="post-content">
											<h6><a href="#">{{ $blog->title }}</a></h6>
											<a href="#" class="date">{{ $blog->created_at }}</a>
										</div>
									</div>
								</div>S
							</div>
						</div>
					</div>
					@endforeach
					<div class="all-blog-btn text-center">
						{{-- <a href="" class="food-btn"><span>more blog posts</span></a> --}}
						{{-- staviti link ka svim blogovima --}}
						{{-- !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!! --}}
					</div>
				</div>
			</div>
		</section>
		<!-- Blog Section Ending here -->

		<!-- Footer Section Start Here -->
		<footer class="footer">
			<div class="bg-shape-style"></div>
			<div class="container">
				<div class="footer-top">
					<div class="footer-area text-center">
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
