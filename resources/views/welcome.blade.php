<!DOCTYPE html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>BP2TP</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		
 		<!-- google font  -->
		<link href='https://fonts.googleapis.com/css?family=Oxygen:400,700,300' rel='stylesheet' type='text/css'>
        <!-- Favicon
		============================================ -->
		<link rel="shortcut icon" href="{{asset('depan/img/favicon.ico')}}" type="image/x-icon">       

		<!-- Bootstrap CSS
		============================================ -->      
        <link rel="stylesheet" href="{{asset('depan/css/bootstrap.min.css')}}">
		<!-- Add venobox -->
		<link rel="stylesheet" href="{{asset('depan/venobox/venobox.css')}}" type="text/css" media="screen" />      
		<!-- owl.carousel CSS
		============================================ -->      
        <link rel="stylesheet" href="{{asset('depan/css/owl.carousel.css')}}">
        
		<!-- owl.theme CSS
		============================================ -->      
        <link rel="stylesheet" href="{{asset('depan/css/owl.theme.css')}}">
           	
		<!-- owl.transitions CSS
		============================================ -->      
        <link rel="stylesheet" href="{{asset('depan/css/owl.transitions.css')}}">
        
		<!-- font-awesome.min CSS
		============================================ -->      
        <link rel="stylesheet" href="{{asset('depan/css/font-awesome.min.css')}}">
		<!-- Nivo Slider CSS -->
		<link rel="stylesheet" href="{{asset('depan/css/nivo-slider.css')}}">        
 		<!-- animate CSS
		============================================ -->         
        <link rel="stylesheet" href="{{asset('depan/css/animate.css')}}">

 		<!-- normalize CSS
		============================================ -->        
        <link rel="stylesheet" href="{{asset('depan/css/normalize.css')}}">      
        <!-- main CSS
		============================================ -->          
        <link rel="stylesheet" href="{{asset('depan/css/main.css')}}">
        
        <!-- style CSS
		============================================ -->          
        <link rel="stylesheet" href="{{asset('depan/style.css')}}">
        
        <!-- responsive CSS
		============================================ -->          
        <link rel="stylesheet" href="{{asset('depan/css/responsive.css')}}">
        
        <script src="{{asset('depan/js/vendor/modernizr-2.8.3.min.js')}}"></script>
    </head>
    <body>
	<div class="nav_area" id="sticker">
		<div class="container">
			<div class="row">
				<div class="col-md-5 col-sm-5 col-xs-6">
					<div class=""><a href="index.html"><img src="{{asset('depan/img/logo.png')}}" alt="" / width="80px"> <b class="navid">Aplikasi Penyuluhan Pertanian</b></a></div>
				</div>
				<div class="col-md-7 col-sm-7 col-xs-8">
					<nav class="menu">
						<ul class="navid">
							<li><a href="#home">Home</a></li>
							<li><a href="#about">Tentang Kami</a></li>
							<li><a href="#services">Manfaat</a></li>							
							<li><a href="#blogs">Berita</a></li>
							<li><a href="#contact">Contact</a></li>
							<li><a href="{{Route('login')}}">Login</a></li>
						</ul>
					</nav>
						<div class="dropdown mabile_menu">
							<a data-toggle="dropdown" class="mobile-menu" href="#"><span> MENU </span><i class="fa fa-bars"></i></a>
						  <ul class="dropdown-menu mobile_menus drop_mobile navid">
						  	<li><a href="#home">Home</a></li>
							<li><a href="#about">Tentang Kami</a></li>
							<li><a href="#services">Manfaat</a></li>							
							<li><a href="#blogs">Berita</a></li>
							<li><a href="#contact">Contact</a></li>
							<li><a href="{{Route('login')}}">Login</a></li>
						  </ul>
						</div>	
				</div>
			</div>	
		</div>
	</div>
	<div class="slider-wrap home-1-slider" id="home">
		<div id="mainSlider" class="nivoSlider slider-image">
			<img src="{{asset('depan/img/bg1.jpg')}}" alt="main slider" title="#htmlcaption1"/>
			<img src="{{asset('depan/img/bg2.jpg')}}" alt="main slider" title="#htmlcaption2"/>
		</div>
		<div id="htmlcaption1" class="nivo-html-caption slider-caption-1">
			<div class="slider-progress"></div>	
			<div class="container">
				<div class="row">
					<div class="col-md-12">						
						<div class="slide1-text slide-text">
							<div class="middle-text">
								<div class="left_sidet1">
									<div class="cap-title wow slideInRight" data-wow-duration=".9s" data-wow-delay="0s">
										<h1>BALAI PELATIHAN DAN PENERAPAN TEKNOLOGI PERTANIAN PROVINSI KALIMANTAN SELATAN</h1>
									</div>
									<div class="cap-dec wow slideInRight" data-wow-duration="1.1s" data-wow-delay="0s">
										<h2>Aplikasi Manajemen Data Penyuluhan Pertanian Berbasis Web</h2>
									</div>	
									<div class="cap-readmore animated fadeInUpBig" data-wow-duration="1.5s" data-wow-delay=".5s">
										<a href="#about" class="hover_slider_button">Tentang Kami</a>
									</div>
								</div>
								<div class="right_sidet1">
									<div class="slide-image1 ">
										<br>
										<br>
										<img class="wow slideInUp "  data-wow-duration="1.5s" data-wow-delay="0s" src="{{asset('depan/img/head1.jpg')}}" alt="slider caption" />
									</div>									
								</div>				
							</div>	
						</div>		
					</div>
				</div>
			</div>					
		</div>
		<div id="htmlcaption2" class="nivo-html-caption slider-caption-2">
			<div class="slider-progress"></div>				
			<div class="container">
				<div class="row">
					<div class="col-md-12">		
						<div class="slide2-text slide-text">
							<div class="middle-text">
								<div class="left_sidet1">
									<div class="cap-title wow bounceInDown" data-wow-duration=".9s" data-wow-delay="0s">
										<h1>BALAI PELATIHAN DAN PENERAPAN TEKNOLOGI PERTANIAN PROVINSI KALIMANTAN SELATAN</h1>
									</div>
									<div class="cap-dec wow slideInRight" data-wow-duration="1.1s" data-wow-delay="0s">
									<h2>Aplikasi Manajemen Data Penyuluhan Pertanian Berbasis Web</h2>
									</div>	
									<div class="cap-readmore animated fadeInUpBig" data-wow-duration="1.5s" data-wow-delay=".5s">
										<a href="#about" class="hover_slider_button">Tentang Kami</a>
									</div>
								</div>
								<div class="right_sidet1">
									<div class="slide-image2">
										<br>
										<br>
										<img class="wow slideInUp"  data-wow-duration="1.5s" data-wow-delay="0s" src="{{asset('depan/img/head2.jpg')}}" alt="slider caption" />
									</div>									
								</div>										
							</div>										
						</div>	
					</div>
				</div>
			</div>	
		</div>	
	</div>
	<div class="about_area" id="about">
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-sm-12 col-lg-12">	
					<div class="section_title text-center">
						<img class="" src="{{asset('depan/img/logo.png')}}" alt="" / width="150px">
						<br>
						<br>
						<h2 class="title text-center" style="text-decoration:none !important;"><span>About Us</span></h2>
					</div>
				</div>
			</div>		
			<div class="row">
				<h4 class="text-center">Balai Pelatihan dan Penerapan Teknologi Pertanian  Provinsi Kalimantan Selatan adalah UPTD atau unit pelaksana teknis daerah yang berfungsi untuk Melaksanakan pembinaan dan pelatihan, bimbingan kerjasama dalam penggunaan dan penerapan teknologi pertanian tanaman pangan dan hortikultura sesuai dengan ketentuan yang berlaku untuk pengembangan teknologi pertanian yang berkelanjutan.</h4>
			</div>
		</div>	
