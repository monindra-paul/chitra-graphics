@extends('frontend.layout.app')
@section('mainsection')


			<div class="solid-inner-banner">
				<h2 class="page-title">About us.</h2>
				<ul class="page-breadcrumbs">
					<li><a href="index.html">Home</a></li>
					<li><i class="fa fa-angle-right" aria-hidden="true"></i></li>
					<li>About us</li>
				</ul>
			</div> <!-- /.solid-inner-banner -->







			<div class="agn-about-us">
				<img src="{{asset('assets/images/shape/shape-61.svg')}}" alt="" class="shape-one">
				<img src="{{asset('assets/images/shape/shape-64.svg')}}" alt="" class="shape-two" data-aos="fade-left">
				<img src="{{asset('assets/images/shape/shape-65.svg')}}" alt="" class="shape-three" data-aos="fade-right">
				<img src="{{asset('assets/images/shape/shape-60.svg')}}" alt="" class="shape-four">
				<div class="container">
					<div class="row">
						<div class="col-lg-6 order-lg-last">
							<div class="text-wrapper">
								<div class="theme-title-one">
									<div class="upper-title">About us</div>
									<h2 class="main-title">Leading graphics designing institute in Tarakeswar.</h2>
								</div> <!-- /.theme-title-one -->
								<p>"Welcome to Chitra Graphic & Textile Hub. We are the leading
									graphic design institute based in Tarakeswar, specializing in
									Advanced Graphic Design. By understanding the creativity
									level of each student, we assist them in enhancing their skills.
									We start from the basics so that even those without a creative
									background can become proficient graphic designers by 
									grasping the concepts. Additionally, we provide placement 
									assistance to our students. We have established contacts with
									numerous garments and textiles companies, and they actively
									hire candidates based on their job roles."
									</p>
								{{-- <p class="quote">Lorem ipsum dolor sit amet, hendrerit omittantur mel et, est ut vidit
									animal iracundia luis.</p> --}}
								{{-- <div class="author"><span class="name">Rashed Kabir, </span>CEO CreativeGigs</div>
								<img src="{{asset('assets/images/shape/signature.png')}}" alt=""> --}}
							</div>
						</div>
						<div class="col-lg-6 order-lg-first">
							<div class="img-box">
								<img src="{{asset('assets/images/chitra/about.webp')}}" alt="" class="main-img">
							</div>
						</div>
					</div>
				</div> <!-- /.container -->
				<a href="{{url('/contact-us')}}" class="learn-more theme-button-two" data-aos="fade-left">Contact Us<i
						class="fa fa-angle-right icon-right" aria-hidden="true"></i></a>
			</div> <!-- /.agn-about-us -->



		
			<!--
			=====================================================
				Video Action Banner One
			=====================================================
			-->
			<div class="video-action-banner-one mt-95">
				<div class="overlay">
					<a data-fancybox href="https://www.youtube.com/embed/aXFSJTjVjw0" class="video-button fancybox"><img src="{{asset('assets/images/icon/icon47.svg')}}" alt=""></a>
				</div> <!-- /.overlay -->
			</div> <!-- /.video-action-banner-one -->





@endsection