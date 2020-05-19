<!DOCTYPE html>
<!--[if IE]><![endif]-->
<!--[if lt IE 7 ]> <html lang="en" class="ie6">    <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="ie7">    <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="ie8">    <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="ie9">    <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Home One || Liendo</title>
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
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <!--Start nav  area --> 
	<div class="nav_area" id="sticker">
		<div class="container">
			<div class="row">
				<!--logo area-->
				<div class="col-md-3 col-sm-3 col-xs-4">
					<div class="logo"><a href="index.html"><img src="img/logo.png" alt="" /></a></div>
				</div>
				<!--end logo area-->
				<!--nav area-->
				<div class="col-md-9 col-sm-9 col-xs-8">
					<!--  nav menu-->
					<nav class="menu">
						<ul class="navid">
							<li><a href="#home">Home</a></li>
							<li><a href="#about">About</a></li>
							<li><a href="#teams">Teams</a></li>
							<li><a href="#projects">Projects</a></li>
							<li><a href="#pricing">Pricing</a></li>
							<li><a href="#services">Services</a></li>							
							<li><a href="#blogs">Blogs</a></li>
							<li><a href="#work">Work</a></li>
							<li><a href="#contact">Contact</a></li>
						</ul>
					</nav>
					<!--end  nav menu-->
					<!--moblie menu area-->
						<div class="dropdown mabile_menu">
							<a data-toggle="dropdown" class="mobile-menu" href="#"><span> MENU </span><i class="fa fa-bars"></i></a>
						  <ul class="dropdown-menu mobile_menus drop_mobile navid">
								<li><a href="index.html">Home</a></li>
								<li><a href="#about">About</a></li>
								<li><a href="#teams">Teams</a></li>
								<li><a href="#projects">Projects</a></li>
								<li><a href="#pricing">Pricing</a></li>
								<li><a href="#services">Services</a></li>							
								<li><a href="#blogs">Blogs</a></li>
								<li><a href="#work">Work</a></li>
								<li><a href="#contact">Contact</a></li>
						  </ul>
						</div>	
						<!--end moblie menu-->						
				</div>
				<!--end nav area-->
			</div>	
		</div>
	</div>
	<!--end header  area -->	
	<!-- HOME SLIDER -->
	<div class="slider-wrap home-1-slider" id="home">
		<div id="mainSlider" class="nivoSlider slider-image">
			<img src="{{asset('depan/img/slider.jpg')}}" alt="main slider" title="#htmlcaption1"/>
			<img src="{{asset('depan/img/slider.jpg')}}" alt="main slider" title="#htmlcaption2"/>
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
										<h1>Parallax & Responsive Template</h1>
									</div>
									<div class="cap-dec wow slideInRight" data-wow-duration="1.1s" data-wow-delay="0s">
										<h2>Liendo provides absolutely responsive and flexible layout, which adapts to any<br /> screen resolution. Each block will resize and fit any screen perfectly.</h2>
									</div>	
									<div class="cap-readmore animated fadeInUpBig" data-wow-duration="1.5s" data-wow-delay=".5s">
										<a href="#" >Buy now</a>
										<a href="#" class="hover_slider_button">Shop Now</a>
									</div>
								</div>
								<div class="right_sidet1">
									<div class="slide-image1">
										<img class="wow slideInUp"  data-wow-duration="1.5s" data-wow-delay="0s" src="{{asset('depan/img/home1/1.png')}}" alt="slider caption" />
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
										<h1>How to start your own business</h1>
									</div>
									<div class="cap-dec wow slideInRight" data-wow-duration="1.1s" data-wow-delay="0s">
										<h2>Liendo provides absolutely responsive and flexible layout, which adapts to any<br /> screen resolution. Each block will resize and fit any screen perfectly.</h2>
									</div>	
									<div class="cap-readmore animated fadeInUpBig" data-wow-duration="1.5s" data-wow-delay=".5s">
										<a href="#" >Buy now</a>
										<a href="#" class="hover_slider_button">Shop Now</a>
									</div>
								</div>
								<div class="right_sidet1">
									<div class="slide-image2">
										<img class="wow slideInUp"  data-wow-duration="1.5s" data-wow-delay="0s" src="{{asset('depan/img/home1/2.png')}}" alt="slider caption" />
									</div>									
								</div>										
							</div>										
						</div>	
					</div>
				</div>
			</div>	
		</div>	

	</div>
	<!-- HOME SLIDER -->
	<!-- about  area -->
	<div class="about_area" id="about">
		<div class="container">
			<div class="row">
				<!--section title-->
				<div class="col-md-12 col-sm-12 col-lg-12">	
					<div class="section_title">
						<h2 class="title"><span>About Us</span></h2>
					</div>
				</div>
				<!--end section title-->
			</div>		
			<div class="row">
				<!--single Item-->
				<div class="col-sm-6 col-md-3 col-lg-3">
					<div class="icon"><i class="fa fa-lightbulb-o "></i></div>
					<div class="about_content">
						<h2><span>Clean design</span></h2>
						<p>Maecenas efficitur et erat at mattis. Nullam finibus massa nec augue ullamcorper, </p>
					</div>
				</div>
				<!--single Item-->
				<div class="col-sm-6 col-md-3 col-lg-3">
					<div class="icon"><i class="fa fa-html5"></i></div>
					<div class="about_content">
						<h2><span>Html5 & CSS3</span></h2>
						<p>Praesent ornare ipsum at nulla pulvinar, imperdiet hendrerit dui suscipit. Aenean</p>
					</div>
				</div>
				<!--single Item-->
				<div class="col-sm-6 col-md-3 col-lg-3">
					<div class="icon"><i class="fa fa-cog"></i></div>
					<div class="about_content">
						<h2><span>Easy Customization</span></h2>
						<p>Vestibulum eget enim consequat neque iaculis mattis ac quis nunc. Aenean </p>
					</div>
				</div>
				<!--single Item-->
				<div class="col-sm-6 col-md-3 col-lg-3">
					<div class="icon">
						<i class="fa fa-laptop"></i>
					</div>
					<div class="about_content">
						<h2><span>Responsive Design</span></h2>
						<p>Etiam dolor quam, maximus vitae quam a, cursus dictum nibh. Vivamus a ex tellus.  </p>
					</div>
				</div>
				<!-- end single Item-->
			</div>
		</div>	