</div>
	<div class="service_area service_color" id="services">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<div class="service_thum">
						<div class="service_img"><img src="{{asset('depan/img/home1/1.png')}}" alt="" /></div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="row">
						<div class="col-md-12">	
							<div class="section_title">
								<h2 class="title"><span>Manfaat Aplikasi</span></h2>
							</div>
						</div>
					</div>				
					<div class="row">
						<div class="col-sm-12 col-md-12 col-lg-12">
							<div class="icon"><i class="fa fa-bolt"></i></div>
							<div class="about_content">
								<p>Memudahkan Pegawai BPPTP Kabupaten Tanah Laut dalam mengelola kegiatan pelatihan pertanian </p>
							</div>						
						</div>						
						<div class="col-sm-12 col-md-12 col-lg-12">
							<div class="icon"><i class="fa fa-laptop"></i></div>
							<div class="about_content">
								<p>	Memudahkan pihak dari setiap kecamatan dalam merekomendasikan peserta pelatihan pertanian.</p>
							</div>
						</div>							
						<div class="col-sm-12 col-md-12 col-lg-12">
							<div class="icon"><i class="fa fa-briefcase"></i></div>
							<div class="about_content">
								<p>Memudahkan pelaku agribisnis maupun masyarakat dalam mengakses informasi terkait dengan kegiatan pelatihan pertanian serta berita-berita tentang pemanfaatan teknologi di bidang pertanian. </p>
							</div>
						</div>
					</div>
				</div>				
			</div>
		</div>	
	</div>
	<div class="blog_area" id="blogs">
		<div class="container">
			<div class="row">
				<div class="col-md-12">	
					<div class="section_title">
						<h2 class="title"><span>Berita Kegiatan</span></h2>
					</div>
				</div>
			</div>			
			<div class="row">
				<div class="team_own curosel-style">
				<div class="col-md-12">
					<div class="blog_content">
						<div class="blog_img hover_effect blog_hover">
							<a href="blog-deatils-1.html"><img src="{{asset('depan/img/blog/b4.jpg')}}" alt="" /></a>
							<div class="bolg_date">
								<a href="blog-deatils-1.html">
									<span>28</span>
									<span class="month">sept</span>
								</a>
							</div>
							
						</div>
						<div class="blog_comment fix">
							<ul>
								<li><a href="#"><i class="fa fa-picture-o"></i></a></li>
								<li><a href="#"><i class="fa fa-user"></i>Authur</a></li>
								<li><a href="#"><i class="fa fa-comment-o"></i>12 Comments</a></li>
							</ul>
						</div>
						<div class="blog_text">
							<h2><a href="blog-deatils-1.html">Sample text image blogs ...</a></h2>
							<p>Aliquam sed libero neque. Duis ut finibus dui. Sed egestas elit tortor, vel volutpat est ultrices sed. </p>
							<a href="#">See more ...</a>
						</div>
					</div>
				</div>
				<div class="col-md-12">
					<div class="blog_content">
						<div class="blog_img hover_effect blog_hover">
							<a href="blog-deatils-1.html"><img src="{{asset('depan/img/blog/b4.jpg')}}" alt="" /></a>
							<div class="bolg_date">
								<a href="blog-deatils-1.html">
									<span>28</span>
									<span class="month">sept</span>
								</a>
							</div>
							
						</div>
						<div class="blog_comment fix">
							<ul>
								<li><a href="#"><i class="fa fa-picture-o"></i></a></li>
								<li><a href="#"><i class="fa fa-user"></i>Authur</a></li>
								<li><a href="#"><i class="fa fa-comment-o"></i>12 Comments</a></li>
							</ul>
						</div>
						<div class="blog_text">
							<h2><a href="blog-deatils-1.html">Aliquam sed libero neque ...</a></h2>
							<p>Aliquam sed libero neque. Duis ut finibus dui. Sed egestas elit tortor, vel volutpat est ultrices sed. </p>
							<a href="#">See more ...</a>
						</div>
					</div>
				</div>
				<div class="col-md-12">
					<div class="blog_content">
						<div class="blog_img hover_effect blog_hover">
							<a href="blog-deatils-1.html"><img src="{{asset('depan/img/blog/b4.jpg')}}" alt="" /></a>
							<div class="bolg_date">
								<a href="blog-deatils-1.html">
									<span>28</span>
									<span class="month">sept</span>
								</a>
							</div>
							
						</div>
						<div class="blog_comment fix">
							<ul>
								<li><a href="#"><i class="fa fa-picture-o"></i></a></li>
								<li><a href="#"><i class="fa fa-user"></i>Authur</a></li>
								<li><a href="#"><i class="fa fa-comment-o"></i>12 Comments</a></li>
							</ul>
						</div>
						<div class="blog_text">
							<h2><a href="blog-deatils-1.html">Sample text image blogs ...</a></h2>
							<p>Aliquam sed libero neque. Duis ut finibus dui. Sed egestas elit tortor, vel volutpat est ultrices sed. </p>
							<a href="#">See more ...</a>
						</div>
					</div>
				</div>
				<div class="col-md-12">
					<div class="blog_content">
						<div class="blog_img hover_effect blog_hover">
							<a href="blog-deatils-1.html"><img src="{{asset('depan/img/blog/b4.jpg')}}" alt="" /></a>
							<div class="bolg_date">
								<a href="blog-deatils-1.html">
									<span>28</span>
									<span class="month">sept</span>
								</a>
							</div>
							
						</div>
						<div class="blog_comment fix">
							<ul>
								<li><a href="#"><i class="fa fa-picture-o"></i></a></li>
								<li><a href="#"><i class="fa fa-user"></i>Authur</a></li>
								<li><a href="#"><i class="fa fa-comment-o"></i>12 Comments</a></li>
							</ul>
						</div>
						<div class="blog_text">
							<h2><a href="blog-deatils-1.html">Aliquam sed libero neque ...</a></h2>
							<p>Aliquam sed libero neque. Duis ut finibus dui. Sed egestas elit tortor, vel volutpat est ultrices sed. </p>
							<a href="#">See more ...</a>
						</div>
					</div>
				</div>
				<!--end single blog item-->
				<!--single blog item-->
				<div class="col-md-12">
					<div class="blog_content">
						<div class="blog_img hover_effect blog_hover">
							<a href="#"><img src="{{asset('depan/img/blog/b4.jpg')}}" alt="" /></a>
							<div class="bolg_date">
								<a href="blog-deatils-1.html">
									<span>28</span>
									<span class="month">sept</span>
								</a>
							</div>
							
						</div>
						<div class="blog_comment fix">
							<ul>
								<li><a href="#"><i class="fa fa-picture-o"></i></a></li>
								<li><a href="#"><i class="fa fa-user"></i>Authur</a></li>
								<li><a href="#"><i class="fa fa-comment-o"></i>12 Comments</a></li>
							</ul>
						</div>
						<div class="blog_text">
							<h2><a href="blog-deatils-1.html">Sample text image blogs ...</a></h2>
							<p>Aliquam sed libero neque. Duis ut finibus dui. Sed egestas elit tortor, vel volutpat est ultrices sed. </p>
							<a href="#">See more ...</a>
						</div>
					</div>
				</div>
				<!--end single blog item-->
				<!--single blog item-->
				<div class="col-md-12">
					<div class="blog_content">
						<div class="blog_img hover_effect blog_hover">
							<a href="blog-deatils-1.html"><img src="{{asset('depan/img/blog/b4.jpg')}}" alt="" /></a>
							<div class="bolg_date">
								<a href="blog-deatils-1.html">
									<span>28</span>
									<span class="month">sept</span>
								</a>
							</div>							
						</div>
						<div class="blog_comment fix">
							<ul>
								<li><a href="#"><i class="fa fa-picture-o"></i></a></li>
								<li><a href="#"><i class="fa fa-user"></i>Authur</a></li>
								<li><a href="#"><i class="fa fa-comment-o"></i>12 Comments</a></li>
							</ul>
						</div>
						<div class="blog_text">
							<h2><a href="blog-deatils-1.html">Sample text image blogs ...</a></h2>
							<p>Aliquam sed libero neque. Duis ut finibus dui. Sed egestas elit tortor, vel volutpat est ultrices sed. </p>
							<a href="#">See more ...</a>
						</div>
					</div>
				</div>
				<!--end single blog item-->					
				</div>
			</div>
		</div>	
	</div>
	<!--end blog area -->
	<div class="footer_area ">
		<div class="container">
			<div class="row">
				<!--section title-->
				<div class=" col-sm-12 col-md-12 col-lg-12">	
					<div class="section_title service_color">
						<h2 class="title"><span>Contact US</span></h2>
					</div>
				</div>
				<!--end section title-->
			</div>		
			<div class="row">
				<div class="col-sm-6 col-md-6 col-lg-6">
					<div class="single_address fix">
						<div class="address_icon"><span><i class="fa fa-map-marker"></i></span></div>
						<div class="address_text"><p><span>Address:</span> 123 Street- E14/E15 Cambridge, USA</p></div>
					</div>
					<div class="single_address fix">
						<div class="address_icon"><span><i class="fa fa-phone"></i></span></div>
						<div class="address_text"><p><span>Phone:</span>  (+12) 3456 7890</p></div>
					</div>
					<div class="single_address fix">
						<div class="address_icon"><span><i class="fa fa-envelope-o"></i></span></div>
						<div class="address_text"><p><span>Email: </span> info@liendo.com</p></div>
					</div>					
				</div>
				<div class="col-sm-6 col-md-6 col-lg-6">
					<div class="map">
					   <!-- Start contact-map -->
                            <div class="contact-map">
                                <div id="googleMap"></div>
                            </div>
						<!-- End contact-map -->
					</div>				
				</div>			
			</div>
		</div>			
	</div>
	<div class="footer_bottom_area" id="contact">
		<div class="container">
			<div class="row">
				<div class=" col-sm-12 col-md-12 col-lg-12">
					<div class="footer_text">
						<p>Copyright © 2015 <a href="http://bootexperts.com/">bootexperts.com</a>. All rights reserved.</p>
					</div>
				</div>
			</div>
		</div>	
	</div>

        <!-- JS -->        
 		<!-- jquery-1.11.3.min js
		============================================ -->         
        <script src="{{asset('depan/js/vendor/jquery-1.11.3.min.js')}}"></script>              
 		<!-- bootstrap js
		============================================ -->         
        <script src="{{asset('depan/js/bootstrap.min.js')}}"></script>      
   		<!-- owl.carousel.min js
		============================================ -->       
        <script src="{{asset('depan/js/owl.carousel.min.js')}}"></script>
	
		<!-- plugins js
		============================================ -->         
        <script src="{{asset('depan/js/plugins.js')}}"></script>	
        <!-- counterup js
		============================================ -->  		
        <script src="{{asset('depan/js/jquery.counterup.min.js')}}"></script>
		<script src="{{asset('depan/js/waypoints.min.js')}}"></script>
		<!-- MixItUp js-->        
		<script src="{{asset('depan/js/jquery.mixitup.js')}}"></script>
		 <!-- Nivo Slider JS -->
		<script src="{{asset('depan/js/jquery.nivo.slider.pack.js')}}"></script>       
		<script src="{{asset('depan/js/jquery.nav.js')}}"></script>           
   		<!-- wow js
		============================================ -->       
        <script src="{{asset('depan/js/wow.js')}}"></script>
		<!--Activating WOW Animation only for modern browser-->
        <!--[if !IE]><!-->
        <script type="text/javascript">new WOW().init();</script>
        <!--<![endif]-->
		<!-- Add venobox ja -->
		<script type="text/javascript" src="{{asset('depan/venobox/venobox.min.js')}}"></script>		
   		<!-- main js
		============================================ -->           
        <script src="{{asset('depan/js/main.js')}}"></script>
        <!-- Google Map js -->
        <script src="https://maps.googleapis.com/maps/api/js"></script>
        <script>
            function initialize() {
              var mapOptions = {
                zoom: 15,
                scrollwheel: false,
                center: new google.maps.LatLng(40.663293, -73.956351)
              };

              var map = new google.maps.Map(document.getElementById('googleMap'),
                  mapOptions);


              var marker = new google.maps.Marker({
                position: map.getCenter(),
                animation:google.maps.Animation.BOUNCE,
                icon: 'img/map-marker.png',
                map: map
              });

            }

            google.maps.event.addDomListener(window, 'load', initialize);
        </script>	
    </body>
</html>
