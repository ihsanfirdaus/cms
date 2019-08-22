

<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" href="{{asset('assets/img/favicon.png')}}" type="image/png">
        <title>CMS | Blog</title>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="{{asset('assets/css/bootstrap.css')}}">
        <link rel="stylesheet" href="{{asset('assets/vendors/linericon/style.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/font-awesome.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets/vendors/owl-carousel/owl.carousel.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets/vendors/lightbox/simpleLightbox.css')}}">
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
                        <a class="navbar-brand logo_h" href="{{url('/')}}"><img src="{{asset('assets/img/logo.png')}}" alt=""></a>
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
                                <li class="nav-item active"><a class="nav-link" href="{{url('blog')}}">Blog</a></li>
                                <li class="nav-item"><a class="nav-link" href="{{url('about')}}">About</a></li>
                            </ul>
    
                        </div>
                    </div>
                </nav>
            </div>
        </header>
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
                                    Blog <br>   
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
            
        <!--================Blog Categorie Area =================-->
       
        <!--================Blog Categorie Area =================-->
        
        <!--================Blog Area =================-->
        <section class="blog_area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="blog_left_sidebar">
                            @foreach ($artikel as $data)
                            <article class="row blog_item">
                               <div class="col-md-3">
                                   <div class="blog_info text-right">
                                        <div class="post_tag">
                                                @foreach($data->tag as $key)
                                                <a href="/blog-tag/{{ $key->slug }}">
                                                <button class="btn btn-sm btn-outline btn-default">{{ $key->nama }}</button></a>
                                               
                                                @endforeach
                                        </div>
                                        <ul class="blog_meta list">
                                            <li><a href="#">{{$data->user->name}}<i class="lnr lnr-user"></i></a></li>
                                            <li><a href="#">{{$data->created_at->format('d M Y, H:i:s')}}<i class="lnr lnr-calendar-full"></i></a></li>
                        
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-9">
                                    <div class="blog_post">
                                        <img src="{{asset('assets/img/artikel/'.$data->foto.'')}}" 
                                             style="width: 350px;height:350px;" alt="">
                                            <div class="blog_details">
                                                <a href="/blog/{{ $data->slug }}">
                                            <h1>{{$data->judul}}</h1>
                                            </a>
                                            <p>{!!str_limit($data->konten,150)!!}</p>
                                        </div>
                                    </div>
                                </div>
                            </article>
                            @endforeach
                            {{$artikel->links()}}
                        </div>
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
                                    <a href="https://facebook.com"><i class="fa fa-facebook"></i></a>
                                    <a href="https://twitter.com"><i class="fa fa-twitter"></i></a>
                                    <a href="https://github.com"><i class="fa fa-github"></i></a>
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
                                            <p>{{ $data->nama }}</p>
                                            <p>{{ $data->artikel->count() }}</p>
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
                                        <li>
                                            <a href="/blog-tag/{{ $data->slug }}">{{ $data->nama}}</a>
                                        </li>
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
        <script src="{{asset('assets/vendors/lightbox/simpleLightbox.min.js')}}"></script>
        <script src="{{asset('assets/vendors/nice-select/js/jquery.nice-select.min.js')}}"></script>
        <script src="{{asset('assets/vendors/isotope/imagesloaded.pkgd.min.js')}}"></script>
        <script src="{{asset('assets/vendors/isotope/isotope-min.js')}}"></script>
        <script src="{{asset('assets/vendors/owl-carousel/owl.carousel.min.js')}}"></script>
        <script src="{{asset('assets/js/jquery.ajaxchimp.min.js')}}"></script>
        <script src="{{asset('assets/js/mail-script.js')}}"></script>
        <script src="{{asset('assets/vendors/counter-up/jquery.waypoints.min.js')}}"></script>
        <script src="{{asset('assets/vendors/counter-up/jquery.counterup.min.js')}}"></script>
        <script src="{{asset('assets/js/theme.js')}}"></script>
    </body>
</html>
