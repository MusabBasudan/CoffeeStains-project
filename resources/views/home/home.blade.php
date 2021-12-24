@extends('home.home_master')
@section('content')
<!-- SLIDER-BANNER-AREA START -->
<section class="slider-banner-area clearfix">
	<!-- Sidebar-social-media start -->
	<div class="sidebar-social d-none d-md-block">
		<div class="table">
			<div class="table-cell">
				<ul>
					<li><a href="#" target="_blank" title="Google Plus"><i class="zmdi zmdi-google-plus"></i></a></li>
					<li><a href="#" target="_blank" title="Twitter"><i class="zmdi zmdi-twitter"></i></a></li>
					<li><a href="#" target="_blank" title="Facebook"><i class="zmdi zmdi-facebook"></i></a></li>
					<li><a href="#" target="_blank" title="Linkedin"><i class="zmdi zmdi-linkedin"></i></a></li>
				</ul>
			</div>
		</div>
	</div>
	<!-- Sidebar-social-media start -->
	<div class="banner-left floatleft">
		<!-- Slider-banner start -->
		<div class="slider-banner">
			<div class="single-banner banner-1">
				<a class="banner-thumb" href="#"><img src="{{asset('frontend/assets/img/banner/1.jpg')}}" alt="" /></a>
				<span class="pro-label new-label">new</span>
				<span class="price">$50.00</span>
				<div class="banner-brief">
					<h2 class="banner-title"><a href="#">Product name</a></h2>
					<p class="mb-0">Furniture</p>
				</div>
				<a href="#" class="button-one font-16px" data-text="Buy now">Buy now</a>
			</div>
			<div class="single-banner banner-2">
				<a class="banner-thumb" href="#"><img src="{{asset('frontend/assets/img/banner/2.jpg')}}" alt="" /></a>
				<div class="banner-brief">
					<h2 class="banner-title"><a href="#">New Product 2021</a></h2>
					<p class="hidden-md hidden-sm d-none d-md-block">Lorem Ipsum is simply dummy text of the printing and types sate industry. Lorem Ipsum has been the industry.</p>
					<a href="#" class="button-one font-16px" data-text="Buy now">Buy now</a>
				</div>
			</div>
		</div>
		<!-- Slider-banner end -->
	</div>
	<!-- Hero-area start -->
	<div>
		@php
		$hero = DB::table('heros')->first();
		@endphp
		<div class="bend niceties preview-2">
			<div id="ensign-nivoslider">
				<img style="width:1220px; height:800px" src="{{(!empty($hero->hero_photo_path))? rl('upload/hero_images/'.$hero->profile_photo_path):url('upload/hero_images/no_image.jpg')}}" alt="" title="#slider-direction-1" />
			</div>
			<div id="slider-direction-1">
				<div class="slider-content t-lfl s-tb slider-1">
					<div class="title-container s-tb-c title-compress">
						<div class="layer-1">
							<div>
								<h2 class="slider-title3 text-uppercase mb-0">{{$hero->slider_title_1}}</h2>
							</div>
							<div>
								<h2 class="slider-title1 text-uppercase mb-0">{{$hero->slider_title_2}}</h2>
							</div>
							<div>
								<h3 class="slider-title2 text-uppercase">{{$hero->slider_title_3}}</h3>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Sidebar-social-media start -->
	<div class="sidebar-account d-none d-md-block">
		<div class="table">
			<div class="table-cell">
			</div>
		</div>
	</div>
	<!-- Sidebar-social-media start -->
</section>
<!-- End Slider-section -->
<!-- sidebar-search Start -->
<div class="sidebar-search animated slideOutUp">
	<div class="table">
		<div class="table-cell">
			<div class="container">
				<div class="row">
					<div class="col-md-8 offset-md-2 p-0">
						<div class="search-form-wrap">
							<button class="close-search"><i class="zmdi zmdi-close"></i></button>
							<form action="#">
								<input type="text" placeholder="Search here..." />
								<button class="search-button" type="submit">
									<i class="zmdi zmdi-search"></i>
								</button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- sidebar-search End -->
<!-- PRODUCT-AREA START -->
<div class="product-area pt-80 pb-35">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="section-title text-center">
					<h2 class="title-border">Featured Products</h2>
				</div>
				<div class="product-slider style-1 arrow-left-right">
					<!-- Single-product start -->
					<div class="single-product">
						<div class="product-img">
							<span class="pro-label new-label">new</span>
							<a href="single-product.html"><img src="{{asset('frontend/assets/img/product/1.jpg')}}" alt="" /></a>
							<div class="product-action clearfix">
								<a href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
								<a href="#" data-bs-toggle="modal" data-bs-target="#productModal" title="Quick View"><i class="zmdi zmdi-zoom-in"></i></a>
								<a href="#" data-bs-toggle="tooltip" data-placement="top" title="Compare"><i class="zmdi zmdi-refresh"></i></a>
								<a href="cart.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
							</div>
						</div>
						<div class="product-info clearfix">
							<div class="fix">
								<h4 class="post-title floatleft"><a href="#">dummy Product name</a></h4>
								<p class="floatright hidden-sm d-none d-md-block">Furniture</p>
							</div>
							<div class="fix">
								<span class="pro-price floatleft">$ 56.20</span>
								<span class="pro-rating floatright">
									<a href="#"><i class="zmdi zmdi-star"></i></a>
									<a href="#"><i class="zmdi zmdi-star"></i></a>
									<a href="#"><i class="zmdi zmdi-star"></i></a>
									<a href="#"><i class="zmdi zmdi-star-half"></i></a>
									<a href="#"><i class="zmdi zmdi-star-half"></i></a>
								</span>
							</div>
						</div>
					</div>
					<!-- Single-product end -->
					<!-- Single-product start -->
					<div class="single-product">
						<div class="product-img">
							<span class="pro-label sale-label">Sale</span>
							<a href="single-product.html"><img src="{{asset('frontend/assets/img/product/2.jpg')}}" alt="" /></a>
							<div class="product-action clearfix">
								<a href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
								<a href="#" data-bs-toggle="modal" data-bs-target="#productModal" title="Quick View"><i class="zmdi zmdi-zoom-in"></i></a>
								<a href="#" data-bs-toggle="tooltip" data-placement="top" title="Compare"><i class="zmdi zmdi-refresh"></i></a>
								<a href="cart.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
							</div>
						</div>
						<div class="product-info clearfix">
							<div class="fix">
								<h4 class="post-title floatleft"><a href="#">dummy Product name</a></h4>
								<p class="floatright hidden-sm d-none d-md-block">Furniture</p>
							</div>
							<div class="fix">
								<span class="pro-price floatleft">$ 56.20</span>
								<span class="pro-rating floatright">
									<a href="#"><i class="zmdi zmdi-star"></i></a>
									<a href="#"><i class="zmdi zmdi-star"></i></a>
									<a href="#"><i class="zmdi zmdi-star"></i></a>
									<a href="#"><i class="zmdi zmdi-star-half"></i></a>
									<a href="#"><i class="zmdi zmdi-star-half"></i></a>
								</span>
							</div>
						</div>
					</div>
					<!-- Single-product end -->
					<!-- Single-product start -->
					<div class="single-product">
						<div class="product-img">
							<a href="single-product.html"><img src="{{asset('frontend/assets/img/product/3.jpg')}}" alt="" /></a>
							<div class="product-action clearfix">
								<a href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
								<a href="#" data-bs-toggle="modal" data-bs-target="#productModal" title="Quick View"><i class="zmdi zmdi-zoom-in"></i></a>
								<a href="#" data-bs-toggle="tooltip" data-placement="top" title="Compare"><i class="zmdi zmdi-refresh"></i></a>
								<a href="cart.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
							</div>
						</div>
						<div class="product-info clearfix">
							<div class="fix">
								<h4 class="post-title floatleft"><a href="#">dummy Product name</a></h4>
								<p class="floatright hidden-sm d-none d-md-block">Furniture</p>
							</div>
							<div class="fix">
								<span class="pro-price floatleft">$ 56.20</span>
								<span class="pro-rating floatright">
									<a href="#"><i class="zmdi zmdi-star"></i></a>
									<a href="#"><i class="zmdi zmdi-star"></i></a>
									<a href="#"><i class="zmdi zmdi-star"></i></a>
									<a href="#"><i class="zmdi zmdi-star-half"></i></a>
									<a href="#"><i class="zmdi zmdi-star-half"></i></a>
								</span>
							</div>
						</div>
					</div>
					<!-- Single-product end -->
					<!-- Single-product start -->
					<div class="single-product">
						<div class="product-img">
							<a href="single-product.html"><img src="{{asset('frontend/assets/img/product/4.jpg')}}" alt="" /></a>
							<div class="product-action clearfix">
								<a href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
								<a href="#" data-bs-toggle="modal" data-bs-target="#productModal" title="Quick View"><i class="zmdi zmdi-zoom-in"></i></a>
								<a href="#" data-bs-toggle="tooltip" data-placement="top" title="Compare"><i class="zmdi zmdi-refresh"></i></a>
								<a href="cart.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
							</div>
						</div>
						<div class="product-info clearfix">
							<div class="fix">
								<h4 class="post-title floatleft"><a href="#">dummy Product name</a></h4>
								<p class="floatright hidden-sm d-none d-md-block">Furniture</p>
							</div>
							<div class="fix">
								<span class="pro-price floatleft">$ 56.20</span>
								<span class="pro-rating floatright">
									<a href="#"><i class="zmdi zmdi-star"></i></a>
									<a href="#"><i class="zmdi zmdi-star"></i></a>
									<a href="#"><i class="zmdi zmdi-star"></i></a>
									<a href="#"><i class="zmdi zmdi-star-half"></i></a>
									<a href="#"><i class="zmdi zmdi-star-half"></i></a>
								</span>
							</div>
						</div>
					</div>
					<!-- Single-product end -->
					<!-- Single-product start -->
					<div class="single-product">
						<div class="product-img">
							<span class="pro-label new-label">new</span>
							<a href="single-product.html"><img src="{{asset('frontend/assets/img/product/3.jpg')}}" alt="" /></a>
							<div class="product-action clearfix">
								<a href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
								<a href="#" data-bs-toggle="modal" data-bs-target="#productModal" title="Quick View"><i class="zmdi zmdi-zoom-in"></i></a>
								<a href="#" data-bs-toggle="tooltip" data-placement="top" title="Compare"><i class="zmdi zmdi-refresh"></i></a>
								<a href="cart.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
							</div>
						</div>
						<div class="product-info clearfix">
							<div class="fix">
								<h4 class="post-title floatleft"><a href="#">dummy Product name</a></h4>
								<p class="floatright hidden-sm d-none d-md-block">Furniture</p>
							</div>
							<div class="fix">
								<span class="pro-price floatleft">$ 56.20</span>
								<span class="pro-rating floatright">
									<a href="#"><i class="zmdi zmdi-star"></i></a>
									<a href="#"><i class="zmdi zmdi-star"></i></a>
									<a href="#"><i class="zmdi zmdi-star"></i></a>
									<a href="#"><i class="zmdi zmdi-star-half"></i></a>
									<a href="#"><i class="zmdi zmdi-star-half"></i></a>
								</span>
							</div>
						</div>
					</div>
					<!-- Single-product end -->
				</div>
			</div>
		</div>
	</div>