</div>
	<div class="service_area service_color" id="services">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<div class="service_thum">
						<div class="service_img"><img src="img/sr2.png" alt="" /></div>
					</div>
				</div>
				<div class="col-md-8">
					<div class="row">
						<!--section title-->
						<div class="col-md-12">	
							<div class="section_title">
								<h2 class="title"><span>Amazing Features</span></h2>
							</div>
						</div>
						<!--end section title-->
					</div>				
					<div class="row">
						<!--single service item-->						
						<div class="col-sm-6 col-md-6 col-lg-6">
							<div class="icon"><i class="fa fa-bolt"></i></div>
							<div class="about_content">
								<h2><span>Modern design Trends</span></h2>
								<p>Vestibulum feugiat cursus velit, vel maximus orci. Pellentesque et finibus est, eu pulvinar sapien. Aenean vel libero porta</p>
							</div>						
						</div>
						<!--end single service item-->
						<!--single service item-->							
						<div class="col-sm-6 col-md-6 col-lg-6">
							<div class="icon"><i class="fa fa-laptop"></i></div>
							<div class="about_content">
								<h2><span>Responsive Design</span></h2>
								<p>Vestibulum feugiat cursus velit, vel maximus orci. Pellentesque et finibus est, eu pulvinar sapien. Aenean vel libero porta</p>
							</div>
						</div>
						<!--end single service item-->
						<!--single service item-->						
						<div class="col-sm-6 col-md-6 col-lg-6">
							<div class="icon"><i class="fa fa-cogs"></i></div>
							<div class="about_content">
								<h2><span>Easy to Customize</span></h2>
								<p>Vestibulum feugiat cursus velit, vel maximus orci. Pellentesque et finibus est, eu pulvinar sapien. Aenean vel libero porta</p>
							</div>
						</div>
						<!--end single service item-->
						<!--single service item-->
						<div class="col-sm-6 col-md-6 col-lg-6">
							<div class="icon"><i class="fa fa-file-text-o"></i></div>
							<div class="about_content">
								<h2><span>Multi Layouts</span></h2>
								<p>Vestibulum feugiat cursus velit, vel maximus orci. Pellentesque et finibus est, eu pulvinar sapien. Aenean vel libero porta</p>
							</div>
						</div>
						<!--end single service item-->
						<!--single service item-->
						<div class="col-sm-6 col-md-6 col-lg-6">
							<div class="icon"><i class="fa fa-arrows-alt"></i></div>
							<div class="about_content">
								<h2><span>Retina Ready</span></h2>
								<p>Vestibulum feugiat cursus velit, vel maximus orci. Pellentesque et finibus est, eu pulvinar sapien. Aenean vel libero porta</p>
							</div>
						</div>
						<!--end single service item-->
						<!--single service item-->						
						<div class="col-sm-6 col-md-6 col-lg-6">
							<div class="icon"><i class="fa fa-briefcase"></i></div>
							<div class="about_content">
								<h2><span>24/7 Online Support</span></h2>
								<p>Vestibulum feugiat cursus velit, vel maximus orci. Pellentesque et finibus est, eu pulvinar sapien. Aenean vel libero porta</p>
							</div>
						</div>
						<!--end single service item-->
					</div>
				</div>				
			</div>
		</div>	
	</div>
	<!--blog area -->
	<div class="blog_area" id="blogs">
		<div class="container">
			<div class="row">
				<!--section title-->
				<div class="col-md-12">	
					<div class="section_title">
						<h2 class="title"><span>Blog Posts</span></h2>
					</div>
				</div>
				<!--end section title-->
			</div>			
			<div class="row">
				<div class="team_own curosel-style">
				<!--single blog item-->
				<div class="col-md-12">
					<div class="blog_content">
						<div class="blog_img hover_effect blog_hover">
							<a href="blog-deatils-1.html"><img src="img/blog/b1.jpg" alt="" /></a>
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
							<a href="blog-deatils-1.html"><img src="img/blog/b2.jpg" alt="" /></a>
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
							<a href="blog-deatils-1.html"><img src="img/blog/b3.jpg" alt="" /></a>
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
							<a href="blog-deatils-1.html"><img src="img/blog/b4.jpg" alt="" /></a>
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
							<a href="#"><img src="img/blog/b1.jpg" alt="" /></a>
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
							<a href="blog-deatils-1.html"><img src="img/blog/b2.jpg" alt="" /></a>
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
							<a href="blog-deatils-1.html"><img src="img/blog/b3.jpg" alt="" /></a>
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
							<a href="blog-deatils-1.html"><img src="img/blog/b4.jpg" alt="" /></a>
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
	<!--counter up area -->
	<div class="counterup_area" id="work">
		<div class="container">
			<div class="row">
				<!--single counterup item-->
				<div class=" col-sm-4 col-md-4 col-lg-4">
					<div class="counter_up">
						<div class="iconcounter"><i class="fa fa-coffee"></i></div>
						<div class="counter">
							<h1 class="number">18,450</h1>
							<p class="text">Questions Answered</p>
						</div>
					</div>
				</div>				
				<!--end single counterup item-->
				<!--single counterup item-->
				<div class=" col-sm-4 col-md-4 col-lg-4">
					<div class="counter_up">
						<div class="iconcounter cb2"><i class="fa fa-download"></i></div>
						<div class="counter ">
							<h1 class="number cn2">12,380</h1>
							<p class="text">Time Downloaded</p>
						</div>
					</div>
				</div>
				<!--end single counterup item-->
				<!--single counterup item-->
				<div class=" col-sm-4 col-md-4 col-lg-4">
					<div class="counter_up">
						<div class="iconcounter cb3"><i class="fa fa-heart"></i></div>
						<div class="counter">
							<h1 class="number cn3">34,292</h1>
							<p class="text">Heart Given</p>
						</div>
					</div>
				</div>
				<!--end single counterup item-->
			</div>		
		</div>	
	</div>
	<!--end counterup area -->
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
				<div class="col-sm-4 col-md-4 col-lg-4">
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
				<div class="col-sm-4 col-md-4 col-lg-4">
					<div class="map">
					   <!-- Start contact-map -->
                            <div class="contact-map">
                                <div id="googleMap"></div>
                            </div>
						<!-- End contact-map -->
					</div>				
				</div>
				<div class="col-sm-4 col-md-4 col-lg-4">
					<form action="mail.php" method="post">
						<div class="contract_us">
							<div class="inputt input_change">
								<span class="message_icon"><i class="fa fa-user"></i></span>
								<input type="text" name="name" class="form-control" id="name" placeholder="Name" required>
							</div>
							<div class="inputt input_change">
								<span class="message_icon"><i class="fa fa-envelope-o"></i></span>
								<input type="email" name="email" class="form-control" id="email" placeholder="Email" required>
							</div>
							<div class="inputt">
								<span class="message_icon"><i class="fa fa-external-link"></i></span>
								<textarea class="form-control" name="message"  rows="4" id="mes" placeholder="Message"></textarea>
							</div>
							<div class="sunmite_button">
								<button type="submit" name="ok">send message</button>
							</div>
						</div>
					</form>
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
