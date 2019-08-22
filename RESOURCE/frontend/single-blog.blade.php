
<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" href="{{asset('assets/img/favicon.png')}}')}}" type="image/png">
        <title>CMS | Single Blog</title>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="{{asset('assets/css/bootstrap.css')}}">
        <link rel="stylesheet" href="{{asset('assets/vendors/linericon/style.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/font-awesome.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets/vendors/owl-carousel/owl.carousel.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/magnific-popup.css')}}">
        <link rel="stylesheet" href="{{asset('assets/vendors/nice-select/css/nice-select.css')}}">
        <link rel="stylesheet" href="{{asset('assets/vendors/animate-css/animate.css')}}">
        <!-- main css -->
        <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/responsive.css')}}">
    </head>
    <body class="blog_page">
        
        <!--================Header Menu Area =================-->
        <header class="header_area">
            <div class="main_menu">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <div class="container">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <a class="navbar-brand logo_h" href="index.html"><img src="{{asset('assets/img/logo.png')}}" alt=""></a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                            <ul class="nav navbar-nav menu_nav justify-content-center">
                                <li class="nav-item"><a class="nav-link" href="{{url('/')}}">Home</a></li>
                                <li class="nav-item"><a class="nav-link" href="{{url('blog')}}">Blog</a>
                                <li class="nav-item"><a class="nav-link" href="{{url('about')}}">About</a></li>
                                
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </header>
        <!--================Header Menu Area =================-->
        
        <!--================Home Banner Area =================-->
        <section class="banner_area">
            <div class="banner_inner d-flex align-items-center">
            	<div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background=""></div>
				<div class="container">
					<div class="banner_content text-center">
						<div class="page_link">
							<a href="{{url('home')}}">Home</a>
							<a href="{{url('blog')}}">{{$artikel->judul}}</a>
						</div>
						<h2>BLOG DETAILS</h2>
					</div>
				</div>
            </div>
        </section>
        <!--================End Home Banner Area =================-->
        
        <!--================Blog Area =================-->
        <section class="blog_area single-post-area section_gap">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 posts-list">
                        <div class="single-post row">
                            <div class="col-lg-12">
                                <div class="feature-img">
                                 <center><img class="img-fluid" src="{{asset('assets/img/artikel/'.$artikel->foto.'')}}" alt=""></center>
                                </div>									
                            </div>
                            <div class="col-lg-3  col-md-3">
                                <div class="blog_info text-right">
                                    <div class="post_tag">
                                       
                                    @foreach($artikel->tag as $data)
                                    <a href="/blog-tag/{{ $data->slug }}">
                                    <button class="btn btn-sm btn-outline btn-default">{{ $data->nama }}</button></a>
                                   
                                    @endforeach
                                        
                                    </div>
                                    <ul class="blog_meta list">
                                        <li><a href="#">{{$artikel->user->name}}<i class="lnr lnr-user"></i></a></li>
                                        <li><a href="#">{{$artikel->created_at->format('d M Y')}}<i class="lnr lnr-calendar-full"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-9 col-md-9 blog_details">
                            <h1>{{$artikel->judul}}</h1>
                                <p class="excert">
                                   {!!($artikel->konten)!!}
                                </p>
                            </div>
                        </div>
                        <div id="disqus_thread"></div>
                    </div>
                    
                    <div class="col-lg-4">
                        <div class="blog_right_sidebar">
                            <aside class="single_sidebar_widget search_widget">
                                <div class="br"></div>
                            </aside>
                            <aside class="single_sidebar_widget author_widget">
                                <img class="author_img rounded-circle" src="{{asset('assets/img/blog/uzumaki-boruto.jpg')}}" alt="">
                                <h4>Admin</h4>
                                <p>Senior blog writer</p>
                                <div class="social_icon">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-github"></i></a>
                                    <a href="#"><i class="fa fa-behance"></i></a>
                                </div>
                                <p>Boot camps have its supporters andit sdetractors. Some people do not understand why you should have to spend money on boot camp when you can get. Boot camps have itssuppor ters andits detractors.</p>
                                <div class="br"></div>
                            </aside>
                            <aside class="single_sidebar_widget post_category_widget">
                                <h4 class="widget_title">Kategori Artikel</h4>
                                <ul class="list cat-list">
                                        @foreach ($kategori as $data)
                                    <li>
                                        
                                        <a href="/blog-kategori/{{ $data->slug }}" class="d-flex justify-content-between">
                                            <p>{{$data->nama}}</p>
                                            <p>{{$data->artikel->count()}}</p>
                                        </a>
                                        
                                    </li>		
                                    @endforeach									
                                </ul>
                                <div class="br"></div>
                            </aside>
                           
                            <aside class="single-sidebar-widget tag_cloud_widget">
                                <h4 class="widget_title">Tag Artikel</h4>
                                <ul class="list">
                                        @foreach($tag as $data)
                                        <li><a href="/blog-tag/{{ $data->slug }}">{{ $data->nama}}</a></li>
                                        @endforeach
                                </ul>
                            </aside>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================Blog Area =================-->
        
        <!--================Footer Area =================-->
    
        <!--================End Footer Area =================-->
        
        
        
        
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="{{asset('assets/js/jquery-3.2.1.min.js')}}"></script>
        <script src="{{asset('assets/js/popper.js')}}"></script>.
        <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
        <script src="{{asset('assets/js/stellar.js')}}"></script>
        <script src="{{asset('assets/js/jquery.magnific-popup.min.js')}}"></script>
        <script src="{{asset('assets/vendors/nice-select/js/jquery.nice-select.min.js')}}"></script>
        <script src="{{asset('assets/vendors/isotope/imagesloaded.pkgd.min.js')}}"></script>
        <script src="{{asset('assets/vendors/isotope/isotope-min.js')}}"></script>
        <script src="{{asset('assets/vendors/owl-carousel/owl.carousel.min.js')}}"></script>
        <script src="{{asset('assets/js/jquery.ajaxchimp.min.js')}}"></script>
        <script src="{{asset('assets/js/mail-script.js')}}"></script>
        <script src="{{asset('assets/vendors/counter-up/jquery.waypoints.min.js')}}"></script>
        <script src="{{asset('assets/vendors/counter-up/jquery.counterup.min.js')}}"></script>
        <script src="{{asset('assets/js/theme.js')}}"></script>
        
<script>

/**
*  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
*  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
/*
var disqus_config = function () {
this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
};
*/
var disqus_config = function () {
this.page.url = "http://localhost:8000/blog/{{$artikel->slug}};"; 
this.page.identifier = {{ $artikel->id }}; 
};

(function() { // DON'T EDIT BELOW THIS LINE
var d = document, s = d.createElement('script');
s.src = 'https://cmsbebas.disqus.com/embed.js';
s.setAttribute('data-timestamp', +new Date());
(d.head || d.body).appendChild(s);
})();
</script>
<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
    </body>
</html>