</div>
<!-- PRODUCT-AREA END -->
<!-- DISCOUNT-PRODUCT START -->
<div class="discount-product-area">
	<div class="container">
		<div class="row">
			<div class="discount-product-slider dots-bottom-right">
				<!-- single-discount-product start -->
				<div class="col-lg-12">
					<div class="discount-product">
						<img src="{{asset('frontend/assets/img/discount/1.jpg')}}" alt="" />
						<div class="discount-img-brief">
							<div class="onsale">
								<span class="onsale-text">On Sale</span>
								<span class="onsale-price">$ 80.00</span>
							</div>
							<div class="discount-info">
								<h1 class="text-dark-red d-none d-md-block">Discount 50%</h1>
								<p class="d-none d-md-block">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed does eiusmodes tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim venim, quis nostrud exercitation ullamco laboris.</p>
								<a href="#" class="button-one font-16px style-3 text-uppercase mt-md-5" data-text="Buy now">Buy now</a>
							</div>
						</div>
					</div>
				</div>
				<!-- single-discount-product end -->
				<!-- single-discount-product start -->
				<div class="col-lg-12">
					<div class="discount-product">
						<img src="{{asset('frontend/assets/img/discount/2.jpg')}}" alt="" />
						<div class="discount-img-brief">
							<div class="onsale">
								<span class="onsale-text">On Sale</span>
								<span class="onsale-price">$ 80.00</span>
							</div>
							<div class="discount-info">
								<h1 class="text-dark-red d-none d-md-block">Discount 50%</h1>
								<p class="d-none d-md-block">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed does eiusmodes tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim venim, quis nostrud exercitation ullamco laboris.</p>
								<a href="#" class="button-one font-16px style-3 text-uppercase mt-md-5" data-text="Buy now">Buy now</a>
							</div>
						</div>
					</div>
				</div>
				<!-- single-discount-product end -->
				<!-- single-discount-product start -->
				<div class="col-lg-12">
					<div class="discount-product">
						<img src="{{asset('frontend/assets/img/discount/3.jpg')}}" alt="" />
						<div class="discount-img-brief">
							<div class="onsale">
								<span class="onsale-text">On Sale</span>
								<span class="onsale-price">$ 80.00</span>
							</div>
							<div class="discount-info">
								<h1 class="text-dark-red d-none d-md-block">Discount 50%</h1>
								<p class="d-none d-md-block">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed does eiusmodes tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim venim, quis nostrud exercitation ullamco laboris.</p>
								<a href="#" class="button-one font-16px style-3 text-uppercase mt-md-5" data-text="Buy now">Buy now</a>
							</div>
						</div>
					</div>
				</div>
				<!-- single-discount-product end -->
				<!-- single-discount-product start -->
				<div class="col-lg-12">
					<div class="discount-product">
						<img src="{{asset('frontend/assets/img/discount/4.jpg')}}" alt="" />
						<div class="discount-img-brief">
							<div class="onsale">
								<span class="onsale-text">On Sale</span>
								<span class="onsale-price">$ 80.00</span>
							</div>
							<div class="discount-info">
								<h1 class="text-dark-red d-none d-md-block">Discount 50%</h1>
								<p class="d-none d-md-block">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed does eiusmodes tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim venim, quis nostrud exercitation ullamco laboris.</p>
								<a href="#" class="button-one font-16px style-3 text-uppercase mt-md-5" data-text="Buy now">Buy now</a>
							</div>
						</div>
					</div>
				</div>
				<!-- single-discount-product end -->
			</div>
		</div>
	</div>
