<!DOCTYPE html>
<html lang="en">


<head>
	<meta charset="UTF-8">
	<meta name="keywords" content="Digital marketing agency, Digital marketing company, Digital marketing services">
	<meta name="author" content="creativegigs">
	<meta name="description"
		content="Rogan creative multipurpose is a beautiful website template designed for SEO & Digital Agency websites.">
	<meta name='og:image' content='images/home/ogg.png'>
	<!-- For IE -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<!-- For Resposive Device -->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- For Window Tab Color -->
	<!-- Chrome, Firefox OS and Opera -->
	<meta name="theme-color" content="#233D63">
	<!-- Windows Phone -->
	<meta name="msapplication-navbutton-color" content="#233D63">
	<!-- iOS Safari -->
	<meta name="apple-mobile-web-app-status-bar-style" content="#233D63">
	<title>Rogan - Creative Multi-Purpose HTML Template</title>
	<!-- Favicon -->
	<link rel="icon" type="image/png" sizes="56x56" href="{{asset('assets/images/fav-icon/icon.png')}}">
	<!-- Main style sheet -->
	<link rel="stylesheet" type="text/css" href="{{asset('assets/css/style.css')}}">
	<!-- responsive style sheet -->
	<link rel="stylesheet" type="text/css" href="{{asset('assets/css/responsive.css')}}">

	<!-- Fix Internet Explorer ______________________________________-->
	<!--[if lt IE 9]>
			<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
			<script src="vendor/html5shiv.js"></script>
			<script src="vendor/respond.js"></script>
		<![endif]-->
</head>



<body>
	<div class="main-page-wrapper">


    @include('frontend.common.header')
    @yield('mainsection')
    @include('frontend.common.footer')

<!-- Optional JavaScript _____________________________  -->

		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<!-- jQuery -->
		<script src="{{asset('assets/vendor/jquery.2.2.3.min.js')}}"></script>
		<!-- Popper js -->
		<script src="{{asset('assets/vendor/popper.js/popper.min.js')}}"></script>
		<!-- Bootstrap JS -->
		<script src="{{asset('assets/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
		<!-- menu  -->
		<script src="{{asset('assets/vendor/mega-menu/assets/js/custom.js')}}"></script>
		<!-- AOS js -->
		<script src="{{asset('assets/vendor/aos-next/dist/aos.js')}}"></script>
		<!-- WOW js -->
		<script src="{{asset('assets/vendor/WOW-master/dist/wow.min.js')}}"></script>
		<!-- owl.carousel -->
		<script src="{{asset('assets/vendor/owl-carousel/owl.carousel.min.js')}}"></script>
		<!-- js count to -->
		<script src="{{asset('assets/vendor/jquery.appear.js')}}"></script>
		<script src="{{asset('assets/vendor/jquery.countTo.js')}}"></script>
		<!-- Fancybox -->
		<script src="{{asset('assets/vendor/fancybox/dist/jquery.fancybox.min.js')}}"></script>
		<script
			src="../../../../translate.google.com/translate_a/elementa0d8.js?cb=googleTranslateElementInit"></script>


		<!-- Theme js -->
		<script src="{{asset('assets/js/lang.js')}}"></script>
		<script src="{{asset('assets/js/theme.js')}}"></script>
	</div> <!-- /.main-page-wrapper -->
</body>


</html>