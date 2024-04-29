@extends('frontend.layout.app')
@section('mainsection')


		<!-- 
			=============================================
				Theme Main Banner One
			============================================== 
			-->
			<div id="theme-banner-one">
				<div class="illustration wow zoomIn animated" data-wow-delay="1s" data-wow-duration="2s">
					<img src="{{asset('assets/images/shape/banner-shape1.svg')}}" alt="">
					<img src="{{asset('assets/images/shape/banner-shape2.svg')}}" alt="" class="shape-one wow fadeInDown animated"
						data-wow-delay="1.8s">
					<img src="{{asset('assets/images/shape/banner-shape3.svg')}}" alt="" class="shape-two wow fadeInUp animated"
						data-wow-delay="2.7s">
				</div>
				<img src="{{asset('assets/images/shape/oval-1.svg')}}" alt="" class="oval-one">
				<img src="{{asset('assets/images/shape/shape-1.svg')}}" alt="" class="shape-three">
				<img src="{{asset('assets/images/shape/shape-55.svg')}}" alt="" class="shape-four">
				<img src="{{asset('assets/images/shape/shape-56.svg')}}" alt="" class="shape-five">
				<img src="{{asset('assets/images/shape/shape-57.svg')}}" alt="" class="shape-six">
				<img src="{{asset('assets/images/shape/shape-58.svg')}}" alt="" class="shape-seven">
				<img src="{{asset('assets/images/shape/shape-59.svg')}}" alt="" class="shape-eight">
				<img src="{{asset('assets/images/shape/shape-60.svg')}}" alt="" class="shape-nine">
				<img src="{{asset('assets/images/shape/shape-61.svg')}}" alt="" class="shape-ten">
				<img src="{{asset('assets/images/shape/shape-62.svg')}}" alt="" class="shape-eleven">
				<div class="container">
					<div class="main-wrapper">
						<div class="slogan wow fadeInDown animated" data-wow-delay="0.2s"><span>70% Off</span> for first 3
							months</div>
						<h1 class="main-title wow fadeInUp animated" data-wow-delay="0.4s">Digital Agency <br>with
							Excellence <br>Services.</h1>
						<p class="sub-title wow fadeInUp animated" data-wow-delay="0.9s">The 3 golden rules professional
							graphic designer don’t <br> want you to know about.</p>
						<ul class="button-group lightgallery">
							<li><a href="about-us-standard.html"
									class="more-button solid-button-one wow fadeInLeft animated" data-wow-delay="1.5s">More
									About us <i class="fa fa-angle-right icon-right" aria-hidden="true"></i></a></li>
	
							<li><a data-fancybox href="https://www.youtube.com/embed/aXFSJTjVjw0"
									class="fancybox video-button-one wow fadeInRight animated" data-wow-delay="1.5s">See
									live demo. <i class="flaticon-play-button icon-right"></i></a></li>
						</ul>
					</div> <!-- /.main-wrapper -->
				</div> <!-- /.container -->
			</div> <!-- /#theme-banner-one -->
	
	
			<!-- 
				=============================================
					What WE Do
				============================================== 
				-->
			<div class="agn-what-we-do pt-150 pb-200">
				<img src="{{asset('assets/images/shape/shape-63.svg')}}" alt="" class="shape-one" data-aos="fade-right">
				<img src="{{asset('assets/images/shape/shape-56.svg')}}" alt="" class="shape-two">
				<div class="container">
					<div class="theme-title-one text-center">
						<div class="upper-title">What We Do</div>
						<h2 class="main-title">The things motivates me is common <br>form of motivation.</h2>
					</div> <!-- /.theme-title-one -->
	
					<div class="row">
						<div class="col-lg-4 col-md-6">
							<div class="single-block">
								<div class="icon">
									<img src="{{asset('assets/images/shape/shape-2.svg')}}" alt="" class="bg">
									<img src="{{asset('assets/images/icon/icon1.svg')}}" alt="" class="shape" data-aos="zoom-in-down">
								</div>
								<h5 class="title">Strategy & Research.</h5>
								<p>Lorem ipsum dolor si amet, an dus situ sint pertinacia constituto, mir dignsius quo
									great.</p>
								<a href="#" class="more-button">More About Strategy & Research</a>
							</div> <!-- /.single-block -->
						</div>
	
						<div class="col-lg-4 col-md-6">
							<div class="single-block">
								<div class="icon">
									<img src="{{asset('assets/images/shape/shape-2.svg')}}" alt="" class="bg">
									<img src="{{asset('assets/images/icon/icon2.svg')}}" alt="" class="shape" data-aos="zoom-in-down">
								</div>
								<h5 class="title">Design & Development.</h5>
								<p>Lorem ipsum dolor si amet, an dus situ sint pertinacia constituto, mir dignsius quo
									great.</p>
								<a href="#" class="more-button">More About Design & Development</a>
							</div> <!-- /.single-block -->
						</div>
	
						<div class="col-lg-4 co-12 d-md-none d-lg-block">
							<div class="single-block">
								<div class="icon">
									<img src="{{asset('assets/images/shape/shape-2.svg')}}" alt="" class="bg">
									<img src="{{asset('assets/images/icon/icon3.svg')}}" alt="" class="shape" data-aos="zoom-in-down">
								</div>
								<h5 class="title">Managment & Marketing.</h5>
								<p>Lorem ipsum dolor si amet, an dus situ sint pertinacia constituto, mir dignsius quo
									great.</p>
								<a href="#" class="more-button">More About Managment & Marketing</a>
							</div> <!-- /.single-block -->
						</div>
					</div>
				</div> <!-- /.container -->
			</div> <!-- /.agn-what-we-do -->
	
	
			
			<!-- 
			=============================================
				Our Service Minimal
			============================================== 
			-->
			<div class="our-service service-minimal pt-150 pb-100">
				<div class="container">
					<div class="theme-title-three text-center mb-200">
						<h2 class="title">We’v been providing our services with proud since 1980.</h2>
						<p>consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,</p>
					</div> <!-- /.theme-title-three -->

					<div class="demo-container-1100">
						<div class="row">
							<div class="col-lg-6">
								<div class="service-block" data-aos="fade-up">
									<div class="icon-box"><img src="{{asset('assets/images/icon/icon48.svg')}}" alt=""></div>
									<h2 class="service-title"><a href="{{route('courses')}}">Project Based, Live Learning</a></h2>
									<p>Become job ready by applying what you learn and build real life projects.</p>
									<a href="#" class="read-more"><i class="flaticon-next-1"></i></a>
								</div> <!-- /.service-block -->
							</div>
							<div class="col-lg-6">
								<div class="service-block" data-aos="fade-up" data-aos-delay="100">
									<div class="icon-box"><img src="{{asset('assets/images/icon/icon49.svg')}}" alt=""></div>
									<h2 class="service-title"><a href="{{route('courses')}}">Dedicated career services.</a></h2>
									<p>Resume & interview praps with industry experts & exclusive job board.</p>
									<a href="#" class="read-more"><i class="flaticon-next-1"></i></a>
								</div> <!-- /.service-block -->
							</div>
							<div class="col-lg-6">
								<div class="service-block" data-aos="fade-up">
									<div class="icon-box"><img src="{{asset('assets/images/icon/icon50.svg')}}" alt=""></div>
									<h2 class="service-title"><a href="{{route('courses')}}">100% Placement Assistance</a></h2>
									<p>We have Dedicated job/Placeman! Team Who Help Students Get a Better</p>
									<a href="#" class="read-more"><i class="flaticon-next-1"></i></a>
								</div> <!-- /.service-block -->
							</div>
							<div class="col-lg-6">
								<div class="service-block" data-aos="fade-up" data-aos-delay="100">
									<div class="icon-box"><img src="{{asset('assets/images/icon/icon51.svg')}}" alt=""></div>
									<h2 class="service-title"><a href="{{route('courses')}}">Certificate After Completion</a></h2>
									<p>Get Certified Alter Completion of Our Courses</p>
									<a href="#" class="read-more"><i class="flaticon-next-1"></i></a>
								</div> <!-- /.service-block -->
							</div>
							<div class="col-lg-6">
								<div class="service-block" data-aos="fade-up">
									<div class="icon-box"><img src="{{asset('assets/images/icon/icon52.svg')}}" alt=""></div>
									<h2 class="service-title"><a href="{{route('courses')}}">FREE Videos & PDFs</a></h2>
									<p>Get All The Resources of all Course Absolutely FREE.</p>
									<a href="#" class="read-more"><i class="flaticon-next-1"></i></a>
								</div> <!-- /.service-block -->
							</div>
							<div class="col-lg-6">
								<div class="service-block" data-aos="fade-up" data-aos-delay="100">
									<div class="icon-box"><img src="{{asset('assets/images/icon/icon53.svg')}}" alt=""></div>
									<h2 class="service-title"><a href="{{route('courses')}}">Low Cost, High Value</a></h2>
									<p>You will get all Premium courses with Lowest Prices</p>
									<a href="#" class="read-more"><i class="flaticon-next-1"></i></a>
								</div> <!-- /.service-block -->
							</div>
						</div> <!-- /.row -->
					</div> <!-- /.demo-container-1100 -->
				</div> <!-- /.container -->
			</div> <!-- /.our-service -->


			<!-- 
				=============================================
					Theme Counter
				============================================== 
				-->
			<div class="agn-counter-section">
				<img src="{{asset('assets/images/shape/shape-55.svg')}}" alt="" class="shape-one">
				<img src="{{asset('assets/images/shape/shape-59.svg')}}" alt="" class="shape-two">
				<img src="{{asset('assets/images/shape/shape-61.svg')}}" alt="" class="shape-three">
				<div class="container">
					<div class="main-wrapper">
						<div class="theme-title-one text-center">
							<h2 class="main-title">We completed 1500+ Projects Yearly <br>Successfully & counting</h2>
						</div> <!-- /.theme-title-one -->
	
						<div class="counter-wrapper">
							<div class="row">
								<div class="col-sm-4">
									<div class="single-counter-box">
										<h2 class="number"><span class="timer" data-from="0" data-to="16" data-speed="1200"
												data-refresh-interval="5">0</span>k</h2>
										<p>Global Customer</p>
									</div> <!-- /.single-counter-box -->
								</div>
								<div class="col-sm-4">
									<div class="single-counter-box">
										<h2 class="number"><span class="timer" data-from="0" data-to="500" data-speed="1200"
												data-refresh-interval="5">0</span>+</h2>
										<p>Completed Projects</p>
									</div> <!-- /.single-counter-box -->
								</div>
								<div class="col-sm-4">
									<div class="single-counter-box">
										<h2 class="number"><span class="timer" data-from="0" data-to="460" data-speed="1200"
												data-refresh-interval="5">0</span>+</h2>
										<p>Experts Worker</p>
									</div> <!-- /.single-counter-box -->
								</div>
							</div>
						</div> <!-- /.counter-wrapper -->
					</div> <!-- /.main-wrapper -->
	
					<div class="bottom-banner">
						<div class="clearfix">
							<div class="text">
								<h3 class="title">Have any question about us?</h3>
								<p>Dont’t hesitate to contact us.</p>
							</div>
							<a href="{{route('contact')}}" class="contact solid-button-one">Contact us</a>
						</div>
					</div>
				</div> <!-- /.container -->
			</div> <!-- /.agn-counter-section -->
	
	
			<!-- 
				=============================================
					Our Gallery
				============================================== 
				-->
			<div class="agn-our-gallery">
				<img src="{{asset('assets/images/shape/shape-62.svg')}}" alt="" class="shape-one">
				<img src="{{asset('assets/images/shape/shape-55.svg')}}" alt="" class="shape-two">
				<img src="{{asset('assets/images/shape/shape-61.svg')}}" alt="" class="shape-three">
				<div class="container">
					<div class="theme-title-one">
						<h2 class="main-title">Check some of our <br>Recent work.</h2>
						<p class="bottom-title">Click the below button to check all of our work.</p>
					</div> <!-- /.theme-title-one -->
				</div> <!-- /.container -->
				<div class="main-wrapper">
					<a href="product-full-width.html" class="view-gallery">View Gallery</a>
					<div class="gallery-slider lightgallery">
						<div class="item">
							<div class="img-box">
								<img src="{{asset('assets/images/portfolio/1.jpg')}}" alt="">
								<div class="hover-content">
									<a href="images/portfolio/1.jpg" class="icon zoom fancybox" data-fancybox="images"
										data-caption="My caption">+</a>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="img-box">
								<img src="{{asset('assets/images/portfolio/2.jpg')}}" alt="">
								<div class="hover-content">
									<a href="{{asset('assets/images/portfolio/2.jpg')}}" class="icon zoom fancybox" data-fancybox="images"
										data-caption="My caption">+</a>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="img-box">
								<img src="{{asset('assets/images/portfolio/3.jpg')}}" alt="">
								<div class="hover-content">
									<a href="{{asset('assets/images/portfolio/3.jpg')}}" class="icon zoom fancybox" data-fancybox="images"
										data-caption="My caption">+</a>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="img-box">
								<img src="{{asset('assets/images/portfolio/4.jpg')}}" alt="">
								<div class="hover-content">
									<a href="{{asset('assets/images/portfolio/4.jpg')}}" class="icon zoom fancybox" data-fancybox="images"
										data-caption="My caption">+</a>
								</div>
							</div>
						</div>
					</div> <!-- /.gallery-slider -->
				</div> <!-- /.main-wrapper -->
			</div> <!-- /.agn-our-gallery -->
	
	
	
	
	
			<!--
				=====================================================
					Testimonial
				=====================================================
				-->
			<div class="agn-testimonial">
				<div class="shape-box">
					<img src="{{asset('assets/images/shape/4.png')}}" alt="">
					<img src="{{asset('assets/images/home/2.jpg')}}" alt="" class="people">
					<img src="{{asset('assets/images/home/3.jpg')}}" alt="" class="people">
					<img src="{{asset('assets/images/home/4.jpg')}}" alt="" class="people">
					<img src="{{asset('assets/images/home/5.jpg')}}" alt="" class="people">
					<img src="{{asset('assets/images/home/6.jpg')}}" alt="" class="people">
					<img src="{{asset('assets/images/home/7.jpg')}}" alt="" class="people">
					<img src="{{asset('assets/images/shape/shape-6.svg')}}" alt="" class="shape-one">
				</div>
				<img src="{{asset('assets/images/shape/shape-66.svg')}}" alt="" class="shape-two" data-aos="fade-left">
				<div class="container clearfix">
					<div class="main-content">
						<div class="theme-title-one">
							<div class="upper-title">Testimonials</div>
							<h2 class="main-title">Check what’s our client say about us!</h2>
						</div> <!-- /.theme-title-one -->
	
						<div class="agn-testimonial-slider">
							<div class="item">
								<p>Having a home based business is a wonderful asset to your life. The problem still stands,
									when it comes timeadvertise your business for a cheap cost. I know you have looked for
									to answer everywhere; I am here to share a few simple creative ways,</p>
								<div class="author-info clearfix">
									<img src="{{asset('assets/images/home/2.jpg')}}" alt="" class="author-img">
									<div class="name-info">
										<h6 class="name">Rashed kabir</h6>
										<span>Designer</span>
									</div>
								</div>
							</div>
							<div class="item">
								<p>Having a home based business is a wonderful asset to your life. The problem still stands,
									when it comes timeadvertise your business for a cheap cost. I know you have looked for
									to answer everywhere; I am here to share a few simple creative ways,</p>
								<div class="author-info clearfix">
									<img src="{{asset('assets/images/home/3.jpg')}}" alt="" class="author-img">
									<div class="name-info">
										<h6 class="name">Zubayer hasan</h6>
										<span>Developer</span>
									</div>
								</div>
							</div>
						</div> <!-- /.agn-testimonial-slider -->
					</div> <!-- /.main-content -->
				</div> <!-- /.container -->
			</div> <!-- /.agn-testimonial -->
	
	
	
	
	

@endsection