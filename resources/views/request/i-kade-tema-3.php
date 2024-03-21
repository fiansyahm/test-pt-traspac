<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
	<title>{{$data->fullname}} Resume</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
 	<meta name="description" content="Maxino is a personal portfolio HTML5 Maxino Template">
 	<meta name="keywords" content="Maxino, HTML5, portfolio, Template">
 	<meta name="author" content="CodexCoder">
	<link href="https://fonts.googleapis.com/css?family=Frank+Ruhl+Libre:300,400,500,700,900" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">

	<link rel="stylesheet" type="text/css" href="{{ asset('theme/maxino/assets/css/animate.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('theme/maxino/assets/css/bootstrap-grid.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('theme/maxino/assets/css/lightcase.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('theme/maxino/assets/css/swiper.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('theme/maxino/assets/css/icofont.min.css') }}">
	<link rel="shortcut icon" href="{{ asset('theme/maxino/assets/css/favicon.png') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('theme/maxino/assets/css/style.css') }}">
</head>
<body>
	<div class="shape-top"></div>
	<div class="shape-bottom"></div>
	<!-- mobile-nav section start here -->
	<div class="mobile-menu">
		<nav class="mobile-header d-xl-none">
			<div class="header-logo">
				<a href="index.html" class="logo"><img src="{{ asset('theme/maxino/assets/images/logo/logo.gif')}}" alt="logo"></a>
			</div>
			<div class="header-bar" id="open-button">
	            <span></span>
	            <span></span>
	            <span></span>
	        </div>
		</nav>
		<div class="menu-wrap">
			<div class="morph-shape" id="morph-shape" data-morph-open="M-1,0h101c0,0,0-1,0,395c0,404,0,405,0,405H-1V0z">
				<svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" viewBox="0 0 100 800" preserveAspectRatio="none">
					<path d="M-1,0h101c0,0-97.833,153.603-97.833,396.167C2.167,627.579,100,800,100,800H-1V0z"/>
				</svg>
			</div>
			<nav class="menu">
				<div class="mobile-menu-area d-xl-none">
			        <div class="mobile-menu-area-inner" id="scrollbar">
		                <div class="header-bar m-menu-bar">
		                    <a href="index.html" class="logo"><img src="{{ asset('theme/maxino/assets/images/logo/logo.gif')}}" alt="logo"></a>
		                    <div class="close-button" id="close-button"></div>
		                </div>
			            <ul class="m-menu">
		                	<li><a href="#Banner">Home</a></li>
							<li><a href="#About">About Me</a></li>
							<li><a href="#Resume">Resume</a></li>
							<li><a href="#Services">Services</a></li>
							{{-- <li><a href="#Portfolio">Portfolio</a></li>
							<li><a href="#Pricing">Pricing</a></li>
							<li><a href="#Clients">Clients</a></li>
							<li><a href="#Blog">Blog</a></li>
							<li><a href="#Contact">Contact</a></li> --}}
			            </ul>
		                <ul class="social-link-list d-flex flex-wrap">
		                    <li><a href="#" class="facebook"><i class="icofont-facebook"></i></a></li>
		                    <li><a href="#" class="twitter-sm"><i class="icofont-twitter"></i></a></li>
		                    <li><a href="#" class="linkedin"><i class="icofont-linkedin"></i></a></li>
		                    <li><a href="#" class="google"><i class="icofont-google-plus"></i></a></li>
		                </ul>
			        </div>
			    </div>
			</nav>
		</div>
	</div>
	<!-- mobile-nav section ending here -->

	<!-- header section start here -->
	<div class="header-section d-none d-xl-block">
		<div class="header">
			<nav class="primary-menu" id="navbar">
				<div class="container">
					<div class="menu-area">
						<div class="row no-gutters justify-content-between align-items-center">
							<div class="header-logo">
								<a href="index.html" class="logo"><img src="{{ asset('theme/maxino/assets/images/logo/logo.gif')}}" alt="logo"></a>
							</div>
							<ul class="main-menu d-flex">
								<li class="active"><a href="#Banner">Home</a></li>
								<li><a href="#About">About Me</a></li>
								<li><a href="#Resume">Resume</a></li>
								<li><a href="#Services">Services</a></li>
								{{-- <li><a href="#Portfolio">Portfolio</a></li>
								<li><a href="#Pricing">Pricing</a></li>
								<li><a href="#Clients">Clients</a></li>
								<li><a href="#Blog">Blog</a></li>
								<li><a href="#Contact">Contact</a></li> --}}
							</ul>
						</div>
					</div>
				</div>
			</nav>
		</div>
	</div>
	<!-- header section ending here -->
	<section class="banner" id="Banner">
		<div class="banner-area">
	        <div class="container">
	        	<div class="section-wrapper banner-wrapper">
		            <div class="row align-items-center">
		                <div class="col-lg-6 col-12">
		                    <div class="banner-content">
								<h1>Hello...</h1>
								<h1>I'm <span>{{$data->nickname}}</span> Grant A Professional</h1>
								<div class="dynamic-title cd-headline clip is-full-width">
									<h1 class="cd-words-wrapper" style="font-size: 30px">
										<b class="is-visible gold-title">{{$data->job}}</b>
										<b class="gold-title">{{$data->job}}</b>
										{{-- <b class="gold-title">Web Developer</b>
										<b class="gold-title">Web Designer</b> --}}
									</h1>
								</div>
								<a class="btn" href="{{$data->resume}}"><span>View My Resume</span><img src="{{ asset('theme/maxino/assets/images/icon/btn-1.png')}}" alt="icon" class="img-fluid"></a>
							</div>
		                </div>
		                <div class="col-lg-6 col-12">
		                    <div class="banner-thumb">
		                        <img src="{{$data->photo}}" alt="banner" class="img-fluid">
		                    </div>
		                </div>
		            </div>
	            </div>
	        </div>
	    </div>
    </section>

    <!-- box lay out -->
    <div class="box-shadow-style">
		<section class="banner-bottom">
			<div class="banner-bottom-pattan"></div>
			<div class="container">
				<div class="bottom-wrapper section-wrapper">
					<div class="post-item wow fadeInUp" data-wow-duration="1s" data-wow-delay=".1s">
						<div class="post-thumb">
							<img src="{{ asset('theme/maxino/assets/images/icon/01.png')}}" alt="banner">
						</div>
						<div class="post-content">
							<h5>Give me a Call</h5>
							<h5><span>{{$data->phone}}</span></h5>
						</div>
					</div>
					<div class="post-item wow fadeInUp" data-wow-duration="1s" data-wow-delay=".2s">
						<div class="post-thumb">
							<img src="{{ asset('theme/maxino/assets/images/icon/02.png')}}" alt="banner">
						</div>
						<div class="post-content">
							<h5>Send me a Message</h5>
							<h5><span>{{$data->email}}</span></h5>
						</div>
					</div>
					@if($data->address != null)
					<div class="post-item wow fadeInUp" data-wow-duration="1s" data-wow-delay=".1s">
						<div class="post-thumb">
							<img src="{{ asset('theme/maxino/assets/images/icon/03.png')}}" alt="banner">
						</div>
						<div class="post-content">
							<h5>Visit my address</h5>
							<h5><span>{{$data->address}}</span></h5>
						</div>
					</div>
					@endif
				</div>
			</div>
		</section>

		<section class="about padding-tb" id="About">
			<div class="particles" id="particles-js"></div>
			<div class="container">
				<div class="section-wrapper">
					<div class="about-left">
						<div class="title wow fadeInUp" data-wow-duration="1s" data-wow-delay=".1s">
							<h3>Welcome to My Portfolio</h3>
							<h2>Why <span>Many People</span> Love Us Believe My Awesome Services</h2>
						</div>
						<div class="about-thumb wow fadeInUp" data-wow-duration="1s" data-wow-delay=".2s">
							<img src="{{ asset('theme/maxino/assets/images/about/01.png')}}" alt="about" class="img-fluid">
						</div>
					</div>
					<div class="about-right">
						<div class="about-item">
							<div class="title">
								<span class="category wow fadeInUp" data-wow-duration="1s" data-wow-delay=".1s">Hello World</span>
								<h2 class=" wow fadeInUp" data-wow-duration="1s" data-wow-delay=".2s">I am <span>{{$data->nickname}}</span> UX Designer From New York City 1200. </h2>
								<p class=" wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s">{{$data->aboutme}}</p>
							</div>
							<div class="about-content wow fadeInUp" data-wow-duration="1s" data-wow-delay=".4s">
								<ul>
									<li>
										<div class="name">
											<p>Name</p>
										</div>
										<div class="info">
											<p>{{$data->fullname}}</p>
										</div>
									</li>
									@if($data->birth != null)
									<li>
										<div class="name">
											<p>Date of Birth</p>
										</div>
										<div class="info">
											<p>{{$data->birth}}</p>
										</div>
									</li>
									@endif
									@if($data->email != null)
									<li>
										<div class="name">
											<p>Email</p> 
										</div>
										<div class="info">
											<p>{{$data->email}}</p>
										</div>
									</li>
									@endif
									@if($data->phone != null)
									<li>
										<div class="name">
											<p>Phone</p>
										</div>
										<div class="info">
											<p>{{$data->phone}}</p>
										</div>
									</li>
									@endif
									@if($data->nationality != null)
									<li>
										<div class="name">
											<p>Nationality</p>
										</div>
										<div class="info">
											<p>{{$data->nationality}}</p>
										</div>
									</li>
									@endif
									@if($data->address != null)
									<li>
										<div class="name">
											<p>Adress</p>
										</div>
										<div class="info">
											<p>{{$data->address}}</p>
										</div>
									</li>
									@endif
									@if($data->linkedin != null)
									<li>
										<div class="name">
											<p>Linkedin</p>
										</div>
										<div class="info">
											<p>{{$data->linkedin}}</p>
										</div>
									</li>
									@endif
								</ul>
							</div>
							<a class="btn wow fadeInUp" data-wow-duration="1s" data-wow-delay=".5s" href="{{$data->resume}}"><span>Download Resume</span><img src="{{ asset('theme/maxino/assets/images/icon/btn-1.png')}}" alt="icon" class="img-fluid"></a>
						</div>
					</div>
				</div>
			</div>
		</section>

		<div class="sponsor wow fadeInUp" data-wow-duration="1s" data-wow-delay=".1s" style="background-image: url(assets/images/sponsor/bg.png);">
			<div class="container">
				<div class="section-wrapper">
					<div class="sponsor-slider">
					    <div class="swiper-wrapper">
					      	<div class="swiper-slide">
					      		<div class="sponsor-item">
					      			<img src="{{ asset('theme/maxino/assets/images/sponsor/01.png')}}" alt="sponsor">
					      		</div>
					      	</div>
					      	<div class="swiper-slide">
					      		<div class="sponsor-item">
					      			<img src="{{ asset('theme/maxino/assets/images/sponsor/02.png')}}" alt="sponsor">
					      		</div>
					      	</div>
					      	<div class="swiper-slide">
					      		<div class="sponsor-item">
					      			<img src="{{ asset('theme/maxino/assets/images/sponsor/03.png')}}" alt="sponsor">
					      		</div>
					      	</div>
					      	<div class="swiper-slide">
					      		<div class="sponsor-item">
					      			<img src="{{ asset('theme/maxino/assets/images/sponsor/04.png')}}" alt="sponsor">
					      		</div>
					      	</div>
					      	<div class="swiper-slide">
					      		<div class="sponsor-item">
					      			<img src="{{ asset('theme/maxino/assets/images/sponsor/05.png')}}" alt="sponsor">
					      		</div>
					      	</div>
					      	<div class="swiper-slide">
					      		<div class="sponsor-item">
					      			<img src="{{ asset('theme/maxino/assets/images/sponsor/06.png')}}" alt="sponsor">
					      		</div>
					      	</div>
					    </div>
				  	</div>
				</div>
			</div>
		</div>

		<section class="experience padding-tb" id="Resume" style="background-image: url(assets/images/exp/bg.png);">
			<div class="container">
				<div class="section-header">
					<div class="title">
						<span class="category wow fadeInUp" data-wow-duration="1s" data-wow-delay=".1s">Education & Experience</span>
						<h2 class="wow fadeInUp" data-wow-duration="1s" data-wow-delay=".2s">I Have Completed My Master <span>Degree & Experience</span> With Leading Companies</h2>
					</div>
				</div>
				<div class="section-wrapper">
					<?php
						// Konversi string JSON ke dalam bentuk array menggunakan json_decode
						$educational = json_decode($data->educational, true);
						$working = json_decode($data->working, true);
						$counter=0;
					?>

					@foreach ($educational['data'] as $item)
					<?php $counter++; ?>
					<div class="exp-item wow fadeInUp" data-wow-duration="1s" data-wow-delay=".1s">
						<div class="exp-inner">
							<div class="exp-thumb">
								<img src="{{ asset('theme/maxino/assets/images/exp/0' . $counter . '.png') }}" alt="experience">
								<h6>{{ $item['university'] }}</h6>
								<div class="exp-cata">
									<span>{{ $item['year'] }}</span>
								</div>
							</div>
							<div class="exp-content">
								<h3>{{ $item['degree'] }}</h3>
								<p>{{ $item['description'] }}</p>
							</div>
						</div>
					</div>
					@endforeach

					@foreach ($working['data'] as $item)
					<?php $counter++; ?>
					<div class="exp-item wow fadeInUp" data-wow-duration="1s" data-wow-delay=".1s">
						<div class="exp-inner">
							<div class="exp-thumb">
								<img src="{{ asset('theme/maxino/assets/images/exp/0' . $counter . '.png') }}" alt="experience">
								<h6>{{ $item['company'] }}</h6>
								<div class="exp-cata">
									<span>{{ $item['year'] }}</span>
								</div>
							</div>
							<div class="exp-content">
								<h3>{{ $item['position'] }}</h3>
								<p>{{ $item['description'] }}</p>
							</div>
						</div>
					</div>
					@endforeach
	
					
					
				</div>
				<div class="text-center wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s">
					<a class="btn" href="{{$data->resume}}"><span>Download My Resume</span><img src="{{ asset('theme/maxino/assets/images/icon/btn-1.png')}}" alt="icon" class="img-fluid"></a>
				</div>
			</div>
		</section>

		<section class="services padding-tb" id="Services" style="background-image: url(assets/images/service/bg.png);">
			<div class="container">
				<div class="section-header">
					<div class="title">
						<span class="category wow fadeInUp" data-wow-duration="1s" data-wow-delay=".1s">My Services</span>
						<h2 class="wow fadeInUp" data-wow-duration="1s" data-wow-delay=".2s">We Have Done Lot's of <span>My Best Services</span> Lets Check Some of Them</h2>
					</div>
				</div>
				<?php
                    // Konversi string JSON ke dalam bentuk array menggunakan json_decode
                    $skill = json_decode($data->skill, true);
					$counter=0;
                ?>
				<div class="section-wrapper">
					@foreach ($skill['data'] as $item)
					<?php $counter++; ?>
					<div class="service-item wow fadeInUp" data-wow-duration="1s" data-wow-delay=".1s">
						<div class="service-inner">
							<div class="service-content">
								<h3>{{ $item['name'] }}</h3>
								{{-- <p>Mnique deplo scalable catals forin Monec formu was unique</p>
								<ul>
									<li>Motion Graphic Design</li>
									<li>3D animation Design</li>
									<li>Info Graphic Design</li>
									<li>Vector Design</li>
								</ul> --}}
							</div>
							<div class="service-thumb">
								<img src="{{ asset('theme/maxino/assets/images/service/0' . $counter . '.png')}}" alt="services">
							</div>
						</div>
					</div>
					@endforeach
				</div>
			</div>
		</section>

		  {{-- <section class="portfolio padding-tb" id="Portfolio">
	    	<div class="container">
	    		<div class="portfolio-top">
					<div class="portfolio-left">
						<div class="section-header">
							<div class="title">
								<span class="category wow fadeInUp" data-wow-duration="1s" data-wow-delay=".1s">My Portfolio</span>
								<h2 class="wow fadeInUp" data-wow-duration="1s" data-wow-delay=".2s">We Have Done Lot's of <span>My Best Works</span> Lets Check Some of Them</h2>
							</div>
						</div>
					</div>
					<div class="portfolio-right wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s">
						<ul>
							<li data-filter="*" class="active"><i class="icofont-star"></i><span>All</span>Gallery</li>
							<li data-filter=".g-img"><i class="icofont-image"></i><span>Images</span>Gallery</li>
							<li data-filter=".v-img"><i class="icofont-play-alt-1"></i><span>Video</span>Gallery</li>
						</ul>
					</div>
				</div>
	    		<div class="section-wrapper">
	    			<div class="grid wow fadeInUp" data-wow-duration="1s" data-wow-delay=".4s">
	    				<div class="grid-item g-img">
		    				<div class="grid-inner">
		    					<div class="thumb">
		    						<a href="{{ asset('theme/maxino/assets/images/portfolio/01.jpg')}}" data-rel="lightcase:myCollection"><img src="{{ asset('theme/maxino/assets/images/portfolio/01.jpg')}}" alt="portfolio"></a>
		    					</div>
		    				</div>
	    				</div>
	    				<div class="grid-item g-img">
		    				<div class="grid-inner">
		    					<div class="thumb">
		    						<a href="{{ asset('theme/maxino/assets/images/portfolio/02.jpg')}}" data-rel="lightcase:myCollection"><img src="{{ asset('theme/maxino/assets/images/portfolio/02.jpg')}}" alt="portfolio"></a>
		    					</div>
		    				</div>
	    				</div>
	    				<div class="grid-item v-img">
		    				<div class="grid-inner">
		    					<div class="thumb">
		    						<img src="{{ asset('theme/maxino/assets/images/portfolio/03.jpg')}}" alt="portfolio">
		    						<div class="thumb-icon">
		    							<a href="https://www.youtube.com/embed/Oo72O42B0Ik" data-rel="lightcase:myCollection"><i class="icofont-ui-play"></i></a>
		    						</div>
		    					</div>
		    				</div>
	    				</div>
	    				<div class="grid-item g-img">
		    				<div class="grid-inner">
		    					<div class="thumb">
		    						<a href="{{ asset('theme/maxino/assets/images/portfolio/04.jpg')}}" data-rel="lightcase:myCollection"><img src="{{ asset('theme/maxino/assets/images/portfolio/04.jpg')}}" alt="portfolio"></a>
		    					</div>
		    				</div>
	    				</div>
	    				<div class="grid-item g-img">
		    				<div class="grid-inner">
		    					<div class="thumb">
		    						<a href="{{ asset('theme/maxino/assets/images/portfolio/06.jpg')}}" data-rel="lightcase:myCollection"><img src="{{ asset('theme/maxino/assets/images/portfolio/06.jpg')}}" alt="portfolio"></a>
		    					</div>
		    				</div>
	    				</div>
	    				<div class="grid-item v-img">
		    				<div class="grid-inner">
		    					<div class="thumb">
		    						<img src="{{ asset('theme/maxino/assets/images/portfolio/05.jpg')}}" alt="portfolio">
		    						<div class="thumb-icon">
		    							<a href="https://www.youtube.com/embed/O9w8JlbsbrY" data-rel="lightcase:myCollection"><i class="icofont-ui-play"></i></a>
		    						</div>
		    					</div>
		    				</div>
	    				</div>
	    			</div>
	    		</div>
	    	</div>
	    </section>

	    <section class="pricing padding-tb" id="Pricing" style="background-image: url(assets/images/pricing/bg.png);">
	    	<div class="container">
	    		<div class="section-header">
	    			<div class="title">
	    				<span class="category wow fadeInUp" data-wow-duration="1s" data-wow-delay=".1s">Pricing Plan</span>
	    				<h2 class="wow fadeInUp" data-wow-duration="1s" data-wow-delay=".2s">No Hidden Charge,Choose Your <span>Best Pricing Plan</span></h2>
	    			</div>
	    		</div>
	    		<div class="section-wrapper">
	    			<div class="pricing-item wow fadeInUp" data-wow-duration="1s" data-wow-delay=".1s">
	    				<div class="pricing-inner">
	    					<div class="pricing-content">
	    						<div class="pricing-header">
	    							<h3>Silver Plan</h3>
	    							<p>Holisticly initiate functionalized information without viral imperatives.</p>
	    						</div>
	    						<div class="pricing-body">
	    							<div class="pricing-title">
	    								<h5>Usd</h5>
	    								<h3>$20<span>/Onetime</span></h3>
	    								<p>For Onetime Services only</p>
	    							</div>
	    							<ul class="pricing-list">
	    								<li>4 Hosting Attendance</li>
	    								<li>9 Email Marketing</li>
	    								<li>3 Data Bases</li>
	    								<li>2 Design Pack</li>
	    								<li>3 Website Layouts</li>
	    								<li>5 Header Style</li>
	    							</ul>
	    							<div class="text-center">
	    								<a href="#" class="btn">Choose Plan<i class="icofont-rounded-double-right"></i></a>
	    							</div>
	    						</div>
	    					</div>
	    				</div>
	    			</div>
	    			<div class="pricing-item wow fadeInUp" data-wow-duration="1s" data-wow-delay=".2s">
	    				<div class="pricing-inner">
	    					<div class="pricing-content">
	    						<div class="pricing-header">
	    							<h3>Gold Plan</h3>
	    							<p>Holisticly initiate functionalized information without viral imperatives.</p>
	    						</div>
	    						<div class="pricing-body">
	    							<div class="pricing-title">
	    								<h5>Usd</h5>
	    								<h3>$40<span>/Onetime</span></h3>
	    								<p>For Onetime Services only</p>
	    							</div>
	    							<ul class="pricing-list">
	    								<li>4 Hosting Attendance</li>
	    								<li>9 Email Marketing</li>
	    								<li>3 Data Bases</li>
	    								<li>2 Design Pack</li>
	    								<li>3 Website Layouts</li>
	    								<li>5 Header Style</li>
	    							</ul>
	    							<div class="text-center">
	    								<a href="#" class="btn"><span>Choose Plan</span><i class="icofont-rounded-double-right"></i></a>
	    							</div>
	    						</div>
	    					</div>
	    				</div>
	    			</div>
	    			<div class="pricing-item wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s">
	    				<div class="pricing-inner">
	    					<div class="pricing-content">
	    						<div class="pricing-header">
	    							<h3>Platinum Plan</h3>
	    							<p>Holisticly initiate functionalized information without viral imperatives.</p>
	    						</div>
	    						<div class="pricing-body">
	    							<div class="pricing-title">
	    								<h5>Usd</h5>
	    								<h3>$60<span>/Onetime</span></h3>
	    								<p>For Onetime Services only</p>
	    							</div>
	    							<ul class="pricing-list">
	    								<li>4 Hosting Attendance</li>
	    								<li>9 Email Marketing</li>
	    								<li>3 Data Bases</li>
	    								<li>2 Design Pack</li>
	    								<li>3 Website Layouts</li>
	    								<li>5 Header Style</li>
	    							</ul>
	    							<div class="text-center">
	    								<a href="#" class="btn"><span>Choose Plan</span><i class="icofont-rounded-double-right"></i></a>
	    							</div>
	    						</div>
	    					</div>
	    				</div>
	    			</div>
	    		</div>
	    	</div>
	    </section>

	    <section class="testimonial padding-tb" id="Clients" style="background-image: url(assets/images/testimonial/bg.png);">
			<div class="particles" id="particles-js2"></div>
	    	<div class="container">
	    		<div class="section-header">
	    			<div class="title">
	    				<span class="category wow fadeInUp" data-wow-duration="1s" data-wow-delay=".1s">Testimonial</span>
	    				<h2 class=" wow fadeInUp" data-wow-duration="1s" data-wow-delay=".2s">Client’s Feedback Latest Reviews <span>From My Clients</span></h2>
	    			</div>
	    		</div>
	    		<div class="section-wrapper wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s">
	    			<div class="testimonial-slider">
	    				<div class="swiper-wrapper">
					      	<div class="swiper-slide">
					      		<div class="testimonial-item">
					      			<div class="testimonial-inner">
					      				<div class="testimonial-head">
					      					<div class="testi-top">
						      					<div class="testimonial-thumb">
						      						<img src="{{ asset('theme/maxino/assets/images/testimonial/01.png')}}" alt="testimonial">
						      					</div>
						      					<div class="name-des">
						      						<h5>Robot Doe</h5>
						      						<h6>Founder</h6>
						      					</div>
						      				</div>
					      					<img src="{{ asset('theme/maxino/assets/images/testimonial/logo/01.png')}}" alt="testimonial">
					      				</div>
					      				<div class="testimonial-body">
					      					<p>Cabiorve Leveraer Atherin Anding That Qua Bwdh Thoun Covaen Theme Any Vaue Coor Dinaterg Cabiorve Leverag Athern And That Qualit Bwdth Throur Covaen Theme Valueig Cooring Dnate Caborve Leveraer Ather And Bwdh Thoun Covaen Theme Anying Vauery Bwdth Throuing Covaent Theme</p>
					      				</div>
					      				<div class="testimonial-footer">
					      					<ul>
					      						<li><i class="icofont-ui-rate-blank"></i></li>
					      						<li><i class="icofont-ui-rate-blank"></i></li>
					      						<li><i class="icofont-ui-rate-blank"></i></li>
					      						<li><i class="icofont-ui-rate-blank"></i></li>
					      						<li><i class="icofont-ui-rate-blank"></i></li>
					      					</ul>
					      					<img src="{{ asset('theme/maxino/assets/images/testimonial/logo/04.png')}}" alt="testimonial">
					      				</div>
					      			</div>
					      		</div>
					      	</div>
					      	<div class="swiper-slide">
					      		<div class="testimonial-item">
					      			<div class="testimonial-inner">
					      				<div class="testimonial-head">
					      					<div class="testi-top">
						      					<div class="testimonial-thumb">
						      						<img src="{{ asset('theme/maxino/assets/images/testimonial/02.png')}}" alt="testimonial">
						      					</div>
						      					<div class="name-des">
						      						<h5>Emma Grant</h5>
						      						<h6>Founder</h6>
						      					</div>
						      				</div>
					      					<img src="{{ asset('theme/maxino/assets/images/testimonial/logo/02.png')}}" alt="testimonial">
					      				</div>
					      				<div class="testimonial-body">
					      					<p>Cabiorve Leveraer Atherin Anding That Qua Bwdh Thoun Covaen Theme Any Vaue Coor Dinaterg Cabiorve Leverag Athern And That Qualit Bwdth Throur Covaen Theme Valueig Cooring Dnate Caborve Leveraer Ather And Bwdh Thoun Covaen Theme Anying Vauery Bwdth Throuing Covaent Theme</p>
					      				</div>
					      				<div class="testimonial-footer">
					      					<ul>
					      						<li><i class="icofont-ui-rate-blank"></i></li>
					      						<li><i class="icofont-ui-rate-blank"></i></li>
					      						<li><i class="icofont-ui-rate-blank"></i></li>
					      						<li><i class="icofont-ui-rate-blank"></i></li>
					      						<li><i class="icofont-ui-rate-blank"></i></li>
					      					</ul>
					      					<img src="{{ asset('theme/maxino/assets/images/testimonial/logo/04.png')}}" alt="testimonial">
					      				</div>
					      			</div>
					      		</div>
					      	</div>
					      	<div class="swiper-slide">
					      		<div class="testimonial-item">
					      			<div class="testimonial-inner">
					      				<div class="testimonial-head">
					      					<div class="testi-top">
						      					<div class="testimonial-thumb">
						      						<img src="{{ asset('theme/maxino/assets/images/testimonial/03.png')}}" alt="testimonial">
						      					</div>
						      					<div class="name-des">
						      						<h5>Eddie Do</h5>
						      						<h6>Founder</h6>
						      					</div>
					      					</div>
					      					<img src="{{ asset('theme/maxino/assets/images/testimonial/logo/03.png')}}" alt="testimonial">
					      				</div>
					      				<div class="testimonial-body">
					      					<p>Cabiorve Leveraer Atherin Anding That Qua Bwdh Thoun Covaen Theme Any Vaue Coor Dinaterg Cabiorve Leverag Athern And That Qualit Bwdth Throur Covaen Theme Valueig Cooring Dnate Caborve Leveraer Ather And Bwdh Thoun Covaen Theme Anying Vauery Bwdth Throuing Covaent Theme</p>
					      				</div>
					      				<div class="testimonial-footer">
					      					<ul>
					      						<li><i class="icofont-ui-rate-blank"></i></li>
					      						<li><i class="icofont-ui-rate-blank"></i></li>
					      						<li><i class="icofont-ui-rate-blank"></i></li>
					      						<li><i class="icofont-ui-rate-blank"></i></li>
					      						<li><i class="icofont-ui-rate-blank"></i></li>
					      					</ul>
					      					<img src="{{ asset('theme/maxino/assets/images/testimonial/logo/04.png')}}" alt="testimonial">
					      				</div>
					      			</div>
					      		</div>
					      	</div>
				      	</div>
	    			</div>
	    		</div>
	    	</div>
	    </section>

	    <section class="blog padding-tb" id="Blog">
	    	<div class="container">
	    		<div class="blog-header-part">
		    		<div class="section-header">
		    			<div class="title">
		    				<span class="category wow fadeInUp" data-wow-duration="1s" data-wow-delay=".1s">Blog Post</span>
		    				<h2 class="wow fadeInUp" data-wow-duration="1s" data-wow-delay=".2s">Recent News Latest Posts <span>From My Blog</span></h2>
		    			</div>
		    		</div>
		    		<a href="blog.html" class="btn wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s"><span>View All Blog</span><i class="icofont-double-right"></i></a>
		    	</div>
	    		<div class="section-wrapper">
	    			<div class="post-item wow fadeInUp" data-wow-duration="1s" data-wow-delay=".1s">
	    				<div class="post-inner">
	    					<div class="post-thumb">
	    						<a href="blog.html"><img src="{{ asset('theme/maxino/assets/images/blog/01.jpg')}}" alt="blog"></a>
	    					</div>
	    					<div class="post-content">
								<ul class="content-left">
									<li>
										<a href="#"><img src="{{ asset('theme/maxino/assets/images/blog/icon/01.png')}}" alt="blog"></a>
										<p>04</p>
										<ul class="social-media-list">
											<li>
												<a href="#" class="facebook"><i class="icofont-facebook"></i></a>
											</li>
											<li>
												<a href="#" class="twitter"><i class="icofont-twitter"></i></a>
											</li>
											<li>
												<a href="#" class="linkedin"><i class="icofont-linkedin"></i></a>
											</li>
										</ul>
									</li>
									<li>
										<a href="#"><img src="{{ asset('theme/maxino/assets/images/blog/icon/02.png')}}" alt="icon"></a>
										<p>15</p>
									</li>
									<li>
										<a href="#"><img src="{{ asset('theme/maxino/assets/images/blog/icon/03.png')}}" alt="icon"></a>
										<p>12</p>
									</li>
								</ul>
								<div class="content-part">
									<div class="entry-header">
										<div class="entry-meta">
											<p class="byline">
												Admin :<a href="#">Emma Grant</a>
											</p>
											<p class="posted-on">
												Date :<a href="#">14 April 2018</a>
											</p>
										</div>
										<h3><a href="blog.html">Ectain World Strain Blog Tegc Actuaze Wide World Strateic</a></h3>
									</div>
									<div class="entry-content">
										<p>Qnteate Supple Chan Though Marke Poston Bestng Practces Chain Throuh Marke Postonn Bestn Practces eractve Fashion Fashion Economically And Sound Qources For</p>
										<a href="#" class="btn">Read More <i class="icofont-double-right"></i></a>
									</div>
								</div>
							</div>
	    				</div>
	    			</div>
	    			<div class="post-item wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s">
	    				<div class="post-inner">
	    					<div class="post-thumb">
	    						<a href="blog.html"><img src="{{ asset('theme/maxino/assets/images/blog/02.jpg')}}" alt="blog"></a>
	    					</div>
	    					<div class="post-content">
								<ul class="content-left">
									<li>
										<a href="#"><img src="{{ asset('theme/maxino/assets/images/blog/icon/01.png')}}" alt="blog"></a>
										<p>04</p>
										<ul class="social-media-list">
											<li>
												<a href="#" class="facebook"><i class="icofont-facebook"></i></a>
											</li>
											<li>
												<a href="#" class="twitter"><i class="icofont-twitter"></i></a>
											</li>
											<li>
												<a href="#" class="linkedin"><i class="icofont-linkedin"></i></a>
											</li>
										</ul>
									</li>
									<li>
										<a href="#"><img src="{{ asset('theme/maxino/assets/images/blog/icon/02.png')}}" alt="icon"></a>
										<p>15</p>
									</li>
									<li>
										<a href="#"><img src="{{ asset('theme/maxino/assets/images/blog/icon/03.png')}}" alt="icon"></a>
										<p>12</p>
									</li>
								</ul>
								<div class="content-part">
									<div class="entry-header">
										<div class="entry-meta">
											<p class="byline">
												Admin :<a href="#">Emma Grant</a>
											</p>
											<p class="posted-on">
												Date :<a href="#">14 April 2018</a>
											</p>
										</div>
										<h3><a href="blog.html">Ectain World Strain Blog Tegc Actuaze Wide World Strateic</a></h3>
									</div>
									<div class="entry-content">
										<p>Qnteate Supple Chan Though Marke Poston Bestng Practces Chain Throuh Marke Postonn Bestn Practces eractve Fashion Fashion Economically And Sound Qources For</p>
										<a href="#" class="btn">Read More <i class="icofont-double-right"></i></a>
									</div>
								</div>
							</div>
	    				</div>
	    			</div>
	    		</div>
	    	</div>
	    </section>

	    <section class="contact padding-tb" id="Contact" style="background-image: url(assets/images/contact/bg.png);">
	    	<div class="container">
				<div class="section-header">
					<div class="title">
						<span class="category wow fadeInUp" data-wow-duration="1s" data-wow-delay=".1s">Hire Me</span>
						<h2 class="wow fadeInUp" data-wow-duration="1s" data-wow-delay=".2s">I Am Available For Your Next Awesome Project <span>Then Hire Me!</span></h2>
					</div>
				</div>
	    		<div class="section-wrapper">
	    			<div class="maps wow fadeInUp" data-wow-duration="1s" data-wow-delay=".2s" id="gmap"></div>
	    			<section class="banner-bottom">
						<div class="bottom-wrapper">
							<div class="post-item wow fadeInUp" data-wow-duration="1s" data-wow-delay=".1s">
								<div class="post-thumb">
									<img src="{{ asset('theme/maxino/assets/images/icon/01.png')}}" alt="banner">
								</div>
								<div class="post-content">
									<h5>Give us a Call</h5>
									<h5><span>001-888-123-4567</span></h5>
								</div>
							</div>
							<div class="post-item wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s">
								<div class="post-thumb">
									<img src="{{ asset('theme/maxino/assets/images/icon/02.png')}}" alt="banner">
								</div>
								<div class="post-content">
									<h5>Send us a Message</h5>
									<h5><span>maxinoadmin@mail.com</span></h5>
								</div>
							</div>
							<div class="post-item wow fadeInUp" data-wow-duration="1s" data-wow-delay=".6s">
								<div class="post-thumb">
									<img src="{{ asset('theme/maxino/assets/images/icon/03.png')}}" alt="banner">
								</div>
								<div class="post-content">
									<h5>Visit our Location</h5>
									<h5><span>02/07 Suitland Street 120</span></h5>
								</div>
							</div>
						</div>
					</section>
	    			<form>
		    			<div class="row">
		    				<div class="col-sm-6">
		    					<div class="form-group wow fadeInUp" data-wow-duration="1s" data-wow-delay=".1s">
		    						<input type="text" name="name" placeholder="Your Message*">
		    					</div>
		    					<div class="form-group wow fadeInUp" data-wow-duration="1s" data-wow-delay=".1s">
		    						<input type="email" name="email" placeholder="Your Email*">
		    					</div>
		    					<div class="form-group wow fadeInUp" data-wow-duration="1s" data-wow-delay=".2s">
		    						<input type="text" placeholder="Your Subject*">
		    					</div>
		    				</div>
		    				<div class="col-sm-6">
		    					<div class="form-group wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s">
		    						<textarea placeholder="Message" rows="4"></textarea>
		    					</div>
		    					<div class="form-group wow fadeInUp" data-wow-duration="1s" data-wow-delay=".4s">
		    						<a href="#" class="btn"><span>Submit Message</span><img src="{{ asset('theme/maxino/assets/images/icon/btn-2.png')}}" alt="icon" class="img-fluid"></a>
		    					</div>
		    				</div>
		    			</div>
		    		</form>
	    		</div>
	    	</div>
	    </section> --}}

    </div>
    <!-- box lay out end -->

    <div class="footer">
    	<div class="container">
    		<div class="text-center">
	    		<a href="index.html" class="footer-logo wow fadeInUp" data-wow-duration="1s" data-wow-delay=".1s"><img src="{{ asset('theme/maxino/assets/images/logo/footer-logo.png')}}" alt="footer"></a>
	    		<p class="wow fadeInUp" data-wow-duration="1s" data-wow-delay=".2s">
	    			&copy; 2019. Maxino Designed By <a href="https://themeforest.net/user/labartisan">LabArtisan</a>
	    		</p>
	    		<ul class="social-link-list wow fadeInUp" data-wow-duration="1s" data-wow-delay=".1s">
	    			<li>
	    				<a href="#"><i class="icofont-twitter"></i></a>
	    			</li>
	    			<li>
	    				<a href="#"><i class="icofont-vimeo"></i></a>
	    			</li>
	    			<li>
	    				<a href="#"><i class="icofont-rss"></i></a>
	    			</li>
	    			<li>
	    				<a href="#"><i class="icofont-dribbble"></i></a>
	    			</li>
	    			<li>
	    				<a href="#"><i class="icofont-instagram"></i></a>
	    			</li>
	    		</ul>
	    	</div>
    	</div>
    </div>

    <!-- scrollToTop start here -->
	<a href="#" class="scrollToTop"><i class="icofont-double-left"></i></a>
	<!-- scrollToTop ending here -->


  	<script src="{{ asset('theme/maxino/assets/js/jquery.js') }}"></script>
    <script src="{{ asset('theme/maxino/assets/js/snap.svg-min.js') }}"></script>
    <script src="{{ asset('theme/maxino/assets/js/classie.js') }}"></script>
    <script src="{{ asset('theme/maxino/assets/js/main3.js') }}"></script>
  	<script src="{{ asset('theme/maxino/assets/js/bootstrap.min.js') }}"></script>
  	<script src="{{ asset('theme/maxino/assets/js/particle.js') }}"></script>
  	<script src="{{ asset('theme/maxino/assets/js/swiper.min.js') }}"></script>
  	<script src="{{ asset('theme/maxino/assets/js/lightcase.js') }}"></script>
  	<script src="{{ asset('theme/maxino/assets/js/waypoints.min.js') }}"></script>
  	<script src="{{ asset('theme/maxino/assets/js/isotope.pkgd.min.js') }}"></script>
  	<script src="{{ asset('theme/maxino/assets/js/functions.js') }}"></script>
  	<script src="{{ asset('theme/maxino/assets/js/wow.min.js') }}"></script>
    <!-- Theia Post Slider -->
    <script src="{{ asset('theme/maxino/assets/js/theia-sticky-sidebar.js') }}"></script>
    <script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyD0_px9okUgbB-KUyNvW59nfVKvU3tAmx0"></script>

    <script>
      	//Home Page map
        var styleArray = [
          {
            "featureType": "water",
            "elementType": "geometry.fill",
            "stylers": [
              {
                "color": "#f8f8f8"
              }
            ]
          }
        ];
        var mapOptions = {
          center: new google.maps.LatLng(23.739257,90.3869883),
          zoom: 15,
          styles: styleArray,
          scrollwheel: false,
          backgroundColor: 'transparent',
            mapTypeControl: false,          
          mapTypeId: google.maps.MapTypeId.ROADMAP
        };
        var map = new google.maps.Map(document.getElementById("gmap"),mapOptions);        
        var myLatlng = new google.maps.LatLng(23.739257,90.3869883);   
     	var marker = new google.maps.Marker({
		    position: myLatlng,
	      	map: map,
	      	icon: {
	        	url: "{{ asset('theme/maxino/assets/images/map/01.png')}}"
	      	}
	    });
    </script>
</body>
</html>