@extends('layouts.app')

@section('title')
	Recipe page
@endsection

@section('content')
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">

		<!-- favicon -->
		<link rel="shortcut icon" href="../assets/images/favicon.png" type="image/png">
		<!-- animate scss -->
		<link rel="stylesheet" href="../assets/css/animate.css">
		<!-- bootstarp css -->
		<link rel="stylesheet" href="../assets/css/bootstrap.min.css">
		<!-- icofont -->
		<link rel="stylesheet" href="../assets/css/icofont.min.css">
		<!-- lightcase css -->
		<link rel="stylesheet" href="../assets/css/lightcase.css">
		<!-- swiper css -->
		<link rel="stylesheet" href="../assets/css/swiper.min.css">
		<!-- cusyom scss -->
        <link rel="stylesheet" href="../assets/css/style.css">

		<title>Single Recipe - Mezban Food Template</title>
	</head>

	<body>



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
                                        <a href="#0">Chef</a>
                                        <ul>
                                            <li><a href="homechef.html">Home Chef</a></li>
                                            <li><a href="homechef-single.html">Home Chef Single</a></li>
                                        </ul>
                                    </li>
                                    <li><a class="active" href="recepi-single.html">Single Recipe</a></li>
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
        <header class="header-section header-3 d-xl-block d-none">
            <div class="container">
                <div class="row no-gutters">
                    <div class="header-top w-100">
                        <div class="logo">
                            <a href="index.html"><img src="../assets/images/logo/01.png" alt="logo"></a>
                        </div>
                        <div class="menu-search-form">
                            <div class="widget-search">
                                <form action="/" method="get">
                                    <input type="text" placeholder="Type here and press enter..." name="s">
                                    <button type="submit"><i class="icofont-search-2"></i></button>
                                </form>
                            </div>
                        </div>
                        <div class="scocial-media">
                            <a href="#" class="facebook"><i class="icofont-facebook"></i></a>
                            <a href="#" class="twitter"><i class="icofont-twitter"></i></a>
                            <a href="#" class="linkedin"><i class="icofont-linkedin"></i></a>
                            <a href="#" class="vimeo"><i class="icofont-vimeo"></i></a>
                        </div>
                    </div>
                    <div class="header-bottom w-100">
                        <div class="main-menu">
                            <ul>
                                <li>
                                    <a href="{{  route('home') }}">Home</a>
                                </li>
                                <li><a href="{{  route('about') }}">About</a></li>
                                <li>
                                    <a class="active" href="#0">Pages</a>
                                    <ul>
                                        <li>
                                            <a href="#0">Category</a>
                                            <ul>
                                                <li><a href="{{  route('category') }}">Food Category</a></li>
                                                <li><a href="{{  route('categories') }}">Categories</a></li>

                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#0">Chef</a>
                                            <ul>
                                                <li><a href="{{  route('allChefs') }}">All Chefs</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#0">Blog</a>
                                    <ul>
                                        <li><a href="{{ route('blog') }}">Blog</a></li>
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
                                            <a href="#" class="food-btn style-2"><span>Place Order</span></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="author-account">
                                    <div class="author-select">
                                        <a href="">@include('auth.check')</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- header section ending -->


        <!-- Blog Page Section Start Here -->
        <div class="blog-section blog-single recepi-single padding-tb bg-body">
            <div class="container">
                <div class="section-wrapper">
                    <div class="row justify-content-center">
                        <div class="col-lg-8 col-12">
                            <article>
                                <div class="post-item">
                                    <div class="post-inner">
                                        <div class="post-thumb">
                                            <div id="demo" class="carousel slide vert">
                                                <div class="carousel-inner">
                                                    <div class="carousel-item active">
                                                        <div class="sli-recepi-thumb">
                                                            @if (isset($card->image1))
																<img src="/card_images/{{ $card->image1 }}" alt="">
															@endif
                                                        </div>
                                                    </div>
                                                    <div class="carousel-item">
                                                        <div class="sli-recepi-thumb">
                                                            <img src="../assets/images/shop/single/02.jpg" alt="shop-single">
                                                        </div>
                                                    </div>
                                                    <div class="carousel-item">
                                                        <div class="sli-recepi-thumb">
                                                            <img src="../assets/images/shop/single/03.jpg" alt="shop-single">
                                                        </div>
                                                    </div>
                                                    <div class="carousel-item">
                                                        <div class="sli-recepi-thumb">
                                                            <img src="../assets/images/shop/single/04.jpg" alt="shop-single">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="carousel-indicators">
                                                    <div data-target="#demo" data-slide-to="0" class="item active">
                                                        @if (isset($card->image1))
                                                        <img src="/card_images/{{ $card->image1 }}" alt="">
                                                    @endif
                                                    </div>
                                                    <div data-target="#demo" data-slide-to="1" class="item">
                                                        @if (isset($card->image1))
																<img src="/card_images/{{ $card->image1 }}" alt="">
															@endif
                                                    </div>
                                                    <div data-target="#demo" data-slide-to="2" class="item">
                                                        @if (isset($card->image1))
																<img src="/card_images/{{ $card->image1 }}" alt="">
															@endif
                                                    </div>
                                                    <div data-target="#demo" data-slide-to="3" class="item">
                                                        @if (isset($card->image1))
																<img src="/card_images/{{ $card->image1 }}" alt="">
															@endif
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="post-content">
                                            <div class="meta-tag">
                                                <div class="categori">
                                                    <a href="{{ route('recipe',['id'=>$card->id]) }}">{{  $card->foodname }}</a>
                                                </div>
                                            </div>
                                            <h4>{{ $card->name }}</h4>
                                            <div class="meta-post">
                                                <ul>
                                                    <li>
                                                        <i class="icofont-ui-user"></i>
                                                        <a  class="admin">Serves : {{ $card->serves }}</a>
                                                    </li>
                                                    <li>
                                                        <i class="icofont-clock-time"></i>
                                                        <a  class="date">Prep Time : {{ $card->prep_time }} min</a>
                                                    </li>
                                                    <li>
                                                        <i class="icofont-clock-time"></i>
                                                        <a  class="date">Cook Time : {{ $card->cook_time }} min </a>
                                                    </li>
                                                    <li>
                                                        <i class="icofont-signal"></i>
                                                        <a  class="skill">Skill lavel : {{ $card->skill_level }}</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <p>{{ $card->description }}</p>
                                            <div class="make-product">
                                                <div class="left">
                                                    <div class="title">
                                                        <h6>Ingredients</h6>
                                                        <p></p>
                                                    </div>
                                                    <ul>
                                                        <li class="active">{{ $card->ingredients }}</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="product">
                                    <h4 class="title-border">Related Recipes</h4>
                                    <div class="section-wrapper">
                                        <div class="row no-gutters">
                                            <div class="col-xl-3 col-md-6 col-12">
                                                <div class="product-item">
                                                    <div class="product-thumb">
                                                        <img src="../assets/images/food-recipe/01.jpg" alt="food-product">
                                                    </div>
                                                    <div class="product-content">
                                                        <h6><a href="#">How To Cook Roast Beef</a></h6>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-3 col-md-6 col-12">
                                                <div class="product-item">
                                                    <div class="product-thumb">
                                                        <img src="../assets/images/food-recipe/02.jpg" alt="food-product">
                                                    </div>
                                                    <div class="product-content">
                                                        <h6><a href="#">How To Cook Roast Beef</a></h6>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-3 col-md-6 col-12">
                                                <div class="product-item">
                                                    <div class="product-thumb">
                                                        <img src="../assets/images/food-recipe/03.jpg" alt="food-product">
                                                    </div>
                                                    <div class="product-content">
                                                        <h6><a href="#">How To Cook Roast Beef</a></h6>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-3 col-md-6 col-12">
                                                <div class="product-item">
                                                    <div class="product-thumb">
                                                        <img src="../assets/images/food-recipe/02.jpg" alt="food-product">
                                                    </div>
                                                    <div class="product-content">
                                                        <h6><a href="#">How To Cook Roast Beef</a></h6>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div id="comments" class="comments">
                                    <h4 class="title-border">02 Comments</h4>
                                    <ul class="comment-list">
                                        <li class="comment" id="li-comment-1">
                                            <div class="com-thumb">
                                                <img alt="" src="../assets/images/chef/author/07.jpg" srcset="../assets/images/chef/author/07.jpg" class="avatar avatar-90 photo" height="90" width="90">          
                                            </div>
                                            <div class="com-content">
                                                <div class="com-title">
                                                    <div class="com-title-meta">
                                                        <h6><a href="http://Sk" rel="external nofollow" class="url">Linsa Faith</a></h6>
                                                        <span> October 5, 2018 at 12:41 pm </span>
                                                    </div>
                                                    <span class="reply">
                                                        <a rel="nofollow" class="comment-reply-link" href="#" aria-label="Reply to Masum"><i class="icofont-reply-all"></i>Reply</a>        
                                                    </span>
                                                </div>
                                                <p>The inner sanctuary, I throw myself down among the tall grass bye the trckli stream and, as I lie close to the earth</p>
                                                <div class="reply-btn"></div>
                                            </div>
                                            <ul class="comment-list">
                                                <li class="comment" id="li-comment-2">
                                                    <div class="com-thumb">
                                                        <img alt="" src="../assets/images/chef/author/08.jpg" srcset="../assets/images/chef/author/08.jpg" class="avatar avatar-90 photo" height="90" width="90">
                                                    </div>
                                                    <div class="com-content">
                                                        <div class="com-title">
                                                            <div class="com-title-meta">
                                                                <h6><a href="http://Sk" rel="external nofollow" class="url">James Jusse</a></h6>
                                                                <span> October 5, 2018 at 12:41 pm </span>
                                                            </div>
                                                            <span class="reply">
                                                                <a rel="nofollow" class="comment-reply-link" href="#" aria-label="Reply to Masum"><i class="icofont-reply-all"></i>Reply</a>                        
                                                            </span>
                                                        </div>
                                                        <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings spring which I enjoy with my whole heart</p>
                                                        <div class="reply-btn"></div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>

                                <div class="comment-respond">
                                    <h4 class="title-border">Leave a Comment</h4>
                                    <div class="add-comment">
                                    <form action="{{ route('comment',['id'=>$card->id]) }}" class="comment-form" method="get">
                                            @csrf
                                            <input name="name" type="text" placeholder="Name">
                                            <input name="email" type="text" placeholder="Email">
                                            <textarea id="comment-reply" name="comment" rows="5" placeholder="Type Here Your Comment"></textarea>
                                            <p class="comment-form-cookies-consent"><input id="wp-comment-cookies-consent" name="wp-comment-cookies-consent" type="checkbox" value="yes"><label for="wp-comment-cookies-consent">Save my name, email, and website in this browser for the next time I comment.</label></p>
                                            <button type="submit" class="food-btn"><span>send comment</span></button>
                                        </form>
                                    </div>			
                                </div>
                            </article>
                        </div>
                        <div class="col-lg-4 col-md-7 col-12">
                            <aside>

                                <div class="widget recipe-categori">
                                    <div class="widget-header">
                                        <h5>Popular Categories</h5>
                                    </div>
                                    <div class="widget-wrapper section-wrapper">
                                        <div class="row justify-content-center no-gutters">
                                            @foreach ($cat as $cat)
                                            <div class="col-6">
                                                <div class="recipe-item">
                                                    <div class="recipe-thumb">
                                                        @if (isset($card->image1))
											                <img src="/card_images/{{ $card->image1 }}" alt="">
										                @endif
                                                    </div>
                                                    <div class="recipe-content">
                                                        <a href="{{ route('recipe',['id'=>$card->id]) }}">{{  $card->foodname }}</a>
                                                    </div>
                                                </div>
                                            </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </aside>
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
							<a href="index.html"><img src="../assets/images/header/footer/01.png" alt="footer-logo"></a>
						</div>
						<div class="scocial-media">
							<a href="#" class="facebook"><i class="icofont-facebook"></i></a>
							<a href="#" class="twitter"><i class="icofont-twitter"></i></a>
							<a href="#" class="linkedin"><i class="icofont-linkedin"></i></a>
							<a href="#" class="vimeo"><i class="icofont-vimeo"></i></a>
						</div>
						<div class="footer-menu">
							<ul>
								<li><a href="{{ route('home') }}">Home</a></li>
								<li><a href="{{ route('category') }}">Menus</a></li>
								<li><a href="{{ route('allChefs') }}">Chefs</a></li>
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
        <script src="../assets/js/swiper.min.js"></script>
        <script src="../assets/js/lightcase.js"></script>
        <script src="../assets/js/jquery.counterup.min.js"></script>
        <script src="../assets/js/functions.js"></script>
    </body>
</html>
@endsection