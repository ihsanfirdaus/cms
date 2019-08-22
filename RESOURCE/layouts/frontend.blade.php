
<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="icon" href="{{asset('assets/img/favicon.png')}}" type="image/png">
	<title>CMS | Home</title>
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="{{asset('assets/css/bootstrap.css')}}">
	<link rel="stylesheet" href="{{asset('assets/vendors/linericon/style.css')}}">
	<link rel="stylesheet" href="{{asset('assets/css/font-awesome.min.css')}}">
	<link rel="stylesheet" href="{{asset('assets/vendors/owl-carousel/owl.carousel.min.css')}}">
	<link rel="stylesheet" href="{{asset('assets/css/magnific-popup.css')}}">
	<link rel="stylesheet" href="{{asset('assets/vendors/nice-select/css/nice-select.css')}}">
	<link rel="stylesheet" href="{{asset('assets/vendors/animate-css/animate.css')}}">
	<link rel="stylesheet" href="{{asset('assets/vendors/flaticon/flaticon.css')}}">
	<!-- main css -->
	<link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
	@yield('css')
</head>

<body>

	<!--================Header Menu Area =================-->
	@include('layouts/frontend/navbar')
	<!--================Header Menu Area =================-->

	<!--================Home Banner Area =================-->
	<section class="home_banner_area">
		<div class="banner_inner">
			<div class="container">
				<div class="row">
					<div class="col-lg-6">
						<div class="home_left_img">
							<img class="img-fluid" src="{{asset('assets/img/banner/home-left.png')}}" alt="">
						</div>
					</div>
					<div class="col-lg-6">
						<div class="banner_content">
							<h2>
								Welcome <br>
								To <br>
								Website CMS
							</h2>
							<p>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod temp or incididunt ut labore et dolore
								magna aliqua. Ut enim ad minim.
							</p>
		
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================End Home Banner Area =================-->

	<!--================Start About Us Area =================-->
	<section class="about_us_area section_gap_top">
		<div class="container">
			<div class="row about_content align-items-center">
				<div class="col-lg-6">
					<div class="section_content">
						<h6>About Us</h6>
						<h1>We Believe that <br>Interior beauty Lasts Long</h1>
						<p>inappropriate behavior is often laughed off as “boys will be boys,” women face higher conduct standards
							especially in the workplace. That’s why it’s crucial that as women.</p>
						<a class="primary_btn" href="{{url('about')}}">Learn More</a>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="about_us_image_box justify-content-center">
						<img class="img-fluid w-100" src="{{asset('assets/img/about_img.png')}}" alt="">
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================End About Us Area =================-->

	<!--================First Upcoming Games Area =================-->
	
	<!--================End Upcoming Games Area =================-->

	<!--================Start Recent Update Area =================-->
	
	<!--================End Recent Update Area =================-->


	<!--================ Start Gallery Area =================-->
	
	<!--================ End Gallery Area =================-->


	<!--========== Start Testimonials Area ==================-->
	
	<!--================ End Testimonials Area ================-->


	<!--================ Start Pricing Plans Area ================-->
	
	<!--================ End Pricing Plans Area ================-->


	<!--================ Start Frequently Asked Questions Area ================-->
	
	<!--================ End Frequently Asked Questions Area ================-->

	<!--================ Start Blog Area ================-->
	<section class="blog_area">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="main_title">
						<h1>Latest Blog Posts</h1>
					</div>
				</div>
			</div>
			<div class="row">
				@foreach($artikel as $data)
				<div class="col-lg-4 col-md-6">
					<div class="blog_items">
						<div class="blog_img_box">
							<img class="img-fluid" src="{{asset('assets/img/artikel/'.$data->foto.'')}}" alt="">
						</div>
						<div class="blog_content">
							<a class="title" href="/blog/{{ $data->slug }}">{{$data->judul}}</a>
							<p>
									@foreach ($data->tag as $key)
									<a href="/blog-tag/{{$key->slug}}"><button class="btn btn-sm btn-floating btn-default">{{$key->nama}}</button></a>        
									@endforeach
									<br>
									{!!str_limit($data->konten,150)!!}}</p>
									<div class="date">
									<a href="#"><i class="fa fa-calendar" aria-hidden="true"></i>{{$data->created_at->format('d M Y')}}</a>
									</div>
							</p>
						</div>
					</div>
				</div>
				@endforeach
			</div>
		</div>
	</section>
	<!--================ End Blog Area ================-->

	<!--================ Start Newsletter Area ================-->
	{{-- <section class="newsletter_area">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-6 col-sm-12">
					<div class="newsletter_inner">
						<h1>Subscribe Our Newsletter</h1>
						<p>We won’t send any kind of spam</p>
					</div>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-12">
					<aside class="newsletter_widget">
						<div id="mc_embed_signup">
							<form target="_blank" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01"
							 method="get" class="subscribe_form relative">
								<div class="input-group d-flex flex-row">
									<input name="EMAIL" placeholder="Enter email address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your email address'"
									 required="" type="email">
									<button class="btn primary_btn">Subscribe</button>
								</div>
							</form>
						</div>
					</aside>
				</div>
			</div>
		</div>
	</section> --}}
	<!--================ End Newsletter Area ================-->

	<!--================Footer Area =================-->
	{{-- <footer class="footer_area section_gap_top">
		<div class="container">
			<div class="row footer_inner">
				<div class="col-lg-3 col-sm-6">
					<aside class="f_widget ab_widget">
						<div class="f_title">
							<h4>About Farfly</h4>
						</div>
						<ul>
							<li><a href="#"></a>For Business</a></li><a href="#">
								<li><a href="#"></a>Premium Plans
							</a></li>
							<li><a href="#"></a>Reviews</a></li>
							<li><a href="#"></a>How it Works</a></li>
							<li><a href="#"></a>Farfly Blog</a></li>
						</ul>
					</aside>
				</div>
				<div class="col-lg-3 col-sm-6">
					<aside class="f_widget ab_widget">
						<div class="f_title">
							<h4>Company</h4>
						</div>
						<ul>
							<li><a href="#"></a>Product Tour</a></li><a href="#">
								<li><a href="#"></a>Pricing
							</a></li>
							<li><a href="#"></a>Founding Members</a></li>
							<li><a href="#"></a>Case Studies</a></li>
							<li><a href="#"></a>Product Updates</a></li>
						</ul>
					</aside>
				</div>
				<div class="col-lg-3 col-sm-6">
					<aside class="f_widget ab_widget">
						<div class="f_title">
							<h4>Support</h4>
						</div>
						<ul>
							<li><a href="#"></a>Documentation</a></li><a href="#">
								<li><a href="#"></a>Data Securiry
							</a></li>
							<li><a href="#"></a>Site Performance</a></li>
							<li><a href="#"></a>Action Plan</a></li>
							<li><a href="#"></a>Resources</a></li>
						</ul>
					</aside>
				</div>
				<div class="col-lg-3 col-sm-6">
					<aside class="f_widget ab_widget">
						<div class="f_title">
							<h4>Legal</h4>
						</div>
						<ul>
							<li><a href="#"></a>Terms and conditions</a></li><a href="#">
								<li><a href="#"></a>Privacy Policy
							</a></li>
							<li><a href="#"></a>Cookie Information</a></li>
							<li><a href="#"></a>Opt - Out</a></li>
						</ul>
					</aside>
				</div>
			</div>
			<div class="row single-footer-widget">
				<div class="col-lg-6 col-md-6 col-sm-12">
					<div class="copy_right_text">
						<p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
					</div>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-12">
					<div class="social_widget">
						<a href="#"><i class="fa fa-facebook"></i></a>
						<a href="#"><i class="fa fa-twitter"></i></a>
						<a href="#"><i class="fa fa-dribbble"></i></a>
						<a href="#"><i class="fa fa-behance"></i></a>
					</div>
				</div>
			</div>
		</div>
	</footer> --}}
	<!--================End Footer Area =================-->

	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="{{asset('assets/js/jquery-3.2.1.min.js')}}"></script>
	<script src="{{asset('assets/js/popper.js')}}"></script>
	<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
	<script src="{{asset('assets/js/stellar.js')}}"></script>
	<script src="{{asset('assets/js/jquery.magnific-popup.min.js')}}"></script>
	<script src="{{asset('assets/vendors/nice-select/js/jquery.nice-select.min.js')}}"></script>
	<script src="{{asset('assets/vendors/isotope/imagesloaded.pkgd.min.js')}}"></script>
	<script src="{{asset('assets/vendors/isotope/isotope-min.js')}}"></script>
	<script src="{{asset('assets/vendors/owl-carousel/owl.carousel.min.js')}}"></script>
	<script src="{{asset('assets/js/jquery.ajaxchimp.min.js')}}"></script>
	<script src="{{asset('assets/vendors/counter-up/jquery.waypoints.min.js')}}"></script>
	<script src="{{asset('assets/vendors/counter-up/jquery.counterup.min.js')}}"></script>
	<script src="{{asset('assets/js/mail-script.js')}}"></script>
	<!--gmaps Js-->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
	<script src="{{asset('assets/js/gmaps.min.js')}}"></script>
	<script src="{{asset('assets/js/theme.js')}}"></script>
	@yield('js')
</body>
</html>