</div>
<!-- DISCOUNT-PRODUCT END -->
<!-- PURCHASE-ONLINE-AREA START -->
<div class="purchase-online-area pt-80">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="section-title text-center">
					<h2 class="title-border">Purchase Online on Hurst</h2>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12 text-center">
				<!-- Nav tabs -->
				<ul class="tab-menu nav clearfix">
					<li><a class="active" href="#new-arrivals" data-bs-toggle="tab">New Arrivals</a></li>
					<li><a href="#best-seller" data-bs-toggle="tab">Best Seller </a></li>
					<li><a href="#most-view" data-bs-toggle="tab">Most View </a></li>
					<li><a href="#discounts" data-bs-toggle="tab">Discounts</a></li>
				</ul>
			</div>
			<div class="col-lg-12">
				<!-- Tab panes -->
				<div class="tab-content">
					<div class="tab-pane active" id="new-arrivals">
						<div class="row">
							<!-- Single-product start -->
							<div class="single-product col-xl-3 col-lg-4 col-md-6">
								<div class="product-img">
									<span class="pro-label new-label">new</span>
									<a href="single-product.html"><img src="{{asset('frontend/assets/img/product/5.jpg')}}" alt="" /></a>
									<div class="product-action clearfix">
										<a href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
										<a href="#" data-bs-toggle="modal" data-bs-target="#productModal" title="Quick View"><i class="zmdi zmdi-zoom-in"></i></a>
										<a href="#" data-bs-toggle="tooltip" data-placement="top" title="Compare"><i class="zmdi zmdi-refresh"></i></a>
										<a href="cart.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
									</div>
								</div>
								<div class="product-info clearfix">
									<div class="fix">
										<h4 class="post-title floatleft"><a href="#">dummy Product name</a></h4>
										<p class="floatright hidden-sm">Furniture</p>
									</div>
									<div class="fix">
										<span class="pro-price floatleft">$ 56.20</span>
										<span class="pro-rating floatright">
											<a href="#"><i class="zmdi zmdi-star"></i></a>
											<a href="#"><i class="zmdi zmdi-star"></i></a>
											<a href="#"><i class="zmdi zmdi-star"></i></a>
											<a href="#"><i class="zmdi zmdi-star-half"></i></a>
											<a href="#"><i class="zmdi zmdi-star-half"></i></a>
										</span>
									</div>
								</div>
							</div>
							<!-- Single-product end -->
							<!-- Single-product start -->
							<div class="single-product col-xl-3 col-lg-4 col-md-6">
								<div class="product-img">
									<span class="pro-label sale-label">Sale</span>
									<a href="single-product.html"><img src="{{asset('frontend/assets/img/product/6.jpg')}}" alt="" /></a>
									<div class="product-action clearfix">
										<a href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
										<a href="#" data-bs-toggle="modal" data-bs-target="#productModal" title="Quick View"><i class="zmdi zmdi-zoom-in"></i></a>
										<a href="#" data-bs-toggle="tooltip" data-placement="top" title="Compare"><i class="zmdi zmdi-refresh"></i></a>
										<a href="cart.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
									</div>
								</div>
								<div class="product-info clearfix">
									<div class="fix">
										<h4 class="post-title floatleft"><a href="#">dummy Product name</a></h4>
										<p class="floatright hidden-sm">Furniture</p>
									</div>
									<div class="fix">
										<span class="pro-price floatleft">$ 36.20</span>
										<span class="pro-rating floatright">
											<a href="#"><i class="zmdi zmdi-star"></i></a>
											<a href="#"><i class="zmdi zmdi-star"></i></a>
											<a href="#"><i class="zmdi zmdi-star"></i></a>
											<a href="#"><i class="zmdi zmdi-star-half"></i></a>
											<a href="#"><i class="zmdi zmdi-star-half"></i></a>
										</span>
									</div>
								</div>
							</div>
							<!-- Single-product end -->
							<!-- Single-product start -->
							<div class="single-product col-xl-3 col-lg-4 col-md-6">
								<div class="product-img">
									<a href="single-product.html"><img src="{{asset('frontend/assets/img/product/3.jpg')}}" alt="" /></a>
									<div class="product-action clearfix">
										<a href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
										<a href="#" data-bs-toggle="modal" data-bs-target="#productModal" title="Quick View"><i class="zmdi zmdi-zoom-in"></i></a>
										<a href="#" data-bs-toggle="tooltip" data-placement="top" title="Compare"><i class="zmdi zmdi-refresh"></i></a>
										<a href="cart.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
									</div>
								</div>
								<div class="product-info clearfix">
									<div class="fix">
										<h4 class="post-title floatleft"><a href="#">dummy Product name</a></h4>
										<p class="floatright hidden-sm">Furniture</p>
									</div>
									<div class="fix">
										<span class="pro-price floatleft">$ 66.20</span>
										<span class="pro-rating floatright">
											<a href="#"><i class="zmdi zmdi-star"></i></a>
											<a href="#"><i class="zmdi zmdi-star"></i></a>
											<a href="#"><i class="zmdi zmdi-star"></i></a>
											<a href="#"><i class="zmdi zmdi-star-half"></i></a>
											<a href="#"><i class="zmdi zmdi-star-half"></i></a>
										</span>
									</div>
								</div>
							</div>
							<!-- Single-product end -->
							<!-- Single-product start -->
							<div class="single-product col-xl-3 col-lg-4 col-md-6">
								<div class="product-img">
									<a href="single-product.html"><img src="{{asset('frontend/assets/img/product/7.jpg')}}" alt="" /></a>
									<div class="product-action clearfix">
										<a href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
										<a href="#" data-bs-toggle="modal" data-bs-target="#productModal" title="Quick View"><i class="zmdi zmdi-zoom-in"></i></a>
										<a href="#" data-bs-toggle="tooltip" data-placement="top" title="Compare"><i class="zmdi zmdi-refresh"></i></a>
										<a href="cart.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
									</div>
								</div>
								<div class="product-info clearfix">
									<div class="fix">
										<h4 class="post-title floatleft"><a href="#">dummy Product name</a></h4>
										<p class="floatright hidden-sm">Furniture</p>
									</div>
									<div class="fix">
										<span class="pro-price floatleft">$ 57.20</span>
										<span class="pro-rating floatright">
											<a href="#"><i class="zmdi zmdi-star"></i></a>
											<a href="#"><i class="zmdi zmdi-star"></i></a>
											<a href="#"><i class="zmdi zmdi-star"></i></a>
											<a href="#"><i class="zmdi zmdi-star-half"></i></a>
											<a href="#"><i class="zmdi zmdi-star-half"></i></a>
										</span>
									</div>
								</div>
							</div>
							<!-- Single-product end -->
							<!-- Single-product start -->
							<div class="single-product col-xl-3 col-lg-4 col-md-6">
								<div class="product-img">
									<span class="pro-label new-label">new</span>
									<a href="single-product.html"><img src="{{asset('frontend/assets/img/product/1.jpg')}}" alt="" /></a>
									<div class="product-action clearfix">
										<a href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
										<a href="#" data-bs-toggle="modal" data-bs-target="#productModal" title="Quick View"><i class="zmdi zmdi-zoom-in"></i></a>
										<a href="#" data-bs-toggle="tooltip" data-placement="top" title="Compare"><i class="zmdi zmdi-refresh"></i></a>
										<a href="cart.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
									</div>
								</div>
								<div class="product-info clearfix">
									<div class="fix">
										<h4 class="post-title floatleft"><a href="#">dummy Product name</a></h4>
										<p class="floatright hidden-sm">Furniture</p>
									</div>
									<div class="fix">
										<span class="pro-price floatleft">$ 55.20</span>
										<span class="pro-rating floatright">
											<a href="#"><i class="zmdi zmdi-star"></i></a>
											<a href="#"><i class="zmdi zmdi-star"></i></a>
											<a href="#"><i class="zmdi zmdi-star"></i></a>
											<a href="#"><i class="zmdi zmdi-star-half"></i></a>
											<a href="#"><i class="zmdi zmdi-star-half"></i></a>
										</span>
									</div>
								</div>
							</div>
							<!-- Single-product end -->
							<!-- Single-product start -->
							<div class="single-product col-xl-3 col-lg-4 col-md-6">
								<div class="product-img">
									<span class="pro-label sale-label">Sale</span>
									<a href="single-product.html"><img src="{{asset('frontend/assets/img/product/2.jpg')}}" alt="" /></a>
									<div class="product-action clearfix">
										<a href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
										<a href="#" data-bs-toggle="modal" data-bs-target="#productModal" title="Quick View"><i class="zmdi zmdi-zoom-in"></i></a>
										<a href="#" data-bs-toggle="tooltip" data-placement="top" title="Compare"><i class="zmdi zmdi-refresh"></i></a>
										<a href="cart.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
									</div>
								</div>
								<div class="product-info clearfix">
									<div class="fix">
										<h4 class="post-title floatleft"><a href="#">dummy Product name</a></h4>
										<p class="floatright hidden-sm">Furniture</p>
									</div>
									<div class="fix">
										<span class="pro-price floatleft">$ 65.20</span>
										<span class="pro-rating floatright">
											<a href="#"><i class="zmdi zmdi-star"></i></a>
											<a href="#"><i class="zmdi zmdi-star"></i></a>
											<a href="#"><i class="zmdi zmdi-star"></i></a>
											<a href="#"><i class="zmdi zmdi-star-half"></i></a>
											<a href="#"><i class="zmdi zmdi-star-half"></i></a>
										</span>
									</div>
								</div>
							</div>
							<!-- Single-product end -->
							<!-- Single-product start -->
							<div class="single-product col-xl-3 col-lg-4 col-md-6">
								<div class="product-img">
									<a href="single-product.html"><img src="{{asset('frontend/assets/img/product/8.jpg')}}" alt="" /></a>
									<div class="product-action clearfix">
										<a href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
										<a href="#" data-bs-toggle="modal" data-bs-target="#productModal" title="Quick View"><i class="zmdi zmdi-zoom-in"></i></a>
										<a href="#" data-bs-toggle="tooltip" data-placement="top" title="Compare"><i class="zmdi zmdi-refresh"></i></a>
										<a href="cart.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
									</div>
								</div>
								<div class="product-info clearfix">
									<div class="fix">
										<h4 class="post-title floatleft"><a href="#">dummy Product name</a></h4>
										<p class="floatright hidden-sm">Furniture</p>
									</div>
									<div class="fix">
										<span class="pro-price floatleft">$ 60.20</span>
										<span class="pro-rating floatright">
											<a href="#"><i class="zmdi zmdi-star"></i></a>
											<a href="#"><i class="zmdi zmdi-star"></i></a>
											<a href="#"><i class="zmdi zmdi-star"></i></a>
											<a href="#"><i class="zmdi zmdi-star-half"></i></a>
											<a href="#"><i class="zmdi zmdi-star-half"></i></a>
										</span>
									</div>
								</div>
							</div>
							<!-- Single-product end -->
							<!-- Single-product start -->
							<div class="single-product col-xl-3 col-lg-4 col-md-6">
								<div class="product-img">
									<a href="single-product.html"><img src="{{asset('frontend/assets/img/product/9.jpg')}}" alt="" /></a>
									<div class="product-action clearfix">
										<a href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
										<a href="#" data-bs-toggle="modal" data-bs-target="#productModal" title="Quick View"><i class="zmdi zmdi-zoom-in"></i></a>
										<a href="#" data-bs-toggle="tooltip" data-placement="top" title="Compare"><i class="zmdi zmdi-refresh"></i></a>
										<a href="cart.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
									</div>
								</div>
								<div class="product-info clearfix">
									<div class="fix">
										<h4 class="post-title floatleft"><a href="#">dummy Product name</a></h4>
										<p class="floatright hidden-sm">Furniture</p>
									</div>
									<div class="fix">
										<span class="pro-price floatleft">$ 66.20</span>
										<span class="pro-rating floatright">
											<a href="#"><i class="zmdi zmdi-star"></i></a>
											<a href="#"><i class="zmdi zmdi-star"></i></a>
											<a href="#"><i class="zmdi zmdi-star"></i></a>
											<a href="#"><i class="zmdi zmdi-star-half"></i></a>
											<a href="#"><i class="zmdi zmdi-star-half"></i></a>
										</span>
									</div>
								</div>
							</div>
							<!-- Single-product end -->
						</div>
					</div>
					<div class="tab-pane" id="best-seller">
						<div class="row">
							<!-- Single-product start -->
							<div class="single-product col-xl-3 col-lg-4 col-md-6">
								<div class="product-img">
									<span class="pro-label new-label">new</span>
									<a href="single-product.html"><img src="{{asset('frontend/assets/img/product/2.jpg')}}" alt="" /></a>
									<div class="product-action clearfix">
										<a href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
										<a href="#" data-bs-toggle="modal" data-bs-target="#productModal" title="Quick View"><i class="zmdi zmdi-zoom-in"></i></a>
										<a href="#" data-bs-toggle="tooltip" data-placement="top" title="Compare"><i class="zmdi zmdi-refresh"></i></a>
										<a href="cart.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
									</div>
								</div>
								<div class="product-info clearfix">
									<div class="fix">
										<h4 class="post-title floatleft"><a href="#">dummy Product name</a></h4>
										<p class="floatright hidden-sm">Furniture</p>
									</div>
									<div class="fix">
										<span class="pro-price floatleft">$ 56.20</span>
										<span class="pro-rating floatright">
											<a href="#"><i class="zmdi zmdi-star"></i></a>
											<a href="#"><i class="zmdi zmdi-star"></i></a>
											<a href="#"><i class="zmdi zmdi-star"></i></a>
											<a href="#"><i class="zmdi zmdi-star-half"></i></a>
											<a href="#"><i class="zmdi zmdi-star-half"></i></a>
										</span>
									</div>
								</div>
							</div>
							<!-- Single-product end -->
							<!-- Single-product start -->
							<div class="single-product col-xl-3 col-lg-4 col-md-6">
								<div class="product-img">
									<span class="pro-label sale-label">Sale</span>
									<a href="single-product.html"><img src="{{asset('frontend/assets/img/product/9.jpg')}}" alt="" /></a>
									<div class="product-action clearfix">
										<a href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
										<a href="#" data-bs-toggle="modal" data-bs-target="#productModal" title="Quick View"><i class="zmdi zmdi-zoom-in"></i></a>
										<a href="#" data-bs-toggle="tooltip" data-placement="top" title="Compare"><i class="zmdi zmdi-refresh"></i></a>
										<a href="cart.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
									</div>
								</div>
								<div class="product-info clearfix">
									<div class="fix">
										<h4 class="post-title floatleft"><a href="#">dummy Product name</a></h4>
										<p class="floatright hidden-sm">Furniture</p>
									</div>
									<div class="fix">
										<span class="pro-price floatleft">$ 36.20</span>
										<span class="pro-rating floatright">
											<a href="#"><i class="zmdi zmdi-star"></i></a>
											<a href="#"><i class="zmdi zmdi-star"></i></a>
											<a href="#"><i class="zmdi zmdi-star"></i></a>
											<a href="#"><i class="zmdi zmdi-star-half"></i></a>
											<a href="#"><i class="zmdi zmdi-star-half"></i></a>
										</span>
									</div>
								</div>
							</div>
							<!-- Single-product end -->
							<!-- Single-product start -->
							<div class="single-product col-xl-3 col-lg-4 col-md-6">
								<div class="product-img">
									<a href="single-product.html"><img src="{{asset('frontend/assets/img/product/8.jpg')}}" alt="" /></a>
									<div class="product-action clearfix">
										<a href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
										<a href="#" data-bs-toggle="modal" data-bs-target="#productModal" title="Quick View"><i class="zmdi zmdi-zoom-in"></i></a>
										<a href="#" data-bs-toggle="tooltip" data-placement="top" title="Compare"><i class="zmdi zmdi-refresh"></i></a>
										<a href="cart.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
									</div>
								</div>
								<div class="product-info clearfix">
									<div class="fix">
										<h4 class="post-title floatleft"><a href="#">dummy Product name</a></h4>
										<p class="floatright hidden-sm">Furniture</p>
									</div>
									<div class="fix">
										<span class="pro-price floatleft">$ 66.20</span>
										<span class="pro-rating floatright">
											<a href="#"><i class="zmdi zmdi-star"></i></a>
											<a href="#"><i class="zmdi zmdi-star"></i></a>
											<a href="#"><i class="zmdi zmdi-star"></i></a>
											<a href="#"><i class="zmdi zmdi-star-half"></i></a>
											<a href="#"><i class="zmdi zmdi-star-half"></i></a>
										</span>
									</div>
								</div>
							</div>
							<!-- Single-product end -->
							<!-- Single-product start -->
							<div class="single-product col-xl-3 col-lg-4 col-md-6">
								<div class="product-img">
									<a href="single-product.html"><img src="{{asset('frontend/assets/img/product/6.jpg')}}" alt="" /></a>
									<div class="product-action clearfix">
										<a href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
										<a href="#" data-bs-toggle="modal" data-bs-target="#productModal" title="Quick View"><i class="zmdi zmdi-zoom-in"></i></a>
										<a href="#" data-bs-toggle="tooltip" data-placement="top" title="Compare"><i class="zmdi zmdi-refresh"></i></a>
										<a href="cart.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
									</div>
								</div>
								<div class="product-info clearfix">
									<div class="fix">
										<h4 class="post-title floatleft"><a href="#">dummy Product name</a></h4>
										<p class="floatright hidden-sm">Furniture</p>
									</div>
									<div class="fix">
										<span class="pro-price floatleft">$ 57.20</span>
										<span class="pro-rating floatright">
											<a href="#"><i class="zmdi zmdi-star"></i></a>
											<a href="#"><i class="zmdi zmdi-star"></i></a>
											<a href="#"><i class="zmdi zmdi-star"></i></a>
											<a href="#"><i class="zmdi zmdi-star-half"></i></a>
											<a href="#"><i class="zmdi zmdi-star-half"></i></a>
										</span>
									</div>
								</div>
							</div>
							<!-- Single-product end -->
							<!-- Single-product start -->
							<div class="single-product col-xl-3 col-lg-4 col-md-6">
								<div class="product-img">
									<span class="pro-label new-label">new</span>
									<a href="single-product.html"><img src="{{asset('frontend/assets/img/product/4.jpg')}}" alt="" /></a>
									<div class="product-action clearfix">
										<a href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
										<a href="#" data-bs-toggle="modal" data-bs-target="#productModal" title="Quick View"><i class="zmdi zmdi-zoom-in"></i></a>
										<a href="#" data-bs-toggle="tooltip" data-placement="top" title="Compare"><i class="zmdi zmdi-refresh"></i></a>
										<a href="cart.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
									</div>
								</div>
								<div class="product-info clearfix">
									<div class="fix">
										<h4 class="post-title floatleft"><a href="#">dummy Product name</a></h4>
										<p class="floatright hidden-sm">Furniture</p>
									</div>
									<div class="fix">
										<span class="pro-price floatleft">$ 55.20</span>
										<span class="pro-rating floatright">
											<a href="#"><i class="zmdi zmdi-star"></i></a>
											<a href="#"><i class="zmdi zmdi-star"></i></a>
											<a href="#"><i class="zmdi zmdi-star"></i></a>
											<a href="#"><i class="zmdi zmdi-star-half"></i></a>
											<a href="#"><i class="zmdi zmdi-star-half"></i></a>
										</span>
									</div>
								</div>
							</div>
							<!-- Single-product end -->
							<!-- Single-product start -->
							<div class="single-product col-xl-3 col-lg-4 col-md-6">
								<div class="product-img">
									<span class="pro-label sale-label">Sale</span>
									<a href="single-product.html"><img src="{{asset('frontend/assets/img/product/3.jpg')}}" alt="" /></a>
									<div class="product-action clearfix">
										<a href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
										<a href="#" data-bs-toggle="modal" data-bs-target="#productModal" title="Quick View"><i class="zmdi zmdi-zoom-in"></i></a>
										<a href="#" data-bs-toggle="tooltip" data-placement="top" title="Compare"><i class="zmdi zmdi-refresh"></i></a>
										<a href="cart.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
									</div>
								</div>
								<div class="product-info clearfix">
									<div class="fix">
										<h4 class="post-title floatleft"><a href="#">dummy Product name</a></h4>
										<p class="floatright hidden-sm">Furniture</p>
									</div>
									<div class="fix">
										<span class="pro-price floatleft">$ 65.20</span>
										<span class="pro-rating floatright">
											<a href="#"><i class="zmdi zmdi-star"></i></a>
											<a href="#"><i class="zmdi zmdi-star"></i></a>
											<a href="#"><i class="zmdi zmdi-star"></i></a>
											<a href="#"><i class="zmdi zmdi-star-half"></i></a>
											<a href="#"><i class="zmdi zmdi-star-half"></i></a>
										</span>
									</div>
								</div>
							</div>
							<!-- Single-product end -->
							<!-- Single-product start -->
							<div class="single-product col-xl-3 col-lg-4 col-md-6">
								<div class="product-img">
									<a href="single-product.html"><img src="{{asset('frontend/assets/img/product/7.jpg')}}" alt="" /></a>
									<div class="product-action clearfix">
										<a href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
										<a href="#" data-bs-toggle="modal" data-bs-target="#productModal" title="Quick View"><i class="zmdi zmdi-zoom-in"></i></a>
										<a href="#" data-bs-toggle="tooltip" data-placement="top" title="Compare"><i class="zmdi zmdi-refresh"></i></a>
										<a href="cart.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
									</div>
								</div>
								<div class="product-info clearfix">
									<div class="fix">
										<h4 class="post-title floatleft"><a href="#">dummy Product name</a></h4>
										<p class="floatright hidden-sm">Furniture</p>
									</div>
									<div class="fix">
										<span class="pro-price floatleft">$ 60.20</span>
										<span class="pro-rating floatright">
											<a href="#"><i class="zmdi zmdi-star"></i></a>
											<a href="#"><i class="zmdi zmdi-star"></i></a>
											<a href="#"><i class="zmdi zmdi-star"></i></a>
											<a href="#"><i class="zmdi zmdi-star-half"></i></a>
											<a href="#"><i class="zmdi zmdi-star-half"></i></a>
										</span>
									</div>
								</div>
							</div>
							<!-- Single-product end -->
							<!-- Single-product start -->
							<div class="single-product col-xl-3 col-lg-4 col-md-6">
								<div class="product-img">
									<a href="single-product.html"><img src="{{asset('frontend/assets/img/product/5.jpg')}}" alt="" /></a>
									<div class="product-action clearfix">
										<a href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
										<a href="#" data-bs-toggle="modal" data-bs-target="#productModal" title="Quick View"><i class="zmdi zmdi-zoom-in"></i></a>
										<a href="#" data-bs-toggle="tooltip" data-placement="top" title="Compare"><i class="zmdi zmdi-refresh"></i></a>
										<a href="cart.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
									</div>
								</div>
								<div class="product-info clearfix">
									<div class="fix">
										<h4 class="post-title floatleft"><a href="#">dummy Product name</a></h4>
										<p class="floatright hidden-sm">Furniture</p>
									</div>
									<div class="fix">
										<span class="pro-price floatleft">$ 66.20</span>
										<span class="pro-rating floatright">
											<a href="#"><i class="zmdi zmdi-star"></i></a>
											<a href="#"><i class="zmdi zmdi-star"></i></a>
											<a href="#"><i class="zmdi zmdi-star"></i></a>
											<a href="#"><i class="zmdi zmdi-star-half"></i></a>
											<a href="#"><i class="zmdi zmdi-star-half"></i></a>
										</span>
									</div>
								</div>
							</div>
							<!-- Single-product end -->
						</div>
					</div>
					<div class="tab-pane" id="most-view">
						<div class="row">
							<!-- Single-product start -->
							<div class="single-product col-xl-3 col-lg-4 col-md-6">
								<div class="product-img">
									<span class="pro-label new-label">new</span>
									<a href="single-product.html"><img src="{{asset('frontend/assets/img/product/1.jpg')}}" alt="" /></a>
									<div class="product-action clearfix">
										<a href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
										<a href="#" data-bs-toggle="modal" data-bs-target="#productModal" title="Quick View"><i class="zmdi zmdi-zoom-in"></i></a>
										<a href="#" data-bs-toggle="tooltip" data-placement="top" title="Compare"><i class="zmdi zmdi-refresh"></i></a>
										<a href="cart.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
									</div>
								</div>
								<div class="product-info clearfix">
									<div class="fix">
										<h4 class="post-title floatleft"><a href="#">dummy Product name</a></h4>
										<p class="floatright hidden-sm">Furniture</p>
									</div>
									<div class="fix">
										<span class="pro-price floatleft">$ 56.20</span>
										<span class="pro-rating floatright">
											<a href="#"><i class="zmdi zmdi-star"></i></a>
											<a href="#"><i class="zmdi zmdi-star"></i></a>
											<a href="#"><i class="zmdi zmdi-star"></i></a>
											<a href="#"><i class="zmdi zmdi-star-half"></i></a>
											<a href="#"><i class="zmdi zmdi-star-half"></i></a>
										</span>
									</div>
								</div>
							</div>
							<!-- Single-product end -->
							<!-- Single-product start -->
							<div class="single-product col-xl-3 col-lg-4 col-md-6">
								<div class="product-img">
									<span class="pro-label sale-label">Sale</span>
									<a href="single-product.html"><img src="{{asset('frontend/assets/img/product/3.jpg')}}" alt="" /></a>
									<div class="product-action clearfix">
										<a href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
										<a href="#" data-bs-toggle="modal" data-bs-target="#productModal" title="Quick View"><i class="zmdi zmdi-zoom-in"></i></a>
										<a href="#" data-bs-toggle="tooltip" data-placement="top" title="Compare"><i class="zmdi zmdi-refresh"></i></a>
										<a href="cart.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
									</div>
								</div>
								<div class="product-info clearfix">
									<div class="fix">
										<h4 class="post-title floatleft"><a href="#">dummy Product name</a></h4>
										<p class="floatright hidden-sm">Furniture</p>
									</div>
									<div class="fix">
										<span class="pro-price floatleft">$ 36.20</span>
										<span class="pro-rating floatright">
											<a href="#"><i class="zmdi zmdi-star"></i></a>
											<a href="#"><i class="zmdi zmdi-star"></i></a>
											<a href="#"><i class="zmdi zmdi-star"></i></a>
											<a href="#"><i class="zmdi zmdi-star-half"></i></a>
											<a href="#"><i class="zmdi zmdi-star-half"></i></a>
										</span>
									</div>
								</div>
							</div>
							<!-- Single-product end -->
							<!-- Single-product start -->
							<div class="single-product col-xl-3 col-lg-4 col-md-6">
								<div class="product-img">
									<a href="single-product.html"><img src="{{asset('frontend/assets/img/product/5.jpg')}}" alt="" /></a>
									<div class="product-action clearfix">
										<a href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
										<a href="#" data-bs-toggle="modal" data-bs-target="#productModal" title="Quick View"><i class="zmdi zmdi-zoom-in"></i></a>
										<a href="#" data-bs-toggle="tooltip" data-placement="top" title="Compare"><i class="zmdi zmdi-refresh"></i></a>
										<a href="cart.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
									</div>
								</div>
								<div class="product-info clearfix">
									<div class="fix">
										<h4 class="post-title floatleft"><a href="#">dummy Product name</a></h4>
										<p class="floatright hidden-sm">Furniture</p>
									</div>
									<div class="fix">
										<span class="pro-price floatleft">$ 66.20</span>
										<span class="pro-rating floatright">
											<a href="#"><i class="zmdi zmdi-star"></i></a>
											<a href="#"><i class="zmdi zmdi-star"></i></a>
											<a href="#"><i class="zmdi zmdi-star"></i></a>
											<a href="#"><i class="zmdi zmdi-star-half"></i></a>
											<a href="#"><i class="zmdi zmdi-star-half"></i></a>
										</span>
									</div>
								</div>
							</div>
							<!-- Single-product end -->
							<!-- Single-product start -->
							<div class="single-product col-xl-3 col-lg-4 col-md-6">
								<div class="product-img">
									<a href="single-product.html"><img src="{{asset('frontend/assets/img/product/9.jpg')}}" alt="" /></a>
									<div class="product-action clearfix">
										<a href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
										<a href="#" data-bs-toggle="modal" data-bs-target="#productModal" title="Quick View"><i class="zmdi zmdi-zoom-in"></i></a>
										<a href="#" data-bs-toggle="tooltip" data-placement="top" title="Compare"><i class="zmdi zmdi-refresh"></i></a>
										<a href="cart.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
									</div>
								</div>
								<div class="product-info clearfix">
									<div class="fix">
										<h4 class="post-title floatleft"><a href="#">dummy Product name</a></h4>
										<p class="floatright hidden-sm">Furniture</p>
									</div>
									<div class="fix">
										<span class="pro-price floatleft">$ 57.20</span>
										<span class="pro-rating floatright">
											<a href="#"><i class="zmdi zmdi-star"></i></a>
											<a href="#"><i class="zmdi zmdi-star"></i></a>
											<a href="#"><i class="zmdi zmdi-star"></i></a>
											<a href="#"><i class="zmdi zmdi-star-half"></i></a>
											<a href="#"><i class="zmdi zmdi-star-half"></i></a>
										</span>
									</div>
								</div>
							</div>
							<!-- Single-product end -->
							<!-- Single-product start -->
							<div class="single-product col-xl-3 col-lg-4 col-md-6">
								<div class="product-img">
									<span class="pro-label new-label">new</span>
									<a href="single-product.html"><img src="{{asset('frontend/assets/img/product/7.jpg')}}" alt="" /></a>
									<div class="product-action clearfix">
										<a href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
										<a href="#" data-bs-toggle="modal" data-bs-target="#productModal" title="Quick View"><i class="zmdi zmdi-zoom-in"></i></a>
										<a href="#" data-bs-toggle="tooltip" data-placement="top" title="Compare"><i class="zmdi zmdi-refresh"></i></a>
										<a href="cart.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
									</div>
								</div>
								<div class="product-info clearfix">
									<div class="fix">
										<h4 class="post-title floatleft"><a href="#">dummy Product name</a></h4>
										<p class="floatright hidden-sm">Furniture</p>
									</div>
									<div class="fix">
										<span class="pro-price floatleft">$ 55.20</span>
										<span class="pro-rating floatright">
											<a href="#"><i class="zmdi zmdi-star"></i></a>
											<a href="#"><i class="zmdi zmdi-star"></i></a>
											<a href="#"><i class="zmdi zmdi-star"></i></a>
											<a href="#"><i class="zmdi zmdi-star-half"></i></a>
											<a href="#"><i class="zmdi zmdi-star-half"></i></a>
										</span>
									</div>
								</div>
							</div>
							<!-- Single-product end -->
							<!-- Single-product start -->
							<div class="single-product col-xl-3 col-lg-4 col-md-6">
								<div class="product-img">
									<span class="pro-label sale-label">Sale</span>
									<a href="single-product.html"><img src="{{asset('frontend/assets/img/product/5.jpg')}}" alt="" /></a>
									<div class="product-action clearfix">
										<a href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
										<a href="#" data-bs-toggle="modal" data-bs-target="#productModal" title="Quick View"><i class="zmdi zmdi-zoom-in"></i></a>
										<a href="#" data-bs-toggle="tooltip" data-placement="top" title="Compare"><i class="zmdi zmdi-refresh"></i></a>
										<a href="cart.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
									</div>
								</div>
								<div class="product-info clearfix">
									<div class="fix">
										<h4 class="post-title floatleft"><a href="#">dummy Product name</a></h4>
										<p class="floatright hidden-sm">Furniture</p>
									</div>
									<div class="fix">
										<span class="pro-price floatleft">$ 65.20</span>
										<span class="pro-rating floatright">
											<a href="#"><i class="zmdi zmdi-star"></i></a>
											<a href="#"><i class="zmdi zmdi-star"></i></a>
											<a href="#"><i class="zmdi zmdi-star"></i></a>
											<a href="#"><i class="zmdi zmdi-star-half"></i></a>
											<a href="#"><i class="zmdi zmdi-star-half"></i></a>
										</span>
									</div>
								</div>
							</div>
							<!-- Single-product end -->
							<!-- Single-product start -->
							<div class="single-product col-xl-3 col-lg-4 col-md-6">
								<div class="product-img">
									<a href="single-product.html"><img src="{{asset('frontend/assets/img/product/7.jpg')}}" alt="" /></a>
									<div class="product-action clearfix">
										<a href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
										<a href="#" data-bs-toggle="modal" data-bs-target="#productModal" title="Quick View"><i class="zmdi zmdi-zoom-in"></i></a>
										<a href="#" data-bs-toggle="tooltip" data-placement="top" title="Compare"><i class="zmdi zmdi-refresh"></i></a>
										<a href="cart.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
									</div>
								</div>
								<div class="product-info clearfix">
									<div class="fix">
										<h4 class="post-title floatleft"><a href="#">dummy Product name</a></h4>
										<p class="floatright hidden-sm">Furniture</p>
									</div>
									<div class="fix">
										<span class="pro-price floatleft">$ 60.20</span>
										<span class="pro-rating floatright">
											<a href="#"><i class="zmdi zmdi-star"></i></a>
											<a href="#"><i class="zmdi zmdi-star"></i></a>
											<a href="#"><i class="zmdi zmdi-star"></i></a>
											<a href="#"><i class="zmdi zmdi-star-half"></i></a>
											<a href="#"><i class="zmdi zmdi-star-half"></i></a>
										</span>
									</div>
								</div>
							</div>
							<!-- Single-product end -->
							<!-- Single-product start -->
							<div class="single-product col-xl-3 col-lg-4 col-md-6">
								<div class="product-img">
									<a href="single-product.html"><img src="{{asset('frontend/assets/img/product/8.jpg')}}" alt="" /></a>
									<div class="product-action clearfix">
										<a href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
										<a href="#" data-bs-toggle="modal" data-bs-target="#productModal" title="Quick View"><i class="zmdi zmdi-zoom-in"></i></a>
										<a href="#" data-bs-toggle="tooltip" data-placement="top" title="Compare"><i class="zmdi zmdi-refresh"></i></a>
										<a href="cart.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
									</div>
								</div>
								<div class="product-info clearfix">
									<div class="fix">
										<h4 class="post-title floatleft"><a href="#">dummy Product name</a></h4>
										<p class="floatright hidden-sm">Furniture</p>
									</div>
									<div class="fix">
										<span class="pro-price floatleft">$ 66.20</span>
										<span class="pro-rating floatright">
											<a href="#"><i class="zmdi zmdi-star"></i></a>
											<a href="#"><i class="zmdi zmdi-star"></i></a>
											<a href="#"><i class="zmdi zmdi-star"></i></a>
											<a href="#"><i class="zmdi zmdi-star-half"></i></a>
											<a href="#"><i class="zmdi zmdi-star-half"></i></a>
										</span>
									</div>
								</div>
							</div>
							<!-- Single-product end -->
						</div>
					</div>
					<div class="tab-pane" id="discounts">
						<div class="row">
							<!-- Single-product start -->
							<div class="single-product col-xl-3 col-lg-4 col-md-6">
								<div class="product-img">
									<span class="pro-label new-label">new</span>
									<a href="single-product.html"><img src="{{asset('frontend/assets/img/product/8.jpg')}}" alt="" /></a>
									<div class="product-action clearfix">
										<a href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
										<a href="#" data-bs-toggle="modal" data-bs-target="#productModal" title="Quick View"><i class="zmdi zmdi-zoom-in"></i></a>
										<a href="#" data-bs-toggle="tooltip" data-placement="top" title="Compare"><i class="zmdi zmdi-refresh"></i></a>
										<a href="cart.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
									</div>
								</div>
								<div class="product-info clearfix">
									<div class="fix">
										<h4 class="post-title floatleft"><a href="#">dummy Product name</a></h4>
										<p class="floatright hidden-sm">Furniture</p>
									</div>
									<div class="fix">
										<span class="pro-price floatleft">$ 56.20</span>
										<span class="pro-rating floatright">
											<a href="#"><i class="zmdi zmdi-star"></i></a>
											<a href="#"><i class="zmdi zmdi-star"></i></a>
											<a href="#"><i class="zmdi zmdi-star"></i></a>
											<a href="#"><i class="zmdi zmdi-star-half"></i></a>
											<a href="#"><i class="zmdi zmdi-star-half"></i></a>
										</span>
									</div>
								</div>
							</div>
							<!-- Single-product end -->
							<!-- Single-product start -->
							<div class="single-product col-xl-3 col-lg-4 col-md-6">
								<div class="product-img">
									<span class="pro-label sale-label">Sale</span>
									<a href="single-product.html"><img src="{{asset('frontend/assets/img/product/9.jpg')}}" alt="" /></a>
									<div class="product-action clearfix">
										<a href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
										<a href="#" data-bs-toggle="modal" data-bs-target="#productModal" title="Quick View"><i class="zmdi zmdi-zoom-in"></i></a>
										<a href="#" data-bs-toggle="tooltip" data-placement="top" title="Compare"><i class="zmdi zmdi-refresh"></i></a>
										<a href="cart.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
									</div>
								</div>
								<div class="product-info clearfix">
									<div class="fix">
										<h4 class="post-title floatleft"><a href="#">dummy Product name</a></h4>
										<p class="floatright hidden-sm">Furniture</p>
									</div>
									<div class="fix">
										<span class="pro-price floatleft">$ 36.20</span>
										<span class="pro-rating floatright">
											<a href="#"><i class="zmdi zmdi-star"></i></a>
											<a href="#"><i class="zmdi zmdi-star"></i></a>
											<a href="#"><i class="zmdi zmdi-star"></i></a>
											<a href="#"><i class="zmdi zmdi-star-half"></i></a>
											<a href="#"><i class="zmdi zmdi-star-half"></i></a>
										</span>
									</div>
								</div>
							</div>
							<!-- Single-product end -->
							<!-- Single-product start -->
							<div class="single-product col-xl-3 col-lg-4 col-md-6">
								<div class="product-img">
									<a href="single-product.html"><img src="{{asset('frontend/assets/img/product/7.jpg')}}" alt="" /></a>
									<div class="product-action clearfix">
										<a href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
										<a href="#" data-bs-toggle="modal" data-bs-target="#productModal" title="Quick View"><i class="zmdi zmdi-zoom-in"></i></a>
										<a href="#" data-bs-toggle="tooltip" data-placement="top" title="Compare"><i class="zmdi zmdi-refresh"></i></a>
										<a href="cart.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
									</div>
								</div>
								<div class="product-info clearfix">
									<div class="fix">
										<h4 class="post-title floatleft"><a href="#">dummy Product name</a></h4>
										<p class="floatright hidden-sm">Furniture</p>
									</div>
									<div class="fix">
										<span class="pro-price floatleft">$ 66.20</span>
										<span class="pro-rating floatright">
											<a href="#"><i class="zmdi zmdi-star"></i></a>
											<a href="#"><i class="zmdi zmdi-star"></i></a>
											<a href="#"><i class="zmdi zmdi-star"></i></a>
											<a href="#"><i class="zmdi zmdi-star-half"></i></a>
											<a href="#"><i class="zmdi zmdi-star-half"></i></a>
										</span>
									</div>
								</div>
							</div>
							<!-- Single-product end -->
							<!-- Single-product start -->
							<div class="single-product col-xl-3 col-lg-4 col-md-6">
								<div class="product-img">
									<a href="single-product.html"><img src="{{asset('frontend/assets/img/product/6.jpg')}}" alt="" /></a>
									<div class="product-action clearfix">
										<a href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
										<a href="#" data-bs-toggle="modal" data-bs-target="#productModal" title="Quick View"><i class="zmdi zmdi-zoom-in"></i></a>
										<a href="#" data-bs-toggle="tooltip" data-placement="top" title="Compare"><i class="zmdi zmdi-refresh"></i></a>
										<a href="cart.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
									</div>
								</div>
								<div class="product-info clearfix">
									<div class="fix">
										<h4 class="post-title floatleft"><a href="#">dummy Product name</a></h4>
										<p class="floatright hidden-sm">Furniture</p>
									</div>
									<div class="fix">
										<span class="pro-price floatleft">$ 57.20</span>
										<span class="pro-rating floatright">
											<a href="#"><i class="zmdi zmdi-star"></i></a>
											<a href="#"><i class="zmdi zmdi-star"></i></a>
											<a href="#"><i class="zmdi zmdi-star"></i></a>
											<a href="#"><i class="zmdi zmdi-star-half"></i></a>
											<a href="#"><i class="zmdi zmdi-star-half"></i></a>
										</span>
									</div>
								</div>
							</div>
							<!-- Single-product end -->
							<!-- Single-product start -->
							<div class="single-product col-xl-3 col-lg-4 col-md-6">
								<div class="product-img">
									<span class="pro-label new-label">new</span>
									<a href="single-product.html"><img src="{{asset('frontend/assets/img/product/3.jpg')}}" alt="" /></a>
									<div class="product-action clearfix">
										<a href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
										<a href="#" data-bs-toggle="modal" data-bs-target="#productModal" title="Quick View"><i class="zmdi zmdi-zoom-in"></i></a>
										<a href="#" data-bs-toggle="tooltip" data-placement="top" title="Compare"><i class="zmdi zmdi-refresh"></i></a>
										<a href="cart.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
									</div>
								</div>
								<div class="product-info clearfix">
									<div class="fix">
										<h4 class="post-title floatleft"><a href="#">dummy Product name</a></h4>
										<p class="floatright hidden-sm">Furniture</p>
									</div>
									<div class="fix">
										<span class="pro-price floatleft">$ 55.20</span>
										<span class="pro-rating floatright">
											<a href="#"><i class="zmdi zmdi-star"></i></a>
											<a href="#"><i class="zmdi zmdi-star"></i></a>
											<a href="#"><i class="zmdi zmdi-star"></i></a>
											<a href="#"><i class="zmdi zmdi-star-half"></i></a>
											<a href="#"><i class="zmdi zmdi-star-half"></i></a>
										</span>
									</div>
								</div>
							</div>
							<!-- Single-product end -->
							<!-- Single-product start -->
							<div class="single-product col-xl-3 col-lg-4 col-md-6">
								<div class="product-img">
									<span class="pro-label sale-label">Sale</span>
									<a href="single-product.html"><img src="{{asset('frontend/assets/img/product/4.jpg')}}" alt="" /></a>
									<div class="product-action clearfix">
										<a href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
										<a href="#" data-bs-toggle="modal" data-bs-target="#productModal" title="Quick View"><i class="zmdi zmdi-zoom-in"></i></a>
										<a href="#" data-bs-toggle="tooltip" data-placement="top" title="Compare"><i class="zmdi zmdi-refresh"></i></a>
										<a href="cart.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
									</div>
								</div>
								<div class="product-info clearfix">
									<div class="fix">
										<h4 class="post-title floatleft"><a href="#">dummy Product name</a></h4>
										<p class="floatright hidden-sm">Furniture</p>
									</div>
									<div class="fix">
										<span class="pro-price floatleft">$ 65.20</span>
										<span class="pro-rating floatright">
											<a href="#"><i class="zmdi zmdi-star"></i></a>
											<a href="#"><i class="zmdi zmdi-star"></i></a>
											<a href="#"><i class="zmdi zmdi-star"></i></a>
											<a href="#"><i class="zmdi zmdi-star-half"></i></a>
											<a href="#"><i class="zmdi zmdi-star-half"></i></a>
										</span>
									</div>
								</div>
							</div>
							<!-- Single-product end -->
							<!-- Single-product start -->
							<div class="single-product col-xl-3 col-lg-4 col-md-6">
								<div class="product-img">
									<a href="single-product.html"><img src="{{asset('frontend/assets/img/product/5.jpg')}}" alt="" /></a>
									<div class="product-action clearfix">
										<a href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
										<a href="#" data-bs-toggle="modal" data-bs-target="#productModal" title="Quick View"><i class="zmdi zmdi-zoom-in"></i></a>
										<a href="#" data-bs-toggle="tooltip" data-placement="top" title="Compare"><i class="zmdi zmdi-refresh"></i></a>
										<a href="cart.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
									</div>
								</div>
								<div class="product-info clearfix">
									<div class="fix">
										<h4 class="post-title floatleft"><a href="#">dummy Product name</a></h4>
										<p class="floatright hidden-sm">Furniture</p>
									</div>
									<div class="fix">
										<span class="pro-price floatleft">$ 60.20</span>
										<span class="pro-rating floatright">
											<a href="#"><i class="zmdi zmdi-star"></i></a>
											<a href="#"><i class="zmdi zmdi-star"></i></a>
											<a href="#"><i class="zmdi zmdi-star"></i></a>
											<a href="#"><i class="zmdi zmdi-star-half"></i></a>
											<a href="#"><i class="zmdi zmdi-star-half"></i></a>
										</span>
									</div>
								</div>
							</div>
							<!-- Single-product end -->
							<!-- Single-product start -->
							<div class="single-product col-xl-3 col-lg-4 col-md-6">
								<div class="product-img">
									<a href="single-product.html"><img src="{{asset('frontend/assets/img/product/2.jpg')}}" alt="" /></a>
									<div class="product-action clearfix">
										<a href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
										<a href="#" data-bs-toggle="modal" data-bs-target="#productModal" title="Quick View"><i class="zmdi zmdi-zoom-in"></i></a>
										<a href="#" data-bs-toggle="tooltip" data-placement="top" title="Compare"><i class="zmdi zmdi-refresh"></i></a>
										<a href="cart.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
									</div>
								</div>
								<div class="product-info clearfix">
									<div class="fix">
										<h4 class="post-title floatleft"><a href="#">dummy Product name</a></h4>
										<p class="floatright hidden-sm">Furniture</p>
									</div>
									<div class="fix">
										<span class="pro-price floatleft">$ 66.20</span>
										<span class="pro-rating floatright">
											<a href="#"><i class="zmdi zmdi-star"></i></a>
											<a href="#"><i class="zmdi zmdi-star"></i></a>
											<a href="#"><i class="zmdi zmdi-star"></i></a>
											<a href="#"><i class="zmdi zmdi-star-half"></i></a>
											<a href="#"><i class="zmdi zmdi-star-half"></i></a>
										</span>
									</div>
								</div>
							</div>
							<!-- Single-product end -->
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- PURCHASE-ONLINE-AREA END -->
<!-- BLGO-AREA START -->
<div class="blog-area pt-55">
	<div class="container">
		<!-- Section-title start -->
		<div class="row">
			<div class="col-lg-12">
				<div class="section-title text-center">
					<h2 class="title-border">From The Blog</h2>
				</div>
			</div>
		</div>
		<!-- Section-title end -->
		<div class="row">
			<!-- Single-blog start -->
			<div class="col-lg-6">
				<div class="single-blog mt-30">
					<div class="row">
						<div class="col-xl-6 col-md-7">
							<div class="blog-info">
								<div class="post-meta fix">
									<div class="post-date floatleft"><span class="text-dark-red">30</span></div>
									<div class="post-year floatleft">
										<p class="text-uppercase text-dark-red mb-0">June, 2021</p>
										<h4 class="post-title"><a href="#" tabindex="0">Farniture drawing 2021</a></h4>
									</div>
								</div>
								<div class="like-share fix">
									<a href="#"><i class="zmdi zmdi-favorite"></i><span>89 Like</span></a>
									<a href="#"><i class="zmdi zmdi-comments"></i><span>59 Comments</span></a>
									<a href="#"><i class="zmdi zmdi-share"></i><span>29 Share</span></a>
								</div>
								<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered If you are going to use a passage Lorem Ipsum, you alteration in some form.</p>
								<a href="#" class="button-2 text-dark-red">Read more...</a>
							</div>
						</div>
						<div class="col-xl-6 col-md-5">
							<div class="blog-photo">
								<a href="#"><img src="{{asset('frontend/assets/img/blog/1.jpg')}}" alt="" /></a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Single-blog end -->
			<!-- Single-blog start -->
			<div class="col-lg-6">
				<div class="single-blog mt-30">
					<div class="row">
						<div class="col-xl-6 col-md-7">
							<div class="blog-info">
								<div class="post-meta fix">
									<div class="post-date floatleft"><span class="text-dark-red">30</span></div>
									<div class="post-year floatleft">
										<p class="text-uppercase text-dark-red mb-0">June, 2021</p>
										<h4 class="post-title"><a href="#" tabindex="0">Farniture drawing 2021</a></h4>
									</div>
								</div>
								<div class="like-share fix">
									<a href="#"><i class="zmdi zmdi-favorite"></i><span>89 Like</span></a>
									<a href="#"><i class="zmdi zmdi-comments"></i><span>59 Comments</span></a>
									<a href="#"><i class="zmdi zmdi-share"></i><span>29 Share</span></a>
								</div>
								<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered If you are going to use a passage Lorem Ipsum, you alteration in some form.</p>
								<a href="#" class="button-2 text-dark-red">Read more...</a>
							</div>
						</div>
						<div class="col-xl-6 col-md-5">
							<div class="blog-photo">
								<a href="#"><img src="{{asset('frontend/assets/img/blog/2.jpg')}}" alt="" /></a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Single-blog end -->
		</div>
	</div>
</div>
<!-- BLGO-AREA END -->
<!-- SUBSCRIVE-AREA START -->
<div class="subscribe-area pt-80">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="subscribe">
					<form action="#">
						<input type="text" placeholder="Enter your email address" />
						<button class="submit-button submit-btn-2 button-one" data-text="subscribe" type="submit">subscribe</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- SUBSCRIVE-AREA END -->
@endsection